var multistep = (function($) {
  var animating = false;

  function init() {
    var stage = $(`<div class='stage'></div>`);
    $('.multi-step .step').first().addClass('active');
    var steps = $('.multi-step .step');
    steps.first().appendTo(stage);
    $('.multi-step').append(stage);

    addDomListeners($('.multi-step'), stage, steps.first());
  }
// TODO: fix margin-right pass as an option!
  function addDomListeners(wrap, stage, item) {
    var toggler = wrap.find('.step-toggler');
    var width = item.width();

    //item.css('margin-right', '15px');
    toggler.click(function() {
      if(animating) return;

      animating = true;
      var nextSlide = wrap.find($(this).data('triger'));
      nextSlide.appendTo(stage);
      stage.width(2*width - 15);
      nextSlide.addClass('active');
      stage.addClass('transit');
      stage.css('transform', `translateX(${-width}px)`);
  
      var targetHeight = nextSlide.height();
      var startH = item.height();
      stage.height(startH);

      var time = {
        start: performance.now(),
        total: 300
      }
      
      function step(now) {
        time.elapsed = now - time.start;
        var prog = time.elapsed / time.total;
        var h = startH + (targetHeight - startH) * prog;
        if(h < targetHeight) {
          h = targetHeight;
        }
        stage.height(h);
        if(prog < 1) {
          requestAnimationFrame(step);
        }
      }
      requestAnimationFrame(step);

      setTimeout(function() {
        stage.removeClass('transit');
        stage.css('transform', 'translateX(0)');
        var t = stage.find('.step').first();
        t.removeClass('active');
        t.appendTo(wrap);
        stage.css('width', 'auto');
        item = stage.find('.step').first();
        animating = false;
      }, 300);
    });
  }

  return {
    init: init
  }
})(jQuery);

var multislider = (function($) {
  function ViewportFlexSlider(container) {
    this.carousel = container.find('.dated-carousel');
    
    this.viewPort = container.find('.dated-carousel').width();
    this.slide = container.find('.date-slide').first();
    this.carousel.find('.dated-stage').width(this.carousel.find('.date-slide').length * this.slide.width() + 350);
    this.leftOver = this.viewPort - 3 * this.slide.width();
    var space = (this.leftOver / 4);

    this.carousel.find('.date-slide').each(function() {
      $(this).css('marginLeft', `${space}px`);
    })
  }

  var sliders = [];

  function init() {
    $('.data-carousel-wrap').each(function() {
      sliders.push(new ViewportFlexSlider($(this)));
    })
  }

  return {
    init: init
  }
})(jQuery);