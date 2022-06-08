<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel Project</title>
</head>
<body class="text-center">
    <h1>My First Laravel Project! Hello world :D</h1>
    <h3>Languages I studied:</h3>
    <ul>
        @foreach($languages as $language)
        <li>{{ $language }}</li>
        @endforeach
    </ul>
</body>
</html>

<style>
    .text-center{
        text-align: center;
    }
</style>