  <footer class="main-footer">
    <?php echo "Copyright  &copy; " . (int)date('Y') . " <a href='https://'><b>KPU Kota Bogor </b></a> All Right Reserved."; ?>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url()?>assets/backend/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url()?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
$.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url()?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url()?>assets/backend/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url()?>assets/backend/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url()?>assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url()?>assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url()?>assets/backend/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url()?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
  </script>
  <!-- Summernote -->
  <script src="<?= base_url()?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url()?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url()?>assets/backend/dist/js/adminlte.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url()?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url()?>assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- CKEDITOR -->
  <script src="<?php echo base_url()?>assets/backend/ckeditor/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>
  <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>assets/backend/dist/js/highcharts.js">
  </script>
  <script src="<?= base_url()?>assets/backend/dist/js/highcharts.js"></script>
  <script src="<?= base_url()?>assets/backend/dist/js/exporting.js"></script>
  <script src="<?= base_url()?>assets/backend/dist/js/export-data.js"></script>
  <script src="<?= base_url()?>assets/backend/dist/js/accessibility.js"></script>
  <script src="<?= base_url()?>assets/backend/dist/js/raphael-min.js"></script>
  <script src="<?= base_url()?>assets/backend/dist/js/morris.min.js"></script>
  <script src="<?= base_url()?>assets/backend/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/backend/dist/js/bootstrap-colorpicker.js"></script>
  <!-- Peta -->
  <!-- KPU KOTA BOGOR-->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/upload/peta/map.js"></script>
  <link href="<?php echo base_url() ?>assets/backend/docs/css/jqvmap.min.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>leaflet/dist/leaflet.js"></script>


  <script>
$(document).ready(function() {
  $('#kategori').autocomplete({
    source: "<?php echo base_url(). 'admin/peta_politik/get_autofill/?'; ?>",
    select: function(event, ui) {
      $('[name=kategori]').val(ui.item.label);
      $('[name=foto_capres]').val(ui.item.foto_capres);
      $('[name=nama]').val(ui.item.nama);
    }

  });
});
  </script>

  <script>
$(document).ready(function() {
  $('#nama2').autocomplete({
    source: "<?php echo base_url(). 'admin/rekaphasilsuarasah_kecamatan/get_autofill/?'; ?>",
    select: function(event, ui) {
      $('[name=nama]').val(ui.item.label);
      $('[name=capres_dua]').val(ui.item.foto_capres);
    }

  });
});
  </script>

  <script>
$(document).ready(function() {
  $('#nama').autocomplete({
    source: "<?php echo base_url(). 'admin/rekaphasilsuarasah_kecamatan/get_autofill/?'; ?>",
    select: function(event, ui) {
      $('[name=nama]').val(ui.item.label);
      $('[name=capres_satu]').val(ui.item.foto_capres);
    }

  });
});
  </script>

  <script>
$(document).ready(function() {
  $("#id_kelurahan").hide();
  $("#id_geojson").hide();
  $("#id_geojson2").hide();

  loadkelurahan();
  loadgeojson();
  loadkodekel();
});

function loadkelurahan() {
  $("#id_kecamatan").change(function() {
    var getkecamatan = $("#id_kecamatan").val();

    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?= base_url();?>admin/peta_politik/getdatakelurahan",
      data: {
        kecamatan: getkecamatan
      },
      success: function(data) {
        console.log(data);

        var html = "";
        var i;
        for (i = 0; i < data.length; i++) {
          html += '<option value="' + data[i].id_kelurahan +
            '">' + data[i].kelurahan +
            '</option>';
        }
        $("#id_kelurahan").html(html);
        $("#id_kelurahan").show();
      }
    })
  });
}

function loadgeojson() {
  $("#id_kelurahan").change(function() {
    var getkelurahan = $("#id_kelurahan").val();

    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?= base_url();?>admin/peta_politik/getdatageojson",
      data: {
        kelurahan: getkelurahan
      },
      success: function(data) {
        console.log(data);

        var html = "";
        var i;
        for (i = 0; i < data.length; i++) {
          html += '<option value="' + data[i].id_geojson +
            '">' + data[i].geojson +
            '</option>';
        }
        $("#id_geojson").html(html);
        $("#id_geojson").show();
      }
    })
  });
}

function loadkodekel() {
  $("#id_kelurahan").change(function() {
    var getkelurahan = $("#id_kelurahan").val();

    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?= base_url();?>admin/peta_politik/getdatageojson",
      data: {
        kelurahan: getkelurahan
      },
      success: function(data) {
        console.log(data);

        var html = "";
        var i;
        for (i = 0; i < data.length; i++) {
          html += '<option value="' + data[i].id_geojson +
            '">' + data[i].kode_kel +
            '</option>';
        }
        $("#id_geojson2").html(html);
        $("#id_geojson2").show();
      }
    })
  });
}
  </script>

  <script>
//TOTAL JUMLAH PEMILIH LAKI-LAKI
$("#jml_pemilih_laki_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihlaki").val(g);
})
$("#jml_pemilih_laki_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihlaki").val(g);
})
$("#jml_pemilih_laki_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihlaki").val(g);
})
$("#jml_pemilih_laki_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihlaki").val(g);
})
$("#jml_pemilih_laki_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihlaki").val(g);
})
$("#jml_pemilih_laki_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihlaki").val(g);
})
  </script>

  <script>
//TOTAL JUMLAH L + P
$("#jml_pemilih_laki_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var C = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_perempuan_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})

$("#jml_pemilih_laki_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var C = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_perempuan_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_laki_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var C = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_perempuan_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_laki_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var C = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_perempuan_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_laki_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var C = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_perempuan_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_laki_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var C = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
$("#jml_pemilih_perempuan_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var c = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var e = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var f = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var h = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var i = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var j = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var k = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var l = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var m = a + b + c + e + d + f + g + h + i + j + k + l;
  $("#total_jmlpemilihlakiperempuan").val(m);
})
  </script>

  <script>
//TOTAL JUMLAH L + P TANAH SAREAL
$("#jml_pemilih_laki_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var b = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_tnhsareal").val(g);
})
$("#jml_pemilih_perempuan_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_tnhsareal").val());
  var b = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_tnhsareal").val(g);
})
  </script>

  <script>
//TOTAL JUMLAH L + P BOGOR UTARA
$("#jml_pemilih_laki_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrutara").val(g);
})
$("#jml_pemilih_perempuan_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrutara").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrutara").val(g);
})
  </script>

  <script>
//TOTAL JUMLAH L + P BOGOR TIMUR
$("#jml_pemilih_laki_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrtimur").val(g);
})
$("#jml_pemilih_perempuan_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrtimur").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrtimur").val(g);
})
  </script>

  <script>
//TOTAL JUMLAH L + P BOGOR TENGAH
$("#jml_pemilih_laki_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrtengah").val(g);
})
$("#jml_pemilih_perempuan_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrtengah").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrtengah").val(g);
})
  </script>

  <script>
//TOTAL JUMLAH L + P BOGOR SELATAN
$("#jml_pemilih_laki_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrselatan").val(g);
})
$("#jml_pemilih_perempuan_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrselatan").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrselatan").val(g);
})
  </script>

  <script>
//TOTAL JUMLAH L + P BOGOR BARAT
$("#jml_pemilih_laki_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrbarat").val(g);
})
$("#jml_pemilih_perempuan_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_pemilih_laki_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var g = a + b;
  $("#jml_pemilih_lakiperempuan_bgrbarat").val(g);
})
  </script>

  <script>
// TOTAL JUMLAH PEMILIH PEREMPUAN
$("#jml_pemilih_perempuan_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihperempuan").val(g);
})
$("#jml_pemilih_perempuan_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihperempuan").val(g);
})
$("#jml_pemilih_perempuan_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihperempuan").val(g);
})
$("#jml_pemilih_perempuan_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihperempuan").val(g);
})
$("#jml_pemilih_perempuan_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihperempuan").val(g);
})
$("#jml_pemilih_perempuan_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_pemilih_perempuan_bgrbarat").val());
  var b = parseFloat($("#jml_pemilih_perempuan_bgrselatan").val());
  var c = parseFloat($("#jml_pemilih_perempuan_bgrtengah").val());
  var d = parseFloat($("#jml_pemilih_perempuan_bgrtimur").val());
  var e = parseFloat($("#jml_pemilih_perempuan_bgrutara").val());
  var f = parseFloat($("#jml_pemilih_perempuan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlpemilihperempuan").val(g);
})
  </script>

  <script>
