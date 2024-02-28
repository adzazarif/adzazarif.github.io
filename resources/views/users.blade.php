<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Halaman users</h2>

    <form action="/users" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="address">
        <button type="submit">tambah</button>
    </form>

    @if (session()->has("success"))
        <h1>{{ session()->get("success") }}</h1>
    @endif

    @foreach ($data as $item)
        <ul>
            <li>{{ $item['name'] }}</li>
            <li>{{ $item['email'] }}</li>
            <li>{{ $item['address'] }}</li>
            <a href="/detail-user/{{ $item['name'] }}/{{ $item['email'] }}/{{ $item['address'] }}">detail</a>
        </ul>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>