@extends('admin.layout.master-layout')
@section('content')
<!-- Start Welcome Back Area -->
<div class="welcome-back-area">
    <div class="container-fluid">
        <div class="welcome-back-content">
            <span>Welcome Back</span>
            <h2>JOHN SMILGA</h2>
            <p>Your students completed 80% of the tasks.</p>

            <img class="welcome-img" src="{{asset('admin/assets/images/welcome.png')}}" alt="welcome image">
        </div>
    </div>
</div>
<!-- End Welcome Back Area -->

<!-- Start Student Progress Area -->
<div class="student-progress-area">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="media-files-content card-box-style rounded">
                    <div class="main-title border-style">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3>Category List</h3>
                            </div>
                            <div class="col-lg-6 text-end">
                                <a href="{{route('category.index')}}" class="btn btn-secondary">Add Category</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-height" data-simplebar>
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($category->isNotEmpty())
                                @foreach ($category as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->cname}}</td>
                                    <td><img src="{{asset('storage/category/'.$value->cimage)}}" alt="student-1" width="30px" /></td>
                                    <td>Status</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('category.edit',[$value->id])}}" target="_blank" class="me-2"><i class="bx bxs-pencil"></i></a>
                                            <a href="javascript:void(0);" class="me-2"><i class="bx bxs-bullseye"></i></a>
                                            <a href="{{route('category.delete',[$value->id])}}" class="me-2"><i class="bx bxs-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">No Record Found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Student Progress Area -->
@endsection