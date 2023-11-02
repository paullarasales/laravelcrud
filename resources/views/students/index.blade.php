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
    <h2>Add Students</h2>
    <a href="{{ route('students.redirect') }}">Click here</a>
    <table border='1'>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->firstname}}</td>
                <td>{{$student->middlename}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->course}}</td>
                <td>
                    <form action="{{route('students.destroy', $student->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('students.edit', $student->id)}}">Update</a>
                </td>

            </tr>
        @endforeach
    </table>
</body>
</html>
