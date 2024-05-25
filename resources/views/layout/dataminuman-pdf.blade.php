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

<h1>Data Minuman</h1>

<table id="customers">
  <tr>
  <th>Nama Admin</th>
                        <th>Nama Minuman</th>
                        <th>Jenis Minuman</th>
                        <th>Jumlah Minuman</th>
  </tr>
  @foreach($minuman as $b)
  <tr>
  <td>{{$b->Admin->username}}
                        </td>
                        <td>{{$b->nama}}</td>
                        <td>{{$b->jenis_minuman}}</td>
                        <td>{{$b->jumlah_minuman}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
