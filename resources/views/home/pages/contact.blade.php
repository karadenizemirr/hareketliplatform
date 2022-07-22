@extends('home.base.layout')
@section('content')

    <!-- CONTENT -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">İletişime Geçin</h3>
                    <p>Mesajınızı bizlere iletin bizler sizi arayalım.</p>
                    @include('admin.base.errors')
                    <div class="m-t-30">
                        <form action="{{route('contact')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Adınız</label>
                                    <input type="text" class="form-control" name="name" id="name" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Soyadınız</label>
                                    <input type="text" class="form-control" name="surname" id="surname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Telefon Numarası</label>
                                    <input type="text" class="form-control" name="phone_number" id="phone_number" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mail Adresi</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="">Konu</label>
                                    <input type="text" class="form-control" name="subject" id="subject" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Mesajınız</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning text-black-50" type="submit" >
                                    Mesajı Gönder
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Adres Bilgileri</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                <strong>Hareketli Platform.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">Telefon Numarası: (123) 456-7890
                            </address>
                        </div>
                    </div>
                    <!-- Google Map -->
                    <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes"></div>
                    <!-- end: Google Map -->
                </div>
            </div>
        </div>
    </section>
    <!-- end: Content -->
@endsection
@section('script')
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ'></script>
    <script type="text/javascript" src="{{asset('assets/user/plugins/gmap3/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/user/plugins/gmap3/map-styles.js')}}"></script>
@endsection
