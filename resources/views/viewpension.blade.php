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
              <th>BIRTHDATE</th>
              <th>Remarks</th>
          </tr>
        </thead>
        <form action="{{ route('admin.textUser') }}" method="post">
 
        <tbody>
          <tr>
          <td>12345</td>
          <td>testfname</td>
          <td>testlname</td>
          <td>54321</td>
          <td>02-JUN-1985</td>
          <td>AFPPGMC</td>
          <span class="inline-block mr-2">
            <a class="mr-5 hover:text-gray-900" href="/pensiondetails">Login</a>
            </span>
          </tr>
        </tbody>
      </table>
</form>
<!--<button class="btn btn-block btn-primary" type="submit" name="action"><a href="{{ url('admin/success') }}" >Text User</button> -->

</body>
</html>
</x-app-layout>

