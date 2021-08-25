@extends('base')
@section('content')
<div class="conatiner mt-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            @foreach ($items as $item)
                <div class="card mt-3">
                    <div class="card-body mx-auto">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->decription}}</td>
                                <td>{{$item->location}}</td>
                                <td><form action="{{route('todo.destroy',['todo'=>$item->id])}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                  </form>
                                  <td>
                                    <a href="{{ url('edit-todo/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                   
                                  </td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection