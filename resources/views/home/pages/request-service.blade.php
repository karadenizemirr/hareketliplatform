@extends('home.base.layout')
@section('title')
    Servis Talebi
@endsection

@section('page-title')
    <!-- Page title -->
    <section id="page-title" >
        <div class="container">
            <div class="page-title">
                <h1>Servis Talebi
                </h1>
                <span>Servis talebini buradan gerçekleştirebilirsiniz.</span>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9 m-auto">
                    <h3>Servis Talep Formu</h3>
                    @include('admin.base.errors')
                    <form class="row" action="{{route('request-service')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-md-6">
                            <label for="name">Adınız</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Adınız..">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Soyadınız</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Soyadınız..">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Telefon Numaranız</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Telefon Numaranız..">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Mail Adresiniz</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="mail@mail.com">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">İstenilen Servis Tarihi / Saati</label>
                            <input class="form-control" type="datetime-local" name="date" id="date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Firma Ünvanı ve Proje</label>
                            <input type="text" class="form-control" id="degree_or_project" name="degree_or_project" placeholder="Ünvan ve proje adı">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Blok ve Cephesi (Var ise makina numarası ekleyiniz.)</label>
                            <input type="text" class="form-control" id="block_front" name="block_front" placeholder="Ünvan ve proje adı">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Arıza Türünü Seçiniz.</label>
                            <select class="form-select" name="fault_type" id="fault_type">
                                <option disabled selected>Arıza Türü Seçiniz.</option>
                                <option value="elektrik">Elektrik</option>
                                <option value="platform">Platform</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Ürün Tipini Seçiniz..</label>
                            <select class="form-select" name="product_type" id="product_type">
                                <option disabled selected>Ürün Türü Seçiniz.</option>
                                <option value="asansör">Asansör</option>
                                <option value="platform">Platform</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Ariza Tipin</label>
                            <select name="fault_medicine" id="fault_medicine" class="form-select">
                                <option selected disabled >Arıza tipini seçiniz</option>
                                @foreach($fault_medicine as $fm)
                                    <option value="{{$fm->name}}">
                                        {{$fm->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Resim ya da Video</label>
                            <input type="file" class="form-control" name="images" id="images">
                        </div>
                        <div class="form-group col-md-12 text-center">
                            <button class="btn btn-warning text-black" type="submit" >
                                Talep Oluştur
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
