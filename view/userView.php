
<script src='js/jquery.knob.js'></script>
<script src='js/TweenMax.min.js'></script>
<script>
    $(document).ready(function(){
        $('.dial').knob({
            readOnly: true
        });
        
    });
</script>

<div id='main_profile'>

<div class='profile_with_photo'></div>

<div class='profile_main_inform'>

 

        <div id='profile_main_inform_list_of_friends'>
            <h3>Друзья</h3>
            <div id='main_friends_list'>

                <div>
                    <img src='image_1.jpg'>
                    <p>Jhon Williams</p>
                </div>

                <div>
                    <img src='image_1.jpg'>
                    <p>Jhon Smith</p>
                </div>

                <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>

                 <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>
                
                 <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>
                
                 <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>
                
                 <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>
                
                 <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>
                
                 <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>
                
                 <div>
                    <img src='image_1.jpg'>
                    <p>Elvis Williams</p>
                </div>
                
            </div>
        </div>

    

    <div class='profile_main_inform_data'>

        <div id='profile_main_first_row'>

            <div class='rating_of_user'>
                <a href='#rating_window' id='rating'>
                    <p class='profile_main_name'>Рейтинг:</p>
                    <p class='some_number_of_user'>150</p>
                </a>
            </div>

            <div class='rating_of_user'>
                <a href='#quiz_window' id='quiz_number'>
                    <p class='profile_main_name'>Пройдено викторин:</p>
                    <p class='some_number_of_user'>14</p>
                </a>
            </div>

            <div class='rating_of_user'>
                <a href='#test_window' id='test_number'>
                    <p class='profile_main_name'>Пройдено тестов:</p>
                    <p class='some_number_of_user'>10</p>
                </a>
            </div>

        </div>

        <div id='profile_main_second_row'>

            <div class='rating_of_user'>
                <a href='#level_window' id='level_number'>
                    <p class='profile_main_name'>Уровень</p>
                    <p class='some_number_of_user'>5</p>
                  
                    <!--Круглый бар-->
                    <input class="enterValue" type="number" min="0" max="100" required placeholder="enter value" value="87"/>
                   
                    <div class="anim_Wrapper">
                        <svg width="228px" height="228px" viewBox="0 0 228 228" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="circle" class="circle" stroke="#ff9900" stroke-width="20" fill="none" fill-rule="evenodd">
				<path d="M227.5,114 C227.5,51.3156809 176.684319,0.5 114,0.5 C51.3156809,0.5 0.5,51.3156809 0.5,114 C0.5,176.684319 51.3156809,227.5 114,227.5 C176.684319,227.5 227.5,176.684319 227.5,114 Z" id="Oval-1" stroke="#14803f"></path>
				<text class="text" x="114" y="114" text-anchor="middle" id="100%" stroke-width="1" font-family="Helvetica" font-size="48" font-weight="bold" fill="#14803f" dominant-baseline="middle" alignment-baseline="central" text-anchor="middle"></text>
                            </g>
                        </svg>
                    </div>
                </a>
                
            </div>
            
            <div class="second_row_flex">
                <div class='rating_of_user'>
                    <a href='#finish_quiz_window' id='finish_quiz_number'>
                        <p class='profile_main_name'>Пройдено викторин:</p>
                        <p class='some_number_of_user'>10</p>
                    </a>
                </div>

                <div class='rating_of_user'>
                    <a href='#finish_test_window' id='finish_test_number'>
                        <p class='profile_main_name'>Пройдено тестов:</p>
                        <p class='some_number_of_user'>10</p>
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

<div id="rating_window"> 
    
    <div class='modal-content'>
        <p class='modal_name'>Ваш рейтинг:</p>
        <p class='modal_value'>213</p>
        <p class='modal_desc'>Рейтинг указывает на ваше место среди всех игроков. Проходите больше викторин, тестов, создавайте свои задания и повышайте свой рейтинг среди игроков!</p>
    </div>
    
    <div  class="close-rating_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
    
</div>

<div id='quiz_window'>
    <div class='modal-content'>
        <p class='modal_name'>Количество пройденых викторин:</p>
        <p class='modal_value'>15</p>
        <p class='modal_desc'>Количество пройденых викторин влияет на ваш рейтинг среди игроков, а также на ваш уровень.</p>
    </div>
    
     <div  class="close-quiz_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
    
</div>

