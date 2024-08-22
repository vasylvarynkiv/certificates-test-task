<form action="{{ route('certificate.generate') }}" method="POST">
    @csrf
    <div class="mb-3 row">
        <div class="col">
            <label for="certificate_number" class="form-label">Сertificate number:</label>
            <input type="text" class="form-control @error('certificate_number') is-invalid @enderror"
                   id="certificate_number" name="certificate_number" value="{{ old('certificate_number') }}" required
                   placeholder="1230929DX...">
            @error('certificate_number')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
        </div>
        <div class="col">
            <label for="course_name" class="form-label">Course name:</label>
            <input type="text" class="form-control @error('course_name') is-invalid @enderror" id="course_name"
                   name="course_name" value="{{ old('course_name') }}" required placeholder="Full-stack developer">
            @error('course_name')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col">
            <label for="student_name" class="form-label">Student name:</label>
            <input type="text" class="form-control @error('student_name') is-invalid @enderror" id="student_name"
                   name="student_name" value="{{ old('student_name') }}" required placeholder="John Dou">
            @error('student_name')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
        </div>
        <div class="col">
            <label for="course_completion_date" class="form-label">Course completion date:</label>
            <input type="date" class="form-control @error('course_completion_date') is-invalid @enderror"
                   id="course_completion_date" name="course_completion_date" value="{{ old('course_completion_date') }}"
                   required>
            @error('course_completion_date')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
        </div>
    </div>
    <div class="col-auto text-center">
        <button type="submit" class="btn btn-primary">Generate certificate</button>
    </div>
</form>
