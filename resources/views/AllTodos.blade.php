@extends('layouts.HomeLayout')
@section('title', 'All Todos')
  @section('content')
    <!-- Form Start -->
    <div class="container">
       <div class="row">
    @foreach ($Todos as $Todo)
             <div class="col-lg-4">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">{{$Todo->title}}- {{ $Todo->created_at->diffForHumans() }} <span class="badge bg-{{$Todo->status ? 'success' : 'danger'}}">{{$Todo->status ? 'Completed' : 'Pending'}}</span></div>
                <div class="card-body">
                  <p>{{$Todo->description}}</p>
                  <p>Deadline: {{$Todo->deadline}}</p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-sm btn-primary" href="#">Mark As Complete</a>
                  <a class="btn btn-sm btn-warning" href="{{ route('edit', $Todo->id) }}">Edit</a>
                  <a class="btn btn-sm btn-danger" href="{{ route('delete', $Todo->id) }}">Delete</a>
                </div>
        </div>
     </div>
     @endforeach
    </div>
    </div>
     
    <!-- Form End -->
        @endsection