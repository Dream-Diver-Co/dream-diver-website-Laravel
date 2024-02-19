<?php $__env->startSection('content'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Reasonable Price</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reasonable Price</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-7">
        <div class="container-xxl py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6">Reasonable Price</h1>
            </div>
            <div class="container">
                <div class="row g-5">
                    <div>
                        <p>
                            "At our service center, we take pride in offering top-notch solutions at a reasonable price."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/frontend/page/reasonable.blade.php ENDPATH**/ ?>