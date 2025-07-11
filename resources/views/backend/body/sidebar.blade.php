<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Website Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('read_home')}}">Home</a>
                                    <a class="nav-link" href="{{route('read_about')}}">About</a>
                                    <a class="nav-link" href="{{route('read_service')}}">Services</a>
                                    <a class="nav-link" href="{{route('read_portfolio')}}">Portfolio</a>
                                    <a class="nav-link" href="{{route('read_team')}}">Team</a>
                                    <a class="nav-link" href="{{route('read_contact')}}">Contact</a>
                                    <a class="nav-link" href="{{route('read_formcontact')}}">Form Contact</a>
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="{{route('read_subscriber')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Subscribers
                            </a>
                            <a class="nav-link" href="{{route('read_candidate')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Candidates
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>