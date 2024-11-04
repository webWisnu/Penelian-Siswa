<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-red-700 h-16 flex items-center justify-between px-4 text-white">

        <div class="text-2xl">
            Navbar
        </div>


        <div class="flex gap-4">
            <div>
                <a href="/login">Login</a>
            </div>
            <div>
                <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>
</body>

</html>
