<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    */* Mengatur seleksi teks di seluruh halaman */
    * {
    -webkit-user-select: none; /* Untuk Chrome, Safari, dan Opera */
    -moz-user-select: none;    /* Untuk Firefox */
    -ms-user-select: none;     /* Untuk IE dan Edge */
    }
    </style>

    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


    @include('layouts.navbar')
    @include('layouts.hero')
    @include('layouts.aboutme')
    @include('layouts.myskills')
    @include('layouts.qualification')
    @include('layouts.portfolio')
    @include('layouts.service')
    @include('layouts.testimonials')
    {{-- @include('layouts.hobi') --}}
    @include('layouts.footer')



</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        {{-- script button dropdwon --}}


        {{-- script animasi aos --}}
        <script>
            AOS.init();
        </script>


</html>
