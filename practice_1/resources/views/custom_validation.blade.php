<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
                <form action="{{ route('custom_validation') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror"   name="username" id="">
                    <span class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" value="{{ old('useremail') }}" class="form-control @error('useremail') is-invalid @enderror"  name="useremail" id="">
                    <span class="text-danger">
                        @error('useremail')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
