<aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="">
        <div class="info">
          <h3><a href="#">{{Auth::user()->name}}</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
      </div>
      <div class="search">
        <input type="text" placeholder="Type here"><i class="fa fa-search"></i>
      </div>
      <ul class="categories">
        <li><i class="fa fa-bar-chart fa-fw"></i><a href="dashboard">Dashboard</a>
              @include('department.' . Auth::user()->dept . '.sidebar_menu')
        </li>

      </ul>
    </aside>