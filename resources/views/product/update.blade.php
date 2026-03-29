<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('put')
        name: <input type="text" name="proName" value="{{ $product->name }}"><br>
        detail: <input type="text" name="proDetail" value="{{ $product->detail }}"><br>
        price: <input type="text" name="proPrice" value="{{ $product->price }}"><br>
        image:
        <textarea name="proImage" cols="30" rows="10">{{ $product->image }}</textarea><br>
        <input type="submit" value="update"><br>
    </form>
</body>

</html>
