
@extends('layouts.app')

@section('title', 'All Students')

@section('content')
<div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
    <div>
        <h1 class="h3 mb-1">Student Records</h1>
        <p class="text-secondary mb-0">Manage all registered students.</p>
    </div>
    <a href="{{ route('students.create') }}" class="btn btn-primary">
        + Add New Student
    </a>
</div>

<div class="page-card p-3 p-md-4">
    <form action="{{ route('students.index') }}" method="GET"
          class="row g-2 mb-4">
        <div class="col-sm">
            <input type="search" name="search" value="{{ $search }}"
                   class="form-control"
                   placeholder="Search name, email or course..."
                   aria-label="Search students">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-dark">Search</button>
            <a href="{{ route('students.index') }}"
               class="btn btn-outline-secondary">Reset</a>
        </div>
    </form>

    <div class="d-flex justify-content-between mb-3">
        <span class="text-secondary small">
            Total matching records: {{ $students->total() }}
        </span>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Student</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Phone</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td class="fw-semibold">{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->phone ?: '—' }}</td>
                        <td class="text-end text-nowrap">
                            <a href="{{ route('students.show', $student) }}"
                               class="btn btn-sm btn-outline-info">View</a>
                            <a href="{{ route('students.edit', $student) }}"
                               class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('students.destroy', $student) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this student?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-5">
                            <p class="text-secondary mb-2">No students found.</p>
                            <a href="{{ route('students.create') }}"
                               class="btn btn-primary btn-sm">Add your first student</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $students->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection

