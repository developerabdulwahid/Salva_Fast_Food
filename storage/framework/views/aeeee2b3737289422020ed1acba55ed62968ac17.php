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
                            <h4>Update Franchise</h4>

                            <form method="POST" class="fm-inline ml-2 mt-2"
                                action="<?php echo e(route('franchises.destroy', ['franchise' => $franchise->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                
                                <p class="" style="text-align: center" onclick="return confirm('Are you sure to delete');"><input type="submit" value="Delete Frachise" class="btn btn-danger"/></p>
                            </form>

                        </div>

                        

                        <div class="card-body">
                            <form action="<?php echo e(route('franchises.update', ['franchise' => $franchise->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="first_name" value="<?php echo e($franchise->first_name); ?>" required class="form-control" />
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="last_name" value="<?php echo e($franchise->last_name); ?>" required class="form-control" />
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
                                            <input type="text" name="email" value="<?php echo e($franchise->email); ?>" required class="form-control" />
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="phone" value="<?php echo e($franchise->phone); ?>" required class="form-control" />
                                        <?php if($errors->has('phone')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Country</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="country" value="<?php echo e($franchise->country); ?>" required class="form-control" />
                                        <?php if($errors->has('country')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('country')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="city" value="<?php echo e($franchise->city); ?>" required class="form-control" />
                                        <?php if($errors->has('city')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="address" value="<?php echo e($franchise->address); ?>" required class="form-control" />
                                        <?php if($errors->has('address')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Postal Code</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="postcode" value="<?php echo e($franchise->postcode); ?>" required class="form-control" />
                                        <?php if($errors->has('postcode')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('postcode')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nationality</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="nationality" value="<?php echo e($franchise->nationality); ?>" required class="form-control" />
                                        <?php if($errors->has('nationality')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('nationality')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Find us</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="hear_about_us" value="<?php echo e($franchise->hear_about_us); ?>" required class="form-control" />
                                        <?php if($errors->has('hear_about_us')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('hear_about_us')); ?></span>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ever Run</label>
                                        <div class="col-sm-12 col-md-7">
                                            
                                            <select class="form-control" name="ever_run_options">
                                                <option value="Yes" <?php if($franchise->ever_run_options == 'Yes'): ?> selected <?php endif; ?> > Yes </option>
                                                <option value="No" <?php if($franchise->ever_run_options == 'No'): ?> selected <?php endif; ?> > No </option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Experience</label>
                                        <div class="col-sm-12 col-md-7">
                                            
                                            <select class="form-control" name="food_experience">
                                                <option value="Yes" <?php if($franchise->food_experience == 'Yes'): ?> selected <?php endif; ?> > Yes </option>
                                                <option value="No" <?php if($franchise->food_experience == 'No'): ?> selected <?php endif; ?> > No </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">When start</label>
                                        <div class="col-sm-12 col-md-7">
                                            
                                            <select class="form-control" name="start_options">
                                                <option value="3 MONTHS" <?php if($franchise->start_options == '3 MONTHS'): ?> selected <?php endif; ?> > 3 MONTHS </option>
                                                <option value="6 MONTHS" <?php if($franchise->start_options == '6 MONTHS'): ?> selected <?php endif; ?> > 6 MONTHS </option>
                                                <option value="9 MONTHS" <?php if($franchise->start_options == '9 MONTHS'): ?> selected <?php endif; ?> > 9 MONTHS </option>
                                                <option value="12 MONTHS" <?php if($franchise->start_options == '12 MONTHS'): ?> selected <?php endif; ?> > 12 MONTHS </option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Envestmen Level</label>
                                        <div class="col-sm-12 col-md-7">
                                            
                                            <select class="form-control" name="level_of_investment">
                                                <option value="£50,000 - £70,000" <?php if($franchise->level_of_investment == '£50,000 - £70,000'): ?> selected <?php endif; ?> > £50,000 - £70,000 </option>
                                                <option value="£70,000 - £100,000" <?php if($franchise->level_of_investment == '£70,000 - £100,000'): ?> selected <?php endif; ?> > £70,000 - £100,000 </option>
                                                <option value="£100,000 - £150,000" <?php if($franchise->level_of_investment == '£100,000 - £150,000'): ?> selected <?php endif; ?> > £100,000 - £150,000 </option>
                                                <option value="£500,000+">£150,000+" <?php if($franchise->level_of_investment == '£500,000+">£150,000+'): ?> selected <?php endif; ?> > £500,000+">£150,000+ </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Developement interest</label>
                                    <div class="col-sm-12 col-md-7">
                                        
                                        <select class="form-control" name="type_of_development_interest">
                                            <option value="Country Master Franchise (ability to sub-franchise to others)" 
                                            <?php if($franchise->type_of_development_interest == 'Country Master Franchise (ability to sub-franchise to others)'): ?> selected <?php endif; ?> > Country Master Franchise (ability to sub-franchise to others) </option>
                                            <option value="Regional Development (developing a region)" 
                                            <?php if($franchise->type_of_development_interest == 'Regional Development (developing a region)'): ?> selected <?php endif; ?> > Regional Development (developing a region) </option>
                                            <option value="Multi Site Development (min 3 store clusters)" 
                                            <?php if($franchise->type_of_development_interest == 'Multi Site Development (min 3 store clusters)'): ?> selected <?php endif; ?> > Multi Site Development (min 3 store clusters) </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control" name="description"> <?php echo e($franchise->content); ?> </textarea>
                                    <?php if($errors->has('content')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('content')); ?></span>
                                    <?php endif; ?>
                                        
                                    </div>
                                </div>

                            

                            
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Update Franchise</button>
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

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/franchises/edit.blade.php ENDPATH**/ ?>