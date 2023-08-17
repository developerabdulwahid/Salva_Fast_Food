 <?php $__env->startSection('title','Add new slider'); ?>
<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Logo</h4>
                        </div>

                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success text-center">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>  
                        
                        <div class="card-body">
                            <form action="<?php echo e(route('logo.update', ['id' => $logo->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="title" value="<?php echo e($logo->title); ?>" required class="form-control" />
                                <?php if($errors->has('title')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                                <?php endif; ?>
                                </div>
                            </div>
                            

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File</label>
                                
                                <a class="ml-3" href="<?php echo e(asset('logo_images/').'/'.$logo->file); ?>"><?php echo e($logo->title); ?></a>
                                
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="file" />
                                        <?php if($errors->has('file')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('file')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Update Logo</button>
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

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/logos/edit.blade.php ENDPATH**/ ?>