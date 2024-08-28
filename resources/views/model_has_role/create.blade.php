<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                <div class="card mt-4" style="width:50%;">
                    <div class="card-header">
                        <h2>Model_Has_Roles Form</h2>
                    </div>
                    <div class="card-body bordered">
                        <form action="{{ route('model_has_roles.store') }}" method="POST">
                            @csrf
                            <label for=""><strong>Model Type:</strong></label><br>
                            <input type="text" name="model_type" class="rounded mt-2 mb-2" placeholder="Enter Model Type">
                            <br>

                            <label for=""><strong>Roles:</strong></label><br>
                            <select name="role"  class="rounded mt-3 mb-2" style="width: 36%;">
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <br>
    
                            <label for=""><strong>Models:</strong></label><br>
                            <select name="model" class="rounded mt-3 mb-4" style="width: 36%;">
                                @foreach ($models as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                                @endforeach
                            </select>
                            <br>
    
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                        <a href="{{ route('model_has_roles.index') }}" class="btn btn-info mt-4">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>