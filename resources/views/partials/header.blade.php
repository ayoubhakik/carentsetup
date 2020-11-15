<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <strong>
                            <a href="./index.html">CaRent</a>
                        </strong>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li class="{{ Request::is('index') ? 'active' : '' }}"><a href="{{ asset('index') }}">Home</a></li>
                                <li class="{{ Request::is('car') ? 'active' : '' }}"><a href="{{ asset('car') }}">Cars</a></li>                                
                                <li class="{{ Request::is('about') ? 'active' : '' }}" ><a href="{{ asset('about') }}">About</a></li>
                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ asset('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                                <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                            </div>
                            <a href="#" class="primary-btn">Add Car</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>