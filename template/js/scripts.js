var sizes=Array();
sizes["plastic"]={
        0: {"s1":[350,1700,400,2500],"s2":[400,1200,500,2600]},
        1: {"d1":[900,2200,400,2500],"d2":[900,2150,500,2600],"d3":[900,2150,500,2600]},
        2: {"t1":[1400,2650,400,2600],"t2":[1400,2650,500,2600],"t3":[1400,2650,500,2600],"t4":[1400,2650,500,2600]},
        3: {"b":[400,1200,1500,2600]}
    };
sizes["wood"]={
    0: {"s1":[400,1800,400,2700],"s2":[400,1300,500,2300]},
    1: {"d1":[800,2800,400,2500],"d2":[800,2400,500,2300],"d3":[800,2400,500,2300]},
    2: {"t1":[1200,3100,400,2500],"t2":[1200,3100,501,2300],"t3":[1400,3100,500,2300],"t4":[1500,3100,500,2300]},
    3: {"b":[500,1200,1500,2700]}
};

(function($) {
	$(function() {

		if ($('input:radio, input:checkbox, select').length > 0) {
			$('input:radio, input:checkbox, select').styler({
                onSelectClosed:function(){
                    var op=jQuery(".jq-selectbox__dropdown li.selected",this).html();
                    if(op!="Глухая")
                        jQuery(this).closest(".flap-item").find("img").attr("src","img/turn-window.jpg");
                    else
                        jQuery(this).closest(".flap-item").find("img").attr("src","img/dead-window.jpg");
                }
            });
			$('.yes-no-button input').styler('destroy');
		}
	});
})(jQuery);

$(function() {
    if (typeof jQuery.fancybox !== "undefined") {
        jQuery(".fancybox").fancybox({
            margin: 0
        });
    }
    jQuery(document).on("submit", "#ajax_form", function() {
        $.ajax({
            type	: "POST",
            cache	: false,
            url		: jQuery(this).attr("action"),
            data	: jQuery(this).serializeArray(),
            success	: function(data) {
                console.log(data);
                $.fancybox(data, {
                    'padding'	:	[18, 24, 22, 24],
                    'wrapCSS'	: 'fancybox-style',
                    'scrolling' :	'no',
                    'autoScale'	:	false,
                    'autoDimensions'	:	false,
                    'fitToView'	:	false,
                    'autoSize '	:	false,
                    'afterShow'	: function() {
                        jQuery('.fancybox-wrap .style-select').coreUISelect({
                            jScrollPane : { }
                        });
                    }
                });
            }
        });
        return false;
    });

	if ($('.balcony-props-scroll').length > 0) {
		$('.balcony-props-scroll').jScrollPane({
			horizontalDragMinWidth: 170,
			horizontalDragMaxWidth: 170
		});
	}

    if ($('.balcony-props-scroll2').length > 0) {
        $('.balcony-props-scroll2').jScrollPane({
            horizontalDragMinWidth: 170,
            horizontalDragMaxWidth: 170
        });
    }

	/* Горизонтальный ползунок */
	if ($('#sizes-width').length > 0) {
		$('#sizes-width').slider({
			range: 'max',
			min:   900,
			max:   2150,
			step:  10,
			slide: function (event, ui) {
				$('#size-width').val(ui.value + ' мм');
			}
		}).slider('float');
		$('#size-width').val($('#sizes-width').slider('value') + ' мм');
	}

	/* Вертикальный ползунок */
	if ($('#sizes-height').length > 0) {
		$('#sizes-height').slider({
			range:       'max',
			orientation: 'vertical',
			min:         500,
			max:         2600,
			step:        10,
			slide:       function (event, ui) {
				$('#size-height').val(ui.value + ' мм');
			}
		}).slider('float');
		$('#size-height').val($('#sizes-height').slider('value') + ' мм');
	}

	/* Подоконник */
	if ($('.windowsill-slider').length > 0) {
		$('.windowsill-slider').slider({
			range: 'max',
			min:   200,
			max:   500,
			step:  50,
            slide: function (event,ui){
                if ($('input[name=wood-podokonnik-width]').length > 0)
                    $('input[name=wood-podokonnik-width]').val(ui.value);
                if ($('input[name=balcony-podokonnik-width]').length > 0)
                    $('input[name=balcony-podokonnik-width]').val(ui.value);
            }
		}).slider('pips');
	}

	/* Балкон - изгибы */
	if ($('.balcony-bends').length > 0) {
		$('.balcony-bends').slider({
			range: 'max',
			min:   0,
			max:   10,
			step:  1,
			slide: function (event, ui) {
				$('#balcony-bends').val(ui.value);
			}
		}).slider('pips');
	}
    $('.balcony-bends').slider("option", "value", $('#balcony-bends').val());
	/* Балкон - высота */
	if ($('.balcony-height').length > 0) {
		$('.balcony-height').slider({
			range: 'max',
			min:   500,
			max:   2500,
			step:  500,
			slide: function (event, ui) {
				$('#balcony-height').val(ui.value);
            }
		}).slider('pips');
        $('.balcony-height').slider("option", "value", $('#balcony-height').val());
        //$('#balcony_height').val($('#balcony-height').slider('value'));
	}

	/* Отлив */
	if ($('.otkos-width').length > 0) {
		$('.otkos-width').slider({
			range: 'max',
			min:   100,
			max:   300,
			step:  50,
            slide: function (event, ui) {
                if ($('input[name=wood-otkos-size]').length > 0)
                    $('input[name=wood-otkos-size]').val(ui.value);
                if ($('input[name=balcony-otkos-size]').length > 0)
                    $('input[name=balcony-otkos-size]').val(ui.value);
            }
		}).slider('pips');
		//$('input[name=otliv_size]').val($('.windowsill-width').slider('value'));
	}

	if ($('.windowsill-width').length > 0) {
		$('.windowsill-width').slider({
			range: 'max',
			min:   100,
			max:   300,
			step:  50,
			slide: function (event, ui) {
                if ($('input[name=wood-otliv-size]').length > 0)
                    $('input[name=wood-otliv-size]').val(ui.value);
                if ($('input[name=balcony-otliv-size]').length > 0)
                    $('input[name=balcony-otliv-size]').val(ui.value);
				//$('input[name=wood-otliv-size]').val(ui.value);
			}
		}).slider('pips');
	}
});

