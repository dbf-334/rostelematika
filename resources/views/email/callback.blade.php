
<table style="width: 100%;">
    <tr>
        <td>
            <!-- Заголовок письма -->
            <table>
                <tr>
                    <td>
                        <img src="https://ros-telematika.ru/upload/logo.png" style="" alt="">
                    </td>
                    <td style="width: 100%; text-align: center;">

                        <h1 style="margin: 0;">Необходимо перезвонить клиенту</h1>
                        <div>Ростелематика \ Сообщение системы</div>


                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <!-- Тело письма -->
            <table style="width: 100%">
                <tr>
                    <td style="padding: 30px 0;">
                        <p>
                            Клиент <span style="font-weight: bold; color: #2a7298;">{{request()->name}}</span>
                            заказал обратный звонок на номер
                            <span style="font-weight: bold; color: #2a7298;">{{request()->phone}}</span>.
                        </p>
                        <p>
                            Заявка была сделана со страницы:
                            <a href="{{request()->url}}" target="_blank">{{request()->url}}</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #eee; text-align: center; padding: 15px 0;">
                        <span style="color: #777;">Ростелематика | </span>
                        <a href="https://ros-telematika.ru/" target="_blank">www.ros-telematika.ru</a>
                    </td>
                </tr>
            </table>
        </td>

    </tr>
</table>



