@extends('admin.layout')
@section('page_title', "Show $setting->title setting")
@section('content')
    <main id="main" class="main">
        <div class="row pagetitle mb-2">
            <div class="col-sm-6 d-flex justify-content-start">
                <h1 class="mb-2 fs-2">Settings
                    <a href="{{ route('admin.settings.index') }}" class="ms-3 btn btn-outline-primary mb-2 "><i
                            class="bi bi-caret-left-fill"></i> Back</a>
                </h1>
            </div>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mb-3"> عرض كل تفاصيل الأعدادات </h5>
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold"> # </div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->id }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">اللوجو</div>
                                    <div class="col-lg-9 col-md-8">
                                        <img id="image" src="{{ asset('images/settings/' . $setting->logo) }}"
                                            alt="" height="100" width="150">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">العنوان الرئيسى</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->title }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">>رابط تطبيق الاندرويد</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->google_play_url }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">>رابط تطبيق ios</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->app_store_url }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">العنوان الفرعى</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->sub_title }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">الوصف</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->description }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">>وصف عن شاشات
                                        الموقع</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->application_screens }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">تاريخ الانشاء</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->created_at }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label text-primary fw-bold">تاريخ التعديل</div>
                                    <div class="col-lg-9 col-md-8">{{ $setting->updated_at }}</div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