function setSizeTypeColor(s,t){
    jQuery(document).ready(function() {
        jQuery("input[name=plastic-size]").val(s);
        jQuery("input[name=plastic-type]").val(t);
        jQuery("input[name=wood-size]").val(s);
        jQuery("input[name=wood-type]").val(t);

        if(t!="t1"&&t!="s1"&&t!="d1")
            jQuery(".property-block.povorot").css("display","block");
        else
            jQuery(".property-block.povorot").css("display","none");
    });
}
function getSizeTypeColor(tp) {
    if(tp=="plastic"){
    jQuery(document).ready(function() {
        var s=jQuery("input[name=plastic-size]").val();
        var t=jQuery("input[name=plastic-type]").val();

        if(t!="t1"&&t!="s1"&&t!="d1"&&t!="b")
            jQuery(".property-block.povorot").css("display","block");
        else
            jQuery(".property-block.povorot").css("display","none");

        if(jQuery("input[name=plastic-lamination]:checked").val()=="Y")
            var c=jQuery("input[name=plastic-lamination-color]:checked").val();
        else
            var c=0;
        jQuery(".type-item").removeClass("selected");
        jQuery(".construction-types div[data-type="+t+"][data-sizes="+s+"]").closest(".type-item").addClass("selected");
        jQuery(".type-item.selected .subitem-img-container").removeClass("selected");
        jQuery(".construction-types div[data-type="+t+"][data-sizes="+s+"]").addClass("selected");
        jQuery(".construction-image-wrapper img").attr("data-type",t);
        jQuery(".construction-image-wrapper img").attr("src", "/calc/img/plastic/"+c+"/" +t+ ".jpg");
        if(typeof s != "undefined"){
            var ar=sizes[tp][s][t];
        }

        $('.subitem-img-container.img-container').click(function(){
            $(this).parent('.subitems.ajustblock.active').parent('.type-item').children('.img-container').children('img').attr('src',$(this).children('img').attr('src'));
        });

        var sliderWidth = $( "#sizes-width" ).slider({
            range: 'max',
            min:   900,
            max:   2150,
            step:  10,
            value:400,
            slide: function (event, ui) {
                $('#size-width').val(ui.value + ' мм');
            }
        });
        var sliderHeight = $( "#sizes-height" ).slider({
            range: 'max',
            min:   900,
            max:   2150,
            step:  10,
            value:400,
            slide: function (event, ui) {
                $('#size-height').val(ui.value + ' мм');
            }
        });
        /* Горизонтальный ползунок */
        if ($('#sizes-width').length > 0) {
            $('#sizes-width').slider("option", "min", ar[0]);
            $('#sizes-width').slider( "option", "max", ar[1]);
            $('#sizes-width').slider("option", "value", ar[0]);
            $('#size-width').val($('#sizes-width').slider('value') + ' мм');
            $(".sizes-width .min").html(ar[0]+" min");
            $(".sizes-width .max").html(ar[1]+" max");
        }
        // Изменение ползунка ползунка при вбивании в input(width)
        if ($('#sizes-width').length > 0) {
            $('input[name=plastic-width]').change(function(){
                var thisVal =  parseInt(this.value);
                sliderWidth.slider("value", thisVal);
            });
        }
        // Изменение ползунка ползунка при вбивании в input(height)
        if ($('#sizes-height').length > 0) {
            $('input[name=plastic-height]').change(function(){
                var thisVal =  parseInt(this.value);
                sliderHeight.slider("value", thisVal);
            });
        }

        /* Вертикальный ползунок */
        if ($('#sizes-height').length > 0) {
            $('#sizes-height').slider( "option", "min", ar[2]);
            $('#sizes-height').slider("option", "max", ar[3]);
            $('#sizes-height').slider( "option", "value", ar[2]);
            $('#size-height').val($('#sizes-height').slider('value') + ' мм');
            $(".sizes-height .min").html(ar[2]+" min");
            $(".sizes-height .max").html(ar[3]+" max");
        }
    });
    }
    if(tp=="wood"){
        jQuery(document).ready(function() {
            var s=jQuery("input[name=wood-size]").val();
            var t=jQuery("input[name=wood-type]").val();
            var p=jQuery("input[name=wood-profile]").val();

            if(t!="t1"&&t!="s1"&&t!="d1"&&t!="b")
                jQuery(".property-block.povorot").css("display","block");
            else
                jQuery(".property-block.povorot").css("display","none");

            if(jQuery("input[name=wood-color]:checked").val()=="Y")
                var c=jQuery("input[name=wood-lamination-color-"+p+"]:checked").val();
            else
                var c=0;
            jQuery(".type-item").removeClass("selected");
            jQuery(".construction-types div[data-type="+t+"][data-sizes="+s+"]").closest(".type-item").addClass("selected");
            jQuery(".type-item.selected .subitem-img-container").removeClass("selected");
            jQuery(".construction-types div[data-type="+t+"][data-sizes="+s+"]").addClass("selected");
            jQuery(".construction-image-wrapper img").attr("data-type",t);
            jQuery(".construction-image-wrapper img").attr("src", "/calc/img/wood/"+p+"/"+c+"/" +t+ ".jpg");

            var ar=sizes[tp][s][t];

            /* Горизонтальный ползунок */
            if ($('#sizes-width').length > 0) {
                $('#sizes-width').slider("option", "min", ar[0]);
                $('#sizes-width').slider( "option", "max", ar[1]);
                $('#sizes-width').slider("option", "value", ar[0]);
                $('#size-width').val($('#sizes-width').slider('value') + ' мм');
                $(".sizes-width .min").html(ar[0]+" min");
                $(".sizes-width .max").html(ar[1]+" max");
            }

            /* Вертикальный ползунок */
            if ($('#sizes-height').length > 0) {
                $('#sizes-height').slider( "option", "min", ar[2]);
                $('#sizes-height').slider("option", "max", ar[3]);
                $('#sizes-height').slider( "option", "value", ar[2]);
                $('#size-height').val($('#sizes-height').slider('value') + ' мм');
                $(".sizes-height .min").html(ar[2]+" min");
                $(".sizes-height .max").html(ar[3]+" max");
            }
        });
    }
}

