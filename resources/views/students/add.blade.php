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
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" required >
        </div>

        <div class="form-group">
            <label for="middlename">Middle Name</label>
            <input type="text" name="middlename" id="middlename" required>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" id="gender" required>
        </div>

        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" name="course" id="course" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>


</body>
</html>
