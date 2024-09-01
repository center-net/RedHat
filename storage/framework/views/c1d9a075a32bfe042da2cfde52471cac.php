<div>
    <div class="card">
        <div class="card-header">
           <h3 class="card-title card_title_center">بيانات  فئات الفواتير</h3>
           <a data-toggle="modal" data-target="#AddModel" href="#" class="btn btn-sm btn-success" >اضافة جديد</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
           <div class="col-md-4">
              <input type="text" wire:model.live='search' placeholder="بحث بالاسم" class="form-control"> <br>
           </div>
           <div id="ajax_responce_serarchDiv">
              <!--[if BLOCK]><![endif]--><?php if(@isset($data) && !@empty($data) && count($data) >0 ): ?>
              <?php
              $i=1;   
              ?>
              <table id="example2" class="table table-bordered table-hover">
                 <thead class="custom_thead">
                    <th>مسلسل</th>
                    <th>اسم المنتج</th>
                    <th>الصنف</th>
                    <th>سعر التاجر</th>
                    <th>سعر الزبون</th>
                    <th>نقاط التاجر</th>
                    <th>نقاط الزبون</th>
                    <th>سعر بالنقاط</th>
                    <th>الحالة</th>
                    <th>الصورة</th>
                    <th>الإجراء</th>
                 </thead>
                 <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                       <td><?php echo e($i); ?></td>
                       <td><?php echo e($info->name); ?></td>
                       <td><img class="custom_img" src="<?php echo e(asset('/uploads/admin/product').'/'.$info->image); ?>"  alt="صورة الخلفية">       </td>
                       <td><?php echo e($info->product_id); ?></td>
                       <td><?php echo e($info->price1); ?></td>
                       <td><?php echo e($info->price2); ?></td>
                       <td><?php echo e($info->points1); ?></td>
                       <td><?php echo e($info->points2); ?></td>
                       <td><?php echo e($info->points_price); ?></td>
                       <td><!--[if BLOCK]><![endif]--><?php if($info->active==1): ?> مفعل <?php else: ?> معطل <?php endif; ?><!--[if ENDBLOCK]><![endif]--></td>
                       <td>
                          <a href="#" wire:click.prevent="$dispatch('EditModel', { id: <?php echo e($info->id); ?> })" class="btn btn-sm  btn-primary">تعديل</a>   
                          <a href="#" wire:click.prevent="$dispatch('DeleteModel', { id: <?php echo e($info->id); ?> })" class="btn btn-sm  btn-danger">حذف</a>   
                          
                       </td>
                    </tr>
                    <?php
                    $i++; 
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                 </tbody>
              </table>
              <br>
              <?php echo e($data->links()); ?>

              <?php else: ?>
              <div class="alert alert-danger">
                 عفوا لاتوجد بيانات لعرضها !!
              </div>
              <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
           </div>
        </div>
     </div>

</div>
<?php /**PATH E:\laragon\www\RedHat\resources\views/admin/products/data.blade.php ENDPATH**/ ?>