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
            <form action="http://www.oknarosta.ru/calc/" id="form" method="POST">
                <input type="hidden" name="glazing" value="plastic">
                <h2 class="aleft">Âûáåðèòå òèï îêîííîé êîíñòðóêöèè</h2>
                <div class="window-construction-selector plastic_section">
                    <div class="left-col">
                        <a href="http://www.oknarosta.ru/calc/unique.php" class="other-type">
                            <span>Íóæåí äðóãîé</span><br><span>òèï îêíà?</span>
                        </a>
                        <div class="construction-types plastic ajustblock">
                            <input type="hidden" value="" name="construct_type">
                            <div class="type-item selected">
                                <div class="img-container"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/12.png"></div>
                                <div class="subitems ajustblock">
                                    <div class="subitem-img-container img-container" data-sizes="0" data-type="s1"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/11.png"></div>
                                    <div class="subitem-img-container img-container selected" data-sizes="0" data-type="s2"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/12.png"></div>
                                    <div class="subitems-arrow"></div>
                                    <div class="subitems-arrow-top"></div>
                                </div>
                            </div>
                            <div class="type-item">
                                <div class="img-container"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/21.png"></div>
                                <div class="subitems ajustblock">
                                    <div class="subitem-img-container selected img-container" data-sizes="1" data-type="d1"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/21.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="1" data-type="d2"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/22.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="1" data-type="d3"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/23.png"></div>
                                    <div class="subitems-arrow"></div>
                                    <div class="subitems-arrow-top"></div>
                                </div>
                            </div>
                            <div class="type-item">
                                <div class="img-container"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/31.png"></div>
                                <div class="subitems ajustblock">
                                    <div class="subitem-img-container selected img-container" data-sizes="2" data-type="t1"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/31.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="2" data-type="t2"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/32.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="2" data-type="t3"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/33.png"></div>
                                    <div class="subitem-img-container img-container" data-sizes="2" data-type="t4"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/34.png"></div>
                                    <div class="subitems-arrow"></div>
                                    <div class="subitems-arrow-top"></div>
                                </div>
                            </div>
                            <div class="type-item">
                                <div class="img-container selected" data-sizes="3" data-type="b"><img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/41.png"></div>
                            </div>
                            <input type="hidden" name="plastic-size" value="0">
                            <input type="hidden" name="plastic-type" value="s2">
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
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/s2.jpg" data-type="s2" data-color="0" width="310" alt="">
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
                                <input type="text" name="plastic-width" value="2000 ìì" id="size-width">
                                <span class="multiply-sign">Õ</span>
                                <input type="text" name="plastic-height" value="1750 ìì" id="size-height">
                            </div>
                        </div>
                    </div>
                    <div class="right-col">
                        <div class="property-block">
                            <div class="construction-types-title">
                                <span class="faq">?</span>
                                <div class="faq-text">
                                    Âñå ÏÂÕ-ñèñòåìû îáðàçîâàíû òîíêîñòåííûìè ïîëûìè ïðîôèëÿìè (îñíîâíûìè è äîïîëíèòåëüíûìè), èìåþùèìè íåñêîëüêî êàìåð, çàïîëíåííûõ âîçäóõîì èëè òåïëîèçîëÿöèîííûì ìàòåðèàëîì ñ íèçêèì êîýôôèöèåíòîì ïåðåäà÷è. Ñ óâåëè÷åíèåì ÷èñëà êàìåð è øèðèíû ïðîôèëÿ ðàñòåò çíà÷åíèå òåðìè÷åñêîãî ñîïðîòèâëåíèÿ ïðîôèëÿ è åãî æåñòêîñòü. Òîëùèíà ñòåíîê ïðîôèëÿ, â çàâèñèìîñòè îò ðàñïîëîæåíèÿ, ñîñòàâëÿåò: îêîëî 1,5 ìì (ïåðåãîðîäêè), îêîëî 3 ìì (íàðóæíûé).
                                </div>
                                Ïðîôèëüíàÿ ñèñòåìà VEKA
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
                                    Ïîâîðîòíî-îòêèäíàÿ ôóðíèòóðà – ýòî ñèñòåìà ìåõàíèçìîâ, îáåñïå÷èâàþùàÿ ïðîñòûì âðàùåíèåì îêîííîé ðó÷êè íåñêîëüêî âàðèàíòîâ îòêðûâàíèÿ ñòâîðêè îêíà:
                                    <br><br>
                                    1) ïîâîðîò ñòâîðêè îòíîñèòåëüíî âåðòèêàëüíîé îñè (êàê íà ïîâîðîòíîé ôóðíèòóðå)
                                    <br>
                                    2) îòêèäûâàíèå ñòâîðêè îòíîñèòåëüíî ãîðèçîíòàëüíîé îñè (êàê ôðàìóãà)
                                    <br>
                                    3) îòêèäûâàíèå ñòâîðêè îòíîñèòåëüíî ãîðèçîíòàëüíîé îñè â ðåæèìå ìèêðîïðîâåòðèâàíèÿ (ìèêðîâåíòèëÿöèÿ)
                                </div>
                                Ïîâîðîòíî-îòêèäíîé ìåõàíèçì îòêðûâàíèÿ îêíà
                            </div>
                            <div class="yes-no-button no">
                                <label class="no"><input type="radio" name="plastic-povorot" value="N" checked="checked">Íåò</label>
                                <label class="yes"><input type="radio" name="plastic-povorot" value="Y">Äà</label>
                                <div class="mover"></div>
                            </div>
                        </div>
                        <div class="property-block plastic">
                            <div class="construction-types-title">
                                <span class="faq">?</span>
                                <div class="faq-text">
                                    Ëàìèíàöèÿ ïðîôèëÿ ÏÂÕ – ýòî ïðîöåññ íàíåñåíèÿ íà åãî ïðîãðóíòîâàííóþ ïîâåðõíîñòü äåêîðàòèâíîé âûñîêîïðî÷íîé àêðèëîâîé ïëåíêè ñ èñïîëüçîâàíèåì ïîëèóðåòàíîâîãî ïëàâêîãî êëåÿ è ëàìèíèðóþùèõ ìàøèí ñ âàëèêàìè.
                                    <br><br>
                                    Ïëåíêà î÷åíü ïðî÷íî ñîåäèíÿåòñÿ ñ ïðîôèëåì, ïîâåðõíîñòü ïîëó÷àåòñÿ èäåàëüíî ðîâíàÿ. Ëàìèíàöèþ ìîæíî ïðîèçâîäèòü è ñ îäíîé, è ñ äâóõ ñòîðîí. Êðîìå òîãî, ëàìèíàöèÿ ìîæåò ïðîèçâîäèòüñÿ êàê ñ ïðèìåíåíèåì áåëîãî ïðîôèëÿ, òàê è öâåòíîãî (òåõíîëîãèÿ ëàìèíèðîâàíèÿ ïðîôèëÿ â ìàññå). Ëàìèíàöèÿ ÏÂÕ-ïðîôèëÿ äàåò øèðîêèé âûáîð ðàñöâåòîê ïîâåðõíîñòè ïëàñòèêîâûõ èëè àëþìèíèåâûõ ïðîôèëåé: îò îäíîòîííûõ öâåòîâ è äåêîðîâ ïîä äåðåâî äî ðàçíîîáðàçíîãî òèñíåíèÿ.
                                </div>
                                Ëàìèíàöèÿ
                            </div>
                            <div class="yes-no-button lamination no">
                                <label class="no"><input type="radio" value="N" name="plastic-lamination" checked="checked">Íåò</label>
                                <label class="yes"><input type="radio" value="Y" name="plastic-lamination">Äà</label>
                                <div class="mover"></div>
                            </div>
                            <div class="lamination-block" style="display: none;">
                                <div class="lamination-selector fr inner">
                                    <label class="inner"><div class="jq-radio checked" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" value="inner" name="plastic-lamination-type" checked="checked" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div><span>Âíóòðåííÿÿ</span></label>
                                    <label class="outer"><div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" value="outer" name="plastic-lamination-type" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div><span>Íàðóæíàÿ</span></label>
                                    <label class="double"><div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" value="double" name="plastic-lamination-type" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div><span>Äâóñòîðîííÿÿ</span></label>
                                    <div class="mover" style="width: 103px;"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="material-items-selector plastic">
                                    <div class="material-item  selected" title="Ñâåòëûé äóá">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_1.png" width="60" height="60" alt="">
                                        <div class="jq-radio checked" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="1" checked="checked" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ìàõàãîí">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_2.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="2" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Çîëîòîé äóá">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_3.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="3" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ñâåòëî-êðàñíûé">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_4.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="4" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Òåìíî-êðàñíûé">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_5.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="5" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Íàòóðàëüíûé äóá">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_6.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="6" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ðóñòèêàëüíûé äóá">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_7.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="7" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Äóá">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_8.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="8" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Òåìíûé äóá">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_9.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="9" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Èçóìðóäíî-çåëåíûé">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_10.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="10" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ñåðûé">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_11.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="11" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Øîêîëàäíî-êîðè÷íåâûé">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_12.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="12" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Ñòàëüíîé ñèíèé">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_13.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="13" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <div class="material-item " title="Áðèëëèàíò ñèíèé">
                                        <img src="./Êàëüêóëÿòîð îñòåêëåíèÿ _ âûáîð òèïà îêîííîé êîíñòðóêöèè_files/lamination_14.png" width="60" height="60" alt="">
                                        <div class="jq-radio" unselectable="on" style="user-select: none; display: inline-block; position: relative;"><input type="radio" name="plastic-lamination-color" value="14" style="position: absolute; z-index: -1; opacity: 0; margin: 0px; padding: 0px;"><div class="jq-radio__div"></div></div>
                                    </div>
                                    <input type="hidden" name="plastic-lamination-color-name" value="Ñâåòëûé äóá">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="next-prev-wrapper">
                    <a class="step-button prev" href="http://www.oknarosta.ru/calc/?backwards=true">Ïðåäûäóùèé øàã</a>
                    <input type="submit" name="forward" class="step-button next" value="Ñëåäóþùèé øàã">                </div>
            </form>
        </div>

    </div>