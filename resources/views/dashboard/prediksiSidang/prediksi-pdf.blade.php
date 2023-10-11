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

<h1>Laporan Prediksi Mahasiswa Siap Sidang</h1>
<h6>Tanggal Cetak : </h6>

<table id="customers">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Mahasiswa</th>
            <th scope="col">Pbb 1</th>
            <th scope="col">Pbb 2</th>
            <th scope="col">Periode Sidang</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->pbb1 }}</td>
                <td>{{ $data->pbb2 }}</td>
                <td>{{ $data->Periode_sidang }}</td>
            </tr>
            @endforeach
    </tbody>
</table>

</body>
</html>
