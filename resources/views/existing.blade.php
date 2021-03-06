<x-app-layout>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Main</title>
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
        <thead>
          <tr>
              <th>AFP Serial Num</th>
              <th>Rank</th>
              <th>First Name</th>
              <th>Last Name<th>
          </tr>
        </thead>
        @foreach($textList as $textLists)
        <tbody>
          <tr>
              <td>{{ $textLists->afpsn }}</td>
              <td>{{ $textLists->pension_rank }}</td>
              <td>{{ $textLists->first_name }}</td>
              <td>{{ $textLists->last_name }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

</x-app-layout>

