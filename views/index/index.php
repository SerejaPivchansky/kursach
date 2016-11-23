<?php
include (SITE_PATH . '/views/parts/header.php');
?>

    <!--<section>
    <div class="container">
        <div class="sidebar">
            <h2>Категории</h2>
            <ul class="left_sidebar">
                <?php /*foreach ($categories as $catItem): ?>
                <li><a href="category/<?php echo $catItem['id']?>">
                        <?php echo $catItem['name']?>
                </a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
         <div class="content">
            <div class="features_items">
                <h2>Последние товары</h2>
                
                <?php foreach($latestProducts as $singleItem): ?>
                <div class="item">
                    <?php
                    if($singleItem['is_new'])
                        echo "<img alt='' src='template/images/new.png' class='new'/>";
                    ?>
                    <a target="_blank" href="/product/<?php echo $singleItem['id']?>">
                    <img width="268px" height="249px" alt="" src="<?php echo Product::getImage($singleItem['id']); ?>" />
                    </a>
                    <p class="item_price"><?php echo $singleItem['price'] ?>&nbspгрн</p>
                    <a target="_blank" href="/product/<?php echo $singleItem['id']?>">
                        <p class="item_name"><?php echo $singleItem['name']?></p>
                    </a>
                    <a href="#" class="to_cart" data-id="<?php echo $singleItem['id'];?>">
                        В корзину
                    </a>
                </div>
                <?php endforeach; */?>
            </div>
        </div> 
    </div>
