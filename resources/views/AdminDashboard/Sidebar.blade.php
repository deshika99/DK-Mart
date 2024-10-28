
<aside class="navbar-aside" id="offcanvas_aside">
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
                    <li class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('admin.index') }}">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item has-submenu {{ request()->is('admin/products*') || request()->is('admin/add_products*') || request()->is('admin/categories*') ? 'active' : '' }}">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">Products</span>
                        </a>
                        <div class="submenu {{ request()->is('admin/products*') || request()->is('admin/add_products*') || request()->is('admin/categories*') ? 'show' : '' }}">
                            <a href="{{ route('products_list') }}" class="{{ request()->is('admin/products') ? 'active' : '' }}">
                                Product List
                            </a>
                            <a href="{{ route('add_products') }}" class="{{ request()->is('admin/add_products') ? 'active' : '' }}">
                                Add Product
                            </a>
                            <a href="{{ route('categories') }}" class="{{ request()->is('admin/categories') ? 'active' : '' }}">
                                Categories
                            </a>
                        </div>
                    </li>
                    <li class="menu-item {{ request()->routeIs('customers') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('customers') }}">
                        <i class="icon material-icons md-group"></i>
                            <span class="text">Customers</span>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('affiliate_customers') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('affiliate_customers') }}">
                        <i class="icon material-icons md-groups"></i>
                            <span class="text">Affiliate Customers</span>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('orders') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('orders') }}">
                        <i class="icon material-icons md-shopping_cart"></i>
                            <span class="text">Orders</span>
                        </a>
                    </li>

                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-sellers-cards.html">
                            <i class="icon material-icons md-store"></i>
                            <span class="text">Sellers</span>
                        </a>
                        <div class="submenu">
                            <a href="page-sellers-cards.html">Sellers cards</a>
                            <a href="page-sellers-list.html">Sellers list</a>
                            <a href="page-seller-detail.html">Seller profile</a>
                        </div>
                    </li>
                    <li class="menu-item {{ request()->routeIs('reviews') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('reviews') }}">
                        <i class="icon material-icons md-comment"></i>
                            <span class="text">Reviews</span>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('inquiries') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('inquiries') }}">
                        <i class="icon material-icons md-email"></i>
                            <span class="text">Customer Inquiries</span>
                        </a>
                    </li>

                </ul>
                <hr />

                <br />
                <br />
            </nav>
        </aside>