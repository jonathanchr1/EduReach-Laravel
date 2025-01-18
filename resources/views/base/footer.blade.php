<footer class="text-center text-white" style="background-color: #0a4275;">
    <div class="container p-4 pb-0">
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          @lang('edu.footer-lang')
          <a class="text-white" href=""></a>
          <a class="btn btn-primary" href="{{route('change.language', ['locale' => 'en'])}}" style="margin-left: 10px; margin-right: 10px">English</a>
          <a class="btn btn-primary" href="{{route('change.language', ['locale' => 'id'])}}">Indonesia</a>
          <a class="btn btn-primary" href="{{route('change.language', ['locale' => 'de'])}}" style="margin-left: 10px; margin-right: 10px">Deutsch</a>
        </p>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 EduReach | contact.edureach@gmail.com
      <a class="text-white" href=""></a>
    </div>
</footer>