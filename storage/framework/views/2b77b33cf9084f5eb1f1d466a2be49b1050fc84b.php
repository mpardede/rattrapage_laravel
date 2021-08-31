
<?php $__env->startSection('content'); ?>       	
<?php if($message = Session::get('Success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
<div class="task-list">       
		<div class="card">
			<div class="card-content">
				<div class="content">
				<h2>Task ID: <?php echo e($tasks->id); ?></h2>
					<h3><?php echo e($tasks->title); ?> </h3>
				</div>
                <p class="card-text"><?php echo e($tasks->description); ?></p>
				<p class="card-text">Created at : <?php echo e($tasks->created_at); ?></p>
				<?php if($tasks->completed): ?>
				<a href="" type="button" class="btn btn-success">Completed</a>
				<?php else: ?> 
				<form method="POST" action="/completed">
					<?php echo csrf_field(); ?>
					<input name="id" value="<?php echo e($tasks->id); ?>" type="hidden"> 
					<input name="completed" value="1" type="hidden"> 
					<button class="btn btn-info">Complete</button>
				</form>
				<?php endif; ?>
			</div>
			<div class="card-footer">
			</div>
		</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ujian_laravel\resources\views/task.blade.php ENDPATH**/ ?>