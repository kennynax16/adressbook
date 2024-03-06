@extends('app')
@section('content')
    <form action="{{route('update',$item->id)}}" method="post">
        @method('patch')
        @csrf

        <div class="mb-3">
            <label for="text" class="form-label">Fullname</label>
            <input type="text"  name="fullname" value="{{$item->fullname}}" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">City</label>
            <input type="text" name="city" value="{{$item->city}}" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Adress</label>
            <input type="text" name="adress" value="{{$item->adress}}" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Email</label>
            <input type="text" name="email" value="{{$item->email}}" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">PersonalNumber</label>
            <input type="text" name="PersonalNumber"  value="{{$item->PersonalNumber}}" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">WorkNumber</label>
            <input type="text" name="WorkNumber" value="{{$item->WorkNumber}}" class="form-control" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">AdditionalNumber</label>
            <input type="text" name="AdditionalNumber" value="{{$item->AdditionalNumber}}" class="form-control" id="text">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
