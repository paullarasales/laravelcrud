<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Course</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->product}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>