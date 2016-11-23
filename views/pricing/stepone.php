<?php
require_once(SITE_PATH . "/views/parts/header.php");
?>
	<div class="calc-wrap">
		<div class="subheader">
	       <h2>Калькулятор остекления</h2>
	    </div>
	    <div class="steps-selector">
			<a href="javascript:;" class="step selected">
				<div class="step-number">1<span>шаг</span></div>
				<div class="step-text">Выбор варианта<br>остекления</div>
			</a>
			<a href="javascript:;" class="step">
				<div class="step-number">2<span>шаг</span></div>
				<div class="step-text">Выбор профиля</div>
			</a>
			<a href="javascript:;" class="step">
				<div class="step-number">3<span>шаг</span></div>
				<div class="step-text">Выбор параметров окна</div>
			</a>
			<a href="javascript:;" class="step">
				<div class="step-number">4<span>шаг</span></div>
				<div class="step-text">Расчет вашего заказа</div>
			</a>
		</div>
		<div class="step-container">
	        <form action="/pricing" id="form" method="POST" novalidate="novalidate">
			<h2>Выберите свой вариант остекления</h2>
	        <div class="error"></div>
			<div class="glazings-selector ajustblock">
				<div class="glazing">
					<div class="glazing-title">
						<!-- <label><div id="step_plastic-styler" class="jq-radio checked" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="glazing" id="step_plastic" value="plastic" checked="checked" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>Пластиковые<br>Окна</label> -->
						<input type="radio" id="plastic" name="radio" value="plastic" class="radio" />
						<label for="plastic">Пластиковые<br>окна</label>
					</div>
					<label class="step_one_img" for="step_plastic"><img src="<?php SITE_PATH?>/template/images/window-plastic.png" alt=""></label>
				</div>
				
				<div class="glazing">
					<div class="glazing-title">
						<!-- <label><div id="step_wood-styler" class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" id="step_wood" value="wood" name="glazing" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>Деревянные<br>Окна</label> -->
						<input type="radio" id="wood" name="radio" value="wood" class="radio" />
						<label for="wood">Деревянные<br>Окна</label>
					</div>
					<label class="step_one_img" for="step_wood"><img src="<?php SITE_PATH?>/template/images/window-wood.png" alt=""></label>
				</div>
				
				<div class="glazing">
					<div class="glazing-title">
						<!-- <label><div id="step_balcony-styler" class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="glazing" id="step_balcony" value="balcony" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>Остекление<br>балкона</label> -->
						<input type="radio" id="balcony" name="radio" value="balcony" class="radio" />
						<label for="balcony">Остекление<br>балкона</label>
					</div>
					<label class="step_one_img" for="step_balcony"><img src="<?php SITE_PATH?>/template/images/window-balcony.png" alt=""></label>
				</div>
			</div>
			<input type="hidden" name="forward" value="Ñëåäóþùèé øàã">		<div class="next-prev-wrapper">
				<p class="next-prev-title">Добро пожаловать в оконный калькулятор</p>
				<input type="submit" name="forward" class="step-button next" value="Следующий шаг">		</div>
	        </form>
		</div>
		<div class="calc-note">
			<p class="redtext">
				С помощью нашего калькулятора Вы быстро и легко сможете рассчитать свой заказ!<br>Узнайте стоимость своих новых окон всего за 4 шага!<br>Успешных расчетов!
			</p>
		</div>
	</div>

<?php
include (SITE_PATH . '/views/parts/footer.php');
?>