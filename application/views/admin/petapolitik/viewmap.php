<!--<?php if (is_it()) { ?>
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
  </div><!-- /.container-fluid -->
</div>
</section>
<!-- Main content -->
<!-- <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-header" style="background-color:#311b1b;color:white">
               <h3 class="card-title"><b><?= $title2?></b></h3>
               <div class="tombol float-right">
                 <a href="<?= base_url('admin/peta_politik/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i> Tambah Data</a>
                 <a href="#" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
               </div>
             </div>-->
<!-- /.card-header -->
<!-- <div class="card-body">
               <?php
                echo $this->session->flashdata('pesan');
                ?>
               <table id="myTable" class="table table-bordered table-hover">
                 <thead>
                   <tr>
                     <th>No.</th>
                     <th>Kecamatan</th>
                     <th>Kelurahan</th>
                     <th>Foto</th>
                     <th>Nama</th>
                     <th>Jumlah Paslon 1</th>
                     <th>Persen Paslon 1</th>
                     <th>Jumlah Paslon 2</th>
                     <th>Persen Paslon 2</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($viewmap as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->kecamatan?></td>
                     <td><?= $value->kelurahan?></td>
                     <td><?= number_format((float)$value->jml_paslon_satu)?></td>
                     <td><?= number_format((float)$value->persen_paslon_satu)?>%</td>
                     <td><?= number_format((float)$value->jml_paslon_dua)?></td>
                     <td><?= number_format((float)$value->persen_paslon_dua)?>%</td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/peta_politik/detail_data/'.$value->id_viewmap) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/edit/'. $value->id_viewmap)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/hapus/'. $value->id_viewmap)?>"
                         onclick="return confirm('Anda yakin akan menghapusnya?')"
                         class="btn btn-sm bg-gradient-danger"><i class="fa fa-trash"></i></a>

                     </td>
                   </tr>
                   <?php } ?>
                 </tbody>
               </table>
             </div>-->
