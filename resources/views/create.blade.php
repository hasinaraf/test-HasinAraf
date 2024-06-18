@extends('layouts.main')
@push('head')
    <head></head>
@endpush


@section('main')

<div class="container">
    <div class="d-flex justify-content-between align-items-certer my-5">
        <div class="h2">Create/Add Todo </div>
        <a href="{{route("home")}}" class="btn btn-primary btn-lg ">Back</a>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{route("store")}}" method="post">
                @csrf
                <label for="" class="form-label mt-2">Name</label>
                <input type="text" name="name" class="form-control">
                <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>

                <label for="" class="form-label mt-4">Work</label>
                <input type="text" name="work" class="form-control">
                <div class="text-danger">
                    @error('work')
                        {{$message}}
                    @enderror
                </div>

                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="date" class="form-control">
                <div class="text-danger">
                    @error('date')
                        {{$message}}
                    @enderror
                </div>

                <button class="btn btn-primary btn-lg mt-4">Add ToDo</button>
            </form>
        </div>
    </div>
    


</div>



@endsection