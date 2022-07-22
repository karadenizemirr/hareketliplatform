@extends('admin.base.layout')
@section('title')
    Proje Ekle
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9 m-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Proje Ekleme Formu</h3>
                </div>
                @include('admin.base.errors')
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('project-add')}}" >
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Proje Adı</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Proje Adı">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Yüklenici Firma</label>
                            <input type="text" class="form-control" id="contractor" name="contractor" placeholder="Yüklenici Firma Adı">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Makine Cinsi</label>
                            <input type="text" class="form-control" id="machine_type" name="machine_type" placeholder="Makine tipi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adet</label>
                            <input type="number" class="form-control" id="stock" name="stock" placeholder="Adet sayısı">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Yükseklik</label>
                            <input type="number" class="form-control" id="height" name="height" placeholder="Yükseklik">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">İş</label>
                            <input type="text" class="form-control" id="jop" name="jop" placeholder="İş">
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
