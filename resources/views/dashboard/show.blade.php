<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello Kholil Blog 1</h1>
    <h2>{{ $nilai }}</h2>
    <h2>{{ $users }}</h2>
    @foreach ($dataArray as $item)
        {{ $item }}
    @endforeach
    tes 123
</body>
</html>