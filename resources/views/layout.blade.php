<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <header style="width: 100% ; display: flex ; justify-content: center">
    <ul style="display: flex; gap: 40px ;list-style: none;">
        <li>
            <a href={{route('home')}} style="color: black">Home</a>
        </li>
        <li>
            <a href="/about" style="color: black">About</a>
        </li>
        <li>
            <a href="/contact" style="color: black">Contact</a>
        </li>
        <li>
            <a href="/post" style="color: black">Post</a>
        </li>
        <li>
            <a href={{route('blog')}} style="color: black">Blog</a>
        </li>
        <li>
            <a href={{route('articls')}} style="color: black">Articls</a>
        </li>
    </ul>
   </header>
    @yield('content')

</body>
</html>