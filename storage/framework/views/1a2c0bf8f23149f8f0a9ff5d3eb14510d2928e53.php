<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12 " >
<center><img src="<?php echo e(url('2-removebg-preview.png')); ?>"  width="400"  title="Logo of a company" alt="Logo of a company"/> </center>
<div class="p-10 xs:p-0 mx-auto md:w-full">
<p class="font-bold text-center  mb-5">AFP Pensioner's Living Status Updating Form</p>  
<div class="bg-white shadow w-full rounded-lg divide-y divide-gray-25">
<p class="font-bold text-center  mb-5">Pensioner's Details</p>  
<div class="px-5 py-7">
        <label for="pensioner_type" class="font-semibold text-sm text-gray-600">Type of Pensioner:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_type" name="pensioner_type" value="<?php echo e($result->pensioner_type); ?>" disabled>
        <br>
        <label for="pensioner_loc" class="font-semibold text-sm text-gray-600">Location of Pensioner:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_loc" name="pensioner_loc" value="<?php echo e($result->pensioner_loc); ?>" disabled>
        <br>
        <label for="pensioner_afpsn" class="font-semibold text-sm text-gray-600">Serial Number:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_afpsn" name="pensioner_afpsn" value="<?php echo e($result->pensioner_afpsn); ?>" disabled>
        <br>
        <label for="pensioner_first_name" class="font-semibold text-sm text-gray-600">First Name:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_first_name" name="pensioner_first_name" value="<?php echo e($result->pensioner_first_name); ?>" disabled>
        <br>
        <label for="pensioner_last_name" class="font-semibold text-sm text-gray-600">Last Name:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_last_name" name="pensioner_last_name" value="<?php echo e($result->pensioner_last_name); ?>" disabled>
        <br>
        <label for="pensioner_age" class="font-semibold text-sm text-gray-600">Age:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_age" name="pensioner_age" value="<?php echo e($result->pensioner_age); ?>" disabled>
        <br>
        <label for="pensioner_dob" class="font-semibold text-sm text-gray-600">Date Of Birth:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_dob" name="pensioner_dob" value="<?php echo e($result->pensioner_dob); ?>" disabled>
        <br>
        <label for="pensioner_home_address" class="font-semibold text-sm text-gray-600">Home Address:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_home_address" name="pensioner_home_address" value="<?php echo e($result->pensioner_home_address); ?>" disabled>
        <br>
        <label for="pensioner_contact_no" class="font-semibold text-sm text-gray-600">Contact Number:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_contact_no" name="pensioner_contact_no" value="<?php echo e($result->pensioner_age); ?>" disabled>
        <br>
       
</div>
<div class="bg-white shadow w-full rounded-lg divide-y divide-gray-25">
<p class="font-bold text-center mb-10">Attachments Required</p>  
    <div class="px-5 py-7">
    <div>
    <label for="pensioner_afpid" class="font-semibold text-sm text-gray-600">Pensioner AFP ID:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_afpid" name="pensioner_afpid" value="<?php echo e($result->pensioner_afpid); ?>" disabled>
        <br>
        <label for="pensioner_afpidnr" class="font-semibold text-sm text-gray-600">ID Number:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_afpidnr" name="pensioner_afpidnr" value="<?php echo e($result->pensioner_afpidnr); ?>" disabled>
        <br>
        <label for="pensioner_retor" class="font-semibold text-sm text-gray-600">Retirement Order:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_retor" name="pensioner_retor" value="<?php echo e($result->pensioner_retor); ?>" disabled>
        <br>
        <label for="pensioner_order" class="font-semibold text-sm text-gray-600">GO/SO Number:</label>
        <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id="pensioner_order" name="pensioner_order" value="<?php echo e($result->pensioner_order); ?>" disabled>
        <br>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
  </script> 
</body>
</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\pgmc_doc_tracking-1\resources\views/pensiondetails.blade.php ENDPATH**/ ?>