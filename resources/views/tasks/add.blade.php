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
    <h2>Add Product</h2>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="taskname">Task</label>
            <input type="text" name="taskname" id="taskname" required >
        </div>

        <div class="form-group">
            <label fo="description">Description</label>
            <input type="text" name="description" id="description" required>
        </div>


        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
</div>


</body>
</html>
