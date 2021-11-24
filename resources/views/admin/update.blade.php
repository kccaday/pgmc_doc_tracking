<x-app-layout>
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
    <a href="{{ route('admin.search') }}" class="brand-logo">PGMC Document Tracking</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('admin.search') }}">Back</a></li>
      </ul>
    </div>
  </nav>
  <form action="{{ route('admin.updatedtls') }}" method="post">
  @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
  @csrf
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
          <input id="afpsn" name="afpsn" type="hidden" value="{{$result->afpsn}}">
          <input id="first_name" name="first_name" type="hidden" value="{{$result->first_name}}">
          <input id="last_name" name="last_name" type="hidden" value="{{$result->last_name}}">
          <input id="transaction_type" name="transaction_type" type="hidden" value="{{$result->transaction_type}}">
          <input id="address" name="address" type="hidden" value="{{$result->address}}">
          <input id="contact_no" name="contact_no" type="hidden" value="{{$result->contact_no}}">
          <input id="other_contact_no" name="other_contact_no" type="hidden" value="{{$result->other_contact_no}}">
          <input id="email" name="email" type="hidden" value="{{$result->email}}">
          <input id="bene" name="bene" type="hidden" value="{{$result->bene}}">
          <input id="folder_no" name="folder_no" type="hidden" value="{{$result->folder_no}}">
          <input id="compliance" name="compliance" type="hidden" value="{{$result->compliance}}">
            <td>{{ $result->afpsn }}</td>
            <td>{{ $result->first_name }}</td>
            <td>{{ $result->last_name }}</td>
            <td>{{ $result->transaction_type }}</td>
            <td>{{ $result->date }}</td>
            <td>{{ $result->updated_at }}</td>  
            <td>{{ $result->last_updated_by }}</td>
            <td>
            <select class="browser-default" placeholder="unit_to_receive" id="unit_to_receive" name="unit_to_receive" class="validate" value="{{ old('unit_to_receive') }}" required>
                <option value="" disabled selected>Select Unit</option>
                <option value="BGCU">BGCU</option>
                <option value="CIU">CIU</option>
                <option value="LSO">LSO</option>
                <option value="PAU">PAU</option>
            </select>
          </td>
            <td><input placeholder="Remarks" id="remarks" name="remarks" class="validate" value="{{$result->remarks}}" required></td>
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

<textarea name='last_updated_by' type="hidden" value="secret" style="color:white"> {{ $LoggedUserInfo['username'] }} </textarea> 
<textarea name='unit' type="hidden" value="secret" style="color:white"> {{ $LoggedUserInfo['unit'] }} </textarea> 
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
</x-app-layout>

