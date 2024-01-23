@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'البنرات','sub_title'=>'تعديل صورة'])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4"></h3>

                        <form class="row g-3" method="post" action="{{route('admin_panel.sliders.update',$item->id)}}" enctype="multipart/form-data" >
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
                                    <div class="col-md-12">
                                        <label for="inputAddress" class="form-label"> الصورة </label>
                                        <input type="file" class="form-control"  placeholder="1234 Main St" name="file" >
                                        <p class="image_size">يجب أن تكون أبعاد الصورة  1140*400 </p>
                                        <img src="{{ asset($item->image) }}" style="margin-bottom: 10px; width: 750px; height: 300px">

                                    </div>


                                    <div class="col-12 mt-4">
                                        <div class="">
                                        <button type="submit" class="btn btn-primary">تعديل</button>
                                        </div>
                                    </div>


                                </form>

                    </div>
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
