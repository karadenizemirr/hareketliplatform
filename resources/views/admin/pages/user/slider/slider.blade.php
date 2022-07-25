@extends('admin.base.layout')
@section('title')
    Tüm Slider Elemanları
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 m-auto">
                            <div class="card-header">
                                <a class="btn btn-info btn-round" href="{{route('slider-add')}}">
                                    Slider Ekle
                                </a>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Slider Elemanları</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-responsive-lg text-center table-light">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Başlık</th>
                                            <th>Slogan</th>
                                            <th>Resim</th>
                                            <th>İşlem</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sliders as $slider)
                                            <tr>
                                                <td>{{$slider->id}}</td>
                                                <td>{{$slider->title}}</td>
                                                <td>
                                                    <a href="{{asset('uploads/slider/' . $slider->image)}}"  target="_blank">
                                                        <img class="w-25" src="{{asset('uploads/slider/' . $slider->image)}}" alt="{{str_slug($slider->title)}}">
                                                    </a>
                                                </td>
                                                <td>{{$slider->slogan}}</td>
                                                <td>
                                                    <a href="{{route('slider-delete', $slider->id)}}">
                                                        <span class="badge badge-danger" >Sil</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('slider-add', $slider->id)}}">
                                                        <span class="badge badge-success" >Düzenle</span>
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