// TOTAL JUMLAH TPS
$("#jml_tps_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_tps_bgrbarat").val());
  var b = parseFloat($("#jml_tps_bgrselatan").val());
  var c = parseFloat($("#jml_tps_bgrtengah").val());
  var d = parseFloat($("#jml_tps_bgrtimur").val());
  var e = parseFloat($("#jml_tps_bgrutara").val());
  var f = parseFloat($("#jml_tps_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmltps").val(g);
})
$("#jml_tps_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_tps_bgrbarat").val());
  var b = parseFloat($("#jml_tps_bgrselatan").val());
  var c = parseFloat($("#jml_tps_bgrtengah").val());
  var d = parseFloat($("#jml_tps_bgrtimur").val());
  var e = parseFloat($("#jml_tps_bgrutara").val());
  var f = parseFloat($("#jml_tps_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmltps").val(g);
})
$("#jml_tps_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_tps_bgrbarat").val());
  var b = parseFloat($("#jml_tps_bgrselatan").val());
  var c = parseFloat($("#jml_tps_bgrtengah").val());
  var d = parseFloat($("#jml_tps_bgrtimur").val());
  var e = parseFloat($("#jml_tps_bgrutara").val());
  var f = parseFloat($("#jml_tps_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmltps").val(g);
})
$("#jml_tps_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_tps_bgrbarat").val());
  var b = parseFloat($("#jml_tps_bgrselatan").val());
  var c = parseFloat($("#jml_tps_bgrtengah").val());
  var d = parseFloat($("#jml_tps_bgrtimur").val());
  var e = parseFloat($("#jml_tps_bgrutara").val());
  var f = parseFloat($("#jml_tps_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmltps").val(g);
})
$("#jml_tps_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_tps_bgrbarat").val());
  var b = parseFloat($("#jml_tps_bgrselatan").val());
  var c = parseFloat($("#jml_tps_bgrtengah").val());
  var d = parseFloat($("#jml_tps_bgrtimur").val());
  var e = parseFloat($("#jml_tps_bgrutara").val());
  var f = parseFloat($("#jml_tps_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmltps").val(g);
})
$("#jml_tps_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_tps_bgrbarat").val());
  var b = parseFloat($("#jml_tps_bgrselatan").val());
  var c = parseFloat($("#jml_tps_bgrtengah").val());
  var d = parseFloat($("#jml_tps_bgrtimur").val());
  var e = parseFloat($("#jml_tps_bgrutara").val());
  var f = parseFloat($("#jml_tps_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmltps").val(g);
})
  </script>


  <script>
// TOTAL JUMLAH KELURAHAN
$("#jml_kelurahan_bgrbarat").keyup(function() {
  var a = parseFloat($("#jml_kelurahan_bgrbarat").val());
  var b = parseFloat($("#jml_kelurahan_bgrselatan").val());
  var c = parseFloat($("#jml_kelurahan_bgrtengah").val());
  var d = parseFloat($("#jml_kelurahan_bgrtimur").val());
  var e = parseFloat($("#jml_kelurahan_bgrutara").val());
  var f = parseFloat($("#jml_kelurahan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlkelurahan").val(g);
})
$("#jml_kelurahan_bgrselatan").keyup(function() {
  var a = parseFloat($("#jml_kelurahan_bgrbarat").val());
  var b = parseFloat($("#jml_kelurahan_bgrselatan").val());
  var c = parseFloat($("#jml_kelurahan_bgrtengah").val());
  var d = parseFloat($("#jml_kelurahan_bgrtimur").val());
  var e = parseFloat($("#jml_kelurahan_bgrutara").val());
  var f = parseFloat($("#jml_kelurahan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlkelurahan").val(g);
})
$("#jml_kelurahan_bgrtengah").keyup(function() {
  var a = parseFloat($("#jml_kelurahan_bgrbarat").val());
  var b = parseFloat($("#jml_kelurahan_bgrselatan").val());
  var c = parseFloat($("#jml_kelurahan_bgrtengah").val());
  var d = parseFloat($("#jml_kelurahan_bgrtimur").val());
  var e = parseFloat($("#jml_kelurahan_bgrutara").val());
  var f = parseFloat($("#jml_kelurahan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlkelurahan").val(g);
})
$("#jml_kelurahan_bgrtimur").keyup(function() {
  var a = parseFloat($("#jml_kelurahan_bgrbarat").val());
  var b = parseFloat($("#jml_kelurahan_bgrselatan").val());
  var c = parseFloat($("#jml_kelurahan_bgrtengah").val());
  var d = parseFloat($("#jml_kelurahan_bgrtimur").val());
  var e = parseFloat($("#jml_kelurahan_bgrutara").val());
  var f = parseFloat($("#jml_kelurahan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlkelurahan").val(g);
})
$("#jml_kelurahan_bgrutara").keyup(function() {
  var a = parseFloat($("#jml_kelurahan_bgrbarat").val());
  var b = parseFloat($("#jml_kelurahan_bgrselatan").val());
  var c = parseFloat($("#jml_kelurahan_bgrtengah").val());
  var d = parseFloat($("#jml_kelurahan_bgrtimur").val());
  var e = parseFloat($("#jml_kelurahan_bgrutara").val());
  var f = parseFloat($("#jml_kelurahan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlkelurahan").val(g);
})
$("#jml_kelurahan_tnhsareal").keyup(function() {
  var a = parseFloat($("#jml_kelurahan_bgrbarat").val());
  var b = parseFloat($("#jml_kelurahan_bgrselatan").val());
  var c = parseFloat($("#jml_kelurahan_bgrtengah").val());
  var d = parseFloat($("#jml_kelurahan_bgrtimur").val());
  var e = parseFloat($("#jml_kelurahan_bgrutara").val());
  var f = parseFloat($("#jml_kelurahan_tnhsareal").val());
  var g = a + b + c + d + e + f;
  $("#total_jmlkelurahan").val(g);
})
  </script>

  <script>
// COLORPICKER
$(function() {
  $('#cp1').colorpicker();
});
  </script>

  <script>
// PENJUMLAHAN TIDAK MENGGUNAKAN HAK PILIH NASIONAL BERDASARKAN REKAP PROVINSI
$("#rincian_nasional_satu").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var i = parseFloat($("#suaratdksah_nasional").val());
  var j = parseFloat($("#hakpemilih_nasional").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_nasional").val(s);
})
$("#rincian_nasional_dua").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var i = parseFloat($("#suaratdksah_nasional").val());
  var j = parseFloat($("#hakpemilih_nasional").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_nasional").val(s);
})
$("#suaratdksah_nasional").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var i = parseFloat($("#suaratdksah_nasional").val());
  var j = parseFloat($("#hakpemilih_nasional").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_nasional").val(s);
})
$("#hakpemilih_nasional").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var i = parseFloat($("#suaratdksah_nasional").val());
  var j = parseFloat($("#hakpemilih_nasional").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_nasional").val(s);
})
  </script>

  <script>
// PENJUMLAHAN TIDAK MENGGUNAKAN HAK PILIH PROVINSI BERDASARKAN REKAP PROVINSI
$("#rincian_provinsi_satu").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var i = parseFloat($("#suaratdksah_provinsi").val());
  var j = parseFloat($("#hakpemilih_provinsi").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_provinsi").val(s);
})
$("#rincian_provinsi_dua").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var j = parseFloat($("#hakpemilih_provinsi").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_provinsi").val(s);
})
$("#suaratdksah_provinsi").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var i = parseFloat($("#suaratdksah_provinsi").val());
  var j = parseFloat($("#hakpemilih_provinsi").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_provinsi").val(s);
})
$("#hakpemilih_provinsi").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var i = parseFloat($("#suaratdksah_provinsi").val());
  var j = parseFloat($("#hakpemilih_provinsi").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_provinsi").val(s);
})
  </script>

  <script>
// PENJUMLAHAN TIDAK MENGGUNAKAN HAK PILIH KOTA BOGOR BERDASARKAN REKAP PROVINSI
$("#rincian_kotabogor_satu").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var j = parseFloat($("#hakpemilih_kotabogor").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_kotabogor").val(s);
})
$("#rincian_kotabogor_dua").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var j = parseFloat($("#hakpemilih_kotabogor").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_kotabogor").val(s);
})
$("#suaratdksah_kotabogor").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var j = parseFloat($("#hakpemilih_kotabogor").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_kotabogor").val(s);
})
$("#hakpemilih_kotabogor").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var j = parseFloat($("#hakpemilih_kotabogor").val());
  var s = j - (f + u + i);
  $("#tdkhakpemilih_kotabogor").val(s);
})
  </script>

  <script>
// PENJUMLAHAN SUARA SAH DAN TIDAK SAH NASIONAL BERDASARKAN REKAP PROVINSI-->
$("#rincian_nasional_satu").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var i = parseFloat($("#suaratdksah_nasional").val());
  var s = f + u + i;
  $("#suarasah_tdksah_nasional").val(s);
})
$("#rincian_nasional_dua").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var i = parseFloat($("#suaratdksah_nasional").val());
  var s = f + u + i;
  $("#suarasah_tdksah_nasional").val(s);
})
$("#suaratdksah_nasional").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var i = parseFloat($("#suaratdksah_nasional").val());
  var s = f + u + i;
  $("#suarasah_tdksah_nasional").val(s);
})
  </script>

  <script>
