<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>About Me {{ $name }}</h1>
    @if (strlen($job) > 1)
    <h3>Job: {{ $job }}</h3>
    @endif

    @foreach($articles as $article)
    <div>{{ $article }}</div>
    @endforeach
    <span>:)</span>
</body>
</html>