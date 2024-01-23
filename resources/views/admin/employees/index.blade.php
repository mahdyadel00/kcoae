@extends('admin.dashboard')

@section('content')
    <div id="content" class="main-content">
        <!--  BEGIN BREADCRUMBS  -->
        @include('admin.layouts.secondary_nav',['title'=>'العاملون ','sub_title'=>''])
        <br>
        <!--  END BREADCRUMBS  -->
        <div class="col-12" style="margin:2% 2% auto;">
            <div class="user-profile ">
                <div class="widget-content widget-content-area">
                    @if(session()->has('message'))

                        <div class="alert alert-success">

                            {{ session()->get('message') }}

                        </div>

                    @endif

                    <div class="" style="padding: 2%;">



                            <a class="btn btn-primary mb-2 me-4" href="{{route('admin_panel.employees.create')}}">إضافة عامل</a>
                        <a class="btn btn-primary mb-2 me-4" href="{{route('admin_panel.emp_notes.index')}}">ملاحظات العاملون </a>

                        <div class="table-responsive" id="t1">
                            <table id="myTable1" class="table table-striped table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col"></th>
                                    <th scope="col"> العامل  </th>
                                    <th scope="col">المركز الوظيفي </th>
                                    <th scope="col">تاريخ الانضمام </th>
                                    <th class="text-center" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $counter=1;?>
                                @foreach($employees as $employee)

                                    <tr>
                                        <td>
                                            <p class="text-center">{{$counter}}</p>
                                            <span class="text-success"></span>
                                            <?php $counter++;?>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="avatar me-2">
                                                    <img alt="avatar" src="/{{$employee->image}}" class="rounded-circle" />
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">{{$employee->name}}</h6>
                                                    <span>{{$employee->email}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{$employee->role}}</p>
                                            <span class="text-success"></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{$employee->created_at->toDateString()}}</p>
                                            <span class="text-success"></span>
                                        </td>

                                        <td class="text-center">
                                            <div class="action-btns">
{{--                                                <a href="{{route('admin_panel.advisors.show',$myadmin->id)}}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="عرض">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>--}}
{{--                                                </a>--}}
                                                <a href="{{route('admin_panel.employees.edit',$employee->id)}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="تعديل">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                </a>
                                                <a href="/admin_panel/del_employee/{{$employee->id}}" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="حذف">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>

                            </table>

                            <div class="col-sm-12 col-md-7">
                                    {{ $employees->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--  BEGIN FOOTER  -->

    <!--  END FOOTER  -->
        <script type="text/javascript">
            $('#search').on('keyup',function(){
                $value=$(this).val();
                $.ajax({
                    type : 'get',
                    url : '{{URL::to('/admin_panel/search_advisor')}}',
                    data:{'search':$value},
                    success:function(data){
                        $('#t1').html(data);
                    }
                });
            })
        </script>
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
{{--        <script>--}}

{{--            addPagerToTables('#myTable1', 4);--}}

{{--            function addPagerToTables(tables, rowsPerPage = 10) {--}}

{{--                tables =--}}
{{--                    typeof tables == "string"--}}
{{--                        ? document.querySelectorAll(tables)--}}
{{--                        : tables;--}}

{{--                for (let table of tables)--}}
{{--                    addPagerToTable(table, rowsPerPage);--}}

{{--            }--}}

{{--            function addPagerToTable(table, rowsPerPage = 10) {--}}

{{--                let tBodyRows = getBodyRows(table);--}}
{{--                let numPages = Math.ceil(tBodyRows.length/rowsPerPage);--}}

{{--                let colCount =--}}
{{--                    [].slice.call(--}}
{{--                        table.querySelector('tr').cells--}}
{{--                    )--}}
{{--                        .reduce((a,b) => a + parseInt(b.colSpan), 0);--}}

{{--                table--}}
{{--                    .createTFoot()--}}
{{--                    .insertRow()--}}
{{--                    .innerHTML = `<td colspan=${colCount}><div class="nav"></div></td>`;--}}

{{--                if(numPages == 1)--}}
{{--                    return;--}}

{{--                for(i = 0;i < numPages;i++) {--}}

{{--                    let pageNum = i + 1;--}}

{{--                    table.querySelector('.nav')--}}
{{--                        .insertAdjacentHTML(--}}
{{--                            'beforeend',--}}
{{--                            `<a href="#" rel="${i}">${pageNum}</a> `--}}
{{--                        );--}}

{{--                }--}}

{{--                changeToPage(table, 1, rowsPerPage);--}}

{{--                for (let navA of table.querySelectorAll('.nav a'))--}}
{{--                    navA.addEventListener(--}}
{{--                        'click',--}}
{{--                        e => changeToPage(--}}
{{--                            table,--}}
{{--                            parseInt(e.target.innerHTML),--}}
{{--                            rowsPerPage--}}
{{--                        )--}}
{{--                    );--}}

{{--            }--}}

{{--            function changeToPage(table, page, rowsPerPage) {--}}

{{--                let startItem = (page - 1) * rowsPerPage;--}}
{{--                let endItem = startItem + rowsPerPage;--}}
{{--                let navAs = table.querySelectorAll('.nav a');--}}
{{--                let tBodyRows = getBodyRows(table);--}}

{{--                for (let nix = 0; nix < navAs.length; nix++) {--}}

{{--                    if (nix == page - 1)--}}
{{--                        navAs[nix].classList.add('active');--}}
{{--                    else--}}
{{--                        navAs[nix].classList.remove('active');--}}

{{--                    for (let trix = 0; trix < tBodyRows.length; trix++)--}}
{{--                        tBodyRows[trix].style.display =--}}
{{--                            (trix >= startItem && trix < endItem)--}}
{{--                                ? 'table-row'--}}
{{--                                : 'none';--}}

{{--                }--}}

{{--            }--}}

{{--            // tbody might still capture header rows if--}}
{{--            // if a thead was not created explicitly.--}}
{{--            // This filters those rows out.--}}
{{--            function getBodyRows(table) {--}}
{{--                let initial = table.querySelectorAll('tbody tr');--}}
{{--                return Array.from(initial)--}}
{{--                    .filter(row => row.querySelectorAll('td').length > 0);--}}
{{--            }--}}
{{--        </script>--}}

    </div>



@endsection
