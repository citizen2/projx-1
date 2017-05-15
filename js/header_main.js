$(document).ready(function(){
					//Скрипт бокового меню jQuery
				$('#menu_button').click(function(){

					if($('#side_menu').css('left') == '-180px') {
						$('#menu_button').css('transform', 'rotate(-90deg)');
						$('#side_menu').stop().animate({
							left : '0'
						},500);

						if($('#login_div').css('opacity') == '1'){
								$('#login_div').stop().animate({
								opacity:'0'
							},500);
						}

					} else {
						$('#menu_button').css('transform', 'rotate(0deg)');
						$('#side_menu').stop().animate({
							left : '-180px'
						},500);
					}

				});

				//Скрипт который закрывает боковое меню при клике по любой точке
				$('body').click(function(){
					if($('#side_menu').css('left') == '0px'){
						$('#menu_button').css('transform', 'rotate(0deg)');
						$('#side_menu').stop().animate({
							left : '-180px'
						},500);
					}
				});

				$('#main_content').click(function(){
					if($('#login_div').css('opacity') == '1'){
						$('#login_div').stop().animate({
							opacity:'0'
						},500);
					}
				});
                          
				//Проверка форм на заполненость
				$('#main_login').validate();
			});
