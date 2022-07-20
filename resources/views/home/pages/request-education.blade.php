@extends('home.base.layout')
@section('title')
    Eğitim Başvurusu
@endsection

@section('page-title')
    <!-- Page title -->
    <section id="page-title" >
        <div class="container">
            <div class="page-title">
                <h1>Eğitim Başvurusu</h1>
                <span>Eğitim başvurusunu buradan gerçekleştirebilirsiniz.</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Pages</a> </li>
                    <li class="active"><a href="#">Contact Us</a> </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9 m-auto">
                    <h3>Eğitim Başvuru Formu</h3>
                    <form class="row" action="{{route('request-education')}}" method="post">
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
                            <label for="name">T.C. Kimlik Numarası</label>
                            <input type="text" class="form-control" id="ident_no" name="ident_no" placeholder="T.C Kimlik No">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Çalıştığınız Firmanın Ünvanı</label>
                            <input type="text" class="form-control" id="degree" name="degree" placeholder="Çalıştığınız firmanın ünvanı">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Çalıştığınız Şantiye</label>
                            <input type="text" class="form-control" id="worksite" name="worksite" placeholder="Çalıştığınız şantiye">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Eğitim Tarihi</label>
                            <input class="form-control" type="date" id="education_date" name="education_date">
                        </div>
                        <div class="form-group col-md-12 text-center">
                            <button class="btn btn-warning text-black" >
                                Başvuru Yap
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
