<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title_pdf;?></title>
  <style>
  #table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #table td,
  #table th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #table tr:hover {
    background-color: #ddd;
  }

  #table th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #fc8434;
    color: white;
  }
  </style>
</head>

<body>
  <div style="text-align:center">
    <img width="100px" src="<?= base_url('assets/upload/logokpu.png')?>" alt="">
    <h2 style="font-family: 'Times New Roman', Times, serif;">KOMISI PEMILIHAN UMUM <br> KOTA BOGOR</h2>
    <p style="font-family: 'Times New Roman', Times, serif;"> DASAR HUKUM PENYELENGGARAAN PEMILIHAN UMUM
      PRESIDEN DAN WAKIL PRESIDEN TAHUN <?= $this->session->userdata('tahun')?>
  </div>
  <br>
  <table id="table">
    <tr>
      <th style="text-align: center;">No.</th>
      <th style="text-align: center;">Tahun</th>
      <th style="text-align: center;">Isi Dasar Hukum</th>
    </tr>
    </thead>
    <tbody>
      <?php
                      $no = 1;
                      foreach ($dasarhukum_user as $row) { ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $row->tahun?></td>
        <td><?= $row->deskripsi ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>



</html>