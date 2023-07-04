<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>


<nav class=”blue”>
    <div class="nav-wrapper" >
    <a href="<?php echo e(route('admin.search')); ?>" class="brand-logo">PGMC Online Updating Validation</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo e(route('admin.search')); ?>">Back</a></li>
      </ul>
    </div>
  </nav>
  <table>
        <thead>
          <tr>
              <th>AFP Serial Num</th>
              <th>FIRST NAME</th>
              <th>LAST NAME</th>
              <th>AFPPGMC Ref No</th>
              <th>PSA Helpline Ref No</th>
              <th>BIRTHDATE</th>
              <th>Creation Date</th>
          </tr>
        </thead>
        <form action="<?php echo e(route('admin.textUser')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $viewupdate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tbody>
          <tr>
          <td><?php echo e($dtl->pensioner_afpsn); ?></td>
          <td><?php echo e($dtl->pensioner_first_name); ?></td>
          <td><?php echo e($dtl->pensioner_last_name); ?></td>
          <td><?php echo e($dtl->pensioner_pgmc_ref_code); ?></td>
          <td><?php echo e($dtl->pensioner_helpline_code); ?></td>
          <td><?php echo e($dtl->pensioner_dob); ?></td>
          <td><?php echo e($dtl->creation_date); ?></td>
          <td><a class="mr-5 hover:text-gray-900" href="/pensiondetails">UPDATE</a></td>
          </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
      
</form>


</body>
</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\pgmc_doc_tracking-1\resources\views/viewupdate.blade.php ENDPATH**/ ?>