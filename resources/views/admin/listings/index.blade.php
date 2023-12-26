@extends('admin.layout.master-layout')
@section('content')
<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Add Listing Layouts</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Pages</li>
                    <li>Form Layouts</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="form-layouts-area">
    <div class="container-fluid">
        <div class="card-box-style">
            <div class="others-title">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3>Create Listing Form</h3>
                    </div>
                    <div class="col-lg-6 text-end">
                        <a href="{{route('listing.list')}}" class="btn btn-secondary">View All Listings</a>
                    </div>
                </div>
            </div>

            <form class="row g-3" action="{{route('list.save')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-md-4">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="listname">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="listimage">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Category</label>
                    <select class="form-select form-control" name="listcategory">
                        @if($category->isNotEmpty())
                        @foreach ($category as $value)
                        <option value="{{$value->cnameslug}}">{{$value->cname}}</option>
                        @endforeach
                        @else
                        <option>No Record Found</option>
                        @endif
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="listcity">
                </div>
                <div class="col-md-3">
                    <label class="form-label">State</label>
                    <input type="text" class="form-control" name="liststate">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" name="listcountry">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Zip</label>
                    <input type="text" class="form-control" name="listzip">
                </div>
                <div class="col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="listaddress">
                </div>
                <div class="col-12">
                    <label class="form-label">Decription</label>
                    <textarea class="form-control" placeholder="Decription" name="listdescription"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection