<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;1,600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
     </style>
</head>
<body>
    <form action="{{route('products.add')}}" method="POST">
        @csrf
        @method("POST")
        <input type="text" name="productname" placeholder="Product Name"><br><br>
        <input type="text" name="price" placeholder="Price">
        <input type="text" name="quantity" placeholder="Quantity">
        <input type="submit" value="Add a New Product">
    </form>
</body>
</html>