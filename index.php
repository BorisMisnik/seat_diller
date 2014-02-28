<?php  include  'header.php'; ?> 
		<?php 
			// if user logined 
			if( isset($_SESSION['login']) ){ 
				?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>ПРИЛОЖЕНИЕ К АКТУ ПРИЕМА-ПЕРЕДАЧИ АВТОМОБИЛЯ</h2>
							<p>
								Компания SEAT поздравляет Вас с приобретением нового автомобиля SEAT!
								Нам очень важно знать и понимать нужды каждого нашего клиента, чтобы постоянно улучшать качество нашей работы и обслуживания. Поэтому мы просим Вас внимательно заполнить эту анкету.
							</p>
							<form parsley-validate novalidate class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
							<!-- <form class="form"> -->
								<!-- VIN автомобиля -->
								<div class="step">
									<label for="vin">VIN автомобиля</label>				
									<input type="text" name="vin" id="vin" placeholder="VIN автомобиля" class="form-control" >
									<!-- Договор № -->
									<label for="contract">Договор №</label>				
									<input type="text" name="contract" id="contract" placeholder="Договор №" class="form-control">
									<!-- Договор от -->
									<div class="col-xs-3">
										<label for="contract-date">Договор от</label>
										<input type="text" name="contract_date" id="contract-date" placeholder="День" class="form-control">
									</div>
									<div class="col-xs-3">
										<label for="contract-month">Месяц</label>
										<br>
										<select   name="contract_month" id="contract-month" data-trigger="change">
											<option value=""></option>
											<option value="Январь">Январь</option>
											<option value="Февраль">Февраль</option>
											<option value="Март">Март</option>
											<option value="Апрель">Апрель</option>
											<option value="Май">Май</option>
											<option value="Июнь">Июнь</option>
											<option value="Июль">Июль</option>
											<option value="Август">Август</option>
											<option value="Сентябрь">Сентябрь</option>
											<option value="Октябрь">Октябрь</option>
											<option value="Ноябрь">Ноябрь</option>
											<option value="Декабрь">Декабрь</option>
										</select>
									</div>
									<div class="col-xs-3">
										<label for="contract-year">Год</label>
										<input type="text" name="contract_year" id="contract-year" placeholder="Год" class="form-control">
									</div>
									<!-- Модель приобретенного автомобиля -->
									<label for="engine-type">Модель приобретенного автомобиля</label>
									<select name="engine_type" id="engine-type">
										<option value=""></option>
										<option value="NEW LEON">NEW LEON</option>
										<option value="NEW LEON SC">NEW LEON SC</option>
										<option value="Ibiza">IBIZA</option>
										<option value="Ibiza SC">IBIZA SC</option>
										<option value="Ibiza ST">IBIZA ST</option>
										<option value="Altea Freetrack">FREETRACK 4x4</option>
										<option value="ALHAMBRA">ALHAMBRA</option>
										<option value="NEW LEON ST">NEW LEON ST</option>
										<option value="LEON COPA">LEON COPA</option>
									</select>
									<!-- Объем двигателя -->
									<label for="engine-value">Объем двигателя</label>
									<select name="engine_value"   id="engine-type">
										<option value=""></option>
										<option value="1.2">1.2</option>
										<option value="1.4">1.4</option>
										<option value="1.6">1.6</option>
										<option value="1.8">1.8</option>
										<option value="2.0">2.0</option>
									</select>
									<!-- Трансмиссия -->
									<label>Трансмиссия (нужное подчеркнуть)</label> <br>
									<label class="checkbox-inline">
										<input type="radio" value="Механика+TSI" name="transmission"> Механика+TSI
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="DSG+TSI" name="transmission"> DSG+TSI	
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Механика+MPI" name="transmission"> Механика+MPI
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="DSG+MPI" name="transmission"> DSG+MPI
									</label>
									<div class="error-transmission"></div>
									<br>
									<!-- Цвет автомобиля -->
									<label for="car-color">Цвет автомобиля</label>
									<input type="text" name="car_color" id="car-color" placeholder="Цвет автомобиля" class="form-control"  >
									<!-- Название дилерского центра	 -->
									<label for="diller">Название дилерского центра</label>
									<select name="diller" id="diller">
										<option value=""></option>
										<option data-city="Москва" value="Абрера Мотор">Абрера Мотор</option>
										<option data-city="Москва" value="АМКапитал">АМКапитал</option>
										<option data-city="Москва, г. Мытищи" value="Автодина Центр">Автодина Центр</option>
										<option data-city="Уфа" value="Барс-Авто С">Барс-Авто С</option>
										<option data-city="Казань" value="Прогресс 06">Прогресс 06</option>
										<option data-city="Тула" value="Вива">Вива</option>
										<option data-city="Челябинск" value="Торрес Моторс">Торрес Моторс</option>
										<option data-city="Пермь" value="Эспаньол Авто">Эспаньол Авто</option>
										<option data-city="Санкт-Петербург" value="Сигма Сервис">Сигма Сервис</option>
										<option data-city="Санкт-Петербург" value="Эль-Торо">Эль-Торо</option>
										<option data-city="Москва" value="Ривьера">Ривьера</option>
										<option data-city="Санкт-Петербург" value="Автопремиум">Автопремиум</option>
										<option data-city="Сургут" value="Альянс-Моторс">Альянс-Моторс</option>
										<option data-city="Н.Новгород" value="Нижегородец Центр">Нижегородец Центр</option>
										<option data-city="Краснодар" value="Тринити">Тринити</option>
										<option data-city="Ижевск" value="Аспэк-Прайм">Аспэк-Прайм</option>
										<option data-city="Волгоград" value="А.С.Авто-Юг">А.С.Авто-Юг</option>
										<option data-city="Екатеринбург" value="Каталония Авто">Каталония Авто</option>
										<option data-city="Ростов-на-Дону" value="СК-Моторс">СК-Моторс</option>
										<option data-city="Москва" value="Фаворит Моторс">Фаворит Моторс</option>
										<option data-city="Воронеж" value="Ринг Авто">Ринг Авто</option>
										<option data-city="Белгород" value="Автоцентр Спутник">Автоцентр Спутник</option>
										<option data-city="Владимир" value="Агротрактор">Агротрактор</option>
										<option data-city="Иркутск" value="АльтеррА">АльтеррА</option>
										<option data-city="Красноярск" value="Гранада">Гранада</option>
										<option data-city="Москва" value="Автолайт">Автолайт</option>
										<option data-city="Москва" value="Автодина Центр - Юг">Автодина Центр - Юг</option>
										<option data-city="Санкт-Петербург" value="Автоцентр Аврора">Автоцентр Аврора</option>
										<option data-city="Саратов" value="Карсар Юг">Карсар Юг</option>
										<option data-city="Тюмень" value="Феникс моторс">Феникс моторс</option>
									</select> 
									<!-- Город -->
									<label for="city">Город</label>
									<select name="city" id="city">
										<option value=""></option>
										<option value="Москва">Москва</option>
										<option value="Уфа">Уфа</option>
										<option value="Казань">Казань</option>
										<option value="Тула">Тула</option>
										<option value="Челябинск">Челябинск</option>
										<option value="Пермь">Пермь</option>
										<option value="Санкт-Петербург">Санкт-Петербург</option>
										<option value="Сургут">Сургут</option>
										<option value="Н.Новгород">Н.Новгород</option>
										<option value="Краснодар">Краснодар</option>
										<option value="Ижевск">Ижевск</option>
										<option value="Волгоград">Волгоград</option>
										<option value="Екатеринбург">Екатеринбург</option>
										<option value="Ростов-на-Дону">Ростов-на-Дону</option>
										<option value="Воронеж">Воронеж</option>
										<option value="Белгород">Белгород</option>
										<option value="Владимир">Владимир</option>
										<option value="Иркутск">Иркутск</option>
										<option value="Красноярск">Красноярск</option>
										<option value="Саратов">Саратов</option>
										<option value="Тюмень">Тюмень</option>
										<option value="Москва, г. Мытищи">Москва, г. Мытищи</option>
									</select> 
									<!-- ФИ менеджера дилерского центра	 -->
									<label for="manadger">ФИ менеджера дилерского центра</label>
									<input type="text" name="manadger" id="manadger" placeholder="ФИ менеджера дилерского центра" class="form-control"  >
									<!-- Дата заполнения -->
									<div class="col-xs-3">
										<label for="write-date">Дата заполнения</label>
										<input type="text" name="write_date" id="write-date" placeholder="День" class="form-control">
									</div>
									<div class="col-xs-3">
										<label for="write-month">Месяц</label>
										<br>
										<select   name="write_month" id="write-month">
											<option value=""></option>
											<option value="Январь">Январь</option>
											<option value="Февраль">Февраль</option>
											<option value="Март">Март</option>
											<option value="Апрель">Апрель</option>
											<option value="Май">Май</option>
											<option value="Июнь">Июнь</option>
											<option value="Июль">Июль</option>
											<option value="Август">Август</option>
											<option value="Сентябрь">Сентябрь</option>
											<option value="Октябрь">Октябрь</option>
											<option value="Ноябрь">Ноябрь</option>
											<option value="Декабрь">Декабрь</option>
										</select>
									</div>
									<div class="col-xs-3">
										<label for="write-year">Год</label>
										<input type="text" name="write_year" id="write-year" placeholder="Год" class="form-control">
									</div>
									<div class="block">
										<!-- Фамилия -->
										<label for="second_name">Фамилия</label>
										<input type="text" name="second_name" id="second_name" placeholder="Фамилия" class="form-control"  >
									</div>
									<!-- Имя -->
									<label for="name">Имя</label>
									<input type="text" name="name" id="name" placeholder="Имя" class="form-control"  >
									<!-- Отчество -->
									<label for="patronymic">Отчество</label>
									<input type="text" name="patronymic" id="patronymic" placeholder="Отчество" class="form-control"  >
									<!-- E-mail -->
									<label for="e-mail">E-mail</label>
									<input type="text" name="e_mail" id="e-mail" placeholder="E-mail" class="form-control"  >
									<!-- Контактный телефон	 -->
									<label for="phone">Контактный телефон  +7XXXXXXXXXX</label>
									<input type="text" name="phone" id="phone" placeholder="Контактный телефон" class="form-control"  parsley-regexp="^\+7\d{10}$" parsley-trigger="change"> 
								</div>
								<div class="step">
									<!-- Возраст -->
									<label for="age">1.  Укажите,  пожалуйста, Ваш возраст:</label>
									<input type="text" name="age" id="age" placeholder="1.  Укажите,  пожалуйста, Ваш возраст:" class="form-control">
									<!-- 2.  Семейное положение (выберите из списка): -->
									<label>2.  Семейное положение (выберите из списка):</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Женат / Замужем / Живем вместе" name="marital_status"> Женат / Замужем / Живем вместе								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value=" Не женат / Не замужем" name="marital_status"> Не женат / Не замужем						
									</label>
									<div class="error_marital_status"></div>
									<br>
									<!-- 3.  Есть ли у Вас дети?  (выберите из списка) -->
									<label>3.  Есть ли у Вас дети?  (выберите из списка)</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Нет" name="childrens"> Нет								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="1 ребенок" name="childrens" > 1 ребенок						
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="2 ребенка" name="childrens"> 2 ребенка							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="3 ребенка и более" name="childrens"> 3 ребенка и более						
									</label>
									<div class="error_childrens"></div>
									<br>
									<!-- 4.  Образование (нужное подчеркнуть):	 -->
									<label>4.  Образование (нужное подчеркнуть):</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Среднее / Среднее-специальное" name="education"> Среднее / Среднее-специальное								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Неполное высшее" name="education"> Неполное высшее						
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Высшее" name="education"> Высшее							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="тепень кандидата / доктора наук" name="education"> Степень кандидата / доктора наук
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Второе высшее  / МВА" name="education"> Второе высшее  / МВА
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Несколько образований" name="education"> Несколько образований
									</label>
									<div class="error_education"></div>
									<br>
									<!-- 5. Род деятельности	 -->
									<label>5. Род деятельности</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Владелец бизнеса" name="job"> Владелец бизнеса								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Директор, руководитель" name="job"> Директор, руководитель						
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Менеджер" name="job"> Менеджер							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Индивидуальный предприниматель" name="job"> Индивидуальный предприниматель
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Рабочий(мастер любой квалификации)" name="job"> Рабочий(мастер любой квалификации)
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="На пенсии" name="job"> На пенсии
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Студент" name="job"> Студент
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Фрилансер" name="job"> Фрилансер
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Не работаю" name="job"> Не работаю
									</label>
									<div class="error_job"></div>
									<!-- 6. Укажите пожалуйста как вы любите проводить свободное время, есть ли у Вас увлечение/хобби -->
									<label>6. Укажите пожалуйста как вы любите проводить свободное время, есть ли у Вас увлечение/хобби</label>
									<br>
									<label class="checkbox-inline">
										<input type="checkbox" value="Ночные клубы, бары, рестораны" name="hobbi[]"> Ночные клубы, бары, рестораны								
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Охота / Рыболовство" name="hobbi[]"> Охота / Рыболовство							
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Посещение театров и кино" name="hobbi[]"> Посещение театров и кино							
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Посещение музеев, выставок" name="hobbi[]"> Посещение музеев, выставок
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Садоводство / Обустройство дома" name="hobbi[]"> Садоводство / Обустройство дома
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Шоппинг" name="hobbi[]"> Шоппинг
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Путешествия" name="hobbi[]"> Путешествия
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Отдых на природе" name="hobbi[]"> Отдых на природе
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Чтение" name="hobbi[]">Чтение
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Кулинария" name="hobbi[]"> Кулинария
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Активные виды спорта" name="hobbi[]"> Активные виды спорта
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Другое" name="hobbi[]"> Другое
									</label>
									<div class="error_hobbi"></div>
									<!-- 7.  Сфера деятельности (выберите из списка): -->
									<label>7.  Сфера деятельности (выберите из списка):</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Финансовые/Страховые/Банковские услуги" name="scope"> Финансовые/Страховые/Банковские услуги								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Информац. технологии/ Интернет/ Телеком" name="scope"> Информац. технологии/ Интернет/ Телеком							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Строительство/ Недвижимость" name="scope"> Строительство/ Недвижимость							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Торговля" name="scope"> Торговля
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Производство" name="scope"> Производство
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Транспорт / Логистика" name="scope"> Транспорт / Логистика
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Безопасность" name="scope"> Безопасность
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Здравоохранение" name="scope"> Здравоохранение
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Наука / Образование" name="scope"> Наука / Образование
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Госслужба/Некоммер. организации" name="scope"> Госслужба/Некоммер. организации
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Искусство/ Развлечения" name="scope"> Искусство/ Развлечения
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Маркетинг/ Реклама/ PR" name="scope"> Маркетинг/ Реклама/ PR
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Другое" name="scope"> Другое
									</label>
									<div class="error_scope"></div>
									<!-- 8.  Укажите, пожалуйста, как часто Вы уезжаете отдыхать во время отпуска (выберите из списка):	 -->
									<label>8.  Укажите, пожалуйста, как часто Вы уезжаете отдыхать во время отпуска (выберите из списка):</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Раз в год" name="weekend"> Раз в год								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Два-три раза в год" name="weekend"> Два-три раза в год							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Более трех раз в год" name="weekend"> Более трех раз в год							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Как правило, остаюсь дома во время отпуска" name="weekend"> Как правило, остаюсь дома во время отпуска
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Другое" name="weekend"> Другое
									</label>
									<div class="error_weekend"></div>
									<!-- 9.  Пожалуйста, укажите, что вы считаете главным в своей жизни (можно указать несколько вариантов): -->
									<label>9.  Пожалуйста, укажите, что вы считаете главным в своей жизни (можно указать несколько вариантов):</label>
									<br>
									<label class="checkbox-inline">
										<input type="checkbox" value="Семья, дети, домашний уют" name="life[]"> Семья, дети, домашний уют							
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Материальный достаток, карьера" name="life[]"> Материальный достаток, карьера						
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Развлечения, общение, новые знакомства" name="life[]"> Развлечения, общение, новые знакомства						
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Путешествия, приключения, драйв, риск, азарт" name="life[]"> Путешествия, приключения, драйв, риск, азарт
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Личностное развитие, духовный рост, образование " name="life[]"> Личностное развитие, духовный рост, образование 
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Другое" name="life[]">Другое
									</label>
									<div class="error_life"></div>
									<!-- 10.  Сколько автомобилей в Вашей семье (выберите из списка)? -->
									<label>10.  Сколько автомобилей в Вашей семье (выберите из списка)?</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="1" name="cars"> 1								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="2" name="cars"> 2							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="3 и более" name="cars"> 3 и более		
									</label>
									<div class="error_cars"></div>
								</div>
								<div class="step">
									<label>11.  Ваш предыдущий автомобиль:</label>
									<br>
									<label for="car-mark">Марка</label>
									<input type="text" placeholder="Марка" value="" name="car_mark" id="car-mark" class="form-control">
									<label for="car-model">Модель</label>
									<input type="text" placeholder="Модель" value="" name="car_model" id="car-model" class="form-control">
									<label for="car-year">Год выпуска</label>
									<input type="text" placeholder="Год выпуска" value="" name="car_year" id="car-model" class="form-control">
									<label>Вы были первым владельцем автомобиля?</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Да" name="owner"> Да								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Нет" name="owner"> Нет							
									</label>
									<div class="error_owner"></div>
									<br>
									<label>12. Какие еще автомобили Вы рассматривали при покупке альтернативно SEAT(можно указать несколько вариантов):</label>
									<br>
									<label for="car-view-mark">Марка</label>
									<input type="text" placeholder="Марка" value="" name="car_view_mark" id="car-view-mark" class="form-control">
									<label for="car-view-model">Модель</label>
									<input type="text" placeholder="Модель" value="" name="car_view_model" id="car-view-model" class="form-control">
									<label for="car-view-mark1">Марка</label>
									<input type="text" placeholder="Марка" value="" name="car_view_mark1" id="car-view-mark1" class="form-control">
									<label for="car-view-model1">Модель</label>
									<input type="text" placeholder="Модель" value="" name="car_view_model1" id="car-view-model1" class="form-control">
									<label>13.  Почему Вы выбрали автомобиль марки SEAT  (укажите наиболее значимые для Вас причины):</label>
									<br>
									<label class="checkbox-inline">
										<input type="checkbox" value="Дизайн автомобиля" name="choose[]"> Дизайн автомобиля							
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Технологическая оснащенность и инновац. решения" name="choose[]"> Технологическая оснащенность и инновац. решения					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Рекомендации знакомых/друзей" name="choose[]"> Рекомендации знакомых/друзей					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Выгодная цена" name="choose[]"> Выгодная цена
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Ходовые качества автомобиля" name="choose[]"> Ходовые качества автомобиля 
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Высокий уровень комфорта" name="choose[]">Высокий уровень комфорта
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Предыдущий опыт владения автомобилем марки SEAT" name="choose[]"> Предыдущий опыт владения автомобилем марки SEAT						
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Предыдущий автомобиль из концерна Volkswagen" name="choose[]"> Предыдущий автомобиль из концерна Volkswagen					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Срок поставки автомобиля по сравн. с конкурентами" name="choose[]"> Срок поставки автомобиля по сравн. с конкурентами						
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Наличие специального предложения" name="choose[]"> Наличие специального предложения
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Убедила работа менеджера салона " name="choose[]"> Убедила работа менеджера салона 
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Приемлемая стоимость обслуживания" name="choose[]"> Приемлемая стоимость обслуживания 										
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Имидж и репутация бренда" name="choose[]"> Имидж и репутация бренда					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Большой набор опций, возможность инд. компл-ции" name="choose[]"> Большой набор опций, возможность инд. компл-ции					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Надежность и качество производителя" name="choose[]"> Надежность и качество производителя							
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Другое" name="choose[]"> Другое
									</label>
									<div class="error_choose"></div>
									<label>14.  Из каких источников Вы получили информацию о Вашем новом автомобиле SEAT(несколько вариантов ответов)</label>
									<br>
									<label class="checkbox-inline">
										<input type="checkbox" value="Официальный сайт SEAT" name="source[]"> Официальный сайт SEAT							
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Сайт дилера SEAT" name="source[]"> Сайт дилера SEAT					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Независимые отчеты и обзоры,опубликован. в СМИ" name="source[]"> Независимые отчеты и обзоры,опубликован. в СМИ					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Посещение автовыставок / шоу" name="source[]"> Посещение автовыставок / шоу
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Реклама в журналах / газетах" name="source[]"> Реклама в журналах / газетах 
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Реклама на радио" name="source[]"> Реклама на радио		
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Радиопрограммы об автомобилях" name="source[]"> Радиопрограммы об автомобилях						
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Телевизионные программы об автомобилях" name="source[]"> Телевизионные программы об автомобилях					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Реклама на телевидении" name="source[]"> Реклама на телевидении						
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Рекламные щиты, перетяжки на улице" name="source[]"> Рекламные щиты, перетяжки на улице
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Реклама в Интернете (Интернет-баннеры)" name="source[]"> Реклама в Интернете (Интернет-баннеры) 
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Брошюры, справочники по ценам на автомобили" name="source[]"> Брошюры, справочники по ценам на автомобили										
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Рекомендации друзей / знакомых" name="source[]"> Рекомендации друзей / знакомых				
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Опыт вождения данного автомобиля/тест-драйв" name="source[]"> Опыт вождения данного автомобиля/тест-драйв					
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Увидел(-а) машину на улице" name="source[]"> Увидел(-а) машину на улице							
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="Другое" name="source[]"> Другое
									</label>
									<div class="error_source"></div>
									<label>15.  Укажите, пожалуйста, какие журналы Вы читаете чаще всего?</label>
									<input type="text"  value="" name="magazine[]" class="form-control"> <br>
									<input type="text"  value="" name="magazine[]" class="form-control"> <br>
									<input type="text"  value="" name="magazine[]" class="form-control"> <br>
									<input type="text"  value="" name="magazine[]" class="form-control"> <br>
									<label>16.  Укажите, какие радиостанции Вы слушаете чаще всего?</label>
									<input type="text"  value="" name="radio[]" class="form-control"> <br>
									<input type="text"  value="" name="radio[]" class="form-control"> <br>
									<input type="text"  value="" name="radio[]" class="form-control"> <br>
									<input type="text"  value="" name="radio[]" class="form-control"> <br>
									<label>17.  Укажите, какие Интернет-сайты Вы обычно посещаете?</label>
									<input type="text"  value="" name="cites[]" class="form-control"> <br>
									<input type="text"  value="" name="cites[]" class="form-control"> <br>
									<input type="text"  value="" name="cites[]" class="form-control"> <br>
									<input type="text"  value="" name="cites[]" class="form-control"> <br>
									<label>18.  Укажите, пожалуйста, какие телевизионные каналы Вы смотрите чаще всего?</label>
									<input type="text"  value="" name="tv[]" class="form-control"> <br>
									<input type="text"  value="" name="tv[]" class="form-control"> <br>
									<input type="text"  value="" name="tv[]" class="form-control"> <br>
									<input type="text"  value="" name="tv[]" class="form-control"> <br>
									<label>19.  Укажите, пожалуйста, какие программы/передачи на телевидении Вы смотрите чаще всего?</label>
									<input type="text"  value="" name="tv_programs[]" class="form-control"> <br>
									<input type="text"  value="" name="tv_programs[]" class="form-control"> <br>
									<input type="text"  value="" name="tv_programs[]" class="form-control"> <br>
									<input type="text"  value="" name="tv_programs[]" class="form-control"> <br>
									<label>20.  Оказала ли реклама влияние на Ваше решение о покупке автомобиля SEAT (выберите из списка) :</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Да" name="advertising"> Да								
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Нет" name="advertising"> Нет							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Затрудняюсь ответить" name="advertising"> Затрудняюсь ответить							
									</label>
									<div class="error_advertising"></div>
									<label>21. Покупатель согласен на обработку персональной информации:</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Да" name="processing"> Да							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Нет" name="processing"> Нет						
									</label>
									<label>22. Наличие подписи покупателя:</label>
									<br>
									<label class="checkbox-inline">
										<input type="radio" value="Да" name="subscription"> Да							
									</label>
									<label class="checkbox-inline">
										<input type="radio" value="Нет" name="subscription"> Нет						
									</label>
									<label>Cкан анкеты:</label>
									<br>
									<input type="file" name="image[]" multiple accept="image/jpeg,image/png,image/gif"> Копия анкеты
								</div>
								<a href="" class="btn btn-info next btn-block">Дальше</a>
								<button class="btn btn-lg btn-primary btn-block submit" type="submit">Отправить</button>
							</form>
						</div>
					</div>
				</div>
			<?php } else{ ?>

				<div class="container">
					<form class="login-form" parsley-validate novalidate >
						<h2>Пожалуйста авторизируйтесь</h2>
						<!-- login -->
						<label for="login">Login :</label>
						<input type="text"
								id="login"
								class="form-control" 
								placeholder="Login" 
								name="login" 
								parsley-validation-minlength="2"
								 >
						<!-- password -->
						<label for="password">Password :</label>
						<input type="password" 
							   id="passwrod"
							   class="form-control" 
							   placeholder="Password"
							   name="password" 
								
							   parsley-validation-minlength="2">
						<!-- submit -->
						<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
					</form>
				</div>

			<?php } 
		?>
		<div class="modal fade" id="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<p>Спасибо ваш отзыв сохранен</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<?php  include 'footer.php';  ?>

