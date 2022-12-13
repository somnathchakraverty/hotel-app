<header id="topnav" class="defaultscroll sticky navbar-white-bg">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="" id="href-logo-header">
            <img src="{{asset("logo_thumbnail.png")}}" height="50" width="100" class="logo-light-mode" alt="">
            <img src="{{asset("logo_thumbnail.png")}}" height="50" width="100" class="logo-dark-mode" alt="">
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
            <li class="list-inline-item mb-0" id="already-partner-menu-id">
                Already a partner ?<a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                     Sign in
                </a>
            </li>
            <li class="list-inline-item mb-0" id="join-us-id">
                 <a href="{{url("join-us")}}"  style="
    height: 40px;
    padding-left: 25px;
    margin-left: 10px;
" class="btn btn-primary" data-bs-toggle="offcanvas"  aria-controls="offcanvasRight">
                  Join Us
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
