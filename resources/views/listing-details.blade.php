<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .listing-details .lstng-dtls-img {
            width: 100%;
            margin-bottom: 35px;
            border-radius: 15px;
            height: 700px;
            object-fit: cover;
        }

        .listing-details h2 {
            font-size: 36px;
            margin-bottom: 25px;
        }

        .listing-details h4 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .listing-details h4 strong {
            margin-right: 10px;
        }

        .listing-details p {
            font-size: 18px;
            text-align: justify;
            margin-bottom: 0;
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
        <h1>{{$listingDetails->listname}}</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container mt-5 pb-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="listing-details">
                    <img src="{{asset('storage/listing/'.$listingDetails->listimage)}}" class="lstng-dtls-img" />
                    <h2>{{$listingDetails->listname}}</h2>
                    <h4><strong>Category</strong>{{$listingDetails->listcategory}}</h4>
                    <h4><strong>Address</strong>{{$listingDetails->listaddress}} <span>(ZipCode:- {{$listingDetails->listzip}})</span></h4>
                    <p>{{$listingDetails->listdescription}}</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>