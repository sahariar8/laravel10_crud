<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student</title>
</head>

<body class="container border p-5 ">
    <h1 class="text-center alert alert-danger">Student Create Form</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>


        @endif
    </div>

    <form method="post" action="{{ route('student.update',['student'=> $student]) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ $student->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Roll</label>
            <input type="number" class="form-control" name="roll" placeholder="Enter Your Roll"  value="{{ $student->roll }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email"  value="{{ $student->email }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" placeholder=" Enter Your Address"  value="{{ $student->address }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</body>

</html>