@extends('admin.base.layout')
@section('title')
    Tekli Sayfalar
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 m-auto">
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tekli Sayfalar</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-responsive-lg text-center table-light">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Sayfa Adı</th>
                                            <th>İçerik Başlığı</th>
                                            <th>Footer</th>
                                            <th>Topbar</th>
                                            <th>Durum</th>
                                            <th>İşlem</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pages as $page)
                                            <tr>
                                                <td>{{$page->id}}</td>
                                                <td>{{$page->name}}</td>
                                                <td>{{$page->title}}</td>
                                                <td>{{$page->is_footer}}</td>
                                                <td>{{$page->is_topbar}}</td>
                                                <td>{{$page->is_active}}</td>
                                                <td>
                                                    <a href="{{route('single-page-delete', $page->id)}}">
                                                        <span class="badge badge-danger" >Sil</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
