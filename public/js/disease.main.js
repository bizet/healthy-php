require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require([
        'view/disease.list.view',
        'view/disease.dialog.view'
      ], function(_Disease_List_View, _Disease_Dialog_View) {
          $('nav li').removeClass('active');
          $('a[href="disease.php"]').parent().addClass('active');
          _Disease_List_View.init({
            elem: $('#list-disease'),
          });
          _Disease_Dialog_View.init({
            elem: $('#modal-add-disease')
          });
      });
    });
  });
});