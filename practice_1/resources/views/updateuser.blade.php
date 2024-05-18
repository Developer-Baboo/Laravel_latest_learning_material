@extends('layout')
@section('title')
    Update User Record
@endsection
@section('content')
{{-- {{ route('updateuser') }} --}}
<form action="" method="POST">
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
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection