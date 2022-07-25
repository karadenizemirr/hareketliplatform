@extends('admin.base.layout')
@section('title')
    Slider İşlemleri
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        {{$slider != 'null' ? "Slider Güncelleme Formu" : "Slider Ekleme Formu"}}

                    </h3>
                </div>
                @include('admin.base.errors')
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('slider-add')}}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider Başlığı</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Slider başlığı.."
                            value="{{$slider !== 'null' ? $slider->title : null}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slogan</label>
                            <input type="text" class="form-control" id="slogan" name="slogan" placeholder="Slogan."
                                   value="{{$slider !== 'null' ? $slider->slogan : null}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Buton Metni</label>
                            <input type="text" class="form-control" id="button_text" name="button_text"
                                   placeholder="Buton kullanmak istemiyorsanız boş bırakın"
                                   value="{{$slider !== 'null' ? $slider->button_text : null}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Buton Linki</label>
                            <input type="text" class="form-control" id="button_link" name="button_link"
                                   placeholder="Buton kullanmak istemiyorsanız boş bırakın."
                                   value="{{$slider !== 'null' ? $slider->button_link : null}}"
                            >
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Dosya Seçiniz</label>
                        </div>
                        @if($slider !== 'null')
                            <div class="slider_image">
                                <img src="{{asset('uploads/slider/' . $slider !== 'null' ? $slider->image : null )}}"
                                     alt="" class="w-25">
                            </div>
                        @endif
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">
                            {{$slider != 'null' ? "Güncelle" : "Ekle"}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
@endsection
