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
    {{ trans('Return Book') }}
@endsection

@section('content')
@section('breadcrumb_title', trans('Return Books'))
@section('breadcrumb_home', trans('Home'))
@section('breadcrumb_pagename', trans('Return Books'))

@section('breadcrumb', trans('Return Books'))

<div class="row" x-data='{data_record : @json(old())}'>
    {{-- check if can create --}}
    @include('admin.returnbook.crud')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 text-primary">
                    <i class="bx bxs-user me-1 font-22 text-primary"></i>{{ trans('List Return Book') }}
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.returnbook.list')
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

<!-- Toastr Notifications -->
<script>
    @if (Session::has('toastr'))
        {
            !!Session::get('toastr') !!
        }
    @endif
</script>

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
        // Expose the table for reloading later
        window.dataTableInstance = table;
    });
</script>

<script>
    function cancel() {
        $(`#cancel-btn`).addClass(`d-none`);
        $(`#my-form`).find(`[name="id"]`).val('');
        $(`#my-form`).find(`[name="cat_name"]`).val('');
        $(`#my-form`).find(`[name="cat_slug"]`).val('');

        $(`#status`).prop('checked', false);

        $(`#my-form`).find(`#viewer1`).attr('src',
            '{{ asset('
                                    images / place_holder.png ') }}');
    }

    function edit(data_edit) {
        cancel();
        $(`#cancel-btn`).removeClass(`d-none`);

        $(`#my-form`).find(`[name="id"]`).val(data_edit.id);
        $(`#my-form`).find(`[name="cat_name"]`).val(data_edit.cat_name);
        $(`#my-form`).find(`[name="cat_slug"]`).val(data_edit.cat_slug);

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


    $('body').on('click', '.objectDelete', function(e) {
        e.preventDefault();
        var object_id = $(this).data("id");
        var link = $(this).attr("href");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "DELETE",
                    url: link,
                    success: function(data) {
                        $("#tr_object_id_" + object_id).remove();
                        toastr.success(data.success);
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            }
        })
    });


    // Change Status
    $('body').on('change', '.ace-switch', function(e) {
        var object_id = $(this).data('id');
        var status = $(this).prop('checked') == true ? 1 : 0;
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '{{ route('admin.category_blogs.changeStatus') }}',
            data: {
                'status': status,
                'object_id': object_id
            },
            success: function(res) {
                toastr.success(res.success);
            },
            error: function(err) {
                console.log(err);
            }
        })
    }); //End Change Status
</script>
@endpush
