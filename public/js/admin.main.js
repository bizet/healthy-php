
require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require(['view/admin.search.view'], 
        function(_Search_View) {
          _Search_View.init({elem: $('#search-user')});
      });
    });
  });
});
