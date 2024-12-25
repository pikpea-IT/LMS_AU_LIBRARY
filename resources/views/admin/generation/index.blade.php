@extends('admin.layouts.master_layout')

@push('select2')
<link href="{{asset('backend')}}/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="{{asset('backend')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet" />
@endpush

@push('styles')
<!-- DataTables -->
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">



<link rel="stylesheet" href="{{asset('backend')}}/dist/css/toggle.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="{{asset('backend')}}/plugins/toastr/toastr.min.css">

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

@section('content')
@section('breadcrumb_title', trans('List Manage Generation'))
@section('breadcrumb_home', trans('Home'))
@section('breadcrumb_pagename', trans('List Manage Generation'))

@section('breadcrumb', trans('List Manage Generation'))

<div class="row" x-data='{data_record : @json(old())}'>
    @can($prefix . 'create')
    <div class="col-md-4 mb-2">
        <div class="card">
            <div class="card-body">

                <form id="my-form" action="{{ route('admin.generations.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" id="id" :value="data_record.id" name="id">
                    <div class="form-group">
                        <label for="code" class="form-control-label">
                            {{trans('Generation Code')}}
                        </label>
                        <input type="text" class="code form-control" :value="data_record.code" name="code" id="code">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-control-label">
                            {{trans('Generation Name')}}
                        </label>
                        <input type="text" class="name form-control" :value="data_record.name" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name_english" class="form-control-label">
                            {{trans('Generation Name')}}[English]
                        </label>
                        <input type="text" class="name_english form-control" :value="data_record.name_english"
                            name="name_english" id="name_english">
                    </div>
                    {{-- Description --}}
                    <div class="form-group">
                        <label for="description" class="form-control-label">
                            {{trans('Description')}}
                        </label>
                        <input type="text" class="description form-control" :value="data_record.description"
                            name="description" id="description">
                    </div>
                    <div class="form-group">
                        <label for="description_english" class="form-control-label">
                            {{trans('Description')}}[English]
                        </label>
                        <input type="text" class="description_english form-control"
                            :value="data_record.description_english" name="description_english"
                            id="description_english">
                    </div>
                    {{-- End Description --}}
                    {{-- Year Picker --}}
                    <div class="form-group">
                        <label for="yearPicker" class="form-control-label">
                            {{trans('Year')}}
                        </label>
                        <input type="text" class="year form-control" :value="data_record.year" name="year"
                            id="yearPicker">
                    </div>
                    {{-- End Year Picker --}}

                    <div class="form-group">
                        <label for="order" class="form-control-label">
                            {{trans('Order')}}
                        </label>
                        <input type="number" class="order form-control" :value="data_record.order" name="order"
                            id="order">
                    </div>


                    <div class="form-group mb-3">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="status" name="status" :checked="data_record.status">
                                        <label for="status">
                                            Status <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
                        <input class="btn btn-danger btn-block mt-2 d-none" id="cancel-btn" type="button"
                            value="{{ __('cancel') }}" onclick="cancel()">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endcan


    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 text-primary">
                    <i class="bx bxs-user me-1 font-22 text-primary"></i>{{ trans('List Manage Generation') }}
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{ trans('ID') }}</th>
                                <th>{{ trans('Generation Name') }}</th>
                                <th>{{ trans('Year') }}</th>
                                <th>{{ trans('Created At') }}</th>
                                <th>{{ trans('Status') }}</th>
                                <th>{{ trans('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody id="objectList">
                            @if (count($generations) > 0)
                            @foreach ($generations as $row)
                            <tr id="tr_object_id_{{ $row->id }}">
                                <td>{{ $row->id }}
                                    <br><span class="text-primary badge rounded-pill">{{ $row->code }}</span>
                                </td>
                                <td>{{ $row->name }}<br>{{ $row->name_english }}</td>
                                <td>{{ $row->year }}
                                    <br>
                                    @if ($row->is_current)

                                    <span class="text-primary badge rounded-pill">({{ trans('Current') }})</span>

                                    @endif
                                    <span class="text-primary badge rounded-pill"> {{$row->order}}</span>
                                </td>
                                <td>{{ date('d-M-Y', strtotime($row->created_at)) }}</td>
                                <td>
                                    <input id="status" name="status" data-id="{{ $row->id }}"
                                        {{ $row->status ? 'checked' : '' }} title="Status" type="checkbox"
                                        class="ace-switch input-lg ace-switch-yesno bgc-green-d2 text-grey-m2" />
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" x-on:click='data_record = @json($row)'
                                        onclick="edit({{ collect($row) }})"><i class="fa fa-edit"></i></a>

                                    <a href="#" class="btn btn-danger btn-sm bg-danger-danger text-white"
                                        onclick="formAlertDelete('{{ route('admin.generations.destroy', $row->id) }}','#record-{{ $row->id }}')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" alignt="center">
                                    {{ trans('No Data Found') }}
                                </td>
                            </tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>{{ trans('#') }}</th>
                                <th>{{ trans('Generation Name') }}</th>
                                <th>{{ trans('Year') }}</th>
                                <th>{{ trans('Created At') }}</th>
                                <th>{{ trans('Status') }}</th>
                                <th>{{ trans('Action') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<!-- DataTables  & Plugins -->
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Select2 -->
<script src="{{asset('backend')}}/plugins/select2/js/select2.full.min.js"></script>
<script src="{{asset('backend')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{asset('backend')}}/plugins/toastr/toastr.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
$(function() {
    "use strict";
    $(document).ready(function() {
        var table = $('#datatable').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });
        table.buttons().container()
            .appendTo('#datatable_wrapper .col-md-6:eq(0)');
    });
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script>
function cancel() {
    $(`#cancel-btn`).addClass(`d-none`);
    $(`#my-form`).find(`[name="id"]`).val('');
    $(`#my-form`).find(`[name="code"]`).val('');
    $(`#my-form`).find(`[name="name"]`).val('');
    $(`#my-form`).find(`[name="name_english"]`).val('');
    $(`#my-form`).find(`[name="description"]`).val('');
    $(`#my-form`).find(`[name="description_english"]`).val('');
    $(`#my-form`).find(`[name="is_current"]`).val('');
    $(`#my-form`).find(`[name="order"]`).val('');
    $(`#my-form`).find(`[name="year"]`).val('');

    $(`#status`).prop('checked', false);

    $(`#my-form`).find(`#viewer1`).attr('src', '{{ asset('
        images / place_holder.png ') }}');
}

function edit(data_edit) {
    cancel();
    $(`#cancel-btn`).removeClass(`d-none`);

    $(`#my-form`).find(`[name="id"]`).val(data_edit.id);
    $(`#my-form`).find(`[name="code"]`).val(data_edit.code);
    $(`#my-form`).find(`[name="name"]`).val(data_edit.name);
    $(`#my-form`).find(`[name="name_english"]`).val(data_edit.name_english);
    $(`#my-form`).find(`[name="description"]`).val(data_edit.description);
    $(`#my-form`).find(`[name="description_english"]`).val(data_edit.description_english);
    $(`#my-form`).find(`[name="is_current"]`).val(data_edit.is_current);
    $(`#my-form`).find(`[name="order"]`).val(data_edit.order);
    $(`#my-form`).find(`[name="year"]`).val(data_edit.year);

    // $(`#my-form`).find(`[name="slug"]`).val(data_edit.image);
    // $(`#my-form`).find(`[name="bg_color"]`).val(data_edit.bg_color);
    // $(`#my-form`).find(`[name="medium_id"]`).val(data_edit.medium_id);
    // $(`#my-form`).find(`[name="type"]`).val(data_edit.type);
    if (data_edit.status == 1) {
        $(`#status`).prop('checked', true);
    } else {
        $(`#status`).prop('checked', false);
    }
    $(`#my-form`).find(`[name="image_url"]`).val(data_edit.image);
    if (data_edit.image) {
        $(`#my-form`).find(`#viewer1`).attr('src', data_edit.image);
    }


    $('#yearPicker').datepicker({
        format: "yyyy", // Show only the year
        viewMode: "years", // Start with years view
        minViewMode: "years", // Restrict to years view only
        autoclose: true // Close the picker after selection
    });
}
</script>
@endpush