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
    <a href="<?php echo e(route('admin.search')); ?>" class="brand-logo">PGMC Document Tracking</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo e(route('admin.search')); ?>">Back</a></li>
      </ul>
    </div>
  </nav>
  <form action="" method="get">
  <table>
        <thead>
          <tr>
              <th>AFP Serial Num</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Transaction Type</th>
              <th>Date Updated</th>
              <th>Document Owner</th>
              <th>Last Updated By</th>
              <th>Last Updated By Unit</th>
              <th>Remarks</th>
          </tr>
        </thead>
        <?php echo Form::open(['method' => 'GET', 'route' => ['admin.update']]); ?>

        <?php $__currentLoopData = $dashboard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
        <tbody>
          <tr>
          <td id="afpsn"><?php echo e($dash->afpsn); ?></td>
          <td><?php echo e($dash->first_name); ?></td>
          <td><?php echo e($dash->last_name); ?></td>
          <td><?php echo e($dash->transaction_type); ?></td>
          <td><?php echo e($dash->updated_at); ?></td>
          <td><?php echo e($dash->unit_to_receive); ?></td>
          <td><?php echo e($dash->created_by); ?></td>
          <td><?php echo e($dash->unit); ?></td>
          <td><?php echo e($dash->remarks); ?></td>
          <td><button class="btn waves-effect waves-light" type="submit" name="action"><a href="<?php echo e(url('admin/dashboard/edit', $dash->afpsn)); ?>" > Update </a></button></td>
          </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
      <?php echo Form::close(); ?>

</form>

</body>
</html>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php /**PATH D:\xampp\htdocs\pgmc_doc_tracking\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>