
{{-- Содержимое почтового шаблона COMPRED/Коммерческое предложение --}}
@extends('email.layout.base_system')


@section('mail_title')
    <h1 style="margin: 0;">Клиент хочет купить оборудование</h1>
@endsection


@section('mail_content')
    <!-- Тело письма -->
    <table style="width: 100%">
        <tr>
            <td style="padding: 30px 0;">
                <p>
                    Клиент <span style="font-weight: bold; color: #2a7298;">{{request()->name}}</span>
                    номер <span style="font-weight: bold; color: #2a7298;">{{request()->phone}}</span>,
                    почта <span style="font-weight: bold; color: #2a7298;">{{request()->email}}</span>
                    {{--из города <span style="font-weight: bold; color: #2a7298;">{{request()->city}}</span>,--}}
                    хочет купить оборудование <span style="font-weight: bold; color: #2a7298;">{{request()->comment}}</span>
                    в количестве <span style="font-weight: bold; color: #2a7298;">{{request()->count}} шт</span>.
                </p>
                <p>
                    Заявка была сделана со страницы:
                    <a href="{{request()->url}}" target="_blank">{{request()->url}}</a>
                </p>
            </td>
        </tr>
    </table>
@endsection
