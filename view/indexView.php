<title>News</title>
<script>

    $(document).ready(function(){
        //Скрипт бокового меню jQuery
        $('#menu_button').click(function(){

            if($('#side_menu').css('left') === '-180px') {
                $('#menu_button').css('transform', 'rotate(-90deg)');
                $('#side_menu').stop().animate({
                    left : '0'
                },500);

                if($('#login_div').css('opacity') === '1'){
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
            if($('#side_menu').css('left') === '0px'){
                $('#menu_button').css('transform', 'rotate(0deg)');
                $('#side_menu').stop().animate({
                    left : '-180px'
                },500);
            }

            if($('#login_div').css('opacity') === '1'){
                $('#login_div').stop().animate({
                    opacity:'0'
                },500);
            }
        });

       
        //Проверка форм на заполненость
        $('#main_login').validate();
    });
</script>
<!--Лента с новостями, обертка div-->
<div id='full_news'>

    <h3>Новости</h3>

    <!--Лента с новостями, обертка div-->
    <div id='main_news' class='container'>

        <div class='main_news_item post'>

            <img src='image_1.jpg'>
            <!--Дата и просмотры-->
            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                    <div class='plus_news_and_popular'><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="25px" height="25px" viewBox="0 0 369.486 369.486" style="enable-background:new 0 0 369.486 369.486;"
                    xml:space="preserve">

                    <path d="M184.743,357.351c-3.478,0-6.798-1.449-9.164-3.998l-147.67-159.16c-0.038-0.041-0.076-0.082-0.113-0.123
			C9.871,174.223,0,147.921,0,120.008c0-27.914,9.871-54.215,27.796-74.061l2.244-2.484c18.246-20.201,42.608-31.327,68.599-31.327
			s50.354,11.126,68.601,31.328l17.503,19.38l17.503-19.379c18.246-20.202,42.608-31.328,68.6-31.328s50.354,11.126,68.601,31.329
			l2.241,2.478c17.928,19.851,27.799,46.152,27.799,74.065s-9.872,54.215-27.796,74.061c-0.037,0.043-0.075,0.084-0.113,0.125
			l-147.671,159.16C191.541,355.901,188.221,357.351,184.743,357.351z M46.295,177.252l138.448,149.219l138.448-149.22
			c28.485-31.603,28.467-82.97-0.055-114.549l-2.239-2.478c-13.449-14.891-31.224-23.09-50.051-23.09
			c-18.828,0-36.603,8.199-50.048,23.085L194.02,89.869c-2.369,2.624-5.74,4.121-9.275,4.121s-6.906-1.497-9.276-4.121
			l-26.779-29.648c-13.446-14.887-31.22-23.086-50.048-23.086S62.039,45.333,48.594,60.22l-2.244,2.484
			C17.828,94.283,17.809,145.65,46.295,177.252z"/>
	
                    </svg></div>
                    <div class='number_news_and_popular'>4</div>
                   
                </div>

            </div>

        </div>

        <div class='main_news_item post'>
            <img src='image_1.jpg'>

            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                   
                    <p class='number_news_and_popular'>4</p>
                    
                </div>

            </div>
        </div>

        <div class='main_news_item post'>
            <img src='image_1.jpg'>

            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                    
                    <p class='number_news_and_popular'>4</p>
                  
                </div>

            </div>
        </div>

        <div class='main_news_item post'>
            <img src='image_1.jpg'>

            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                   
                    <p class='number_news_and_popular'>4</p>
                    
                </div>

            </div>
        </div>

        <div class='main_news_item post'>

            <img src='image_1.jpg'>

            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                 
                    <div class='number_news_and_popular'>4</div>
                   
                </div>

            </div>

        </div>

        <div class='main_news_item post'>

            <img src='image_1.jpg'>

            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                 
                    <div class='number_news_and_popular'>4</div>
                  
                </div>

            </div>

        </div>


        <div class='main_news_item post'>

            <img src='image_1.jpg'>

            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                   
                    <div class='number_news_and_popular'>4</div>
                   
                </div>

            </div>

        </div>


        <div class='main_news_item post'>

            <img src='image_1.jpg'>

            <div class='main_news_date_and_watch'>

                <div class='date_of_publication'>
                    <p >13/03/2017</p>
                </div>

                <div class='number_of_views'>
                    <p>157</p>
                    <img src='image/eye.svg' height='100%'>
                </div>

            </div>

            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>

                <div class='rate_of_quiz_or_test'>
                  
                    <div class='number_news_and_popular'>4</div>
                   
                </div>

            </div>

        </div>

    </div>

</div>


<div class='full_popular'>

    <h3>Популярное</h3>

    <!--Лента популярные, правый sidebar-->
    <div class='most_popular'>

        <div class='main_popular_item slideInRight animated'>
            <img src='image_1.jpg'>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>

            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>
                <div class='rate_of_quiz_or_test'>
                    
                    <p class='number_news_and_popular'>4</p>
                    
                </div>
            </div>
        </div>

        <div class='main_popular_item slideInRight animated'>
            <img src='image_1.jpg'>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>
                <div class='rate_of_quiz_or_test'>
                    
                    <p class='number_news_and_popular'>4</p>
                 
                </div>
            </div>
        </div>

        <div class='main_popular_item slideInRight animated'>
            <img src='image_1.jpg'>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <div class='action_news_and_popular'>
                <p class="more"><a href="#" class="main_button">Перейти</a></p>
                    <div class='rate_of_quiz_or_test'>
                       
                        <p class='number_news_and_popular'>4</p>
                        
                    </div>
            </div>
        </div>
    </div>
</div>
