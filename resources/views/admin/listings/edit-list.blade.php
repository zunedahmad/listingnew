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
            <form class="row g-3" action="{{route('listing.update',[$listing->id])}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-md-4">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="listname" value="{{$listing->listname}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="listimage" value="{{$listing->listimage}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Category</label>
                    <select class="form-select form-control" name="listcategory">
                        @if($category->isNotEmpty())
                        @foreach ($category as $value)
                        <option value="{{$value->cnameslug}}" @if($value->cnameslug==$listing->listcategory) selected @endif>{{$value->cname}}</option>
                        @endforeach
                        @else
                        <option>No Record Found</option>
                        @endif
                    </select>

                  
                    
                </div>
                <div class="col-md-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="listcity" value="{{$listing->listcity}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">State</label>
                    <input type="text" class="form-control" name="liststate" value="{{$listing->liststate}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" name="listcountry" value="{{$listing->listcountry}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Zip</label>
                    <input type="text" class="form-control" name="listzip" value="{{$listing->listzip}}">
                </div>
                <div class="col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="listaddress" value="{{$listing->listaddress}}">
                </div>
                <div class="col-12">
                    <label class="form-label">Decription</label>
                    <textarea class="form-control" placeholder="Decription" name="listdescription">{{$listing->listdescription}}</textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection