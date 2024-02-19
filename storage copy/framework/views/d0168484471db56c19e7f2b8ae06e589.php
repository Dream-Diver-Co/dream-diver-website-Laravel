<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ticket Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form  action="<?php echo e(route('tickets.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ticket-card">
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                            <label for="inputAddress2" class="col-3 text-right">Ticket creator Id (hide):</label>
                                            <input type="text"  name="ticket_creator_id"  class="form-control col-5" id="inputAddress2" value="<?php echo e(auth()->user()->id); ?>" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">User Email (hide)</label>
                                        <input type="text"  name="email"  class="form-control col-5" id="inputAddress2" value="<?php echo e(auth()->user()->email); ?>" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Issue: </label>
                                        <input type="text"  name="issue"  class="form-control col-5" id="inputAddress2" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Attach File: </label>
                                        <input type="file"  name="files[]"  class="form-control col-5" id="inputAddress2" placeholder="" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <label for="inputAddress2" class="form-label">Status</label>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" checked>
                                            <label for="statusYes" class="form-check-label">On</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusNo" class="form-check-input" value="off">
                                            <label for="statusNo" class="form-check-label">Off</label>
                                        </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <label for="inputAddress2" class="col-3 text-right"></label>
                                    <button type="submit" class="btn btn-primary ">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/tickets/create.blade.php ENDPATH**/ ?>