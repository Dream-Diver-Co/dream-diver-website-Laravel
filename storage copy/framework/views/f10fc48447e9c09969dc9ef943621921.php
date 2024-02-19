<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Basic tickets</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Basic ticket</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">sl</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        
                        <th scope="col">note</th>
                      </tr>
                    </thead>

                    <tbody>
                        <?php
                            $sl = 1;
                        ?>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($sl++); ?></th>
                        <td><?php echo e($service->name); ?></td>
                        <td><?php echo e($service->email); ?></td>
                        <td><?php echo e($service->phone); ?></td>
                        
                        <td><?php echo e($service->note); ?></td>

                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>
            </div>


        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/basicticket/index.blade.php ENDPATH**/ ?>