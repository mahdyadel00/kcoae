@extends('cultural_center.home')

@section('cultural')

    <!-- END HEADER -->

         <!-- TEAM -->
         <div class="team-page mb-5 pb-5">
            <div class="team-items">
                <div class="hadding-section pt-80 pb-5 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-12 d-flex align-items-center c-center">
                                <div class="hadding-text-area">
                                    <h2 class="black-c popin">العاملون  </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $counter=0;
                ?>
                <div class="container">
                    <div class="row">
                        @foreach($employees as $employee)
                            @if($counter<2)
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="team-contents">
                                        <div class="team-img">
                                            <img src="/{{$employee->image}}" alt="">
                                            <div class="fb-link"><a href="#" >{{$employee->name}}</a></div>
                                        </div>
                                         <div class="team-dec">
                                            <h3>{{$employee->role}}</h3>
                                            <p class="position"><a href="{{($employee->email!='')? 'mailto:'.$employee->email.'':''}}" target="_blank">{{$employee->email}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="team-contents">
                                        <div class="team-img">
                                            <img src="/{{$employee->image}}" alt="">
                                            <div class="fb-link"><a href="" target="_blank">{{$employee->name}}</a></div>
                                        </div>
                                        <div class="team-dec">
                                            <h3>{{$employee->role}}</h3>
                                            <p class="position"><a href="{{($employee->email!='')? 'mailto:'.$employee->email.'':''}}" target="_blank">{{$employee->email}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <?php
                            $counter++;
                            ?>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        <!-- END TEAM -->

    </div>
  <!-- FOOTER SECTION -->
  @endsection
