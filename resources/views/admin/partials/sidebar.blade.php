<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" 
            data-keep-expanded="false" 
            data-auto-scroll="true" 
            data-slide-speed="200">
            <li id="dashboard" class="nav-item start">
                <a href="{{URL::route('dashboard')}}">
                    <i class="fa fa-pie-chart"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">
                	<i class="fa fa-shopping-cart"></i>
                	Marketplace
                </h3>
            </li>
            <li id="categories" class="nav-item">
                <a href="{{URL::route('categories')}}" class="nav-link nav-toggle">
                    <span class="title">Categories</span>
                </a>
            </li>
            <li id="products" class="nav-item">
                <a href="{{URL::route('products')}}" class="nav-link nav-toggle">
                    <span class="title">Products</span>
                </a>
            </li>

            <li id="fees" class="nav-item">
                <a href="{{URL::route('fees')}}" class="nav-link nav-toggle">
                    <span class="title">Fees</span>
                </a>
            </li>

            <li class="heading">
                <h3 class="uppercase">
                	<i class="fa fa-users"></i>
                	Users
                </h3>
            </li>
            <li id="publishers" class="nav-item">
                <a href="{{URL::route('publishers')}}" class="nav-link nav-toggle">
                    <span class="title">Publishers</span>
                </a>
            </li>
            <li id="partners" class="nav-item">
                <a href="{{URL::route('partners')}}" class="nav-link nav-toggle">
                    <span class="title">JVs/Partners</span>
                </a>
            </li>
            <li id="customers" class="nav-item">
                <a href="{{URL::route('customers')}}" class="nav-link nav-toggle">
                    <span class="title">Customers</span>
                </a>
            </li>

            <li id="affiliates" class="nav-item">
                <a href="{{URL::route('affiliates')}}" class="nav-link nav-toggle">
                    <span class="title">Affiliates</span>
                </a>
            </li>

            <li id="referrers" class="nav-item">
                <a href="{{URL::route('referrers')}}" class="nav-link nav-toggle">
                    <span class="title">Referrers</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>