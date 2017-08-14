<div id="popupWrap">
	<div class="bg">
		<!-- <div class="content"><img src="" id="camera"></div> -->
	</div>

	<div class="popup" data-name="">
		<div class="sprite popupCloseBTN"></div>
		<h2><span>Web-камера</span></h2>
		<!-- <div class="content"><img src="" id="camera"></div> -->
	</div>

	<?php /*<div class="popup" data-name="layouts_tier_1">
		<div class="sprite popupCloseBTN"></div>
		<h2><span>одноуровневые</span></h2>
		<div class="content">
			<div class="sign">
				Площадь балкона - <span class="area"></span> кв.м<br>
				(указана с коэффициентом <span class="factor"></span>)				
			</div>
			<div class="thumb"></div>
			<div class="panel">
				<div class="sprite print"></div>
				<div class="btn signOnBTN callPopupBtn" popup="require_watch">Записаться на просмотр</div>
			</div>
		</div>
	</div>
*/ ?>
	<div class="popup" data-name="layouts_tier_2">
		<div class="sprite popupCloseBTN"></div>
		<h2><span>двухуровневые</span></h2>
		<div class="content">
			<div class="thumb"></div>
			<div class="panel">
				<div class="sprite print"></div>
				<div class="btn signOnBTN callPopupBtn" popup="require_watch">Записаться на просмотр</div>
			</div>
		</div>
	</div>

	<div class="popup" data-name="certificate">
		<div class="sprite popupCloseBTN"></div>
		<h2><span>сертификат</span></h2>
		<div class="content">
			<div class="thumb"></div>
			<div class="panel">
				<img id="certImg" src="img/cert.jpg" alt="сертификат" style="">
			</div>
		</div>
	</div>

	<div class="popup" data-name="thx">
		<div class="sprite popupCloseBTN"></div>
		<h2><span>Спасибо!</span></h2>
		<div class="content">Ваша заявка принята.<br>В ближайшее время<br>с вами свяжется менеджер.</div>
		<?php if($mailSendInfo['sended'] == true) echo "<script>dataLayer.push({'SubmitFormOk':'ok'});dataLayer.push({'event':'submit'});console.log('test');</script>";?>
	</div>

	<div class="popup" data-name="callback">
		<div class="sprite popupCloseBTN"></div>
		<h2><span>заказать звонок</span></h2>
		<div class="content">
			<form action="" method="post">
				<input type="hidden" name="type" value="callback">
				<fieldset>
					<dl>
						<dt><label for="callback_fio">фио</label></dt>
						<dd><input id="callback_fio" type="text" name="fio" tabindex="1"></dd>
						<dt><label for="callback_phone">телефон</label></dt>
						<dd><input id="callback_phone" type="tel" name="phone" tabindex="2"></dd>
					</dl>
					<div class="submit">
						<input type="submit" value="Отправить" class="btn">
					</div>
				</fieldset>					
			</form>
		</div>
	</div>

	<div class="popup" data-name="require_watch2" style="width: 960px;">
		<div class="sprite popupCloseBTN"></div>
		<!-- <h2 style="padding: 0px;"><span style="font-size: 160% !important;">Подарок за покупку!</span></h2> -->
		<h2 style="padding: 0px;"><span style="color: #fff; text-align: left;">Подарок за покупку!</span></h2>
		<div class="content">
			<p class="text-popup-new">Уникальное предложение от жилого комплекса комфорт-класса "Святобор": <br><br>в период с 7 марта по 17 апреля 2017 года купите квартиру в ЖК "Святобор" и бонусом получите индивидуальный дизайн-проект этой квартиры* от бюро www.1person.co.uk. Специально для Вас эксперты в области дизайна интерьеров разработают проект Вашей мечты! </p>
			<img src="img/design.jpg" style="display: block;margin: auto;padding: 20px;max-width: 100%;" alt="">
			<div class="btn signOnBTN callPopupBtn buttonCustom" popup="require_watch1">Уточнить детали</div>
			<p style="font-size: 8px; color: #fff; padding-top: 10px;">В Жилом комплексе "Святобор" в период с 7 марта 2017 года по 17 апреля 2017 года, при покупке двухуровневой квартиры на 25-26 этажах площадью 104,49 кв.м. <br>предлагается возможность получения бесплатного дизайн-проекта квартиры от партнера-разработчика - дизайн-бюро www.1person.co.uk/. </p>
		</div>
	</div>

</div>

<?php /********  MODALS ***********************/ ?>

