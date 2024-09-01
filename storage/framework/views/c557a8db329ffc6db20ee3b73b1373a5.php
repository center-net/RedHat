<?php $__env->startSection('title'); ?>
المنتجات
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheader'); ?>
بيانات المنتجات 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderlink'); ?>
<a href="<?php echo e(route('admin.BillingCategories')); ?>"> بيانات المنتجات  </a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderactive'); ?>
عرض
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-12">
         <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.products.data');

$__html = app('livewire')->mount($__name, $__params, 'lw-1514934928-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
         <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.products.add');

$__html = app('livewire')->mount($__name, $__params, 'lw-1514934928-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
         <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.products.delete');

$__html = app('livewire')->mount($__name, $__params, 'lw-1514934928-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
         <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.products.edit');

$__html = app('livewire')->mount($__name, $__params, 'lw-1514934928-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/admin/js/treasuries.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\RedHat\resources\views/admin/products/index.blade.php ENDPATH**/ ?>