<!-- /.card-body -->
<!--  </div>-->
<!-- /.card -->
</div>-->
</div>-->
</div>-->
</section>-->
</div>-->
<!--<?php } else { ?>-->
<!--<div class="content-wrapper">-->
<!-- Content Header (Page header) -->
<!--<div class="content-header">
     <div class="container-fluid">-->
</div><!-- /.container-fluid -->
</div>-->
</section>-->
<!-- Main content -->
<!-- <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-header" style="background-color:#311b1b;color:white">
               <h3 class="card-title"><b><?= $title2?></b></h3>
               <div class="tombol float-right">
                 <a href="<?= base_url('admin/peta_politik/tambah_data') ?>" class="btn btn-primary btn-sm"><i
                     class="fas fa-plus"></i> Tambah Data</a>
                 <a href="#" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> PDF</a>
               </div>
             </div>-->
<!-- /.card-header -->
<!-- <div class="card-body">
               <?php
                echo $this->session->flashdata('pesan');
                ?>
               <table id="example2" class="table table-bordered table-hover">
                 <thead>
                   <tr>
                     <th>No.</th>
                     <th>Tahun</th>
                     <th>Kecamatan</th>
                     <th>Kelurahan</th>
                     <th>Foto</th>
                     <th>Nama</th>
                     <th>Jumlah Paslon 1</th>
                     <th>Persen Paslon 1</th>
                     <th>Jumlah Paslon 2</th>
                     <th>Persen Paslon 2</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
          $no=1;
          foreach ($viewmap_user as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->tahun?></td>
                     <td><?= $value->kecamatan?></td>
                     <td><?= $value->kelurahan?></td>
                     <td><img width="100"
                         src="<?php echo base_url() . 'assets/upload/pasangancalon/' . $value->foto_capres ?>"></td>
                     <td><?= $value->nama?></td>
                     <td><?= number_format((float)$value->jml_paslon_satu)?></td>
                     <td><?= number_format((float)$value->persen_paslon_satu)?>%</td>
                     <td><?= number_format((float)$value->jml_paslon_dua)?></td>
                     <td><?= number_format((float)$value->persen_paslon_dua)?>%</td>
                     <td>
                       <a style="color:white"
                         href="<?= base_url('admin/peta_politik/detail_data/'.$value->id_viewmap) ?>"
                         class="btn bg-gradient-info btn-sm"><i class="fa fa-eye"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/edit/'. $value->id_viewmap)?>"
                         class="btn btn-sm bg-gradient-primary"><i class="fa fa-edit"></i></a>
                       <a style="color:white" href="<?= base_url('admin/peta_politik/hapus/'. $value->id_viewmap)?>"
                         onclick="return confirm('Anda yakin akan menghapusnya?')"
                         class="btn btn-sm bg-gradient-danger"><i class="fa fa-trash"></i></a>

                     </td>
                   </tr>
                   <?php } ?>
                 </tbody>
               </table>
             </div>-->
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
</div>
</section>
</div>
<?php } ?>-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  </section>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-body">
              <h4 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align:center;">
                PETA PEROLEHAN SUARA TERTINGGI PASANGAN CALON DI TINGKAT PPS/ KELURAHAN DALAM PILPRES TAHUN 2014 DI KOTA
                BOGOR
              </h4>
              <br>
              <div id="map" style="width:100%;height: 500px;"></div>
              <div id="dvTable">
              </div>

              <script type="text/javascript">
              const map = L.map('map').setView([-6.59791700599385, 106.8066514796831], 12);

              const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
              }).addTo(map);

              L.geoJson(statesData).addTo(map);

              //Menampilkan GeoJson dari database
              <?php foreach ($viewmap_user as $key => $value) { ?>
              $.getJSON("<?php echo base_url().'assets/upload/peta/'  . $value->geojson ?>", function(data) {
                geoLayer = L.geoJson(data, {
                  style: function(feature) {
                    return {
                      opacity: 1.0,
                      color: 'black',
                      fillColor: '<?=$value->warna?>',
                      fillOpacity: 1.0,
                    }
                  },
                }).addTo(map);

                geoLayer.eachLayer(function(layer) {
                  layer.bindPopup(
                    "<h6><b>Kecamatan : <?= $value->kecamatan ?></b></h6>" +
                    "<h6><b>Kelurahan : <?= $value->kelurahan ?></b></h6>" +
                    "<table id='example2' class='table table-striped table-bordered'>" +
                    "<tr><th>Total Pasangan Calon 1:</th><td>" +
                    <?= $value->jml_paslon_satu?> +
                    "</td></tr>" + "<tr><th>Pasangan Calon 1 (%):</th><td>" +
                    <?= $value->persen_paslon_satu?> +
                    "%</td></tr>" +
                    "<tr><th>Total Pasangan Calon 2:</th><td>" + <?=$value->jml_paslon_dua?> +
                    "</td></tr>" +
                    "<tr><th>Pasangan Calon 2 (%):</th><td>" +
                    <?= $value->persen_paslon_dua ?> + "%</td></tr>" +
                    "</table>" +
                    "<hr>" +
                    "<p><b>Perolehan Suara Tertinggi: </b></p>" +
                    "<span class='btn btn-secondary btn-sm' style='margin-left:50px'><b><?=$value->kategori?></b></span> <br><br>" +
                    "<img src='<?= base_url('assets/upload/pasangancalon/' . $value->foto_capres) ?> ' width='150px' style='margin-left:50px'>" +
                    "<p><?= $value->nama ?></p>"
                  );
                });
              });

              <?php } ?>
              // control that shows state info on hover
              const info = L.control();

              info.onAdd = function(map) {
                this._div = L.DomUtil.create('div', 'info');
                this.update();
                return this._div;
              };



              // get color depending on population density value
              function getColor(d) {
                return d > 1000 ? '#800026' :
                  d > 500 ? '#BD0026' :
                  d > 200 ? '#E31A1C' :
                  d > 100 ? '#FC4E2A' :
                  d > 50 ? '#FD8D3C' :
                  d > 20 ? '#ff0000' :
                  d > 10 ? '#ff8000' : '#ff800';
              }

              function style(feature) {
                return {
                  weight: 2,
                  opacity: 1,
                  color: 'white',
                  dashArray: '3',
                  fillOpacity: 0.7,
                  fillColor: getColor(feature.properties.density)
                };
              }

              function highlightFeature(e) {
                const layer = e.target;

                layer.setStyle({
                  weight: 8,
                  color: '#666',
                  dashArray: '',
                  fillOpacity: 0.7
                });

                layer.bringToFront();

                info.update(layer.feature.properties);
              }

              /* global statesData */
              const geojson = L.geoJson(statesData, {
                style,
                onEachFeature
              }).addTo(map);

              function resetHighlight(e) {
                geojson.resetStyle(e.target);
                info.update();
              }

              function zoomToFeature(e) {
                map.fitBounds(e.target.getBounds());
              }

              function onEachFeature(feature, layer) {
                layer.on({
                  mouseover: highlightFeature,
                  mouseout: resetHighlight,
                  click: zoomToFeature
                });
              }

              map.attributionControl.addAttribution(
                'Peta Politik &copy; <a href="http://kpu-bogorkota.go.id/">KPU KOTA BOGOR</a>');


              const legend = L.control({
                position: 'bottomright'
              });

              legend.onAdd = function(map) {

                const div = L.DomUtil.create('div', 'info legend');
                const grades = [10, 20];
                const labels = [];
                let from, to;

                for (let i = 0; i < grades.length; i++) {
                  from = grades[i];
                  to = grades[i + 1];

                  labels.push(`<i style="background:"></i>`);
                }

                div.innerHTML = labels.join(
                  "<b><p>Warna Peta Politik:</p></b>" +
                  "<label class='form-check-label'><span style='color: #ff8000'><i class = 'fas fa-square fa-lg' style='margin-top:10px'> </i></span><?php foreach($rekapkecamatan_user as $value){?> <?=$value->nama_capres_satu?> <br> (Pasangan Calon 1)<?php }?> <br><br>" +
                  "<label class='form-check-label'><span style='color: #ff0000'><i class = 'fas fa-square fa-lg' style='margin-top:10px'> </i></span><?php foreach($rekapkecamatan_user as $value){?><?=$value->nama_capres_dua?> <br> (Pasangan Calon 2)<?php }?> <br>"
                );
                return div;
              };

              legend.addTo(map);
              </script>


            </div>
          </div>
        </div>
      </div>

  </section>
</div>