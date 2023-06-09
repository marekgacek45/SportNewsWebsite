<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportowe Newsy - @yield('title')</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">


    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('components/nav')
    <main class="section container">
        @include('../admin/components/sidebar')
    

    </main>



   
</body>


</html>
