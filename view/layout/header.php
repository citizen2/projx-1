<header>

    <script>
		$(document).ready(function() {
                    $('.regestration_dialog').dialog({
                        modal: true,
                        resizable: false,
                        draggable: false,
                        autoOpen: false,
                        hide: 500,
                        show: 500
                    });

                    $('.enter_dialog').dialog({
                        modal: true,
                        resizable: false,
                        draggable: false,
                        autoOpen: false,
                        hide: 500,
                        show: 500
                    });

		});
      
	</script>
    <!--Диалоговое окно регистрации-->
	<div class='regestration_dialog' title='Регистрация'>
		<form>
			<input type='text' placeholder="Логин" autofocus>
			<input type='email' placeholder="Электронная почта">
			<input type='password' placeholder="Пароль">
			<input type='password' placeholder="Повторите пароль">
			<input type='submit' value='Зарегестрироваться'>
		</form>
	</div>

        <!--Окно входа-->
        <div class='enter_dialog' title='Вход'>
                <form id='main_login'>
			<input type='text' class='required' placeholder="Логин" autofocus>
                        <input type='password'  class='required' placeholder="Пароль">
                        <input type='submit' value='Войти'>
		</form>
        </div>
        
    <!--Лого-->
    <div id='logo'>
        <h1>ProjectX</h1>
        <div id='menu_button'></div>
    </div>

    <!--Навигация header-->
    <div id='nav_button'>
        <nav class='clear'>
            <ul>
                <li><a href='#' class='button_header' id='open_singn_up'>Вход</a></li>
                <li><a href='#' class='button_header' id='open_regestration_dialog'>Регистрация</a></li>
            </ul>
        </nav>
    </div>

</header>
