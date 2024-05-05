<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
</head>
<body>
  <h1>Desawisata</h1>
  <table id="subjects_table" class="table table-bordered" style="width:100%">
    <thead>
            <tr>
                <th>Id berita</th>
                <th>Judul</th>
                <th>gambar</th>
                <th>penulis</th>
                <th>isi_berita</th>
                <th>slug</th>
                <th>tgl_upload</th>
                <th>id_desawisata</th>
            </tr>
                </thead>
                <tbody>

                </tbody>
        </table>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script>
  $('#subjects_table').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "{{route('desawisata.index')}}",
      "columns":[
          {"data": "id_desawisata"},
          {"data": "gambar"},
          {"data": "alamat"},
          {"data": "nama"},
          {"data": "deskripsi"},
          {"data": "maps"},
          {"data": "kategori"},
          {"data": "kabupaten"},
      ]
});
  </script>