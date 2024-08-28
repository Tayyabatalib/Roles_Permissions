<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" style="width:40%;">
                    <div class="card-header">
                        <h1>User Edit Form</h1>
                    </div>
                    <div class="card-body bordered">
                        <form action="{{ route('users.update',$user) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="">Name:</label><br>
                            <input type="text" name="name" class="mt-3 mb-2 rounded" value="{{ $user->name }}" placeholder="Enter User Name">
                            <br>
    
                            <label for="">Email:</label><br>
                            <input type="email" name="email" class="mt-3 mb-3 rounded" value="{{ $user->email }}" placeholder="Enter Email">
                            <br>

                            <label for="">Password:</label><br>
                            <input type="password" name="password" class="mt-3 mb-3 rounded" value="{{ $user->password }}" placeholder="Enter password">
                            <br>
    
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        <a href="{{ route('users.index') }}" class="btn btn-info mt-4">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>