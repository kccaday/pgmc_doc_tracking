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
  <form action="" method="get">
  <table>
        <thead>
          <tr>
              <th>AFP Serial Num</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Transaction Type</th>
              <th>Date Updated</th>
              <th>Document Owner</th>
              <th>Last Updated By</th>
              <th>Last Updated By Unit</th>
              <th>Remarks</th>
          </tr>
        </thead>
        {!! Form::open(['method' => 'GET', 'route' => ['admin.update']]) !!}
        @foreach($dashboard as $dash) 
        <tbody>
          <tr>
          <td id="afpsn">{{ $dash->afpsn }}</td>
          <td>{{ $dash->first_name }}</td>
          <td>{{ $dash->last_name }}</td>
          <td>{{ $dash->transaction_type }}</td>
          <td>{{ $dash->updated_at }}</td>
          <td>{{ $dash->unit_to_receive }}</td>
          <td>{{ $dash->created_by }}</td>
          <td>{{ $dash->unit }}</td>
          <td>{{ $dash->remarks }}</td>
          <td><button class="btn waves-effect waves-light" type="submit" name="action"><a href="{{ url('admin/dashboard/edit', $dash->afpsn) }}" > Update </a></button></td>
          </tr>
        </tbody>
        @endforeach
      </table>
      {!! Form::close() !!}
</form>

</body>
</html>
</x-app-layout>

