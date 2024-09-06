<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pixel Positions</title>
</head>
<body>
    <header>
        <div>
            <a href="">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
            </a>
        </div>
        <nav>
            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
        </nav>
            <div>
                <a href="">Post a Job</a>
            </div>
    </header>
        <main>
            {{$slot}}
        </main>
</body>
</html>