
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
                        <li><a href="masonry.html">Events</a></li>
                        <li><a href="galleries.html">Gallery</a></li>
                        <li class="parent"><a href="#">menu</a>
                            <ul>
                                <li><a href="menu.html">Classic Menu</a></li>
                                <li><a href="menu-toggle.html">Toggle Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li>                     
                            @auth
                                <li ><a href="{{route('frontend.user.dashboard')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}">{{ __('navs.frontend.dashboard') }}</a></li>
                            @endauth
                
                            @guest
                                <li ><a href="{{route('frontend.auth.login')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.login')) }}">{{ __('navs.frontend.login') }}</a></li>
                
                                @if (config('access.registration'))
                                    <li ><a href="{{route('frontend.auth.register')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.register')) }}">{{ __('navs.frontend.register') }}</a></li>
                                @endif
                            @else
                                <li class="parent">
                                    <ul>
                                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            {{ $logged_in_user->name }}
                                        </a> 
                                        @can('view backend')
                                            <li><a href="{{ route('admin.dashboard') }}" class="dropdown-item">{{ __('navs.frontend.user.administration') }}</a></li>
                                        @endcan              
                                        <li><a href="{{ route('frontend.user.account') }}" class="dropdown-item {{ active_class(Active::checkRoute('frontend.user.account')) }}">{{ __('navs.frontend.user.account') }}</a></li>
                                        <li><a href="{{ route('frontend.auth.logout') }}" class="dropdown-item">{{ __('navs.general.logout') }}</a></li>
                                        </div>
                                    </ul>
                                </li>
                            @endguest
                
                            <li class="nav-item"><a href="{{route('frontend.contact')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.contact')) }}">{{ __('navs.frontend.contact') }}</a></li>  
                        </li>
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
