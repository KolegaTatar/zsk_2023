<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<style>
    table, td, tr, th{
        border: solid black 1px;
        border-collapse: collapse;
        padding: 10px;
    }
</style>
<body>
    <h3>All cars</h3>
    <ul>
    @foreach($car as $c)
    <li>{{$c['brand']}}</li>
    @endforeach
    </ul>

    <table>
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Price</th>
        </tr>

        @foreach($car as $c)
        <tr>
            <th>{{$c['id']}}</th>
            <td>{{$c['brand']}}</td>
            <td>{{$c['model']}}</td>
            <td>{{$c['price']}}</td>
        </tr>
        @endforeach


    </table>
</body>
</html>