// PENJUMLAHAN SUARA SAH DAN TIDAK SAH PROVINSI BERDASARKAN REKAP PROVINSI
$("#rincian_provinsi_satu").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var i = parseFloat($("#suaratdksah_provinsi").val());
  var s = f + u + i;
  $("#suarasah_tdksah_provinsi").val(s);
})
$("#rincian_provinsi_dua").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var i = parseFloat($("#suaratdksah_provinsi").val());
  var s = f + u + i;
  $("#suarasah_tdksah_provinsi").val(s);
})
$("#suaratdksah_provinsi").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var i = parseFloat($("#suaratdksah_provinsi").val());
  var s = f + u + i;
  $("#suarasah_tdksah_provinsi").val(s);
})
  </script>

  <script>
// PENJUMLAHAN SUARA SAH DAN TIDAK SAH KOTA BOGOR BERDASARKAN REKAP PROVINSI
$("#rincian_kotabogor_satu").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var s = f + u + i;
  $("#suarasah_tdksah_kotabogor").val(s);
})
$("#rincian_kotabogor_dua").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var s = f + u + i;
  $("#suarasah_tdksah_kotabogor").val(s);
})
$("#suaratdksah_kotabogor").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var i = parseFloat($("#suaratdksah_kotabogor").val());
  var s = f + u + i;
  $("#suarasah_tdksah_kotabogor").val(s);
})
  </script>

  <script>
// PENJUMLAHAN RINCIAN NASIONAL (%)
$("#rincian_nasional_satu").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var s = f / (f + u) * 100;
  $("#rincian_persen_nasional_satu").val(s);
})
$("#rincian_nasional_dua").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var s = f / (f + u) * 100;
  $("#rincian_persen_nasional_satu").val(s);
})
$("#rincian_nasional_satu").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var s = u / (f + u) * 100;
  $("#rincian_persen_nasional_dua").val(s);
})
$("#rincian_nasional_dua").keyup(function() {
  var f = parseFloat($("#rincian_nasional_satu").val());
  var u = parseFloat($("#rincian_nasional_dua").val());
  var s = u / (f + u) * 100;
  $("#rincian_persen_nasional_dua").val(s);
})
  </script>

  <script>
// PENJUMLAHAN RINCIAN PROVINSI (%)
$("#rincian_provinsi_satu").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var s = f / (f + u) * 100;
  $("#rincian_persen_provinsi_satu").val(s);
})
$("#rincian_provinsi_dua").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var s = f / (f + u) * 100;
  $("#rincian_persen_provinsi_satu").val(s);
})
$("#rincian_provinsi_satu").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var s = u / (f + u) * 100;
  $("#rincian_persen_provinsi_dua").val(s);
})
$("#rincian_provinsi_dua").keyup(function() {
  var f = parseFloat($("#rincian_provinsi_satu").val());
  var u = parseFloat($("#rincian_provinsi_dua").val());
  var s = u / (f + u) * 100;
  $("#rincian_persen_provinsi_dua").val(s);
})
  </script>

  <script>
// PENJUMLAHAN RINCIAN KOTA BOGOR (%)
$("#rincian_kotabogor_satu").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var s = f / (f + u) * 100;
  $("#rincian_persen_kotabogor_satu").val(s);
})
$("#rincian_kotabogor_dua").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var s = f / (f + u) * 100;
  $("#rincian_persen_kotabogor_satu").val(s);
})
$("#rincian_kotabogor_satu").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var s = u / (f + u) * 100;
  $("#rincian_persen_kotabogor_dua").val(s);
})
$("#rincian_kotabogor_dua").keyup(function() {
  var f = parseFloat($("#rincian_kotabogor_satu").val());
  var u = parseFloat($("#rincian_kotabogor_dua").val());
  var s = u / (f + u) * 100;
  $("#rincian_persen_kotabogor_dua").val(s);
})
  </script>

  <script>
// PENJUMLAHAN RINCIAN KE SUARA SAH
$("#rincian_kotabogor_satu").keyup(function() {
  var a = parseFloat($("#rincian_kotabogor_satu").val());
  var b = parseFloat($("#rincian_kotabogor_dua").val());
  var c = a + b;
  $("#suarasah_kotabogor").val(c);
})
$("#rincian_kotabogor_dua").keyup(function() {
  var a = parseFloat($("#rincian_kotabogor_satu").val());
  var b = parseFloat($("#rincian_kotabogor_dua").val());
  var c = a + b;
  $("#suarasah_kotabogor").val(c);
})
$("#rincian_provinsi_satu").keyup(function() {
  var a = parseFloat($("#rincian_provinsi_satu").val());
  var b = parseFloat($("#rincian_provinsi_dua").val());
  var c = a + b;
  $("#suarasah_provinsi").val(c);
})
$("#rincian_provinsi_dua").keyup(function() {
  var a = parseFloat($("#rincian_provinsi_satu").val());
  var b = parseFloat($("#rincian_provinsi_dua").val());
  var c = a + b;
  $("#suarasah_provinsi").val(c);
})
$("#rincian_nasional_satu").keyup(function() {
  var a = parseFloat($("#rincian_nasional_satu").val());
  var b = parseFloat($("#rincian_nasional_dua").val());
  var c = a + b;
  $("#suarasah_nasional").val(c);
})
$("#rincian_nasional_dua").keyup(function() {
  var a = parseFloat($("#rincian_nasional_satu").val());
  var b = parseFloat($("#rincian_nasional_dua").val());
  var c = a + b;
  $("#suarasah_nasional").val(c);
})
  </script>
  <script>
$(document).ready(function() {
  $('#tahun_getautofill').autocomplete({
    source: "<?php echo base_url(). 'admin/rekaphasilsuarasah_provinsi/get_autofill/?'; ?>",
    select: function(event, ui) {
      $('[name=tahun]').val(ui.item.label);
      $('[name=capres_satu]').val(ui.item.capres_satu);
      $('[name=capres_dua]').val(ui.item.capres_dua);
      $('[name=nama_capres_satu]').val(ui.item.nama_capres_satu);
      $('[name=nama_capres_dua]').val(ui.item.nama_capres_dua);
    }
  });
});
  </script>

  <script>
// PENJUMLAHAN JUMLAH AKHIR SUARA SAH
$("#rincian_bogorbarat_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogorselatan_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogortengah_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogortimur_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogorutara_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_tanahsareal_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogorbarat_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogorselatan_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogortengah_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogortimur_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_bogorutara_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#rincian_tanahsareal_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#suaratdksah_bogorbarat").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#suaratdksah_bogorselatan").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#suaratdksah_bogortengah").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#suaratdksah_bogortimur").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#suaratdksah_bogorutara").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
$("#suaratdksah_tanahsareal").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = parseFloat($("#suaratdksah_bogorbarat").val());
  var n = parseFloat($("#suaratdksah_bogorselatan").val());
  var o = parseFloat($("#suaratdksah_bogortengah").val());
  var p = parseFloat($("#suaratdksah_bogortimur").val());
  var q = parseFloat($("#suaratdksah_bogorutara").val());
  var r = parseFloat($("#suaratdksah_tanahsareal").val());
  var y = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r;
  $("#jumlahakhir_suarasah_tdksah").val(y);
})
  </script>

  <script>
// PENGURANGAN JUMLAH SUARA TIDAK SAH DENGAN RINCIAN BERDASARKAN MASING-MASING KECAMATAN
$("#rincian_bogorbarat_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorbarat_dua").val());
  var c = parseFloat($("#suaratdksah_bogorbarat").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorbarat").val(d);
})
$("#rincian_bogorbarat_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorbarat_dua").val());
  var c = parseFloat($("#suaratdksah_bogorbarat").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorbarat").val(d);
})
$("#suaratdksah_bogorbarat").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorbarat_dua").val());
  var c = parseFloat($("#suaratdksah_bogorbarat").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorbarat").val(d);
})
$("#rincian_bogorselatan_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorselatan_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#suaratdksah_bogorselatan").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorselatan").val(d);
})
$("#rincian_bogorselatan_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorselatan_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#suaratdksah_bogorselatan").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorselatan").val(d);
})
$("#suaratdksah_bogorselatan").keyup(function() {
  var a = parseFloat($("#rincian_bogorselatan_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#suaratdksah_bogorselatan").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorselatan").val(d);
})
$("#rincian_bogortengah_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogortengah_satu").val());
  var b = parseFloat($("#rincian_bogortengah_dua").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogortengah").val(d);
})
$("#rincian_bogortengah_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogortengah_satu").val());
  var b = parseFloat($("#rincian_bogortengah_dua").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogortengah").val(d);
})
$("#suaratdksah_bogortengah").keyup(function() {
  var a = parseFloat($("#rincian_bogortengah_satu").val());
  var b = parseFloat($("#rincian_bogortengah_dua").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogortengah").val(d);
})
$("#rincian_bogortimur_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogortimur_satu").val());
  var b = parseFloat($("#rincian_bogortimur_dua").val());
  var c = parseFloat($("#suaratdksah_bogortimur").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogortimur").val(d);
})
$("#rincian_bogortimur_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogortimur_satu").val());
  var b = parseFloat($("#rincian_bogortimur_dua").val());
  var c = parseFloat($("#suaratdksah_bogortimur").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogortimur").val(d);
})
$("#suaratdksah_bogortimur").keyup(function() {
  var a = parseFloat($("#rincian_bogortimur_satu").val());
  var b = parseFloat($("#rincian_bogortimur_dua").val());
  var c = parseFloat($("#suaratdksah_bogortimur").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogortimur").val(d);
})
$("#rincian_bogorutara_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorutara_satu").val());
  var b = parseFloat($("#rincian_bogorutara_dua").val());
  var c = parseFloat($("#suaratdksah_bogorutara").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorutara").val(d);
})
$("#rincian_bogorutara_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorutara_satu").val());
  var b = parseFloat($("#rincian_bogorutara_dua").val());
  var c = parseFloat($("#suaratdksah_bogorutara").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorutara").val(d);
})
$("#suaratdksah_bogorutara").keyup(function() {
  var a = parseFloat($("#rincian_bogorutara_satu").val());
  var b = parseFloat($("#rincian_bogorutara_dua").val());
  var c = parseFloat($("#suaratdksah_bogorutara").val());
  var d = a + b + c;
  $("#suarasah_tdksah_bogorutara").val(d);
})
$("#rincian_tanahsareal_satu").keyup(function() {
  var a = parseFloat($("#rincian_tanahsareal_satu").val());
  var b = parseFloat($("#rincian_tanahsareal_dua").val());
  var c = parseFloat($("#suaratdksah_tanahsareal").val());
  var d = a + b + c;
  $("#suarasah_tdksah_tanahsareal").val(d);
})
$("#rincian_tanahsareal_dua").keyup(function() {
  var a = parseFloat($("#rincian_tanahsareal_satu").val());
  var b = parseFloat($("#rincian_tanahsareal_dua").val());
  var c = parseFloat($("#suaratdksah_tanahsareal").val());
  var d = a + b + c;
  $("#suarasah_tdksah_tanahsareal").val(d);
})
$("#suaratdksah_tanahsareal").keyup(function() {
  var a = parseFloat($("#rincian_tanahsareal_satu").val());
  var b = parseFloat($("#rincian_tanahsareal_dua").val());
  var c = parseFloat($("#suaratdksah_tanahsareal").val());
  var d = a + b + c;
  $("#suarasah_tdksah_tanahsareal").val(d);
})
  </script>

  <script>
