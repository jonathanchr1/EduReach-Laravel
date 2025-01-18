<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Midtrans\Config;
use Midtrans\Snap;

class DonationController extends Controller
{
    public function index()
    {
        return view('donate');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
            'message' => 'nullable|string',
        ]);

        $donation = Donation::create([
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'message' => $request->message,
        ]);

        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => 'DON-' . $donation->id,
                'gross_amount' => $donation->amount,
            ],
            'customer_details' => [
                'first_name' => $donation->name,
                'email' => $donation->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);
        return view('donate', ['snapToken' => $snapToken]);
    }

    public function finish(Request $request)
    {
        return view('finish', ['result' => $request->all()]);
    }
}
