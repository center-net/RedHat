<div>
    <form wire:submit.prevent="login">
        <div class="input-group mb-3" style="direction: ltr !important;">
           <input  type="text" wire:model="username" class="form-control" placeholder="username">
           <div class="input-group-append">
              <div class="input-group-text">
                 <span class="fas fa-envelope"></span>
              </div>
           </div>
        </div>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        <div class="input-group mb-3" style="direction: ltr !important;">
           <input type="password" wire:model="password" class="form-control" placeholder="Password">
           <div class="input-group-append">
              <div class="input-group-text">
                 <span class="fas fa-lock"></span>
              </div>
           </div>
        </div>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        <div class="row">
            <div class="col-8" >
                <div class="icheck-primary">
                  <input type="checkbox" wire:model='remember' id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
           <!-- /.col -->
           <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">دخول </button>
           </div>
           <!-- /.col -->
        </div>
     </form>
    </div>
<?php /**PATH E:\laragon\www\RedHat\resources\views/admin/auth/login-form.blade.php ENDPATH**/ ?>