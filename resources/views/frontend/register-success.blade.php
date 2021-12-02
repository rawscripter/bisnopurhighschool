@extends('layouts.frontend.app')

@section('content')
    <main id="main">

        <section class="inner-page download-page">
            <div class="container">

                <div class="header-title">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1><strong>
                                    <span style="color: #008e46;"> Contratulations!</span> Registration
                                    Successful.</strong>
                            </h1>

                            <a class="download-button" href="{{ route('student.generate-pdf', $student->uuid) }}">Download
                                Copy</a>

                            <a class="go-back-button" href="{{ route('student.create') }}">Go Back</a>
                        </div>
                    </div>
                </div>

        </section>
        <br>

    </main>
@endsection
