<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

   
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <form method="POST" action="{{ route('tasks.store') }}">
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
    <div class="container">
        @foreach($tasks as $task) 
        <div class="result">
            <h2>{{ $task->taskname }}</h2>
            <h3>{{ $task->description}}</h3>
            <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            <button class="edit-button">Edit</button>
            <form class="edit-form" method="POST" action="{{ route('tasks.update', $task->id) }}" style="display: none;">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="taskname">Task</label>
                    <input type="text" name="taskname" id="taskname" value="{{ $task->taskname }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" value="{{ $task->description }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        @endforeach
    </div>

    <script>
        const editButtons = document.querySelectorAll('.edit-button');
        const editForms = document.querySelectorAll('.edit-form');

        editButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                editForms[index].style.display = "block";
            });
        });
    </script>
</body>
</html>