<header class="site-header" style="background-color: #3caea3;">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-4">
                <a href="{{ url('/welcome') }}" class="site-logo">
                    <img class="hidden-md-down" src="{{url('public')}}/img/umkm.jpg" alt="">
                </a>            
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-rounded" placeholder="Search">  
            </div>
            <div class="col-md-4 justify-content-right">
                {{-- <div class="flex-center position-ref full-height" > --}}
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/welcome') }}">Home</a>
                            @else
                                <div>
                                    <div class="dropdown dropdown-notification notif" >
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <button type="button" class="btn btn-rounded btn-danger">
                                            LOGIN
                                            </button>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification" style="background-color: #3caea3;">
                                            <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                                <div class="row justify-content-center col-md-12">
                                                    <div class="row col-md-12">
                                                        <div class="dropdown-menu-notif-list">
                                                            <div class="dropdown-menu-notif-item">
                                                                <div class="form-group row">
                                                                {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                                                                    <div>
                                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                        @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu-notif-item" style="background-color: #3caea3;">
                                                            <div class="form-group row">
                                                                {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}
                                                                <div>
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu-notif-more">
                                                        <div class="form-group row mb-0">
                                                            <div>
                                                                <button type="submit" class="btn btn-inline btn-danger" style="width: 72%;">
                                                                    {{ __('LOGIN') }}
                                                                </button>
                                                                {{-- @if (Route::has('password.request'))
                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        {{ __('Forgot Your Password?') }}
                                                                    </a>
                                                                @endif --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu-notif-item">
                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}">Register</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                </div>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif --}}
                            @endauth
                        </div>
                    @endif
                </form>   
            </div>
        </div>
    </div><!--.container-fluid-->
</header><!--.site-header-->