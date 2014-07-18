define(function() {
  return (function() {require.config({
    baseUrl: 'public/js',
    paths: {
      'jquery': '//apps.bdimg.com/libs/jquery/1.9.1/jquery.min',
      'bootstrap': '//apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min',
      'datatables': 'lib/jquery/jquery.datatables.min'
    },
    shim: {
      'bootstrap': ['jquery'],
      'datatable': ['jquery']
    }
  });})();
});