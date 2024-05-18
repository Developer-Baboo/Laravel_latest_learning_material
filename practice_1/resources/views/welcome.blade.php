<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <table class="table table-striped table-bordered">
                    @foreach ($users as $user )
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->city }}</td>
                            </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>