@extends('admin.layout')
@section('page_title', "Update $setting->title setting")
@section('content')
    <main id="main" class="main">
        <div class="row pagetitle mb-2">
            <div class="col-sm-6 d-flex justify-content-start">
                <h1 class="mb-2 fs-2">الأعدادات
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
                            <h5 class="card-title fs-4 mb-3">التعديل على الأعدادات </h5>
                            <form method="POST" action="{{ route('admin.settings.update', $setting->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label">اللوجو</label>
                                    <div class="col-sm-10">
                                        <input name="logo" type="file" id="logo"
                                            class="form-control mb-3 @error('logo') is-invalid @enderror">
                                        @error('logo')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                        <img id="logo" src="{{ asset('images/settings/' . $setting->logo) }}"
                                            style="height: 80px; width: 100px;" alt="no logo uploaded">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="title" class="col-sm-2 col-form-label">العنوان </label>
                                    <div class="col-sm-10">
                                        <input name="title" type="text" id="title" placeholder="ادخل عنوان للتطبيق"
                                            value="{{ old('title', $setting->title) }}"
                                            class="form-control @error('title') is-invalid @enderror">
                                        @error('title')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="google_play_url" class="col-sm-2 col-form-label">رابط تطبيق الاندرويد
                                    </label>
                                    <div class="col-sm-10">
                                        <input name="google_play_url" type="text" id="google_play_url"
                                            placeholder="ادخل عنوان للتطبيق"
                                            value="{{ old('google_play_url', $setting->google_play_url) }}"
                                            class="form-control @error('google_play_url') is-invalid @enderror">
                                        @error('google_play_url')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="app_store_url" class="col-sm-2 col-form-label">رابط تطبيق ios </label>
                                    <div class="col-sm-10">
                                        <input name="app_store_url" type="text" id="app_store_url"
                                            placeholder="ادخل عنوان للتطبيق"
                                            value="{{ old('app_store_url', $setting->app_store_url) }}"
                                            class="form-control @error('app_store_url') is-invalid @enderror">
                                        @error('app_store_url')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="sub_title" class="col-sm-2 col-form-label">العنوان الفرعى</label>
                                    <div class="col-sm-10">
                                        <textarea name="sub_title" id="sub_title" rows="4" placeholder="ادخل عنوان فرعى للتطبيق "
                                            class="col-sm-12 form-control @error('sub_title') is-invalid @enderror">{{ old('sub_title', $setting->sub_title) }}</textarea>
                                        @error('sub_title')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="description" class="col-sm-2 col-form-label">الوصف</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="description" rows="4" placeholder="ادخل وصف للتطبيق"
                                            class="col-sm-12 form-control @error('description') is-invalid @enderror">{{ old('description', $setting->description) }}</textarea>
                                        @error('description')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="application_screens" class="col-sm-2 col-form-label">وصف عن شاشات
                                        الموقع</label>
                                    <div class="col-sm-10">
                                        <textarea name="application_screens" id="application_screens" rows="4" placeholder="ادخل وصف لشاشات التطبيق"
                                            class="col-sm-12 form-control @error('application_screens') is-invalid @enderror">{{ old('application_screens', $setting->application_screens) }}</textarea>
                                        @error('application_screens')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">تعديل</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
