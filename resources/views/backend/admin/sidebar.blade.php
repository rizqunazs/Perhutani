<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <div class="profile-sidebar">
    <div class="profile-userpic">
      <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
      <div class="profile-usertitle-name">Admin</div>
      <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="divider"></div>
  <form role="search">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
    </div>
  </form>
  <ul class="nav menu">
    <li><a href="{{ url('/admin/tanam/') }}"><em class="fa fa-bar-chart">&nbsp;</em> Tanam</a></li>   
    <li><a href="{{ url('/admin/hasiltanam/') }}"><em class="fa fa-th-list">&nbsp;</em> Hasil Tanam</a></li> 
    <li><a href="{{ url('/admin/tebang/') }}"><em class="fa fa-bar-chart">&nbsp;</em> Tebang</a></li> 
    <li><a href="{{ url('/admin/hasiltebang/') }}"><em class="fa fa-th-list">&nbsp;</em> Hasil Tebang</a></li> 
   
  </ul>
</div>
