@extends('app')
@section('content')
    <form action="{{route('update',$user->id)}}" class="mb-3" method="post">
        @method('patch')
        @csrf

        <div class="mb-3">
            <label for="text" class="form-label">name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="text">
        </div>
        @error('name')
        <p class="text-danger">Ошибка</p>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">Role</label>
            <input type="text" name="role" value="{{$user->role}}" class="form-control" id="text">
        </div>
        @error('role')
        <p class="text-danger">Ошибка</p>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">City</label>
            <input type="text" name="city" value="{{$user->city}}" class="form-control" id="text">
        </div>
        @error('City')
        <p class="text-danger">Ошибка</p>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">Adress</label>
            <input type="text" name="adress" value="{{$user->adress}}" class="form-control" id="text">
        </div>
        @error('Adress')
        <p class="text-danger">Ошибка</p>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">Email</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control" id="text">
        </div>
        @error('Email')
        <p class="text-danger">Ошибка</p>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">PersonalNumber</label>
            <input type="text" name="PersonalNumber" value="{{$user->PersonalNumber}}" class="form-control" id="text">
        </div>
        @error('PersonalNumber')
        <p class="text-danger">Ошибка</p>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">WorkNumber</label>
            <input type="text" name="WorkNumber" value="{{$user->WorkNumber}}" class="form-control" id="text">
        </div>
        @error('WorkNumber')
        <p class="text-danger">Ошибка</p>
        @enderror
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
