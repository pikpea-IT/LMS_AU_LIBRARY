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
    {{ trans('Profile') }}
@endsection

@section('content')
@section('breadcrumb_title', trans('Profiles'))
@section('breadcrumb_home', trans('Home'))
@section('breadcrumb_pagename', trans('Profiles'))

@section('breadcrumb', trans('Profils'))

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">AU LIBRARY</h3>

                        <p class="text-muted text-center">LMS_Managent
                        </p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Books</b> <a class="float-right">3,000</a>
                            </li>
                            <li class="list-group-item">
                                <b>Members</b> <a class="float-right">123</a>
                            </li>
                            <li class="list-group-item">
                                <b>University</b> <a class="float-right">28</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-4">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                    data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                            src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="user image">
                                        <span class="username">
                                            <a href="https://angkor.edu.kh/">Angkor University</a>
                                            <a href="#" class="float-right btn-tool"><i
                                                    class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Hello, my name is Pik Pea and I am a [Your Profession] with a passion for
                                        [Your Area of Interest]. I have 5 years of experience in jobs,
                                        where I have consistently demonstrated skills in Camera security, Graphic
                                        Designer,
                                        I am particularly drawn to projects that involve
                                        [Specific Challenge or Goal] and enjoy collaborating with teams to achieve
                                        impactful results."
                                        Hello, my name is Pik Pea and I am a [Your Profession] with a passion for
                                        [Your Area of Interest]. I have 5 years of experience in jobs,
                                        where I have consistently demonstrated skills in Camera security, Graphic
                                        Designer,
                                        I am particularly drawn to projects that involve
                                        [Specific Challenge or Goal] and enjoy collaborating with teams to achieve
                                        impactful results."
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i
                                                class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i
                                                class="far fa-thumbs-up mr-1"></i> Like</a>
                                        <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>

                                    <input class="form-control form-control-sm" type="text"
                                        placeholder="Type a comment">
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience"
                                            class="col-sm-2 col-form-label">Experience</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills"
                                                placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and
                                                        conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="col-md-12">
        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row" x-data='{data_record : @json(old())}'>
                    <div class="col-md-12 mb-2">

                        <img class="col-md-12" src="{{ asset('backend') }}/dist/img/history.jpg">
                        <img class="col-md-12" src="{{ asset('backend') }}/dist/img/9.jpg">
                        <img class="col-md-12" src="{{ asset('backend') }}/dist/img/photo_2023-04-08_09-25-22.jpg">
                        <!--    		<p>Angkor University (A.U.) is a private higher education institution that complies with national and international standards. A.U. was established in 2004 by a local investor (H.E Neak Oknha Dr. Seang Nam) and has been officially recognized by Sub-decree No. 23 ANKr. BK, dated 23 July 2004, of the Royal Government of Cambodia. -->
                        <!--  Since its operation from 2004 to 2006, the university’s prestige was known to the general public by attracting many students for enrolment. -->
                        <!--  Unfortunately, the university started to lose its popularity due to poor management and leadership from 2007 to 2016. -->
                        <!--  Surprisingly, when new management team has come in and led by Dr. GNEL Rattha, rector of the university and Dr. Sok Tonh, deputy chair of the board of trustees,  -->
                        <!--the university has been regaining its fame and popularity among students and general public since 2017 to present.    -->
                        <!--  Furthermore, the Angkor University has been accredited by Accreditation Committee of Cambodia (ACC) for the certificate of provisional accreditation on the Foundation Year Course in 2005-2006, full accreditation of Foundation Year Course in 2006-2007, 2007-2008, and 2008-2009 and full accreditation of Foundation Year Course in 2009-2010, 2010-2011, and 2011-2012. In April 7th, 2023, A.U. has been awarded the Certificate of Accreditation by Accreditation Committee of Cambodia for 5 years valid from 2022 to 2026. -->

                        <!--  Currently, A.U. offers Associate, Bachelor and Master Degree Program. It has 7 faculties and 17 departments including (1) Faculty of Public Health, (2) Faculty of Engineering and Architecture, (3) Faculty of Business Administration and Tourism, (4) Faculty of Sociology and Law, (5) Faculty of Science and Technology, (6) Faculty of Humanities and Foreign Languages, and (7) Faculty of Agriculture.</p>-->
                        <!--    	</div>-->
                    </div>
                    <div class="container pb-12">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <h5><span class="username">
                                        <a href="https://angkor.edu.kh/">ABOUT ANGKOR UNIVERSITY</a>
                                    </span>
                                </h5>
                                <p class="about mt-10">Angkor University students from all disciplines can have
                                    opportunities to
                                    participate and share their own ideas and theories with local and international
                                    communities and
                                    industries/organizations which have advanced sciences and technologies from the
                                    countries such as
                                    France, Netherlands, Belgium, Russia, Poland, Bulgaria, Japan, Republic of
                                    Korea,
                                    China, Taiwan,
                                    Thailand, Philippines, and Indonesia, etc.
                                    <img class="col-md-12 mb-2" src="{{ asset('backend') }}/dist/img/taprohm.jpg">
                                </p>
                                {{-- <h5 class="mt-30">HISTORY</h5> --}}
                                <h5><span class="username">
                                        <a href="https://angkor.edu.kh/">HISTORY</a>
                                    </span>
                                </h5>
                                <p class="about mt-10">Only during the 9th to 12th centuries of the Angkor era,
                                    there
                                    were three
                                    established universities including Ta Prohm University (taught literature, arts,
                                    philosophy and
                                    religion), Preah Khan University (taught management and general knowledge) and
                                    Neak
                                    Poan University
                                    (taught medical treatments) in Siem Reap (until 16th century, known as
                                    Yasodharapura). They were
                                    considered as the Union of Angkor Universities. Before the year of 2002, there
                                    were
                                    few high schools
                                    and technical centers in Siem Reap city. Only foreign languages and basic
                                    pedagogy
                                    were taught. The
                                    initiative for the establishment of the university, is attributed to H.E. Neak
                                    Oknha
                                    Dr. Seang Nam,
                                    to support the national vision on One Province, One University, proposed by
                                    Samdech
                                    Akka Moha Sena
                                    Padei Techo Hun Sen Prime Minister of Cambodia in 2002. Angkor University (A.U.)
                                    has
                                    been officially
                                    recognized by Sub- Decree No. 28 ANKr.BK, dated 23 July 2004, of Royal
                                    Government of
                                    Cambodia. A.U.
                                    was originally composed of five faculties: Business Administration and Tourism,
                                    Science and
                                    Technology, Humanities and Foreign Languages, Sociology and Law, and
                                    Agriculture.
                                </p><img class="col-md-5 mb-2" src="{{ asset('backend') }}/dist/img/preahkhan.jpg">
                                <img class="col-md-5 mb-2" src="{{ asset('backend') }}/dist/img/neakpoan.jpg">
                            </div>
                            <div class="col-md-12 mb-2">
                                <img class="mt-10" width="100%" src="{{ asset('backend') }}/dist/img/au2024.jpg">
                            </div>
                            <div class="col-lg-8 mb-2 section-title">
                                <h5><span class="username">
                                        <a href="https://angkor.edu.kh/">ABOUT ANGKOR UNIVERSITY</a>
                                    </span>
                                </h5>
                                <p class="about mt-10">Angkor University is a higher education and research
                                    institution
                                    in Siem Reap
                                    Province, Cambodia.
                                    The university is composed of seven faculties and three centers. According to a
                                    number of surveys,
                                    it is consistently ranked within the top 12 universities in the Cambodia and is
                                    considered to be the
                                    best university in the Siem Reap province by the UniRank ranking. A.U. is best
                                    known
                                    for nursing,
                                    midwifery, engineering, architecture, computer science, interior design, rural
                                    development, law,
                                    Korean, English and management and tourism in which it complies with national
                                    and
                                    international
                                    standards. A.U. was founded by local investors ( H.E. Neak Oknha Dr. Seang Nam
                                    and
                                    Dr. Sok Tonh )
                                    and received a strong support from the Japanese partners. A.U. is one of a few
                                    universities in
                                    Cambodia under Ministry of Education, Youth and Sport and Ministry of Health
                                    with
                                    the aim that A.U.
                                    will be a university which can meet strict international standards. The
                                    university
                                    applies new
                                    teaching methods, which are based on student self-sufficiency, initiative,
                                    teamwork,
                                    leadership,
                                    community, practical experiments and internship in local and international
                                    industries/organizations'
                                    partners.
                                    A.U. offers undergraduate and postgraduate programs: Associate, Bachelor and
                                    Master.
                                    A.U. is one of
                                    the first universities in Siem Reap to fully follow the ACC's standards for
                                    Diploma
                                    (2-3/4-5/6-7);
                                    the model is widely used in most universities in Cambodia, especially in the
                                    health
                                    section. The
                                    Associate's programs last for two years for other disciplines, except for the
                                    associate degree in
                                    Nursing (ADN), and Midwifery (ADM) last for three years; Bachelor's programs
                                    last
                                    for 4–5 years,
                                    except for the Bridging Entry in Nursing (BSN) lasts for two years which is an
                                    upgrading training
                                    program from AND to BSN; and Master's program is for two years. All courses are
                                    conducted in Khmer
                                    and English languages (slides and sources). The quality of training programs
                                    have
                                    been accredited by
                                    the ACC (Accreditation Committee of Cambodia) in 2022.
                                </p>
                            </div>
                            <div class="col-lg-4 mt-12">
                                <img class="mt-10 img-fluid" width="100%"
                                    src="{{ asset('backend') }}/dist/img/au2004.png">
                            </div>
                            <div class="col-md-12 mb-2">
                                <img class="mt-10" width="100%"
                                    src="{{ asset('backend') }}/dist/img/aongkor.png">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

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

<!-- Toastr Notifications -->
@endpush
