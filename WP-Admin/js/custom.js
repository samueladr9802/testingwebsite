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
          $('#provinsi').append($("<option>").attr("value", provinsi.id).html(provinsi.nama));
        });
      });
    })

    $("#provinsi").change(function() {
      clear();
      var id = this.value;
      var api = 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + id;
      $.getJSON(api, function(data) {
        $(data.kota_kabupaten).each(function(i, kota) {
          $('#kota').append($("<option>").attr("value", kota.id).html(kota.nama));
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
      var id = this.value;
      var api = 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + id;
      $.getJSON(api, function(data) {
        $(data.kecamatan).each(function(i, kecamatan) {
          $('#kecamatan').append($("<option>").attr("value", kecamatan.id).html(kecamatan.nama));
        });
      });
    })

    $("#kecamatan").change(function() {
      $('#kelurahan').empty();
      $('#kelurahan').append($("<option>").attr({
        disabled: true,
        selected: true
      }).html("Kelurahan"));
      var id = this.value;
      var api = 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + id;
      $.getJSON(api, function(data) {
        $(data.kelurahan).each(function(i, kelurahan) {
          $('#kelurahan').append($("<option>").attr("value", kelurahan.id).html(kelurahan.nama));
        });
      });
    })