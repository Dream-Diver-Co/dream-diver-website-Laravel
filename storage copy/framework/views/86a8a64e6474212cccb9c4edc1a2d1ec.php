<?php $__env->startSection('content'); ?>

  <!-- Page Header Start -->
  <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <p class="display-4 text-white animated slideInDown mb-4">Support Ticket</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Support Ticket</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- content Start -->
<section class="py-7">
    <div class="container-xxl py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6">Ticket for great support track</h1>
        </div>
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <!-- FORM SECTION -->
                        <div class="row">
                            <!-- SIGN IN -->
                            <div class="col align-items-center flex-col sign-in">
                                <div class=" form-wrapper slide-form align-items-center">
                                    <div class="form sign-in ">
                                        <p class="from-head">Create Basic Ticket</p>
                                        <?php if(session('success')): ?>
                                            <div id="successMessage" class="alert alert-success">
                                                <?php echo e(session('success')); ?>

                                            </div>

                                            <script>
                                                // Auto-hide success message after 5 seconds
                                                setTimeout(function(){
                                                    document.getElementById('successMessage').style.display = 'none';
                                                }, 5000);
                                            </script>
                                        <?php endif; ?>

                                        <!-- Display reCAPTCHA error -->
                                        <?php if($errors->has('g-recaptcha-response')): ?>
                                        <div class="alert alert-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
                                        <?php endif; ?>

                                        <form class="row g-3" action="<?php echo e(route('basicticket_store')); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>

                                            <div class="input-group">
                                                <i class='bx bxs-user'></i>
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <div class="input-group">
                                                <i class='bx bx-mail-send'></i>
                                                <input type="email" placeholder="Email" name="email">
                                            </div>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            

                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <input type="file" placeholder="attschment" name="files[]">
                                            </div>
                                            <?php $__errorArgs = ['attschment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <textarea name="note" id="" cols="100%" rows="3" placeholder="Note"></textarea>
                                            </div>
                                            <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <div class="input-group">
                                                <?php echo NoCaptcha::renderJs(); ?>

                                                <?php echo NoCaptcha::display(); ?>

                                            </div>
                                            <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <button type="submit">
                                                Send Message
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END SIGN IN -->
                        </div>
                        <!-- END FORM SECTION -->
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp align-items-center " data-wow-delay="0.5s">
                    <div class="small-container slide-benar">
                        <div class="custom-card">
                            <p class="ticket-head">Create Ticket with conversation, Please login/Register.</p>

                            <p class="mt-3">
                                <button class="nav-item ticket-page-login-btn" onclick="showLoginModal()" style="width:auto;">Login</button>
                                <br>
                                <button class="nav-item ticket-page-login-btn" onclick="showRegisterModal()" style="width:auto;">Registrar</button>
                            </p>
                        </div>
                        <div class="custom-blob"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact End -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/frontend/page/ticket.blade.php ENDPATH**/ ?>