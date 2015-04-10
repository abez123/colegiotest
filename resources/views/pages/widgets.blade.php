@extends('app')

@section('content')
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Metro</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Dennis Ji
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Widgets</a></li>
			</ul>
			
			<div class="row-fluid">
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Weekly Stat Metro Style</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-arrow-up green"></i>                               
									<strong>92</strong>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <strong>15</strong>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <strong>36</strong>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <strong>45</strong>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up green"></i>                               
							  <strong>112</strong>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <strong>31</strong>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <strong>93</strong>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <strong>256</strong>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users Metro Style</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li class="green">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Approved             
							</li>
							<li class="yellow">
								<a href="#">
									<img class="avatar" alt="Bill" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Pending                                
							</li>
							<li class="red">
								<a href="#">
									<img class="avatar" alt="Jane" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Banned                                  
							</li>
							<li class="blue">
								<a href="#">
									<img class="avatar" alt="Kate" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Updated                                 
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List Metro Style</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="todo metro">
							<ul class="todo-list">
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>	
									Windows Phone 8 App 
									<strong>today</strong>
								</li>
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>today</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>tommorow</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Windows Phone 8 App
									<strong>tommorow</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this week</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this week</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this month</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this month</strong>
								</li>
							</ul>
						</div>	
					</div>
				</div>
			
			</div>
			
			<div class="row-fluid">
				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon list"></i><span class="break"></span>Weekly Stat Alt.</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<i class="icon-arrow-up green"></i>                               
									<span class="green">92</span>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <span class="red">15</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <span class="blue">36</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <span class="yellow">45</span>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up green"></i>                               
							  <span class="green">112</span>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <span class="red">31</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <span class="blue">93</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <span class="yellow">254</span>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon user"></i><span class="break"></span>Last Users Alt.</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-success">Approved</span>                                  
							</li>
							<li>
								<a href="#">
									<img class="avatar" alt="" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
							</li>
							<li>
								<a href="#">
									<img class="avatar" alt="" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-important">Banned</span>                                  
							</li>
							<li>
								<a href="#">
									<img class="avatar" alt="" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Dennis Ji</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-info">Updates</span>                                  
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon check"></i><span class="break"></span>To Do List Alt.</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="todo">
							<ul class="todo-list">
								<li>
									Windows Phone 8 App <span class="label label-important">today</span>
														<span class="todo-actions">
															<a href="#"><i class="halflings-icon ok"></i></a>
															<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
														</span>
								</li>
								<li>New frontend layout <span class="label label-important">today</span>
													<span class="todo-actions">
														<a href="#"><i class="halflings-icon ok"></i></a>
														<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
													</span>
								</li>
								<li>Hire developers <span class="label label-warning">tommorow</span>
													<span class="todo-actions">
														<a href="#"><i class="halflings-icon ok"></i></a>
														<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
													</span>
								</li>
								<li>Windows Phone 8 App <span class="label label-warning">tommorow</span>
													<span class="todo-actions">
														<a href="#"><i class="halflings-icon ok"></i></a>
														<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
													</span>
								</li>
								<li>New frontend layout <span class="label label-success">this week</span>
													<span class="todo-actions">
														<a href="#"><i class="halflings-icon ok"></i></a>
														<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
													</span>
								</li>
								<li>Hire developers <span class="label label-success">this week</span>
													<span class="todo-actions">
														<a href="#"><i class="halflings-icon ok"></i></a>
														<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
													</span>
								</li>
								<li>New frontend layout <span class="label label-info">this month</span>
													<span class="todo-actions">
														<a href="#"><i class="halflings-icon ok"></i></a>
														<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
													</span>
								</li>
								<li>Hire developers <span class="label label-info">this month</span>
													<span class="todo-actions">
														<a href="#"><i class="halflings-icon ok"></i></a>
														<a href="#" class="todo-remove"><i class="halflings-icon remove"></i></a>
													</span>
								</li>
							</ul>
						</div>	
					</div>
				</div>
			
			</div>
			
			<hr>
			
			<div class="row-fluid">
				
				<div class="box black span6 noMargin" onTablet="span6" onDesktop="span6">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Support tickets Metro</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="tickets metro">
							<li class="ticket blue">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199278 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Low priority ]</span>
										<span class="status">Status: [ Complete ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket yellow">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199277 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Normal priority ]</span>
										<span class="status">Status: [ Pending ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket red">
								<a href="#">
									<span class="header">
										<span class="title">ARM issue</span>
										<span class="number">[ #199276 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ High priority ]</span>
										<span class="status">Status: [ In progress ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket blue">
								<a href="#">
									<span class="header">
										<span class="title">IE7 problem</span>
										<span class="number">[ #199275 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Low priority ]</span>
										<span class="status">Status: [ Rejected ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket blue">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199274 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Low priority ]</span>
										<span class="status">Status: [ Complete ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket yellow">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199273 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Normal priority ]</span>
										<span class="status">Status: [ Pending ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket red">
								<a href="#">
									<span class="header">
										<span class="title">ARM issue</span>
										<span class="number">[ #199272 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ High priority ]</span>
										<span class="status">Status: [ In progress ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span6" onTablet="span6" onDesktop="span6">
					<div class="box-header">
						<h2><i class="halflings-icon white comment"></i><span class="break"></span>Chat Metro</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="chat metro yellow">
							<li class="left">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:09</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:08</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>                                  
							</li>
							<li class="left">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:07</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:06</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
						</ul>
						<div class="chat-form black">
							<textarea></textarea>
							<button class="btn btn-warning">Send message</button>
						</div>	
					</div>
				</div><!--/span-->
			
			</div>
			
			<div class="row-fluid">
				
				<div class="box span4" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon calendar"></i><span class="break"></span>Calendar</h2>
					</div>
					<div class="box-content">
						<div id="main_calendar_phone"></div>
						<div class="clearfix"></div>
					</div>	
				</div><!--/span-->
				
				<div class="box span4 noMargin" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon list"></i><span class="break"></span>Support tickets</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="tickets">
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199278 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority blue">[ Low priority ]</span>
										<span class="status">Status: <span class="green">[ Complete ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199277 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority yellow">[ Normal priority ]</span>
										<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">PayPal issue</span>
										<span class="number">[ #199276 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority red">[ High priority ]</span>
										<span class="status">Status: <span class="blue">[ In progress ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">IE7 problem</span>
										<span class="number">[ #199275 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority blue">[ Low priority ]</span>
										<span class="status">Status: <span class="red">[ Rejected ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199274 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority blue">[ Low priority ]</span>
										<span class="status">Status: <span class="green">[ Complete ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199273 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority yellow">[ Normal priority ]</span>
										<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">PayPal issue</span>
										<span class="number">[ #199272 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority red">[ High priority ]</span>
										<span class="status">Status: <span class="blue">[ In progress ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon comment"></i><span class="break"></span>Chats</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="chat">
							<li class="left">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:09</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:08</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>                                  
							</li>
							<li class="left">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:07</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:06</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
						</ul>
						<div class="chat-form">
							<textarea></textarea>
							<button class="btn btn-info">Send message</button>
						</div>	
					</div>
				</div><!--/span-->
			
			</div>
				
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
@include ('partials.footer')
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
@endsection