
@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="page-card p-4 p-md-5">
            <h1 class="h3 mb-1">Add New Student</h1>
            <p class="text-secondary mb-4">Enter the student's information below.</p>

            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                @include('students._form')
            </form>
        </div>
    </div>
</div>
@endsection

