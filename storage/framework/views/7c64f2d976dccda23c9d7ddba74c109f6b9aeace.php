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
  <form action="<?php echo e(route('admin.updatedtls')); ?>" method="post">
  <?php if(Session::get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::get('fail')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('fail')); ?>

                    </div>
                <?php endif; ?>
  <?php echo csrf_field(); ?>
  <table>
        <thead>
          <tr>
              <th>Serial Number</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Transaction Type</th>
              <th>Date Created</th>
              <th>Date Updated</th>
              <th>Updated By</th>
              <th>Unit to Receive</th>
              <th>Remarks</th>
          </tr>
        </thead>
      
        <tbody>
          <tr>
          <input id="afpsn" name="afpsn" type="hidden" value="<?php echo e($result->afpsn); ?>">
          <input id="first_name" name="first_name" type="hidden" value="<?php echo e($result->first_name); ?>">
          <input id="last_name" name="last_name" type="hidden" value="<?php echo e($result->last_name); ?>">
          <input id="transaction_type" name="transaction_type" type="hidden" value="<?php echo e($result->transaction_type); ?>">
          <input id="address" name="address" type="hidden" value="<?php echo e($result->address); ?>">
          <input id="contact_no" name="contact_no" type="hidden" value="<?php echo e($result->contact_no); ?>">
          <input id="other_contact_no" name="other_contact_no" type="hidden" value="<?php echo e($result->other_contact_no); ?>">
          <input id="email" name="email" type="hidden" value="<?php echo e($result->email); ?>">
          <input id="bene" name="bene" type="hidden" value="<?php echo e($result->bene); ?>">
          <input id="folder_no" name="folder_no" type="hidden" value="<?php echo e($result->folder_no); ?>">
          <input id="compliance" name="compliance" type="hidden" value="<?php echo e($result->compliance); ?>">
            <td><?php echo e($result->afpsn); ?></td>
            <td><?php echo e($result->first_name); ?></td>  
            <td><?php echo e($result->last_name); ?></td>
            <td><?php echo e($result->transaction_type); ?></td>
            <td><?php echo e($result->date); ?></td>
            <td><?php echo e($result->updated_at); ?></td>  
            <td><?php echo e($result->last_updated_by); ?></td>
            <td>
            <select class="browser-default" placeholder="unit_to_receive" id="unit_to_receive" name="unit_to_receive" class="validate" value="<?php echo e(old('unit_to_receive')); ?>" required>
                <option value="" disabled selected>Select Unit</option>
                <option value="BGCU">BGCU</option>
                <option value="CIU">CIU</option>
                <option value="LSO">LSO</option>
                <option value="PAU">PAU</option>
                <option value="PG3">PG3</option>
                <option value="PPBU">PPBU</option>
                <option value="TFD">Task Force Differential</option>
            </select>
          </td>
            <td><input placeholder="Remarks" id="remarks" name="remarks" class="validate" value="<?php echo e($result->remarks); ?>" required></td>
          </tr>
        </tbody>
      </table>
      
     <!-- <button class="btn waves-effect waves-light" type="submit" name="action">
        <a style="color:#ffffff" href="#modal1" class="modal-trigger">Update</a>
      </button>
          Modal Structure
          <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Prompt</h4>
          <p>Successful Update</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Done</a>
        </div>
      </div> -->

<button class="btn waves-effect waves-light" type="submit">Update</button>

<textarea name='last_updated_by' type="hidden" value="secret" style="color:white"> <?php echo e($LoggedUserInfo['username']); ?> </textarea> 
<textarea name='unit' type="hidden" value="secret" style="color:white"> <?php echo e($LoggedUserInfo['unit']); ?> </textarea> 
</form>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
          <script>
              document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('select');
              var instances = M.FormSelect.init(elems, options);
              });
          </script>

          <script>
              document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('.modal');
              var instances = M.Modal.init(elems, options);
              });
          </script>
          <script>
              $(document).ready(function(){
                $('.modal').modal();
              });
          </script>
</body>
</html>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php /**PATH D:\xampp\htdocs\pgmc_doc_tracking\resources\views/admin/update.blade.php ENDPATH**/ ?>