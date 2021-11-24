<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<nav class=”blue”>
    <div class="nav-wrapper" >
    <a href="#" class="brand-logo">AFPPGMC’s Online Service Experience</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login">Back</a></li>
      </ul>
    </div>
  </nav>

<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
            <!--img source here
          <img src="images/sample-1.jpg">-->
        </div>
        <div class="card-content">
          <p>OPVS</p>
        </div>
        <div class="card-action">
          <a href="result">This is a link</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
            <!--img source here
          <img src="images/sample-1.jpg">-->
        </div>
        <div class="card-content">
          <p>Doc-tracking</p>
        </div>
        <div class="card-action">
          <a href="textsearch">This is a link</a>
        </div>
      </div>
    </div>
  </div>
   <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <?php /**PATH D:\xampp\htdocs\pgmc_doc_tracking\resources\views/selection.blade.php ENDPATH**/ ?>