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
		<meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/burger.js') }}"></script>
		<div class="wrapper">
			<div class="content">
                <header class="header">
                    <div class="header_body">
                        <div class="header_burger">1
                            <span></span>
                        </div>
                        <nav class="header_menu">
                            <ul class="header_ul">
                                <li><button class="forum_li">Форум</button></li>
                                <li><button class="users_li">Пользователи</button></li>
                                <li><button class="bot_li">Бот</button></li>
                            </ul>
                        </nav>
                        <a href="./index.html"><button class="create_thread_back_button my_profile_button">Выйти</button></a>
                    </div>
                    
                        
                   
                </header>
					<div class="my_profile">
						<div class="container">
                            <div class="my_profile_row">
                                	<div class="my_profile_avatar_image">
										<img class src="././img/avatar.JPG" alt="">
									</div>
									<div class="my_profile_info">
										<div class="my_profile_name">Имя</div>
										<div class="my_profile_role">Роль</div>
										<a href="./create_thread.html"><button class="my_profile_create_theme">Создать тему</button></a>
										
									</div>
									<a href="./change_profile.html"><button class="my_profile_chamge_profile">Изменить профиль</button></a>
                            </div>
							
						</div>
					</div>
					<div class="my_profile_columns">
						<div class="container1_row">
							<div class="my_profile_columns_row">
								<div class="my_profile_columns_columns">
									<div class="my_profile_columns_item2 item">
										<div class="my_profile_columns_name">Товарищи</div>
										<div class="my_profile_columns_item item">
											<div class="my_profile_item_row">
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Роль</div>
												</div>
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Роль</div>
												</div>
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Роль</div>
												</div>
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Роль</div>
												</div>
												
											
											
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="my_profile_columns_row">
								<div class="my_profile_columns_columns">
									<div class="my_profile_columns_item2 item">
										<div class="my_profile_columns_name">Комментарии</div>
										<div class="my_profile_columns_item item">
											<div class="my_profile_item_row">
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Комментарий</div>
												</div>
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Комментарий</div>
												</div>
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Комментарий</div>
												</div>
												<div class="my_profile_item_col">
													<div class="my_profile_item_name">Имя</div>
													<div class="my_profile_item_role">Комментарий</div>
												</div>
												
											
											
											</div>
										</div>
									</div>
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