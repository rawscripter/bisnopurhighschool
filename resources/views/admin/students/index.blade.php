@extends('layouts.admin.app')


@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Students</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-3">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">SL No.</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Trans. ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date Of Birth</th>
                                    <th scope="col">Father Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Application Date</th>
                                    <th scope="col">Application</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <th scope="row">{{ $student->uuid }}</th>
                                        <td>{{ $student->transaction_id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($student->birth_date)->format('d-m-Y') }}
                                        </td>
                                        <td>{{ $student->father_name }}</td>
                                        <td>{{ $student->desire_class }}</td>
                                        <td>
                                            @if ($student->status == 0)
                                                <span class="badge badge-warning">Pending</span>
                                            @endif

                                            @if ($student->status == 1)
                                                <span class="badge badge-success">Approved</span>
                                            @endif
                                            @if ($student->status == 2)
                                                <span class="badge badge-danger">Rejected</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($student->created_at)->format('d-m-Y') }}
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{ route('pdf.view', $student->uuid) }}"
                                                class="btn btn-outline-primary btn-sm mr-3">
                                                View Application
                                            </a>

                                            <a target="_blank" href="{{ route('pdf.download', $student->uuid) }}"
                                                class="btn btn-outline-warning btn-sm mr-3">
                                                Download Application
                                            </a>
                                        </td>
                                        <td>
                                            @if ($student->status != 1)
                                                <a onclick="return confirm('Are you sure you want to approve this application?');"
                                                    href="{{ route('student.approve', $student->uuid) }}"
                                                    class="btn btn-outline-success btn-sm mr-3">
                                                    Approve
                                                </a>
                                            @endif
                                            @if ($student->status != 2)
                                                <a onclick="return confirm('Are you sure you want to reject this application?');"
                                                    href="{{ route('student.reject', $student->uuid) }}"
                                                    class="btn btn-outline-danger btn-sm mr-3">
                                                    Reject
                                                </a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
