<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>update category</h1>

    <form action="/cat/1" method="post">
        @csrf
        @method('put')
        <button type="submit">Update</button>
    </form>

    <form action="/cat/1" method="post">
        @csrf
        @method('delete')
        <button type="submit">delete</button>

    </form>
</body>

</html>
