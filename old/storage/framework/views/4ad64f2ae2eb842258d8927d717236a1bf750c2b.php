<?php $__env->startSection('cultural'); ?>
        <!-- END HEADER -->
        <div class="container pt-5 pb-5">
            <div class="main-href">
                <a href="#"></a>
            </div>
            <!-- card -->
            <div class="card card-default mb-5">
                <div class="card-body">
                    <select id="country"  class="form-control main-select" name="country_id" >
                        <option  selected value="">حدد الدولة</option>
                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="card-2">
                        <div class="row">
                            <div class="col-lg-4">
                                    <h7 class="mb-2">الجامعة :</h7>
                                    <select id="university" class="form-control" name="university_id" >

                                    </select>
                            </div>
                            <div class="col-lg-4">
                                    <h7 class="mb-2">التخصص:</h7>

                                    <select id="category" class="form-control" name="specialty_id" >
                                        <option selected value="">حدد التخصص</option>
                                        <?php $__currentLoopData = $specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($specialty->id); ?>"><?php echo e($specialty->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                            </div>
                            <div class="col-lg-4">
                                    <h7 class="mb-2">التخصص الفرعي :</h7>
                                    <select id="subcategory" class="form-control" name="sub_specialty_id" >
                                        <option selected value="">حدد التخصص</option>
                                        <?php $__currentLoopData = $sub_specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="form-group">
                                <input id="Bachelor" type="checkbox" name="Bachelor" >
                                <label for="">بكالوريوس</label>
                            </div>
                            <div class="form-group">
                                <input id="master" type="checkbox" name="master" >
                                <label for="">ماجستير</label>
                            </div>
                            <div class="form-group">
                                <input id="doctor" type="checkbox" name="doctor" >
                                <label for="">دكتوراه</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- danger-section -->
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="text-danger mt-1 mb-4 p-3">
                <p><?php echo e($note->description); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <!-- end danger-section -->

            <div class="card table-card">
                <div class="card-header">
                    نتائج البحث
                </div>
                <div class="card-body">
                    <div class="card-t-1">

                        <button class="dt-button btn-button-1" id="print" onclick="printPageArea('result')">
                            <span class="print-button__content  js__action--print" title="Print this page" >طباعة
                           </span>
                        </button>

                        <div>
                            <label for="">أظهر مدخلات </label>
                            <select name="number" id="">
                                <option value="1">10</option>
                                <option value="1">25</option>
                                <option value="1">50</option>
                                <option value="1">100</option>
                            </select>
                        </div>
                    </div>
                    <div style="overflow-x:auto;" id="result">
                        <table >
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

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">

            $('#country, #category ,#subcategory,#university,#Bachelor,#master,#doctor').change(function(){
                $.ajax({
                    type : 'get',
                    url : '<?php echo e(URL::to('/search_university')); ?>',
                    data:{'search_country':$('#country').val(),
                        'search_university': $('#university').val(),
                        'search_specialty': $('#category').val(),
                        'search_sub_specialty': $('#subcategory').val(),
                        'search_Bachelor': $('#Bachelor').is(':checked'),
                        'search_master': $('#master').is(':checked'),
                        'search_doctor': $('#doctor').is(':checked')
                    },
                    success:function(data){
                        $('#result').html(data);
                    }
                });
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#country').on('change',function(e) {
                var cat_id = e.target.value;
                $.ajax({
                    url:"<?php echo e(route('country')); ?>",
                    type:"POST",
                    data: {
                        spe_id: cat_id
                    },
                    success:function (data) {
                        $('#university').empty();
                        $('#university').append('<option selected value="">حدد الجامعة</option>');
                        $.each(data.subcategories[0].universities,function(index,university){
                            $('#university').append('<option value="'+university.id+'">'+university.name+'</option>');
                        })
                    }
                })
            });
        </script>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('cultural_center.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kcoae/stage.kco.ae/center/resources/views/cultural_center/university.blade.php ENDPATH**/ ?>