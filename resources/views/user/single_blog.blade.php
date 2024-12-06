
@extends('user.layouts.head')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
        
          <h1 class="text-capitalize mb-4 text-lg">Blog details</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">blog details</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			

			<div class="blog-item-content bg-white p-5">
				<div class="blog-item-meta bg-gray py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{$blogList->name}}</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>{{$blogList->created_at}}</span>
				</div> 
				

				<h2 class="mt-3 mb-4"><a href="blog-single.html">{{$blogList->title}}</a></h2>

				<img style="width: 38%" src="/uploads/{{$blogList->image}}" alt="" class="img-fluid rounded">

				<p class="lead mb-4">   {!! $blogList->description !!}</p>

				

			
			</div>
		</div>
	</div>




	<div class="col-lg-12 mb-5">
		<div class="comment-area card border-0 p-5">
			<h4 class="mb-4">2 Comments</h4>
			<ul class="comment-tree list-unstyled">
				<li class="mb-5">
					<div class="comment-area-box">
						<img alt="" src="images/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2">

						<h5 class="mb-1">Philip W</h5>
						<span>United Kingdom</span>

						<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
							<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
							<span class="date-comm">Posted October 7, 2018 </span>
						</div>

						<div class="comment-content mt-3">
							<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
						</div>
					</div>
				</li>

				<li>
					<div class="comment-area-box">
						<img alt="" src="images/blog/test2.jpg" class="mt-2 img-fluid float-left mr-3">

						<h5 class="mb-1">Philip W</h5>
						<span>United Kingdom</span>

						<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
							<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
							<span class="date-comm">Posted October 7, 2018</span>
						</div>

						<div class="comment-content mt-3">
							<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="col-lg-12">
		<form class="contact-form bg-white rounded p-5" id="comment-form">
			<h4 class="mb-4">Write a comment</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
					</div>
				</div>
			</div>


			<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

			<input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
		</form>
	</div>
</div>
            </div>




</div>
            </div>   
        </div>
    </div>
</section>


@endsection