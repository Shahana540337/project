<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$setting->title}}</title>

    <!-- Favicons -->
    <link href="{{ asset(('images/settings/'.$setting->logo)) }}" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

  <section class="header">
      <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
          <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('images/settings/'.$setting->logo)}}" alt="logo" style="height:60px; width:100%;">

                </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link {{'/'==request()->path()?'active':''}} " aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'banner'==request()->path()?'active':''}}" href="{{url('/banner')}}">Banner</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'about'==request()->path()?'active':''}}" href="{{url('/about')}}">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'aboutSkill'==request()->path()?'active':''}}" href="{{url('/aboutSkill')}}">About_Skill</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'service-index'==request()->path()?'active':''}}" href="{{url('/service-index')}}">Services</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'portfolio-index'==request()->path()?'active':''}}" href="{{url('/portfolio-index')}}">Portfolios</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'blog-index'==request()->path()?'active':''}}" href="{{url('/blog-index')}}">Blogs</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'blogCategory-index'==request()->path()?'active':''}}" href="{{url('/blogCategory-index')}}">Blog_Categorys</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{'contact-index'==request()->path()?'active':''}}" href="{{url('/contact-index')}}">Contact</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{Auth::user()->name}}
                          </a>
                          <ul class="dropdown-menu">
                            
                          <li><a class="dropdown-item" href="{{url('/setting')}}">Account Setting</a></li>
                              <form method="POST" action="{{ route('logout') }}">@csrf
                                  <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a></li>
                              </form>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </section>

  @yield('content')
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
