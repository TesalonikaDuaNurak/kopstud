<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Admin</h1>

<table id="customers">
  <tr>
  <th>Username</th>
  <th>Nama Admin</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Password</th>
  </tr>
  @foreach($admin as $b)
  <tr>
  <td>{{$b->username}}
                        </td>
                        <td>{{$b->nama}}</td>
                        <td>{{$b->alamat}}</td>
                        <td>{{$b->no_hp}}</td>
                        <td>{{$b->pass}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
