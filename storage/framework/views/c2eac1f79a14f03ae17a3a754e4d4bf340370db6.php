<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<div class="form-group">
  <label for="test" class="col-sm-3 control-label">Test</label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="test" placeholder="Enter A Value">
  </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-6 col-sm-3">
    <button type="button" id="go" class="btn btn-primary">Go</button>
  </div>
</div>
<!--Modal-->
<div class="modal fade" id="#myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

        </button>
        <h4 class="modal-title">Modal title</h4>

      </div>
      <div class="modal-body">
        <p>Please enter all values in the fields.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--End Modal-->

<script>
$('#go').click(function() {
  var test1 = $('#test').val();

  if (test1 === "") {
    $('#\\#myModal').modal('show');
  }
});
</script><?php /**PATH D:\xampp\htdocs\pgmc_doc_tracking\resources\views/edit.blade.php ENDPATH**/ ?>