 <?php $__env->startSection('title','create-job'); ?>
<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Job Details</h4>
                  </div>
                  <div class="card-body">
                  <small class="text-muted">Job title : </small>
                    <div class="section-title"><?php echo e($details->title); ?></div>
                  <small class="text-muted">Job category : </small>

                    <div class="section-title"><?php echo e($details->category); ?></div>
                    <?php if($details->file != null): ?>
                    
                    <small class="text-muted">Thumbnail : </small>
                    <br/>
                    
                        <img src="<?php echo e(asset('jobs/').'/'.$details->file); ?>" height="150" alt="">
                        <br/>
                        <br/>
                        <br/>
                    <?php endif; ?>
                  <small class="text-muted">Job description : </small>
                    <?php echo $details->description; ?>

                  </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/job-detail.blade.php ENDPATH**/ ?>