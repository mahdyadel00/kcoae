@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>' الأسئلة الشائعة ','sub_title'=>'إضافة سؤال'])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"> </h3>
                        <form class=" g-3" method="post" action="{{route('admin_panel.questions.store')}}" enctype="multipart/form-data" >
                                    @method('POST')
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
                                        <div class="col-md-6 mt-4">
                                            <label for="inputEmail4" class="form-label">السؤال  </label>
                                            <input type="text" class="form-control"  name="title" required>
                                        </div>

                                        <div class="col-md-6 mt-4">
                                            <label for="inputEmail4" class="form-label">الجواب  </label>
                                            <textarea class="form-control"   name="description" required></textarea>
                                        </div>

                                        <div class="col-12 mt-4">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary">إضافة </button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#text-en').summernote();
            });
            $(document).ready(function() {
                $('#text-ar').summernote();
            });

        </script>
        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->

    </div>



@endsection
