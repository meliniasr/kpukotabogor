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
    color: #000;
  }

  #table td,
  #table th {
    border: 1px solid #000;
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
    <p style="font-family: 'Times New Roman', Times, serif;">VISI & MISI PASANGAN CALON
      <?= $this->session->userdata('tahun')?>
  </div>
  <br>
  <div class="card-body">
    <table id="table">
      <tr>
        <th>Tahun:</th>
        <td><?php echo $detail->tahun ?></td>
      </tr>
      <tr>
        <th>Foto:</th>
        <td><img src="<?= base_url('assets/upload/pasangancalon/'.$detail->foto_capres)?>" width="150px"></td>
      </tr>
      <tr>
        <th>Visi:</th>
        <td><?php echo $detail->visi ?></td>
      </tr>
      <tr>
        <th>Misi:</th>
        <td><?php echo $detail->misi ?></td>
      </tr>
      <tr>
        <th>Pendukung Partai:</th>
        <td> <?php foreach ($foto as $key => $value) {?>
          <img src="<?= base_url('assets/upload/bendera/'.$value->bendera)?>" width="100" height="100">
          <?php }?>
        </td>
      </tr>
    </table>
  </div>
</body>



</html>