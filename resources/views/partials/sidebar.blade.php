<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/admin/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('galeri.index') }}">Galeri</a>
                                </li>
                                <li>
                                    <a href="{{ route('mobil.index') }}">Mobil</a>
                                </li>
                                <li>
                                    <a href="{{ route('supir.index') }}">Supir</a>
                                </li>
                                <li>
                                    <a href="{{ route('booking.index') }}">Booking</a>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>