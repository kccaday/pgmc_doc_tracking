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
    <a href="{{ route('admin.search') }}" class="brand-logo">PGMC Online Updating Validation</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('admin.search') }}">Back</a></li>
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
        @csrf
        @foreach($viewupdatelist as $dtl) 
        <tbody>
          <tr>
          <td>{{ $dtl->pensioner_afpsn }}</td>
          <td>{{ $dtl->pensioner_first_name }}</td>
          <td>{{ $dtl->pensioner_last_name }}</td>
          <td>{{ $dtl->pensioner_pgmc_ref_code }}</td>
          <td>{{ $dtl->pensioner_helpline_code }}</td>
          <td>{{ $dtl->pensioner_dob }}</td>
          <td>{{ $dtl->creation_date }}</td>
          <td><a class="mr-5 hover:text-gray-900" href="/pensiondetails">UPDATE</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
      
</form>


</body>
</html>
</x-app-layout>

