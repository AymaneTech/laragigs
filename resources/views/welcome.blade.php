<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <h1>all posts test</h1>
    @foreach($listings as $listing)
        <div class="">
            <h2>{{$listing["title"]}}</h2>
            <p>{{$listing["description"]}}</p>
        </div>
    @endforeach
</body>
</html>
