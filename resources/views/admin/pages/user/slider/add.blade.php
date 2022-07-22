@extends('admin.base.layout')
@section('title')
    Slide Ekle
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Slider Ekleme Formu</h3>
                </div>
                @include('admin.base.errors')
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('slider-add')}}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider Başlığı</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Slider başlığı..">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slogan</label>
                            <input type="text" class="form-control" id="slogan" name="slogan" placeholder="Slogan.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Buton Metni</label>
                            <input type="text" class="form-control" id="button_text" name="button_text" placeholder="Buton kullanmak istemiyorsanız boş bırakın">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Buton Linki</label>
                            <input type="text" class="form-control" id="button_link" name="button_link" placeholder="Buton kullanmak istemiyorsanız boş bırakın.">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Dosya Seçiniz</label>
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
