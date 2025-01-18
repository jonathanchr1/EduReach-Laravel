<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article as ArticleModel;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleModel::create([
            'title' => 'Tips Belajar Bahasa Inggris bagi Pemula',
            'image' => 'img/article/artimg-1.jpg',
            'writer' => 'Regina Aulia',
            'body' => 'Bahasa inggris merupakan salah satu bahasa yang paling banyak digunakan di dunia saat ini. Menurut detik.com, saat ini ada lebih dari 1.4 miliar penutur bahasa Inggris di seluruh dunia. Bagi sebagian orang belajar bahasa baru merupakan salah satu cara untuk memanfaatkan waktu terbaik. Tapi, bagi sebagian orang yang lain, belajar bahasa baru terkadang menjadi kesulitan tersendiri. Apalagi belajar bahasa baru saat seseorang sudah dewasa, tantangan akan menjadi lebih sulit menantang. Lalu bagaimana cara-cara agar belajar bahasa Inggris bisa menjadi menyenangkan dan tidak kaku?'
        ]);

        ArticleModel::create([
            'title' => 'Tantangan Indonesia dalam Era Digital',
            'image' => 'img/article/artimg-2.jpg',
            'writer' => 'Jeffrey Wijaya',
            'body' => 'Indonesia menghadapi tantangan besar dalam memenuhi kebutuhan talenta digital yang terus meningkat. Berdasarkan laporan Kementerian Komunikasi dan Informatika (Kominfo), Indonesia membutuhkan 500.000 talenta digital per tahun untuk menutup kesenjangan sekitar 3 juta talenta digital pada 2030. Namun, banyak anak Indonesia masih menghadapi kesulitan dalam menguasai salah satu fondasi penting dari pendidikan STEM (Science, Technology, Engineering, Mathematics), yaitu matematika. Berdasarkan survei Programme for International Student Assessment (PISA) 2018, kemampuan matematika siswa Indonesia berada di peringkat 75 dari 81 negara, dengan 71 persen siswa tidak mencapai kompetensi minimum.'
        ]);

        ArticleModel::create([
            'title' => 'Rahasia Cara Belajar Efektif untuk Kamu',
            'image' => 'img/article/artimg-3.jpg',
            'writer' => 'Baldian Martin',
            'body' => 'Belajar yang efektif membutuhkan beberapa trik agar hasilnya maksimal. Pertama, tentukan tujuan belajar agar memiliki motivasi untuk mencapainya. Selanjutnya, pilih waktu yang tepat untuk belajar, meski singkat, asal konsisten. Belajar di tempat yang nyaman juga penting karena dapat mempengaruhi konsentrasi dan kemampuan otak dalam menyerap informasi. Jangan lupa untuk membuat rangkuman materi dengan kata-kata sendiri, ini membantu dalam mengulang dan memperdalam pemahaman. Selain itu, mengerjakan latihan soal juga merupakan cara yang efektif untuk menguji pemahaman terhadap materi yang dipelajari. Dengan latihan soal, kita bisa mengetahui poin-poin yang belum dikuasai dan perlu dipelajari kembali. Metode ini lebih baik dibandingkan belajar secara terburu-buru. Jadi, dengan menentukan tujuan, waktu, tempat yang tepat, serta melakukan rangkuman dan latihan soal, proses belajar akan lebih efektif dan menyenangkan.'
        ]);

        ArticleModel::create([
            'title' => 'Belajar dengan Teknik Pomodoro',
            'image' => 'img/article/artimg-4.jpg',
            'writer' => 'Tim Admin',
            'body' => 'Teknik Pomodoro adalah metode manajemen waktu yang dapat meningkatkan fokus dan efisiensi dalam belajar. Metode ini melibatkan sesi belajar yang terpisah dengan waktu istirahat yang teratur, biasanya dilakukan dalam interval 25 menit belajar dan 5 menit istirahat. Setiap interval 25 menit disebut satu "Pomodoro", dan setelah empat Pomodoro, istirahat lebih panjang sekitar 15-30 menit. Dengan cara ini, otak tetap segar dan terhindar dari kelelahan, sehingga kualitas belajar tetap terjaga. Penggunaan teknik Pomodoro juga membantu mengurangi prokrastinasi dan meningkatkan disiplin diri. Ketika waktu terbatas, kita cenderung lebih fokus dan memanfaatkan waktu dengan lebih efisien. Selain itu, dengan adanya istirahat yang teratur, kita dapat menghindari rasa stres dan merasa lebih termotivasi untuk melanjutkan belajar. Teknik ini sangat cocok bagi mereka yang mudah terganggu atau merasa kesulitan untuk mempertahankan fokus dalam waktu lama, menjadikannya solusi praktis untuk belajar dengan produktif.'
        ]);
    }
}
