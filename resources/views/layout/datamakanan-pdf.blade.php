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

<h1>Data Makanan</h1>

<table id="customers">
  <tr>
  <th>Nama Admin</th>
                        <th>Nama Makanan</th>
                        <th>Jenis Makanan</th>
                        <th>Jumlah Makanan</th>
  </tr>
  @foreach($makanan as $b)
  <tr>
  <td>{{$b->Admin->username}}
                        </td>
                        <td>{{$b->nama}}</td>
                        <td>{{$b->jenis_makanan}}</td>
                        <td>{{$b->jumlah_makanan}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
