@extends('admin.layout')
@section('page_title', 'الأحصائيات List')
@section('content')
    <main id="main" class="main">
        <div class="row pagetitle mb-2">
            <div class="col-sm-6 d-flex justify-content-start">
                <h1 class="mb-2 fs-2">الأحصائيات
                    <a href="{{ route('admin.statistics.create') }}" class="ms-3 btn btn-outline-primary mb-2 ">
                        <i class="bi bi-plus-lg"></i> أنشاء أحصائيه</a>
                </h1>
            </div>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mb-3">كل الأحصائيات</h5>

                            @include('admin.alerts')

                            <table class="table table-hover table-striped table-bordered border-dark" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        {{-- <th scope="col">ID</th> --}}
                                        <th scope="col">العنوان</th>
                                        <th scope="col">العداد</th>
                                        <th scope="col">الحاله</th>
                                        <th scope="col">تاريخ الانشاء</th>
                                        <th scope="col">الاجراءت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($statistics as $statistic)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            {{-- <td>{{ $statistic->id }}</td> --}}
                                            <td class="text-primary fw-bold">{{ $statistic->title }}</td>
                                            <td>{{ $statistic->counter }}</td>
                                            <td>{{ $statistic->status }}</td>
                                            <td>{{ $statistic->created_at }}</td>
                                            <td class="d-flex justify-content-start">
                                                <a href="{{ route('admin.statistics.show', $statistic->id) }}"
                                                    class=" btn btn-sm btn-success">عرض</a>
                                                <a href="{{ route('admin.statistics.edit', $statistic->id) }}"
                                                    class=" me-2 btn btn-sm btn-primary">تعديل</a>
                                                <form class=" me-2 form-inline" method="post"
                                                    action="{{ route('admin.statistics.destroy', $statistic->id) }}">
                                                    @csrf
                                                    @method ('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger "
                                                        onclick="return confirm('هل انت متاكد من حذف هذا العنصر؟')">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
