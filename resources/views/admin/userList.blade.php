@extends('admin.layouts.head')
@section('content')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>User List</h3>
                    <!-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without
                        dependencies thanks to simple-datatables.</p> -->
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">User Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <!-- <div class="card-header">
                    <h5 class="card-title">
                     User List 
                    </h5>
                </div> -->
                <div class="card-body">

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <strong>{{ \Session::get('success') }}</strong>
                        </div>
                    @endif
                    @if (\Session::has('unsucces'))
                        <div class="alert alert-danger">
                            <strong>{{ \Session::get('unsucces') }}</strong>
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

                    <table class="table table-striped" id="table_filter">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Active/Deactive</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($userList as $key => $data )
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$data->fname}}  {{$data->lname}} </td>
                                <td>{{$data->email }}</td>

                        
                                <td>
                                    @if($data->status == 1)
                                    <a href="#" class="btn btn-outline-warning no_permission">Deactive</a>
                                    @else
                                    <a href="#" class="btn btn-outline-success no_permission">Active</a>
                                    @endif
                                </td>

                                <td>
                                    <a href="#" class="btn btn-outline-primary no_permission">Edit</a>

                                    <a href="#" 
                                        class="btn btn-outline-danger no_permission">
                                        Delete
                                    </a>  
                                </td>
                              

                            </tr>
                         @endforeach         
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>

@endsection