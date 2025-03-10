<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">BLS-CPR Trainer</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
          
              <div class="profile_info">
              @if(session()->has('user'))
                  <?php $user = session('user'); ?>
                  <span>Welcome,</span>
                <h2>{{ $user->fname }} {{ $user->lname }}</h2>
              @endif
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>ADMINISTRATOR </h3>
                <ul class="nav side-menu">
                  <!-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}">Dashboard</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Trainers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('trainer.index')}}">View Trainers</a></li>
                      <li><a href="form_advanced.html">List Of Conduct Trainers</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Pending List Training <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li> -->


                  <li><a href="{{route('trainer.index')}}"><i class="fa fa-plus"></i> Create New </a></li>
                  <li><a href="{{route('trainer.list')}}"> <i class="fa fa-list-ul"></i> BLS-LIST  </a>
                  <li><a><i class="fa fa-map-marker"></i> Area of Assignments <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('trainer.areaofassignmentmain')}}">Area of Assignments (Main Category)</a></li>
                      <li><a href="{{route('trainer.areaofassignmentsub')}}">Area of Assignments (Sub Category)</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('trainer.agebracket')}}" ><i class="fa fa-sort-numeric-asc"></i> Age Bracket  </a>
                  <li><a href="{{route('trainer.profwork')}}" ><i class="fa fa-star"></i> Profession/Work  </a>
                  <!-- <li><a><i class="fa fa-list-ol"></i> BLS-TOT  </a> -->
                  <li><a><i class="fa fa-sign-out"></i> LOGOUT </a>
                 
                
                </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->