// PENJUMLAHAN JUMLAH AKHIR SUARA SAH
$("#rincian_bogorbarat_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogorselatan_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogortengah_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogortimur_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogorutara_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_tanahsareal_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogorbarat_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogorselatan_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogortengah_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogortimur_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_bogorutara_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
$("#rincian_tanahsareal_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = parseFloat($("#rincian_bogorbarat_dua").val());
  var h = parseFloat($("#rincian_bogorselatan_dua").val());
  var i = parseFloat($("#rincian_bogortengah_dua").val());
  var j = parseFloat($("#rincian_bogortimur_dua").val());
  var k = parseFloat($("#rincian_bogorutara_dua").val());
  var l = parseFloat($("#rincian_tanahsareal_dua").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jumlahakhir_suarasah").val(m);
})
  </script>

  <script>
// PENJUMLAHAN JUMLAH SUARA SAH BERDASARKAN MASING-MASING KECAMATAN
$("#rincian_bogorbarat_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorbarat_dua").val());
  var g = a + b;
  $("#suarasah_bogorbarat").val(g);
})
$("#rincian_bogorbarat_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorbarat_dua").val());
  var g = a + b;
  $("#suarasah_bogorbarat").val(g);
})
$("#rincian_bogorselatan_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorselatan_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var g = a + b;
  $("#suarasah_bogorselatan").val(g);
})
$("#rincian_bogorselatan_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorselatan_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var g = a + b;
  $("#suarasah_bogorselatan").val(g);
})
$("#rincian_bogortengah_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogortengah_satu").val());
  var b = parseFloat($("#rincian_bogortengah_dua").val());
  var g = a + b;
  $("#suarasah_bogortengah").val(g);
})
$("#rincian_bogortengah_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogortengah_satu").val());
  var b = parseFloat($("#rincian_bogortengah_dua").val());
  var g = a + b;
  $("#suarasah_bogortengah").val(g);
})
$("#rincian_bogortimur_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogortimur_satu").val());
  var b = parseFloat($("#rincian_bogortimur_dua").val());
  var g = a + b;
  $("#suarasah_bogortimur").val(g);
})
$("#rincian_bogortimur_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogortimur_satu").val());
  var b = parseFloat($("#rincian_bogortimur_dua").val());
  var g = a + b;
  $("#suarasah_bogortimur").val(g);
})
$("#rincian_bogorutara_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorutara_satu").val());
  var b = parseFloat($("#rincian_bogorutara_dua").val());
  var g = a + b;
  $("#suarasah_bogorutara").val(g);
})
$("#rincian_bogorutara_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorutara_satu").val());
  var b = parseFloat($("#rincian_bogorutara_dua").val());
  var g = a + b;
  $("#suarasah_bogorutara").val(g);
})
$("#rincian_tanahsareal_satu").keyup(function() {
  var a = parseFloat($("#rincian_tanahsareal_satu").val());
  var b = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b;
  $("#suarasah_tanahsareal").val(g);
})
$("#rincian_tanahsareal_dua").keyup(function() {
  var a = parseFloat($("#rincian_tanahsareal_satu").val());
  var b = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b;
  $("#suarasah_tanahsareal").val(g);
})
  </script>

  <script>
// PENJUMLAHAN RINCIAN PASANGAN CALON 2 BERDASARKAN KECAMATAN
$("#rincian_bogorbarat_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_dua").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#rincian_bogortengah_dua").val());
  var d = parseFloat($("#rincian_bogortimur_dua").val());
  var e = parseFloat($("#rincian_bogorutara_dua").val());
  var f = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_dua").val(g);
})
$("#rincian_bogorselatan_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_dua").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#rincian_bogortengah_dua").val());
  var d = parseFloat($("#rincian_bogortimur_dua").val());
  var e = parseFloat($("#rincian_bogorutara_dua").val());
  var f = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_dua").val(g);
})
$("#rincian_bogortengah_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_dua").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#rincian_bogortengah_dua").val());
  var d = parseFloat($("#rincian_bogortimur_dua").val());
  var e = parseFloat($("#rincian_bogorutara_dua").val());
  var f = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_dua").val(g);
})
$("#rincian_bogortimur_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_dua").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#rincian_bogortengah_dua").val());
  var d = parseFloat($("#rincian_bogortimur_dua").val());
  var e = parseFloat($("#rincian_bogorutara_dua").val());
  var f = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_dua").val(g);
})
$("#rincian_bogorutara_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_dua").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#rincian_bogortengah_dua").val());
  var d = parseFloat($("#rincian_bogortimur_dua").val());
  var e = parseFloat($("#rincian_bogorutara_dua").val());
  var f = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_dua").val(g);
})
$("#rincian_tanahsareal_dua").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_dua").val());
  var b = parseFloat($("#rincian_bogorselatan_dua").val());
  var c = parseFloat($("#rincian_bogortengah_dua").val());
  var d = parseFloat($("#rincian_bogortimur_dua").val());
  var e = parseFloat($("#rincian_bogorutara_dua").val());
  var f = parseFloat($("#rincian_tanahsareal_dua").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_dua").val(g);
})
  </script>

  <script>
