$(function() {
      var api = 'http://localhost/tugasakhirsamuel/dashboard_user/php/CRUD.php?aksi=delete&data=1';

    $("#deletebtn").click(function(){
        $.getJSON(api, function (data) {
            $(data).each(function(i, d) {
                alert('data :'+d.Ben);
            });
        })
    });

    
    
})