<?php

require_once(SITE_PATH . "/views/parts/header.php");
?>

<div class="calc-wrap">
	<div class="subheader">
	       <h2>Калькулятор остекления</h2>
	    </div>
	<div class="steps-selector">
			<a href="javascript:;" class="step disabled">
				<div class="step-number">1<span>шаг</span></div>
				<div class="step-text">Выбор варианта<br>остекления</div>
			</a>
			<a href="javascript:;" class="step disabled">
				<div class="step-number">2<span>шаг</span></div>
				<div class="step-text">Выбор профиля</div>
			</a>
			<a href="javascript:;" class="step disabled">
				<div class="step-number">3<span>шаг</span></div>
				<div class="step-text">Выбор параметров окна</div>
			</a>
			<a href="javascript:;" class="step selected">
				<div class="step-number">4<span>шаг</span></div>
				<div class="step-text">Расчет вашего заказа</div>
			</a>
		</div>
	<div class="step-container">
		<h2 style="width: 600px">ПРИМЕРНАЯ СТОИМОСТЬ ВЫБРАННОГО ОКНА</h2>
		<div class="calc-results">
			<div class="window-type">
                <img src="<?php SITE_PATH?>/template/images/0/<?php echo $_POST['window-type']?>.jpg" data-type="s1" data-color="0" width="310" alt="">
            </div>
			<div class="results-text">
				<div class="window-name"><?php echo $windowDescribing?></div>
				<?php echo $povorotDescribing?>				<div class="price-note">
					<div class="price-note-title">Стоимость окна без учёта:</div>
					<ul>
						<li>Монтажа</li>
						<li>Доставки</li>
						<li>Отливов, откосов и подоконников</li>
					</ul>
				</div>
				<div class="card_block">
                     <div style="position:relative;font-size: 22px;"><b>РАССРОЧКА <span class="red">до 300 000 </span><div class="rub_icon"></div></b></div>    
                     <div style="font-size:16px;">Первоначальный взнос  <span class="red">от 10%</span></div>
                     <div style="margin-top:10px;margin-bottom:20px;"><img style="float:left;margin-left:-5px;padding-right:5px;" src="<?php SITE_PATH?>/template/images/card_img.jpg" alt=""><div style="font-size:12px;padding-top: 5px;">Принимаем к оплате карты VISA и MasterCard</div> </div>
                     <div class="clear"></div>
                     <div style="width:163px;margin:0 auto;"><a href="http://www.oknarosta.ru/eub_rass_6m.php" class="exact-price-button">Узнать о рассрочке</a></div>
                </div>
				<div class="right_right_block">
    				<div class="price-block">
    					<div class="store">
    						Цена в интернет-магазине
    						<div class="price-value"><?php echo $totalPrice?> <span class="rouble-sign">Р</span></div>
    					</div>
    					<!-- <div class="average">
    						Средняя цена по Москве
    						<div class="price-value">3 628 <span class="rouble-sign">Ð</span></div>
    					</div> -->
    				</div>
                    <div class="exact-price">
                        <a href="" class="fancybox fancybox-form fancybox.ajax exact-price-button">
                            <div class="free_zamer_img"></div>
                            <div class="free_zamer_text">Заказать<br> бесплатный замер</div>
                        </a>
                    </div>
                    <a href="http://www.oknarosta.ru/calc/?backwards=1" class="calculte-more"><span class="calculte-more-icon"></span>Расчитать ещё</a>
                    <div class="free_important_text">
                        <div class="exclamation_mark"></div>
                        <div class="important_text"><b><span class="red">*</span> цена действительна при общей площади остекления  <span class="red">от 20 м<sup>2</sup></span></b></div>
                    </div>
                </div>
                
				
			</div>
			<div class="clear"></div>
		</div>
	</div>
    <div style="clear: both"></div>

</div>

<?php
require_once(SITE_PATH . "/views/parts/footer.php");
?>