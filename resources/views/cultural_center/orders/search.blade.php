@extends('cultural_center.home')

@section('cultural')
    <!-- END HEADER -->
    <div class="container pt-5 pb-5">
        <div class="main-href mt-4">
            <a href="#"></a>
        </div>
        <!-- card -->
        <div class="card card-default mb-5" style="padding:20px 5px;">
            <div class="card-body ">
                <select id="country" class="form-control main-select" name="country_id"
                        style="padding:0 5px;height:40px;">
                    <option selected value="">حدد الدولة</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <div class="card-2">
                    <div class="row">
                        <div class="col-lg-4 mt-2 mb-2">
                            <h7 class="mb-2">الجامعة :</h7>
                            <select id="university" class="form-control" name="university_id"
                                    style="padding:0 5px;height:40px;">

                            </select>
                        </div>
                        <div class="col-lg-4 mt-2 mb-2">
                            <h7 class="mb-2">التخصص:</h7>

                            <select id="category" class="form-control" name="specialty_id"
                                    style="padding:0 5px;height:40px;">
                                <option selected value="">حدد التخصص</option>
                                @foreach ($specialties as $specialty)
                                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 mt-2 mb-2">
                            <h7 class="mb-2">التخصص الفرعي :</h7>
                            <select id="subcategory" class="form-control" name="sub_specialty_id"
                                    style="padding:0 5px;height:40px;">
                                <option selected value="">حدد التخصص</option>
                                @foreach ($sub_specialties as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="form-group">
                            <input id="Bachelor" type="checkbox" name="Bachelor">
                            <label for="">بكالوريوس</label>
                        </div>
                        <div class="form-group">
                            <input id="master" type="checkbox" name="master">
                            <label for="">ماجستير</label>
                        </div>
                        <div class="form-group">
                            <input id="doctor" type="checkbox" name="doctor">
                            <label for="">دكتوراه</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
        <div class="card table-card">
            <form action="{{ route('add_order_university') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="card-t-1">
                        <button class="dt-button btn-button-1" type="submit">
                            <span class="print-button__content  js__action--print" title="إرسال">إرسال</span>
                        </button>

                    </div>
                    <div id="newResult">
                        <table>
                            <thead>
                            <tr>
                                <th>الدولة</th>
                                <th>الولاية</th>
                                <th>الجامعة</th>
                                <th>التخصص</th>
                                <th>التخصص الفرعي</th>
                                <th>بكالوريوس</th>
                                <th>ماجستير</th>
                                <th>دكتوراه</th>
                                <th>ملاحظات</th>
                                <th>آخر تحديث</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($search_universities as $search_university)
                                    <tr id ="newResult">
                                        <td>{{$search_university->country->name}}
                                            <input type="hidden" name="country_id[]" value="{{$search_university->country->id}}">
                                        </td>
                                        <td>{{$search_university->name}}
                                            <input type="hidden" name="name[]" value="{{$search_university->name}}">
                                        </td>
                                        <td>{{$search_university->specialty->name}}
                                            <input type="hidden" name="specialty_id[]" value="{{$search_university->specialty->name}}">
                                        </td>
                                        <td>{{$search_university->sub_specialty->name}}
                                            <input type="hidden" name="specialty_id" value="{{$search_university->specialty->id}}">
                                        </td>
                                        <td>{{$search_university->sub_specialty->name}}
                                            <input type="hidden" name="sub_specialty_id[]" value="{{$search_university->sub_specialty->id}}">
                                        </td>
                                        <td>
                                            @if($search_university->Bachelor == 1)
                                                <i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-times-circle check red" aria-hidden="true"></i>
                                            @endif
                                            <input type="hidden" name="Bachelor[]" value="{{$search_university->Bachelor}}">
                                        </td>
                                        <td>
                                            @if($search_university->master == 1)
                                                <i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-times-circle check red" aria-hidden="true"></i>
                                            @endif
                                            <input type="hidden" name="master[]" value="{{$search_university->master}}">
                                        <td>
                                            @if($search_university->doctor == 1)
                                                <i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-times-circle check red" aria-hidden="true"></i>
                                            @endif
                                            <input type="hidden" name="doctor[]" value="{{$search_university->doctor}}">
                                        </td>
                                        <td>
                                            {{ $search_university->note }}
                                            <input type="hidden" name="note[]" value="{{$search_university->note}}">
                                        </td>
                                        <td>
                                            {{ $search_university->updated_at }}
                                            <input type="hidden" name="updated_at[]" value="{{$search_university->updated_at}}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <!-- danger-section -->
        @foreach($notes as $note)
            <div class="text-danger mt-1 mb-4 p-3">
                <p>{{$note->description}}</p>
            </div>
        @endforeach

        <!-- end danger-section -->
        <div class="card table-card">
            <div class="card-header">
                نتائج البحث
            </div>
            <div class="card-body">
                <div class="card-t-1"></div>
                <form action="{{ route('add_search') }}" method="post" id="store_form">
                    @csrf
                    <div style="overflow-x:auto;" id="result">
                    <table>
                        <thead>
                        <tr>
                            <th>الدولة</th>
                            <th>الولاية</th>
                            <th>الجامعة</th>
                            <th>التخصص</th>
                            <th>التخصص الفرعي</th>
                            <th>بكالوريوس</th>
                            <th>ماجستير</th>
                            <th>دكتوراه</th>
                            <th>ملاحظات</th>
                            <th>آخر تحديث</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr id = "addResult"></tr>
                        </tbody>
                    </table>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        $('#country, #category ,#subcategory,#university,#Bachelor,#master,#doctor').change(function ()     {
            $.ajax({
                type: 'get',
                url: '{{URL::to('/search_university')}}',
                data: {
                    'search_country': $('#country').val(),
                    'search_university': $('#university').val(),
                    'search_specialty': $('#category').val(),
                    'search_sub_specialty': $('#subcategory').val(),
                    'search_Bachelor': $('#Bachelor').is(':checked'),
                    'search_master': $('#master').is(':checked'),
                    'search_doctor': $('#doctor').is(':checked'),
                },
                success: function (data) {
                    $('#result').html(data);
                }
            });
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#country').on('change', function (e) {
            var cat_id = e.target.value;
            $.ajax({
                url: "{{ route('country') }}",
                type: "POST",
                data: {
                    spe_id: cat_id
                },
                success: function (data) {
                    $('#university').empty();
                    $('#university').append('<option selected value="">حدد الجامعة</option>');
                    $.each(data.subcategories[0].universities, function (index, university) {
                        $('#university').append('<option value="' + university.id + '">' + university.name + '</option>');
                    })
                }
            })
        });

        //if checkbox is checked in class mahdy
        $('#store').on('click', function (e) {
            e.preventDefault();
            var select = $('#select').val();
            var country = $('#country').val();
            var state = $('#state').val();
            var university = $('#university').val();
            var category = $('#category').val();
            var subcategory = $('#subcategory').val();
            var Bachelor = $('#Bachelor').val();
            var master = $('#master').val();
            var doctor = $('#doctor').val();
            var notes = $('#notes').val();
            var updated_at = $('#updated_at').val();
            $.ajax({
                type: 'get',
                url: '{{URL::to('/add_search_university')}}',
                data: {
                    'country': country,
                    'state': state,
                    'university': university,
                    'category': category,
                    'subcategory': subcategory,
                    'Bachelor': Bachelor,
                    'master': master,
                    'doctor': doctor,
                    'notes': notes,
                    'updated_at': updated_at,
                },
                success: function (data) {
                    $('#newResult').html(data);
                }
            });
        });

    </script>

@endsection
