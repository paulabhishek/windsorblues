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
            height: 2px;
            background: red;
            transition: width .3s;
        }

        .cool-link:hover::after {
            width: 100%;
            transition: width .3s;
        }

        h1, h3{
            text-decoration: underline;
            text-decoration-color: red;
        }

    </style>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
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
        <img width="350" height="150" src="images/IMG_20220701_174812__02.png"/>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-primary " aria-label="Tenth navbar example">
    <div class="container-fluid ">
        <button class="navbar-toggler collapsed pull-left" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse justify-content-md-center collapse " id="navbarsExample08" style="">
            <ul class="navbar-nav">
                <li class="nav-item px-4">
                    <a class="nav-link cool-link" href="{{route('membership.showform')}}">Become a Member</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link cool-link" href="{{route('event.index')}}">Events</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link cool-link" href="{{route('contact.index')}}">Contact</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link cool-link" href="#">Blues in Schools</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link cool-link" href="#">About</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link cool-link" href="#">Museum</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
