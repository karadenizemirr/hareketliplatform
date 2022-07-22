@extends('admin.base.layout')
@section('title')
    {{$mail->subject}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Mesaj İçeriği</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <h5>{{$mail->subject}}</h5>
                            <h6>Tarafından: {{$mail->name}} {{$mail->surname}}
                                <span class="mailbox-read-time float-right">{{$mail->created_at}}</span></h6>
                        </div>
                        <!-- /.mailbox-read-info -->
                        <div class="mailbox-controls with-border text-center">
                            <div class="btn-group">
                                <a href="{{route('contact-delete', $mail->id)}}" class="btn btn-default btn-sm" data-container="body" title="Delete">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>
                        </div>
                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            <p>
                                {{$mail->message}}
                            </p>
                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
