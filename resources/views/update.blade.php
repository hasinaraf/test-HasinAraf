@extends('layouts.main')
@push('head')
    <head></head>
@endpush


@section('main')

<div class="container">
    <div class="d-flex justify-content-between align-items-certer my-5">
        <div class="h2">Update Todo </div>
        <a href="{{route("home")}}" class="btn btn-primary btn-lg ">Back</a>
    </div>

    

    <div class="card">
        <div class="card-body">
            <form action="{{route("updateData")}}" method="post">
                @csrf
                <label for="" class="form-label mt-2">Name</label>
                <input type="text" name="name" class="form-control" value="{{$task->name}}">

                <label for="" class="form-label mt-4">Work</label>
                <input type="text" name="work" class="form-control" value="{{$task->work}}">

                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="date" class="form-control" value="{{$task->date}}">
                <input type="number" name="id" value="{{$task->id}}" hidden>
                <button class="btn btn-primary btn-lg mt-4">Update ToDo</button>
            </form>
        </div>
    </div>
    


</div>



@endsection