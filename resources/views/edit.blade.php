<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Luna Portfolio's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- Pace -->
	<link href="css/pace.css" rel="stylesheet">

  <!-- Chosen -->
	<link href="css/chosen/chosen.min.css" rel="stylesheet"/>

	<!-- Datepicker -->
	<link href="css/datepicker.css" rel="stylesheet"/>

	<!-- Timepicker -->
	<link href="css/bootstrap-timepicker.css" rel="stylesheet"/>

	<!-- Slider -->
	<link href="css/slider.css" rel="stylesheet"/>

	<!-- Tag input -->
	<link href="css/jquery.tagsinput.css" rel="stylesheet"/>

	<!-- WYSIHTML5 -->
	<link href="css/bootstrap-wysihtml5.css" rel="stylesheet"/>

	<!-- Dropzone -->
	<link href='css/dropzone/dropzone.css' rel="stylesheet"/>

	<!-- Endless -->
	<link href="css/endless.min.css" rel="stylesheet">
	<link href="css/endless-skin.css" rel="stylesheet">


  </head>

  <body class="overflow-hidden">
	<!-- Overlay Div -->
	<div id="overlay" class="transparent"></div>

	<a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Skin Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
			<a class="theme-color" style="background:#3a3a3a" id="skin-5"></a>
			<a class="theme-color" style="background:#495B6C" id="skin-6"></a>
		</div>
		<div class="title">
			<strong class="no-margin">Sidebar Menu</strong>
		</div>
		<div class="theme-box">
			<label class="label-checkbox">
				<input type="checkbox" checked id="fixedSidebar">
				<span class="custom-checkbox"></span>
				Fixed Sidebar
			</label>
		</div>
	</div><!-- /theme-setting -->

	<div id="wrapper" class="preload">
		<div id="top-nav" class="skin-6 fixed">
			<div class="brand">
				<span>Luna</span>
				<span class="text-toggle"> Portfoilio's</span>
			</div><!-- /brand -->
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
      <!--
			<button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>-->
			<ul class="nav-notification clearfix">
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<strong>{{$user->name}}</strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li><a tabindex="-1" class="main-link logoutConfirm_open" href="#logoutConfirm"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /top-nav-->

		<aside class="fixed skin-6">
			<div class="sidebar-inner scrollable-sidebar">
				<div class="user-block clearfix">
					<img src="img/user.jpg" alt="User Avatar">
					<div class="detail">
						<strong>{{$entity->company_name}}</strong>
					</div>
				</div><!-- /user-block -->

				<div class="main-menu">
					<ul>
						<li class="active">
							<a href="{{ url('home')}}">
								<span class="menu-icon">
									<i class="fa fa-desktop fa-lg"></i>
								</span>
								<span class="text">
									Dashboard
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
            <!--
						<li class="active openable open">
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-file-text fa-lg"></i>
								</span>
								<span class="text">
									Pages
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="submenu">
								<li class="active"><a href=""><span class="submenu-label">Home</span></a></li>
								<li><a href=""><span class="submenu-label">About</span></a></li>
								<li><a href=""><span class="submenu-label">Skills</span></a></li>
								<li><a href=""><span class="submenu-label">Portfolio</span></a></li>
								<li><a href=""><span class="submenu-label">Contact</span></a></li>
							</ul>
						</li>
          -->
						<li>
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-tag fa-lg"></i>
								</span>
								<span class="text">
									Custom
								</span>
							</a>
						</li>
					</ul>

					<div class="alert alert-info">
            @if($entity != 'NULL')
						Welcome {{$entity->company_name}} to your dashboard.
						@else
						Welcome to your dashboard.
						@endif
					</div>
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner scrollable-sidebar -->
		</aside>

		<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="{{ url('home')}}"> Home</a></li>
           <li><i class="fa fa-edit"></i><a href="{{ url('edit')}}"> Edit</a></li>
				</ul>
			</div><!--breadcrumb-->
			<ul class="tab-bar grey-tab">
				<li>
					<a href="{{ url('home')}}">
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i>
						</span>
						Overview
					</a>
				</li>
				<li class="active">
					<a href="{{url('edit')}}">
						<span class="block text-center">
							<i class="fa fa-edit fa-2x"></i>
						</span>
						Edit Website
					</a>
				</li>
			</ul>

			<div class="padding-md">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6 text-center">
								<a href="#">
									<img src="img/user.jpg" alt="User Logo" class="img-thumbnail">
								</a>
								<p>Logo</p>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14">{{ $entity->company_name}}</strong>
								<small class="block text-muted">
									{{$entity->email}}
								</small>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->

            <div class="panel panel-default">
							<div class="panel-heading">Home</div>
							<div class="panel-body">
                <form class="form-horizontal" method="any" action="{{ url('/updateHome')}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  @if($home->title != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Title</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="title" name="title" placeholder="{{$home->title}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($home->caption != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Caption</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="caption" name="caption" placeholder="{{$home->caption}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($home->image_id != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Background Image</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="image_id" name="image_id" placeholder="{{$home->image_id}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($home->video_url != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Background Video</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="video_url" name="video_url" placeholder="{{$home->video_url}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($contact->extra_1 != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Extra 1</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="extra_1" name="extra_1" placeholder="{{$contact->extra_1}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($contact->extra_2 != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Extra 2</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="extra_2" name="extra_2" placeholder="{{$contact->extra_2}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-success btn-sm">Update</button>
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</form>
							</div>
						</div><!-- /panel -->

						<div class="panel panel-default">
							<div class="panel-heading">Contact</div>
							<div class="panel-body">
                <form class="form-horizontal" method="any" action="{{ url('/updateContact')}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  @if($contact->first_title != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">First Title</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="first_title" name="first_title" placeholder="{{$contact->first_title}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($contact->first_caption != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">First Caption</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="first_caption" name="first_caption" placeholder="{{$contact->first_caption}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($contact->second_title != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Second Title</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="second_title" name="second_title" placeholder="{{$contact->second_title}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($contact->second_caption != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Second Caption</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="second_caption" name="second_caption" placeholder="{{$contact->second_caption}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($entity->email != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Email</label>
										<div class="col-lg-10">
											<input type="email" class="form-control input-sm" id="email" name="email" placeholder="{{$entity->email}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($contact->phone != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Phone</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="phone" name="phone" placeholder="{{$contact->phone}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($contact->address != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Address</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="address" name="address" placeholder="{{$contact->address}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($contact->latitude != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Latitude</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="latitude" name="latitude" placeholder="{{$contact->latitude}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($contact->longitude != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Longitude</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="longitude" name="longitude" placeholder="{{$contact->longitude}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($contact->extra_1 != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Extra 1</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="extra_1" name="extra_1" placeholder="{{$contact->extra_1}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($contact->extra_2 != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Extra 2</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="extra_2" name="extra_2" placeholder="{{$contact->extra_2}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-success btn-sm">Update</button>
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</form>
							</div>
						</div><!-- /panel -->
						<div class="panel panel-default">
							<div class="panel-heading">Social Media</div>
							<div class="panel-body">
								<form class="form-horizontal" method="any" action="{{ url('/updateSocialMedia')}}">
                  @if($entity->facebook != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Facebook</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="facebook" name="facebook" placeholder="{{$entity->facebook}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($entity->dribble != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Dribbble</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="dribble" name="dribble" placeholder="{{$entity->dribble}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($entity->linkedin != NULL)
									<div class="form-group">
										<label class="col-lg-2 control-label">Linkedin</label>
										<div class="col-lg-10">
											<input type="text" class="form-control input-sm" id="linkedin" name="linkedin" placeholder="{{$entity->linkedin}}">
										</div><!-- /.col -->
									</div><!-- /form-group -->
                  @endif
                  @if($entity->twitter != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Twitter</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="twitter" name="twitter" placeholder="{{$entity->twitter}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($entity->instagram != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Instagram</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="instagram" name="instagram" placeholder="{{ $entity->instagram }}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($entity->github != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Github</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="github" name="github" placeholder="{{ $entity->github }}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($entity->behance != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Behance</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="behance" name="behance" placeholder="{{ $entity->behance }}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($entity->extra_1 != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Extra 1</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="extra_1" name="extra_1" placeholder="{{$entity->extra_1}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
                  @if($entity->extra_2 != NULL)
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Extra 2</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control input-sm" id="extra_2" name="extra_2" placeholder="{{ $entity->extra_2}}">
                    </div><!-- /.col -->
                  </div><!-- /form-group -->
                  @endif
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-success btn-sm">Update</button>
											<!--<button type="submit" class="btn btn-success btn-sm">Add New</button>-->
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</form>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
					<div class="col-md-9 col-sm-9">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="overview">
								<div class="row">
									<div class="col-md-6">
										<div class="panel panel-default">
											<div class="panel-heading">About Me</div>
											<div class="panel-body">
												<form method="any" action="{{ url('/updateAboutMe')}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          @if($about->first_title != NULL)
													<div class="form-group">
														<label>First Title</label>
														<input type="text" class="form-control input-sm" id="about_first_title" name="about_first_title" placeholder="{{ $about->first_title}}">
													</div><!-- /form-group -->
                          @endif
                          @if($about->first_caption != NULL)
													<div class="form-group">
														<label>First Caption</label>
														<textarea id="about_first_caption" name="about_first_caption" class="form-control" rows="3" placeholder="{{$about->first_caption}}"></textarea>
													</div><!-- /form-group -->
                          @endif
                          @if($about->second_title != NULL)
                          <div class="form-group">
                            <label>Second Title</label>
                            <input type="text" class="form-control input-sm" name="about_second_title" id="about_second_title" placeholder="{{ $about->second_title}}">
                          </div><!-- /form-group -->
                          @endif
                          @if($about->second_caption != NULL)
                          <div class="form-group">
                            <label>Second Caption</label>
                            <textarea id="about_second_caption" name="about_second_caption" class="form-control" rows="3" placeholder="{{$about->second_caption}}"></textarea>
                          </div><!-- /form-group -->
                          @endif
                          @if($about->third_title != NULL)
                          <div class="form-group">
                            <label>Third Title</label>
                            <input type="text" class="form-control input-sm" id="about_third_title" name="about_third_title" placeholder="{{ $about->third_title}}">
                          </div><!-- /form-group -->
                          @endif
                          @if($about->third_caption != NULL)
                          <div class="form-group">
                            <label>Third Caption</label>
                            <textarea id="about_third_caption" name="about_third_caption" class="form-control" rows="3" placeholder="{{$about->third_caption}}"></textarea>
                          </div><!-- /form-group -->
                          @endif
                          @if($about->extra_1 != NULL)
                          <div class="form-group">
                            <label>Extra 1</label>
                            <textarea id="about_extra_1" name="about_extra_1" class="form-control" rows="3" placeholder="{{$about->extra_1}}"></textarea>
                          </div><!-- /form-group -->
                          @endif
                          @if($about->extra_2 != NULL)
                          <div class="form-group">
                            <label>Extra 2</label>
                            <textarea id="about_extra_2" name="about_extra_2" class="form-control" rows="3" placeholder="{{$about->extra_2}}"></textarea>
                          </div><!-- /form-group -->
                          @endif
													<button type="submit" class="btn btn-success btn-sm">Update</button>
												</form>
											</div>
										</div><!-- /panel -->



                    <!--Start skills edit -->
										<div class="panel panel-default fadeInDown animation-delay4">
											<div class="panel-heading">
												Skills
												<span class="label label-danger pull-right">{{$skill_count}} items</span>
											</div>
                      <div class="panel-body">
                      @foreach($skill as $single_skill)
                      <form class="form-horizontal" method="any" action="{{ url('/updateSkill', $single_skill->id)}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if($single_skill->icon != NULL)
                        <div class="form-group">
                          <label class="col-lg-1 control-label">Icon</label>
                          <div class="col-lg-11">
                            <input type="text" class="form-control input-sm" id="icon" name="icon" placeholder="{{$single_skill->icon}}">
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_skill->title != NULL)
      									<div class="form-group">
      										<label class="col-lg-1 control-label">Title</label>
      										<div class="col-lg-11">
      											<input type="text" class="form-control input-sm" id="title" name="title" placeholder="{{$single_skill->title}}">
      										</div><!-- /.col -->
      									</div><!-- /form-group -->
                        @endif
                        @if($single_skill->caption != NULL)
      									<div class="form-group">
      										<label class="col-lg-1 control-label">Caption</label>
      										<div class="col-lg-11">
                            <textarea id="caption" name="caption" class="form-control" rows="3" placeholder="{{$single_skill->caption}}"></textarea>
      										</div><!-- /.col -->
      									</div><!-- /form-group -->
                        @endif
                        @if($single_skill->extra_1 != NULL)
                        <div class="form-group">
                          <label class="col-lg-1 control-label">Extra 1</label>
                          <div class="col-lg-11">
                            <textarea id="extra_1" name="extra_1" class="form-control" rows="3" placeholder="{{$single_skill->extra_1}}"></textarea>
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_skill->extra_2 != NULL)
                        <div class="form-group">
                          <label class="col-lg-1 control-label">Extra 2</label>
                          <div class="col-lg-11">
                            <textarea id="extra_2" name="extra_2" class="form-control" rows="3" placeholder="{{$single_skill->extra_2}}"></textarea>
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                        <a href="#deleteSkillModal" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                      </form>
                      <br>
                      @endforeach
                      <div class="form-group">
                          <a href="#addSkillModal" class="btn btn-danger btn-sm" data-toggle="modal">Add new</a>
                      </div><!-- /form-group -->
                    </div>
										</div><!-- /panel -->

                    <!--Start quote edit -->
										<div class="panel panel-default fadeInDown animation-delay5">
											<div class="panel-heading">
												Quotes
												<span class="label label-danger pull-right">{{$quote_count}} items</span>
											</div>
                      <div class="panel-body">
                      @foreach($quote as $single_quote)
                      <form class="form-horizontal" method="any" action="{{ url('/updateQuote', $single_quote->id)}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if($single_quote->text != NULL)
                        <div class="form-group">
                          <label class="col-lg-1 control-label">Text</label>
                          <div class="col-lg-11">
                            <input type="text" class="form-control input-sm" id="text" name="text" placeholder="{{$single_quote->text}}">
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_quote->author != NULL)
      									<div class="form-group">
      										<label class="col-lg-1 control-label">Author</label>
      										<div class="col-lg-11">
      											<input type="text" class="form-control input-sm" id="author" name="author" placeholder="{{$single_quote->author}}">
      										</div><!-- /.col -->
      									</div><!-- /form-group -->
                        @endif
                        @if($single_quote->extra_1 != NULL)
                        <div class="form-group">
                          <label class="col-lg-1 control-label">Extra 1</label>
                          <div class="col-lg-11">
                            <textarea id="extra_1" name="extra_1" class="form-control" rows="3" placeholder="{{$single_quote->extra_1}}"></textarea>
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_quote->extra_2 != NULL)
                        <div class="form-group">
                          <label class="col-lg-1 control-label">Extra 2</label>
                          <div class="col-lg-11">
                            <textarea id="extra_2" name="extra_2" class="form-control" rows="3" placeholder="{{$single_quote->extra_2}}"></textarea>
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                        <a href="#deleteQuoteModal" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                      </form>
                      <br>
                      @endforeach
                      <div class="form-group">
                          <a href="#addQuoteModal" class="btn btn-danger btn-sm" data-toggle="modal">Add new</a>
                      </div><!-- /form-group -->
                    </div>
										</div><!-- /panel -->
                    <div class="panel panel-default">
                    <div class="panel-heading">Edit Skill Sliders</div>
                    <div class="panel-body">
                      @foreach($skill_slider as $single_skill_slider)
                      <form class="form-horizontal" method="any" action="{{ url('/updateSkillSlider', $single_skill_slider->id)}}">
                        @if($single_skill_slider->skill_title != NULL)
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Title</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control input-sm" id="skill_title" name="skill_title" placeholder="{{$single_skill_slider->skill_title}}">
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_skill_slider->skill_caption != NULL)
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Caption</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control input-sm" id="skill_caption" name="skill_caption" placeholder="{{$single_skill_slider->skill_caption}}">
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_skill_slider->value != NULL)
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Value</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control input-sm" id="skill_value" name="skill_value" placeholder="{{$single_skill_slider->value}}">
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_skill_slider->extra_1 != NULL)
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Extra 1</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control input-sm" id="extra_1" name="extra_1" placeholder="{{$single_skill_slider->extra_1}}">
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        @if($single_skill_slider->extra_2 != NULL)
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Extra 2</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control input-sm" id="extra_2" name="extra_2" placeholder="{{$single_skill_slider->extra_2}}">
                          </div><!-- /.col -->
                        </div><!-- /form-group -->
                        @endif
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                        <a href="#deleteSkillSliderModal" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                      </form>
                      <br>
                      @endforeach
                      <div class="form-group">
                          <a href="#addSkillSliderModal" class="btn btn-danger btn-sm" data-toggle="modal">Add new</a>
                      </div><!-- /form-group -->
                    </div>
                  </div><!-- /panel -->


									</div><!-- /.col -->
                  <div class="col-md-6">
                    <div class="panel panel-default fadeInDown animation-delay4">
											<div class="panel-heading">
                        Click to <a href="#addPortfolioPieceModal" class="btn btn-danger btn-sm text-right" data-toggle="modal">Add</a> a portfolio piece
                      </div>
                    </div>
                    {{-- */$i=0;/* --}}
                    {{-- */$j=0;/* --}}
                    @foreach($portfolio_piece as $single_portfolio_piece)
										<div class="panel panel-default fadeInDown animation-delay4">
											<div class="panel-heading">
												Portfolio Item
											</div>
											<div class="panel-tab clearfix">
												<ul class="tab-bar">
													<li class="active"><a href="#{{$i++}}" data-toggle="tab"><i class="fa fa-home"></i> Overview</a></li>
													@if($single_portfolio_piece->content_title_1 != NULL)
                          <li><a href="#{{$i++}}" data-toggle="tab">{{$single_portfolio_piece->content_title_1}}</a></li>
													@endif
                          @if($single_portfolio_piece->content_title_2 != NULL)
                          <li><a href="#{{$i++}}" data-toggle="tab">{{$single_portfolio_piece->content_title_2}}</a></li>
													@endif
                          @if($single_portfolio_piece->content_title_3 != NULL)
                          <li><a href="#{{$i++}}" data-toggle="tab">{{$single_portfolio_piece->content_title_3}}</a></li>
                          @endif
                          @if($single_portfolio_piece->content_title_4 != NULL)
                          <li><a href="#{{$i++}}" data-toggle="tab">{{$single_portfolio_piece->content_title_4}}</a></li>
                          @endif
												</ul>
											</div>
											<div class="panel-body">
												<div class="tab-content">
													<div class="tab-pane fade in active" id="{{$j++}}">
														<div class="col-sm-6">
															<img src="img/gallery6.jpg" alt="Third Slide" class="m-bottom-md" style="height:150px;">
														</div>
														<div class="col-sm-6">
															<strong>{{$single_portfolio_piece->title}}</strong><br>
															<div class="btn-group">
																<button type="button" class="btn btn-xs">Cat 1</button>
																<button type="button" class="btn btn-xs">Cat 2</button>
															</div>
															<p class="m-top-sm">
                                {{$single_portfolio_piece->caption}}
															</p>
														</div><!-- /.col -->
                            @if($single_portfolio_piece->info_title_1 != NULL)
                            <div class="col-sm-12">
                              <div class="col-sm-6">
                                Info Title 1:<br> {{$single_portfolio_piece->info_title_1}}
                              </div>
                              <div class="col-sm-6">
                                Info Caption 1:<br> {{$single_portfolio_piece->info_caption_1}}
                              </div>
                            </div>
                            @endif
                            @if($single_portfolio_piece->info_title_2 != NULL)
                            <div class="col-sm-12">
                              <div class="col-sm-6">
                                Info Title 2:<br> {{$single_portfolio_piece->info_title_2}}
                              </div>
                              <div class="col-sm-6">
                                Info Caption 2:<br> {{$single_portfolio_piece->info_caption_2}}
                              </div>
                            </div>
                            @endif
													</div>
                          @if($single_portfolio_piece->content_text_1 != NULL)
													<div class="tab-pane fade" id="{{$j++}}">
                            <p>{{$single_portfolio_piece->content_text_1}}</p>
													</div>
                          @endif
                          @if($single_portfolio_piece->content_text_2 != NULL)
													<div class="tab-pane fade" id="{{$j++}}">
                            <p>{{$single_portfolio_piece->content_text_2}}</p>
													</div>
                          @endif
                          @if($single_portfolio_piece->content_text_3 != NULL)
													<div class="tab-pane fade" id="{{$j++}}">
                            <p>{{$single_portfolio_piece->content_text_3}}</p>
													</div>
                          @endif
                          @if($single_portfolio_piece->content_text_4 != NULL)
                          <div class="tab-pane fade" id="{{$j++}}">
                            <p>{{$single_portfolio_piece->content_text_4}}</p>
                          </div>
                          @endif
												</div>
                        <div class="col-sm-12 text-right">
                          <a href="#updatePortfolioPieceModal" class="btn btn-success btn-sm" data-toggle="modal">Update</a>
                          <a href="#deletePortfolioPieceModal" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                        </div>
											</div>
										</div><!-- /panel -->
                    @endforeach
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /tab1 -->
						</div><!-- /tab-content -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->

    <!-- /Modals -->
    <div class="modal fade" id="deleteSkillModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Are you sure you want to delete this skill?</h4>
              </div>
            <div class="modal-footer text-center">
              <a class="btn btn-success m-right-sm" href="{{ url('/deleteSkill', $single_skill->id) }}">Yes</a>
              <a class="btn btn-danger deleteSkillModal_close" data-dismiss="modal" href="#">No</a>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="addSkillModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Add new skill</h4>
              </div>
            <div class="modal-body">
              <form class="form-horizontal" method="any" action="{{ url('/addSkill')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-lg-1 control-label">Icon</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_icon" name="add_icon" placeholder="Select a fontawesome icon">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Image</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_image" name="add_image" placeholder="Does your layout have an image instead of an icon?">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_title" name="add_title" placeholder="Title of skill usually very short">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption</label>
                  <div class="col-lg-11">
                    <textarea id="add_caption" name="add_caption" class="form-control" rows="3" placeholder="Short description under the title"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 1</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_1" name="add_extra_1" class="form-control" rows="3" placeholder="If your layout has an extra parameter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 2</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_2" name="add_extra_2" class="form-control" rows="3" placeholder="If your layout has a second extra paramter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
              <div class="form-group text-right">
                <button type="submit" class="btn btn-success btn-sm">Add</button>
              </div>
            </form>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="deleteQuoteModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Are you sure you want to delete this quote?</h4>
              </div>
            <div class="modal-footer text-center">
              <a class="btn btn-success m-right-sm" href="{{ url('/deleteQuote', $single_quote->id) }}">Yes</a>
              <a class="btn btn-danger deleteQuoteModal_close" data-dismiss="modal" href="#">No</a>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="addQuoteModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Add new quote</h4>
              </div>
            <div class="modal-body">
              <form class="form-horizontal" method="any" action="{{ url('/addQuote')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_text" name="add_text" placeholder="The actual quote">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Author</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_author" name="add_author" placeholder="Who said that ^^">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 1</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_1" name="add_extra_1" class="form-control" rows="3" placeholder="If your layout has an extra parameter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 2</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_2" name="add_extra_2" class="form-control" rows="3" placeholder="If your layout has a second extra paramter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
              <div class="form-group text-right">
                <button type="submit" class="btn btn-success btn-sm">Add</button>
              </div>
            </form>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="deleteSkillSliderModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Are you sure you want to delete this skill slider?</h4>
              </div>
            <div class="modal-footer text-center">
              <a class="btn btn-success m-right-sm" href="{{ url('/deleteSkillSlider', $single_skill_slider->id) }}">Yes</a>
              <a class="btn btn-danger deleteSkillSliderModal_close" data-dismiss="modal" href="#">No</a>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="addSkillSliderModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Add new skill slider</h4>
              </div>
            <div class="modal-body">
              <form class="form-horizontal" method="any" action="{{ url('/addSkillSlider')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_title" name="add_title" placeholder="Enter skill title">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_caption" name="add_caption" placeholder="Does your layout have an caption for your skill sliders?">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Value</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_value" name="add_value" placeholder="Value of the slider">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 1</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_1" name="add_extra_1" class="form-control" rows="3" placeholder="If your layout has an extra parameter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 2</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_2" name="add_extra_2" class="form-control" rows="3" placeholder="If your layout has a second extra paramter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
              <div class="form-group text-right">
                <button type="submit" class="btn btn-success btn-sm">Add</button>
              </div>
            </form>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- /Modals -->
    <div class="modal fade" id="deletePortfolioPieceModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Are you sure you want to delete this piece?</h4>
              </div>
            <div class="modal-footer text-center">
              <a class="btn btn-success m-right-sm" href="{{ url('/deletePortfolioPiece', $single_portfolio_piece->id) }}">Yes</a>
              <a class="btn btn-danger deleteSkillModal_close" data-dismiss="modal" href="#">No</a>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="addPortfolioPieceModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Add new portfolio piece</h4>
              </div>
            <div class="modal-body">
              <form class="form-horizontal" method="any" action="{{ url('/addPortfolioPiece')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_title" name="add_title" placeholder="Title for your piece">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption</label>
                  <div class="col-lg-11">
                    <textarea id="add_caption" name="add_caption" class="form-control" rows="3" placeholder="Main caption for your piece"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Main Image</label>
                  <div class="col-lg-11">
                    {!! Form::file('main_image') !!}
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 1</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_title_1" name="add_title_1" placeholder="Title 1 for your piece">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 1</label>
                  <div class="col-lg-11">
                    <textarea id="add_text_1" name="add_text_1" class="form-control" rows="3" placeholder="Text 1 for your piece"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->

                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 2</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_title_2" name="add_title_2" placeholder="Title 2 for your piece">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 2</label>
                  <div class="col-lg-11">
                    <textarea id="add_text_2" name="add_text_2" class="form-control" rows="3" placeholder="Text 2 for your piece"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->

                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 3</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_title_3" name="add_title_3" placeholder="Title 3 for your piece">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 3</label>
                  <div class="col-lg-11">
                    <textarea id="add_text_3" name="add_text_3" class="form-control" rows="3" placeholder="Text 3 for your piece"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 4</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_title_4" name="add_title_4" placeholder="Title 4 for your piece">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 4</label>
                  <div class="col-lg-11">
                    <textarea id="add_text_4" name="add_text_4" class="form-control" rows="3" placeholder="Text 4 for your piece"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->

                <div class="form-group">
                  <label class="col-lg-1 control-label">Info 1</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_info_1" name="add_info_1" placeholder="Info 1 for your piece">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption 1</label>
                  <div class="col-lg-11">
                    <textarea id="add_caption_1" name="add_caption_1" class="form-control" rows="3" placeholder="Caption 1 for your piece"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->

                <div class="form-group">
                  <label class="col-lg-1 control-label">Info 2</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="add_info_2" name="add_info_2" placeholder="Info 2 for your piece">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption 2</label>
                  <div class="col-lg-11">
                    <textarea id="add_caption_2" name="add_caption_2" class="form-control" rows="3" placeholder="Caption 2 for your piece"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->

                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 1</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_1" name="add_extra_1" class="form-control" rows="3" placeholder="If your layout has an extra parameter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 2</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_2" name="add_extra_2" class="form-control" rows="3" placeholder="If your layout has a second extra paramter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 3</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_3" name="add_extra_3" class="form-control" rows="3" placeholder="If your layout has a third extra paramter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 4</label>
                  <div class="col-lg-11">
                    <textarea id="add_extra_4" name="add_extra_4" class="form-control" rows="3" placeholder="If your layout has a fourth extra paramter fill it here"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
              <div class="form-group text-right">
                <button type="submit" class="btn btn-success btn-sm">Add</button>
              </div>
            </form>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="updatePortfolioPieceModal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Update portfolio piece</h4>
              </div>
            <div class="modal-body">
              <form class="form-horizontal" method="any" action="{{ url('/updatePortfolioPiece', $single_portfolio_piece)}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if($single_portfolio_piece->title != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="update_title" name="update_title" placeholder="{{$single_portfolio_piece->title}}">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->caption != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption</label>
                  <div class="col-lg-11">
                    <textarea id="update_caption" name="update_caption" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->caption}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_title_1 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 1</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="update_title_1" name="update_title_1" placeholder="{{$single_portfolio_piece->content_title_1}}">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_text_1 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 1</label>
                  <div class="col-lg-11">
                    <textarea id="update_text_1" name="update_text_1" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->content_text_1}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_title_2 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 2</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="update_title_2" name="update_title_2" placeholder="{{$single_portfolio_piece->content_title_2}}">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_text_2 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 2</label>
                  <div class="col-lg-11">
                    <textarea id="update_text_2" name="update_text_2" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->content_text_2}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_text_3 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 3</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="update_title_3" name="update_title_3" placeholder="{{$single_portfolio_piece->content_title_3}}">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_text_4 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 3</label>
                  <div class="col-lg-11">
                    <textarea id="update_text_3" name="update_text_3" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->content_text_3}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_title_4 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Title 4</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="update_title_4" name="update_title_4" placeholder="{{$single_portfolio_piece->content_title_4}}">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->content_text_4 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Text 4</label>
                  <div class="col-lg-11">
                    <textarea id="update_text_4" name="update_text_4" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->content_text_4}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->info_title_1 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Info 1</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="update_info_1" name="update_info_1" placeholder="{{$single_portfolio_piece->info_title_1}}">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->info_text_1 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption 1</label>
                  <div class="col-lg-11">
                    <textarea id="update_caption_1" name="update_caption_1" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->info_caption_1}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->info_title_2 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Info 2</label>
                  <div class="col-lg-11">
                    <input type="text" class="form-control input-sm" id="update_info_2" name="update_info_2" placeholder="{{$single_portfolio_piece->info_text_2}}">
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->info_text_2 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Caption 2</label>
                  <div class="col-lg-11">
                    <textarea id="update_caption_2" name="update_caption_2" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->info_caption_2}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->extra_1 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 1</label>
                  <div class="col-lg-11">
                    <textarea id="update_extra_1" name="update_extra_1" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->extra_1}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->extra_2 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 2</label>
                  <div class="col-lg-11">
                    <textarea id="update_extra_2" name="update_extra_2" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->extra_2}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->extra_3 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 3</label>
                  <div class="col-lg-11">
                    <textarea id="update_extra_3" name="update_extra_3" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->extra_3}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
                @if($single_portfolio_piece->extra_4 != NULL)
                <div class="form-group">
                  <label class="col-lg-1 control-label">Extra 4</label>
                  <div class="col-lg-11">
                    <textarea id="update_extra_4" name="update_extra_4" class="form-control" rows="3" placeholder="{{$single_portfolio_piece->extra_4}}"></textarea>
                  </div><!-- /.col -->
                </div><!-- /form-group -->
                @endif
              <div class="form-group text-right">
                <button type="submit" class="btn btn-success btn-sm">Update</button>
              </div>
            </form>
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

	</div><!-- /wrapper -->

	<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

	<!-- Logout confirmation -->
	<div class="custom-popup width-100" id="logoutConfirm">
		<div class="padding-md">
			<h4 class="m-top-none"> Do you want to logout?</h4>
		</div>

		<div class="text-center">
			<a class="btn btn-success m-right-sm" href="{{ url('/auth/logout') }}">Logout</a>
			<a class="btn btn-danger logoutConfirm_close">Cancel</a>
		</div>
	</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

	<!-- Jquery -->
	<script src="js/jquery-1.10.2.min.js"></script>

	<!-- Bootstrap -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

	<!-- holder -->
	<script src='js/uncompressed/holder.js'></script>

	<!-- Modernizr -->
	<script src='js/modernizr.min.js'></script>

	<!-- Pace -->
	<script src='js/pace.min.js'></script>

	<!-- Popup Overlay -->
	<script src='js/jquery.popupoverlay.min.js'></script>

	<!-- Slimscroll -->
	<script src='js/jquery.slimscroll.min.js'></script>

	<!-- Cookie -->
	<script src='js/jquery.cookie.min.js'></script>

	<!-- Endless -->
	<script src="js/endless/endless.js"></script>

  <!-- Chosen -->
  <script src='js/chosen.jquery.min.js'></script>

  <!-- Datepicker -->
  <script src='js/bootstrap-datepicker.min.js'></script>

  <!-- Timepicker -->
  <script src='js/bootstrap-timepicker.min.js'></script>

  <!-- Slider -->
  <script src='js/bootstrap-slider.min.js'></script>

  <!-- Endless -->
  <script src="js/endless/endless_form.js"></script>

  </body>
</html>
