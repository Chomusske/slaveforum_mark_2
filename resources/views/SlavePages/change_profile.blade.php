<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<title>Форум</title>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
		<!-- Кодировка страницы -->
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<div class="wrapper">
			<div class="content">
					<div class="change_profile">
						<div class="container">
							<div class="change_profile_column">
                                
								<div class="change_profile_row">
                                    
										<div class="old_profile_column">
											<div class = "old_profile_avatar"></div>
											<div class = "old_profile_name">Имя</div>
										</div>
										<div class="new_profile_column">
											<div class = "new_profile_avatar"></div>
											<div class = "new_profile_name">Новое имя</div>
										</div>
									
                                </div>
                                <div class="change_profile_button_column">
                                    <a href ='./my_profile.html'><button class="change_profile_button change_prof_button">Сменить</button></a>
                                    <a href ='./my_profile.html'><button class="change_profile_button change_prof_button">Назад</button></a>
							    </div>
                            </div>
						</div>
					</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="footer_row">
				<div class="footer_text">УЛГУ 2023</div>
				</div>
			</div>
		</div>
	</body>
</html>