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
    {{ trans('Payment') }}
@endsection

@section('content')
@section('breadcrumb_title', trans('Payments'))
@section('breadcrumb_home', trans('Home'))
@section('breadcrumb_pagename', trans('Payments'))

@section('breadcrumb', trans('Payments'))


<div class="col-md-12 mb-2">
    <div class="card">
        <div class="card-body">
            <div class="row" x-data='{data_record : @json(old())}'>
                <div class="col-12 col-sm-12">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-four-profile" role="tab"
                                    aria-controls="custom-tabs-four-profile" aria-selected="true">Payment List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill"
                                    href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                    aria-selected="false">Add Payment</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel"
                                aria-labelledby="custom-tabs-four-home-tab">
                                @include('admin.payment.crud')l
                            </div>
                            <div class="tab-pane fade active show" id="custom-tabs-four-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-four-profile-tab">
                                @include('admin.payment.list')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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
