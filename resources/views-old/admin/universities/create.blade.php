@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'الجامعات ','sub_title'=>'إضافة جامعة'])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile ">
                    <div class="widget-content widget-content-area">
                    <h3 class="mt-4"> </h3>
                        <form class="g-3" method="post" action="{{route('admin_panel.universities.store')}}" enctype="multipart/form-data" >
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
                            @if(session()->has('message'))

                                    <div class="alert alert-success">

                                        {{ session()->get('message') }}

                                    </div>
                            @endif
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">اسم الجامعة</label>
                                    <input class="form-control"  name="name" required/>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> الدولة </label>
                                    <select class="form-select" name="country_id">

                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> التخصص الأساسي </label>
                                    <select class="browser-default custom-select" name="specialty_id" id="category" required>
                                        <option selected value="">حدد التخصص</option>
                                        @foreach ($specialties as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> التخصص الفرعي </label>
                                    <select class="browser-default custom-select" name="sub_specialty_id" id="subcategory" >
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <br>
                                    <input type="checkbox" id="vehicle1" name="master" value="1">
                                    <label for="inputEmail4" class="form-label">  ماجستير &nbsp;</label>

                                    <input type="checkbox" id="vehicle1" name="doctor" value="1">
                                    <label for="inputEmail4" class="form-label"> دكتوراه &nbsp; 	</label>

                                    <input type="checkbox" id="vehicle1" name="Bachelor" value="1">
                                    <label for="inputEmail4" class="form-label"> بكالوريوس </label>

                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">الملاحظة </label>
                                    <textarea class="form-control"  name="note" ></textarea>
                                </div>

                                <div class="col-12">
                                    <div class=" mt-4">
                                        <button type="submit" class="btn btn-primary"> إضافة </button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function () {
                $('#category').on('change',function(e) {
                    var cat_id = e.target.value;
                    $.ajax({
                        url:"{{ route('admin_panel.subSpe') }}",
                        type:"POST",
                        data: {
                            spe_id: cat_id
                        },
                        success:function (data) {
                            $('#subcategory').empty();
                            $.each(data.subcategories[0].subcategories,function(index,subcategory){
                                $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                            })
                        }
                    })
                });
            });
        </script>
        <!--  BEGIN FOOTER  -->
    @include('admin.layouts.footer')
    <!--  END FOOTER  -->

    </div>



@endsection
