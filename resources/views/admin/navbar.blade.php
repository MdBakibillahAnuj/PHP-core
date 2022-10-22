
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="{{ route('users') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                User
            </a>

            {{--                    --}}
            {{--                    <div class="sb-sidenav-menu-heading">Interface</div>--}}
            {{--                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">--}}
            {{--                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>--}}
            {{--                        Layouts--}}
            {{--                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
            {{--                    </a>--}}
            {{--                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">--}}
            {{--                        <nav class="sb-sidenav-menu-nested nav">--}}
            {{--                            <a class="nav-link" href="#">Static Navigation</a>--}}
            {{--                            <a class="nav-link" href="#">Light Sidenav</a>--}}
            {{--                        </nav>--}}
            {{--                    </div>--}}
            {{--                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">--}}
            {{--                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>--}}
            {{--                        abcd--}}
            {{--                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
            {{--                    </a>--}}
            {{--                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">--}}
            {{--                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">--}}
            {{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">--}}
            {{--                                Authentication--}}
            {{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
            {{--                            </a>--}}

            {{--                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">--}}
            {{--                                Error--}}
            {{--                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
            {{--                            </a>--}}
            {{--                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
            {{--                                <nav class="sb-sidenav-menu-nested nav">--}}
            {{--                                    <a class="nav-link" href="#">401 Page</a>--}}
            {{--                                    <a class="nav-link" href="404.html">404 Page</a>--}}
            {{--                                    <a class="nav-link" href="500.html">500 Page</a>--}}
            {{--                                </nav>--}}
            {{--                            </div>--}}
            {{--                        </nav>--}}
            {{--                    </div>--}}
            {{--                    <div class="sb-sidenav-menu-heading">Addons</div>--}}
            {{--                    --}}



            <a class="nav-link" href="{{ url('/food_menu') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-utensils"></i></div>
                Food Manu
            </a>

            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fa fa-edit"></i></div>
                Reservation
            </a>

            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                Chefs
            </a>
        </div>
    </div>
</nav>
