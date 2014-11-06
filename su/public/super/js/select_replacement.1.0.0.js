(function ($) {
    $.fn.replaceSelects = function (options) {
        var defaults = {
            cssClass: 'optionbox',
            zIndex: 2,
            hideOnBodyClick: true,
            replaceForIphone: false,
            onElementSelect: function (element) {
                return true;
            },
            hideListEffect: function (element) {
                $(element).hide('fast');
            },
            toggleListEffect: function (element) {
                $(element).toggle('fast');
                return true;
            }
        };
        var options = jQuery.extend(defaults, options);
        var is_select_opened = null;

        return this.each(function () {
            if (!options.replaceForIphone && (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i))) {
                return false;
            }
            var opts = new Array;
            var selected = new Object();
            var width = $(this).width();
            var id = $(this).attr('id');
            if (parseInt($(this).css('width')) > 0) {
                width = parseInt($(this).css('width'));
            }
            var hasFloat = $(this).css('float');
            width = 450;

            $(this).children().each(function () {

                var o = new Object();
                o.value = $(this).attr('value');
                o.html = $(this).html();
                o.selected = $(this).attr('selected');
                o.disabled = $(this).attr('disabled');

                if (o.selected) {
                    selected = o;
                }
                opts.push(o);
            });
            $(this).hide(); //hide me
            html = '';
            _title = '';
            for (x in opts) {
                html += '<a href="#' + escape(opts[x].html) + '" class="option' + (opts[x].selected ? '-selected' : '') + (opts[x].disabled ? '-disabled' : '') + '" rel="' + opts[x].value + '">' + opts[x].html + '</a>';
            }
            if (!$(this).parent().hasClass('select-container')) {
                console.log(selected);
                $(this).wrap('<div id="' + id + '" class="select-replacement ' + options.cssClass + '" ' + (hasFloat ? 'style="float:' + hasFloat + ';"' : '') + '><div class="select-container" style="display:none"></div><div id="' + id + '" class="selected" style="width:' + width + 'px"><div class="selected-inner">' + selected.html + '</div></div><div class="options" style="display:none;width:' + width + 'px">' + html + '</div></div>');
            }
            $('.select-replacement .selected').unbind('click');
            $('.select-replacement .selected').click(function () {
                if (options.toggleListEffect($(this).parent().children('.options')[0])) {
                    options.zIndex++;
                    $(this).parent().css('z-index', options.zIndex);
                    $(this).parent().children('.options').css('z-index', options.zIndex);
                    if ($.fn.replaceSelects.is_select_opened && $.fn.replaceSelects.is_select_opened.parent().children('.selected')[0] != this) {
                        options.hideListEffect($.fn.replaceSelects.is_select_opened[0]);
                    }
                    $.fn.replaceSelects.is_select_opened = $(this).parent().children('.options');
                }
            });
            $('.select-replacement .options .option, .select-replacement .options .option-selected, .select-replacement .options .option-disabled, .select-replacement .options .option-selected-disabled').unbind('click');
            $('.select-replacement .options .option, .select-replacement .options .option-selected, .select-replacement .options .option-disabled, .select-replacement .options .option-selected-disabled').click(function () {
                if (options.onElementSelect(this)) {
                    if (!$(this).is('.option-disabled') && !$(this).is('.option-selected-disabled')) {
                        var optionbox = $(this).parent().parent();
                        var select = optionbox.children('.select-container').children('select');
                        optionbox.children('.selected').children('.selected-inner').html($(this).html());
                        select.val($(this).attr('rel'));
                        var f = select.attr('onchange');
                        if (f) {
                            f.call(select.val());
                        }
                        $(this).parent().children('.option, .option-selected').each(function () {
                            $(this).removeClass('option-selected');
                            $(this).addClass('option');
                        });
                        options.hideListEffect($(this).parent()[0]);

                        $(this).addClass('option-selected');
                        $(this).removeClass('option');
                    }
                }
                return false;
            });
            if (options.hideOnBodyClick) {
                $(document).ready(function () {
                    $('body').click(function (event) {
                        if (!$(event.target).is('.select-replacement,.select-replacement *,.select-replacement .selected *')) {
                            options.hideListEffect('.select-replacement .options');
                        }
                    });
                });
            }
        });
    };
})(jQuery);
