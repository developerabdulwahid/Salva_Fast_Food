
<?php $__env->startSection('title','Jobs'); ?>
<?php $__env->startSection('content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Jobs List</h4>
                    <a href="<?php echo e(route('new-job')); ?>" style="border-radius:2px" class="btn btn-icon icon-left btn-primary"><i class="
                              fas fa-plus"></i> New Job</a>
                  </div>
                  <?php if(Session::has('success')): ?>
                    <div class="alert alert-success text-center">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                  <?php endif; ?>   
                  <div class="card-body">
                    <div class="table-responsive">
                    
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                      
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Applicants</th>
                            <th>Posted On</th>
                            <th>End Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if(count($jobs)>0): ?>
                          <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td ><?php echo e($job->title); ?></td>
                            <td>
                            <?php echo e($job->category); ?>

                            </td>
                            <td>
                              <?php echo e(count($job->applications)); ?>

                            </td>
                            <td>
                              <?php
                              $date = strtotime($job->created_at);
                              $date = date('d-M-y',$date);
                              ?>
                              <?php echo e($date); ?>

                            </td>
                            <td>
                              <?php
                            $date = strtotime($job->end_date);
                              $date = date('d-M-y ',$date);
                              ?>
                              <?php echo e($date); ?>

                            </td>
                            <td>
                            
                            <a href="<?php echo e(route('job-detail',['id'=>$job->id])); ?>" class="btn btn-icon btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            
                            <!-- <a href="#" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-edit"></i></a> -->

                            <a href="<?php echo e(route('delete-job',['id'=>$job->id])); ?>" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>
                          <tr> no data </tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/jobs.blade.php ENDPATH**/ ?>