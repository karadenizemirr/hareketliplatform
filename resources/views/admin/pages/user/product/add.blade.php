@extends('admin.base.layout')
@section('title')
    Ürün Ekle
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/codemirror/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/css/select2.min.css')}}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/dropzone/min/dropzone.min.css')}}">
@endsection
@section('content')
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Lütfen eklenecek ürün opsiyonları doğru giriniz.</h3>
                @include('admin.base.errors')
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
                <!-- FORM -->
                <form action="{{route('product-add-update', $product != 'null' ? $product->id : null)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Adı</label>
                                <input type="text" class="form-control"
                                       id="name"
                                       name="name"
                                       placeholder="Ürün Adı"
                                       value="{{$product != 'null' ? $product->name : null}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Seo Başlığı</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                       placeholder="Seo başlığı"
                                       value="{{$product != 'null' ? $product->slug : null}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Açıklaması</label>
                                <textarea name="description" id="description" cols="30" rows="10"
                                          class="form-control">{{$product != 'null' ? $product->description: null}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kategoriler</label>
                                <select class="categories form-control" name="categories[]" multiple="multiple">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="product_image" name="product_image">
                                <label class="custom-file-label" for="product_image">Dosya seçiniz</label>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Teknik Detaylar
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea id="technique_detail" name="technique_detail">
                                        {{$product != 'null' ? $product->technique_detail : null}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Platform Özellikleri
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea id="platform_detail" name="platform_detail">
                                        {{$product != 'null' ? $product->platform_detail : null}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Emniyet Detayları
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea id="safety_features" name="safety_features">
                                        {{$product != 'null' ? $product->safety_features : null}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Konfügrasyon Ayarları
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea id="configuration" name="configuration">
                                        {{$product != 'null' ? $product->configuration : null}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Bileşenler
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea id="components" name="components">
                                        {{$product != 'null' ? $product->components : null}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Diğer Detaylar
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea id="other_detail" name="other_detail">
                                        {{$product != 'null' ? $product->other_detail : null}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary w-100">
                            İşlemi Uygula
                        </button>
                    </div>
                </form>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection

@section('script')
    <!-- Summernote -->
    <script src="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/select2/js/select2.min.js')}}"></script>
    <!-- dropzonejs -->
    <script src="{{asset('assets/admin/plugins/dropzone/min/dropzone.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.categories').select2();
        });
        $(function () {
            // Summernote
            $('#technique_detail').summernote()
        })
        $(function () {
            // Summernote
            $('#platform_detail').summernote()
        })
        $(function () {
            // Summernote
            $('#safety_features').summernote()
        })
        $(function () {
            // Summernote
            $('#configuration').summernote()
        })
        $(function () {
            // Summernote
            $('#components').summernote()
        })
        $(function () {
            // Summernote
            $('#other_detail').summernote()
        })
    </script>
@endsection
