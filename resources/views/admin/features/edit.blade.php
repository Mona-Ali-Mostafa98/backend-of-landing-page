@extends('admin.layout')
@section('page_title', 'Create New feature')
@section('content')
    <main id="main" class="main">
        <div class="row pagetitle mb-2">
            <div class="col-sm-6 d-flex justify-content-start">
                <h1 class="mb-2 fs-2">المزايا
                    <a href="{{ route('admin.features.index') }}" class="ms-3 btn btn-outline-primary mb-2 "><i
                            class="bi bi-caret-left-fill"></i> رجوع</a>
                </h1>
            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mb-3">تعديل ميزه</h5>
                            <form method="POST" action="{{ route('admin.features.update', $feature->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('admin.features.form')
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
