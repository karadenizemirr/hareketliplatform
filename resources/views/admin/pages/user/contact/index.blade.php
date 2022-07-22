@extends('admin.base.layout')
@section('title')
    Mesaj Kutusu
@endsection

@section('content')
        <!-- Main content -->
        <section class="content">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Gelen Kutusu</h3>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-controls">
                                <!-- /.btn-group -->
                                <a href="{{route('contact-list')}}" type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                                <!-- /.float-right -->
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                    @foreach($requests as $request)
                                        <tr>
                                            <td class="mailbox-name"><a href="{{route('contact-detail', $request->id)}}}">{{$request->name}} {{$request->surname}}</a></td>
                                            <td class="mailbox-subject">{{$request->subject}}
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">{{$request->created_at}}</td>
                                            <td>
                                                <a href="{{route('contact-delete', $request->id)}}">
                                                    <span class="badge badge-danger" >
                                                    Sil
                                                </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
