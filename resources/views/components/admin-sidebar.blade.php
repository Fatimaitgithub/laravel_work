<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{ url('/dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="Logo Not Found" height="17">
            </span>
        </a>
        <a href="{{ url('/dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="Logo Not Found" height="17">
            </span>
            22 </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/dashboard') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="menu-title"><span data-key="t-menu">Activities</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('#sidebarCompany') }}" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarCompany">
                        <i class="fa-solid fa-list-check"></i> <span data-key="t-dashboards">Company</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCompany">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/company/create') }}" class="nav-link" data-key="t-analytics">
                                    Add Company</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/company') }}" class="nav-link" data-key="t-crm">
                                    Manage Companies </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('#sidebarEmployee') }}" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarEmployee">
                        <i class="fa-solid fa-bars-progress"></i> <span data-key="t-dashboards">Employee</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEmployee">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/employee/create') }}" class="nav-link" data-key="t-analytics">
                                    Add Employee</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/employee') }}" class="nav-link" data-key="t-crm">
                                    Manage Employees </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
