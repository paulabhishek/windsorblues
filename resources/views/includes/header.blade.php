<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        li {
            margin-bottom: 10px;
        }

        .cool-link {
            display: inline-block;
            color: #8e1212;
            text-decoration: none;
        }

        .cool-link::after {
            content: '';
            display: block;
            width: 0;
            height: 4px;
            background: red;
            transition: width .3s;
        }

        .cool-link:hover::after {
            width: 100%;
            transition: width .1s;
        }

        h1, h3{
            text-decoration: underline;
            text-decoration-color: red;
        }
       /*Google Fonts*/
        .Playfair{
            font-family: 'Playfair Display', serif;
            font-size: 10px;
        }
        body {
            overflow-x: hidden !important;
        }

    </style>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
</head>
<body>
{{--    <div class="container">--}}
{{--        <div class="row text-center">--}}
{{--            <div class="col-lg-12 col-md-8">--}}
{{--                <div class="col-sm-8 bg-primary">--}}
{{--                    <img width="350" height="150" src="images/IMG_20220701_174812__02.png"/>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class=" col-md-2 col-sm-4 ">--}}
{{--                <div class="navbar navbar-expand-lg navbar-primary bg-light">--}}
{{--                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                        <span class="navbar-toggler-icon"></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="row text-center">
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <a href="/"> <img width="350" height="150" src="../images/windsorblues.png"/></a>
    </div>
</div>

<nav class="navbar navbar-expand-lg " aria-label="Tenth navbar example">
    <div class="container-fluid ">
        <button class="navbar-toggler collapsed pull-left" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse justify-content-md-center collapse " id="navbarsExample08" style="">
            <ul class="navbar-nav">
                <li class="nav-item px-4 h4 mb-0 ">
                  <a class="nav-link cool-link Playfair fw-bold" href="{{route('membership.showform')}}">Become a Member</a>
                </li>
                <li class="nav-item px-4 h4 cool-link">
                    <a class="nav-link  Playfair fw-bold" href="{{route('event.index')}}">Events</a>
                </li>
                <li class="nav-item px-4 h4">
                    <a class="nav-link cool-link Playfair fw-bold" href="{{route('contact.index')}}">Contact</a>
                </li>
                <li class="nav-item px-4 h4">
                    <a class="nav-link cool-link Playfair fw-bold" href="#">Blues in Schools</a>
                </li>
                <li class="nav-item px-4 h4">
                    <a class="nav-link cool-link Playfair fw-bold" href="#">About</a>
                </li>
                <li class="nav-item px-4 h4">
                    <a class="nav-link cool-link Playfair fw-bold" href="{{route('museum.index')}}">Museum</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
