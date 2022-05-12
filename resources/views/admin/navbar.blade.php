<div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          AFRI
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Rest
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li>
            <a href="{{ url('/users') }}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/foodmenu') }}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Food Menu</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/viewchef') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Chef</p>
            </a>
          </li>
          <li>
            <a href="{{ url('/viewreservation') }}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Reservation</p>
            </a>
          </li>

          <li>
            <a href="{{ url('/orders') }}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Orders</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">

        
      
    </div>
  </div>