@extends('layouts.main')
@push('head')
    <head></head>
@endpush


@section('main')

<div class="container">
    <div class="d-flex justify-content-between align-items-certer my-5">
        <div class="h2">All To Dos </div>
        <a href="{{route("create")}}" class="btn btn-primary btn-lg">Add To Do</a>
    </div>


    {{-- table --}}
    
    <table class="table table-stripped table-dark">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>

        @foreach($task as $task)
            
        <tr class="align-middle">
            <td>{{$task->name}}</td>
            <td>{{$task->work}}</td>
            <td>{{$task->date}}</td>
            <td><a href="{{route("edit", $task->id)}}" class="btn btn-success btn-sm">Update</a>
                <a href="{{route("delete", $task->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach

        
    </table>


</div>



@endsection