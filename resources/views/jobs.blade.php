<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
@foreach($jobs as $job)
    {{$jobs['id']}}
    {{$job['title']}}
    {{$job['salary']}}
@endforeach
</body>
</html>
