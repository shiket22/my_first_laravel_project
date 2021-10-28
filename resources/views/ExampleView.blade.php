<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Records</title>
</head>
<body>
<?php
//if(DB::connection()->getPdo())
//{
//    echo "Successfully connected to the database => "
//        .DB::connection()->getDatabaseName();
//}else{
//    echo "Unable to connect";
//}
//?>
<style>
    body{
        background-color: #a0aec0;
        font-family: Century;
    }
    table{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);

    }

    table,td,th{

        font-size: 20px;
        margin: auto;
        border-collapse: collapse;
        border: 1.5px solid;
        width: 70%;
    }

    th, td {
        padding: 15px;
        text-align: left;
    }
</style>
<h2 style="text-align: center";>Recorded</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->password }}</td>
      <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
