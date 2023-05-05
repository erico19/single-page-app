<?php $__env->startSection('content'); ?>

<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1800x900/?beach')">

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
           
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e($message); ?>

                    </div>
                <?php else: ?>
                    <div class="alert alert-success">
                        You are logged in successfully!
                    </div>       
                <?php endif; ?>                
            </div>
        </div>
    </div>    
</div>
    
<?php $__env->stopSection(); ?>



<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1800x900/?beach')">
  <div class="container">
    <?php if(Auth::user()): ?> 
      <h1 class="display-4">Welcome back, <?php echo e(Auth::user()->nickname); ?>!</h1>
      <p class="lead">To your one stop shop for reservation management.</p>
      <a href="/dashboard" class="btn btn-success btn-lg my-2">View your Dashboard</a>
    <?php else: ?>
      <h1 class="display-3">Reservation management made easy.</h1>
      <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
      <a href="/login" class="btn btn-success btn-lg my-2">Sign Up for Access to Thousands of Hotels</a>
    <?php endif; ?>                
  </div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SMART TEC\single-page-app\resources\views/home.blade.php ENDPATH**/ ?>