// PENJUMLAHAN RINCIAN PASANGAN CALON 1 BERDASARKAN KECAMATAN
$("#rincian_bogorbarat_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_satu").val(g);
})
$("#rincian_bogorselatan_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_satu").val(g);
})
$("#rincian_bogortengah_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_satu").val(g);
})
$("#rincian_bogortimur_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_satu").val(g);
})
$("#rincian_bogorutara_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_satu").val(g);
})
$("#rincian_tanahsareal_satu").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat_satu").val());
  var b = parseFloat($("#rincian_bogorselatan_satu").val());
  var c = parseFloat($("#rincian_bogortengah_satu").val());
  var d = parseFloat($("#rincian_bogortimur_satu").val());
  var e = parseFloat($("#rincian_bogorutara_satu").val());
  var f = parseFloat($("#rincian_tanahsareal_satu").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian_satu").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dpktb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
$("#hakpilih_dpktb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpktb_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#hakpilih_dpktb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogorbarat_jumlah").val(c);
})
$("#hakpilih_dpktb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpktb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogorselatan_jumlah").val(c);
})
$("#hakpilih_dpktb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpktb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogortengah_jumlah").val(c);
})
$("#hakpilih_dpktb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpktb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogortimur_jumlah").val(c);
})
$("#hakpilih_dpktb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpktb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogorutara_jumlah").val(c);
})
$("#hakpilih_dpktb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpktb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_tanahsareal_jumlah").val(c);
})
$("#hakpilih_dpktb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpktb_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dpktb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI-LAKI-->
$("#hakpilih_dpktb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpktb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpktb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpktb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpktb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpktb_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dpk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
$("#hakpilih_dpk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpk_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#hakpilih_dpk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogorbarat_jumlah").val(c);
})
$("#hakpilih_dpk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogorselatan_jumlah").val(c);
})
$("#hakpilih_dpk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogortengah_jumlah").val(c);
})
$("#hakpilih_dpk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogortimur_jumlah").val(c);
})
$("#hakpilih_dpk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogorutara_jumlah").val(c);
})
$("#hakpilih_dpk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_tanahsareal_jumlah").val(c);
})
$("#hakpilih_dpk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpk_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dpk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI-LAKI
$("#hakpilih_dpk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_laki_jumlahakhir").val(g);
})
$("#hakpilih_dpk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpk_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dptb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})

$("#hakpilih_dptb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
$("#hakpilih_dptb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dptb_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#hakpilih_dptb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogorbarat_jumlah").val(c);
})
$("#hakpilih_dptb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dptb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogorselatan_jumlah").val(c);
})
$("#hakpilih_dptb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dptb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogortengah_jumlah").val(c);
})
$("#hakpilih_dptb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dptb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogortimur_jumlah").val(c);
})
$("#hakpilih_dptb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dptb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogorutara_jumlah").val(c);
})
$("#hakpilih_dptb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dptb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_tanahsareal_jumlah").val(c);
})
$("#hakpilih_dptb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dptb_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dptb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dptb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI-LAKI
$("#hakpilih_dptb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dptb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_laki_jumlahakhir").val(g);
})
$("#hakpilih_dptb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dptb_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dptb_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dptb_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dptb_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dptb_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dptb_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dpt_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
$("#hakpilih_dpt_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_dpt_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#hakpilih_dpt_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogorbarat_jumlah").val(c);
})
$("#hakpilih_dpt_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpt_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogorselatan_jumlah").val(c);
})
$("#hakpilih_dpt_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpt_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogortengah_jumlah").val(c);
})
$("#hakpilih_dpt_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpt_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogortimur_jumlah").val(c);
})
$("#hakpilih_dpt_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpt_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogorutara_jumlah").val(c);
})
$("#hakpilih_dpt_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_dpt_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_tanahsareal_jumlah").val(c);
})
$("#hakpilih_dpt_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_dpt_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_dpt_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_dpt_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_perempuan_jumlahakhir")
    .val(g);
})
$("#hakpilih_dpt_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_perempuan_jumlahakhir")
    .val(g);
})
$("#hakpilih_dpt_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_perempuan_jumlahakhir")
    .val(g);
})
$("#hakpilih_dpt_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_perempuan_jumlahakhir")
    .val(g);
})
$("#hakpilih_dpt_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_perempuan_jumlahakhir")
    .val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI - LAKI
$("#hakpilih_dpt_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_laki_jumlahakhir").val(
    g);
})
$("#hakpilih_dpt_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_laki_jumlahakhir").val(
    g);
})
$("#hakpilih_dpt_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_laki_jumlahakhir").val(
    g);
})
$("#hakpilih_dpt_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_laki_jumlahakhir").val(
    g);
})
$("#hakpilih_dpt_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_laki_jumlahakhir").val(
    g);
})
$("#hakpilih_dpt_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_dpt_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_dpt_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_dpt_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_dpt_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_dpt_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_dpt_laki_jumlahakhir").val(
    g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#hakpilih_jk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
$("#hakpilih_jk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var h = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var i = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var j = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var k = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var l = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#hakpilih_jk_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN-->
$("#hakpilih_jk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogorbarat_jumlah").val(c);
})
$("#hakpilih_jk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_jk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogorselatan_jumlah").val(c);
})
$("#hakpilih_jk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_jk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogortengah_jumlah").val(c);
})
$("#hakpilih_jk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_jk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogortimur_jumlah").val(c);
})
$("#hakpilih_jk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_jk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogorutara_jumlah").val(c);
})
$("#hakpilih_jk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#hakpilih_jk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_tanahsareal_jumlah").val(c);
})
$("#hakpilih_jk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var b = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#hakpilih_jk_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN -->
$("#hakpilih_jk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_perempuan_jumlahakhir").val(g);
})
$("#hakpilih_jk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_perempuan").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_perempuan").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_perempuan").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI-LAKI -->
$("#hakpilih_jk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_laki_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_laki_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_laki_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_laki_jumlahakhir").val(g);
})
$("#hakpilih_jk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_laki_jumlahakhir").val(g);
})
$("#hakpilih_jk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#hakpilih_jk_bogorbarat_laki").val());
  var b = parseFloat($("#hakpilih_jk_bogorselatan_laki").val());
  var c = parseFloat($("#hakpilih_jk_bogortengah_laki").val());
  var d = parseFloat($("#hakpilih_jk_bogortimur_laki").val());
  var e = parseFloat($("#hakpilih_jk_bogorutara_laki").val());
  var f = parseFloat($("#hakpilih_jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#hakpilih_jk_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#jk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
$("#jk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = parseFloat($("#jk_bogorbarat_laki").val());
  var h = parseFloat($("#jk_bogorselatan_laki").val());
  var i = parseFloat($("#jk_bogortengah_laki").val());
  var j = parseFloat($("#jk_bogortimur_laki").val());
  var k = parseFloat($("#jk_bogorutara_laki").val());
  var l = parseFloat($("#jk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#jk_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#jk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#jk_bogorbarat_jumlah").val(c);
})
$("#jk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#jk_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#jk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorselatan_laki").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#jk_bogorselatan_jumlah").val(c);
})
$("#jk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorselatan_laki").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#jk_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#jk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#jk_bogortengah_laki").val());
  var b = parseFloat($("#jk_bogortengah_perempuan").val());
  var c = a + b;
  $("#jk_bogortengah_jumlah").val(c);
})
$("#jk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogortengah_laki").val());
  var b = parseFloat($("#jk_bogortengah_perempuan").val());
  var c = a + b;
  $("#jk_bogortengah_jumlah").val(c);
})
  </script>

  <script>
