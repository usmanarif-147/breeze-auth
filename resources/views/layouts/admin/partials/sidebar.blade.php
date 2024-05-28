<div>
    <nav class="sidebar dark_sidebar">
        <div class="d-flex justify-content-center align-items-center p-4">
            <img src="{{ asset('images/logo.jpg') }}" class="rounded-circle" style="height: 50px; width: 50px" />
        </div>
        <ul id="sidebar_menu">
            <li class="">
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false"
                    class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <div class="nav_icon_small">
                        <i class="fa-solid fa-gauge"></i>
                    </div>
                    <div class="nav_title">
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <i class="fa-brands fa-product-hunt"></i>
                    </div>
                    <div class="nav_title">
                        <span>Product</span>
                    </div>
                </a>
                <ul>
                    <li><a href="#">Flavour</a></li>
                    <li><a href="#">Nictotine</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#" aria-expanded="false" class="{{ request()->is('admin/orders') ? 'active' : '' }}">
                    <div class="nav_icon_small">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="nav_title">
                        <span>Orders</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <div class="nav_title">
                        <span>Manage Profile</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>

</div>
