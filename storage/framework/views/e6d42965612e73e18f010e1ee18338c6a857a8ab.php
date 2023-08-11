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
                            <h4>Write Your Job</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('new-job')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="title" required class="form-control" />
                                <?php if($errors->has('title')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                                <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" required name="category" class="form-control" />
                                <?php if($errors->has('category')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('category')); ?></span>
                                <?php endif; ?>
                                </div>
                            </div>

                          <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">End Date</label>
                                <div class="col-sm-12 col-md-7">
                                    <input  required type="date" name="end_date" class="form-control" />
                                <?php if($errors->has('end_date')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('end_date')); ?></span>
                                <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea required name="content" class="summernote-simple" style="display: none;"></textarea>
                                <?php if($errors->has('content')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('content')); ?></span>
                                <?php endif; ?>
                                    
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" />
                                        <?php if($errors->has('image')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Create Job</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/abdulwahid/DATA/Study-Material/Salva_Fast_Food/resources/views/dashboard/create-job.blade.php ENDPATH**/ ?>