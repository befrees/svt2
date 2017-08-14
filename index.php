<?php 
require_once('src/formHandler.php'); 
global $mailSendInfo;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>svyatobor</title>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XJHXTZ');</script>
<!-- End Google Tag Manager -->

    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="vendor/fancybox/jquery.fancybox.css">
    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

 <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body onload="showPopup(<?php if(mailSendInfo()) {echo '\'thx\', '. $_SESSION['type_mail'];} ?>)" data-i="<?= mailSendInfo() ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XJHXTZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header id="header">
        <div class="wrap">
            <div class="part left">
                <a href="http://svyatobor.kiev.ua" target="_blank" class="our_link"><span class="sprite logo" id="logo"></span></a>
                <span id="istat_0" class="sprite phone"><a href="tel:0442251225" target="_blank"><span>(044) 2251225</span></a></span>
                <div id="menuBTN" class="sprite menuBTN"></div>
            </div>
            <div class="part right">
                <?php require('src/menu.php'); ?>
            <a href="http://ready.svyatobor.kiev.ua/" class="menu-logo" target="_blank"><img src="img/1ochered_white.png?i=logo-menu" alt="" class=""></a>
            </div>
            <div class="clean"></div>           
        </div>      
    </header>

    <section id="intro">
    <div class="wrap wrap-logo-intro"><a href="http://ready.svyatobor.kiev.ua/" class="intro-logo" target="_blank"><img src="img/1ochered_white.png" alt="" class="" target="_blank"></a></div>
        <h1><span class="text-right">жилой комплекс</span>святобор</h1>
    
        </div>
        <div class="sign">
            <div id="watchDown" class="sprite arrow-blue-bg">
                <div class="sprite arrowDown"></div>
            </div>
            <div class="title">
                <span>Открыты продажи 2 очереди ЖК Святобор.</span>
                <br><b>На старте дешевле! </b>
            </div>
            <div id="button1" class="btn signOnBTN callPopupBtn" popup="require_watch"  data-toggle="modal" data-target="#call-modal">Заказать обратный звонок</div>
        </div>
    </section>

    <section id="benefits">
        <div class="wrap">
            <div class="box_grid">
                <div class="part">
                    <div class="item left _b1">
                        <div class="title">Надежный<br>застройщик</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-right"></div>
                        <div class="hover">
                            <div class="content">
                                <p>Первая очередь ЖК «Святобор» уже введена в эксплуатацию, дом находится в активной
                                стадии заселения и заходов на ремонт.</p>
                                <p>Вторая очередь жилого комплекса является новым этапом развития проекта и
                                сконцентрировала в себе максимум преимуществ и возможностей для комфортной
                                жизни.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item right _b2">
                        <div class="title">Дом<br>без машин</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-right"></div>
                        <div class="hover">
                            <div class="content">
                                <p>На охраняемой закрытой территории ЖК «Святобор» будет реализована концепция «двор
                                без машин» - это уникальный и ценный для Киева формат организации внутридомового
                                пространства.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item left _b5">
                        <div class="title">Недалеко<br>от метро</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-right"></div>
                        <div class="hover">
                            <div class="content">
                                <p>Отличная транспортная развязка:<br> 
                                - 10 минут пешком до станций метро «Святошино» и «Житомирская»; <br>
                                - 3 минуты пешком до главной транспортной артерии Киева - проспекта Победы;<br>
                                - 15 минут до Крещатика на автомобиле.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item _b6">
                        <div class="title" style="bottom: 5px;">Лучшая новостройка <br> Украины комфорт-класса</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-right"></div>
                        <div class="hover">
                            <div class="content"><p>В 2016 году ЖК «Святобор» официально победил в номинации «Лучшая новостройка Украины комфорт-класса».</p></div>
                        </div>
                    </div>
                </div>
                <div class="part">
                    <div class="item _b3">
                        <div class="title">Закрытая<br>территория</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-right"></div>
                        <div class="hover">
                            <div class="content">
                                <p>Жилой комплекс «Святобор» расположен в одном из самых живописных и зеленых микрорайонов Святошино. </p>
                                <p>На охраняемой закрытой территории расположены современные спортивные и детские площадки, места для отдыха, зеленые зоны, прогулочные аллеи.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item _b4">
                        <div class="title">Рассрочка<br>на 3 года</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-left"></div>
                        <div class="hover">
                            <div class="content">
                                <p>ГОРЯЧЕЕ ПРЕДЛОЖЕНИЕ ЛЕТА!<br>
                                    Только до 31 августа 2017 действует уникальное ценовое предложение: успейте забронировать квартиру во 2й очереди ЖК «Святобор» по лучшей цене и получить РАССРОЧКУ 0% НА 3 ГОДА.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="item _b7">
                        <div class="title">подземный<br>автопаркинг</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-right"></div>
                        <div class="hover">
                            <div class="content">
                                <p>На территории жилого комплекса действует стационарный (внутридомовой) и гостевой паркинг, расположенный с внешней стороны жилого комплекса, по периметру жилых домов.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item _b8">
                        <div class="title">Удобные<br>планировки</div>
                        <div class="thumb"></div>
                        <div class="sprite arrow arrow-left"></div>
                        <div class="hover">
                            <div class="content">
                                <p>Вторая очередь жилого комплекса представляет новые форматы планировок квартир: </p>
                                <ul>
                                    <li>1-комнатная - от 39 м²</li>
                                    <li>2-комнатные -  от 56 м²</li>
                                    <li>3-комнатные – от 77 м²</li>
                                </ul>
                                <p>Инвесторам, которые ценят роскошь и эффектные панорамы города, доступны видовые двухуровневые апартаменты на верхних этажах.</p>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            <div class="clean"></div>
            <div class="benefits-entry clearfix">
                <div class="h2">Условия инвестирования!</div>
                <div class="h3">Горячее предложение лета!</div>
                <div class="_text flexbox">
                    <p>Только до 31 августа 2017 действует уникальное ценовое предложение: успейте забронировать квартиру во 2й очереди ЖК «Святобор» по лучшей цене и получить РАССРОЧКУ 0% НА 3 ГОДА, ВЗНОС ОТ 20%. Первая очередь ЖК «Святобор» уже введена в эксплуатацию, дом находится в активной стадии заселения и заходов на ремонт.</p>
                    <p>На охраняемой закрытой территории ЖК «Святобор» будет реализована концепция «двор без машин» - это уникальный и ценный для Киева формат организации внутридомового пространства. </p>
                    <p>Жилой комплекс «Святобор» расположен в одном из самых живописных и зеленых микрорайонов Святошино: чистый воздух, вековые сосны, ухоженные скверы, уютное и тихое место, защищенное от суеты и шума столичных магистралей. </p>
                </div>
                <button type="button" class="btn btn-open-text-benefits" data-toggle="modal" data-target="#descModal">Подробнее</button>
            </div>
        </div>
    </section>
    <section id="docs" class="block-docs text-center">
        <div class="wrap">
            <div class="title-caption">Ознакомиться с разрешительной документацией</div>
            <div class="sub-caption">На старте дешевле! </div>
            <div class="btn-wrap"><button class="btn btn-default btn-open-docs" data-toggle="modal" data-target="#docs-modal">Ознакомиться</button></div>
        </div>
    </section>
    <section id="layouts">
        <div class="part _level-1">
            <div class="wrap">
                <div class="flex container-filter-title">
                    <h2 class="ttl-plan"><span>Планировки</span><br><span>одноуровневые</span></h2>
                    <div class="filter-rooms">
                        <div class="_ttl">Выбрать количество комнат</div>
                        <div class="checkboxes">
                            <span class="chk"><input type="checkbox" name="" class="ckb-l1" value="r1-1" id="room-1-1"><label for="room-1-1">1-комнатные</label></span>
                            <span class="chk"><input type="checkbox" name="" class="ckb-l1" value="r1-2" id="room-1-2"><label for="room-1-2">2-комнатные</label></span>
                            <span class="chk"><input type="checkbox" name="" class="ckb-l1" value="r1-3" id="room-1-3"><label for="room-1-3">3-комнатные</label></span>
                        </div>
                    </div>
                </div>
                
                <div class="slider_wrap">
                    <div class="sprite arrow-left"></div>
                    <ul id="layouts_tier-1" class="slider">
                        <li class="r1-1"><img src="img/l1/1k-2-floor-33.44.jpg.png" class="layout layout-one r1-1" data-room="1" data-area="33/44" area="3.54" factor="0.5"></li>
                        <li class="r1-1"><img src="img/l1/1k-38.41.jpg.png" class="layout layout-one " data-room="1" data-area="38.41" area="3.54" factor="0.5"></li>
                        <li class="r1-1"><img src="img/l1/1k-38.76.jpg.png" class="layout layout-one " data-room="1" data-area="38.76" area="3.54" factor="0.5"></li>
                        <li class="r1-1"><img src="img/l1/1k-39.19.jpg.png" class="layout layout-one " data-room="1" data-area="39.19" area="3.54" factor="0.5"></li>
                        <li class="r1-1"><img src="img/l1/1k-40.27.jpg.png" class="layout layout-one " data-room="1" data-area="40.27" area="3.54" factor="0.5"></li>
                        <li class="r1-1"><img src="img/l1/1k-41.00.jpg.png" class="layout layout-one " data-room="1" data-area="41.00" area="3.54" factor="0.5"></li>
                        <li class="r1-1"><img src="img/l1/1k-42.19.jpg.png" class="layout layout-one " data-room="1" data-area="42.19" area="3.54" factor="0.5"></li>
                        <li class="r1-2"><img src="img/l1/2k-60.10.jpg.png" class="layout layout-one " data-room="2" data-area="60.10" area="3.54" factor="0.5"></li>
                        <li class="r1-2"><img src="img/l1/2k-61.89.jpg.png" class="layout layout-one " data-room="2" data-area="61.89" area="3.54" factor="0.5"></li>
                        <li class="r1-2"><img src="img/l1/2k-61.94.jpg.png" class="layout layout-one" data-room="2" data-area="61.84" area="3.54" factor="0.5"></li>
                        <li class="r1-2"><img src="img/l1/2k-62.50.jpg.png" class="layout layout-one" data-room="2" data-area="62.50" area="3.54" factor="0.5"></li>
                        <li class="r1-2"><img src="img/l1/2k-67.63.jpg.png" class="layout layout-one" data-room="2" data-area="67.63" area="3.54" factor="0.5"></li>
                        <li class="r1-3"><img src="img/l1/3k-78.10.jpg.png" class="layout layout-one" data-room="3" data-area="78.10" area="3.54" factor="0.5"></li>
                        <li class="r1-3"><img src="img/l1/3k-78.48.jpg.png" class="layout layout-one" data-room="3" data-area="78.48" area="3.54" factor="0.5"></li>
                        <li class="r1-3"><img src="img/l1/3k-85.67.jpg.png" class="layout layout-one" data-room="3" data-area="85.67" area="3.54" factor="0.5"></li>
                        <li class="r1-3"><img src="img/l1/3k-8897.jpg.png" class="layout layout-one" data-room="3" data-area="88.97" area="3.54" factor="0.5"></li>
                        <li class="r1-3"><img src="img/l1/3k-95.95.jpg.png" class="layout layout-one" data-room="3" data-area="95.95" area="3.54" factor="0.5"></li>
                    </ul>
                    <div class="sprite arrow-right"></div>
                </div>
                <div class="panel">
                    <div id="button222" class="btn signOnBTN callPopupBtn" popup="require_watch" data-toggle="modal" data-target="#zapis-modal">Записаться на просмотр</div>
                </div>
            </div>
        </div>
        <?php /* ?>
        <div class="part _level-2">
            <div class="wrap">
                <h2><span>Планировки</span><br><span>двухуровневые</span></h2>
                <div class="slider_wrap">
                    <div class="sprite arrow-left"></div>
                    <ul id="layouts_tier-2" class="slider">
                        <li><img src="img/layouts/2-tier/app1_69_32_1.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app1_69_32_2.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app2_69_16_1.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app2_69_16_2.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app3_79_32_1.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app3_79_32_2.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app4_104_49_1.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app4_104_49_2.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app5_125_74_1.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app5_125_74_2.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app6_91_36_1.png" height="493" width="493" class="layout"></li>
                        <li><img src="img/layouts/2-tier/app6_91_36_2.png" height="493" width="493" class="layout"></li>
                    </ul>
                    <div class="sprite arrow-right"></div>
                </div>
                <div class="panel">
                    <div id="button3" class="btn signOnBTN callPopupBtn" popup="require_watch">Записаться на просмотр</div>
                </div>
            </div>
        </div>
        <?php */ ?>
    </section>
    
    <section id="gallery">
        <div class="wrap">
            <div class="box_grid box-grid-gallery">
                <div class="part part-1">
                    <div class="item sign">
                        <div class="content">
                            <div>Наша галерея.</div>
                            <div>Фото обновляются каждый месяц.</div>
                            <div>Первый дом уже построен.</div>
                        </div>
                    </div>
                        <div class="slider-gallery" style="float: right;">
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/1.png"><div class="thumb" style="height: 100%;"></div></a></div>
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/11.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/2.png"><div class="thumb" style="height: 100%;"></div></a></div>
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/22.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/33.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/44.png"><div class="thumb" style="height: 100%;"></div></a></div>
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/55.png"><div class="thumb" style="height: 100%;"></div></a></div>
                            <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/1/66.png"><div class="thumb" style="height: 100%;"></div></a></div> 
                        </div>
                </div>
                <div class="part part-2">
                    <div class="slider-gallery">
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_142614.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_142620.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_142622.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_142623.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_142626.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143102.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                    </div>
                    <div class="slider-gallery">
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143104.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143106.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143107.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143108.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143110.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143111.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143113.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                        <div class="item" style="height: 320px;"><a class="fancybox" rel="gal" href="img/gal/2/20170721_143114.jpg"><div class="thumb" style="height: 100%;"></div></a></div>
                    </div>
                </div>
            </div>
            <div class="clean"></div>
        </div>
    </section>

    <section id="contacts">
        <div id="mapWrap">
            <div id="map"></div>
        </div>
        <div class="wrap">
            <div id="watchUp" class="sprite arrow-white-bg">
                <div class="sprite arrowUp"></div>
            </div>

            <div class="content">
                <div id="contactSocial" class="item">
                    <a href="http://svyatobor.kiev.ua" target="_blank" class="our_link"><div class="sprite color-logo"></div></a>
                    <a href="https://www.facebook.com/svyatobor/?ref=ts&fref=ts" target="_blank"><div class="sprite facebook"></div></a>
                    <!--<a href="https://www.youtube.com/channel/UCh1yZHSEpO8IadwiQVMUp-g" target="_blank"><div class="youtube-icon"></div></a>-->
                </div>
                <div id="contactMenu" class="item">
                    <?php require('src/menu.php'); ?>
                </div>
                <div class="item">
                    <ul>
                        <li>Киев, ул.Верховинная, 28-а </li>
                        <li><span id="istat_1"><a href="tel:0444999695" class="phone">(044) 2251225</a></span></li>
                        <li><a href="mailto:info@svyatobor.kiev.ua">info@svyatobor.kiev.ua</a></li>
                        <li><a href="http://www.svyatobor.kiev.ua" target="_blank" class="our_link">www.svyatobor.kiev.ua</a></li>
                        <li><div id="callbackBTN button4" class="btnfooter btn callPopupBtn"  data-toggle="modal" data-target="#call-modal" popup="callback">Обратный звонок</div></li>
                    </ul>
                </div>
                <div class="item">
                    <ul>
                        <li>Пон.-пт.: 9:00-19:00</li>
                        <li>Сб.: 10:00-17:00</li>
                        <li>без перерыва</li>
                        <li>Вс.: Выходной</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="wrap">
            <div id="copy">
                © Все права защищены.<br> 
                Копирование текстов и изображений с сайта запрещено.
            </div>
            <div id="developed">
                Разработано в <a href="http://qmedia.com.ua" target="_blank"><div class="sprite qmedia-logo"></div></a>
            </div>
        </div>

    </footer>
    <?php require_once('src/popups.php'); ?>

    <!-- Scripts -->
    <?php /* if($mailSendInfo['sended'] == true) echo "<script>dataLayer.push({'SubmitFormOk':'ok'});dataLayer.push({'event':'submit'});console.log('test');</script>";
    */?>
    <!-- <script type="text/javascript" src="js/less.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="vendor/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOiJo5eswEQisLfDndk1Payz4xtnNsGP4&libraries=geometry"></script>
    <script src="js/jquery.formstyler.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/kinetic.js"></script>
    <script type="text/javascript" src="js/jquery.final-countdown.min.js"></script>
    <script type="text/javascript">
    $('document').ready(function() {
    'use strict';
    var start = Date.parse('Tue Dec 20 00:00:44 +0000 2016')/1000;
    var end = Date.parse('Tue Feb 28 23:59:59 +0000 2017')/1000;
    var now = new Date().getTime() / 1000;
    $('.countdown').final_countdown({
    'start': start,
    'end': end,
    'now': now
    });
    });
    </script>
    <script>
        $('document').ready(function() {
            $('#button1').click(function() {
                fbq('track', 'ViewContent', {
                    content_name: 'записаться на просмотр (1 экран)'
                }); 
            });
            $('#button2').click(function() {
                fbq('track', 'ViewContent', {
                    content_name: 'записаться на просмотр (3 экран)'
                }); 
            });
            $('#button3').click(function() {
                fbq('track', 'ViewContent', {
                    content_name: 'записаться на просмотр (4 экран)'
                }); 
            });
            $('#button4').click(function() {
                fbq('track', 'ViewContent', {
                    content_name: 'Обратный звонок (футер)'
                }); 
            });
            $('#button5').click(function() {
                fbq('track', 'Lead', {
                    content_name: 'отправление формы записи на просмотр'
                });
            })
            $('#button6').click(function() {
                fbq('track', 'Lead', {
                    content_name: 'отправление заявки на перезвон'
                });
            });
        });
    </script>
    <script src="/js/map.js"></script>

    <script type="text/javascript" charset="utf-8" src="//istat24.com.ua/js/replace.js"></script>
    <script type="text/javascript">replaceIstatDynamic(1,958);</script>
    
</body>
</html>