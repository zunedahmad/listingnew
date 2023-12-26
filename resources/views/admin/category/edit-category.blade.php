@extends('admin.layout.master-layout')
@section('content')
<div class="page-title-area pt-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Add Category</h3>
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
                        <h3>Category</h3>
                    </div>
                    <div class="col-lg-6 text-end">
                        <a href="{{route('category.list')}}" class="btn btn-secondary">View All Category</a>
                    </div>
                </div>
            </div>

            <form class="row g-3" action="{{route('category.update',[$category->id])}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-md-6">
                    <label class="form-label">Category Name</label>
                    <input type="text" id="InputCat_name" class="form-control" name="cname" value="{{$category->cname}}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Slug Name</label>
                    <input type="text" id="InputSlug" class="form-control" name="cnameslug" value="{{$category->cnameslug}}">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Category Image</label>
                    <input type="file" class="form-control" name="cimage">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="flex-grow-1"></div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $(document).on('keyup', '#InputCat_name', function() {
            var name = $(this).val();
            var slug = name.toLowerCase().trim().replace(/ /g, '-');
            $("#InputSlug").val(slug);
        });
    });
</script>
@endsection