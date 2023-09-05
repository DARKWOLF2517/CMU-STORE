@extends('layouts.student_navigation_bar')


@section('main-content')
<div class="content">
    <div class="container breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/student_dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Student Organization</li>
            <li class="breadcrumb-item"><a href="/student_organization_attendance">Attendance</a></li>
          </ol>
        </nav>
    </div>

    <student-attendance
    target_route="{{ route('get-events') }}"
    show = {{true}}
    >
    </student-attendance>

</div>

@endsection

@section('custom-script')
@endsection