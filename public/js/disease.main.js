require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require([
        'view/disease.list.view'
      ], function(_Disease_List_View) {
          _Disease_List_View.init({
            elem: $('#list-disease'),
          });
      });
    });
  });
});