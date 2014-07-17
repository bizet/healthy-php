
require(['requirejs.config'] , function() {
  require(['jquery', 'bootstrap'], function($) {
    $(function(){
      require(['view/reg.view', 
        'view/login.view'
        ], function(_Reg_View, _Login_View) {
        _Reg_View.init({elem: $('#reg')});
        _Login_View.init({elem: $('#login')});

      });
    });
  });
});