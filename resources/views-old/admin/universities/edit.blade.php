@extends('admin.dashboard')

@section('content')

    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'الجامعات ','sub_title'=>'تعديل الجامعة '])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="layout-spacing">

            <!-- Content -->
            <div class="col-12">
                <div class="user-profile">
                    <div class="widget-content widget-content-area">
                        <h3 class="mt-4">  </h3>
                        <form class="row g-3" method="post" action="{{route('admin_panel.universities.update',$university->id)}}" enctype="multipart/form-data" >
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

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">اسم الجامعة</label>
                                    <input class="form-control"  name="name" value="{{$university->name}}"/>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> الدولة </label>
                                    <select class="form-select" name="country_id">

                                        @foreach($countries as $country)
                                            <option {{($university->country_id==$country->id)?'selected':''}} value="{{$country->id}}">{{$country->name}} </option>
                                        @endforeach
                                    </select>
                                </div>

{{--                                <div class="col-md-6">--}}
{{--                                    <label for="inputEmail4" class="form-label"> التخصص الأساسي </label>--}}
{{--                                    <select class="form-select" name="specialty_id">--}}

{{--                                        @foreach($specialties as $specialty)--}}
{{--                                            <option {{($university->specialty_id==$specialty->id)?'selected':''}} value="{{$specialty->id}}">{{$specialty->name}} </option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <label for="inputEmail4" class="form-label"> التخصص الفرعي </label>--}}
{{--                                    <select class="form-select" name="sub_specialty_id">--}}

{{--                                        @foreach($sub_specialties as $sub_specialty)--}}
{{--                                            <option {{($university->sub_specialty_id==$sub_specialty->id)?'selected':''}} value="{{$sub_specialty->id}}">{{$sub_specialty->name}} </option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> التخصص الأساسي </label>
                                    <select class="browser-default custom-select" name="specialty_id" id="category" required>
                                        @foreach ($specialties as $item)
                                            <option {{($university->specialty_id==$item->id)?'selected':''}} value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> التخصص الفرعي </label>
                                    <select class="browser-default custom-select" name="sub_specialty_id" id="subcategory" >
                                        <option {{($university->specialty_id==$item->id)?'selected':''}} value="{{ $university->sub_specialty->id }}">{{ $university->sub_specialty->name }}</option>
                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <br>
                                    <input type="checkbox" id="vehicle1" name="master" value="{{($university->master=='1')?'1':'0'}}" {{($university->master=='1')?'checked':''}}>
                                    <label for="inputEmail4" class="form-label">  ماجستير &nbsp;</label>

                                    <input type="checkbox" id="vehicle1" name="doctor" value="{{($university->doctor=='1')?'1':'0'}}" {{($university->doctor=='1')?'checked':''}}>
                                    <label for="inputEmail4" class="form-label"> دكتوراه &nbsp; 	</label>

                                    <input type="checkbox" id="vehicle1" name="Bachelor" value="{{($university->Bachelor=='1')?'1':'0'}}" {{($university->Bachelor=='1')?'checked':''}} >
                                    <label for="inputEmail4" class="form-label"> بكالوريوس </label>

                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">الملاحظة </label>
                                    <textarea class="form-control"  name="note" >{{$university->note}}</textarea>
                                </div>

                                <div class="col-12">
                                    <div class=" mt-4">
                                        <button type="submit" class="btn btn-primary"> تعديل </button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
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
