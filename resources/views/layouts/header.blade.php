
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="index.html">
						<img src="{{asset('assets/'.$settings->logo)}}" alt="Logo" style="width: 100px">
					</a>
					<!-- Logo End -->

					<!-- Main Menu start -->
					<div class="collapse navbar-collapse main-menu">
						<ul class="navbar-nav mr-auto" id="menu">
							@forelse ($menus as $menu )
								@if($menu->has_child) 
								<li class="nav-item submenu"> <a class="nav-link" href="index-2.html">Home</a>
									@if(count($menu->subMenu) > 0)
								<ul>
									@forelse ($menu->subMenu as $sub) 
									<li class="nav-item"><a class="nav-link" href="{{route($menu->slug)}}">{{$menu->name}}</a> 
									</li>
										@empty
									@endforelse
							
								</ul>
								@endif
							</li>
							@else 
							
							<li class="nav-item"><a class="nav-link" href="{{route($menu->slug)}}">{{$menu->name}}</a></li>
							@endif
							@empty
							@endforelse
						</ul>
					</div>
					<!-- Main Menu End -->

					<div class="navbar-toggle"></div>
				</div>
			</nav>

			<div class="responsive-menu"></div>
		</div>
	</header>