<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Book</title>
</head>
<style>
    table, td,tr,th{
        border: 1px solid black;
        padding: 10px;
        border-collapse: collapse;
    }
</style>
<body>

    <h3>Book Info</h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>

        @foreach($book as $b)
            <tr>
                <td>{{$b['id']}}</td>
                <td>{{$b['name']}}</td>
                <td>{{$b['description']}}</td>
                <td>{{$b['price']}}</td>
            </tr>
        @endforeach

    </table>
    
</body>
</html>