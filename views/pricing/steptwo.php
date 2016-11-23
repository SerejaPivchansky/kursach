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
			<a href="javascript:;" class="step selected">
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
		<div>
			<div style="float: left; margin-right: 35px;">
				<img src="<?php SITE_PATH?>/template/images/veka-windows.png" width="227" height="191" title="Îêíà VEKA">
			</div>
			<div class="medium-title">ПРЕИМУЩЕСТВА ОКОН ИЗ ПВХ</div>
			<p style="font-size: 16px; line-height: 24px;">
				Высокая долговечность — срок службы ПВХ-окон может достигать 50 лет.<br>
				Отличная сопротивляемость воздействию окружающей среды. Идеальная<br> 
				герметичность — окна ПВХ не просто экономят тепло, а сохраняют<br>
				температурный комфорт внутри помещения. Окна из ПВХ при возгорании<br> 
				сразу же затухают, не образуя очага пожара. ПВХ-окна не нуждаются в покраске.
			</p>
			<div style="clear: both;"></div>
		</div>
            <div class="error"></div>
		<div class="plastic-windows-profiles-selector ajustblock">
			<label class="plastic-windows-profile" for="profile_euroline">
			<div class="veka_logo_img"></div>
				<p class="profile-title">Euroline</p>
				<img src="<?php SITE_PATH?>/template/images/window_budget.jpg" width="147" title="Ïðîôèëü Euroline" alt="">
				<p class="profile-description">
                    Ширина профиля 58 мм.<br>Три воздушные камеры в профиле. 2-х камерный стеклопакет 32 мм. 
				</p>
				<label>
					<div id="profile_euroline-styler" class="jq-radio checked" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" id="profile_euroline" name="profile" value="euroline" checked="checked" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
					<span>Выбрать</span>
				</label>
			
			</label>
            			<label class="plastic-windows-profile" for="profile_softline">
			<div class="veka_logo_img"></div>
				<p class="profile-title">Softline</p>
				<img src="<?php SITE_PATH?>/template/images/window_comfort.jpg" width="147" title="Ïðîôèëü Softline" alt="">
				<p class="profile-description">
                    Øèðèíà ïðîôèëÿ 70 ìì.<br>Ïÿòü âîçäóøíûõ êàìåð â ïðîôèëå. 2-õ êàìåðíûé ñòåêëîïàêåò 36 ìì.
				</p>
				<label>
					<div id="profile_softline-styler" class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" id="profile_softline" name="profile" value="softline" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
					<span>Âûáðàòü</span>
				</label>
			
			</label>
			<label class="plastic-windows-profile" for="profile_softline82">
			<div class="veka_logo_img"></div>
				<p class="profile-title">Softline82</p>
				<img src="<?php SITE_PATH?>/template/images/window_premium.jpg" width="147" title="Ïðîôèëü Softline82" alt="">
				<p class="profile-description">
                    Øèðèíà ïðîôèëÿ 82 ìì.<br>Ñåìü âîçäóøíûõ êàìåð â ïðîôèëå. 2-õ êàìåðíûé ñòåêëîïàêåò 36 ìì.
				</p>
				<label>
					<div id="profile_softline82-styler" class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" id="profile_softline82" name="profile" value="softline82" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
					<span>Âûáðàòü</span>
				</label>
			
			</label>
            <span style="display: inline-block; width: 100%"></span>
		</div>
		<input type="hidden" name="forward" value="Ñëåäóþùèé øàã">
		<div class="next-prev-wrapper">
            <a class="step-button prev" href="http://www.oknarosta.ru/calc/?backwards=true">Ïðåäûäóùèé øàã</a>
            <input type="submit" name="forward" class="step-button next" value="Ñëåäóþùèé øàã">		</div>
        </form>
	</div>
	</div>
</div>

<?php
include (SITE_PATH . '/views/parts/footer.php');
?>