$("#jk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#jk_bogortimur_laki").val());
  var b = parseFloat($("#jk_bogortimur_perempuan").val());
  var c = a + b;
  $("#jk_bogortimur_jumlah").val(c);
})
$("#jk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogortimur_laki").val());
  var b = parseFloat($("#jk_bogortimur_perempuan").val());
  var c = a + b;
  $("#jk_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#jk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorutara_laki").val());
  var b = parseFloat($("#jk_bogorutara_perempuan").val());
  var c = a + b;
  $("#jk_bogorutara_jumlah").val(c);
})
$("#jk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorutara_laki").val());
  var b = parseFloat($("#jk_bogorutara_perempuan").val());
  var c = a + b;
  $("#jk_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#jk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#jk_tanahsareal_laki").val());
  var b = parseFloat($("#jk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#jk_tanahsareal_jumlah").val(c);
})
$("#jk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#jk_tanahsareal_laki").val());
  var b = parseFloat($("#jk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#jk_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#jk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#jk_perempuan_jumlahakhir").val(g);
})
$("#jk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#jk_perempuan_jumlahakhir").val(g);
})
$("#jk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#jk_perempuan_jumlahakhir").val(g);
})
$("#jk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#jk_perempuan_jumlahakhir")
    .val(g);
})
$("#jk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#jk_perempuan_jumlahakhir").val(g);
})
$("#jk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_perempuan").val());
  var b = parseFloat($("#jk_bogorselatan_perempuan").val());
  var c = parseFloat($("#jk_bogortengah_perempuan").val());
  var d = parseFloat($("#jk_bogortimur_perempuan").val());
  var e = parseFloat($("#jk_bogorutara_perempuan").val());
  var f = parseFloat($("#jk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#jk_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI-LAKI -->
$("#jk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorselatan_laki").val());
  var c = parseFloat($("#jk_bogortengah_laki").val());
  var d = parseFloat($("#jk_bogortimur_laki").val());
  var e = parseFloat($("#jk_bogorutara_laki").val());
  var f = parseFloat($("#jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#jk_laki_jumlahakhir").val(g);
})
$("#jk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorselatan_laki").val());
  var c = parseFloat($("#jk_bogortengah_laki").val());
  var d = parseFloat($("#jk_bogortimur_laki").val());
  var e = parseFloat($("#jk_bogorutara_laki").val());
  var f = parseFloat($("#jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#jk_laki_jumlahakhir").val(g);
})
$("#jk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorselatan_laki").val());
  var c = parseFloat($("#jk_bogortengah_laki").val());
  var d = parseFloat($("#jk_bogortimur_laki").val());
  var e = parseFloat($("#jk_bogorutara_laki").val());
  var f = parseFloat($("#jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#jk_laki_jumlahakhir").val(g);
})
$("#jk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorselatan_laki").val());
  var c = parseFloat($("#jk_bogortengah_laki").val());
  var d = parseFloat($("#jk_bogortimur_laki").val());
  var e = parseFloat($("#jk_bogorutara_laki").val());
  var f = parseFloat($("#jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#jk_laki_jumlahakhir").val(g);
})
$("#jk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorselatan_laki").val());
  var c = parseFloat($("#jk_bogortengah_laki").val());
  var d = parseFloat($("#jk_bogortimur_laki").val());
  var e = parseFloat($("#jk_bogorutara_laki").val());
  var f = parseFloat($("#jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#jk_laki_jumlahakhir").val(g);
})
$("#jk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#jk_bogorbarat_laki").val());
  var b = parseFloat($("#jk_bogorselatan_laki").val());
  var c = parseFloat($("#jk_bogortengah_laki").val());
  var d = parseFloat($("#jk_bogortimur_laki").val());
  var e = parseFloat($("#jk_bogorutara_laki").val());
  var f = parseFloat($("#jk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#jk_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dpktb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
$("#dpktb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpktb_bogorbarat_laki").val());
  var h = parseFloat($("#dpktb_bogorselatan_laki").val());
  var i = parseFloat($("#dpktb_bogortengah_laki").val());
  var j = parseFloat($("#dpktb_bogortimur_laki").val());
  var k = parseFloat($("#dpktb_bogorutara_laki").val());
  var l = parseFloat($("#dpktb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpktb_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#dpktb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dpktb_bogorbarat_jumlah").val(c);
})
$("#dpktb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dpktb_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#dpktb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorselatan_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dpktb_bogorselatan_jumlah").val(c);
})
$("#dpktb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorselatan_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dpktb_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#dpktb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogortengah_laki").val());
  var b = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var c = a + b;
  $("#dpktb_bogortengah_jumlah").val(c);
})
$("#dpktb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogortengah_laki").val());
  var b = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var c = a + b;
  $("#dpktb_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#dpktb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogortimur_laki").val());
  var b = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var c = a + b;
  $("#dpktb_bogortimur_jumlah").val(c);
})
$("#dpktb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogortimur_laki").val());
  var b = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var c = a + b;
  $("#dpktb_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#dpktb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorutara_laki").val());
  var b = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var c = a + b;
  $("#dpktb_bogorutara_jumlah").val(c);
})
$("#dpktb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorutara_laki").val());
  var b = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var c = a + b;
  $("#dpktb_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#dpktb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpktb_tanahsareal_laki").val());
  var b = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dpktb_tanahsareal_jumlah").val(c);
})
$("#dpktb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_tanahsareal_laki").val());
  var b = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dpktb_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dpktb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_perempuan_jumlahakhir").val(g);
})
$("#dpktb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_perempuan_jumlahakhir").val(g);
})
$("#dpktb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_perempuan_jumlahakhir").val(g);
})
$("#dpktb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_perempuan_jumlahakhir").val(g);
})
$("#dpktb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_perempuan_jumlahakhir").val(g);
})
$("#dpktb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpktb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpktb_bogortengah_perempuan").val());
  var d = parseFloat($("#dpktb_bogortimur_perempuan").val());
  var e = parseFloat($("#dpktb_bogorutara_perempuan").val());
  var f = parseFloat($("#dpktb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI - LAKI
$("#dpktb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#dpktb_bogortengah_laki").val());
  var d = parseFloat($("#dpktb_bogortimur_laki").val());
  var e = parseFloat($("#dpktb_bogorutara_laki").val());
  var f = parseFloat($("#dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_laki_jumlahakhir").val(g);
})
$("#dpktb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#dpktb_bogortengah_laki").val());
  var d = parseFloat($("#dpktb_bogortimur_laki").val());
  var e = parseFloat($("#dpktb_bogorutara_laki").val());
  var f = parseFloat($("#dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_laki_jumlahakhir").val(g);
})
$("#dpktb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#dpktb_bogortengah_laki").val());
  var d = parseFloat($("#dpktb_bogortimur_laki").val());
  var e = parseFloat($("#dpktb_bogorutara_laki").val());
  var f = parseFloat($("#dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_laki_jumlahakhir").val(g);
})
$("#dpktb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#dpktb_bogortengah_laki").val());
  var d = parseFloat($("#dpktb_bogortimur_laki").val());
  var e = parseFloat($("#dpktb_bogorutara_laki").val());
  var f = parseFloat($("#dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_laki_jumlahakhir").val(g);
})
$("#dpktb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#dpktb_bogortengah_laki").val());
  var d = parseFloat($("#dpktb_bogortimur_laki").val());
  var e = parseFloat($("#dpktb_bogorutara_laki").val());
  var f = parseFloat($("#dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_laki_jumlahakhir").val(g);
})
$("#dpktb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpktb_bogorbarat_laki").val());
  var b = parseFloat($("#dpktb_bogorselatan_laki").val());
  var c = parseFloat($("#dpktb_bogortengah_laki").val());
  var d = parseFloat($("#dpktb_bogortimur_laki").val());
  var e = parseFloat($("#dpktb_bogorutara_laki").val());
  var f = parseFloat($("#dpktb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpktb_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dpk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
$("#dpk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpk_bogorbarat_laki").val());
  var h = parseFloat($("#dpk_bogorselatan_laki").val());
  var i = parseFloat($("#dpk_bogortengah_laki").val());
  var j = parseFloat($("#dpk_bogortimur_laki").val());
  var k = parseFloat($("#dpk_bogorutara_laki").val());
  var l = parseFloat($("#dpk_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpk_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUARA JENIS KELAMIN LAKI+PEREMPUAN
$("#dpk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dpk_bogorbarat_jumlah").val(c);
})
$("#dpk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dpk_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#dpk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorselatan_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dpk_bogorselatan_jumlah").val(c);
})
$("#dpk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorselatan_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dpk_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#dpk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogortengah_laki")
    .val());
  var b = parseFloat($("#dpk_bogortengah_perempuan")
    .val());
  var c = a + b;
  $("#dpk_bogortengah_jumlah").val(c);
})
$("#dpk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogortengah_laki").val());
  var b = parseFloat($("#dpk_bogortengah_perempuan").val());
  var c = a + b;
  $("#dpk_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#dpk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogortimur_laki").val());
  var b = parseFloat($("#dpk_bogortimur_perempuan").val());
  var c = a + b;
  $("#dpk_bogortimur_jumlah").val(c);
})
$("#dpk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogortimur_laki").val());
  var b = parseFloat($("#dpk_bogortimur_perempuan").val());
  var c = a + b;
  $("#dpk_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#dpk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorutara_laki").val());
  var b = parseFloat($("#dpk_bogorutara_perempuan").val());
  var c = a + b;
  $("#dpk_bogorutara_jumlah").val(c);
})
$("#dpk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorutara_laki").val());
  var b = parseFloat($("#dpk_bogorutara_perempuan").val());
  var c = a + b;
  $("#dpk_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#dpk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpk_tanahsareal_laki").val());
  var b = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dpk_tanahsareal_jumlah").val(c);
})
$("#dpk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_tanahsareal_laki").val());
  var b = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dpk_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dpk_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpk_perempuan_jumlahakhir").val(g);
})
$("#dpk_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpk_perempuan_jumlahakhir").val(g);
})
$("#dpk_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpk_perempuan_jumlahakhir").val(g);
})
$("#dpk_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpk_perempuan_jumlahakhir").val(g);
})
$("#dpk_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpk_perempuan_jumlahakhir").val(g);
})
$("#dpk_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpk_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpk_bogortengah_perempuan").val());
  var d = parseFloat($("#dpk_bogortimur_perempuan").val());
  var e = parseFloat($("#dpk_bogorutara_perempuan").val());
  var f = parseFloat($("#dpk_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpk_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI-LAKI
$("#dpk_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_laki").val());
  var c = parseFloat($("#dpk_bogortengah_laki").val());
  var d = parseFloat($("#dpk_bogortimur_laki").val());
  var e = parseFloat($("#dpk_bogorutara_laki").val());
  var f = parseFloat($("#dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpk_laki_jumlahakhir").val(g);
})
$("#dpk_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_laki").val());
  var c = parseFloat($("#dpk_bogortengah_laki").val());
  var d = parseFloat($("#dpk_bogortimur_laki").val());
  var e = parseFloat($("#dpk_bogorutara_laki").val());
  var f = parseFloat($("#dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpk_laki_jumlahakhir").val(g);
})
$("#dpk_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_laki").val());
  var c = parseFloat($("#dpk_bogortengah_laki").val());
  var d = parseFloat($("#dpk_bogortimur_laki").val());
  var e = parseFloat($("#dpk_bogorutara_laki").val());
  var f = parseFloat($("#dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpk_laki_jumlahakhir").val(g);
})
$("#dpk_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_laki").val());
  var c = parseFloat($("#dpk_bogortengah_laki").val());
  var d = parseFloat($("#dpk_bogortimur_laki").val());
  var e = parseFloat($("#dpk_bogorutara_laki").val());
  var f = parseFloat($("#dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpk_laki_jumlahakhir").val(g);
})
$("#dpk_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_laki").val());
  var c = parseFloat($("#dpk_bogortengah_laki").val());
  var d = parseFloat($("#dpk_bogortimur_laki").val());
  var e = parseFloat($("#dpk_bogorutara_laki").val());
  var f = parseFloat($("#dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpk_laki_jumlahakhir").val(g);
})
$("#dpk_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpk_bogorbarat_laki").val());
  var b = parseFloat($("#dpk_bogorselatan_laki").val());
  var c = parseFloat($("#dpk_bogortengah_laki").val());
  var d = parseFloat($("#dpk_bogortimur_laki").val());
  var e = parseFloat($("#dpk_bogorutara_laki").val());
  var f = parseFloat($("#dpk_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpk_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dptb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan ").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
$("#dptb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = parseFloat($("#dptb_bogorbarat_laki").val());
  var h = parseFloat($("#dptb_bogorselatan_laki").val());
  var i = parseFloat($("#dptb_bogortengah_laki").val());
  var j = parseFloat($("#dptb_bogortimur_laki").val());
  var k = parseFloat($("#dptb_bogorutara_laki").val());
  var l = parseFloat($("#dptb_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dptb_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#dptb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dptb_bogorbarat_jumlah").val(c);
})
$("#dptb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dptb_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#dptb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorselatan_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dptb_bogorselatan_jumlah").val(c);
})
$("#dptb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorselatan_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dptb_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#dptb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogortengah_laki").val());
  var b = parseFloat($("#dptb_bogortengah_perempuan").val());
  var c = a + b;
  $("#dptb_bogortengah_jumlah").val(c);
})
$("#dptb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogortengah_laki").val());
  var b = parseFloat($("#dptb_bogortengah_perempuan").val());
  var c = a + b;
  $("#dptb_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#dptb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogortimur_laki").val());
  var b = parseFloat($("#dptb_bogortimur_perempuan").val());
  var c = a + b;
  $("#dptb_bogortimur_jumlah").val(c);
})
$("#dptb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogortimur_laki").val());
  var b = parseFloat($("#dptb_bogortimur_perempuan").val());
  var c = a + b;
  $("#dptb_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#dptb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorutara_laki").val());
  var b = parseFloat($("#dptb_bogorutara_perempuan").val());
  var c = a + b;
  $("#dptb_bogorutara_jumlah").val(c);
})
$("#dptb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorutara_laki").val());
  var b = parseFloat($("#dptb_bogorutara_perempuan").val());
  var c = a + b;
  $("#dptb_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#dptb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dptb_tanahsareal_laki").val());
  var b = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dptb_tanahsareal_jumlah").val(c);
})
$("#dptb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_tanahsareal_laki").val());
  var b = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dptb_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dptb_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dptb_perempuan_jumlahakhir").val(g);
})
$("#dptb_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dptb_perempuan_jumlahakhir").val(g);
})
$("#dptb_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dptb_perempuan_jumlahakhir").val(g);
})
$("#dptb_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dptb_perempuan_jumlahakhir").val(g);
})
$("#dptb_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dptb_perempuan_jumlahakhir").val(g);
})
$("#dptb_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_perempuan").val());
  var b = parseFloat($("#dptb_bogorselatan_perempuan").val());
  var c = parseFloat($("#dptb_bogortengah_perempuan").val());
  var d = parseFloat($("#dptb_bogortimur_perempuan").val());
  var e = parseFloat($("#dptb_bogorutara_perempuan").val());
  var f = parseFloat($("#dptb_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dptb_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI-LAKI
$("#dptb_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_laki").val());
  var c = parseFloat($("#dptb_bogortengah_laki").val());
  var d = parseFloat($("#dptb_bogortimur_laki").val());
  var e = parseFloat($("#dptb_bogorutara_laki").val());
  var f = parseFloat($("#dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dptb_laki_jumlahakhir").val(g);
})
$("#dptb_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_laki").val());
  var c = parseFloat($("#dptb_bogortengah_laki").val());
  var d = parseFloat($("#dptb_bogortimur_laki").val());
  var e = parseFloat($("#dptb_bogorutara_laki").val());
  var f = parseFloat($("#dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dptb_laki_jumlahakhir").val(g);
})
$("#dptb_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_laki").val());
  var c = parseFloat($("#dptb_bogortengah_laki").val());
  var d = parseFloat($("#dptb_bogortimur_laki").val());
  var e = parseFloat($("#dptb_bogorutara_laki").val());
  var f = parseFloat($("#dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dptb_laki_jumlahakhir").val(g);
})
$("#dptb_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_laki").val());
  var c = parseFloat($("#dptb_bogortengah_laki").val());
  var d = parseFloat($("#dptb_bogortimur_laki").val());
  var e = parseFloat($("#dptb_bogorutara_laki").val());
  var f = parseFloat($("#dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dptb_laki_jumlahakhir").val(g);
})
$("#dptb_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_laki").val());
  var c = parseFloat($("#dptb_bogortengah_laki").val());
  var d = parseFloat($("#dptb_bogortimur_laki").val());
  var e = parseFloat($("#dptb_bogorutara_laki").val());
  var f = parseFloat($("#dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dptb_laki_jumlahakhir").val(g);
})
$("#dptb_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dptb_bogorbarat_laki").val());
  var b = parseFloat($("#dptb_bogorselatan_laki").val());
  var c = parseFloat($("#dptb_bogortengah_laki").val());
  var d = parseFloat($("#dptb_bogortimur_laki").val());
  var e = parseFloat($("#dptb_bogorutara_laki").val());
  var f = parseFloat($("#dptb_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dptb_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dpt_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
$("#dpt_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = parseFloat($("#dpt_bogorbarat_laki").val());
  var h = parseFloat($("#dpt_bogorselatan_laki").val());
  var i = parseFloat($("#dpt_bogortengah_laki").val());
  var j = parseFloat($("#dpt_bogortimur_laki").val());
  var k = parseFloat($("#dpt_bogorutara_laki").val());
  var l = parseFloat($("#dpt_tanahsareal_laki").val());
  var m = a + b + c + d + e + f + g + h + i + j + k + l;
  $("#dpt_jumlah_akhir").val(m);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEMUNGUTAN SUAARA JENIS KELAMIN LAKI+PEREMPUAN
$("#dpt_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dpt_bogorbarat_jumlah").val(c);
})
$("#dpt_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var c = a + b;
  $("#dpt_bogorbarat_jumlah").val(c);
})
  </script>
  <script>
