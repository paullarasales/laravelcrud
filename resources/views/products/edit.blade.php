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

<div class="container">
    <h2>Edit Student</h2>
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="productname">Product Name</label>
            <input type="text" name="productname" id="productname" value="{{ $product->productname }}">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" value="{{ $product->quantity }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


</body>
</html>
