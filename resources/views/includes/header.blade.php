<nav class="navbar navbar-default">
  <div class="container-fluid" style="color: #7f5feb;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <i class="fa fa-align-right"></i>
      </button>
      <a class="navbar-brand" href="#">EEDMO-<span class="main-color">{{Auth::user()->dept}}</span></a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: #7f5feb">
            <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
            <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
            <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
            <li role="separator" class="divider"></li>
            <center><button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-sign-out"></i>Logout</button>
            </center>
          </ul>
        </li>
        <!-- pag naa na ni pulos i balik ra ni nako haha -->
<!--         <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
        <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li> -->
        <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
      </div>
      <div class="modal-body">
        Are you sure to logout?
      </div>
      <form class="modal-footer" method="POST" action="{{ route('logout') }}">
      @csrf
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary"><i class="fa fa-sign-out"></i> Log out</button>
      </form>
    </div>
  </div>
</div>
