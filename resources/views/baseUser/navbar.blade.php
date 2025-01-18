<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0a4275;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EduReach</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(Auth::check())
          @if(Auth::user()->role === 'teacher')
          <li class="nav-item">
            <a class="nav-link" href="{{route('tchomeER')}}">@lang('edu.nav-home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tcaboutER')}}">@lang('edu.nav-about')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/teacher-dashboard">@lang('edu.nav-uinfo')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teacher.courses.index')}}">@lang('edu.nav-course')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('forum.index')}}">@lang('edu.nav-forum')</a>
          </li>
          @elseif(Auth::user()->role === 'learner')  
          <li class="nav-item">
            <a class="nav-link" href="{{route('lnhomeER')}}">@lang('edu.nav-home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('lnaboutER')}}">@lang('edu.nav-about')</a>
          </li>
          <li class="nav-item">                        
            <a class="nav-link" href="/learner-dashboard">@lang('edu.nav-uinfo')</a>      
          </li>     
          <li class="nav-item">
            <a class="nav-link" href="{{route('learner.courses.index')}}">@lang('edu.nav-course')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('forum.index')}}">@lang('edu.nav-forum')</a>
          </li>
          @endif                          
        @endif                                                                              
        <li class="nav-item">
          <form id="logout-form" action="{{route('logout')}}" method="POST" class="">
            @csrf
            <button type="submit" class="btn btn-danger" style="margin-left: 10px">@lang('edu.nav-logout')</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>