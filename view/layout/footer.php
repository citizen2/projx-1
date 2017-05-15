<footer class='container'>
    <div class='main_footer post'>

            <!--Рассылка-->
            <div class='footer_rss'>

                <p>Подпишись на рассылку!</p>

                <form>
                    <input type='email' name='rss_footer' id='rss_footer' placeholder='viktor@gmail.com'>
                    <input type='submit' id='rss_footer_submit' value='Подписаться'>
                </form>

            </div>

            <!--Карта сайта-->
            <div class='map_of_site_footer'>

                <div class='map_of_site_footer_link'>
                    <ul>
                        <li><a href='#about_modal_window' id='footer_about'>О проекте</a></li>
                        <li><a href='#help_modal_window' id='footer_help'>Помощь</a></li>
                        <li><a href='#contact_modal_window' id='footer_contact'>Контакты</a></li>
                        <li><a href='#'>Викторины</a></i>
                        <li><a href='#'>Тесты</a></li>
                    </ul>
                </div>

                <div class='map_of_site_footer_social'>

                    <div>
                        <a href='https://vk.com'><img src='image/social/vk.svg' alt='Вконтакте'/></a>
                        <p>a</p>
                    </div>

                    <div>
                        <a href='https://facebook.com'><img src='image/social/facebook.svg' alt='Facebook'/></a>
                        <p>a</p>
                    </div>

                    <div>
                        <a href='https://twitter.com'><img src='image/social/twitter.svg' alt='Twitter'/></a>
                        <p>a</p>
                    </div>

                    <div>
                        <a href='https://instagram.com'><img src='image/social/instagram.svg' alt='Instagram'/></a>
                        <p>a</p>
                    </div>

                </div>

            </div>

    </div>
</footer>

<div id='about_modal_window'>
    <div  class="close-about_modal_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
</div>

<div id='help_modal_window'>
    <div  class="close-help_modal_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
</div>

<div id='contact_modal_window'>
    <div  class="close-contact_modal_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
</div>

<!--Скрипт для анимации окон-->
<script src='js/animatedModal.min.js'></script>
<script>

    var masiv = ['#footer_about', '#footer_help', '#footer_contact'];
    var modal = ['about_modal_window', 'help_modal_window', 'contact_modal_window'];
    
    for(var i = 0; i < masiv.length; i++){
        $(masiv[i]).animatedModal({
        modalTarget: modal[i],
        animatedIn:'bounceIn',
        animatedOut:' bounceOut',
        animationDuration: '0.7s',
        color:'#3498db'
        });   
    }

</script>