<div id='test_window'>
     <div class='modal-content'>
        <p class='modal_name'>Количество пройденых тестов:</p>
        <p class='modal_value'>10</p>
        <p class='modal_desc'>Количество пройденых тестов влияет на ваш рейтинг среди игроков, а также на ваш уровень.</p>
    </div>
    
     <div  class="close-test_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
</div>

<div id='level_window'>
   <div class='modal-content'>
        <p class='modal_name'>Ваш уровень:</p>
        <p class='modal_value'>100</p>
        
        <p class='modal_desc'>Ваш уровень повышается при прохождение новых викторин и тестов, так что решайте больше!</p>
    </div>
    
     <div  class="close-level_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
</div>

<div id='finish_quiz_window'>
    <div class='modal-content'>
        <p class='modal_name'>Среднее количество правильных ответов в викторине:</p>
        <p class='modal_value'>8/10</p>
        <p class='modal_desc'>Количество пройденых тестов влияет на ваш рейтинг среди игроков, а также на ваш уровень.</p>
    </div>
    
     <div  class="close-finish_quiz_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
</div>

<div id='finish_test_window'>
    <div class='modal-content'>
        <p class='modal_name'>Среднее количество правильных ответов в викторине:</p>
        <p class='modal_value'>8/10</p>
        <p class='modal_desc'>Количество пройденых тестов влияет на ваш рейтинг среди игроков, а также на ваш уровень.</p>
    </div>
    
    <div  class="close-finish_test_window close_window"> 
        
        <img src='images/close.svg' alt='close' class='close_modal'>
    </div>
</div>

<!--Скрипт для анимации окон-->
<script src='js/animatedModal.min.js'></script>
<script>
    
    //Анимация модульного окна
    var masiv = ['#rating','#quiz_number', '#test_number', '#level_number', '#finish_quiz_number', '#finish_test_number'];
    var modal = ['rating_window', 'quiz_window', 'test_window', 'level_window', 'finish_quiz_window', 'finish_test_window'];
    
    for(var i = 0; i < masiv.length; i++){
        $(masiv[i]).animatedModal({
        modalTarget: modal[i],
        animatedIn:'lightSpeedIn',
        animatedOut:' bounceOutDown',
        animationDuration: '0.7s',
        color:'#3498db'
        });   
    }
    
    //анимация прогресса уровня
   
	
	// VARS:
	var cicrle = document.querySelector(".circle");
	var circlePath = document.querySelector(".circle path");
	var pathLength = circlePath.getTotalLength();
	var pathLengthPx = pathLength  + "px";
	var text = document.querySelector(".circle text");
	var rangeField = document.querySelector(".range");
	
	// Set colours
	var strokeStartColour = "#333333";
	var strokeEndColour = "#ff9900";
	
	// MAIN:
	var radial = {
		initialisePath: function() {
			// This function resets the radial ready to animate
			
			//  First set the stroke dashoffset to be the length of the path length
			// Note: remove the negative string to reverse the direction of the animation
			circlePath.style.strokeDashoffset = "-" + pathLength;
			// Set the stroke dash array
			circlePath.style.strokeDasharray = pathLength  + ' ' + pathLength;

			// Reset the stroke colour
			circlePath.style.stroke = strokeStartColour;
		},

		animateClick: function() {	
			// This function listens for changes to the input field and
			// sets the value attribute to that value
			
			// Update the value of the field when values change
			var inputField = document.querySelector(".enterValue");
			
			inputField.addEventListener("input", function(){
				this.setAttribute("value", this.value);
			}, false);
			
			// Pass values from the input field on button press
			
			var input = document.querySelector(".enterValue").value;
			var lineLengthFromInput = pathLength - (pathLength / 100 * input);
			radial.animateSVG(lineLengthFromInput, input);
			
		},

		// Actually do the animation
		animateSVG: function(amount, inputValue) {
			// This function first resets the animation
			radial.initialisePath();
			// Then it tweens the path stoke dashoffset amount
			TweenLite.to(circlePath, 1.5, {'stroke-dashoffset': "-"+amount, stroke: strokeEndColour});
			// While simultaneously tweening the percentage value in Text from the counter value to the
			// value of the input (that the user sets with the slider)
			var counter = { var: 0 };
			TweenLite.to(counter, 1.5, {
				var: inputValue,
				onUpdate: function () {
					text.textContent = Math.ceil(counter.var) + "%";
				},
				ease:Circ.easeOut
			});
		}
	};
	// Kick everything off
	
	radial.initialisePath();
	radial.animateClick();
    
</script>