$("#dpt_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorselatan_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dpt_bogorselatan_jumlah").val(c);
})
$("#dpt_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorselatan_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = a + b;
  $("#dpt_bogorselatan_jumlah").val(c);
})
  </script>
  <script>
$("#dpt_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogortengah_laki").val());
  var b = parseFloat($("#dpt_bogortengah_perempuan").val());
  var c = a + b;
  $("#dpt_bogortengah_jumlah").val(c);
})
$("#dpt_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogortengah_laki").val());
  var b = parseFloat($("#dpt_bogortengah_perempuan").val());
  var c = a + b;
  $("#dpt_bogortengah_jumlah").val(c);
})
  </script>
  <script>
$("#dpt_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogortimur_laki").val());
  var b = parseFloat($("#dpt_bogortimur_perempuan").val());
  var c = a + b;
  $("#dpt_bogortimur_jumlah").val(c);
})
$("#dpt_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogortimur_laki").val());
  var b = parseFloat($("#dpt_bogortimur_perempuan").val());
  var c = a + b;
  $("#dpt_bogortimur_jumlah").val(c);
})
  </script>
  <script>
$("#dpt_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorutara_laki").val());
  var b = parseFloat($("#dpt_bogorutara_perempuan").val());
  var c = a + b;
  $("#dpt_bogorutara_jumlah").val(c);
})
$("#dpt_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorutara_laki").val());
  var b = parseFloat($("#dpt_bogorutara_perempuan").val());
  var c = a + b;
  $("#dpt_bogorutara_jumlah").val(c);
})
  </script>
  <script>
$("#dpt_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpt_tanahsareal_laki").val());
  var b = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dpt_tanahsareal_jumlah").val(c);
})
$("#dpt_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_tanahsareal_laki").val());
  var b = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var c = a + b;
  $("#dpt_tanahsareal_jumlah").val(c);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH PEREMPUAN
