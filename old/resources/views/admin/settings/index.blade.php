@extends('admin.dashboard')

@section('content')
    <head>
        <style>
            /* The switch - the box around the slider */
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            /* Hide default HTML checkbox */
            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            /* The slider */
            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #2196F3;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
        </style>
    </head>
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        <div class="secondary-nav">
            <div class="breadcrumbs-container" data-page-heading="Analytics">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </a>
                    <div class="d-flex breadcrumb-content">
                        <div class="page-header">

                            <div class="page-title">
                            </div>

                            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active ">{{trans('sidebar.appearance')}} </li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </header>
            </div>
        </div>
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"></h3>

                        @foreach($settings as $company)
{{--                                    <label for="inputAddress" class="form-label"> {{$company->name}} </label>--}}
{{--                                    @if ($company->status == 0)--}}
{{--                                        <div class="col-sm-5">--}}
{{--                                            <label class="switch">--}}
{{--                                                <input id = "company_{{$company->id}}" data-id="{{$company->id}}" onchange=myFunction({{$company->id}}) value = {{$company->status}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $company->status ? 'checked' : '' }}>--}}
{{--                                                <span class="slider round"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                    @if ($company->status == 1)--}}
{{--                                        <div class="col-sm-5">--}}
{{--                                            <label class="switch">--}}
{{--                                                <input id = "company_{{$company->id}}" data-id="{{$company->id}}" onchange=myFunction({{$company->id}}) value = {{$company->status}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $company->status ? 'checked' : '' }}>--}}
{{--                                                <span class="slider round"></span>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}

                            <div class="col-12">
                                <label for="inputAddress" class="form-label" style="width: 150px">{{trans('sidebar.'.$company->name)}}  </label>
                                <label class="switch">
                                    <input id = "company_{{$company->id}}" data-id="{{$company->id}}" onchange=myFunction({{$company->id}}) value = {{$company->status}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $company->status ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <script>
            function myFunction(id) {

                var value = document.getElementById("company_" + id).value;


                if (value == 1){
                    document.getElementById("company_" + id).value = 0;
                    //alert(document.getElementById("company_" + id).value);
                }
                if (value == 0){
                    document.getElementById("company_" + id).value = 1;
                    //alert(document.getElementById("company_" + id).value);
                }

                var company_id = id;
                var newPermLevel = document.getElementById("company_" + id).value;


                $.ajax({
                    method: 'POST', // Type of response and matches what we said in the route
                    url: '/admin_panel/update/'+company_id, // This is the url we gave in the route
                    data: {
                        'company_id' : company_id,
                        'value' : newPermLevel,
                        _token: '{{csrf_token()}}',

                    },
                    // a JSON object to send back
                    success: function(response){ // What to do if we succeed
                        console.log(response);
                        //alert("Ajax success");
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                        //alert("Ajax error");
                    }
                });


            }
        </script>
{{--        <script>--}}
{{--            let active = false--}}
{{--            function toggle() {--}}
{{--                let toggle = document.querySelector('.toggle')--}}
{{--                let text = document.querySelector('.text')--}}
{{--                active = !active--}}
{{--                if (active) {--}}
{{--                    toggle.classList.add('active')--}}
{{--                    text.innerHTML = 'N'--}}
{{--                } else {--}}
{{--                    toggle.classList.remove('active')--}}
{{--                    text.innerHTML = 'FF'--}}
{{--                }--}}
{{--            }--}}

{{--        </script>--}}
        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->

    </div>



@endsection
