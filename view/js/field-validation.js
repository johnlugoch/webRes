/* FIELDS VALIDATIONS */
$(function(){
	'use strict';

	window.CONST = {
		paramsClass: {
			wrapper: '.js-wvalidations',
			btn: '',
			str: 'js-vstring',
			inte: 'js-vint',
			alpha: 'js-valpha',
			field: 'input.js-vfield',
			wErr: '.form-group',
			cErr: 'has-error',
			wApplyValidate: '.js-apply-validate',
			hiddenForm: '.hiddenForm'
		},
		regx: {
			rsg: /^[a-zA-Z\s]*$/g,
			rig: /^[0-9\s]*$/g,
			ralpha: /^[a-z0-9-_\s]+$/i,
		}
	};

	window.FNLOGIC  = (function(){
		var fns, fnsb, fnsubmit, errorClass, regexClass;

		regexClass = function(t){
			var r;
			if(t.hasClass(CONST.paramsClass.str)){
				r = CONST.regx.rsg;
			}else if(t.hasClass(CONST.paramsClass.inte)){
				r = CONST.regx.rig;
			}else if(t.hasClass(CONST.paramsClass.alpha)){
				r = CONST.regx.ralpha;
			};
			return r;
		};

		errorClass = function(t, b){
			if(b){
				t.closest(CONST.paramsClass.wErr).removeClass(CONST.paramsClass.cErr);
			}else{
				t.closest(CONST.paramsClass.wErr).addClass(CONST.paramsClass.cErr);
			};
		};

		fns = function(t, rs){
			return (rs.test(t));
		};

		fnsb = function(t, rsg){
			var v = t.val(),
				t;
			t = (v !== undefined) ? (($.trim(v) !== '') ? ((v.match(rsg)) ? true : false) : false) : false;
			return t;
		};

		fnsubmit = function(bx){
			/*
				(bool) bx -> If false = show alert, else = return boolean without alert
			*/
			var f = true,
				b = true;

			/* REMOVE ERRORS */
			$(CONST.paramsClass.wApplyValidate).find('.has-error').each(function(i, e){
				$(this).removeClass('has-error');
			});

			/* VALID SELECT */
			$(CONST.paramsClass.wApplyValidate).find('select, input').each(function(i, e){
				var t = $(this),
					v = t.val();

				if(t.is('select')){
					var _wt =  t.closest(CONST.paramsClass.wErr).parent(CONST.paramsClass.hiddenForm);

					if(_wt.length){
						if(_wt.css('display') === 'block'){
							if($.trim(v) === '' && v == 0){
								if(f){
									t.closest(CONST.paramsClass.wErr).addClass(CONST.paramsClass.cErr);
									f = false;
								};
							};
						};
					}else{

						if($.trim(v) === '' && v == 0){
							if(f){
								if(t.closest(CONST.paramsClass.wErr).css('display') !== 'none'){
									t.closest(CONST.paramsClass.wErr).addClass(CONST.paramsClass.cErr);
									f = false;
								};
							};
						};

					};



				}else if(t.is('input')){

					if(t.attr('type') === 'text' || t.attr('type') === 'tel' || t.attr('type') === 'number'){
						if($.trim(t.val()) === ''){
							if(f){
								t.closest(CONST.paramsClass.wErr).addClass(CONST.paramsClass.cErr);
								f = false;
							};
						};
					};

				};

			});

			/* Check for error > 0 */
			$(CONST.paramsClass.wApplyValidate).find('.' + CONST.paramsClass.cErr).each(function(i, e){
				var t = $(this) ,
						tab = t.closest('.js-apply-validate').find('.nav-tabs');
				if(t === 0){
					/* SUBMIT */
				}else{
					if(b){
						if(!bx){
							alert('Dato incorrecto: ' + t.find('label').text());
						};
						/* Scroll to */
						$('html, body').animate({
							scrollTop: (tab.offset().top - tab.outerHeight() - 10)
						}, 500);
						b = false;
					};
				};
			});


			return (f && b);
		};

		return{
			errorClass: errorClass,
			fns: fns,
			fnsb: fnsb,
			regexClass: regexClass,
			fnsubmit: fnsubmit
		};
	})();

	CONST.paramsClass.btn = '#edit.js-validform';

	/* ATTACH EVENTS */
	/* FIELDS */
	$(CONST.paramsClass.wrapper + ' ' + CONST.paramsClass.field).keypress(function(e){
		var k = e.keyCode || e.which ,
			s = String.fromCharCode(k),
			t = $(this),
			r;

		r = FNLOGIC.regexClass(t);

		return (FNLOGIC.fns(s, r));
	});

	$(CONST.paramsClass.wrapper + ' ' + CONST.paramsClass.field).blur(function(e){
		var t = $(this),
				r;

		r = FNLOGIC.regexClass(t);

		if($.trim(t.val()) !== ''){
			FNLOGIC.errorClass(t, FNLOGIC.fnsb(t, r));
		};
	});

	/* EDIT SUBMIT */
	$(CONST.paramsClass.btn).click(function(e){

		if(FNLOGIC.fnsubmit(false)){
			/* OK */

		}else{
			/* ERROR */
		};
		e.preventDefault();
	});

});
