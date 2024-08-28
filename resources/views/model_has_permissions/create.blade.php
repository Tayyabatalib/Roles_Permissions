<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Model & Permissions</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('model_has_permissions.store') }}" method="POST">
                            @csrf
                            <label for=""><strong>Model Type:</strong></label>
                            <input type="text" name="model_type" class="rounded mb-3" placeholder="Enter Model Type">
                            <br>

                            <label for="model_id"><strong>Models:</strong></label>
                            <select name="model_id" id="model_id" class="mb-3 rounded" style="width:50%;">
                            @foreach ($models as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                            </select>
                            <br>

                            <label for="permission_id"><strong>Permissions:</strong></label>
                            <select name="permission_id" id="permission_id" class="mb-3 rounded" style="width:50%;">
                            @foreach ($permissions as $permission)
                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                            </select>
                            <br>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                        <a href="{{ route('model_has_permissions.index') }}" class="btn btn-primary mt-3">Back To List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>