<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              {{-- <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{asset('front/front2/images/icons/coffee-logo.png')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Coffee.co</p>
                  <div>
                    <small class="designation text-muted">Admin</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div> --}}
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2" >
              <i class="menu-icon mdi mdi-wallet-travel"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('category.index')}}">Category</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('product.index')}}">Add Product</a>
                    </li>
                </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/orders')}}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Menus</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/catmenu')}}">Category Menus</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('menus.index')}}">Add Menu</a>
                    </li>
                </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-image-multiple"></i>
              <span class="menu-title">Galleries</span>
            </a>
          </li>
          
        </ul>
      </nav>