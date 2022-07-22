@extends('admin.base.layout')
@section('title')
    Haber Ekle / Güncelle
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9 m-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Haber Ekle</h3>
                </div>
                @include('admin.base.errors')
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('news-add-update')}}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Haber Başlığı</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Haber Başlığı"
                            value="{{$posts !== 'null' ? $posts->title : null}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="title">Haber Seo Başlığı</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="seo-başlık"
                                   value="{{$posts !== 'null' ? $posts->slug : null}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="title">Anahtar Kelimeler</label>
                            <input type="text" class="form-control" id="keyowrd" name="keyword" placeholder="Anahtar kelime"
                                   value="{{$posts !== 'null' ? $posts->description : null}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="title">Ürün Videosu</label>
                            <input type="text" class="form-control" id="video" name="video" placeholder="https://youtube..."
                                   value="{{$posts !== 'null' ? $posts->video : null}}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="description">Haber Açıklaması</label>
                            <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{$posts !== 'null' ? $posts->title : null}}</textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Dosya seçiniz</label>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Haber Detayları
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <textarea id="content" name="content">
                                        {{$posts !== 'null' ? $posts->title : null}}
                                    </textarea>
                                    </div>
                                </div>
                            </div>
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
@section('script')
            <script src="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
            <script>
                $(function () {
                    // Summernote
                    $('#content').summernote()
                })
            </script>
@endsection
