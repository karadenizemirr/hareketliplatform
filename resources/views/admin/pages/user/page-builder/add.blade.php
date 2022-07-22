@extends('admin.base.layout')
@section('title')
    Sayfa Ekle
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
                    <h3 class="card-title">Sayfa Ekle</h3>
                </div>
                @include('admin.base.errors')
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('single-page-add')}}" >
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Sayfa Adı</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Sayfa adı">
                        </div>
                        <div class="form-group">
                            <label for="title">Sayfa Seo Başlığı</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Sayfa Seo Başlığı">
                        </div>
                        <div class="form-group">
                            <label for="title">İçerik Başlığı</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="İçerik başlığı..">
                        </div>
                        <div class="form-group">
                            <label for="title">İçerik Açıklaması</label>
                            <textarea type="text" class="form-control" id="description" name="description"></textarea>
                        </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-check">
                                   <input type="checkbox" class="form-check-input" id="is_topbar">
                                   <label class="form-check-label" for="is_topbar">Topbarda Göster</label>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-check">
                                   <input type="checkbox" class="form-check-input" id="is_footer">
                                   <label class="form-check-label" for="is_footer">Footer Göster</label>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-check">
                                   <input type="checkbox" class="form-check-input" id="is_active">
                                   <label class="form-check-label" for="is_active">Aktifleştir</label>
                               </div>
                           </div>
                       </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Sayfa İçeriği
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <textarea id="content" name="content"></textarea>
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
