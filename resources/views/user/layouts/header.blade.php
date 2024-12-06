<header class="navigation">
		<div class="header-top ">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-2 col-md-4">
						<div class="header-top-socials text-center text-lg-left text-md-left">
							<a href="https://www.facebook.com/themefisher" target="_blank"><i
									class="ti-facebook"></i></a>
							<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
							<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
						<div class="header-top-info">
							<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
							<a href="mailto:support@gmail.com"><i
									class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg  py-4" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="/">
					Mega<span>kit.</span>
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="navbarsExample09">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="/blog">Blogs<span class="sr-only">(current)</span></a>
						</li>
                        <li class="nav-item active">
                           @if(Auth::guard('user')->check())  
							<a class="nav-link" href="/post_blog">Post Blog <span class="sr-only">(current)</span></a>
                           @else
                             <a class="nav-link" href="/login">Post Blog <span class="sr-only">(current)</span></a>
                           @endif

						</li>
                        @if(Auth::guard('user')->check())  
                        <li class="nav-item active">
							<a class="nav-link" href="#">{{Auth::guard('user')->user()->name}} <span class="sr-only">(current)</span></a>
						</li>
                        @endif
					</ul>

                    @if(Auth::guard('user')->check())  

                        <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-solid-border btn-round-full">Log Out</a>
                        </form>

                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                             @csrf
                        </form>

                    @else
                    <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
						<a href="/login" class="btn btn-solid-border btn-round-full">Log In</a>
					</form>
                    @endif


				</div>
			</div>
		</nav>
	</header>