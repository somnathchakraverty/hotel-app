<nav class="navbar navbar-expand-lg custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar"
            aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            @if(auth()->user()->role_id == 3)
                <li class="nav-item dropdown">
                    <a class="nav-link   " href="{{url("channel-manager-dashboard")}}" id="dashboardsDropdown"
                       role="button">
                        <i class="icon-devices_other nav-icon"></i>
                        Dashboard
                    </a>

                </li>

                @if(getCompanyBusinessTypes(auth()->user()->id,1)[0]->business_opted > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-people_outline nav-icon"></i>
                            Property
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                            <li>
                                <a class="dropdown-item" href="">Add Property</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(getCompanyBusinessTypes(auth()->user()->id,2)[0]->business_opted > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-terrain nav-icon"></i>
                            Safari
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                            <li>
                                <a class="dropdown-item" href="">Add</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(getCompanyBusinessTypes(auth()->user()->id,3)[0]->business_opted > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-camera nav-icon"></i>
                            Holiday/Tour Packages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                            <li>
                                <a class="dropdown-item" href="">Add</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(getCompanyBusinessTypes(auth()->user()->id,4)[0]->business_opted > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-local_taxi nav-icon"></i>
                            Transfers
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                            <li>
                                <a class="dropdown-item" href="">Add</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(getCompanyBusinessTypes(auth()->user()->id,5)[0]->business_opted > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class=" nav-icon icon-flight_takeoff"></i>
                            Flights
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                            <li>
                                <a class="dropdown-item" href="">Add</a>
                            </li>
                        </ul>
                    </li>
                @endif
            @endif
                @if(auth()->user()->role_id == 2)
                    <li class="nav-item dropdown">
                        <a class="nav-link   " href="{{url("channel-manager-dashboard")}}" id="dashboardsDropdown"
                           role="button">
                            <i class="icon-devices_other nav-icon"></i>
                            Dashboard
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link   " href="{{url("manage-channel")}}" id="manage-channel"
                           role="button">
                            <i class="icon-devices_other nav-icon"></i>
                            Manage Channels
                        </a>

                    </li>
                @endif
        </ul>
    </div>
</nav>
