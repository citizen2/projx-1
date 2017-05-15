$(document).ready(function(){
			
		//Анимация появления
		$('.post').addClass("hidden").viewportChecker({
		classToAdd: 'visible animated fadeIn',
		offset: 100
		});
		//Диалог региистрации
		$('#open_regestration_dialog').click(function(){
			$('.regestration_dialog').dialog('open');
		});
		
		//Диалоговое окно регистрации
		$('.regestration_dialog').dialog({
			modal: true,
			resizable: false,
			draggable: false,
			autoOpen: false,
			hide: 500,
			show: 500
		});
                
                
                //Диалог входа
		$('#open_singn_up').click(function(){
			$('.enter_dialog').dialog('open');
		});
                
                //Диалоговое окно входа
                $('.enter_dialog').dialog({
                        modal: true,
                        resizable: false,
                        draggable: false,
                        autoOpen: false,
                        hide: 500,
                        show: 500
                });
});