@extends('admin.layout')
@section('page_title', "Show '$statistic->title' Statistic")
@section('content')
    <main id="main" class="main">
        <div class="row pagetitle mb-2">
            <div class="col-sm-6 d-flex justify-content-start">
                <h1 class="mb-2 fs-2">الأحصائيات
                    <a href="{{ route('admin.statistics.index') }}" class="ms-3 btn btn-outline-primary mb-2 "><i
                            class="bi bi-caret-left-fill"></i> رجوع</a>
                </h1>
            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mb-3">عرض تفاصيل عن الاحصائيه التى عنوانها :
                                '{{ $statistic->title }}' </h5>
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">رقم الاحصائيه</div>
                                    <div class="col-lg-9 col-md-8">{{ $statistic->id }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">عنوان الاحصائيه</div>
                                    <div class="col-lg-9 col-md-8">{{ $statistic->title }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">العداد</div>
                                    <div class="col-lg-9 col-md-8">{{ $statistic->counter }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">حالة الاحصائيه</div>
                                    <div class="col-lg-9 col-md-8"> {{ $statistic->status }} </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">تاريخ الانشاء</div>
                                    <div class="col-lg-9 col-md-8">{{ $statistic->created_at }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">تاريخ التعديل</div>
                                    <div class="col-lg-9 col-md-8">{{ $statistic->updated_at }}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
