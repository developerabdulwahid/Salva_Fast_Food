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
                            <h4>Update Contact</h4>

                            <form method="POST" class="fm-inline ml-2 mt-2"
                                action="<?php echo e(route('contacts.destroy', ['contact' => $contact->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                
                                <p class="" style="text-align: center" onclick="return confirm('Are you sure to delete');"><input type="submit" value="Delete Contact" class="btn btn-danger"/></p>
                            </form>

                        </div>

                        

                        <div class="card-body">
                            <form action="<?php echo e(route('contacts.update', ['contact' => $contact->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="first_name" value="<?php echo e($contact->first_name); ?>" required class="form-control" />
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="last_name" value="<?php echo e($contact->last_name); ?>" required class="form-control" />
                                        <?php if($errors->has('last_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="email" name="email" value="<?php echo e($contact->email); ?>" required class="form-control" />
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="phone_with_cc" value="<?php echo e($contact->phone_with_cc); ?>" required class="form-control" />
                                        <?php if($errors->has('phone_with_cc')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('phone_with_cc')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Enquiry</label>
                                        <div class="col-sm-12 col-md-7">
                                            
                                            <div class="form-group">
                                                <select class="form-control" name="enquiry">
                                                    <option value="compliment" <?php if($contact->enquiry == 'compliment'): ?> selected <?php endif; ?> > Compliment </option>
                                                    <option value="complaint" <?php if($contact->enquiry == 'complaint'): ?> selected <?php endif; ?> > complaint </option>
                                                    <option value="general enquiry" <?php if($contact->enquiry == 'general enquiry'): ?> selected <?php endif; ?> > general enquiry </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Restaurant</label>
                                        <div class="col-sm-12 col-md-7">
                                            
                                            <div class="form-group">
                                                <select class="form-control" name="resturant">
                                                    <option value="Burnley" <?php if($contact->resturant == 'Burnley'): ?> selected <?php endif; ?> > Burnley </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dine Delivery</label>
                                        <div class="col-sm-12 col-md-7">
                                            
                                            <div class="form-group">
                                                <select class="form-control" name="dine_take_delivery">
                                                    <option value="Dine-in" <?php if($contact->dine_take_delivery == 'Dine-in'): ?> selected <?php endif; ?> > Dine-in </option>
                                                    <option value="Takeaway" <?php if($contact->dine_take_delivery == 'Takeaway'): ?> selected <?php endif; ?> > Takeaway </option>
                                                    <option value="Delivery" <?php if($contact->dine_take_delivery == 'Delivery'): ?> selected <?php endif; ?> > Delivery </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    
                                </div>


                                
                                
                                
                                

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control" name="content"> <?php echo e($contact->content); ?> </textarea>
                                    <?php if($errors->has('content')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('content')); ?></span>
                                    <?php endif; ?>
                                        
                                    </div>
                                </div>

                            

                            
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Update contact</button>
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

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/contacts/edit.blade.php ENDPATH**/ ?>