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
<p class="font-bold text-center  mb-5">AFP Pensioner's Profile</p>  
<div class="bg-white shadow w-full rounded-lg divide-y divide-gray-25">
<p class="font-bold text-center mb-10">Pensioner's Details</p>  
    <div class="px-5 py-7">
        <form action="<?php echo e(route('auth.check')); ?>" method="post">
            <?php if(Session::get('fail')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('fail')); ?>

                </div>
            <?php endif; ?>
            <?php echo csrf_field(); ?>
            <div><div class="input-field col s6">
          <label for="unit_to_receive" class="font-semibold text-sm text-gray-600">Type of Pensioner</label>
          <br>
          <select class="browser-default" placeholder="typeofpensioner" id="typeofpensioner" name="typeofpensioner" class="validate" required>
                <option value="" disabled selected>Select Type</option>
                <option value="principal">Principal</option>
                <option value="bene">Beneficiary</option>
            </select>
            <br>
            <br>
          <span class="text-danger" style="color:red"><?php $__errorArgs = ['unit_to_receive'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Name: </label>
                <label class="font-semibold text-sm text-gray-600">Karl Andrie Caday</label>

                <br>

                <span class="text-danger"><?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Age: </label>
                <label class="font-semibold text-sm text-gray-600">29</label>

                <br>

                <span class="text-danger"><?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Date of Birth: </label>
                <label class="font-semibold text-sm text-gray-600">11-JAN-1994</label>

                <br>

                <span class="text-danger"><?php $__errorArgs = ['snr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Serial Number: </label>
                <label class="font-semibold text-sm text-gray-600">12345</label>

                <br>

                <span class="text-danger"><?php $__errorArgs = ['addr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Home Address: </label>
                <label class="font-semibold text-sm text-gray-600">L62 B8 Cura Lane NIA Village Brgy Sauyo QC</label>

                <br>

                <span class="text-danger"><?php $__errorArgs = ['mpbile_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Mobile Number: </label>
                <label class="font-semibold text-sm text-gray-600">09983309556</label>

                <br>
                
                <span class="text-danger"><?php $__errorArgs = ['source'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Source of Commission/Enlistment: </label>
                <label class="font-semibold text-sm text-gray-600">OC</label>

                <br>

            </div>
        </div>
    </div>
</div>
<br>

<br>
<div>
    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-25">
    <p class="font-bold text-center mb-10">PSA Certificate</p>  
        <div class="px-5 py-7">
            <div>
                
            <label class="font-semibold text-sm text-gray-600">CRS Form Nr 5: </label>
            <label class="font-semibold text-sm text-gray-600">https://e-cert.psahelpline.ph/viewing/249</label>

<br>   
                </div>
                    
                <span class="text-danger"><?php $__errorArgs = ['mpbile_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">Helpline Reference Code: </label>
                <label class="font-semibold text-sm text-gray-600">2372605484</label>
                </div>
    </div>
</div>
<br>
<br>
<div>
    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-25">
    <p class="font-bold text-center mb-10">Proof of Life</p>  
        <div class="px-5 py-7">
            <div> 
            <label class="font-semibold text-sm text-gray-600">Video Clip state your: Name, Date Today while holding calendar</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="mobile_no" placeholder="Sample Video Clip.3gp" disabled/>
                </div>
                <span class="text-danger"><?php $__errorArgs = ['refno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                <label class="font-semibold text-sm text-gray-600">AFP PGMC Ref No</label>
                <label class="font-semibold text-sm text-gray-600">54321</label>
                </div>
            <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
        <span class="inline-block mr-2">Update</span>
    </div>
</div>
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