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
    <title>Text Main</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<nav class=”blue”>
    <div class="nav-wrapper" >
    <a href="#" class="brand-logo">PGMC Document Tracking</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="textsearch">Back</a></li>
      </ul>
    </div>
  </nav>

  <table> 
        <thead>
          <tr>
              <th>AFP Serial Num</th>
              <th>Contact No</th>
              <th>Concatenated Text</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $textListMain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
          <tr>
              <td><?php echo e($texts->afpsn); ?></td>
              <td><?php echo e($texts->contact_no); ?></td>
              <td><?php echo e($texts->concatenated); ?></td>
          </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\laravel8\resources\views/textmain.blade.php ENDPATH**/ ?>