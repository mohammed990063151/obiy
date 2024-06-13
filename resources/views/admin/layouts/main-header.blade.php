<header class="main-header">

	{{--<!-- Logo -->--}}
	<a href="{{ asset('dashboard') }}/index2.html" class="logo">
		{{--<!-- mini logo for sidebar mini 50x50 pixels -->--}}
		<span class="logo-mini"><b>O</b>TC</span>
		<span class="logo-lg"><b>Spiro
		</b> Spare parts</span>
	</a>

	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">

				
				

				{{--<!-- Tasks: style can be found in dropdown.less -->--}}
				<li class="dropdown tasks-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag-o"></i></a>
					<ul class="dropdown-menu">
						<li>
							{{--<!-- inner menu: contains the actual data -->--}}
							<ul class="menu">
								@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
									<li>
										<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="
										color: #000;">
											{{ $properties['native'] }}
										</a>
									</li>
								@endforeach
							</ul>
						</li>
					</ul>
				</li>

				{{--<!-- User Account: style can be found in dropdown.less -->--}}
				<li class="dropdown user user-menu">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
						{{-- <span class="hidden-xs">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span> --}}
					</a>
					<ul class="dropdown-menu">

						{{--<!-- User image -->--}}
						<li class="user-header">
							<img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" width="10px" class="img-circle" style="
							height: 125px;
							width: auto;
							border-radius: 50%;
						" alt="User Image">

							<p>
								{{-- {{ auth()->user()->first_name }} {{ auth()->user()->last_name }} --}}
								<small>{{ Auth::user()->email }}</small>
							</p>
						</li>

						{{--<!-- Menu Footer-->--}}
						<li class="user-footer">


							<a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">@lang('site.logout')</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>

						</li>
					</ul>
				</li>
			</ul>
		</div>



	
</nav>

</header>