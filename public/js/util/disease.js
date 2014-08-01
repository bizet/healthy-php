
define(function() {
  return {
    disease_to_str: function(list){
      var str_list = [];
      for (var i = list.length - 1; i >= 0; i--) {
        var item_str = list[i].id + ',' + (list[i].operate_date || '');
        str_list.push(item_str);
      };
      return str_list.join('|');
    },
    str_to_disease: function(str) {
      str_list = str.split('|');
      var disease = [];
      for (var i = str_list.length - 1; i >= 0; i--) {
        var item = {};
        var it = str_list[i].split(',');
        item.id = it[0];
        item.operate_date = it[1];
        disease.push(item);
      };
      return disease;
    }
  };
});
