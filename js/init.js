(function($, undefined){
  $(function(){
    var r = Raphael('fmap', 730, 384),
      // создаём холст, на котором рисуются наши контуры
      attributes = {
        fill: 'rgba(252, 240, 116, 0)',
        stroke: '#3899E6',
        'stroke-width': 1,
        'stroke-linejoin': 'round'
      },
      // создаём объект attributes с параметрами
      arr = new Array();
        for (var country in paths) {
          var obj = r.path(paths[country].path);
          obj.attr(attributes);
        }
      // в цикле обходим все контуры (контуры, которые включены в объект paths),
      // показываем их и устанавливаем для них параметры
  });
})(jQuery);