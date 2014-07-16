define(function() {
  return (function() {require.config({
    baseUrl: 'public/js',
    paths: {
      'jquery': '//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min',
      'bootstrap': '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min'
    },
    shim: {
    }
  });})();
});