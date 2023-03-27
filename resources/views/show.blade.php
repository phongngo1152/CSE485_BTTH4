@extends('master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Student Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Title</b></label>
            <div class="col-sm-10">
                {{ $task->title }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Description</b></label>
            <div class="col-sm-10">
                {{ $task->description }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Deadline</b></label>
            <div class="col-sm-10">
                {{ $task->deadline }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Status</b></label>
            <div class="col-sm-10">
                {{ $task->deadline }}
            </div>
        </div>
    </div>
</div>

@endsection('content')

