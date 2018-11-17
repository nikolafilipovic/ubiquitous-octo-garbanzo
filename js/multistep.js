var multistep = (function($) {
  function init() {
    var stage = $(`<div class='stage'></div>`);
    stage.css('display', 'flex');
    $('.multi-step .step').first().addClass('active');
    var steps = $('.multi-step .step');
    steps.first().appendTo(stage);
    $('.multi-step').append(stage);

    addDomListeners($('.multi-step'), stage, steps.first().width());
  }

  function addDomListeners(wrap, stage, width) {
    var toggler = wrap.find('.step-toggler');

    toggler.click(function() {
      var nextSlide = wrap.find($(this).data('triger'));
      nextSlide.appendTo(stage);
      stage.width(2*width);
      nextSlide.addClass('active');
      stage.addClass('transit');
      stage.css('transform', `translateX(${-width}px)`);

      setTimeout(function() {
        stage.removeClass('transit');
        stage.css('transform', 'translateX(0)');
        stage.width(width);
        var t = stage.find('.step').first();
        t.removeClass('active');
        t.appendTo(wrap);
      }, 300);
    });
  }

  return {
    init: init
  }
})(jQuery);