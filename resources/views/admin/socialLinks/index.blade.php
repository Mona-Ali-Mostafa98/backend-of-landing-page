@extends('admin.layout')
@section('page_title', 'لينكات السوشيال List')
@section('content')
    <main id="main" class="main">
        <div class="row pagetitle mb-2">
            <div class="col-sm-6 d-flex justify-content-start">
                <h1 class="mb-2 fs-2">لينكات السوشيال </h1>
            </div>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mb-3">كل لينكات السوشيال</h5>

                            @include('admin.alerts')

                            <table class="table table-hover table-striped table-bordered border-dark" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم الموقع</th>
                                        <th scope="col">الحاله</th>
                                        <th scope="col">تاريخ الانشاء</th>
                                        <th scope="col">الاجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($links as $link)
                                        <tr>
                                            <td>{{ $link->id }}</td>
                                            <td>{{ $link->website_name }}</td>
                                            <td>{{ $link->status }}</td>
                                            <td>{{ $link->created_at->toDateString() }}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <a href="{{ route('admin.social-links.show', $link->id) }}"
                                                        class=" btn btn-sm btn-success">عرض</a>
                                                    <a href="{{ route('admin.social-links.edit', $link->id) }}"
                                                        class=" me-2 btn btn-sm btn-primary">تعديل</a>
                                                    <form class=" me-2 form-inline" method="post"
                                                        action="{{ route('admin.social-links.destroy', $link->id) }}">
                                                        @csrf
                                                        @method ('delete')
                                                        <button type="submit" class="btn btn-sm btn-danger "
                                                            onclick="return confirm('هل انت متاكد من حذف هذا العنصر؟')">حذف</button>
                                                    </form>
                                                </div>
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

    </main>
@endsection
