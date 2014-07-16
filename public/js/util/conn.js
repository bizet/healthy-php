define(function() {
  return {
    send_to_server: function(data, anddothis, object) {
      $.ajax({
        url: 'control/route.php',
        type: 'POST',
        dataType: 'json',
        data: data,
      })
      .done(function(r) {
        anddothis.call(object, r);
      });
    }
  }
});
