<?php $__env->startSection('content'); ?>

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
    <div class=" text-center py-5">
        <p class="display-4 text-white animated slideInDown mb-4">Portfolio</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- ======= Portfolio Section ======= -->
  <section class="py-7">
    <div class="container-xxl py-5">
        <div>
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6">OUR WORKS</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                    $projects = App\Models\Project::where('status', 'on')->get();
                ?>

                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="<?php echo e(route('software_development')); ?> ">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="<?php echo e(asset('storage/' . $project->project_image)); ?>" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src=" <?php echo e(asset('storage/' . $project->project_image)); ?> " alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p><?php echo e($project->project_title); ?></p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text"><a href="<?php echo e($project->project_link); ?>" target="_blank" ><?php echo e($project->project_title); ?> </a></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
  </section>
<!-- End Portfolio Section -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/frontend/page/portfolio.blade.php ENDPATH**/ ?>