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
            <div class="col-lg-4">
                <div class="single-total d-flex justify-content-between align-items-center">
                    <div>
                        <span>Total Category</span>
                        <h2>{{$categoryCount}}</h2>
                    </div>
                    <a href="{{route('category.list')}}" class="view-btn">View All</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-total d-flex justify-content-between align-items-center">
                    <div>
                        <span class="color-1765fd">Total List</span>
                        <h2>{{$listingcount}}</h2>
                    </div>
                    <a href="{{route('listing.list')}}" class="view-btn">View All</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-total d-flex justify-content-between align-items-center">
                    <div>
                        <span class="color-5c31d6">TOTAL LESSONS</span>
                        <h2>1,130</h2>
                    </div>
                    <a href="javascript:void(0);" class="view-btn">View All</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="media-files-content card-box-style rounded">
                    <div class="main-title border-style d-flex justify-content-between align-items-center">
                        <h3>Activity Statistics</h3>

                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>7 days</option>
                            <option value="1">15 days</option>
                            <option value="2">10 days</option>
                            <option value="3">5 days</option>
                        </select>
                    </div>

                    <div class="table-height" data-simplebar>
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @if($listinglist->isNotEmpty())
                                @foreach ($listinglist as $value)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{$value->listname}}</td>
                                    <td>{{$value->listcategory}}</td>
                                    <td>{{$value->listcity}}</td>
                                    <td>{{$value->listcountry}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('listing.edit',[$value->id])}}" target="_blank" class="me-2"><i class="bx bxs-pencil"></i></a>
                                            <a href="javascript:void(0);" class="me-2"><i class="bx bxs-bullseye"></i></a>
                                            <a href="{{route('listing.delete',[$value->id])}}" class="me-2"><i class="bx bxs-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                $i++;
                                @endphp
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6" class="text-center">Data Not Available</td>
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