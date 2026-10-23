
@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="page-card p-4 p-md-5">
            <h1 class="h3 mb-1">Edit Student</h1>
            <p class="text-secondary mb-4">
                Update the information for {{ $student->name }}.
            </p>

            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')
                @include('students._form')
            </form>
        </div>
    </div>
</div>
@endsection

