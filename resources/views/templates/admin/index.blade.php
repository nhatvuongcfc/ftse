<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('tile')
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CSS -->

	<link rel="stylesheet" href="{{ asset('css/admin/index.css')}}">
	@yield('css')
	<!-- Font Awesome -->
	{{-- <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')}}"> --}}
</head>
<body>
	<!-- HEADER -->
	<div class="wrapper">
		<header class="main-header row">
			<a href="#" class="logo">
				FTSE
			</a>
			<nav class="navbar navbar-static-top col">
				<div class="row">
					<div class="navbar-custom-menu col align-self-end">
						<ul class="nav navbar-nav">
							<li><a target="_new" title="Home" href="#"><i class="fa fa-home fa-1x"
								aria-hidden="true"></i></a>
							</li>
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #fff;">
									<span class="hidden-xs">Admin</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<p>
											Trần Phước
										</p>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">Edit</a>
										</div>
										<div class="pull-right">
											<a href="#" class="btn btn-default btn-flat">Logout</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- SIDEBAR -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image" style="height: 45px;width: 45px;">
					</div>
					<div class="pull-left info">
						<p>Admin</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<!-- search form -->
				<form class="sidebar-form">
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<ul class="sidebar-menu">

					<li class="header">
						T & S
					</li>
					<li class="treeview" id="teacher">
						
						<a class="collapsed" href="#" data-toggle="collapse" data-target="#teacherOne" aria-expanded="false" aria-controls="teacherOne">
							<i class="fa fa-black-tie"></i> <span>Teacher</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						
						<ul class="treeview-menu collapse" id="teacherOne" class="collapse show" data-parent="#teacher">
							{{--  <li class=""><a href="{{ route('list-teacher') }}"><i class="fa fa-user"></i> <span>List Teachers</span></a></li>  --}}
							{{--  <li class=""><a href="{{ route('user-teacher') }}"><i class="fa fa-user"></i> <span>User Teachers</span></a></li>  --}}
						</ul>

					</li>

					<li class="treeview" id="student">
						
						<a class="collapsed" href="#" data-toggle="collapse" data-target="#studentOne" aria-expanded="false" aria-controls="studentOne">
							<i class="fa fa-graduation-cap"></i> <span>Student</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						
						<ul class="treeview-menu collapse" id="studentOne" class="collapse show" data-parent="#student">
							<li class=""><a href=""><i class="fa fa-user"></i> <span>List Student</span></a></li>
							<li class=""><a href=""><i class="fa fa-user"></i> <span>User Student</span></a></li>
						</ul>

					</li>



					<li class="header">
						CLASS
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-group"></i> <span>List Class</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="header">
						EXAMINATION
					</li>
					<li class="treeview" id="teacher">
						
						<a class="collapsed" href="#" data-toggle="collapse" data-target="#examOne" aria-expanded="false" aria-controls="examOne">
							<i class="fa fa-sticky-note-o"></i> <span>Exam</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						
						<ul class="treeview-menu collapse" id="examOne" class="collapse show" data-parent="#teacher">
							{{--  <li class=""><a href="{{ route('list-teacher') }}"><i class="fa fa-star-o"></i> <span>List Exam</span></a></li>  --}}
							<li class=""><a href="/listquestion"><i class="fa fa-star-o"></i> <span>List Questions</span></a></li>
							<li class=""><a href="{{ route('admin.matrix.index') }}"><i class="fa fa-star-o"></i> <span>Matrix</span></a></li>
							<li class=""><a href="{{ route('admin.test.index') }}"><i class="fa fa-star-o"></i> <span>Test</span></a></li>
						</ul>

					</li>
				</ul>
			</section>
		</aside>
		<div class="content-wrapper">
			<div id="app">
				<div class="content-header">
					@yield("content-header")
				</div>
				<div class="content">
					@yield("content")
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
	<script src="{{asset('vendor/jquery/sweetalert.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script>
        $("#datetimepicker").datetimepicker();
    </script>
	@yield('js')
</body>
</html>
