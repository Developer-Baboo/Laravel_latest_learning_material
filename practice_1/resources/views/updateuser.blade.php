@extends('layout')
@section('title')
    Update User Record
@endsection
@section('content')
{{-- {{ route('updateuser') }} --}}
<form action="{{ route('users.update', $users->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" value="{{ $users->name }}" class="form-control @error('username') is-invalid @enderror"   name="username" id="">
        <span class="text-danger">
            @error('username')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" value="{{ $users->email }}" class="form-control @error('useremail') is-invalid @enderror"  name="useremail" id="">
        <span class="text-danger">
            @error('useremail')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label class="form-label">Age</label>
        <input type="text" value="{{ $users->age }}" class="form-control @error('userage') is-invalid @enderror" name="userage" id="">
        <span class="text-danger">
            @error('userage')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <select class="form-control @error('usercity') is-invalid @enderror" name="usercity" id="">
            <option value="mithi" {{ $users->city == 'mithi' ? 'selected' : '' }}>Mithi</option>
            <option value="diplo" {{ $users->city == 'diplo' ? 'selected' : '' }}>Diplo</option>
            <option value="chelhar" {{ $users->city == 'chelhar' ? 'selected' : '' }}>Chelhar</option>
            <option value="salamkot" {{ $users->city == 'salamkot' ? 'selected' : '' }}>Salamkot</option>
        </select>
        <span class="text-danger">
            @error('usercity')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a> --}}
    </div>
</form>
{{-- <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a> --}}
@endsection