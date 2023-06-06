<div class="card-content">
  <div class="card-body">
	  <div class="form-body">
		<div class="row">
		
		  <div class="col-md-3 col-12">
			<div class="form-group">
			   <?php echo Form::label('role-column', 'Role',['class'=>'star']); ?>

               <?php echo Form::text('role',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'Role']); ?>

			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   <?php echo Form::label('desc-column', 'Role Description'); ?>

			   <?php echo Form::text('role_desc',null,['class'=>'form-control','id'=>'last-name-column','autocomplete'=>'nope','placeholder'=>'Role Description']); ?>

			</div>
		  </div>
		 
		 <div class="col-md-3 col-12">
			<div class="form-group">
				<?php echo Form::label('status-column', 'Status'); ?>

				<?php echo Form::select('status', array('Active'=>'Active','Inactive'=>'Inactive'),null,['class'=>'form-control','id'=>'status-column']); ?>

				
			</div>
		  </div>
          
		</div>
		
		
		
		<h4 class="card-title">Set Permission</h4>
		
		<div class="row">
		<?php if(isset($roleInfo) && !empty($roleInfo)): ?>
			<?php 	$tempArr = json_decode($roleInfo->permission['permission']);
					$module = json_decode($tempArr->module,true); 
			?>
			<?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Mlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4 col-12">
                <div class="toast toast-translucent mr-auto ml-auto" role="alert" aria-live="assertive"
                  aria-atomic="true">
                  <div class="toast-header">
                    <span class="mr-auto toast-title"><?php echo e($Mlist->module_name); ?></span> 
                  </div>
                  <div class="toast-body">
					<?php $__currentLoopData = $Mlist->submodules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="form-group">
						<?php 
							if(strpos($subList['submodule_name'], ' - ') !== false) {
								$innerArr = explode(' - ',$subList['submodule_name']);
								if(strpos($innerArr[1], ' / ') !== false){
									$iconTemp = explode(' / ',$innerArr[1]);	
								}else{
									$iconTemp[0] = $innerArr[1];
								}
							}
						?>				
						<input type="checkbox" <?php if(isset($module[str_replace(' ','_',$Mlist->module_name)][str_replace(' ','_',$innerArr[0])][$iconTemp[0]])){ ?> checked <?php } ?> name="<?php echo str_replace(' ','_',$Mlist->module_name)."-XX00XX-".str_replace(' ','_',$subList['submodule_name']) ?>" data-on="Yes" data-off="No" data-toggle="toggle" data-onstyle="info" data-style="ios" data-size="normal">

						<label> <?php echo e($subList['submodule_name']); ?></label>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php else: ?>
			
			<?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Mlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4 col-12">
                <div class="toast toast-translucent mr-auto ml-auto" role="alert" aria-live="assertive"
                  aria-atomic="true">
                  <div class="toast-header">
                    <span class="mr-auto toast-title"><?php echo e($Mlist->module_name); ?></span> 
                  </div>
                  <div class="toast-body">
					<?php $__currentLoopData = $Mlist->submodules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="form-group">
								
						<input type="checkbox" name="<?php echo str_replace(' ','_',$Mlist->module_name)."-XX00XX-".str_replace(' ','_',$subList['submodule_name']) ?>" data-on="Yes" data-off="No" data-toggle="toggle" data-onstyle="info" data-style="ios" data-size="normal">

						<label> <?php echo e($subList['submodule_name']); ?></label>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
            <div class="col-12 d-flex justify-content-end">
				<button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
				<button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
			</div>
            </div>
	  </div>
  </div>
</div><?php /**PATH E:\Trivizion\Product\coreAdmin\resources\views/admin/subadmin/permission/form.blade.php ENDPATH**/ ?>