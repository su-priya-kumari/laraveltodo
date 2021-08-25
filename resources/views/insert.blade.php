@extends('base')
@section('content')
<div class="conatiner mt-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <form action="{{ url('add-todo') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="decription" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control">
                </div>
                <div class="form-group d-grid gap-2">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection