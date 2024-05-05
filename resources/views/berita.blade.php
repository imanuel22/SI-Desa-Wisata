<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
</head>
<body>

  
  <div id="cards">
  </div>

  <h1>Berita</h1>
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
  $(document).ready(function() {
    // $.get('berita.blade.php',function(data){
    //   $('.title').html(data)
    // })
    $.ajax({
      url: "{{route('berita.index')}}",
      method:"get",
      success:function(data){        
        var html = " "
        for (var i = 0; i < data.data.length; i++) {
          var berita = data.data[i]
          html += "<div class='card'>"+
            "<h1 class='judul'>"+data.data[i].judul+"</h1>"+
            "<img src='' alt='' width='100' height='100'>"+
            "<p class='isi_berita'>"+data.data[i].isi_berita+"</p>"+
            "<p class='penulis'>"+data.data[i].penulis+"</p>"+
            "<p class='tgl_upload'>"+data.data[i].tgl_upload+"</p>"+
          "</div>" 
        }
        $('#cards').html(html)
      },
      error: function(err){
        console.log(err);

      }

  })

  })

  $('#subjects_table').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "{{route('berita.index')}}",
      "columns":[
          {"data": "id_berita"},
          {"data": "judul"},
          {"data": "gambar"},
          {"data": "penulis"},
          {"data": "isi_berita"},
          {"data": "slug"},
          {"data": "tgl_upload"},
          {"data": "id_desawisata"},
      ]
});
  </script>