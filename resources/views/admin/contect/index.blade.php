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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

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
    {{ trans('Contect') }}
@endsection

@section('content')
@section('breadcrumb_title', trans('Contect'))
@section('breadcrumb_home', trans('Home'))
@section('breadcrumb_pagename', trans('Contect'))

@section('breadcrumb', trans('Contect'))
<div class="col-md-12 mb-2">
    <div class="card">
        <div class="card-body">
            <div class="container pt-50 pb-50">
                <div class="row">
                    <div class="col-md-6">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="id"></label>
                            <input type="text" id="id" placeholder="Your Name" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="lastName"></label>
                            <input type="text" id="sibn" placeholder="Email" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="id"></label>
                            <input type="text" id="id" placeholder="Subject" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="lastName"></label>
                            <input type="text" id="sibn" placeholder="Phone" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 mb-2 pb-2">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="emailAddress"></label>
                            <textarea id="inputDescription" placeholder="Messeng" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <span class="btn btn-warning col fileinput-button dz-clickable">
                            <i>Send</i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mb-2">
    <div class="card">
        <div class="card-body">
            <div class="container pt-50 pb-50">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="title-card">
                            <h2>Public Relations and Cooperation Office</h2>
                        </div>
                        <div class="singel-news news-list">
                            <div class="row">
                                <div class="col-sm-4  text-center">
                                    <img class="profile-user-img img-fluid img"
                                        src="{{ asset('backend') }}/dist/img/khengchenda.jpg" alt="News">
                                </div>
                                <div class="col-sm-8">
                                    <div class="news-cont mt-20">
                                        <h2>Asst. Prof. Prov. KHENG Chenda</h2>
                                        <p>Director of Public Relations and Cooperation office </p>

                                        <ul class="ul-card">
                                            <li><i class="fa-solid fa-phone fa-phone-card"></i>+855 11 902 216 </li>
                                            <br>
                                            <li><i class="fa-brands fa-telegram fa-telegram-card"></i>+855 11 902 216
                                            </li><br>
                                            <li><i class="fa-solid fa-envelope fa-envelope-card"></i>info@angkor.edu.kh
                                                | chendakheng9@gmail.com</li><br>
                                            <li><i class="fa-brands fa-facebook-f fa-facebook-f-card"></i>Angkor
                                                University</li><br>
                                            <li><i class="fa-solid fa-location-dot fa-location-dot-card"></i>171206,
                                                Borey Seang Nam, Phum Khnar, Sangkat Chreav, Krong Siem Reap, Siem Reap
                                                Province</li><br>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </div> <!-- singel news -->
                    </div>
                    <div class="col-lg-12 mb-30">
                        <div class="title-card">
                            <h2>Academic and examination Office</h2>
                        </div>
                        <div class="singel-news news-list">
                            <div class="row">
                                <div class="col-sm-4  text-center">
                                    <img class="profile-user-img img-fluid img"
                                        src="{{ asset('backend') }}/dist/img/yimphallyka.jpg" alt="News">
                                </div>
                                <div class="col-sm-8">
                                    <div class="news-cont mt-20">
                                        <h2>Asst. Prof. YIM Phallyka</h2>
                                        <p>Director of Academic and Examination Office </p>

                                        <ul class="ul-card">
                                            <li><i class="fa-solid fa-phone fa-phone-card"></i>+855 12 55 77 32 | +855
                                                10 55 77 32 </li><br>
                                            <li><i class="fa-brands fa-telegram fa-telegram-card"></i>+855 12 55 77 32
                                            </li><br>
                                            <li><i class="fa-solid fa-envelope fa-envelope-card"></i>exam@angkor.edu.kh
                                                | yimphalika@gmail.com</li><br>
                                            <li><i class="fa-brands fa-facebook-f fa-facebook-f-card"></i>Angkor
                                                University</li><br>
                                            <li><i class="fa-solid fa-location-dot fa-location-dot-card"></i>171206,
                                                Borey Seang Nam, Phum Khnar, Sangkat Chreav, Krong Siem Reap, Siem Reap
                                                Province</li><br>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </div> <!-- singel news -->
                    </div>
                    <div class="col-lg-12">
                        <div class="title-card">
                            <h2>Accounting and Finance Office</h2>
                        </div>
                        <div class="singel-news news-list">
                            <div class="row">
                                <div class="col-sm-4  text-center">
                                    <img class="profile-user-img img-fluid img"
                                        src="{{ asset('backend') }}/dist/img/sosreylis.jpg" alt="News">
                                </div>
                                <div class="col-sm-8">
                                    <div class="news-cont mt-20">
                                        <h2>Ms. SO SREYLIS</h2>
                                        <p>Director of Accounting and Finance Office</p>

                                        <ul class="ul-card">
                                            <li><i class="fas fa-phone"></i> +855 69 917 716</li><br>
                                            <li><i class="fas fa-telegram"></i> +855 69 917 716
                                            </li><br>
                                            <li><i class="fas fa-globe"></i> exam@angkor.edu.kh
                                                | yimphalika@gmail.com</li><br>
                                            <li><i class="fas fa-facebook-square"></i>Angkor
                                                University</li><br>
                                            <li><i class="fas fa-location"></i>171206,
                                                Borey Seang Nam, Phum Khnar, Sangkat Chreav, Krong Siem Reap, Siem Reap
                                                Province</li><br>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </div> <!-- singel news -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container mb-30">
        <div class="title-card">
            <h2>Map</h2>
        </div>
        <iframe class="mt-30"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.995685843576!2d103.88984007510214!3d13.350544206456913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311017f2dee31013%3A0x83270b7d4c8fc0f9!2sAngkor%20University!5e0!3m2!1sen!2skh!4v1687311891183!5m2!1sen!2skh"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
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
