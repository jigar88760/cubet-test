<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caterly</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Libre Baskerville", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-5">
    <div class="container mx-auto px-10">
        <h1 class="text-2xl font-bold">Dashboard</h1>
    </div>
    <div class="container mx-auto px-10 flex flex-col md:flex-row gap-8 mt-6 mb-10">
        <div class="flex-1">
            <div>
                <div class="container mx-auto">
                    <div class="relative rounded-md border border-gray-300 text-center">
                        <p class="p-6"><i class="fa-regular fa-square-plus"></i> Create a new event</p>
                        <h2 class="absolute flex top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </h2>
                    </div>
                </div>
            </div>
            <section class="mt-10">
                <h2 class="text-xl font-semibold mb-5">Upcoming events</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="font-bold">Freddie's Birthday Bash</h3>
                        <span
                            class="mb-5 mt-3 inline-flex items-center rounded-full bg-gray-50 px-4 py-2 text-xs font-medium text-gray-600 ring-inset ring-gray-500/10"><i>Birthday</i></span>
                        <div class="flex flex-col items-start space-y-2">
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-regular fa-calendar text-lg mr-4"></i>25 Jan 23
                            </p>
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-solid fa-location-dot text-lg mr-4"></i>Richmond
                            </p>
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-solid fa-users text-lg mr-2"></i>50
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="font-bold">The Jones</h3>
                        <span
                            class="mb-5 mt-3 inline-flex items-center rounded-full bg-gray-50 px-4 py-2 text-xs font-medium text-gray-600 ring-inset ring-gray-500/10"><i>Wedding</i></span>
                        <div class="flex flex-col items-start space-y-2">
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-regular fa-calendar text-lg mr-4"></i>15 Mar 23
                            </p>
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-solid fa-location-dot text-lg mr-4"></i>Kingston
                            </p>
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-solid fa-users text-lg mr-2"></i>90
                            </p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="font-bold">Dinner Party</h3>
                        <span
                            class="mb-5 mt-3 inline-flex items-center rounded-full bg-gray-50 px-4 py-2 text-xs font-medium text-gray-600 ring-inset ring-gray-500/10"><i>Bespoke
                                Event </i></span>
                        <div class="flex flex-col items-start space-y-2">
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-regular fa-calendar text-lg mr-4"></i>7 Jun 23
                            </p>
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-solid fa-location-dot text-lg mr-4"></i>Reading
                            </p>
                            <p class="flex items-center text-gray-800 text-sm">
                                <i class="fa-solid fa-users text-lg mr-2"></i>20
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-10">
                <h2 class="text-xl font-semibold mb-5">Upcoming bookings</h2>

                <div class="bg-white rounded-lg shadow-md flex items-center p-4">
                    <div class="bg-gray-200 rounded-lg shadow px-4 py-2 mr-5">
                        <p class="text-lg font-semibold">15</p>
                        <p class="text-sm text-center text-gray-800">Mar</p>
                    </div>
                    <img src="{{asset('images/funky.jpeg')}}" alt="Event Image" class="w-20 h-20 rounded mr-4">

                    <div class="flex-1">
                        <h3 class="font-semibold">The Funky Taco</h3>
                        <p class="text-sm text-gray-500">Freddie's Birthday Bash</p>
                        <p class="underline text-sm"><i>View profile</i></p>
                    </div>

                    <div class="flex items-center flex-1 justify-between">
                        <p class="text-sm text-gray-500"><i class="fa-solid fa-location-dot text-lg"></i> Richmond</p>
                        <p class="font-semibold text-gray-700">Total £370</p>
                        <button class="bg-black text-white rounded-full px-6 py-4 hover:bg-gray-800">
                            View booking
                            <span
                                class="inline-flex items-center rounded-full bg-yellow-100 px-2 py-1 text-xs font-bold text-yellow-800 ring-1 ring-inset ring-yellow-600/20">1</span>
                        </button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md flex items-center p-4 mt-4">
                    <div class="bg-gray-200 rounded-lg shadow px-4 py-2 mr-5">
                        <p class="text-lg font-semibold">07</p>
                        <p class="text-sm text-center text-gray-800">Jun</p>
                    </div>
                    <img src="{{asset('images/yakitori.jpeg')}}" alt="Event Image" class="w-20 h-20 rounded mr-4">

                    <div class="flex-1">
                        <h3 class="font-semibold">The Funky Taco</h3>
                        <p class="text-sm text-gray-500">Freddie's Birthday Bash</p>
                        <p class="underline text-sm"><i>View profile</i></p>
                    </div>

                    <div class="flex items-center flex-1 justify-between">
                        <p class="text-sm text-gray-500"><i class="fa-solid fa-location-dot text-lg"></i> Richmond</p>
                        <p class="font-semibold text-gray-700">Total £777</p>
                        <button class="bg-black text-white rounded-full px-9 py-4 hover:bg-gray-800">
                            View booking
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <div class="w-full md:w-1/5">
            <div class="bg-white rounded shadow-md h-fit divide-y mb-4">
                <div class="flex justify-between items-center p-6">
                    <h2 class="text-lg font-semibold">Messages</h2>
                    <a href="javascript:void(0)" class="text-sm underline">View all</a>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-2 p-6">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold">The Funky Taco</p>
                            <p class="text-xs text-gray-400">15 mins ago</p>
                        </div>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectet...</p>
                    </div>
                    <div class="py-2 p-6">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold">The Gorgeous Pizza...</p>
                            <p class="text-xs text-gray-400">15 mins ago</p>
                        </div>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectet...</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow-md h-fit divide-y">
                <div class="flex justify-between items-center p-6">
                    <h2 class="text-lg font-semibold">Payments</h2>
                    <a href="javascript:void(0)" class="text-sm underline">View all</a>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-4 p-6">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold">The Funky Taco</p>
                            <p class="">£370</p>
                        </div>
                    </div>
                    <div class="py-4 p-6">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold">The Gorgeous Pizza ...</p>
                            <p class="">£370</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full max-w-4xl mx-auto flex mt-10">
                <div
                    class="absolute left-0 top-1/4 transform translate-y-1/2 bg-white px-10 py-7 rounded-full shadow-lg circle">
                    <p class="text-sm ">Lorem ipsum</p>
                    <p class="text-sm ">dolor sit amet,</p>
                    <p class="text-sm ">consectetur</p>
                    <button class="mt-2 underline">Play video</button>
                </div>

                <img src="{{asset('images/bitmap.png')}}" alt="Decorative Pastries"
                    class="rounded-lg shadow-lg ml-auto">
            </div>

        </div>

    </div>

    <div class="container mx-auto px-6 flex flex-col md:flex-row gap-8 mt-10">
        <div class="container mx-auto p-4 border-t border-gray-300  mt-10">
            <div class="flex justify-between">
                <div class="flex-grow flex-basis-0 h-32 flex items-center justify-center text-black">
                    <div
                        class="w-113 h-46 mt-21.4 mr-88.6 font-hankengrotesk text-18 leading-2.56 text-left text-#292524">
                        Cartly Cover
                    </div>
                </div>
                <div class="flex-grow flex-basis-0 h-32 flex items-center justify-center text-black font-hankengrotesk">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 mr-2">
                        <path
                            d="m8.08 10.267 1.667 1.666L13.08 8.6m4.682-3.346A9.963 9.963 0 0 1 10.58 2.72a9.963 9.963 0 0 1-7.181 2.532 10.018 10.018 0 0 0-.319 2.514c0 4.66 3.187 8.575 7.5 9.685 4.313-1.11 7.5-5.026 7.5-9.685 0-.868-.11-1.71-.318-2.513z"
                            stroke="#292524" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Booking Protection
                </div>
                <div class="flex-grow flex-basis-0 h-32 flex items-center justify-center text-black font-hankengrotesk">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="mr-2">
                        <path
                            d="M12.652 7.317a1.583 1.583 0 1 0-3.166 0v3.959c0 .874-.71 1.583-1.584 1.583h4.75m-4.75-3.167h3.167m6.333 0a7.125 7.125 0 1 1-14.25 0 7.125 7.125 0 0 1 14.25 0z"
                            stroke="#292524" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Financial Security
                </div>
                <div class="flex-grow flex-basis-0 h-32 flex items-center justify-center text-black font-hankengrotesk">
                    4.5
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex-grow flex-basis-0 h-32 flex items-center justify-center text-black font-hankengrotesk">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="mr-2">
                        <path
                            d="M10 1.5L12.245 7.656L18.5 7.656L13.827 11.344L15.072 17.5L10 14.531L4.928 17.5L6.173 11.344L1.5 7.656L7.755 7.656L10 1.5Z"
                            stroke="#292524" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    5* Customer Service
                </div>
                <div class="flex-grow flex-basis-0 h-32 flex items-center justify-center text-black">Catering Excellence
                    Benchmark®</div>
                <div
                    class="flex-grow flex-basis-0 h-32 flex items-center justify-center text-black italic underline font-LibreBaskerville">
                    Find out more</div>
            </div>
        </div>
    </div>

</body>


</html>