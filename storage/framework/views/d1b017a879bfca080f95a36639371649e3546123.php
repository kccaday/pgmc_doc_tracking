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
    <title>Text Result</title>
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
    <?php echo Form::open(['method' => 'PUT', 'route' => ['text.update']]); ?>


        <thead>
          <tr>
              <th>Tracking Number</th>
              <th>AFP Serial Num</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Pension Rank</th>
              <th>Transactions</th>
              <th>Type of Process</th>
              <th>Remarks</th>
              <th>Contact No</th>
          </tr>
        </thead>
      
        <tbody>
          <tr>
          <input id="afpsn" name="afpsn" type="hidden" value="<?php echo e($result->afpsn); ?>">
            <td><?php echo e($result->id); ?></td>
            <td><?php echo e($result->afpsn); ?></td>
            <td><?php echo e($result->last_name); ?></td>
            <td><?php echo e($result->first_name); ?></td>
            <td><?php echo e($result->middle_name); ?></td>  
            <td><?php echo e($result->pension_rank); ?></td>

            <td>
            <select class="browser-default" placeholder="Transactions" id="trxns" name="trxns" class="validate" value="<?php echo e($result->trxns); ?>" required>
                <option value="" disabled selected>Transactions</option>
                <option value="Resumption of Pension">Resumption of Pension</option>
                <option value="Transfer of Pension">Transfer of Pension</option>
                <option value="Restoration of Pension">Restoration of Pension</option>
                <option value="Changes in Monthly Pension">Changes in Monthly Pension</option>
                <option value="Posthumous Pension">Posthumous Pension</option>
                <option value="Deletion">Deletion</option>
            </select>
            <td>
            <select class="browser-default" placeholder="Type of Process" id="type_of_process" name="type_of_process" class="validate" value="<?php echo e($result->type_of_process); ?>" required>
                <option value="" disabled selected>Process Type</option>
                <option value="Received Application">Received Application</option>
                <option value="Forwarded to OFM for Pre-Audit">Forwarded to OFM for Pre-Audit</option>
                <option value="For Further Validation">For Further Validation</option>
                <option value="Forwaded to BGCU for RSAB">Forwaded to BGCU for RSAB</option>
                <option value="Forwarded to LSO for DBB">Forwarded to LSO for DBB</option>
                <option value="For gains in payroll">For gains in payroll</option>
                <option value="Forwarded to Mental Health Board">Forwarded to Mental Health Board</option>
            </select>  
           </td>
            <td>
            <select class="browser-default" placeholder="Remarks" id="remarks" name="remarks" class="validate" value="<?php echo e($result->remarks); ?>" required>
                <option value="" disabled selected>Process Type</option>
                <option value="Wait for Further text">Wait for Further text</option>
                <option value="With discrepancy wait for instruction">With discrepancy wait for instruction</option>
                <option value="Process Restoration">Process Restoration</option>
                <option value="Process Deletion">Process Deletion</option>
                <option value="With DBB please secure DBB copy ">With DBB please secure DBB copy </option>
            </select>  
            </td>
            <td><input placeholder="Contact No." id="contact_no" name="contact_no" class="validate" value="<?php echo e($result->contact_no); ?>" required></td>
            
           <!-- <input id="concatenated" name="concatenated" type="hidden" value="<?php echo e($result->remarks); ?>" value="<?php echo e($result->contact_no); ?>"> -->

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
 
<button class="btn waves-effect waves-light" type="submit"><a onclick="M.toast({html: 'Update done!'})" style="color:#ffffff">Update</a></button>

<?php echo Form::close(); ?>

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

<?php /**PATH C:\xampp\htdocs\laravel8\resources\views/textresult.blade.php ENDPATH**/ ?>