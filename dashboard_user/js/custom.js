function clear() {
      $('#kota').empty();
      $('#kota').append($("<option>").attr({
        disabled: true,
        selected: true
      }).html("Kota"));

      $('#kecamatan').empty();
      $('#kecamatan').append($("<option>").attr({
        disabled: true,
        selected: true
      }).html("Kecamatan"));

      $('#kelurahan').empty();
      $('#kelurahan').append($("<option>").attr({
        disabled: true,
        selected: true
      }).html("Kelurahan"));
    }

    $(function() {
      var api = 'https://dev.farizdotid.com/api/daerahindonesia/provinsi';
      $.getJSON(api, function(data) {
        $(data.provinsi).each(function(i, provinsi) {
          $value = provinsi.id
          $('#provinsi').append($("<option>").attr("value", provinsi.nama+'-'+provinsi.id).html(provinsi.nama));
        });
      });
    })

    $("#provinsi").change(function() {
      clear();
      var idS = this.value.split("-");
      console.log(idS);
      var api = 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + idS[1];
      $.getJSON(api, function(data) {
        $(data.kota_kabupaten).each(function(i, kota) {
          $('#kota').append($("<option>").attr("value", kota.nama+'-'+kota.id).html(kota.nama));
        });
      });
    })

    $("#kota").change(function() {
      $('#kecamatan').empty();
      $('#kecamatan').append($("<option>").attr({
        disabled: true,
        selected: true
      }).html("Kecamatan"));

      $('#kelurahan').empty();
      $('#kelurahan').append($("<option>").attr({
        disabled: true,
        selected: true
      }).html("Kelurahan"));
      var id = this.value.split('-');
      var api = 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + id[1];
      $.getJSON(api, function(data) {
        $(data.kecamatan).each(function(i, kecamatan) {
          $('#kecamatan').append($("<option>").attr("value",kecamatan.nama+'-'+kecamatan.id).html(kecamatan.nama));
        });
      });
    })

    $("#kecamatan").change(function() {
      $('#kelurahan').empty();
      $('#kelurahan').append($("<option>").attr({
        disabled: true,
        selected: true
      }).html("Kelurahan"));
      var id = this.value.split('-');
      var api = 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + id[1];
      $.getJSON(api, function(data) {
        $(data.kelurahan).each(function(i, kelurahan) {
          $('#kelurahan').append($("<option>").attr("value",kelurahan.nama+'-'+kelurahan.id).html(kelurahan.nama));
        });
      });
    })