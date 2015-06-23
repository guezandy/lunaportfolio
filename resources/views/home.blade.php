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

	<!-- Endless -->
	<link href="css/endless.min.css" rel="stylesheet">
	<link href="css/endless-skin.css" rel="stylesheet">
  <!-- Gritter -->
	<link href="css/gritter/jquery.gritter.css" rel="stylesheet">
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
						<strong>{{ $user->name }}</strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li><a tabindex="-1" class="main-link logoutConfirm_open" href="{{ url('/auth/logout') }}"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /top-nav-->

		<aside class="fixed skin-6">
			<div class="sidebar-inner scrollable-sidebar">
				<div class="user-block clearfix">
					<img src="img/user.jpg" alt="User Avatar">
					<div class="detail">
						<strong>{{ $entity->company_name }}</strong>
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
					 <li><i class="fa fa-home"></i><a href="{{url('home')}}">Home</a></li>
				</ul>
			</div><!--breadcrumb-->
			<ul class="tab-bar grey-tab">
				<li class="active">
					<a href="#overview" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i>
						</span>
						Overview
					</a>
				</li>
				<li>
					<a href="{{ url('/edit') }}">
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
									<img src="img/user.jpg" alt="Company Logo" class="img-thumbnail">
								</a>
								<p>Logo</p>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14">{{$entity->company_name}}</strong>
								<small class="block text-muted">
									{{$entity->email}}
								</small>
								<div class="seperator"></div>
                <a href="http://{{$entity->website}}" class="btn btn-primary"><i class="fa fa-globe">View live</i></a>
							</div><!-- /.col -->
						</div><!-- /.row -->

            <div class="panel panel-default">
							<div class="panel-heading">
								Home Section
							</div>
							<table class="table table-hover table-striped">
								<tbody>
									@if($home->title != NULL)
									<tr>
										<td>Title</td>
										<td>{{$home->title}}</td>
									</tr>
									@endif
									@if($home->caption != NULL)
									<tr>
										<td>Caption</td>
										<td>{{ $home->caption}}</td>
									</tr>
									@endif
									@if($home->image_id != NULL)
									<tr>
										<td>Background Image</td>
										<td>{{ $home->image_id}}</td>
									</tr>
									@endif
									@if($home->video_url != NULL)
									<tr>
										<td>Video Url</td>
										<td>{{ $home->video_url}}</td>
									</tr>
									@endif
                  @if($home->extra_1 != NULL)
                  <tr>
                    <td>Extra 1:</td>
                    <td>{{$home->extra_1}}</td>
                  </tr>
                  @endif
                  @if($home->extra_2 != NULL)
                  <tr>
                    <td>Extra 2:</td>
                    <td>{{$home->extra_2}}</td>
                  </tr>
                  @endif
								</tbody>
							</table>
						</div><!-- /panel -->
            <!--
            <div class="panel panel-default">
							<div class="panel-heading">
								Gritter Notifications
							</div>
              <!--
							<div class="panel-body">
								<button type="button" class="btn btn-default btn-sm" id="remove-all">Remove All</button>
								<button type="button" class="btn btn-primary btn-sm" id="regular-notification">Regular</button>
								<button type="button" class="btn btn-primary btn-sm" id="sticky-notification">Sticky</button>
								<button type="button" class="btn btn-info btn-sm" id="info-notification">Info</button>
								<button type="button" class="btn btn-success btn-sm" id="success-notification">Success</button>
								<button type="button" class="btn btn-warning btn-sm" id="warning-notification">warning</button>
								<button type="button" class="btn btn-danger btn-sm" id="danger-notification">danger</button>
							</div>
						</div><!-- /panel -->

						<div class="panel panel-default">
							<div class="panel-heading">
								Contact Form
							</div>
							<table class="table table-hover table-striped">
								<tbody>
									@if($contact->first_title != NULL)
									<tr>
										<td>First Title</td>
										<td>{{ $contact->first_title}}</td>
									</tr>
									@endif
									@if($contact->first_caption != NULL)
									<tr>
										<td>First_Caption</td>
										<td>{{ $contact->first_caption}}</td>
									</tr>
									@endif
									@if($contact->second_title != NULL)
									<tr>
										<td>Second Title</td>
										<td>{{ $contact->second_title}}</td>
									</tr>
									@endif
									@if($contact->second_caption != NULL)
									<tr>
										<td>Second Caption</td>
										<td>{{ $contact->second_caption}}</td>
									</tr>
									@endif
									@if($entity->email != NULL)
									<tr>
										<td>Email:</td>
										<td> {{$entity->email}}</td>
									</tr>
									@endif
									@if($contact->phone != NULL)
									<tr>
										<td>Phone:</td>
										<td>{{$contact->phone}}</td>
									</tr>
									@endif
									@if($contact->address != NULL)
									<tr>
										<td>Address:</td>
										<td>{{$contact->address}}</td>
									</tr>
									@endif
                  @if($contact->extra_1 != NULL)
                  <tr>
                    <td>Extra 1:</td>
                    <td>{{$contact->extra_1}}</td>
                  </tr>
                  @endif
                  @if($contact->extra_2 != NULL)
                  <tr>
                    <td>Extra 2:</td>
                    <td>{{$contact->extra_2}}</td>
                  </tr>
                  @endif
								</tbody>
							</table>
						</div><!-- /panel -->
						<div class="panel panel-default">
							<div class="panel-heading">
								Social Media Links
							</div>
							<table class="table table-hover table-striped">
								<tbody>
									@if($entity->facebook != NULL)
									<tr>
										<td>Facebook</td>
										<td>{{ $entity->facebook }}</td>
									</tr>
									@endif
									@if($entity->instagram != NULL)
									<tr>
										<td>Instagram</td>
										<td>{{ $entity->instagram }}</td>
									</tr>
									@endif
									@if($entity->linkedin != NULL)
									<tr>
										<td>LinkedIn</td>
										<td>{{ $entity->linkedin }}</td>
									</tr>
									@endif
									@if($entity->dribble != NULL)
									<tr>
										<td>Dribbble</td>
										<td>{{ $entity->dribble }}</td>
									</tr>
									@endif
									@if($entity->twitter != NULL)
									<tr>
										<td>Twitter</td>
										<td>{{ $entity->twitter }}</td>
									</tr>
									@endif
									@if($entity->github != NULL)
									<tr>
										<td>Github</td>
										<td>{{ $entity->github }}</td>
									</tr>
									@endif
									@if($entity->behance != NULL)
									<tr>
										<td>Behance</td>
										<td>{{ $entity->behance }}</td>
									</tr>
									@endif
									@if($entity->extra_1 != NULL)
									<tr>
										<td>Extra 1</td>
										<td>{{ $entity->extra_1 }}</td>
									</tr>
									@endif
									@if($entity->extra_2 != NULL)
									<tr>
										<td>Extra 2</td>
										<td>{{ $entity->extra_2 }}</td>
									</tr>
									@endif
								</tbody>
							</table>
						</div><!-- /panel -->
					</div><!-- /.col -->
					<div class="col-md-9 col-sm-9">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="overview">
								<div class="row">
									<div class="col-md-6">
										<div class="panel panel-default fadeInDown animation-delay2">
											<div class="panel-heading">
												About Me
											</div>
											<div class="panel-body">
											@if($about->first_title != NULL)
												<h4>{{ $about->first_title }}</h4>
											@endif
											@if($about->first_caption != NULL)
												<p>{{ $about->first_caption}}</p>
											@endif
											@if($about->second_title != NULL)
												<h4>{{ $about->second_title}}</h4>
											@endif
											@if($about->second_caption != NULL)
												<p>{{ $about->second_caption}}</p>
											@endif
											@if($about->third_title != NULL)
												<h4>{{ $about->third_title}}</h4>
											@endif
											@if($about->third_caption != NULL)
												<p>{{ $about->third_caption }}</p>
											@endif
											</div>
										</div><!-- /panel -->
                    <!--SKills Secion -->
                    @if($skill_count > 0)
										<div class="panel panel-default fadeInDown animation-delay4">
											<div class="panel-heading">
												Skills
												<span class="label label-danger pull-right">{{$skill_count}} items</span>
											</div>
											<div class="panel-body">
												<div id="carousel-example-generic" class="carousel slide carousel-custom">
													<ol class="carousel-indicators">
                            @for($i = 0; $i < $skill_count; $i++)
														<li data-target="#carousel-example-generic" data-slide-to="{{$i}}" @if($i == 0) class="active" @else class="" @endif></li>
                            @endfor
													</ol>
													<div class="carousel-inner">
                            @foreach($skill as $single_skill)
														<div @if($single_skill->title == $skill->get(0)->title) class="item active" @else class="item" @endif>
															<div class="row">
																<div class="col-sm-4">
																<i class="{{$single_skill->icon}} fa-5x" style="height:150px;"></i>
																</div>
																<div class="col-sm-8">
																	<strong>{{$single_skill->title}}</strong>
																	<p class="m-top-sm">
                                    {{$single_skill->caption}}
																	</p>
																</div><!-- /.col -->
															</div><!-- /.row -->
														</div>
                            @endforeach
													</div>
												</div>
												<div class="text-right">
													<a class="btn btn-default btn-sm" href="#carousel-example-generic" data-slide="prev">Prev</a>
													<a class="btn btn-default btn-sm" href="#carousel-example-generic" data-slide="next">Next</a>
												</div>
											</div>
										</div><!-- /panel -->
                    @endif
                    <!--QUotes-->
                    @if($quote_count > 0)
										<div class="panel panel-default fadeInDown animation-delay4">
											<div class="panel-heading">
												Quotes
												<span class="label label-danger pull-right">{{$quote_count}} items</span>
											</div>
											<div class="panel-body">
												<div id="carousel-quote" class="carousel slide carousel-custom">
													<ol class="carousel-indicators">
                            @for($i = 0; $i < $quote_count; $i++)
														<li data-target="#carousel-example-generic" data-slide-to="{{$i}}" @if($i == 0) class="active" @else class="" @endif></li>
                            @endfor
													</ol>
													<div class="carousel-inner">
                            @foreach($quote as $single_quote)
                            <div @if($single_quote->text == $quote->get(0)->text) class="item active" @else class="item" @endif>
															<div class="row">
																<div class="col-sm-12">
																	<p class="m-top-sm">
                                    {{$single_quote->text}}
																	</p>
																	<strong>{{$single_quote->author}}</strong>
																</div><!-- /.col -->
															</div><!-- /.row -->
														</div>
                            @endforeach
													</div>
												</div>
												<div class="text-right">
													<a class="btn btn-default btn-sm" href="#carousel-quote" data-slide="prev">Prev</a>
													<a class="btn btn-default btn-sm" href="#carousel-quote" data-slide="next">Next</a>
												</div>
											</div>
										</div><!-- /panel -->
                    @endif
                    @if($skill_slider_count > 0)
    								<h5 class="headline">
    									My Skills
    									<span class="line"></span>
    								</h5>
    								<dl>
                      @foreach($skill_slider as $single_skill_slider)
    									<dt>{{$single_skill_slider->skill_title}} <span class="pull-right">{{$single_skill_slider->value}}%</span></dt>
    									<dd>
    										<div class="progress progress-striped">
    											<div class="progress-bar progress-bar-success animated-bar" style="width:{{$single_skill_slider->value}}%"></div>
    										</div>
    									</dd>
                      @endforeach
    								</dl>
									</div><!-- /.col -->
                  @endif
