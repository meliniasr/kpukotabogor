<div class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <h5 class="card-header" style="background-color: #311b1b  !important;color:white">
            <button class="navbar-toggler btn btn-sm" style="background-color: #fc8434 !important;" type="button"
              data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
              style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
              <i class="fas fa-list" style="color:#fff"><span class="navbar-toggler-icon"></span>Menu List Data Pilpres
                <?= $detail->tahun?>
              </i>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
              aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header" style="background-color:  #fc8434  !important;">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"
                  style="color:white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Menu List Data Pilpres
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
              </div>
              <div class="offcanvas-body" style="background-color: #311b1b  !important;color:white">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/dasar_hukum/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-book" style="color:#fff"></i>&nbsp;Dasar Hukum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/logo_maskot/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-image" style="color:#fff"></i>&nbsp;Logo
                      dan Maskot</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/pasangan_calon/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-users" style="color:#fff"></i>&nbsp;
                      Pasangan Calon
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-folder" style="color:#fff"></i>&nbsp;
                      Hasil Pemilu
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekaphasilsuarasah_kecamatan/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Hasil Penghitungan Perolehan<br> Suara Sah Berdasarkan Kecamatan di Kota Bogor</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekaphasilsuarasah_provinsi/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Hasil Penghitungan Perolehan<br>Suara Sah Berdasarkan Provinsi Jawa Barat <br> dan
                          Nasional</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/perolehan_suarasah_kota/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Perolehan Suara Sah Pasangan<br> Calon di Kota Bogor</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/perolehan_suarasah_provinsi/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Perolehan Suara Sah Pasangan<br> Calon di Provinsi Jawa Barat</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/perolehan_suarasah_nasional/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Perolehan Suara Sah Pasangan<br> Calon di Tingkat Nasional</a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item" href="<?= base_url('beranda/pelantikan/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Rekapitulasi
                          Pelantikan Presiden <br> & Wakil Presiden</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-folder" style="color:#fff"></i>&nbsp;
                      Partisipasi
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekap_partisipasi_tps/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rekapitulasi Jumlah
                          Pemilih
                          <br> Terdaftar dan
                          Jumlah TPS
                        </a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/rekap_partisipasi_pemungutan_suara/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Rekapitulasi Data
                          Pemilih Pada<br>Pelaksanaan Pemungutan Suara
                        </a>
                      </li>
                      <hr>
                      <li><a class="dropdown-item"
                          href="<?= base_url('beranda/tingkat_partisipasi_pemilih/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Tingkat Partisipasi
                          Pemilih Dalam Pemilu Presiden <br> dan Wakil Presiden
                        </a>
                      </li>
                      <hr>
                      <li>
                        <a class="dropdown-item" href="<?= base_url('beranda/surat_suara/').$detail->tahun?>"
                          style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Surat Suara Sah dan Tidak
                          Sah Dalam Pemilu <br> Presiden dan Wakil Presiden
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/peta_politik/').$detail->tahun?>"
                      style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:white"><i
                        class="fas fa-map" style="color:#fff"></i>&nbsp;Peta
                      Politik</a>
                  </li>
                </ul>
              </div>
            </div>
          </h5>
          <div class="card-body text-center">
            <h4 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
              PETA PEROLEHAN SUARA TERTINGGI PASANGAN CALON DI TINGKAT PPS/ KELURAHAN DALAM PILPRES TAHUN
              <?= $detail->tahun?> DI KOTA BOGOR</h4>
            <br>
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-outline card-primary">
                      <div class="card-body">
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
                        <?php foreach ($viewmap as $key => $detail) { ?>
                        $.getJSON("<?php echo base_url().'assets/upload/peta/'  . $detail->geojson ?>", function(data) {
                          geoLayer = L.geoJson(data, {
                            style: function(feature) {
                              return {
                                opacity: 1.0,
                                color: 'black',
                                fillColor: '<?=$detail->warna?>',
                                fillOpacity: 1.0,
                              }
                            },
                          }).addTo(map);

                          geoLayer.eachLayer(function(layer) {
                            layer.bindPopup(
                              "<h6><b>Kecamatan : <?= $detail->kecamatan ?></b></h6>" +
                              "<h6><b>Kelurahan : <?= $detail->kelurahan ?></b></h6>" +
                              "<table id='example2' class='table table-striped table-bordered' style='color:black'>" +
                              "<tr style='color:black'><th>Total Pasangan Calon 1:</th><td>" +
                              <?= $detail->jml_paslon_satu?> +
                              "</td></tr>" + "<tr><th>Pasangan Calon 1 (%):</th><td>" +
                              <?= $detail->persen_paslon_satu?> +
                              "%</td></tr>" +
                              "<tr style='color:black'><th>Total Pasangan Calon 2:</th><td>" +
                              <?=$detail->jml_paslon_dua?> +
                              "</td></tr>" +
                              "<tr><th>Pasangan Calon 2 (%):</th><td>" +
                              <?= $detail->persen_paslon_dua ?> + "%</td></tr>" +
                              "</table>" +
                              "<hr>" +
                              "<p><b>Perolehan Suara Tertinggi: </b></p>" +
                              "<span class='btn btn-secondary btn-sm' style='margin-left:50px'><b><?=$detail->kategori?></b></span> <br><br>" +
                              "<img src='<?= base_url('assets/upload/pasangancalon/' . $detail->foto_capres) ?> ' width='150px' style='margin-left:50px'>" +
                              "<p><?= $detail->nama ?></p>"
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



                        // get color depending on population density detail
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
                            "<label class='form-check-label'><span style='color: #ff8000'><i class = 'fas fa-square fa-lg' style='margin-top:10px'> </i></span><?=$detail2->nama_capres_satu?> <br> (Pasangan Calon 1) <br><br>" +
                            "<label class='form-check-label'><span style='color: #ff0000'><i class = 'fas fa-square fa-lg' style='margin-top:10px'> </i></span><?=$detail2->nama_capres_dua?> <br> (Pasangan Calon 2) <br>"
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
        </div>
      </div>
    </div>
  </div>
</div>