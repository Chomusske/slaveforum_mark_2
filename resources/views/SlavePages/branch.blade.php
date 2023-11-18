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
					<div class="branch">
						<div class="branch_container">
                            <div class="branch_column">
                                	<div class="branch_name">Название ветки</div>
                                    <div class="branch_container">
                                        <div class="branch_column_column">
                                            <div class="branch_row">
                                                <div class="branch_theme">
                                                    <div class="branch_comment_info_container">
                                                        <div class="branch_comment_info_avatar"></div>
                                                        <div class="branch_comment_info_container2">
                                                            <div class="branch_comment_info_name">Имя</div>
                                                            <div class="branch_comment_info_role">Роль</div>
                                                            <div class="branch_comment_info_date">Дата</div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="branch_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolorem odio nihil reiciendis eligendi saepe recusandae debitis reprehenderit tempore veritatis temporibus, quae minus, possimus nostrum blanditiis? Eaque sit non officiis.</div>
                                            </div>
                                            <div class="branch_row">
                                                <div class="branch_theme">
                                                    <div class="branch_comment_info_container">
                                                        <div class="branch_comment_info_avatar"></div>
                                                        <div class="branch_comment_info_container2">
                                                            <div class="branch_comment_info_name">Имя</div>
                                                            <div class="branch_comment_info_role">Роль</div>
                                                            <div class="branch_comment_info_date">Дата</div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="branch_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolorem odio nihil reiciendis eligendi saepe recusandae debitis reprehenderit tempore veritatis temporibus, quae minus, possimus nostrum blanditiis? Eaque sit non officiis.</div>
                                            </div>
                                            <div class="branch_row">
                                                <div class="branch_theme">
                                                    <div class="branch_comment_info_container">
                                                        <div class="branch_comment_info_avatar"></div>
                                                        <div class="branch_comment_info_container2">
                                                            <div class="branch_comment_info_name">Имя</div>
                                                            <div class="branch_comment_info_role">Роль</div>
                                                            <div class="branch_comment_info_date">Дата</div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="branch_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolorem odio nihil reiciendis eligendi saepe recusandae debitis reprehenderit tempore veritatis temporibus, quae minus, possimus nostrum blanditiis? Eaque sit non officiis.</div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
							
						</div>
					</div>
				<div class="message">
                    <div class="message_container">
                        <div class="message_row">
                            <textarea class="message_area">Написать сообщение</textarea>
                            <button class="send_message">Отправить</button>
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