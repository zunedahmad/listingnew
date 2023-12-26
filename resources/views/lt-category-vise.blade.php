<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        a {
            text-decoration: none !important;
        }

        .hegt-matain {
            padding-top: 50px;
            padding-bottom: 1px;
        }

        .eldery-utrition {
            border: 1px solid #e6e0e0;
            border-radius: 8px;
            overflow: hidden;
            height: 100%;
        }

        .eldery-utrition .eldery-img {
            display: block;
        }

        .eldery-utrition .eldery-img img {
            border-radius: 8px 8px 0 0;
            height: 250px;
            width: 100%;
            object-fit: cover;
            background-color: #f7f7f7;
            border-bottom: 2px solid #ccc;
        }

        .eldery-utrition .slid-inner-item {
            position: relative;
            padding: 35px 20px 40px 20px;
            background-color: #fff;
            border-radius: 0 0 8px 8px;
        }

        .head-five {
            transition: .2s;
            font-size: 23px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .head-five a {
            font-size: 20px;
            font-weight: 600;
            line-height: 30px;
            color: #32252C;
            text-transform: capitalize;
            text-decoration: none !important;
        }

        .head-five a:hover {
            background-position: 0;
        }

        .eldery-utrition .slid-inner-item p {
            line-height: 28px;
            margin-bottom: 0;
            font-weight: 400;
            color: #444;
        }

        .eldery-utrition .slid-inner-item::after {
            position: absolute;
            content: "";
            bottom: 0;
            left: 50%;
            width: 70%;
            height: 10px;
            background-color: #e9e4e1;
            transform: translate(-50%);
            border-radius: 4px 4px 0 0;
            transition: .5s;
        }

        .provide-department {
            padding-top: 100px;
            padding-bottom: 100px;
            background-color: #f7f7f7;
        }

        .descript-some {
            background-color: #fff;
            padding: 25px 20px 35px 20px;
            margin-top: 35px;
            text-align: center;
            display: block;
            width: 100%;
            position: relative;
            box-shadow: 0 0 5px 0 #ccc;
            border-radius: 10px 10px 0 0;
        }

        .descript-some .dizcript-card {
            transform-style: preserve-3d;
            transition: transform .5s;
        }

        .descript-some .dizcript-card img {
            margin-bottom: 20px;
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .descript-some:hover .dizcript-card {
            transform: rotateY(180deg);
        }

        .descript-some:hover h5 {
            color: #050d36;
        }

        .descript-some h5 {
            font-size: 20px;
            font-weight: 600;
            transition: .2s;
            color: #444;
        }

        .descript-some:hover .readmore-btn {
            color: #00adee;
        }

        .descript-some .readmore-btn {
            font-weight: 500;
            display: inline-block;
            color: #444;
        }

        .descript-some:hover:after {
            background-color: #00adee;
        }

        .descript-some:after {
            position: absolute;
            content: "";
            bottom: 0;
            left: 50%;
            width: 70%;
            height: 10px;
            background-color: #e9e4e1;
            transform: translate(-50%);
            border-radius: 4px 4px 0 0;
            transition: .5s;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home.index')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if($categorylist->isNotEmpty())
                            @foreach ($categorylist as $value)
                            <li><a class="dropdown-item" href="{{route('listing.category',$value->cname)}}">{{$value->cname}}</a></li>
                            @endforeach
                            @else
                            <li><span class="dropdown-item">Category Not Available</span></li>
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{route('admin.login')}}">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h2 class="text-end"><a href="{{route('home.index')}}" class="text-white">Home</a></h2>
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container mt-5 pb-5">
        <div class="text-center">
            <h5>Our Service Offerings</h5>
            <h2>Explore Our Highlighted Listings</h2>
        </div>
        <div class="row justify-content-center">
            @if($listingcategory->isNotEmpty())
            @foreach ($listingcategory as $value)
            <div class="col-sm-4 hegt-matain">
                <div class="eldery-utrition">
                    <a href="{{route('listing.details',$value->id)}}" target="_blank" class="eldery-img">
                        <img src="{{asset('storage/listing/'.$value->listimage)}}" />
                    </a>
                    <div class="slid-inner-item">
                        <h5 class="head-five">
                            <a href="{{route('listing.details',$value->id)}}" target="_blank" class="text-truncate d-block">{{$value->listname}}</a>
                        </h5>
                        <p class="text-truncate">{{$value->listdescription}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-sm-12 pt-5 pb-5 hegt-matain">
                <h2 class="text-danger text-center">No More Listings Available... !</h2>
            </div>
            @endif
        </div>
    </div>

</body>

</html>