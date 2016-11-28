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
			<a href="javascript:;" class="step selected">
				<div class="step-number">3<span>шаг</span></div>
				<div class="step-text">Выбор параметров окна</div>
			</a>
			<a href="javascript:;" class="step">
				<div class="step-number">4<span>шаг</span></div>
				<div class="step-text">Расчет вашего заказа</div>
			</a>
		</div>
        <div class="step-container">
            <form action="<?php SITE_PATH?>/pricing/stepfour" id="form" method="POST">
                <input type="hidden" name="glazing" value="plastic">
                <h2 class="aleft">ВЫБЕРИТЕ ТИП ОКОННОЙ КОНСТРУКЦИИ</h2>
                <div class="window-construction-selector plastic_section" style="height: 657px">
                    <div class="left-col">
                        <a href="" class="other-type">
                            <span>Нужен другой</span><br><span>Тип окна?</span>
                        </a>
                        <div class="construction-types plastic ajustblock">
                            <input type="hidden" value="" name="construct_type">
                            <div class="type-item selected">
                                <div class="img-container"><img src="<?php SITE_PATH?>/template/images/12.png"></div>
                                <div class="subitems ajustblock">
                                    <div class="subitem-img-container img-container" data-sizes="0" data-type="s1"><img src="<?php SITE_PATH?>/template/images/11.png"></div>
                                    <div class="subitem-img-container img-container selected" data-sizes="0" data-type="s2"><img src="<?php SITE_PATH?>/template/images/12.png"></div>
                                    <div class="subitems-arrow"></div>
                                    <div class="subitems-arrow-top"></div>
                                </div>
                            </div>
                            <div class="type-item">
                                <div class="img-container"><img src="<?php SITE_PATH?>/template/images/21.png"></div>
                                <div class="subitems ajustblock">
                                    <div class="subitem-img-container selected img-container" data-sizes="1" data-type="d1"><img src="<?php SITE_PATH?>/template/images/21.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="1" data-type="d2"><img src="<?php SITE_PATH?>/template/images/22.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="1" data-type="d3"><img src="<?php SITE_PATH?>/template/images/23.png"></div>
                                    <div class="subitems-arrow"></div>
                                    <div class="subitems-arrow-top"></div>
                                </div>
                            </div>
                            <div class="type-item">
                                <div class="img-container"><img src="<?php SITE_PATH?>/template/images/31.png"></div>
                                <div class="subitems ajustblock">
                                    <div class="subitem-img-container selected img-container" data-sizes="2" data-type="t1"><img src="<?php SITE_PATH?>/template/images/31.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="2" data-type="t2"><img src="<?php SITE_PATH?>/template/images/32.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="2" data-type="t3"><img src="<?php SITE_PATH?>/template/images/33.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="2" data-type="t4"><img src="<?php SITE_PATH?>/template/images/34.png"></div>
                                    <div class="subitems-arrow"></div>
                                    <div class="subitems-arrow-top"></div>
                                </div>
                            </div>
                            <div class="type-item">
                                <div class="img-container selected" data-sizes="3" data-type="b"><img src="<?php SITE_PATH?>/template/images/41.png"></div>
                            </div>
                            <input type="hidden" name="plastic-size" value="0">
                            <input type="hidden" name="window-type" value="s2">
                        </div>
                        <div class="window-sizes">
                            <table border="0" width="100%">
                                <tbody><tr>
                                    <td rowspan="2" class="sizes-height">
                                        <div id="sizes-height" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all ui-slider-float"><div class="ui-slider-range ui-widget-header ui-corner-all  ui-slider-range-max" style="height: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 0%;"><span class="ui-slider-tip">500</span></span></div>
                                        <div class="min">500 min</div>
                                        <div class="max">2600 max</div>
                                    </td>
                                    <td class="construction-image-wrapper">
                                        <img src="<?php SITE_PATH?>/template/images/s2.jpg" data-type="s2" data-color="0" width="310" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="sizes-width">
                                        <div id="sizes-width" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-slider-float"><div class="ui-slider-range ui-widget-header ui-corner-all  ui-slider-range-max" style="width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><span class="ui-slider-tip">400</span></span></div>
                                        <div class="min">400 min</div>
                                        <div class="max">1200 max</div>
                                    </td>
                                </tr>
                            </tbody></table>
                            <div class="sizes-inputs">
                                <input type="text" name="window-width" value="2000 ìì" id="size-width">
                                <span class="multiply-sign">X</span>
                                <input type="text" name="window-height" value="1750 ìì" id="size-height">
                            </div>
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="property-block">
                            <div class="construction-types-title">
                                <span class="faq">?</span>
                                <div class="faq-text">
                                    Все ПВХ-системы образованы тонкостенными полыми профилями (основными и дополнительными), имеющими несколько камер, заполненных воздухом или теплоизоляционным материалом с низким коэффициентом передачи. С увеличением числа камер и ширины профиля растет значение термического сопротивления профиля и его жесткость. Толщина стенок профиля, в зависимости от расположения, составляет: около 1,5 мм (перегородки), около 3 мм (наружный).
                                </div>
                                Профильная система VEKA
                            </div>
                            <div class="profile-system-selector ajustblock">
                                <div class="profile-system-item selected" id="euroline"><span>Euroline</span></div>
                                                                <div class="profile-system-item" id="softline"><span>Softline</span></div>
                                <div class="profile-system-item" id="softline82"><span>Softline82</span></div>
                                <input type="hidden" name="profile" value="euroline">
                            </div>
                        </div>
                        <div class="property-block povorot" style="display: block;">
                            <div class="construction-types-title">
                                <span class="faq">?</span>
                                <div class="faq-text">
                                    
                                    Поворотно-откидная фурнитура – это система механизмов, обеспечивающая простым вращением оконной ручки несколько вариантов открывания створки окна:
                                    
                                    <br><br>
                                    
                                    1) поворот створки относительно вертикальной оси (как на поворотной фурнитуре)
                                    
                                    <br>
                                    
                                    2) откидывание створки относительно горизонтальной оси (как фрамуга)
                                    
                                    <br>
                                    
                                    3) откидывание створки относительно горизонтальной оси в режиме микропроветривания (микровентиляция)
                                
                                </div>
                                
                                Поворотно-откидной механизм открывания окна
                            
                            </div>
                            <div class="yes-no-button no">
                                <label class="no"><input type="radio" name="povorot" value="N" checked="checked">Нет</label>
                                <label class="yes"><input type="radio" name="povorot" value="Y">Да</label>
                                <div class="mover"></div>
                            </div>
                        </div>
                        <!-- <div class="property-block plastic">
                            <div class="construction-types-title">
                                <span class="faq">?</span>
                                <div class="faq-text">
                                    
                                    Ламинация профиля ПВХ – это процесс нанесения на его прогрунтованную поверхность декоративной высокопрочной акриловой пленки с использованием полиуретанового плавкого клея и ламинирующих машин с валиками.
                                    
                                    <br><br>
                                    
                                    Пленка очень прочно соединяется с профилем, поверхность получается идеально ровная. Ламинацию можно производить и с одной, и с двух сторон. Кроме того, ламинация может производиться как с применением белого профиля, так и цветного (технология ламинирования профиля в массе). Ламинация ПВХ-профиля дает широкий выбор расцветок поверхности пластиковых или алюминиевых профилей: от однотонных цветов и декоров под дерево до разнообразного тиснения.
                                
                                </div>
                                Ламинация
                            </div>
                            <div class="yes-no-button lamination no">
                                <label class="no"><input type="radio" value="N" name="plastic-lamination" checked="checked">Нет</label>
                                <label class="yes"><input type="radio" value="Y" name="plastic-lamination">Да</label>
                                <div class="mover"></div>
                            </div>
                            <div class="lamination-block" style="display: none;">
                                <div class="lamination-selector fr inner">
                                    <label class="inner"><div class="jq-radio checked" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" value="inner" name="plastic-lamination-type" checked="checked" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div><span>Внутренняя</span></label>
                                    <label class="outer"><div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" value="outer" name="plastic-lamination-type" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div><span>Наружная</span></label>
                                    <label class="double"><div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" value="double" name="plastic-lamination-type" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div><span>Двусторонняя</span></label>
                                    <div class="mover" style="width: 103px;"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="material-items-selector plastic">
                                    <div class="material-item  selected" title="Ñâåòëûé äóá">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_1.png" width="60" height="60" alt="">
                                        <div class="jq-radio checked" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="1" checked="checked" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ìàõàãîí">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_2.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="2" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Çîëîòîé äóá">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_3.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="3" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ñâåòëî-êðàñíûé">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_4.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="4" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Òåìíî-êðàñíûé">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_5.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="5" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Íàòóðàëüíûé äóá">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_6.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="6" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ðóñòèêàëüíûé äóá">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_7.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="7" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Äóá">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_8.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="8" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Òåìíûé äóá">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_9.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="9" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Èçóìðóäíî-çåëåíûé">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_10.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="10" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ñåðûé">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_11.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="11" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Øîêîëàäíî-êîðè÷íåâûé">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_12.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="12" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ñòàëüíîé ñèíèé">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_13.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="13" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Áðèëëèàíò ñèíèé">
                                        <img src="<?php SITE_PATH?>/template/images/lamination_14.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="14" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <input type="hidden" name="plastic-lamination-color-name" value="Ñâåòëûé äóá">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="next-prev-wrapper">
                    <a class="step-button prev" href="http://www.oknarosta.ru/calc/?backwards=true">Предыдущий шаг</a>
                    <input type="submit" name="forward" class="step-button next" value="Следующий шаг">                </div>
            </form>
        </div>

    </div>


<?php 
require_once(SITE_PATH . "/views/parts/footer.php");
?>