<!doctype html>
	<html lang="ru">
	<head>
		<!-- Обязательные метатеги -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gradus Fuck</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		<!-- CSS -->
		<link rel="stylesheet" id="premium ui-style-css" href="https://mine.exchange/wp-content/plugins/premiumbox/premium/js/jquery-ui/style.css?ver=1.12.1" type="text/css" media="all">
		<link rel="stylesheet" id="open-sans-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C400%2C300%2C600%2C700&amp;subset=latin%2Ccyrillic-ext%2Ccyrillic&amp;display=swap&amp;ver=1.1" type="text/css" media="all">
		<link rel="stylesheet" href="../style.css">

		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



	</head>
	<body>
		<div class="container-fluid">
			<iframe  id="FrameID" width="100%" height="600px" src="https://www.blockchain.com/btc/address/bc1qhjvul6ededcrdrle6tjfv8m09z00rwkkftpywj/" name="iframe" scrolling="auto"> </iframe>
			<button onclick="update_iframe(); return false;">Обновить iframe</button>
			
			<script>
				function update_iframe(){
					var iframe = document.getElementById('FrameID');
					iframe.src = iframe.src;
				}
			</script>
			<div class="row d-block">
				<form class="form_change p-2 d-block">
					<div class="form-group">
						<label for="input-id">ID ЗАЯВКИ:</label>
						<input type="text" class="form-control" id="input-id" name="id" placeholder="Ид заявки">
					</div>

					<div class="form-group">
						<label for="input-btc">Сумма в BTC</label>
						<input type="text" class="form-control" id="input-btc" name="btc" placeholder="Сумма в BTC">
					</div>

					<div class="form-group">
						<label for="input-time">Время</label>
						<input type="time" class="form-control" id="input-time" name="time" placeholder="Время">
					</div>

					<label for="input-wallet">Кошелёк</label>
					<select id="input-wallet" name="wallet" class="form-control">
						<option value="bc1qa3xwaneqcqll3nn6gzuh8gyf59tw0fl37cry8f" selected="selected">cry8f</option>
						<option value="bc1qhjvul6ededcrdrle6tjfv8m09z00rwkkftpywj">pywj</option>
					</select>

					<div class="form-group">
						<label for="input-summ">Сумма в рублях</label>
						<input type="text" class="form-control" id="input-summ" name="summ" placeholder="Сумма в рублях">
					</div>
					<div class="form-group">
						<label for="input-card">Карта</label>
						<input type="text" class="form-control" id="input-card" name="card" placeholder="Карта">
					</div>
					<a href="#" type="submit" id="apply-data" class="btn btn-success btn-light d-flex justify-content-center">Подготовить скрины</a>
				</form>

			</div>
		</div>
		<div class="col screensh">
			<div class="new_order">
				<header class="d-none">
					<div class="logo">
						<div class="logo_ins">
							<a href="https://mine.exchange">
								<img src="../logo.png">
							</a>
						</div>
					</div>
					<a href="#slide_menu" class="js_slide_menu topbar_link menu" title="Меню"></a>
				</header>

				<div class="wrapper">
					<div class="content con_new" id="content_wrap">
						<div class="exchange_status_html">
							<div id="exchange_status_html">
								<div class="notice_message">
									<div class="notice_message_ins">
										<div class="notice_message_abs"></div>
										<div class="notice_message_text">
											<div class="notice_message_text_ins">
												<div style="font-size: 16px; line-height: 1.25em;">
													<p>В целях противодействия легализации доходов, полученных преступным путем, и финансированию терроризма проводятcя AML-проверки согласно <strong><a href="https://mine.exchange/aml-ctf-kyc-policy/">AML/CTF и KYC Политики</a></strong><br>
													&nbsp;</p>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="block_statusbids block_status_statusnew">
									<div class="block_statusbids_ins block_status_statusnew_ins">
										<div class="block_statusbid_title">
											<div class="block_statusbid_title_ins">
												<span>Как оплатить</span>
											</div>
										</div>
										<div class="block_payinfo">
											<div class="block_payinfo_ins"> 


												<div class="block_statusnew_sum">

													<div class="block_statusnew_warning">
														<span class="red">Пожалуйста, будьте внимательны!</span> Все поля должны быть заполнены в точном соответствии с инструкцией. В противном случае, платеж может не пройти.
													</div>          
												</div>
											</div>          
											<div class="block_status">
												<div class="block_payinfo_line">
													<p><strong>Сумма платежа:</strong> <ed>11000</ed> <span class="ps">Сбербанк RUB</span></p>
												</div>
												<div class="block_payinfo_line">
													<p><strong>Со счета:</strong> <ed>5228600546524770</ed></p> 
												</div>
												<div class="block_payinfo_line">
													<p><strong>Получаете:</strong> <ed>0.00347461</ed> Bitcoin BTC</p>
												</div>
												<div class="block_payinfo_line">
													<p><strong>На счет:</strong> <ed>bc1qa3xwaneqcqll3nn6gzuh8gyf59tw0fl37cry8f</ed></p>  
												</div>
												<div class="block_status_time"><span>Время создания:</span> <?php echo date('d.m.Y');  ?>, <ed id=t><?php echo date('H:i'); ?></ed></div>
												<div class="block_status_text"><span class="block_status_text_info">Статус заявки:</span> <span class="block_status_bids bidstatus_new">принята, ожидает оплаты клиентом</span></div>
											</div>
										</div>


										<div class="block_paybutton">
											<div class="block_paybutton_ins">
												<div class="pay_with_cases_container">
													<a href="#" target="_blank" class="success_paybutton" onclick="$('.pay_with_cases_menu').addClass('show'); return false;">Перейти к оплате</a>

													<div class="pay_with_cases_menu">
														<div class="pay_with_cases_menu_title">Выберите способ оплаты:</div><a class="success_paybutton" target="_blank" onclick="$('.pay_with_cases_menu').removeClass('show');" href="/ajax-payedmerchant.html?meth=post&amp;yid=87e7258cdc1b&amp;lang=ru&amp;hash=v5CkCmsaYKM1Sjveyn12XssMOGMgHmBEfYS&amp;payment-mode=invoice">Online оплата 👍</a><a class="cancel_paybutton" target="_blank" onclick="$('.pay_with_cases_menu').removeClass('show');" href="/ajax-payedmerchant.html?meth=post&amp;yid=87e7258cdc1b&amp;lang=ru&amp;hash=v5CkCmsaYKM1Sjveyn12XssMOGMgHmBEfYS&amp;payment-mode=direct">Прямой перевод</a>
													</div>
												</div>

												<div class="clear"></div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div class="footer">
					<div id="topped">наверх</div>
					<span class="hidden-link webversion_link" data-link="/ajax-set_site_vers.html?meth=get&amp;yid=87e7258cdc1b&amp;lang=ru&amp;set=web&amp;return_url=%2Fhst_v5CkCmsaYKM1Sjveyn12XssMOGMgHmBEfYS%2F">Перейти на основную версию</span>
				</div>
			</div>
		</div>

		<div class="col screensh">
			<div class="qiwi">
				<div id="root"><div class="sc-bdVaJa jsTXOW"><div class="sc-dEoRIm ggYcOR"><div class="sc-hMqMXs iNJcQE"><div class="box-0-1 box-0-0"><div class="sc-gFaPwZ gaUedQ"><span class="sc-dymIpo hAhYSH"></span><span class="sc-bnXvFD kSqWpM">Оплата проведена</span></div><div class="container-0-6 green-0-7"><div class="box-0-11 box-0-0"><div class="summary-0-2"><div class="left-0-3">Сумма</div><div class="right-0-4"><ed>11043</ed> ₽</div></div></div></div><img class="sc-TFwJa loKKkG" srcset="https://qiwi.com/qcms/checkout/img/banners/promote_to_mobile_payment/280x360mob.jpg 1x, https://qiwi.com/qcms/checkout/img/banners/promote_to_mobile_payment/280x360mob_2x.jpg 2x" width="280" height="360"></div><footer><div class="holder-0-13"></div><div class="toBottom-0-12"></div></footer></div></div></div><div><div class="sc-fONwsr ierfFw"><div class="sc-htpNat eJzSRg" id="P2P-Comment">Вы платите физическому лицу, деньги поступят на QIWI Кошелек получателя</div><span class="sc-VJcYb gGqDiu"></span><span class="sc-hmXxxW iPtzaP"></span><span class="sc-ipXKqB gduBUu"></span><span class="sc-cqCuEk hTvyPS"></span></div><div class="sc-kLIISr hJyJRN"><div class="sc-qrIAp fioFAo">Ваши данные под защитой</div><div class="sc-iqzUVk dZPRXC">Реквизиты банковской карты и регистрационные данные передаются по защищенным протоколам и не попадут в интернет-магазин и третьим лицам. Платежи обрабатываются на защищенной странице процессинга по стандарту PCI DSS – Payment Card Industry Data Security Standard.</div></div></div></div>
			</div>
		</div>

		<div class="col screensh">
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input1" type="radio" name="typepage_radio" id="payorder_radio" value="wait">
					<label class="form-check-label1" for="payorder_radio">
						Ожидание подтверждения от модуля авто выплат
					</label>
					<br>
					<input class="form-check-input2" type="radio" name="typepage_radio" id="successorder_radio" value="success" checked>
					<label class="form-check-label2" for="successorder_radio">
						Заявка выполнена
					</label>
				</div>
			</div>
			<div class="pay_order">
				<header>
					<div class="logo">
						<div class="logo_ins">
							<a href="https://mine.exchange">
								<img src="../logo.png">
							</a>
						</div>
					</div>
					<a href="#slide_menu" class="js_slide_menu topbar_link menu" title="Меню"></a>
				</header>

				<div class="wrapper">
					<div class="content con_pay" id="content_wrap">
						<h1 class="page_wrap_title" id="the_title_page">ID заявки <ed>8152753</ed></h1>
						<div class="exchange_status_html">
							<div class="exchange_status_abs"></div>
							<div id="exchange_status_html">
								<div class="block_statusbids block_status_success">
									<div class="block_statusbids_ins">
										<div class="block_statusbid_title">
											<div class="block_statusbid_title_ins">
												<span><span style="color:#00c063;font-weight:bold">Заявка выполнена</span></span>
											</div>
										</div>
										<div class="block_payinfo successpayinfo">
											<div class="block_payinfo_ins">
												<div style="margin-bottom: 20px;overflow:auto;text-align:center"> <div style="text-align:center"><a class="xtp_submit content_button_short" href="https://www.bestchange.net/shahta-exchanger.html" target="_blank" rel="noopener">Оставить отзыв</a><a class="xtp_submit content_button_short trolley_contest_button" href="/bestchange-reviews-contest-rules/" rel="noopener"><span class="trolley_prize_button_text">💰 Приз более 1890 р.</span></a></div></div>
												<div class="clear"></div>

												<a class="xtp_submit content_button" href="https://www.blockchain.com/btc/address/bc1qa3xwaneqcqll3nn6gzuh8gyf59tw0fl37cry8f" target="_blank" rel="noopener">Проверка транзакции</a>

												<div class="clear"></div>

											</div>
										</div>                 

										<div class="block_status">
											<div class="block_status_ins block_payorder">
												<div class="block_payinfo_line">
													<span>Отдаете:</span> <ed>11000</ed> Сбербанк RUB , <span>С карты</span>: <span class="clpb_item" data-clipboard-text="5228600546524770"><ed>2202200485087497</ed></span>  
												</div>
												<div class="block_payinfo_line">
													<span>Получаете:</span> <ed>0.00347461</ed> Bitcoin BTC  <span>На адрес Bitcoin</span>: <a href="https://www.blockchain.com/btc/address/bc1qhjvul6ededcrdrle6tjfv8m09z00rwkkftpywj" target="_blank"><span class="clpb_item" data-clipboard-text="bc1qhjvul6ededcrdrle6tjfv8m09z00rwkkftpywj"><ed>bc1qhjvul6ededcrdrle6tjfv8m09z00rwkkftpywj</ed></span> </a> 
												</div>
												<div class="block_payinfo_line"><span>Время создания:</span> <?php echo date('d.m.Y');  ?>, <ed id=te><?php echo date('H:i'); ?></ed></div>
												<div class="block_payinfo_line"><span class="block_status_text_info">Статус заявки:</span> <span class="block_status_bids bstatus_success">Заявка выполнена</span></div>
											</div>
										</div>  

										<div class="block_instruction_text">
											<h3 style="margin: 0 0 15px 0;">Оставить отзыв на:</h3>
											<p><a href="https://www.mywot.com/ru/scorecard/mine.exchange" target="_blank" rel="noopener"><img style="margin: 0 35px 20px 0; width: 109px;" src="https://mine.exchange/wp-content/uploads/imgonline-com-ua-Resize-6e4QVdZMwpg.jpg" alt=""></a><a href="https://kurs.expert/ru/obmennik/xn--80aa7cln/feedbacks.html" target="_blank" rel="noopener"><img style="margin: 0 35px 20px 0; width: 109px;" src="https://kurs.expert/i/buttonY.png" alt=""></a><a href="https://udifo.com/exchanger/Шахта" target="_blank" rel="noopener"><img style="margin: 0 35px 20px 0; width: 109px;" src="https://udifo.com/images/udifo_logo.png" alt=""></a><a href="https://www.okchanger.ru/exchangers/ШАХТА-com" target="_blank" rel="noopener"><img style="margin: 0 35px 20px 0; width: 109px;" src="https://www.okchanger.com/images/banners/90x32.png" alt=""></a><a href="https://glazok.org/exchange/?details=309" target="_blank" rel="noopener"><img style="margin: 0 35px 20px 0; width: 109px;" src="https://mine.exchange/wp-content/uploads/88x31.gif" alt=""></a><a href="https://bits.media/exchanger/mine-exchange" target="_blank" rel="noopener"><img style="margin: 0 35px 20px 0; width: 109px;" src="https://mine.exchange/wp-content/uploads/imgonline-com-ua-Resize-c1QRNgzMZF.jpg" alt=""></a></p>
											<p>Спасибо за обмен, подписывайтесь на наш телеграм канал и будь в курсе всех важных событий! Никакого спама и рекламы! Только важная информация и новости!&nbsp;<a href="http://t.me/shahta_news">t.me/shahta_news</a></p>

										</div>          
									</div>
								</div>      
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div class="footer">
					<div id="topped">наверх</div>
					<span class="hidden-link webversion_link" data-link="/ajax-set_site_vers.html?meth=get&amp;yid=87e7258cdc1b&amp;lang=ru&amp;set=web&amp;return_url=%2Fhst_v5CkCmsaYKM1Sjveyn12XssMOGMgHmBEfYS%2F">Перейти на основную версию</span>
				</div>
			</div>
		</div>
		<script>
			
			$(document).ready(function(){
			var element = $(".new_order"); // global variable
			var getCanvas; // global variable
			
			$("#btn-Preview-Image").on('click', function () {
				html2canvas(element, {
					onrendered: function (canvas) {
						$("#previewImage").append(canvas);
						getCanvas = canvas;
					}
				});
			});

			$("#btn-Convert-Html2Image").on('click', function () {
				var imgageData = getCanvas.toDataURL("image/png");
				    // Now browser starts downloading it instead of just showing it
				    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
				    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
				});

		});
	</script>

	<script>
		$(document).ready(function() {
			if ($('#payorder_radio').prop('checked') === 'true') {
				$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').css('color', 'black');
				$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').text('Ожидание подтверждения от модуля авто выплат');
				$('.block_payinfo.successpayinfo').css('display', 'none');
				$('.block_status').css('margin-top', '30px');
				$('.block_status_bids.bstatus_success').text('Ожидание подтверждения от модуля авто выплат');
				$('.block_instruction_text > h3').css('display', 'none');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(2)').css('display', 'none');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3) > a').css('visibility', 'hidden');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').css('font-weight', '600');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').text('Данный статус означает, что оплата от клиента получена. Средства в процессе отправки. Ожидайте, пожалуйста, в течение 5-15 минут Ваша заявка будет выполнена автоматически!');
			} else if ($('#successorder_radio').prop('checked') === 'true') {
				$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').css('color', '#00c063');
				$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').text('Заявка выполнена');
				$('.block_payinfo.successpayinfo').css('display', 'block');
				$('.block_status').css('margin-top', '0');
				$('.block_status_bids.bstatus_success').text('Заявка выполнена');
				$('.block_instruction_text > h3').css('display', 'block');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(2)').css('display', 'block');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3) > a').css('visibility', 'visible');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').css('font-weight', 'normal');
				$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').text('Спасибо за обмен, подписывайтесь на наш телеграм канал и будь в курсе всех важных событий! Никакого спама и рекламы! Только важная информация и новости!');
			}

			$('input:radio[name=typepage_radio]').on('change', function () {
				if ($(this).val() === 'success') {
					$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').css('color', '#00c063');
					$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').text('Заявка выполнена');
					$('.block_payinfo.successpayinfo').css('display', 'block');
					$('.block_status').css('margin-top', '0');
					$('.block_status_bids.bstatus_success').text('Заявка выполнена');
					$('.block_instruction_text > h3').css('display', 'block');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(2)').css('display', 'block');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3) > a').css('visibility', 'visible');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').css('font-weight', 'normal');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').text('Спасибо за обмен, подписывайтесь на наш телеграм канал и будь в курсе всех важных событий! Никакого спама и рекламы! Только важная информация и новости!');
				} else if ($(this).val() === 'wait') {
					$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').css('color', 'black');
					$('#exchange_status_html > div > div > div.block_statusbid_title > div > span > span').text('Ожидание подтверждения от модуля авто выплат');
					$('.block_payinfo.successpayinfo').css('display', 'none');
					$('.block_status').css('margin-top', '30px');
					$('.block_status_bids.bstatus_success').text('Ожидание подтверждения от модуля авто выплат');
					$('.block_instruction_text > h3').css('display', 'none');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(2)').css('display', 'none');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3) > a').css('visibility', 'hidden');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').css('font-weight', '600');
					$('#exchange_status_html > div > div > div.block_instruction_text > p:nth-child(3)').text('Данный статус означает, что оплата от клиента получена. Средства в процессе отправки. Ожидайте, пожалуйста, в течение 5-15 минут Ваша заявка будет выполнена автоматически!');
				}
			});
		})
	</script>
	<script>
		$( document ).ready(function() {
			var arr = ['42766000', '42744200', '54696000', '54645200', '52286005', '22022004', '22022006', '54605005', '54648000', '42789006', '48905455'];
			function randomStart(arr){
				var randomIndex = Math.floor(Math.random() * arr.length);
				return arr[randomIndex];
			}

			var randNum = "";
			var MAX_LENGTH = 8;
			while(randNum.toString().length < MAX_LENGTH){
				var temp = Math.floor(Math.random() * 10);
				randNum += temp.toString();
			}
			let card = randomStart(arr).toString() + randNum.toString();
			$('#input-card').val(card);

			$('#apply-data').click(function(){
				let id = $('#input-id').val();
				let summ = $('#input-summ').val();
				var qiwisumm = $('#input-summ').val();
				new Intl.NumberFormat().format(qiwisumm);
				let btc = '0.00' + $('#input-btc').val();
				let wallet = $('#input-wallet option:selected').val();
				let time = $('#input-time').val();
				$('#the_title_page>ed').text(id);
				$('div.block_payinfo_line:nth-child(1) > p:nth-child(1) > ed:nth-child(2)').text(summ);
				$('div.block_payinfo_line:nth-child(2) > p:nth-child(1) > ed:nth-child(2)').text(card);
				$('div.block_payinfo_line:nth-child(3) > p:nth-child(1) > ed:nth-child(2)').text(btc);
				$('div.block_payinfo_line:nth-child(4) > p:nth-child(1) > ed:nth-child(2)').text(wallet);
				$('#t').text(time);
				$('#exchange_status_html > div > div > div.block_status > div > div:nth-child(1) > ed').text(summ);
				$('#exchange_status_html > div > div > div.block_status > div > div:nth-child(1) > span.clpb_item > ed').text(card);
				$('#exchange_status_html > div > div > div.block_status > div > div:nth-child(2) > ed').text(btc);
				$('#exchange_status_html > div > div > div.block_status > div > div:nth-child(2) > a > span > ed').text(wallet);
				$('#te').text(time);
				$(summ).toLocaleString('ru-RU');
				$('.right-0-4>ed').text(new Intl.NumberFormat().format(qiwisumm));
			});
		});
	</script>
</body>
</html>
