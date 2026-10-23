
@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="page-card p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-start mb-4">
                <div>
                    <h1 class="h3 mb-1">Student Details</h1>
                    <p class="text-secondary mb-0">
                        Student ID: {{ $student->id }}
                    </p>
                </div>
                <a href="{{ route('students.edit', $student) }}"
                   class="btn btn-primary">Edit</a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width: 35%">Full Name</th>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $student->phone ?: '—' }}</td>
                    </tr>
                    <tr>
                        <th>Course</th>
                        <td>{{ $student->course }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $student->gender ?: '—' }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $student->date_of_birth?->format('d M Y') ?? '—' }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $student->address ?: '—' }}</td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td>{{ $student->created_at->format('d M Y, h:i A') }}</td>
                    </tr>
                </table>
            </div>

            <a href="{{ route('students.index') }}"
               class="btn btn-outline-secondary mt-3">Back to Students</a>
        </div>
    </div>
</div>
@endsection

