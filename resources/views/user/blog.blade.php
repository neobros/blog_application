@extends('user.layouts.head')
@section('content')


<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

				@foreach($blogList as $data)
					<div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img style="height: 225px; width: 349px" src="/uploads/{{$data->image}}" alt="" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta  py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{$data->name}}</span>
								</div> 
								<h3 class="mt-3 mb-3"><a href="#">{{$data->title}}</a></h3>
								<a href="/single_blog/{{$data->id}}" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>
			    @endforeach	
				

</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">
		<div class="sidebar-widget card border-0 mb-3">
			<img src="/user/images/blog/blog-author.jpg" alt="" class="img-fluid">
			<div class="card-body p-4 text-center">
				<h5 class="mb-0 mt-4">Arther Conal</h5>
				<p>Digital Marketer</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

				<ul class="list-inline author-socials">
					<li class="list-inline-item mr-3">
						<a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
					</li>
					<li class="list-inline-item mr-3">
						<a href="#"><i class="fab fa-twitter text-muted"></i></a>
					</li>
					<li class="list-inline-item mr-3">
						<a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
					</li>
					<li class="list-inline-item mr-3">
						<a href="#"><i class="fab fa-pinterest text-muted"></i></a>
					</li>
					<li class="list-inline-item mr-3">
						<a href="#"><i class="fab fa-behance text-muted"></i></a>
					</li>
				</ul>
			</div>
		</div>

</div>
            </div>   
        </div>

        <div class="row mt-5">
            <div class="col-lg-8">
                <nav class="navigation pagination py-2 d-inline-block">
                    <div class="nav-links">
			
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection