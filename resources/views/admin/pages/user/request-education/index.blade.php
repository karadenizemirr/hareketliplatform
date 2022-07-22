@extends('admin.base.layout')
@section('title')
    Eğitim İstekleri
@endsection

@section('content')
    @extends('admin.base.layout')
    @section('style')
        <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    @endsection
    @section('title')
        Tüm Kategoriler
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Adı Soyadı
                                </th>
                                <th>
                                    T.C Kimlik No.
                                </th>
                                <th>
                                    Mail Adresi
                                </th>
                                <th>
                                    Telefon Numarası
                                </th>
                                <th>
                                    Ünvanı
                                </th>
                                <th>
                                    Şantiyesi
                                </th>
                                <th>
                                    Eğitim Tarihi
                                </th>
                                <th>
                                    Oluşturulma Tarihi
                                </th>
                                <th>
                                    İşlemler
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($requests as $request)
                                <tr>
                                    <td>{{$request->name}} {{$request->surname}}</td>
                                    <td>{{$request->ident_no}}</td>
                                    <td>{{$request->email}}</td>
                                    <td>{{$request->phone_number}}</td>
                                    <td>{{$request->degree}}</td>
                                    <td>{{$request->worksite}}</td>
                                    <td>{{$request->education_date}}</td>
                                    <td>{{$request->created_at}}</td>
                                    <td>
                                        <a href="{{route('request-education-delete', $request->id)}}">
                                            <span class="badge badge-danger" >
                                            Sil
                                        </span>
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
        </div>
    @endsection

    @section('script')
        <script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endsection

@endsection
