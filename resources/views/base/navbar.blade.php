<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0a4275;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EduReach</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('homeER')}}">@lang('edu.nav-home')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutER')}}">@lang('edu.nav-about')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('view.articles')}}">@lang('edu.nav-articles')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('donate')}}">@lang('edu.nav-donate')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">@lang('edu.nav-login')</a>
        </li>
      </ul>
    </div>
  </div>
</nav>