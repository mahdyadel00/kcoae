@extends('admin.dashboard')

@section('content')
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <style type="text/css">
            .bg-gray {
                color: #777;
                background-color: #eee;
            }
            #btnGithub, #btnDonate {
                width: 200px;
            }
            #btnGithub span, #btnDonate span {
                font-style: italic;
            }
            #btnStars, #btnForks, #btnReleases, #btnContributors {
                font-weight: bold;
            }
            .tab-content {
                padding: 12px;
                border-left: 1px solid #ddd;
                border-right: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            code {
                background-color: #f9f2f4;
                border-radius: 4px;
                padding: 2px 4px;
            }
            code.code-default {
                color: #ffffff;
                background-color: #f0ad4e;
            }
            code.code-info {
                color: #ffffff;
                background-color: #5bc0de;
            }
            code.code-options {
                color: #ffffff;
                background-color: #9b59b6;
            }
            code.code-event {
                color: #ffffff;
                background-color: #449d44;
            }
            code.code-method {
                color: #ffffff;
                background-color: #357ebd;
            }
            #console {
                height: 135px;
                overflow-y: scroll;
                color: white;
                background-color: black;
            }
        </style>
    </head>
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>' دليل الطالب ','sub_title'=>'تعديل '])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4">  </h3>
                        <form class="row g-3" method="post" action="{{route('admin_panel.student_guide.update',$guide->id)}}" enctype="multipart/form-data" >
                            @method('PATCH')
                            @csrf
                            @if ($errors->any())

                                <div class="alert alert-danger">

                                    <ul style="list-style: none;margin:0">

                                        @foreach ($errors->all() as $error)

                                            <li>{{ $error }}</li>

                                        @endforeach

                                    </ul>

                                </div>

                            @endif
                            <div class="row">


                                <div class="col-md-12">
                                    {{--                                            <i class=" {{$social->icon}}"></i>--}}
                                    <i class=" {{$guide->icon}}"></i>
                                    <button name="icon" class="btn btn-secondary" role="iconpicker" value="{{$guide->icon}}"></button>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <label for="inputEmail4" class="form-label">العنوان </label>
                                    <input type="text" class="form-control"  name="title" value="{{$guide->title}}">
                                </div>

                                <div class="col-md-12 mt-4">
                                    <label for="inputEmail4" class="form-label">الرابط </label>
                                    <input type="url" class="form-control"  name="link" value="{{$guide->link}}">
                                </div>


                                <div class="col-12 mt-4">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">تعديل  </button>
                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            $(function(){

                $('#convert_example_1').iconpicker({
                    arrowClass: 'btn-danger',
                    arrowPrevIconClass: 'fas fa-angle-left',
                    arrowNextIconClass: 'fas fa-angle-right',
                    cols: 10,
                    footer: true,
                    header: true,
                    icon: 'fas fa-bomb',
                    iconset: 'fontawesome5',
                    labelHeader: '{0} of {1} pages',
                    labelFooter: '{0} - {1} of {2} icons',
                    placement: 'bottom',
                    rows: 5,
                    search: true,
                    searchText: 'Search',
                    selectedClass: 'btn-success',
                    unselectedClass: ''
                });

                $('#convert_example_2').iconpicker().on('change', function(e) {
                    $("#console").prepend(e.icon+'</br>');
                });

                $('#convert_example_3')
                    .iconpicker()
                    .iconpicker('setAlign', 'center')
                    .iconpicker('setArrowClass', 'btn-success')
                    .iconpicker('setArrowPrevIconClass', 'fas fa-angle-left')
                    .iconpicker('setArrowNextIconClass', 'fas fa-angle-right')
                    .iconpicker('setCols', 9)
                    .iconpicker('setFooter', true)
                    .iconpicker('setHeader', true)
                    .iconpicker('setIconset', {
                        iconClass: 'fas',
                        iconClassFix: 'fa-',
                        icons: [
                            'fast-backward',
                            'step-backward',
                            'backward',
                            'play',
                            'pause',
                            'stop',
                            'forward',
                            'step-forward',
                            'fast-forward',
                        ],
                    })
                    .iconpicker('setIcon', 'fa-pause')
                    .iconpicker('setLabelHeader', '{0} of {1} pages')
                    .iconpicker('setLabelFooter', '{0} - {1} of {2} icons')
                    .iconpicker('setPlacement', 'bottom')
                    .iconpicker('setRows', 0)
                    .iconpicker('setSearch', true)
                    .iconpicker('setSearchText', 'Type text')
                    .iconpicker('setSelectedClass', 'btn-danger')
                    .iconpicker('setUnselectedClass', 'btn-primary');

            });

        </script>

        <!-- Button Builder Example -->
        <script type="text/javascript">

            $(function(){
                var show_result = function(){
                    $('#result').text($('#button').html().trim());
                };

                show_result();

                $('#btn-text').on('focusout', function(e) {
                    $('#btn-icon-positions button[value="' + $('#button').data('position') + '"]').trigger('click')
                    show_result();
                });

                $('#btn-colors button').on('click', function(e) {
                    $('#button a').removeClass('btn-primary btn-secondary btn-success btn-danger btn-warning btn-info btn-light btn-dark btn-link').addClass($(this).val());
                    show_result();
                });

                $('#btn-sizes button').on('click', function(e) {
                    $('#button a').removeClass('btn-sm btn-lg').addClass($(this).val());
                    show_result();
                });

                $('#btn-sizes a').on('click', function(e) {
                    $('#button a').toggleClass('btn-block');
                    show_result();
                });

                $('#btn-icon').iconpicker({
                    rows: 5,
                    cols: 10,
                    align: 'left'
                });

                $('#btn-icon').on('change', function(e) {
                    $('#button a > i').attr('class', '').addClass(e.icon);
                    show_result();
                });

                $('#btn-icon-positions button').on('click', function(e) {
                    var icon = $('#button a > i');
                    var text = $('#btn-text').val();
                    $('#button a').empty();
                    if($(this).val() == 'left'){
                        $('#button a').append(icon).append(' ' + text);
                    }
                    else{
                        $('#button a').append(text + ' ').append(icon);
                    }
                    $('#button').data('position', $(this).val());
                    show_result();
                });
            });

        </script>

        <script type="text/javascript">

            $(function(){
                $('#btnDonate').bind('click', function(e){
                    e.preventDefault();
                    $('#formDonate').submit();
                });

                $.getJSON( "https://api.github.com/repos/victor-valencia/bootstrap-iconpicker", function( data ) {
                    $('#btnStars').html(data.stargazers_count);
                    $('#btnForks').html(data.forks_count);
                });

                $.getJSON( "https://api.github.com/repos/victor-valencia/bootstrap-iconpicker/tags", function( data ) {
                    $('#btnReleases').html(data.length);

                    var url = "https://github.com/victor-valencia/bootstrap-iconpicker/archive/" + data[0].name;

                    $('#btnGithub').html($('#btnGithub').html().replace('{0}', data[0].name));

                    $('#btnDownloadZip').attr('href', url + '.zip');
                    $('#btnDownloadZip').html($('#btnDownloadZip').html().replace('{0}', data[0].name));

                    $('#btnDownloadTar').attr('href', url + '.tar.gz');
                    $('#btnDownloadTar').html($('#btnDownloadTar').html().replace('{0}', data[0].name));
                });

                $.getJSON( "https://api.github.com/repos/victor-valencia/bootstrap-iconpicker/contributors", function( data ) {
                    $('#btnContributors').html(data.length);
                });

                $('[role="menu"] a').on('click', function(){
                    $("#tabConfig").html($(this).html() + ' <span class="caret"></span>');
                });
            });
        </script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-38890641-4', 'auto');
            ga('send', 'pageview');
        </script>

        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </div>


        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->





@endsection
