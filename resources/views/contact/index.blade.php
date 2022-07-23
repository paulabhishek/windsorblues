{{--<!doctype html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />--}}
{{--    <title>Contact</title>--}}
{{--</head>--}}
{{--<body>--}}
@include('includes.header')
<div class="container">

    <div class="container">
        <h1 class="text-center mb-5">Contact Us</h1>
        <form class="row g-3 needs-validation" novalidate="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Name</label>
                <input type="text" name="first_name"  class="form-control" id="validationTooltip01"  required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip03" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <input type="email" name="email" class="form-control" id="validationTooltip03" aria-describedby="validationTooltipUsernamePrepend" required="">
                    <div class="invalid-tooltip">
                        Please enter a valid email.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <div class="invalid-tooltip">
                    This field is needed.
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</div>


{{--    <form class="mx-auto w-full max-w-lg min-h-screen items-center justify-start mt-8" action="" method="post" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <div class="grid xl:grid-cols-2 xl:gap-6">--}}
{{--            <div class="relative z-0 w-full mb-6 group">--}}
{{--                <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">--}}
{{--                <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="grid xl:grid-cols-2 xl:gap-6">--}}
{{--            <div class="relative z-0 w-full mb-6 group">--}}
{{--                <input type="text" name="message" id="message" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">--}}
{{--                <label for="message" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>--}}
{{--            </div>--}}

{{--            <div class="relative z-0 w-full mb-6 group">--}}
{{--                <input type="email" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">--}}
{{--                <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>--}}
{{--    </form>--}}
{{--</div>--}}

@include('includes.footer')
{{--<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
