@extends('admin.layout')
@section('page_title', "Show $feature->title feature")
@section('content')
    <main id="main" class="main">
        <div class="row pagetitle mb-2">
            <div class="col-sm-6 d-flex justify-content-start">
                <h1 class="mb-2 fs-2">المزايا
                    <a href="{{ route('admin.features.index') }}" class="ms-3 btn btn-outline-primary mb-2 "><i
                            class="bi bi-caret-left-fill"></i> Back</a>
                </h1>
            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mb-3">تفاصيل عن الميزه رقم "{{ $feature->id }}" </h5>
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">ID الميزه</div>
                                    <div class="col-lg-9 col-md-8">{{ $feature->id }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">صورة الميزه</div>
                                    <div class="col-lg-9 col-md-8">
                                        <img id="image" src="{{ asset('images/features/' . $feature->image) }}"
                                            alt="" height="60" width="60">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">وصف الميزه</div>
                                    <div class="col-lg-9 col-md-8">{{ $feature->description }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">حاله الميزه </div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ $feature->status }}
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">تاريخ الانشاء</div>
                                    <div class="col-lg-9 col-md-8">{{ $feature->created_at }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">تاريخ التعديل </div>
                                    <div class="col-lg-9 col-md-8">{{ $feature->updated_at }}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
