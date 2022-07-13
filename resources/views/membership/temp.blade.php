<!doctype html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>--}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>--}}
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>--}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
<title>Members</title>
</head>
<body>

















{{--<!-- component -->--}}
{{--<div class="bg-gray-100 font-sans w-full min-h-screen m-0">--}}
{{--    <div class="bg-white shadow">--}}
{{--        <div class="container mx-auto px-4">--}}
{{--            <div class="flex items-center justify-between py-4">--}}
{{--                <div>--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-purple-600" viewBox="0 0 24 24">--}}
{{--                        <path fill="currentColor" d="M14.5,16 C14.2238576,16 14,15.7761424 14,15.5 L14,9.5 C14,9.22385763 14.2238576,9 14.5,9 L16,9 C17.1045695,9 18,9.8954305 18,11 C18,11.4116588 17.8756286,11.7942691 17.6624114,12.1123052 C18.4414283,12.3856578 19,13.1275982 19,14 C19,15.1045695 18.1045695,16 17,16 L14.5,16 Z M15,15 L17,15 C17.5522847,15 18,14.5522847 18,14 C18,13.4477153 17.5522847,13 17,13 L15,13 L15,15 Z M15,12 L16,12 C16.5522847,12 17,11.5522847 17,11 C17,10.4477153 16.5522847,10 16,10 L15,10 L15,12 Z M12.9499909,4 L19.5,4 C20.8807119,4 22,5.11928813 22,6.5 L22,19.5 C22,20.8807119 20.8807119,22 19.5,22 L13.5,22 C12.2700325,22 11.2475211,21.1117749 11.0389093,19.9417682 C10.8653433,19.9799013 10.6850188,20 10.5,20 L4.5,20 C3.11928813,20 2,18.8807119 2,17.5 L2,4.5 C2,3.11928813 3.11928813,2 4.5,2 L10.5,2 C11.709479,2 12.7183558,2.85887984 12.9499909,4 Z M13,5 L13,17.5 C13,18.3179089 12.6072234,19.0440799 12,19.5001831 C12.0000989,20.3285261 12.6716339,21 13.5,21 L19.5,21 C20.3284271,21 21,20.3284271 21,19.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L13,5 Z M8.56005566,11.4964303 C8.54036595,11.4987873 8.52032459,11.5 8.5,11.5 L6.5,11.5 C6.47967541,11.5 6.45963405,11.4987873 6.43994434,11.4964303 L5.96423835,12.6856953 C5.86168164,12.9420871 5.57069642,13.066795 5.31430466,12.9642383 C5.0579129,12.8616816 4.93320495,12.5706964 5.03576165,12.3143047 L7.03576165,7.31430466 C7.20339081,6.89523178 7.79660919,6.89523178 7.96423835,7.31430466 L9.96423835,12.3143047 C10.066795,12.5706964 9.9420871,12.8616816 9.68569534,12.9642383 C9.42930358,13.066795 9.13831836,12.9420871 9.03576165,12.6856953 L8.56005566,11.4964303 Z M8.16148352,10.5 L7.5,8.8462912 L6.83851648,10.5 L8.16148352,10.5 Z M10.5,3 L4.5,3 C3.67157288,3 3,3.67157288 3,4.5 L3,17.5 C3,18.3284271 3.67157288,19 4.5,19 L10.5,19 C11.3284271,19 12,18.3284271 12,17.5 L12,4.5 C12,3.67157288 11.3284271,3 10.5,3 Z M6.5,18 C6.22385763,18 6,17.7761424 6,17.5 C6,17.2238576 6.22385763,17 6.5,17 L8.5,17 C8.77614237,17 9,17.2238576 9,17.5 C9,17.7761424 8.77614237,18 8.5,18 L6.5,18 Z M15.5,20 C15.2238576,20 15,19.7761424 15,19.5 C15,19.2238576 15.2238576,19 15.5,19 L17.5,19 C17.7761424,19 18,19.2238576 18,19.5 C18,19.7761424 17.7761424,20 17.5,20 L15.5,20 Z"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}

{{--                <div class="hidden sm:flex sm:items-center">--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Products</a>--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Marketplace</a>--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Partners</a>--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600">Pricing</a>--}}
{{--                </div>--}}

{{--                <div class="hidden sm:flex sm:items-center">--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>--}}
{{--                </div>--}}

{{--                <div class="sm:hidden cursor-pointer">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" viewBox="0 0 24 24">--}}
{{--                        <path fill="currentColor" d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="block sm:hidden bg-white border-t-2 py-2">--}}
{{--                <div class="flex flex-col">--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Products</a>--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Marketplace</a>--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Partners</a>--}}
{{--                    <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Pricing</a>--}}
{{--                    <div class="flex justify-between items-center border-t-2 pt-2">--}}
{{--                        <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>--}}
{{--                        <a href="#" class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




{{--<!-- This example requires Tailwind CSS v2.0+ -->--}}
{{--<nav class="bg-gray-800">--}}
{{--    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">--}}
{{--        <div class="relative flex items-center justify-between h-16">--}}
{{--            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">--}}
{{--                <!-- Mobile menu button-->--}}
{{--                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">--}}
{{--                    <span class="sr-only">Open main menu</span>--}}
{{--                    <!----}}
{{--                      Icon when menu is closed.--}}

{{--                      Heroicon name: outline/menu--}}

{{--                      Menu open: "hidden", Menu closed: "block"--}}
{{--                    -->--}}
{{--                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                    </svg>--}}
{{--                    <!----}}
{{--                      Icon when menu is open.--}}

{{--                      Heroicon name: outline/x--}}

{{--                      Menu open: "block", Menu closed: "hidden"--}}
{{--                    -->--}}
{{--                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">--}}
{{--                <div class="flex-shrink-0 flex items-center">--}}
{{--                    <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">--}}
{{--                    <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">--}}
{{--                </div>--}}
{{--                <div class="hidden sm:block sm:ml-6">--}}
{{--                    <div class="flex space-x-4">--}}
{{--                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->--}}
{{--                        <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>--}}

{{--                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>--}}

{{--                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>--}}

{{--                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">--}}
{{--                <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">--}}
{{--                    <span class="sr-only">View notifications</span>--}}
{{--                    <!-- Heroicon name: outline/bell -->--}}
{{--                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />--}}
{{--                    </svg>--}}
{{--                </button>--}}

{{--                <!-- Profile dropdown -->--}}
{{--                <div class="ml-3 relative">--}}
{{--                    <div>--}}
{{--                        <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                            <span class="sr-only">Open user menu</span>--}}
{{--                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                        </button>--}}
{{--                    </div>--}}

{{--                    <!----}}
{{--                      Dropdown menu, show/hide based on menu state.--}}

{{--                      Entering: "transition ease-out duration-100"--}}
{{--                        From: "transform opacity-0 scale-95"--}}
{{--                        To: "transform opacity-100 scale-100"--}}
{{--                      Leaving: "transition ease-in duration-75"--}}
{{--                        From: "transform opacity-100 scale-100"--}}
{{--                        To: "transform opacity-0 scale-95"--}}
{{--                    -->--}}
{{--                    <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">--}}
{{--                        <!-- Active: "bg-gray-100", Not Active: "" -->--}}
{{--                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>--}}
{{--                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>--}}
{{--                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Mobile menu, show/hide based on menu state. -->--}}
{{--    <div class="sm:hidden" id="mobile-menu">--}}
{{--        <div class="px-2 pt-2 pb-3 space-y-1">--}}
{{--            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->--}}
{{--            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>--}}

{{--            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>--}}

{{--            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>--}}

{{--            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}





{{--<!-- This example requires Tailwind CSS v2.0+ -->--}}
{{--<div class="relative inline-block text-left">--}}
{{--    <div>--}}
{{--        <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">--}}
{{--            Options--}}
{{--            <!-- Heroicon name: solid/chevron-down -->--}}
{{--            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}

{{--    <!----}}
{{--      Dropdown menu, show/hide based on menu state.--}}

{{--      Entering: "transition ease-out duration-100"--}}
{{--        From: "transform opacity-0 scale-95"--}}
{{--        To: "transform opacity-100 scale-100"--}}
{{--      Leaving: "transition ease-in duration-75"--}}
{{--        From: "transform opacity-100 scale-100"--}}
{{--        To: "transform opacity-0 scale-95"--}}
{{--    -->--}}
{{--    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">--}}
{{--        <div class="py-1" role="none">--}}
{{--            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->--}}
{{--            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>--}}
{{--            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>--}}
{{--            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>--}}
{{--            <form method="POST" action="#" role="none">--}}
{{--                <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- This example requires Tailwind CSS v2.0+ -->--}}
{{--<div>--}}
{{--    <nav class="bg-gray-800">--}}
{{--        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--            <div class="flex items-center justify-between h-16">--}}
{{--                <div class="flex items-center">--}}
{{--                    <div class="flex-shrink-0">--}}
{{--                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">--}}
{{--                    </div>--}}
{{--                    <div class="hidden md:block">--}}
{{--                        <div class="ml-10 flex items-baseline space-x-4">--}}
{{--                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->--}}
{{--                            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>--}}

{{--                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>--}}

{{--                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>--}}

{{--                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>--}}

{{--                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="hidden md:block">--}}
{{--                    <div class="ml-4 flex items-center md:ml-6">--}}
{{--                        <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">--}}
{{--                            <span class="sr-only">View notifications</span>--}}
{{--                            <!-- Heroicon name: outline/bell -->--}}
{{--                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}

{{--                        <!-- Profile dropdown -->--}}
{{--                        <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">--}}
{{--                            <div>--}}
{{--                                <button x-on:click="show = !show" type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                                    <span class="sr-only">Open user menu</span>--}}
{{--                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                                </button>--}}
{{--                            </div>--}}

{{--                            <!----}}
{{--                              Dropdown menu, show/hide based on menu state.--}}

{{--                              Entering: "transition ease-out duration-100"--}}
{{--                                From: "transform opacity-0 scale-95"--}}
{{--                                To: "transform opacity-100 scale-100"--}}
{{--                              Leaving: "transition ease-in duration-75"--}}
{{--                                From: "transform opacity-100 scale-100"--}}
{{--                                To: "transform opacity-0 scale-95"--}}
{{--                            -->--}}
{{--                            <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">--}}
{{--                                <!-- Active: "bg-gray-100", Not Active: "" -->--}}
{{--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>--}}

{{--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>--}}

{{--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="-mr-2 flex md:hidden">--}}
{{--                    <!-- Mobile menu button -->--}}
{{--                    <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">--}}
{{--                        <span class="sr-only">Open main menu</span>--}}
{{--                        <!----}}
{{--                          Heroicon name: outline/menu--}}

{{--                          Menu open: "hidden", Menu closed: "block"--}}
{{--                        -->--}}
{{--                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        </svg>--}}
{{--                        <!----}}
{{--                          Heroicon name: outline/x--}}

{{--                          Menu open: "block", Menu closed: "hidden"--}}
{{--                        -->--}}
{{--                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Mobile menu, show/hide based on menu state. -->--}}
{{--        <div class="md:hidden" id="mobile-menu">--}}
{{--            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">--}}
{{--                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->--}}
{{--                <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>--}}

{{--                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>--}}

{{--                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>--}}

{{--                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>--}}

{{--                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>--}}
{{--            </div>--}}
{{--            <div class="pt-4 pb-3 border-t border-gray-700">--}}
{{--                <div class="flex items-center px-5">--}}
{{--                    <div class="flex-shrink-0">--}}
{{--                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="ml-3">--}}
{{--                        <div class="text-base font-medium leading-none text-white">Tom Cook</div>--}}
{{--                        <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>--}}
{{--                    </div>--}}
{{--                    <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">--}}
{{--                        <span class="sr-only">View notifications</span>--}}
{{--                        <!-- Heroicon name: outline/bell -->--}}
{{--                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="mt-3 px-2 space-y-1">--}}
{{--                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>--}}

{{--                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>--}}

{{--                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <header class="bg-white shadow">--}}
{{--        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--            <h1 class="text-3xl font-bold text-gray-900">--}}
{{--                Dashboard--}}
{{--            </h1>--}}
{{--        </div>--}}
{{--    </header>--}}
{{--    <main>--}}
{{--        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">--}}
{{--            <!-- Replace with your content -->--}}
{{--            <div class="px-4 py-6 sm:px-0">--}}
{{--                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>--}}
{{--            </div>--}}
{{--            <!-- /End replace -->--}}
{{--        </div>--}}
{{--    </main>--}}
{{--</div>--}}






{{--<button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown header <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>--}}

{{--<!-- Dropdown menu -->--}}
{{--<div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(392.8px, 1532px, 0px);">--}}
{{--    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">--}}
{{--        <div>Bonnie Green</div>--}}
{{--        <div class="font-medium truncate">name@flowbite.com</div>--}}
{{--    </div>--}}
{{--    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">--}}
{{--        <li>--}}
{{--            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--    <div class="py-1">--}}
{{--        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<button class="bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 ...">--}}
{{--    Save changes--}}
{{--</button>--}}

{{--<h1 class="text-3xl">Members page</h1>--}}
{{--collect Name, Phone, Email, Newsletter agreement--}}
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>
