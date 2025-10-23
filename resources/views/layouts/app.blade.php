<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Radish.')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Sheppards:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.nav') 
    
   

   
</body>
</html>