jQuery(document).ready(function(){
    getSizeTypeColor(jQuery("input[name=glazing]").val());
	/* Выбор типа конструкции */
	jQuery('.construction-types .type-item').click(function(){
		jQuery(this).siblings().removeClass('selected');
		jQuery(this).addClass('selected');
        if (jQuery(this).find('.subitems').length>0) {
            setSizeTypeColor(jQuery(this).find(".subitem-img-container.selected").attr("data-sizes"), jQuery(this).find(".subitem-img-container.selected").attr("data-type"));
        }
        else{
            setSizeTypeColor(jQuery(".img-container",this).attr("data-sizes"),jQuery(".img-container",this).attr("data-type"));
        }
		/* Показываем доп. типы, если есть */
		if (jQuery(this).has('.subitems')){
			jQuery(this).parent('.construction-types').find('.subitems').removeClass('active');
			jQuery(this).find('.subitems').addClass('active');
		}
	});
    $(document).click(function(event) {
        if ($(event.target).is(".type-item") || $(event.target).is(".type-item img") || $(event.target).is(".type-item .img-container") || $(event.target).is(".subitems") || $(event.target).is(".subitems .subitem-img-container") || $(event.target).is(".subitems img"))
            return;
        $(".subitems").removeClass('active');
    });

	/* Выбор доп. типов конструкции */
    jQuery(".plastic .img-container").click(function(){
       if(jQuery(this).attr("data-type")) {
           t=jQuery(this).attr("data-type");
           jQuery(".construction-image-wrapper img").attr("data-type",t);
           jQuery(".construction-image-wrapper img").attr("src", "/calc/img/plastic/"+jQuery(".construction-image-wrapper img").attr("data-color")+"/" + jQuery(this).attr("data-type") + ".jpg");

           if(t!="t1"&&t!="s1"&&t!="d1"&&t!="b")
               jQuery(".property-block.povorot").css("display","block");
           else
               jQuery(".property-block.povorot").css("display","none");

           var ar=sizes["plastic"][jQuery(this).attr("data-sizes")][jQuery(this).attr("data-type")];

           /* Горизонтальный ползунок */
           if ($('#sizes-width').length > 0) {
               $('#sizes-width').slider("option", "min", ar[0]);
               $('#sizes-width').slider( "option", "max", ar[1]);
               $('#sizes-width').slider("option", "value", ar[0]);
               $('#size-width').val($('#sizes-width').slider('value') + ' мм');
               $(".sizes-width .min").html(ar[0]+" min");
               $(".sizes-width .max").html(ar[1]+" max");
           }

           /* Вертикальный ползунок */
           if ($('#sizes-height').length > 0) {
               $('#sizes-height').slider( "option", "min", ar[2]);
               $('#sizes-height').slider("option", "max", ar[3]);
               $('#sizes-height').slider( "option", "value", ar[2]);
               $('#size-height').val($('#sizes-height').slider('value') + ' мм');
               $(".sizes-height .min").html(ar[2]+" min");
               $(".sizes-height .max").html(ar[3]+" max");
           }
       }
    });
    jQuery(".wood .img-container").click(function(){
        if(jQuery(this).attr("data-type")) {
            t=jQuery(this).attr("data-type");
            p=jQuery("input[name=wood-profile]").val();
            jQuery(".construction-image-wrapper img").attr("data-type",t);
            jQuery(".construction-image-wrapper img").attr("src", "/calc/img/wood/"+p+"/"+jQuery(".construction-image-wrapper img").attr("data-color")+"/" + jQuery(this).attr("data-type") + ".jpg");

            if(t!="t1"&&t!="s1"&&t!="d1"&&t!="b")
                jQuery(".property-block.povorot").css("display","block");
            else
                jQuery(".property-block.povorot").css("display","none");

            var ar=sizes["wood"][jQuery(this).attr("data-sizes")][jQuery(this).attr("data-type")];

            /* Горизонтальный ползунок */
            if ($('#sizes-width').length > 0) {
                $('#sizes-width').slider("option", "min", ar[0]);
                $('#sizes-width').slider( "option", "max", ar[1]);
                $('#sizes-width').slider("option", "value", ar[0]);
                $('#size-width').val($('#sizes-width').slider('value') + ' мм');
                $(".sizes-width .min").html(ar[0]+" min");
                $(".sizes-width .max").html(ar[1]+" max");
            }

            /* Вертикальный ползунок */
            if ($('#sizes-height').length > 0) {
                $('#sizes-height').slider( "option", "min", ar[2]);
                $('#sizes-height').slider("option", "max", ar[3]);
                $('#sizes-height').slider( "option", "value", ar[2]);
                $('#size-height').val($('#sizes-height').slider('value') + ' мм');
                $(".sizes-height .min").html(ar[2]+" min");
                $(".sizes-height .max").html(ar[3]+" max");
            }
        }
    });
	jQuery('.subitems .subitem-img-container').click(function(){
		jQuery(this).siblings().removeClass('selected');
		jQuery(this).addClass('selected');
        setSizeTypeColor(jQuery(this).attr("data-sizes"),jQuery(this).attr("data-type"));
	});

	/* Выбор оконного профиля */
	jQuery('.plastic_section .profile-system-selector .profile-system-item').click(function(){
		jQuery(this).siblings().removeClass('selected');
		jQuery(this).addClass('selected');
        jQuery(this).parent().find('input[name=profile]').val(jQuery(this).attr('id'));
    });

    jQuery('.balcony_section .profile-system-selector .profile-system-item').click(function(){
        jQuery(this).siblings().removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery(this).parent().find('input[name=balcony-profile-type]').val(jQuery(this).attr('id'));
    });

    jQuery('.wood_section .profile-system-selector .profile-system-item').click(function(){
        jQuery(this).siblings().removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery(".lam").removeClass("active");
        jQuery(".lam.lam_"+jQuery(this).attr('id')).addClass("active");
        jQuery(this).parent().find('input[name=wood-profile]').val(jQuery(this).attr('id'));
        var p=jQuery("input[name=wood-profile]").val();
        jQuery(this).closest(".profile-system-selector").find('input[name=wood-profile-type]').val(jQuery(".profile-system-item.selected .profile-system-subitem.selected span").html());
        jQuery(".construction-image-wrapper img").attr("src", "/calc/img/wood/"+p+"/"+jQuery(".lam_"+p+".active input:checked").val()+"/" + jQuery(".construction-image-wrapper img").attr("data-type") + ".jpg");
    });
    $('input[name=plastic-lamination-color-name]').val($('.material-items-selector.plastic .material-item.selected').attr('title'));
    $('input[name=balcony-lamination-color]').val($('.material-items-selector.balcony .material-item.selected').attr('title'));
    $('input[name=wood-lamination-color-name]').val($('.material-items-selector.wood .material-item.selected img').attr('title'));
	/* Выбор материала ламинации */
    jQuery('.material-items-selector.plastic .material-item').click(function(){
        jQuery(this).siblings().removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery(this).find('input').click();
        jQuery('input[name=plastic-lamination-color-name]').val($(this).attr('title'));
        jQuery(".construction-image-wrapper img").attr("data-color",jQuery(this).find('input').val());
        jQuery(".construction-image-wrapper img").attr("src", "/calc/img/plastic/"+jQuery(this).find('input').val()+"/" + jQuery(".construction-image-wrapper img").attr("data-type") + ".jpg");
    });
	jQuery('.material-items-selector.balcony .material-item').click(function(){
		jQuery(this).siblings().removeClass('selected');
		jQuery(this).addClass('selected');
		jQuery(this).find('input').click().val($(this).attr('title'));
        
    });
    jQuery('.material-items-selector.wood .material-item').click(function(){
        jQuery(this).siblings().removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery(this).find('input').click();

        jQuery('input[name=wood-lamination-color-name]').val($(this).children('img').attr('title'));
        var p=jQuery("input[name=wood-profile]").val();
        if(jQuery("input[name=wood-lamination]:checked").val()=="Y")
            var c=jQuery("input[name=wood-lamination-color]:checked").val();
        else
            var c=0;
        jQuery(".construction-image-wrapper img").attr("data-color",jQuery(this).find('input').val());
        jQuery(".construction-image-wrapper img").attr("src", "/calc/img/wood/"+p+"/"+jQuery(this).find('input').val()+"/" + jQuery(".construction-image-wrapper img").attr("data-type") + ".jpg");
    });

	/* Выбор типа древесины */
	jQuery('.profile-system-subitem').click(function(){
		jQuery(this).siblings().removeClass('selected');
		jQuery(this).addClass('selected');
        jQuery(this).closest(".profile-system-selector").find('input[name=wood-profile-type]').val(jQuery("span",this).html());
		//jQuery(this).find('input[type=radio]').click();
	});
	
	/* Кнопка "Да/Нет" */
	jQuery('.yes-no-button label').click(function(){
		jQuery(this).parent('.yes-no-button').removeClass('yes no').addClass(jQuery(this).attr('class'));
	});
	
	/* Показывает блок с ламинацией, если у соответствующей кнопки стоит "Да" */
	jQuery('.plastic .yes-no-button.lamination label').click(function(){
		if (jQuery(this).parent('.yes-no-button').hasClass('yes')) {
			jQuery('.lamination-block').fadeIn();
            jQuery(".construction-image-wrapper img").attr("data-color",jQuery(".lamination-block:visible input[name=plastic-lamination-color]:checked").val());
            jQuery(".construction-image-wrapper img").attr("src", "/calc/img/plastic/"+jQuery(".construction-image-wrapper img").attr("data-color")+"/" + jQuery(".construction-image-wrapper img").attr("data-type") + ".jpg");
		} else {
			jQuery('.lamination-block').fadeOut();
            jQuery(".construction-image-wrapper img").attr("data-color","0");
            jQuery(".construction-image-wrapper img").attr("src", "/calc/img/plastic/"+jQuery(".construction-image-wrapper img").attr("data-color")+"/" + jQuery(".construction-image-wrapper img").attr("data-type") + ".jpg");
		}
	});
    jQuery('.wood .yes-no-button.lamination label').click(function(){
        var p=jQuery("input[name=wood-profile]").val();
        if (jQuery(this).parent('.yes-no-button').hasClass('yes')) {
            jQuery('.lamination-block').fadeIn();
            jQuery(".construction-image-wrapper img").attr("data-color",jQuery(".lamination-block:visible input[name=wood-lamination-color]:checked").val());
            jQuery(".construction-image-wrapper img").attr("src", "/calc/img/wood/"+p+"/"+jQuery(".construction-image-wrapper img").attr("data-color")+"/" + jQuery(".construction-image-wrapper img").attr("data-type") + ".jpg");
        } else {
            jQuery('.lamination-block').fadeOut();
            jQuery(".construction-image-wrapper img").attr("data-color","0");
            jQuery(".construction-image-wrapper img").attr("src", "/calc/img/wood/"+p+"/"+jQuery(".construction-image-wrapper img").attr("data-color")+"/" + jQuery(".construction-image-wrapper img").attr("data-type") + ".jpg");
        }
    });
    if (jQuery(".yes-no-button.lamination label").parent('.yes-no-button').hasClass('yes')) {
        jQuery('.lamination-block').css("display","block");
    }

	/* Выбор типа древесины */
	jQuery('.windowsill-type div').click(function(){
		jQuery(this).siblings().removeClass('selected');
		jQuery(this).addClass('selected');
		jQuery(this).parent().find('input').val(jQuery(this).find('span').attr('id'));
	});

	jQuery('.option-block .yes-no-button label').click(function(){
		if (jQuery(this).parent('.yes-no-button').hasClass('yes')) {
			jQuery(this).closest('.option-block').addClass('active');
		} else {
			jQuery(this).closest('.option-block').removeClass('opened active');
		}
	});
	
	/* Выбир цвета ламинации */
	jQuery('.lamination-selector label').click(function(){
		jQuery(this).parent('.lamination-selector').removeClass('inner outer double').addClass(jQuery(this).attr('class'));
		if (jQuery(this).hasClass('double')) {
			jQuery(this).parent('.lamination-selector').find('div.mover').width(jQuery(this).width());
		} else {
			jQuery(this).parent('.lamination-selector').find('div.mover').width(jQuery(this).width()-1);
		}
	});
    jQuery('.lamination-selector').find('div.mover').width(jQuery(".lamination-selector input[type=radio]:checked").closest("label").width()+"px");

    jQuery('.color-selector label').click(function(){
        jQuery(this).parent('.color-selector').removeClass('one two').addClass(jQuery(this).attr('class'));
        if (jQuery(this).hasClass('two')) {
            jQuery(this).parent('.color-selector').find('div.mover').width(jQuery(this).width());
        } else {
            jQuery(this).parent('.color-selector').find('div.mover').width(jQuery(this).width()-1);
        }
    });
    jQuery('.color-selector').find('div.mover').width(jQuery(".color-selector input[type=radio]:checked").closest("label").width()+"px");

    $('#callback').on('submit', function(){
  alert('Вы нажали на элемент "foo"');
});

});