<!--End second column-->
									<div class="col-md-6">
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

  <!-- Gritter -->
	<script src="js/jquery.gritter.min.js"></script>

<script>
$function() {
  @if($user != NULL)
    $('#regular-notification').click();
  @endif
}
</script>

  <script>
		$(function()	{
			//Gritter notification

			$('#regular-notification').click(function(){
				$.gritter.add({
					title: 'This is a regular notice!',
					text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
					image: 'img/user.jpg',
					sticky: false,
					time: ''
				});
				return false;
			});

			$('#sticky-notification').click(function(){

				var unique_id = $.gritter.add({
					title: 'This is a sticky notice!',
					text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.',
					image: 'img/user.jpg',
					sticky: true,
					time: '',
					class_name: 'my-sticky-class'
				});

				// You can have it return a unique id, this can be used to manually remove it later using
				/*
				setTimeout(function(){

					$.gritter.remove(unique_id, {
						fade: true,
						speed: 'slow'
					});

				}, 6000)
				*/

				return false;
			});

			$('#info-notification').click(function(){

				$.gritter.add({
					title: '<i class="fa fa-info-circle"></i> This is a info notification',
					text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
					sticky: false,
					time: '',
					class_name: 'gritter-info'
				});
				return false;
			});

			$('#success-notification').click(function(){

				$.gritter.add({
					title: '<i class="fa fa-check-circle"></i> This is a success notification',
					text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus.',
					sticky: false,
					time: '',
					class_name: 'gritter-success'
				});
				return false;
			});

			$('#warning-notification').click(function(){

				$.gritter.add({
					title: '<i class="fa fa-warning"></i> This is a warning notification!',
					text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
					sticky: false,
					time: '',
					class_name: 'gritter-warning'
				});
				return false;
			});

			$('#danger-notification').click(function(){

				$.gritter.add({
					title: '<i class="fa fa-times-circle"></i> This is a error notification!',
					text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
					sticky: false,
					time: '',
					class_name: 'gritter-danger'
				});
				return false;
			});

			$("#remove-all").click(function(){
				$.gritter.removeAll();
				return false;
			});

			//jQuery popup overlay
			$('#darkCustomModal').popup({
				pagecontainer: '.container',
				 transition: 'all 0.3s'
			});


			$('#lightCustomModal').popup({
				pagecontainer: '.container',
				 transition: 'all 0.3s'
			});

		});
	</script>
  </body>
</html>
