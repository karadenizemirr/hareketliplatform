@extends('admin.base.layout')
@section('title')
    Servis İstek Detayı
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
                <div class="card-header d-flex p-0">
                    <ul class="nav nav-pills ml-auto p-2">
                        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">İletişim Bilgileri</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Arıza Bilgileri</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <p>
                                <strong>Adı Soyadı:</strong> {{$request->name}} {{$request->surname}}
                            </p>
                            <p>
                                <strong>Mail Adresi:</strong> {{$request->email}}
                            </p>
                            <p>
                                <strong>Telefon Numarası:</strong> {{$request->phone_number}}
                            </p>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <p>
                                <strong>Arıza Tarihi:</strong> {{$request->date}}
                            </p>
                            <p>
                                <strong>Talep Oluşturulma Tarihi:</strong> {{$request->created_at}}
                            </p>
                            <p>
                                <strong>Firma Ünvanı ve Proje:</strong> {{$request->degree_or_project}}
                            </p>
                            <p>
                                <strong>Blok ve Cephesi:</strong> {{$request->block_front}}
                            </p>
                            <p>
                                <strong>Arıza Türü:</strong> {{$request->fault_type}}
                            </p>
                            <p>
                                <strong>Ürün Tipi:</strong> {{$request->product_type}}
                            </p>
                            <p>
                                <strong>Arıza Tipi:</strong> {{$request->fault_medicine}}
                            </p>
                            <img src="{{asset($request->images)}}" alt="">
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
