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
                {{-- <pre>
                    @php
                        print_r($errors->all())
                    @endphp
                </pre> --}}
                {{-- @if ($errors->any())
                    <ul class="alert alert-danger" >
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
                <form action="{{ route('addUser') }}" method="POST">
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
                    <label class="form-label">Password</label>
                    <input type="text" value="{{ old('userpass') }}" class="form-control @error('userpass') is-invalid @enderror"  name="userpass" id="">
                    <span class="text-danger">
                        @error('userpass')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" value="{{ old('userage') }}" class="form-control @error('userage') is-invalid @enderror" name="userage" id="">
                    <span class="text-danger">
                        @error('userage')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <select class="form-control @error('usercity') is-invalid @enderror" value="{{ old('usercity') }}" name="usercity" id="">
                        <option value="mithi">Mithi</option>
                        <option value="diplo">Diplo</option>
                        <option value="chelhar">Chelhar</option>
                        <option value="salamkot">Salamkot</option>
                    </select>
                    <span class="text-danger">
                        @error('usercity')
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
