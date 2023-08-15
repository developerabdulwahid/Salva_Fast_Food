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
                    <h4>Applicant Details</h4>

                    <form method="POST" class="fm-inline ml-2 mt-2"
                        action="<?php echo e(route('applicants.destroy', ['applicant' => $applicant->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        
                        <p class="" style="text-align: center" onclick="return confirm('Are you sure to delete');"><input type="submit" value="Delete Application" class="btn btn-danger"/></p>
                    </form>

                  </div>
                  <div class="card-body">
                  


                  <small class="text-muted">Applicant name : </small>
                  <div class="section-title"><?php echo e($applicant->fullname); ?></div>

                  <small class="text-muted">Applicant email : </small>
                  <div class="section-title"><?php echo e($applicant->email); ?></div>

                  <small class="text-muted">Applicant phone : </small>
                  <div class="section-title"><?php echo e($applicant->phone); ?></div>

                  <small class="text-muted">Applicant store : </small>
                  <div class="section-title"><?php echo e($applicant->store); ?></div>

                  <small class="text-muted">Applicant position : </small>
                  <div class="section-title"><?php echo e($applicant->position); ?></div>

                  <small class="text-muted">Applicant time : </small>
                  <div class="section-title"><?php echo e($applicant->time); ?></div>

                    <?php if($applicant->resume != null): ?>
                    <small class="text-muted">Thumbnail : </small>
                    <br/>
                        <a href="<?php echo e(asset('cvs/').'/'.$applicant->resume); ?>"><?php echo e($applicant->resume); ?></a>
                        <br/>
                        <br/>
                        <br/>
                    <?php endif; ?>
                    
                    <small class="text-muted">Application About : </small>
                    <div class="section-title"><?php echo $applicant->content; ?></div>
                    
                  </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/applicants/show.blade.php ENDPATH**/ ?>