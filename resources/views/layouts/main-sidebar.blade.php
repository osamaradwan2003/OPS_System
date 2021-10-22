<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header ">
				<a class="desktop-logo logo-light " href="{{ route('home') }}">
          <img src="{{asset($settings->company_logo)}}" class="main-logo" alt="logo">
        </a>
				<a class="desktop-logo logo-dark " href="{{ route('home') }}">
          <img src="{{asset($settings->company_logo)}}" class="main-logo dark-theme" alt="logo">
        </a>
				<a class="logo-icon mobile-logo icon-light " href="{{ route('home') }}">
          <img src="{{asset($settings->company_logo)}}" class="logo-icon" alt="logo">
        </a>
				<a class="logo-icon mobile-logo icon-dark " href="{{ route('home') }}">
          <img src="{{asset($settings->company_logo)}}" class="logo-icon dark-theme" alt="logo">
        </a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{asset('assets/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ strtoupper( Auth::user()->first_name) }}</h4>
							<span class="mb-0 text-muted">Admin</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
          <li class="side-item side-item-category">Store Manger</li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="las la-store-alt side-menu__icon"></i>
              <span class="side-menu__label">Store</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="#">Add Item</a></li>
              <li><a class="slide-item" href="#">Edit Item</a></li>
              <li><a class="slide-item" href="#">Receive Invoice</a></li>
              <li><a class="slide-item" href="#">Edit Receipt</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
              <li><a class="slide-item" href="#">All Items</a></li>
              <li><a class="slide-item" href="#">Items In Alert</a></li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="la la-dolly side-menu__icon"></i>
              <span class="side-menu__label">Sales</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="#">Add Invoice</a></li>
              <li><a class="slide-item" href="#">Edit Invoice</a></li>
              <li><a class="slide-item" href="#">Return Invoice</a></li>
              <li><a class="slide-item" href="#">Edit Invoices</a></li>
              <li><a class="slide-item" href="#">All Invoices</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="la la-boxes side-menu__icon"></i>
              <span class="side-menu__label">stores</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="{{ route('stores.add') }}">Add store</a></li>
              <li><a class="slide-item" href="{{ route('stores.all') }}">All stores</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
            </ul>
          </li>
          <li class="side-item side-item-category">Customers And Sellers</li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="la la-users side-menu__icon"></i>
              <span class="side-menu__label">Customers</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="#">Add Customer</a></li>
              <li><a class="slide-item" href="#">Edit Customer</a></li>
              <li><a class="slide-item" href="#">All Customer</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="las la-user-friends side-menu__icon"></i>
              <span class="side-menu__label">Sellers</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="#">Add Sellers</a></li>
              <li><a class="slide-item" href="#">Edit Sellers</a></li>
              <li><a class="slide-item" href="#">All Sellers</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="la la-user-tie side-menu__icon"></i>
              <span class="side-menu__label">Employees</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="{{ route('employee.add') }}">Add Employee</a></li>
              <li><a class="slide-item" href="{{ route('employee.all') }}">All Employees</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
            </ul>
          </li>
          <li class="side-item side-item-category">Others</li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="las la-wallet side-menu__icon"></i>
              <span class="side-menu__label">Wallet Manger</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="{{ route('wallet.add') }}">Add Wallet</a></li>
              <li><a class="slide-item" href="{{ route('wallet.all') }}">All Wallets</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
              <i class="las la-file-invoice-dollar side-menu__icon"></i>
              <span class="side-menu__label">Taxes Manger</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
              <li><a class="slide-item" href="#">Add Tax Profile</a></li>
              <li><a class="slide-item" href="#">Edit Tax Profile</a></li>
              <li><a class="slide-item" href="#">All Tax Profiles</a></li>
              <li><a class="slide-item" href="#">Reports</a></li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" href="{{route('company.setting')}}">
              <i class="la la-sliders-h side-menu__icon"></i>
              <span class="side-menu__label">Settings</span>
            </a>
          </li>

				</ul>
			</div>
		</aside>

<!-- main-sidebar -->