$("#dpt_bogorbarat_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpt_perempuan_jumlahakhir").val(g);
})
$("#dpt_bogorselatan_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpt_perempuan_jumlahakhir").val(g);
})
$("#dpt_bogortengah_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpt_perempuan_jumlahakhir").val(g);
})
$("#dpt_bogortimur_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpt_perempuan_jumlahakhir").val(g);
})
$("#dpt_bogorutara_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpt_perempuan_jumlahakhir").val(g);
})
$("#dpt_tanahsareal_perempuan").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_perempuan").val());
  var b = parseFloat($("#dpt_bogorselatan_perempuan").val());
  var c = parseFloat($("#dpt_bogortengah_perempuan").val());
  var d = parseFloat($("#dpt_bogortimur_perempuan").val());
  var e = parseFloat($("#dpt_bogorutara_perempuan").val());
  var f = parseFloat($("#dpt_tanahsareal_perempuan").val());
  var g = a + b + c + d + e + f;
  $("#dpt_perempuan_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN DATA PEMILIH LAKI - LAKI
$("#dpt_bogorbarat_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_laki").val());
  var c = parseFloat($("#dpt_bogortengah_laki").val());
  var d = parseFloat($("#dpt_bogortimur_laki").val());
  var e = parseFloat($("#dpt_bogorutara_laki").val());
  var f = parseFloat($("#dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpt_laki_jumlahakhir").val(g);
})
$("#dpt_bogorselatan_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_laki").val());
  var c = parseFloat($("#dpt_bogortengah_laki").val());
  var d = parseFloat($("#dpt_bogortimur_laki").val());
  var e = parseFloat($("#dpt_bogorutara_laki").val());
  var f = parseFloat($("#dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpt_laki_jumlahakhir").val(g);
})
$("#dpt_bogortengah_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_laki").val());
  var c = parseFloat($("#dpt_bogortengah_laki").val());
  var d = parseFloat($("#dpt_bogortimur_laki").val());
  var e = parseFloat($("#dpt_bogorutara_laki").val());
  var f = parseFloat($("#dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpt_laki_jumlahakhir").val(g);
})
$("#dpt_bogortimur_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_laki").val());
  var c = parseFloat($("#dpt_bogortengah_laki").val());
  var d = parseFloat($("#dpt_bogortimur_laki").val());
  var e = parseFloat($("#dpt_bogorutara_laki").val());
  var f = parseFloat($("#dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpt_laki_jumlahakhir").val(g);
})
$("#dpt_bogorutara_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_laki").val());
  var c = parseFloat($("#dpt_bogortengah_laki").val());
  var d = parseFloat($("#dpt_bogortimur_laki").val());
  var e = parseFloat($("#dpt_bogorutara_laki").val());
  var f = parseFloat($("#dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpt_laki_jumlahakhir").val(g);
})
$("#dpt_tanahsareal_laki").keyup(function() {
  var a = parseFloat($("#dpt_bogorbarat_laki").val());
  var b = parseFloat($("#dpt_bogorselatan_laki").val());
  var c = parseFloat($("#dpt_bogortengah_laki").val());
  var d = parseFloat($("#dpt_bogortimur_laki").val());
  var e = parseFloat($("#dpt_bogorutara_laki").val());
  var f = parseFloat($("#dpt_tanahsareal_laki").val());
  var g = a + b + c + d + e + f;
  $("#dpt_laki_jumlahakhir").val(g);
})
  </script>

  <script>
// PENJUMLAHAN PEMILIH TPS JENIS KELAMIN LAKI+PEREMPUAN
$("#jumlah_pemilih_laki").keyup(function() {
  var a = parseFloat($("#jumlah_pemilih_laki").val());
  var b = parseFloat($("#jumlah_pemilih_perempuan").val());
  var c = a + b;
  $("#jumlah_pemilih").val(c);
})
$("#jumlah_pemilih_perempuan").keyup(function() {
  var a = parseFloat($("#jumlah_pemilih_laki").val());
  var b = parseFloat($("#jumlah_pemilih_perempuan").val());
  var c = a + b;
  $("#jumlah_pemilih").val(c);
})
  </script>

  <script>
// PENJUMLAHAN SUARA TDK SAH BERDASARKAN KECAMATAN
$("#suaratdksah_bogorbarat").keyup(function() {
  var a = parseFloat($("#suaratdksah_bogorbarat").val());
  var b = parseFloat($("#suaratdksah_bogorselatan").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = parseFloat($("#suaratdksah_bogortimur").val());
  var e = parseFloat($("#suaratdksah_bogorutara").val());
  var f = parseFloat($("#suaratdksah_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_suaratdksah").val(g);
})
$("#suaratdksah_bogorselatan").keyup(function() {
  var a = parseFloat($("#suaratdksah_bogorbarat").val());
  var b = parseFloat($("#suaratdksah_bogorselatan").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = parseFloat($("#suaratdksah_bogortimur").val());
  var e = parseFloat($("#suaratdksah_bogorutara").val());
  var f = parseFloat($("#suaratdksah_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_suaratdksah").val(g);
})
$("#suaratdksah_bogortengah").keyup(function() {
  var a = parseFloat($("#suaratdksah_bogorbarat").val());
  var b = parseFloat($("#suaratdksah_bogorselatan").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = parseFloat($("#suaratdksah_bogortimur").val());
  var e = parseFloat($("#suaratdksah_bogorutara").val());
  var f = parseFloat($("#suaratdksah_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_suaratdksah").val(g);
})
$("#suaratdksah_bogortimur").keyup(function() {
  var a = parseFloat($("#suaratdksah_bogorbarat").val());
  var b = parseFloat($("#suaratdksah_bogorselatan").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = parseFloat($("#suaratdksah_bogortimur").val());
  var e = parseFloat($("#suaratdksah_bogorutara").val());
  var f = parseFloat($("#suaratdksah__anahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_suaratdksah").val(g);
})
$("#suaratdksah_bogorutara").keyup(function() {
  var a = parseFloat($("#suaratdksah_bogorbarat").val());
  var b = parseFloat($("#suaratdksah_bogorselatan").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = parseFloat($("#suaratdksah_bogortimur").val());
  var e = parseFloat($("#suaratdksah_bogorutara").val());
  var f = parseFloat($("#suaratdksah_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_suaratdksah").val(g);
})
$("#suaratdksah_tanahsareal").keyup(function() {
  var a = parseFloat($("#suaratdksah_bogorbarat").val());
  var b = parseFloat($("#suaratdksah_bogorselatan").val());
  var c = parseFloat($("#suaratdksah_bogortengah").val());
  var d = parseFloat($("#suaratdksah_bogortimur").val());
  var e = parseFloat($("#suaratdksah_bogorutara").val());
  var f = parseFloat($("#suaratdksah_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_suaratdksah").val(g);
})
  </script>

  <script>
/// PENJUMLAHAN RINCIAN BERDASARKAN KECAMATAN
$("#rincian_bogorbarat").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat").val());
  var b = parseFloat($("#rincian_bogorselatan").val());
  var c = parseFloat($("#rincian_bogortengah").val());
  var d = parseFloat($("#rincian_bogortimur").val());
  var e = parseFloat($("#rincian_bogorutara").val());
  var f = parseFloat($("#rincian_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian").val(g);
})
$("#rincian_bogorselatan").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat").val());
  var b = parseFloat($("#rincian_bogorselatan").val());
  var c = parseFloat($("#rincian_bogortengah").val());
  var d = parseFloat($("#rincian_bogortimur").val());
  var e = parseFloat($("#rincian_bogorutara").val());
  var f = parseFloat($("#rincian_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian").val(g);
})
$("#rincian_bogortengah").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat").val());
  var b = parseFloat($("#rincian_bogorselatan").val());
  var c = parseFloat($("#rincian_bogortengah").val());
  var d = parseFloat($("#rincian_bogortimur").val());
  var e = parseFloat($("#rincian_bogorutara").val());
  var f = parseFloat($("#rincian_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian").val(g);
})
$("#rincian_bogortimur").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat").val());
  var b = parseFloat($("#rincian_bogorselatan").val());
  var c = parseFloat($("#rincian_bogortengah").val());
  var d = parseFloat($("#rincian_bogortimur").val());
  var e = parseFloat($("#rincian_bogorutara").val());
  var f = parseFloat($("#rincian__anahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian").val(g);
})
$("#rincian_bogorutara").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat").val());
  var b = parseFloat($("#rincian_bogorselatan").val());
  var c = parseFloat($("#rincian_bogortengah").val());
  var d = parseFloat($("#rincian_bogortimur").val());
  var e = parseFloat($("#rincian_bogorutara").val());
  var f = parseFloat($("#rincian_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian").val(g);
})
$("#rincian_tanahsareal").keyup(function() {
  var a = parseFloat($("#rincian_bogorbarat").val());
  var b = parseFloat($("#rincian_bogorselatan").val());
  var c = parseFloat($("#rincian_bogortengah").val());
  var d = parseFloat($("#rincian_bogortimur").val());
  var e = parseFloat($("#rincian_bogorutara").val());
  var f = parseFloat($("#rincian_tanahsareal").val());
  var g = a + b + c + d + e + f;
  $("#jumlahakhir_rincian").val(g);
})
  </script>
  <script>
const selectBtn = document.querySelector(".select-btn"),
  items = document.querySelectorAll(".item");
selectBtn.addEventListener("click", () => {
  selectBtn.classList.toggle("open");
});
items.forEach(item => {
  item.addEventListener("click", () => {
    item.classList.toggle("checked");
    let checked = document.querySelectorAll(".checked"),
      btnText = document.querySelector(".btn-text");
    if (checked && checked.length > 0) {
      btnText.innerText = `${checked.length} Partai Terpilih`;
    } else {
      btnText.innerText = "Pilih Pendukung Partai";
    }
  });
})
  </script>

  <script>
// CKEDITOR | TEXTAREA
CKEDITOR.replace('keterangan_nomorurut');
CKEDITOR.replace('deskripsi');
CKEDITOR.replace('visi');
CKEDITOR.replace('misi');
CKEDITOR.replace('visi2');
CKEDITOR.replace('misi2');
CKEDITOR.replace('keterangan_tps');
CKEDITOR.replace('keterangan');
  </script>
  <script>
$(document).ready(function() {
  $('#example2').DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});
  </script>