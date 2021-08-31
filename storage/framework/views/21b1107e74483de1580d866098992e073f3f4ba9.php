<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <div>
    <div class="h-screen flex justify-center items-center">
      <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
          <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
            <img src="2-removebg-preview.png"  title="Logo of a company" alt="Logo of a company" class="center" /> 
              <p class="font-bold text-center  text-2xl mb-5">PGMC Document Tracking</p>  
              <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                <div class="px-5 py-7">
                    <!--<form class="p-3 flex flex-col space-y-5">-->
                    <?php echo Form::open(['method' => 'GET', 'route' => ['text.result']]); ?>

                    <h2 class="font-bold text-center text-2xl mb-5">Search Form</h2>
              
                      <h5 class="font-bold text-left">Input AFP Serial number</h5>
                      <input placeholder="AFP Serial Num" id="afpsn" name="afpsn" class="validate" required>
                      <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
                      <button class="btn waves-effect waves-light" type="submit" name="action"><a href="textmain">Daily Data</a></button>
                      <button class="btn waves-effect waves-light" type="submit" name="action"><a href="existing">Existing</a></button>
                  </div>
                    <?php echo Form::close(); ?>

                </div>
          </div>
  </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\xampp\htdocs\laravel8\resources\views/textsearch.blade.php ENDPATH**/ ?>