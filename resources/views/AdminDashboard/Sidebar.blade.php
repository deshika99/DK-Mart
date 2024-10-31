
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
                    <li class="menu-item {{ request()->routeIs('sellers') ? 'active' : '' }}">
                        <a class="menu-link" href="{{ route('sellers') }}">
                        <i class="icon material-icons md-store"></i>
                            <span class="text">Sellers</span>
                        </a>
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
                    <li class="menu-item has-submenu {{ request()->is('admin/manage_company*') || request()->is('admin/users*') || request()->is('admin/role_list*') ? 'active' : '' }}">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-settings"></i>
                            <span class="text">Settings</span>
                        </a>
                        <div class="submenu {{ request()->is('admin/manage_company*') || request()->is('admin/users*') || request()->is('admin/role_list*') ? 'show' : '' }}">
                            <a href="{{ route('manage_company') }}" class="{{ request()->is('admin/manage_company') ? 'active' : '' }}">
                                Manage Company
                            </a>
                            <a href="{{ route('users') }}" class="{{ request()->is('admin/users') ? 'active' : '' }}">
                                Users
                            </a>
                            <a href="{{ route('role_list') }}" class="{{ request()->is('admin/role_list') ? 'active' : '' }}">
                                Role List
                            </a>
                        </div>
                    </li>

                </ul>
                <hr />

                <br />
                <br />
            </nav>
        </aside>