<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Test</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="/dashboard" >
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a href="" >
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>

        </li>
        <li>
            <a href="{{route('contact')}}" >
                <div class="parent-icon"><i class='bx bx-wallet'></i>
                </div>
                <div class="menu-title">Contact With Us</div>
            </a>

        </li>
        <li>
  
            <a href="{{route('category')}}" >
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Category</div>
            </a>


        </li>
        <li>
            <a href="{{route('subcategory')}}" >
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Subcategory</div>
            </a>
        </li>





    </ul>
    <!--end navigation-->
</div>
