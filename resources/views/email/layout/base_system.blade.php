
{{-- Базовый шаблон письма для отправки заявок с сайта --}}

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Почтовое сообщение</title>
    </head>


    <body>

        <table style="width: 100%;">
            <tr>
                <td>
                    <!-- Заголовок письма -->
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <img src="https://ros-telematika.ru/img/main/logo.png" style="" alt="">
                            </td>
                            <td style="width: 100%; text-align: center;">
                                {{--вставляем заголовок письма--}}
                                @yield('mail_title')
                                <div>Ростелематика \ Сообщение системы</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    {{--вставляем тело письма--}}
                    @yield('mail_content')
                </td>
            </tr>

            <tr>
                <!-- Подвал письма -->
                <td style="background-color: #eee; text-align: center; padding: 15px 0;">
                    <span style="color: #777;">Ростелематика | </span>
                    <a href="https://ros-telematika.ru/" target="_blank">www.ros-telematika.ru</a>
                </td>
            </tr>

        </table>

    </body>
</html>

