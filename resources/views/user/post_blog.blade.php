@extends('user.layouts.head')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">Post Blog</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Post Blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12  col-md-12 col-sm-12">

           <form  method="POST" action="/store_blog" enctype="multipart/form-data">
           @csrf
                 @if (\Session::has('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg"  role="alert">
                            {{ \Session::get('success') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (\Session::has('unsucces'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-danger contact__msg"  role="alert">
                            {{ \Session::get('unsucces') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                 @endif
                        

                 <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->

                    <h3 class="text-md mb-4">Fill Deatils</h3>

                    <div class="form-group">
                        <span class="text-black">Title</span>
                    </div>
                    <div class="form-group">
                        <input name="title" required type="text" class="form-control" placeholder="Title">
                    </div>

                    <div class="form-group">
                        <span class="text-black">Main Image</span>
                    </div>

                    <div class="form-group">     
                        <input type="file" name="image" id="photo" class="form-control" required accept="image/*">
                    </div>
                    <div class="form-group">
                        <span class="text-black">Description</span>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea  id="summernote" name="description" class="form-control input-full" ></textarea>
                    </div>

                    
                    <button class="btn btn-main" name="submit" type="submit">Submit</button>
                </form>
            </div>

        
        </div>
    </div>
</section>

@endsection