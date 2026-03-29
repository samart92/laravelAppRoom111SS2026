<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <a href="/product/create">add new product</a>

    <ol>
        @foreach ($products as $row)
            <li>{{ $row->name }}
                <a href="/product/{{ $row->id }}/edit">Update</a>
                <form action="{{ route('product.destroy', $row->id) }}" method="post">

                    @csrf
                    @method('delete')
                    <button type="submit">delete</button>
                </form>

            </li>
        @endforeach
    </ol>

</body>

</html>
