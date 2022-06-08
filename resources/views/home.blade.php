<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel Project</title>
</head>

<body class="text-center">
    <header>
        <a href="{{ url('/') }}">HOME</a>
        <a href="{{ url('/about-me') }}">ABOUT ME</a>
        <a href="{{ route('about-me-2') }}">ABOUT ME 2</a>


    </header>
    <main>
        <h1>My First Laravel Project! Hello world :D</h1>
        <h3>Languages I studied:</h3>
        <ul>
            @foreach($languages as $language)
            <li>{{ $language }}</li>
            @endforeach
        </ul>
    </main>
</body>

</html>

<style>
    header{
        height: 80px;
        background-color: lightgray;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a{
        text-decoration: none;
        margin-right: 1rem;
    }
    .text-center {
        text-align: center;
    }
</style>