<div class="modal fade" id="docs-modal"  tabindex="-1" role="dialog" >
<div class="popup modal-dialog modal-lg modal-docs" data-name="docs">
	<div class="sprite popupCloseBTN"></div>
		<div class="modal-header">
			<h4 class="modal-title text-uppercase text-center">Документы</h4>
		</div>
		<div class="modal-content content">
			<div class="modal-body">
				<div id="slider-docs" class="slider-docs">
					<div class="doc-item">					
						<iframe data-src="https://docs.google.com/viewer?url=http://ready2.svyatobor.kiev.ua/img/attach-1-2017.pdf&embedded=true" class="frame-docs" width="500" height="600" frameborder="0">Ваш браузер не поддерживает фреймы</iframe>
						<div class="panel-modal">
							<!-- <a href="" class="btn-print-docs"><img src="img/print-btn.png" alt=""></a> -->
							<a href="img/attach-1-2017.pdf" class="btn-dload" download=""><img src="img/dload.png" alt="" target="_blank"></a>
						</div>
					</div>
					<div class="doc-item">
						<iframe data-src="https://docs.google.com/viewer?url=http://ready2.svyatobor.kiev.ua/img/attach-2%2022.04.2014.pdf&embedded=true" class="frame-docs" width="500" height="600" frameborder="0">Ваш браузер не поддерживает фреймы</iframe>
						<div class="panel-modal">
							<!-- <a href="" class="btn-print-docs"><img src="img/print-btn.png" alt=""></a> -->
							<a href="img/attach-2%2022.04.2014.pdf" class="btn-dload" download=""><img src="img/dload.png" alt="" target="_blank"></a>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>

<!-- ------------------------------ -->

<div class="modal fade" id="layout-one-modal"  tabindex="-1" role="dialog" data-name="require_watch1" style="">
<div class="popup modal-dialog modal-lg modal-layout-one" data-name="layouts_tier_1">
	<div class="sprite popupCloseBTN"></div>
		<div class="modal-header">
			<h4 class="modal-title text-uppercase text-left">одноуровневые</h4>
		</div>
		<div class="modal-content content">
			<div class="modal-body">
				<!-- <div class="sign">
					Площадь балкона - <span class="area"></span> кв.м<br>
					(указана с коэффициентом <span class="factor"></span>)				
				</div> -->
				<div id="thumb-one-level" class="thumb text-center"></div>
				<div class="panel-modal">
					<!-- <div class="sprite print" data-layout="#layout-one-modal"></div> -->
					<div class="btn signOnBTN callPopupBtn btn-bg" popup="require_watch" data-toggle="modal" data-target="#zapis-modal">Записаться на просмотр</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<div class="modal fade" id="zapis-modal"  tabindex="-1" role="dialog" data-name="require_watch1" style="">
	<div class="modal-dialog modal-lg modal-zapis" data-name="">
		<div class="sprite popupCloseBTN"></div>
		<div class="modal-header">
		<h4 class="modal-title text-center text-uppercase text-center">записаться на просмотр</h4>
		</div>
		<div class="content modal-body">
			<form action="" method="post">				
				<div class="fieldset">
					<div class="form-item">
						<label for="require_watch_fio">фио</label>
						<div><input id="require_watch_fio" type="text" name="fio" tabindex="1"></div>
					</div>
					<div class="form-item">
						<label for="require_watch_phone">телефон</label>
						<div><input id="require_watch_phone" type="tel" name="phone" tabindex="2"></div>
					</div>						
				</div>
				<div class="fieldset">
					<div class="form-item">
						<label for="require_watch_email">email</label>
						<div><input id="require_watch_email" type="email" name="email" tabindex="3"></div>
					</div>
				</div>
				<fieldset>
					<label for="require_watch_msg">ваше сообщение</label>
					<textarea name="msg" id="require_watch_msg" cols="30" rows="5" tabindex="4"></textarea>		
				</fieldset>
				<!--
				<fieldset>		
					<legend>Проявите картинку при помощи ползунка</legend>				
					<div class="azureus_check">
						<div class="content">
							<img src="img/azureus_check.png" height="90" width="124">
							<div class="bg"></div>
						</div>
						<nav>
							<input type="range" value="0">
						</nav>
					</div>
				</fieldset>		
				-->
				<br>
				<div class="g-recaptcha" data-sitekey="6LfDgioUAAAAAFlaDw4jcReXJLtl37c9XKBjxT3L"></div>
				<div class="submit">
					<input type="hidden" name="type" value="require_watch">
					<input id="button5" type="submit" value="Записаться на просмотр" class="btn btn-bg">
				</div>
			</form>
		</div>
	</div>
	</div> <!-- .#zapis-modal -->
