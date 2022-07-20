@extends('admin.base.layout')
@section('title')
    Kategori Ekle
@endsection
@section('content')
    <div class="row">
            <div class="col-md-6 m-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Kategori Ekle</h3>
                    </div>
                    @include('admin.base.errors')
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('category-add')}}" >
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori Adı</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Kategori Adı">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Seo Başlık Adı</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Otomatik doldurulacaktır.">
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
