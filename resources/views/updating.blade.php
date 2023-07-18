<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('pgmc.updating') }}">
        @csrf

<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12 " >
<center><img src="{{url('2-removebg-preview.png')}}"  width="400"  title="Logo of a company" alt="Logo of a company"/> </center>
<div class="p-10 xs:p-0 mx-auto md:w-full">
<p class="font-bold text-center  mb-5">AFP Pensioner's Living Status Updating Form</p>  
<div class="bg-white shadow w-full rounded-lg divide-y divide-gray-25">
<p class="font-bold text-center mb-10">Pensioner's Details</p>  
    <div class="px-5 py-7">
        <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            @csrf
            <div><div class="input-field col s6">
          <label for="unit_to_receive" class="font-semibold text-sm text-gray-600">Type of Pensioner</label>
          <br>
          <span class="text-danger" style="color:red">@error('pensioner_type'){{ $message }} @enderror</span>
          <select class="browser-default" placeholder="pensioner_type" id="pensioner_type" name="pensioner_type" class="validate" value="{{ old('pensioner_type') }}" required>
                <option value="" disabled selected>Select Type</option>
                <option value="Principal">Principal</option>
                <option value="Beneficiary">Beneficiary</option>
            </select>
            <br>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Event handler for dropdown change event
        $('#pensioner_type').change(function () {
            var selectedOption = $(this).val();

            // Check the selected option value
            if (selectedOption === 'principal') {
                // Disable the textbox
                $('#pensioner_crs').prop('disabled', true);
            } else {
                // Enable the textbox
                $('#pensioner_crs').prop('disabled', false);
            }
        });
    });
</script>
            <br>
            <div><div class="input-field col s6">
          <label for="unit_to_receive" class="font-semibold text-sm text-gray-600">Location of Pensioner</label>
          <br>
          <span class="text-danger" style="color:red">@error('pensioner_loc'){{ $message }} @enderror</span>
          <select class="browser-default" placeholder="pensioner_loc" id="pensioner_loc" name="pensioner_loc" class="validate" value="{{ old('pensioner_loc') }}"required>
                <option value="" disabled selected>Select Type</option>
                <option value="Local">Local</option>
                <option value="Abroad">Abroad</option>
            </select>
            <br>
            <br>
          

                <span class="text-danger">@error('pensioner_afpsn'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Serial Number</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_afpsn" placeholder="Enter Serial Number" value="{{ old('pensioner_afpsn') }}" required/>

                <span class="text-danger">@error('pensioner_first_name'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">First Name</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_first_name" placeholder="Enter First Name" value="{{ old('pensioner_first_name') }}" required/>

                <span class="text-danger">@error('pensioner_last_name'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Last Name</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_last_name" placeholder="Enter Last Name" value="{{ old('pensioner_last_name') }}" required/>

                <span class="text-danger">@error('pensioner_middle_initial'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Middle Initial</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_middle_initial" placeholder="Enter Middle Initial" value="{{ old('pensioner_middle_initial') }}" required/>

                <label for="unit_to_receive" class="font-semibold text-sm text-gray-600">Gender</label>
          <br>
          <span class="text-danger" style="color:red">@error('pensioner_gender'){{ $message }} @enderror</span>
          <select class="browser-default" placeholder="pensioner_gender" id="pensioner_gender" name="pensioner_gender" class="validate" value="{{ old('pensioner_gender') }}"required>
                <option value="" disabled selected>Select Gender</option>
                <option value="principal">M</option>
                <option value="bene">F</option>
            </select>
<br>
                <span class="text-danger">@error('pensioner_age'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Age</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_age" placeholder="Enter Age" value="{{ old('pensioner_age') }}" required/>

                <span class="text-danger">@error('pensioner_dob'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Date of Birth</label>
                <input type="text" class="datepicker border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_dob" placeholder="Enter Date of Birth" value="{{ old('pensioner_dob') }}" required/>

                <script>
        $(document).ready(function(){
            $('.datepicker').datepicker();
        });
    </script>

                <span class="text-danger">@error('pensioner_home_address'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Home Address</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_home_address" placeholder="Enter Home Address" value="{{ old('pensioner_home_address') }}" required/>

                <span class="text-danger">@error('pensioner_contact_no'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Mobile Number</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_contact_no" placeholder="Enter Mobile Number"value="{{ old('pensioner_contact_no') }}" required/>
                
                <span class="text-danger">@error('source'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Source of Commission/Enlistment</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-10 text-sm w-full" name="source" placeholder="Enter Source of Commission/Enlistment" value="{{ old('source') }}" required/>         
            </div>
        </div>
    </div>
</div>
<br>

<br>
<div>
    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-25">
    <p class="font-bold text-center mb-10">Attachments Required</p>  
        <div class="px-5 py-7">
            <div>
                
                <label class="font-semibold text-sm text-gray-600">AFP ID</label>
                <input type="file" name="pensioner_afpid" class="form-control" id="pensioner_afpid">
               
                <span class="text-danger">@error('pensioner_afpidnr'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">ID NUMBER</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_afpidnr" placeholder="Enter Pensioner ID Number" value="{{ old('pensioner_afpidnr') }}"/>
            
                <label class="font-semibold text-sm text-gray-600">Retirement Order</label>
                <input type="file" name="pensioner_retor" class="form-control" id="pensioner_retor">

                <span class="text-danger">@error('pensioner_order'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">GO/SO Number</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="pensioner_order" placeholder="Enter Pensioner Order Number" value="{{ old('pensioner_order') }}"/>
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
                
               
                <label class="font-semibold text-sm text-gray-600">CRS Form Nr 5 Beneficiary</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" id = 'pensioner_crs' name="pensioner_crs" placeholder="Enter Link of CRS Nr 5 for Beneficiary" value="{{ old('pensioner_crs') }}"/>
               
                <span class="text-danger">@error('pensioner_helpline_code'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">Helpline Reference Code</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full mb-5" name="pensioner_helpline_code" placeholder="Enter Helpline Reference Code" value="{{ old('pensioner_helpline_code') }}" required/>
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
                <div class="row">
                    <div class="col-md-6">
                    <input type="file" name="pensioner_proof" class="form-control" id="pensioner_proof">
                <!--</div>
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>-->
                <span class="text-danger">@error('pensioner_pgmc_ref_code'){{ $message }} @enderror</span>
                <label class="font-semibold text-sm text-gray-600">AFP PGMC Ref No</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full mb-5" name="pensioner_pgmc_ref_code" placeholder="Enter AFP PGMC Ref No" value="{{ old('pensioner_pgmc_ref_code') }}" required/>
                </div>
            <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
        <span class="inline-block mr-2">Submit</span>
    </div>
    <!-- Pop-up message -->
<div id="successModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Data saved successfully!</p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to handle form submission and show the pop-up message -->
<script>
    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault(); // Prevent form submission

            // Perform AJAX request to save data
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    // Show success pop-up message
                    $('#successModal').modal('show');
                },
                error: function(xhr) {
                    // Handle error scenario
                }
            });
        });
    });
</script>
</div>
</div>
<script>  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
  </script> 

  <script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            minDate: new Date(new Date().getFullYear(), 0, 1),
            maxDate: new Date(new Date().getFullYear(), 11, 31)
        });
    });
</script>
</form>

</body>
</html>
</x-app-layout>

