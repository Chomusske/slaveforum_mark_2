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
		<!-- Поменять классы на соответвующие странице - чужой профиль! -->
		<div class="wrapper">
			<div class="content">
                <header class="header">
                    <div class="header_body">
                        <div class="header_burger">
                            <span></span>
                        </div>
                        <nav class="header_menu">
                            <ul class="header_ul">
								<li><a href="./branches.html"><button class="forum_li">Форум</button></a></li>
                                <li><a href="./users.html"><button class="users_li">Пользователи</button></a></li>
                                <li><a href=""><button class="bot_li">Бот</button></a></li>
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
										
										
									</div>
									
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