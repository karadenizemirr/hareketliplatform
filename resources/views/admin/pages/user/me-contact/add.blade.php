@extends('admin.base.layout')
@section('title')
    iletişim Bilgileri
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9 m-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">İletişim Bilgileri</h3>
                </div>
                @include('admin.base.errors')
                <div>
                    @foreach($contacts as $contact)
                        <p>
                            Telefon Numarası: {{$contact->phone_number}}
                        </p>
                        <p>
                            Mail Adresi: {{$contact->email}}
                        </p>
                        <p>
                            Şehir: {{$contact->city}}
                        </p>
                        <p>
                            Adres: {{$contact->address}}
                        </p>
                    @endforeach
                </div>
                @include('admin.base.errors')
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{route('me-contact-add-update')}}">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Telefon Numarası</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                   placeholder="Telefon Numarası">
                        </div>
                        <div class="form-group">
                            <label for="title">Mail Adresi</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Mail adresi">
                        </div>
                        <div class="form-group">
                            <label for="title">Şehir</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Şehir">
                        </div>
                        <div class="form-group">
                            <label for="title">Adres</label>
                            <textarea type="text" class="form-control" id="address" name="address"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Ekle / Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
