<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>
</head>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
        </tr>
    @endforeach


</table>

</body>
</html>
