
<div class="site">
    <!-- Main sidebar -->
    <div class="main-sidebar">
        <div class="table">
            
            <!-- Header -->
            <header class="header">
                <div class="logo">
                    <a href="{{ route('frontend.index') }}">
                        <img alt="Loyalé" src="img/frontend/logo.png" class="desktop visible-desktop">
                        <img alt="Loyalé" src="img/frontend/mobile-logo.png" class="mobile hidden-desktop">
                    </a>
                </div>
            </header>

            <!-- Main menu -->
            <div class="middle">
                <div class="main-nav cell">
                    <span class="horizontal-line"></span>
                    <ul class="menu">
                        <li class="active"><a href="{{ route('frontend.index') }}">Home</a></li>
                        <li><a href="{{ route('frontend.event') }}">Events</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li class="parent"><a href="#">menu</a>
                            <ul>
                                <li><a href="{{ route('frontend.menu.clasic') }}">Classic Menu</a></li>
                                <li><a href="{{ route('frontend.menu.togle') }}">Toggle Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('frontend.blog') }}">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>         
                        <li><a href="{{route('frontend.contact')}}">{{ __('navs.frontend.contact') }} 2</a></li>  
                        @guest
                            <li><a href="{{route('frontend.auth.login')}}" >{{ __('navs.frontend.login') }}</a></li>
            
                            @if (config('access.registration'))
                                <li ><a href="{{route('frontend.auth.register')}}">{{ __('navs.frontend.register') }}</a></li>
                            @endif
                        @else
                        <li class="parent"><a href="#">Admin</a>
                            <ul>
                                <li><a href="#">Welkome: 
                                    {{ $logged_in_user->name }}
                                </a> </li>
                                @can('view backend')
                                    <li><a href="{{ route('admin.dashboard') }}" >{{ __('navs.frontend.user.administration') }}</a></li>
                                @endcan              
                                <li><a href="{{ route('frontend.user.account') }}" >{{ __('navs.frontend.user.account') }}</a></li>
                                <li><a href="{{ route('frontend.auth.logout') }}">{{ __('navs.general.logout') }}</a></li>
                                </div>
                            </ul>
                        </li>
                        @endguest
                        
                    </ul>
                    <span class="horizontal-line"></span>
                </div>	
            </div>

            <!-- Footer -->
            <footer class="footer">
                <ul class="social-icons">
                    <li><a href="https://plus.google.com/" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="https://facebook.com/" target="_blank"><span class="fa fa-facebook-f"></span></a></li>
                    <li><a href="https://pinterest.com/" target="_blank"><span class="fa fa-pinterest-p"></span></a></li>
                </ul>
                <span class="horizontal-line"></span>
                <p class="copyrights"><a href="http://www.seventhemes.com" target="_blank">Loyalé</a> © 2016</p>
            </footer>
        </div>
        
        <!-- Mobile menu - toggle button -->
        <button class="menu-button mobile-toggle"><span></span></button>
    </div>

</div>