<?php 
	function randomName($file){
		$random = substr(md5(rand()),0,7);
		$random = $random . $file;
		return $random;
	}

	if( isset($_POST['vin']) ){
		$vin = isset($_POST['vin']) ? $_POST['vin'].'' : '';
		$contract = isset($_POST['contract']) ? $_POST['contract'].'' : '';
		$contract_date = isset($_POST['contract_date']) ? $_POST['contract_date'] : '';
		$contract_month = isset($_POST['contract_month']) ? $_POST['contract_month'] : '';
		$contract_year = isset($_POST['contract_year']) ? $_POST['contract_year'] : '';
		$engine_type = isset($_POST['engine_type']) ? $_POST['engine_type'] : '';
		$engine_value = isset($_POST['engine_value']) ? $_POST['engine_value'] : '';
		$transmission = isset($_POST['transmission']) ? $_POST['transmission'] : '';
		$car_color = isset($_POST['car_color']) ? $_POST['car_color'] : '';
		$diller = isset($_POST['diller']) ? $_POST['diller'] : '';
		$city = isset($_POST['city']) ? $_POST['city'] : '';
		$manadger = isset($_POST['manadger']) ? $_POST['manadger'] : '';
		$write_date = isset($_POST['write_date']) ? $_POST['write_date'] : '';
		$write_month = isset($_POST['write_month']) ? $_POST['write_month'] : '';
		$write_year = isset($_POST['write_year']) ? $_POST['write_year'] : '';
		$second_name = isset($_POST['second_name']) ? $_POST['second_name'] : '';
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$patronymic = isset($_POST['patronymic']) ? $_POST['patronymic'] : '';
		$e_mail = isset($_POST['e_mail']) ? $_POST['e_mail'] : '';
		$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
		$age = isset($_POST['age']) ? $_POST['age'] : '';
		$marital_status = isset($_POST['marital_status']) ? $_POST['marital_status'] : '';
		$childrens = isset($_POST['childrens']) ? $_POST['childrens'] : '';
		$education = isset($_POST['education']) ? $_POST['education'] : '';
		$job = isset($_POST['job']) ? $_POST['job'] : '';
		$hobbi = isset($_POST['hobbi']) ? implode(',', $_POST['hobbi']) : '';
		$scope = isset($_POST['scope']) ? $_POST['scope'] : '';
		$weekend = isset($_POST['weekend']) ? $_POST['weekend'] : '';
		$life = isset($_POST['life']) ? implode(',', $_POST['life']) : '';
		$cars =  isset($_POST['cars']) ? $_POST['cars'] : '';
		$car_mark = isset($_POST['car_mark']) ? $_POST['car_mark'] : '';
		$car_model = isset($_POST['car_model']) ? $_POST['car_model'] : '';
		$car_year = isset($_POST['car_year']) ? $_POST['car_year'] : '';
		$owner = isset($_POST['owner']) ? $_POST['owner'] : '';
		$car_view_mark = isset($_POST['car_view_mark']) ? $_POST['car_view_mark'] : '';
		$car_view_model = isset($_POST['car_view_model']) ? $_POST['car_view_model'] : '';
		$car_view_mark1 = isset($_POST['car_view_mark1']) ? $_POST['car_view_mark1'] : '';
		$car_view_model1 = isset($_POST['car_view_model1']) ? $_POST['car_view_model1'] : '';
		$choose = isset($_POST['choose']) ? implode(',', $_POST['choose']) : '';
		$source = isset($_POST['source']) ? implode(',', $_POST['source']) : '';
		$magazine = isset($_POST['magazine']) ? implode(',', $_POST['magazine']) : '';
		$radio = isset($_POST['radio']) ? implode(',', $_POST['radio']) : '';
		$cites = isset($_POST['cites']) ? implode(',', $_POST['cites']) : '';
		$tv = isset($_POST['tv']) ? implode(',', $_POST['tv']) : '';
		$tv_programs = isset($_POST['tv_programs']) ? implode(',', $_POST['tv_programs']) : '';
		$advertising = isset($_POST['advertising']) ? $_POST['advertising'] : '';
		$processing = isset($_POST['processing']) ? $_POST['processing'] : '';
		$subscription = isset($_POST['subscription']) ? $_POST['subscription'] : '';
		$files = '';

		if( isset($_FILES['image']) ){
			$uploaddir = 'upload/';
			$limit = count($_FILES['image']['name']);

			for($i=0; $i<$limit; $i++){
				$type = $_FILES['image']['type'][$i];

				if( $type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif'){
					$file = $uploaddir . randomName($_FILES['image']['name'][$i]);
					$tmp_dir = $_FILES['image']['tmp_name'][$i];

					if( move_uploaded_file($tmp_dir, $file) ){
						$file = $file . ',';
						$files = $files . $file;
					}
					else{
						break;	
					}				
				}// image type
			} // files iterator

			$files = rtrim($files, ',');

		} // save files
		$query = "INSERT INTO form (vin, contract, contract_date, contract_month, contract_year, 
									   engine_type, engine_value, transmission, car_color, diller, city, 
									   manadger, write_date, write_month, write_year, second_name, name, patronymic, 
									   e_mail, phone, age, marital_status, childrens, education, job, 
									   hobbi, scope, weekend, life, cars, car_mark, car_model, car_year, 
									   owner, car_view_mark, car_view_model, car_view_mark1, car_view_model1, 
									   choose, source, magazine, radio, cites, tv, tv_programs, advertising, processing, subscription, image) 
					VALUES ('$vin', '$contract', '$contract_date', '$contract_month', '$contract_year', 
						    '$engine_type', '$engine_value', '$transmission', '$car_color', '$diller', '$city', 
							'$manadger', '$write_date', '$write_month', '$write_year', '$second_name', '$name', '$patronymic', 
							'$e_mail', '$phone', '$age', '$marital_status', '$childrens', '$education', '$job', 
							'$hobbi', '$scope', '$weekend', '$life', '$cars', '$car_mark','$car_model', '$car_year', 
							'$owner', '$car_view_mark', '$car_view_model', '$car_view_mark1','$car_view_model1', 
							'$choose', '$source', '$magazine', '$radio', '$cites', '$tv', '$tv_programs', '$advertising',
							'$processing', '$subscription', '$files')";

		$result = mysql_query($query);
		if( $result ){
			echo '<script type="text/javascript">'
   				, 'modal();'
   				, '</script>';
		} // save form
		else{
			echo mysql_error();
		}


	} // form 

?>