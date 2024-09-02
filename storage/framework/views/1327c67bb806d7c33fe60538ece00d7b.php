<header class="header bg-white">
    <div class="container px-0 px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
            <a class="navbar-brand" href="<?php echo e(route('frontend.index')); ?>">
                <span class="font-weight-bold text-uppercase text-dark"><?php echo e(config('app.name')); ?></span>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('frontend.index')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('frontend.shop')); ?>">Shop</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('frontend.product')); ?>">Product detail</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
                            <a class="dropdown-item border-0 transition-link" href="<?php echo e(route('frontend.index')); ?>">Homepage</a>
                            <a class="dropdown-item border-0 transition-link" href="<?php echo e(route('frontend.shop')); ?>">Category</a>
                            <a class="dropdown-item border-0 transition-link" href="<?php echo e(route('frontend.product')); ?>">Product detail</a>
                            <a class="dropdown-item border-0 transition-link" href="<?php echo e(route('frontend.cart')); ?>">Shopping cart</a>
                            
                        </div>
                    </li>
                   
                </ul>
                <ul class="navbar-nav ml-auto">
                    

                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">
                                <i class="fas fa-user-alt mr-1 text-gray"></i>Login
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="authDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(auth()->user()->name); ?>

                            </a>
                            <div class="dropdown-menu mt-3" aria-labelledby="authDropdown">
                                <a href="<?php echo e(route('admin.index')); ?>" class="dropdown-item border-0">Dashboard</a>
                                <a href="javascript:void(0);" class="dropdown-item border-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</header>
<?php /**PATH E:\laragon\www\RedHat\resources\views/partial/frontend/header.blade.php ENDPATH**/ ?>