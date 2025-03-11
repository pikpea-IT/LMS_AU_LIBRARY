@extends('admin.layouts.master_layout')

@push('select2')
    <link href="{{ asset('backend') }}/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet" />
@endpush

@push('styles')
    <!-- DataTables -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">



    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/toggle.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/toastr/toastr.min.css">

    <!-- Bootstrap CSS (if not included) -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <style>
        input.ace-switch.ace-switch-yesno:checked::before {
            content: "{{ trans('global.yes') }}";
        }

        input.ace-switch.ace-switch-yesno::before {
            content: "{{ trans('global.no') }}";
        }

        input.ace-switch.ace-switch-onoff:checked::before {
            content: "{{ trans('global.on') }}";
        }

        input.ace-switch.ace-switch-onoff::before {
            content: "{{ trans('global.off') }}";
        }
    </style>
@endpush

@section('pagetitle')
    {{ trans('Notification') }}
@endsection

@section('content')
@section('breadcrumb_title', trans('Notification'))
@section('breadcrumb_home', trans('Home'))
@section('breadcrumb_pagename', trans('Notification'))

@section('breadcrumb', trans('Notification'))
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <a href="compose.html" class="btn btn-primary btn-block mb-3">Alert</a>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Folders</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <i class="fas fa-inbox"></i> Inbox
                                <span class="badge bg-primary float-right">12</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-envelope"></i> Sent
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-file-alt"></i> Drafts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-filter"></i> Junk
                                <span class="badge bg-warning float-right">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-trash-alt"></i> Trash
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            {{-- <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Labels</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-danger"></i>
                                Important
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-warning"></i> Promotions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-primary"></i>
                                Social
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div> --}}
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Inbox</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Mail">
                            <div class="input-group-append">
                                <div class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-reply"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td class="mailbox-star"><a href="#"><i
                                                class="fas fa-star text-warning"></i></a></td>
                                    <td class="mailbox-name"><a href="read-mail.html">Au Pierce</a></td>
                                    <td class="mailbox-subject"><b>Books 3.0 Issue</b> - Trying to find a solution
                                        to this problem...
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date">5 mins ago</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                            <i class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-reply"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="float-right">
                            1-50/100
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Select2 -->
<script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
<script src="{{ asset('backend') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('backend') }}/plugins/toastr/toastr.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Include Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endpush
