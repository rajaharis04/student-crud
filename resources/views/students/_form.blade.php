
@php
    $isEdit = $student->exists;
@endphp

<div class="row g-3">
    <div class="col-md-6">
        <label for="name" class="form-label required">Full Name</label>
        <input id="name" type="text" name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $student->name) }}"
               maxlength="255" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label required">Email Address</label>
        <input id="email" type="email" name="email"
               class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email', $student->email) }}"
               maxlength="255" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="phone" class="form-label">Phone Number</label>
        <input id="phone" type="text" name="phone"
               class="form-control"
               value="{{ old('phone', $student->phone) }}"
               maxlength="30">
    </div>

    <div class="col-md-6">
        <label for="course" class="form-label required">Course</label>
        <input id="course" type="text" name="course"
               class="form-control @error('course') is-invalid @enderror"
               value="{{ old('course', $student->course) }}"
               maxlength="255" required>
        @error('course')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="gender" class="form-label">Gender</label>
        <select id="gender" name="gender" class="form-select">
            <option value="">Select gender</option>
            @foreach(['Male', 'Female', 'Other'] as $gender)
                <option value="{{ $gender }}"
                    @selected(old('gender', $student->gender) === $gender)>
                    {{ $gender }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="date_of_birth" class="form-label">Date of Birth</label>
        <input id="date_of_birth" type="date" name="date_of_birth"
               class="form-control"
               max="{{ date('Y-m-d') }}"
               value="{{ old('date_of_birth', $student->date_of_birth?->format('Y-m-d')) }}">
    </div>

    <div class="col-12">
        <label for="address" class="form-label">Address</label>
        <textarea id="address" name="address" rows="3"
                  maxlength="5000" class="form-control">{{ old('address', $student->address) }}</textarea>
    </div>
</div>

<div class="d-flex gap-2 mt-4">
    <button type="submit" class="btn btn-primary">
        {{ $isEdit ? 'Update Student' : 'Save Student' }}
    </button>
    <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">
        Cancel
    </a>
</div>

