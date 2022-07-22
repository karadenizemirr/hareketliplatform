@extends('admin.base.layout')
@section('title')
    Arza Tipi İşlemleri
@endsection
@section('content')
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Arıza Tipi Ekle</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        @include('admin.base.errors')
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('fault-medicine-add')}}" >
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Arıza Adı</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Arıza adı">
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Ekle</button>
                            </div>
                        </form>
                    </div>
                </div>
            <!-- /.row -->
        </div>
    </div>
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Arıza Tipleri</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 m-auto">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tüm Arıza Tipleri</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-responsive-lg text-center table-dark">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Adı</th>
                                        <th>Oluşturulma Tarihi</th>
                                        <th>İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fault_medicine as $fm)
                                            <tr>
                                                <td>{{$fm->id}}</td>
                                                <td>{{$fm->name}}</td>
                                                <td>{{$fm->created_at}}</td>
                                                <td>
                                                    <a href="{{route('fault-medicine-delete', $fm->id)}}">
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
@endsection
