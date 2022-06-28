<x-app-layout>
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
      <ul name="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('admin.search') }}">Back</a></li>
      </ul>
    </div>
  </nav>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('fail'))
    <div class="alert alert-danger">
        {{ session()->get('fail') }}
    </div>
@endif
  <form action="{{ route('admin.add') }}" method="post">
  @csrf
  <div class="row">
    <form class="col s12">
      <div class="row">
      <div class="form-group input-field col s6">
          <label for="afpsn">Serial Number</label>
          <br>
          <input name="afpsn" type="text" class="validate" value="{{ old('afpsn') }}">
          <span class="text-danger" style="color:red">@error('first_name'){{ $message }} @enderror</span>
        </div>
        <div class="form-group input-field col s6">
          <label for="afpsn">Transaction Type</label>
          <br>
          <br>
          <select class="browser-default" placeholder="Transactions" id="transaction_type" name="transaction_type" class="validate" value="{{ old('transaction_type') }}" required>
                <option value="" disabled selected>Transactions</option>
                <option value="Allotment">Allotment</option>
                <option value="Changes in Monthly Pension">Changes in Monthly Pension</option>
                <option value="Deletion">Deletion</option>
                <option value="Direct Pension">Direct Pension</option>
                <option value="DV">DV - 36-months Lumpsum</option>
                <option value="DV">DV - Closed/Invalid Accounts</option>
                <option value="DV">DV - Commutation of TAS</option>
                <option value="DV">DV - Direct Pension</option>
                <option value="DV">DV - Incorporation</option>
                <option value="DV">DV - Living Claims</option>
                <option value="DV">DV - Local Pickup</option>
                <option value="DV">DV - One time payment (Monies)</option>
                <option value="DV">DV - Overpaid/Underpaid</option>
                <option value="DV">DV - Own Rights</option>
                <option value="DV">DV - Restoration</option>
                <option value="DV">DV - Resumption of Pension</option>
                <option value="DV">DV - Separation Gratuity/Resignation</option>
                <option value="DV">DV - Transfer of Pension</option>
                <option value="DV">DV - Unpaid Monthly Pension (Posthumus)</option>
                <option value="Incorporation">Incorporation</option>
                <option value="Issuance">Issuance of Order for Officers</option>
                <option value="Incorporation">Letter of Refund - NQB/TOP</option>
                <option value="Lumpsum Diff">Lumpsum Differential</option>
                <option value="Monies Diff">Monies Differential</option>
                <option value="Prior">Prior Years Claims</option>
                <option value="Pension Diff">Pension Differential</option>
                <option value="Posthumous Pension">Posthumous Pension</option>
                <option value="Restoration of Pension">Restoration of Pension</option>
                <option value="Resumption of Pension">Resumption of Pension</option>
                <option value="RSAB">RSAB</option>
                <option value="Supplementary">Supplementary Claims</option>
                <option value="Transfer of Pension">Transfer of Pension</option>
            </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group input-field col s6">
          <label for="first_name">First Name</label>
          <br>
          <input name="first_name" type="text" class="validate" value="{{ old('first_name') }}">
          <span class="text-danger" style="color:red">@error('first_name'){{ $message }} @enderror</span>
        </div>
            <div class="input-field col s6">
            <label for="last_name">Last Name</label>
            <br>
            <input name="last_name" type="text" class="validate" value="{{ old('last_name') }}">
            <span class="text-danger" style="color:red">@error('last_name'){{ $message }} @enderror</span>
            </div>
         </div>
       <div class="row">
        <div class="input-field col s12">
          <label for="address">Address</label>
          <br>
         <!-- <input disabled value="I am not editable" name="disabled" type="text" class="validate"> -->
         <input name="address" type="text" class="validate" value="{{ old('address') }}">
         <span class="text-danger" style="color:red">@error('address'){{ $message }} @enderror</span>
        </div>
      </div>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <label for="contact_no">Contact Number</label>
          <br>
          <input name="contact_no" type="text" class="validate" value="{{ old('contact_no') }}">
          <span class="text-danger" style="color:red">@error('contact_no'){{ $message }} @enderror</span>
        </div>
        <div class="input-field col s6">
          <label for="other_contact_no">Other Contact Number</label>
          <br>
          <input name="other_contact_no" type="text" class="validate" value="{{ old('other_contact_no') }}">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <label for="email">Email</label>
          <br>
          <input name="email" type="email" class="validate" value="{{ old('email') }}">
        </div>
        <div class="input-field col s6">
          <label for="bene">Name of Beneficiary</label>
          <br>
          <input name="bene" type="text" class="validate" value="{{ old('bene') }}">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <label for="folder_numnber">Folder Number</label>
          <br>
          <input name="folder_no" type="text" class="validate" value="{{ old('folder_no') }}">
        </div>
        <div class="input-field col s6">
          <label for="compliance">Compliance</label>
          <br>
          <input name="compliance" type="text" class="validate" value="{{ old('compliance') }}">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <label for="date">Date Submitted</label>
          <br>
          <input name="date" type="text" class="datepicker" value="{{ old('date') }}">
          <span class="text-danger" style="color:red">@error('date'){{ $message }} @enderror</span>
        </div>
        <div class="input-field col s6">
          <label for="unit_to_receive">Unit to Receive</label>
          <br>
          <br>
          <select class="browser-default" placeholder="unit_to_receive" id="unit_to_receive" name="unit_to_receive" class="validate" value="{{ old('unit_to_receive') }}" required>
                <option value="" disabled selected>Select Unit</option>
                <option value="BGCU">BGCU</option>
                <option value="CIU">CIU</option>
                <option value="LSO">LSO</option>
                <option value="PAU">PAU</option>
                <option value="PG3">PG3</option>
                <option value="PPBU">PPBU</option>
                <option value="Baguio">RSU-Baguio</option>
                <option value="Batangas">RSU-Batangas</option>
                <option value="Bicol">RSU-Bicol</option>
                <option value="Butuan">RSU-Butuan</option>
                <option value="Catbalogan">RSU-Catbalogan</option>
                <option value="Cavite">RSU-Cavite</option>
                <option value="CDO">RSU-CDO</option>
                <option value="Cebu">RSU-Cebu</option>
                <option value="Cotabato">RSU-Cotabato</option>
                <option value="Davao">RSU-Davao</option>
                <option value="Iloilo">RSU-Iloilo</option>
                <option value="Isabela">RSU-Isabela</option>
                <option value="Lipa">RSU-Lipa</option>
                <option value="Lucena">RSU-Lucena</option>
                <option value="Manaoag">RSU-Manaoag</option>
                <option value="NuevaEcija">RSU-Nueva Ecija</option>
                <option value="Pagadian">RSU-Pagadian</option>
                <option value="Palawan">RSU-Palawan</option>
                <option value="Tarlac">RSU-Tarlac</option>
                <option value="Zamboanga">RSU-Zamboanga</option>
                <option value="TFD">Task Force Differential</option>
            </select>
          <span class="text-danger" style="color:red">@error('unit_to_receive'){{ $message }} @enderror</span>
        </div>
      </div>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
        <label for="remarks">Remarks:</label>
        <br>
        <br>    
          <textarea name="remarks" class="materialize-textarea" data-length="120" value="{{ old('remarks') }}"></textarea>
          <span class="text-danger" style="color:red">@error('remarks'){{ $message }} @enderror</span>
        </div>
      </div>
    </form>
  </div>
</form>
<button type="submit" class="btn btn-block btn-primary">Create</button>

    <textarea name='created_by' type="hidden" value="secret" style="color:white"> {{ $LoggedUserInfo['username'] }} </textarea> 
    <textarea name='unit' type="hidden" value="secret" style="color:white"> {{ $LoggedUserInfo['unit'] }} </textarea> 

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
</x-app-layout>

