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
                <header class="header_thread"><a href="./my_profile.html"><button class="create_thread_back_button">Назад</button></a></header>
					<div class="create_thread">
						<div class="container">
                            <div class="create_thread_column">
                                <textarea class="create_thread_title">Заголовок ветки </textarea>
                                <textarea class="create_thread_text">текст первого сообщения
                                </textarea>
                                <button class="create_thread_button">
                                    создать
                                </button>
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