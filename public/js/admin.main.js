
require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require(['view/admin.search.view'], 
        function(_Search_View) {
          $('nav li').removeClass('active');
          $('a[href="admin.php"]').parent().addClass('active');
          _Search_View.init({elem: $('#search-user')});
      });
    });
  });
});
