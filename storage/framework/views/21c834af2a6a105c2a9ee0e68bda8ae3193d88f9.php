
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
                    <h4> contacts List</h4>
                    
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Enquiry</th>
                            <th>Dine Delivery</th>
                            <th>Requested ON</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <tr>
                            <td ><?php echo e($row->first_name); ?></td>
                            <td ><?php echo e($row->last_name); ?></td>
                            <td ><?php echo e($row->email); ?></td>
                            <td ><?php echo e($row->phone); ?></td>
                            <td ><?php echo e($row->enquiry); ?></td>
                            <td ><?php echo e($row->dine_take_delivery); ?></td>
                            <td>
                              <?php
                              $date = strtotime($row->created_at);
                              $date = date('d-M-y',$date);
                              ?>
                              <?php echo e($date); ?>

                            </td>
                            <td>

                                <a href="<?php echo e(route('contacts.edit',['contact' => $row->id])); ?>" class="btn btn-icon btn-sm btn-info"><i class="fas fa-edit"></i></a>

                                  

                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
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
<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/contacts/index.blade.php ENDPATH**/ ?>