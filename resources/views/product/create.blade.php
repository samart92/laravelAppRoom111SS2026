<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{route('product.store')}}" method="post">
       @csrf
        name: <input type="text" name="proName"><br>
        detail: <input type="text" name="proDetail"><br>
        price: <input type="text" name="proPrice"><br>
        image:
        <textarea name="proImage" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Add"><br>
    </form>
</body>

</html>