</section>-->
    
    <section>
        <div class="container">
            <div class="content">
                <div class="features_items">
                    <h2>Пластиковые окна от производителя</h2>
                    <table style="width: 1000px; margin: auto;" border="0";>
                        <tbody>
                            <tr>
                            <td align="left" valign="center">Сделать верный выбор в многообразии представленных на рынке окон зачастую непросто, ведь следует учитывать все потребности. В данных примерах наши специалисты подобрали оптимальные сочетания всех комплектующих для ваших будущих окон.</td>
                            <td style="width: 200px;" align="left" valign="top">
                            <div class="roi_button"><a href="");">Получить консультацию</a></div>
                            <div class="cot_button"><a href="/pricing">Рассчитать окно</a></div>
                            </td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>Всё о наших окнах на примере самого популярного окна</h2>
                    <table style="width: 1000px; margin: auto;" border="0" cellspacing="5">
                    <tbody>
                    <tr>
                    <td style="width: 33%;" align="center"><img title="standart" src="<?php SITE_PATH?>/template/images/standart.jpg" alt="окна стандарт" width="170"><br></td>
                    <td style="width: 33%;" align="center"><img title="standart+" src="<?php SITE_PATH?>/template/images/standart_plus.jpg" alt="окна стандарт+" width="170"><br></td>
                    <td style="width: 33%;" align="center"><img title="premium" src="<?php SITE_PATH?>/template/images/premium.jpg" alt="окна премиум" width="170"><br></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><span>Экономичный вариант для дачников, для строителей и прорабов напрямую от производителя пластиковых окон в СПб. Пластиковые окна без подоконника, отделки откосов, доставки и монтажа.</span></p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><span>Оптимальный  вариант пластиковых окон для квартир. Теплое окно с хорошей шумоизоляцией, пластиковым  отечественным подоконником и откосами из гипсокартона.</span></p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top"><span>Идеальный  вариант для квартир и коттеджей. Лучшее соотношение цена-качество!  Отличная тепло- и шумоизоляция. Немецкий пластиковый подоконник и  высокопрочные пластиковые откосы.</span><img src="<?php SITE_PATH?>/template/images/rekomenduem1.jpg" alt="рекомендуем"></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="center">
                    <p><span style="font-size: x-large;"><strong><span style="font-family: trebuchet ms,geneva;">6 265 р.</span></strong></span></p>
                    <p>только окно</p>
                    </td>
                    <td style="width: 33%;" align="center">
                    <p><span style="font-size: x-large;"><strong><span style="font-family: trebuchet ms,geneva;">7 525 р.</span></strong></span></p>
                    <p>только окно</p>
                    </td>
                    <td style="width: 33%;" align="center">
                    <p><span style="font-size: x-large;"><strong><span style="font-family: trebuchet ms,geneva;">9 429 р.</span></strong></span></p>
                    <p>только окно</p>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="center"><span style="font-size: xx-large; color: #ff8c00;"><strong><span style="font-family: trebuchet ms,geneva;">—</span></strong></span> <br></td>
                    <td style="width: 33%;" align="center">
                    <p><span style="font-size: xx-large; color: #ffcc33;"><span style="color: #ff8c00;"><strong><span style="font-family: trebuchet ms,geneva;">15 567 р.</span></strong></span></span></p>
                    <p>«под ключ»</p>
                    </td>
                    <td style="width: 33%;" align="center">
                    <p><span style="font-size: xx-large; color: #ff9900;"><strong><span style="font-family: trebuchet ms,geneva;">18 204 р.</span></strong></span></p>
                    <p>«под ключ»</p>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center"><img src="<?php SITE_PATH?>/template/images/poloska.jpg" alt="" width="700"><br></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    <h2 style="text-align: center;">Что входит в стоимость</h2>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="center"><img title="Профиль Enwin Quadro 60" src="<?php SITE_PATH?>/template/images/quadro_60.jpg" alt="Профиль Enwin Quadro 60">&nbsp;<br></td>
                    <td style="width: 33%;" align="center"><img title="Enwin Omega 70" src="<?php SITE_PATH?>/template/images/omega_70.jpg" alt="Enwin Omega 70"><br></td>
                    <td style="width: 33%;" align="center"><img src="<?php SITE_PATH?>/template/images/favorit_spejs.jpg" alt="декенинг фаворит спейс"><br></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top"><strong><span style="font-size: medium;"><a href="">Enwin Waiz 60</a></span></strong><br><span>Четырёхкамерный  профиль с превосходными характеристиками и изящным дизайном  по    выгодной цене. Глянцевая поверхность,  скругленные кромки и хорошие  технические характеристики. <span>Разработан по австрийской технологии</span>.</span></td>
                    <td style="width: 33%;" align="left" valign="top"><span style="font-size: medium;"><strong><a href="">Enwin Waiz 70</a>&nbsp;</strong></span><br><span>Широкий  пятикамерный профиль с высокими техническими характеристиками и  современным внешним видом. Отличная  теплоизоляция (первый класс уровня  теплозащиты). Разработан по австрийской технологии.</span>&nbsp; <br></td>
                    <td style="width: 33%;" align="left" valign="top"><span style="font-size: medium;"><strong><a href="">Deceuninck Favorit<br>Space</a> </strong></span><br><span>Широкий  шестикамерный профиль, разработанный по немецкой технологии.   Высокая  степень теплоизоляции в сочетании с узкой видимой шириной и 3 контура уплотнения - ее   отличительные признаки. Позволяет снизить расходы на электроэнергию на  19%.</span><br></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="center"><strong><span style="color: #808080;"><em><span style="font-size: small;">Тепло- и шумоизоляция:</span></em></span></strong> <img style="vertical-align: text-top;" src="<?php SITE_PATH?>/template/images/3_107910741077107910761099_01.jpg" alt=""></td>
                    <td style="width: 33%;" align="center"><strong><span style="color: #808080;"><em><span style="font-size: small;">Тепло- и шумоизоляция:</span></em></span></strong> <img style="vertical-align: text-top;" src="<?php SITE_PATH?>/template/images/4_107910741077107910761099_2.jpg" alt=""></td>
                    <td style="width: 33%;" align="center"><strong><span style="color: #808080;"><em><span style="font-size: small;">Тепло- и шумоизоляция:</span></em></span></strong> <img style="vertical-align: text-top; float: left;" src="<?php SITE_PATH?>/template/images/5_10791074107710791076_2.jpg" alt=""></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center"><em><span style="font-size: small;">Это самые популярные профильные системы. Ознакомьтесь с <a href="">другими видами</a>.</span></em></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    <h2 style="text-align: center;">Стеклопакет</h2>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="center">&nbsp;<img title="teplopaket" src="<?php SITE_PATH?>/template/images/steklopaket.jpg" alt="теплопакет с энергосберегающим стеклом"></td>
                    <td style="width: 33%;" align="center">&nbsp;<img title="teplopaket" src="<?php SITE_PATH?>/template/images/steklopaket.jpg" alt="теплопакет с энергосберегающим стеклом"></td>
                    <td style="width: 33%;" align="center">&nbsp;<img title="teplopaket" src="<?php SITE_PATH?>/template/images/steklopaket.jpg" alt="теплопакет с энергосберегающим стеклом"></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><span style="font-size: medium;"><strong>Теплопакет с мультифункцией</strong></span></p>
                    <p>За счет специального нано-покрытия такой стеклопакет обеспечит идеальный микроклимат и повышенный уровень освещенности вашего дома.</p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><span style="font-size: medium;"><strong>Теплопакет с мультифункцией</strong></span></p>
                    <p>За счет специального нано-покрытия такой стеклопакет обеспечит идеальный микроклимат и повышенны й уровень освещенности вашего дома.&nbsp;</p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><span style="font-size: medium;"><strong>Теплопакет с мультифункцией</strong></span></p>
                    <p>За счет специального нано-покрытия такой стеклопакет обеспечит идеальный микроклимат и повышенны&nbsp;й уровень освещенности вашего дома.</p>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    <h2 style="text-align: center;">Фурнитура</h2>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><strong><span style="font-size: medium;"><a href="">Winkhaus proPilot</a></span></strong></p>
                    <p><span>Высококачественная фурнитура с широким функционалом и высокой степенью надежности. Оптимальное соотношение &nbsp;системе "цена-качество".</span></p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><span style="font-size: medium;"><strong><a href="">Winkhaus Activpilot</a></strong></span></p>
                    <p><span style="font-size: medium;"><strong><a href=""></a></strong></span>Новая  система, созданная на базе  проверенной фурнитуры AutoPilot. Соединила  все преимущества предыдущего поколения  фурнитуры и новые значительные  качественные изменения.<img src="<?php SITE_PATH?>/template/images/rekomenduem1.jpg" alt="рекомендуем"></p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <p><strong><span style="font-size: medium;"><a href="">Winkhaus Activpilot</a></span></strong></p>
                    <p><strong><span style="font-size: medium;"><a href=""></a></span></strong>Новая   система, созданная на базе  проверенной фурнитуры AutoPilot. Соединила   все преимущества предыдущего поколения  фурнитуры и новые значительные   качественные изменения.<img src="<?php SITE_PATH?>/template/images/rekomenduem1.jpg" alt="рекомендуем"></p>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    <h2 style="text-align: center;">Подоконник</h2>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="center"><img src="<?php SITE_PATH?>/template/images/bez_podokonnika.jpg" alt="без подоконника"></td>
                    <td style="width: 33%;" align="center"><img src="<?php SITE_PATH?>/template/images/podokonniki_4_cv.jpg" alt="подоконники витраж"></td>
                    <td style="width: 33%;" align="center"><img src="<?php SITE_PATH?>/template/images/podokonniki_2_cv2.jpg" alt="подоконники меллер"><br></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top"><strong><span style="font-size: medium;">Без подоконника</span></strong></td>
                    <td style="width: 33%;" align="left" valign="top"><span style="font-size: medium;"><strong><a href="">Подоконник Витраж</a></strong></span><br><span>Недорогой российский пластиковый подоконник. Долговечный, влагостойкий, прочный и стойкий к механическим повреждениям.</span></td>
                    <td style="width: 33%;" align="left" valign="top"><strong><span style="font-size: medium;"><a href="">Подоконник Moeller</a></span></strong> <br><span>Высококачественный пластиковый немецкий подоконник (ПВХ + древесная мука). Выдерживает большую нагрузку, не впитывает грязь.</span> <br></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    <h2 style="text-align: center;">Отделка откосов и водоотлив</h2>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="center"><span style="color: #000000; font-size: small;"><strong><span style="font-size: medium;"><span style="color: #808080; font-size: small;"><strong><span style="font-size: medium;"><img src="<?php SITE_PATH?>/template/images/otkosy3.jpg" alt="без откосов"></span></strong></span></span></strong></span></td>
                    <td style="width: 33%;" align="center"><span style="color: #808080; font-size: small;"><strong><span style="font-size: medium;"><span style="color: #808080; font-size: small;"><strong><span style="font-size: medium;"><img src="<?php SITE_PATH?>/template/images/otkosy2.jpg" alt="откосы из гипсокартона"></span></strong></span></span></strong></span></td>
                    <td style="width: 33%;" align="center"><span style="color: #808080; font-size: small;"><strong><span style="font-size: medium;"><span style="color: #808080; font-size: small;"><strong><span style="font-size: medium;"><img src="<?php SITE_PATH?>/template/images/otkosy1.jpg" alt="откосы из сендвич панелей"></span></strong></span></span></strong></span></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top"><span><strong><span style="font-size: medium;">Без откосов и водоотлива</span></strong><br></span></td>
                    <td style="width: 33%;" align="left" valign="top"><span style="font-size: medium;"><strong><a href="">Гипсокартон</a></strong></span><br><span>Утепленные откосы из гипсокартона под покраску. Легко моются. Со временем требуют реставрации. Снаружи металлический водоотлив.<br></span></td>
                    <td style="width: 33%;" align="left" valign="top"><span style="font-size: medium;"><strong><a href="">Сендвич-панели</a></strong></span><br><span>Утепленные  пластиковые откосы из сендвич-панелей. Не надо красить, легко мыть,  реставрации не требуют. Снаружи металлический водоотлив.<br></span></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    <h2 style="text-align: center;">Пакет&nbsp;«Без забот»</h2>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top">
                    <ul>
                    <li><a href=""><span style="font-size: small;"><span style="font-size: small;">Бесплатный замер</span></span></a><span style="font-size: small;"><span style="font-size: small;"> (в черте города)</span></span></li>
                    <li><a href=""><span style="font-size: small;"><span style="font-size: small;">Мобильный офис</span></span></a><span style="font-size: small;"><span style="font-size: small;"> (бесплатно)</span></span></li>
                    </ul>
                    <p>&nbsp;</p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <ul>
                    <li><a href=""><span style="font-size: small;"><span style="font-size: small;">Бесплатный замер</span></span></a><span style="font-size: small;"><span style="font-size: small;"> (в черте города)</span></span></li>
                    <li><a href=""><span style="font-size: small;"><span style="font-size: small;">Мобильный офис</span></span></a><span style="font-size: small;"><span style="font-size: small;"> (бесплатно)</span></span></li>
                    <li><span style="font-size: small;">Доставка</span></li>
                    <li><span style="font-size: small;">Монтаж</span></li>
                    </ul>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <ul>
                    <li><a href=""><span style="font-size: small;"><span style="font-size: small;">Бесплатный замер</span></span></a><span style="font-size: small;"><span style="font-size: small;"> (в черте города)</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small;"><a href="">Мобильный офис</a>&nbsp;</span></span><span style="font-size: small;"><span style="font-size: small;">(бесплатно)</span></span></li>
                    <li><span style="font-size: small;">Доставка</span></li>
                    <li><span style="font-size: small;">Монтаж</span></li>
                    </ul>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    <h2 style="text-align: center;">Пакет&nbsp;«Безупречное качество»</h2>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" align="left" valign="top">
                    <ul>
                    <li><span style="font-size: small;">Гарантия </span><span style="color: #ff6600;"><strong style="font-size: small;">1 год</strong></span></li>
                    <li><span style="font-size: small;">Срок службы </span><span style="font-size: small; color: #ff6600;"><strong>40 лет</strong></span></li>
                    </ul>
                    <p>&nbsp;</p>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <ul>
                    <li><a href=""><span style="font-size: small;"><span style="font-size: small;">Монтаж с паро- и гидроизоляцией</span></span></a></li>
                    <li><span style="font-size: small;">Герметизация монтажных швов</span></li>
                    <li><span style="font-size: small;">Поэтапный контроль качества</span></li>
                    <li><span style="font-size: small;">Гарантия </span><span style="color: #ff6600;"><strong style="font-size: small;">5 лет</strong></span></li>
                    <li><span style="font-size: small;">Срок службы </span><span style="font-size: small; color: #ff6600;"><strong>40 лет</strong></span></li>
                    </ul>
                    </td>
                    <td style="width: 33%;" align="left" valign="top">
                    <ul>
                    <li><a href=""><span style="font-size: small;"><span style="font-size: small;">Монтаж с паро- и гидроизоляцией</span></span></a></li>
                    <li><span style="font-size: small;">Герметизация монтажных швов</span></li>
                    <li><span style="font-size: small;">Поэтапный контроль качества</span></li>
                    <li><span style="font-size: small;">Гарантия </span><span style="color: #ff6600;"><strong style="font-size: small;">5 лет</strong></span></li>
                    <li><span style="font-size: small;">Срок службы </span><span style="font-size: small; color: #ff6600;"><strong>60 лет</strong></span></li>
                    </ul>
                    </td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center"><img src="<?php SITE_PATH?>/template/images/poloska.jpg" alt="" width="700"></td>
                    </tr>
                    <tr>
                    <td style="width: 33%;" colspan="3" align="center">
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>




<div class="appendix"></div>

<div class="col-1">
                    

                     

<?php
include (SITE_PATH . '/views/parts/footer.php');
?>