<div class="modal fade" id="call-modal"  tabindex="-1" role="dialog" data-name="require_watch1" style="">
	<div class="modal-dialog modal-call" role="document">
		<div class="sprite popupCloseBTN" data-dismiss="modal"></div>
		<div class="modal-content content">
		<div class="modal-header">
	        <!-- <button type="button" class="sprite popupCloseBTN" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
	        <h4 class="modal-title text-center text-uppercase text-center" id="">заказать звонок</h4>
	      </div>
	      <div class="modal-body">
			<form action="" method="post">				
				<fieldset style="border: none;">
					<dl>
						<dt><label for="require_watch1_fio">фио</label></dt>
						<dd><input id="require_watch1_fio" type="text" name="fio" tabindex="1"></dd>
					</dl>
					<dl>
						<dt><label for="require_watch1_phone">телефон</label></dt>
						<dd><input id="require_watch1_phone" type="tel" name="phone" tabindex="2"></dd>
					</dl>						
				</fieldset>
				
				<div class="submit">
					<input type="hidden" name="type" value="require_watch1">
					<input id="button6" type="submit" value="Отправить" class="btn btn-bg">
				</div>
			</form>
			</div>
		</div>
		</div>
	</div>
<!-- Modal -->
<div class="modal fade" id="descModal" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-lg modal-about" role="document">
  	<div class="sprite popupCloseBTN" data-dismiss="modal"></div>
    <div class="modal-content">
      <div class="modal-header">
        <!-- button type="button" class="close sprite popupCloseBTN" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title text-center text-uppercase text-center" id="">О комплексе</h4>
      </div>
      <div class="modal-body white-bg">
      <br>
      	<h3 class="text-uppercase text-color">ГОРЯЧЕЕ ПРЕДЛОЖЕНИЕ ЛЕТА!</h3>
		<p class="strong">Только до 31 августа 2017 действует уникальное ценовое предложение: успейте забронировать квартиру во 2й очереди ЖК «Святобор» по лучшей цене и получить РАССРОЧКУ 0% НА 3 ГОДА, ВЗНОС ОТ 20%.</p>
		<br>
        <p>Жилой комплекс «Святобор» расположен в одном из самых живописных и зеленых микрорайонов Святошино: чистый воздух, вековые сосны, ухоженные скверы, уютное и тихое место, защищенное от суеты и шума столичных магистралей.</p><br>
		<p>На охраняемой закрытой территории ЖК «Святобор» будет реализована концепция «двор без машин» - это уникальный и ценный для Киева формат организации внутридомового пространства. В подземный паркинг можно будет попасть сразу через несколько въездов. А на его функциональной крыше жителям будет доступен благоустроенный двор:
		<ul>
		<li>детские и спортивные площадки;</li>
		<li>места для отдыха;</li>
		<li>зеленые насаждения;</li>
		<li>прогулочные аллеи. </li>
		</ul>
		 </p>
		 <br>
		<p>С внешней стороны жилого комплекса, по периметру жилых домов, предусмотрено просторное пространство для гостевого паркинга.<br>
		Отличная транспортная доступность позволит жителям как быстро добраться до центра, а также без проблем выехать за город: 
		<ul>
		<li>10 минут пешком до станций метро «Святошино» и «Житомирская»; </li>
		<li>3 минуты пешком до главной транспортной артерии Киева - проспекта Победы;</li>
		<li>15 минут до Крещатика на автомобиле.</li>
		</ul>
		</p>
		<br>
		<p class="strong">Первая очередь ЖК «Святобор» уже введена в эксплуатацию, дом находится в активной стадии заселения и заходов на ремонт.</p><br>
		<p>Вторая очередь жилого комплекса является новым этапом развития проекта и сконцентрировала еще больше преимуществ и возможностей для комфортной жизни. Новые дома спроектированы улучшенным образом, чтобы максимально удовлетворить потребности владельцев квартир: <br>
		<ul>
		<li>1-комнатные квартиры площадью от 39 м2</li>
		<li>2-комнатные -  от 56 м2 </li>
		<li>трехкомнатные – от 77 м2</li>
		</ul>
		</p><br>
		<p>Инвесторам, которые ценят роскошь и эффектные панорамы города доступны видовые двухуровневые апартаменты на верхних этажах. Также в планировках новой очереди особый акцент сделан на просторные и функциональные кухни. 
		В 2016 году «Святобор» официально победил в номинации «Лучшая новостройка Украины комфорт-класса».</p><br>
		
		<div class="buttons">
			<a type="button" href="#layouts" class="btn btn-default btn-link-layouts">Планировки</a>
			<button type="button" href="#callback" id="" class="btn btn-default btnfooter btn callPopupBtn" popup="callback" data-toggle="modal" data-target="#call-modal">Обратный звонок</button>
		</div>
      </div>
    </div>
  </div>
</div>