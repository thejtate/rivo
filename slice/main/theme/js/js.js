(function ($) {

  if (typeof Drupal != 'undefined') {
    Drupal.behaviors.projectName = {
      attach: function (context, settings) {
        init();
      },

      completedCallback: function () {
        // Do nothing. But it's here in case other modules/themes want to override it.
      }
    }
  }

  $(function () {
    if (typeof Drupal == 'undefined') {
      init();
    }
  });

  $(window).load(function() {

  });

  function init() {

  }

  window.removeMarketoDefaultStyles = function(form) {
    form.removeAttr('style');
    form.find('.mktoFormRow').addClass('form-item');
    form.find('.mktoButtonRow').removeClass('mktoButtonRow').addClass('form-actions');
    form.find('button').addClass('form-submit');
    form.find('input, textarea, label, .mktoFormCol, .mktoButtonWrap, .mktoRequired').removeAttr('style');
    form.find('.mktoOffset, .mktoGutter, .mktoClear, .mktoLabel').remove();
    form.removeClass('mktoForm').addClass('mktoFormWithoutStyles');
  };

  window.changeMarketoDefaultBtnText = function(form, text) {
    form.find('button').text(text);
  };

  window.addTextBeforeBtn = function(form, text) {
    form.find('button').before('<div class="text-before-btn">' + text + '</div>')
  };

  window.successMessage = function(form, text) {
    form.hide();
    form.after('<div class="success-message">' + text + '</div>')
  };

})(jQuery);