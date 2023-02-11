@extends('layouts.admin')
@section('content')

<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Task
                            <a href="{{ url('admin/category') }}" class="btn btn-primary float-end text-white">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Task</label>
                                    <input type="text" name="name" class="form-control" />
                                    @error('name') <small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Description</label>
                                    <textarea type="text" name="description" placeholder="Task description..." class="form-control" rows="3"></textarea>
                                    @error('description') <small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Status</label><br/>
                                    <input type="checkbox" name="status" />&nbsp;Taken
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end text-white">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
@endsection