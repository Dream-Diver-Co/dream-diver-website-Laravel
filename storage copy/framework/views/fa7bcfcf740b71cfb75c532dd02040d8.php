<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket Reply</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ticket comment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form  action="<?php echo e(route('tickethistory_store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ticket-card">
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Ticket id (hidden)</label>
                                        <input type="text"  name="ticket_id"  class="form-control col-5" id="inputAddress2" value="<?php echo e($ticket->id); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">User id (hidden)</label>
                                        <input type="text" name="user_id" class="form-control col-5" id="inputAddress2" value="<?php echo e(auth()->user()->id); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">User Email</label>
                                        <input type="text"  name="email"  class="form-control col-5" id="inputAddress2" value="<?php echo e($ticket->email); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Issue</label>
                                        <input type="text"  name="issue"  class="form-control col-5" id="inputAddress2" value="<?php echo e($ticket->issue); ?>"  placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Atached files</label><br>
                                        <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src="<?php echo e(asset('storage/' .$attachment->attachment_name)); ?>" alt="image"  class="ticket-img col-5">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                      <label for="inputAddress2" class="col-3 text-right">Status</label>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" <?php echo e($ticket->status == 'on' ? 'checked' : ''); ?> readonly>
                                            <label for="statusYes" class="form-check-label">On</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusNo" class="form-check-input" value="off" <?php echo e($ticket->status == 'off' ? 'checked' : ''); ?> readonly>
                                            <label for="statusNo" class="form-check-label">Off</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                    <label for="inputAddress2" class="col-3 text-right">Ticket comment history</label>
                                    <table class="table table-bordered table-striped col-5">
                                        <thead>
                                            <tr>
                                                <th>Ticket Creator</th>
                                                <th>Admin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $ticket_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <?php if($history->comment_user_id != 1): ?>
                                                        <td class="table-success"><?php echo e($history->comment); ?></td>
                                                        <td></td>
                                                    <?php else: ?>
                                                        <td></td>
                                                        <td class="table-info"><?php echo e($history->comment); ?></td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                   </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Comment for ticket</label>
                                        <input type="text"  name="comment"  class="form-control col-5" id="inputAddress2" value=""  placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <label for="inputAddress2" class="col-3 text-right"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\office\dream diver new git\ddyounus\resources\views/tickets/edit.blade.php ENDPATH**/ ?>