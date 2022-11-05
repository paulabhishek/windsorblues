<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSBS</title>
    <style>
        .bluecor{
            color: #0f0e40;
        }

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

        /*.hdline{*/

        /*    border-bottom: 3px solid #337ab7;*/
        /*    padding-bottom: 5px;*/
        /*}*/
       /*Google Fonts*/
        .Playfair{
            font-family: 'Playfair Display', serif;
            font-size: 10px;
        }
        body {
            overflow-x: hidden !important;
        }
        .redline {
            display: inline-block;
            padding-bottom: 10px;
            position: relative;
        }
        .redline:before{
            content: "";
            position: absolute;
            width: 100%;
            height: 5px;
            bottom: 0;
            left: 0%;
            border-bottom: 5px solid red;
        }

        .hdline {
            display: inline-block;
            padding-bottom: 10px;
            position: relative;
        }

        .hdline:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 5px;
            bottom: 0;
            left: 0%;
            border-bottom: 5px solid #337ab7;
        }

        .h1,
        h1 {
            font-size: 1.5rem;
        }

        .container-fluid {
            max-width: 1400px;
        }

        .card {
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            border: 1px;
            border-radius: 1rem;
        }

        .img-hover-zoom--colorize img {
            border-radius: 50%;
            width: 150px;
            height: auto;
            margin-top: 20px;
            padding: 1px;
            transition: transform .5s;
            filter: grayscale(100%);
        }

        .img-hover-zoom--colorize:hover img {
            filter: grayscale(0);
            transform: scale(1.05);
        }

        .card h5 {
            overflow: hidden;
            height: 80px;
            font-weight: 300;
            font-size: 1rem;
        }

        .card h5 a {
            color: black;
            text-decoration: none;
        }

        .role {
            color: #7a7a7a;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fab {
            font-size: 1.5rem;
            color: darkgray;
            transition: transform .5s;
        }

        .fab:hover {
            color: black;
            transform: scale(1.1);
        }

        .card h2 {
            font-size: 1rem;
        }


        @media only screen and (min-width: 1200px) {
            .img-hover-zoom--colorize img {
                width: 200px;
            }
        }

        @media only screen and (min-width: 1200px) {
            .h1,
            h1 {
                font-size: 2rem;
            }
        }

        .iframe-container{
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
        }
        .iframe-container > *{
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }


        .header {
            background-image: url('https://i.pinimg.com/originals/00/8c/75/008c75173308d7ae83aadb3d011303f1.jpg');
            background-position: 50% 90%;
            background-size: cover;
        }

        .contain{
            object-fit: contain;
            width:200px;
            height:300px;
        }
        /*.carousel-control-prev-icon,*/
        /*.carousel-control-next-icon {*/
        /*    height: 100px;*/
        /*    width: 100px;*/
        /*    outline: black;*/
        /*    background-size: 100%, 100%;*/
        /*    border-radius: 50%;*/
        /*    border: 1px solid black;*/
        /*    background-image: none;*/
        /*}*/

        /*.carousel-control-next-icon:after*/
        /*{*/
        /*    content: '>';*/
        /*    font-size: 55px;*/
        /*    color: red;*/
        /*}*/

        /*.carousel-control-prev-icon:after {*/
        /*    content: '<';*/
        /*    font-size: 55px;*/
        /*    color: red;*/
        /*}*/
        span.carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
        }

        span.carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
        }


    </style>
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon(asset('../images/windsorblues.png')) }}">--}}
    <link rel="shortcut icon" href="{{ asset('../images/windsorblues.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../images/windsorblues.png') }}">

</head>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Aref+Ruqaa+Ink&family=Bebas+Neue&family=Carter+One&family=Cormorant+Garamond&family=Fasthand&family=Lobster&family=Oswald:wght@700&family=Playfair+Display&family=Roboto+Slab:wght@900&family=Source+Sans+Pro&display=swap" rel="stylesheet">
<div class=" text-center">
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <a href="/"> <img width="350" height="150" src="../images/windsorblues.png"/></a>
    </div>
</div>

<nav class="navbar navbar-expand-lg " aria-label="Tenth navbar example">
    <div class="container-fluid ">
        <button class="navbar-toggler collapsed pull-left" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse justify-content-md-center collapse " id="navbarsExample08" >
            <ul class="navbar-nav">
                <li class="nav-item px-3 h4">
                    <a class="nav-link cool-link Playfair fw-bold fs-3" style=" color: #0f0e40;"  href="{{route('about.index')}}">About</a>
                </li>
                <li class="nav-item px-3 h4 ">
                    <a class="nav-link cool-link Playfair fw-bold fs-3" style=" color: #0f0e40;" href="{{route('event.index')}}">Events</a>
                </li>
                <li class="nav-item px-3 h4">
                    <a class="nav-link cool-link Playfair fw-bold fs-3" style=" color: #0f0e40;" href="{{route('membership.showform')}}">Become a Member</a>
                </li>
                <li class="nav-item px-3  h4">
                    <a class="nav-link cool-link Playfair fw-bold fs-3" style=" color: #0f0e40;" href="{{route('news.index')}}">News</a>
                </li>
{{--                <li class="nav-item px-3 h4">--}}
{{--                    <a class="nav-link cool-link Playfair fw-bold fs-3" style=" color: #0f0e40;" href="{{route('museum.index')}}">Museum</a>--}}
{{--                </li>--}}
                <li class="nav-item px-3 h4">
{{--                    {{route('welcome.chatham')}}--}}
                    <a class="nav-link cool-link Playfair fw-bold fs-3" style=" color: #0f0e40;" href="#">Blues in Schools</a>
                </li>
                <li class="nav-item px-3 h4">
                    <a class="nav-link cool-link Playfair fw-bold fs-3" style=" color: #0f0e40;" href="{{route('contact.index')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
