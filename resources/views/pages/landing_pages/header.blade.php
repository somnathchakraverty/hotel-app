<header id="topnav" class="defaultscroll sticky navbar-white-bg">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="">
            <img src="{{asset("logo.jpeg")}}" height="50" width="100" class="logo-light-mode" alt="">
            <img src="{{asset("logo.jpeg")}}" height="50" width="100" class="logo-dark-mode" alt="">
        </a>
        <!-- Logo End -->

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                Already a partner ?<a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                     Sign in
                </a>
            </li>


        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">


            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>
