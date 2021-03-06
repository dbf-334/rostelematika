
{{-- Содержимое почтового шаблона CALLBAK/Обратный звонок --}}
@extends('email.layout.base_system')


@section('mail_title')
    <h1 style="margin: 0;">Необходимо перезвонить клиенту</h1>
@endsection


@section('mail_content')
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
    </table>
@endsection
