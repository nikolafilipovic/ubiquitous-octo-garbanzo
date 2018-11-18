var multistep = (function($) {
  var animating = false;
  var slideHistory = [];
  var skipHistory = false;

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
    var toggler = $('.step-toggler');
    var width = item.width();

    //item.css('margin-right', '15px');
    toggler.click(function(e) {
      if(animating) return;

      e.preventDefault();
      animating = true;
      var nextSlide;
      var tar = $(this).data('triger');
      if(tar == "back") {
        if(slideHistory.length == 0) {
          animating = false;
          return;
        }
        nextSlide = slideHistory.pop();
        skipHistory = true;
      }
      else {
        nextSlide = $(tar);
      }

      nextSlide.appendTo(stage);
      stage.width(2*width - 15);
      nextSlide.addClass('active');
      stage.addClass('transit');
      stage.css('transform', `translateX(${-width}px)`);
  
      var targetHeight = nextSlide.height();
      var startH = item.height();
      stage.height(startH);
      
      if(!skipHistory) {
        slideHistory.push(item);
      }
      skipHistory = false;

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
        } else {
          stage.css('height', 'auto');
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
        if(item.data('on-enter')) {
          var fn = item.data('on-enter');
          window[fn].call(null, stage);
        }
      }, 300);
    });
  }

  return {
    init: init
  }
})(jQuery);

(function($) {
  function ViewportFlexSlider(container, opts) {
    var self = this;

    if(container.data('slider-added')) {
      return;
    }

    container.data('slider-added', true);
    this.optimalItems(container);

    $(window).on('resize', function() {
      self.optimalItems(container);
    })

    container.find('.right-control-arrow').click(function() {
      self.activeSlide.removeClass('active');
      self.slideRight();
      self.activeSlide = self.slides.eq(self.index + 1);
      self.activeSlide.addClass('active');
      if(opts['onChange']) {
        opts.onChange(self.activeSlide.data('obj'));
      }
    });
    
    container.find('.left-control-arrow').click(function() {
      self.activeSlide.removeClass('active');
      self.slideLeft();
      self.activeSlide = self.slides.eq(self.index + 1);
      self.activeSlide.addClass('active');
      if(opts['onChange']) {
        opts.onChange(self.activeSlide.data('obj'));
      }
    });
  }

  ViewportFlexSlider.prototype.optimalItems = function(container) {
    var winWid = $(window).width();
    if(winWid > 1000) {
      this.recalculate(container, 10);
    }
    else if(winWid > 800) {
      this.recalculate(container, 6);
    }
    else if(winWid > 600) {
      this.recalculate(container, 5);
    } else {
      this.recalculate(container, 3);
    }
  }

  ViewportFlexSlider.prototype.recalculate = function(container, numItems) {
    var self = this;
    this.carousel = container.find('.dated-carousel');
    this.viewPort = container.find('.dated-carousel').width();
    this.slides = this.carousel.find('.date-slide');
    this.numItems = Math.min(numItems, this.slides.length);
    this.slide = this.slides.first();
    this.stage = this.carousel.find('.dated-stage');
    this.leftOver = this.viewPort - this.numItems * this.slide.width();
    this.space = this.leftOver / (numItems + 1);
  
    var totalSpaceTaken = (this.space + this.slide.width()) * this.numItems;
    var isAllTaken = this.viewPort - totalSpaceTaken > this.slide.width() + this.space;

    if(isAllTaken) {
      this.stage.addClass('center');
    } else {
      this.stage.removeClass('center');
    }

    this.index = 0;
    this.activeSlide = this.slides.eq(this.index + 1);
    this.reset();

    this.carousel.find('.date-slide').each(function() {
      $(this).css('marginLeft', `${self.space}px`);
    });
    
  }

  ViewportFlexSlider.prototype.reset = function() {
    this.slides.each(function() {
      $(this).removeClass('active');
    });
    this.activeSlide.addClass('active');
    var offset = this.index * this.slide.width() + this.index * this.space;
    this.stage.css({
      transform: `translateX(${-1 *offset}px)`
    });
  }

  ViewportFlexSlider.prototype.slideRight = function() {
    this.index++;
    if(this.index > this.slides.length - 2) {
      this.index = -1;
    }
    var offset = this.index * this.slide.width() + this.index * this.space;
    this.stage.css({
      transform: `translateX(${-1 *offset}px)`
    });
  }

  ViewportFlexSlider.prototype.slideLeft = function() {
    this.index--;
    if(this.index < -1) {
      this.index = this.slides.length - 2;
    }
    var offset = this.index * this.slide.width() + this.index * this.space
    this.stage.css({
      transform: `translateX(-${offset}px)`
    });
  }

  $.fn.multislider = function(opts) {
    new ViewportFlexSlider(this, opts);
  }
})(jQuery);