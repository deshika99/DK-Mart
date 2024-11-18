<aside class="navbar-aside shadow-sm" id="offcanvas_aside">
    <div class="aside-top" style="padding:0">
        <a href="" class="brand-wrap">
            <img src="{{ asset('/backend/assets/DK mart-01.png') }}" class="logo" alt="DK-Mart"/>
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item {{ request()->routeIs('vendorhome') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('vendorhome') }}">
                    <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            <!-- Products Menu -->
            <li class="menu-item has-submenu {{ request()->routeIs('vendor.products*') ? 'active' : '' }}">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Products</span>
                </a>
                <!-- Add "show" class dynamically for submenu -->
                <div class="submenu {{ request()->routeIs('vendor.products*') ? 'show' : '' }}">
                    <a href="{{ route('vendor.products') }}" 
                       class="{{ request()->routeIs('vendor.products') ? 'active' : '' }}">
                        Product List
                    </a>
                    <a href="{{ route('vendor.products.add') }}" 
                       class="{{ request()->routeIs('vendor.products.add') ? 'active' : '' }}">
                        Add Product
                    </a>
                </div>
            </li>

            <li class="menu-item {{ request()->routeIs('vendor.orders') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('vendor.orders') }}">
                <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Orders</span>
                </a>
            </li>

        </ul>

        <hr />

        <br />
        <br />
    </nav>
</aside>
