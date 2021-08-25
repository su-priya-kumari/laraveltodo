@extends('base')
@section('content')
<div class="conatiner mt-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <form action="{{ url('update-todo/'.$todo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$todo->title}}">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="decription" class="form-control" value="{{$todo->decription}}">
                </div>
                <div class="mb-3">
                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control" value="{{$todo->location}}">
                </div>
                <div class="form-group d-grid gap-2">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection