/*** Обработчик калькулятора на странице ***/
$(document).ready(function () {

    window.calc_data = {
        "type": [
            {
                name: "Грузовики",
                count: 35,
                price: 16400,
                nofuel: 4390
            },
            {
                name: "Спец. техника",
                count: 40,
                price: 18400,
                nofuel: 6390
            },
            {
                name: "Топливозаправщики",
                count: 33,
                price: 22500,
                nofuel: 4390
            },
            {
                name: "Тракторы и с/х техника",
                count: 42,
                price: 17400,
                nofuel: 4390
            },
            {
                name: "Такси",
                count: 13,
                price: 10600,
                nofuel: 10600 //не учитываем в калькуляторе
            },
            {
                name: "Поезда",
                count: 550,
                price: 28000,
                nofuel: 4390
            },
            {
                name: "Легковой транспорт",
                count: 12,
                price: 4390,
                nofuel: 7700 //не учитываем в калькуляторе
            }],
        "tarif": [
            {
                name: "Базовый",
                price: 250
            },
            {
                name: "Стандарт",
                price: 350
            },
            {
                name: "Премиум",
                price: 450
            },
            {
                name: "VIP",
                price: 550
            }
        ]
    };

    var calc_step = 1; //номер текущего окна в форме

    $('#calc_btn_next').click(function () {
        //анимация переключения формы
        $(".calc_body_step" + calc_step).css({'position': 'relative'});
        $(".calc_body_step" + (calc_step+1)).css({'position': 'relative','display':'block'});
        temp = 0-$(".calc_body_step" + calc_step).outerWidth();
        $(".calc_body_step" + (calc_step+1)).css({'left': temp });

        $({numberValue: 0}).animate({numberValue: $(".calc_body_step" + calc_step).outerWidth()}, {
            duration: 200, //скорость анимации
            easing: 'linear',
            step: function() {
                $(".calc_body_step" + calc_step).css({'left': this.numberValue+'px'});
                $(".calc_body_step" + (calc_step+1)).css({'left': temp+this.numberValue+'px'});
            },
            complete: function() {
                calc_hide_form(); //отключаем текущие элементы на форме
                $(".calc_body_step" + calc_step).css({'display': 'none'});


                //пошаговый переход на форме
                if (calc_step < 5) {
                    calc_step++; //прибавляем шаг

                    $('#calc_btn_back').css({'visibility': 'visible'}); //показываем кнопку "Назад" начиная со второго шага
                    $(".calc_body_step" + calc_step).css({'position': 'inherit'});

                    //достигли результата
                    if (calc_step == 5) {
                        //скрываем кнопку "вперед" на последнем шаге
                        $('#calc_btn_next').css({'visibility': 'hidden'});

                        //считаем экономию за месяц
                        calc_sel_check = $('.calc_body_step1 input[name=calc_check_amount]:checked').val();
                        calc_rez_month = Math.round(calc_data.type[calc_sel_check].count / 100 * $('.calc_step3_count').val() *
                            $('.calc_step4_count').val() * 0.15 * $('.calc_step2_count').val());
                        $('.calc_rez_month').html(calc_rez_month + ' руб');

                        //считаем экономию за год
                        calc_rez_year = calc_rez_month * 12;
                        $('.calc_rez_year').html(calc_rez_year + ' руб');

                        //считаем стоимость обслуживания
                        calc_service();

                        //считаем стоимость решения с контролем топлива
                        calc_rez_total = $('.calc_step2_count').val() *
                            calc_data.type[ $('.calc_body_step1 input[name=calc_check_amount]:checked').val() ].price;
                        $('.calc_rez_total').html(calc_rez_total + ' руб');

                        //считаем стоимость решения без контроля топлива
                        calc_rez_total_nofuel = $('.calc_step2_count').val() *
                            calc_data.type[$('.calc_body_step1 input[name=calc_check_amount]:checked').val()].nofuel;
                        $('.calc_rez_total_nofuel').html(calc_rez_total_nofuel + ' руб');

                        //управляем блоком - стоимость решения без контроля топлива из расчетов
                        //прячем, если выбраны Такси(4) и Легковой транспорт(6)
                        if ( ( $('.calc_body_step1 input[name=calc_check_amount]:checked').val() == 4 ) ||
                            ( $('.calc_body_step1 input[name=calc_check_amount]:checked').val() == 6 ) )
                        {
                            $('.calc_nofuel_flag').css({'display': 'none'}); //прячем блок
                        } else {
                            $('.calc_nofuel_flag').css({'display': 'flex'}); //показываем блок
                        }
                    }

                }

                calc_show_form(); //включаем элементы новой формы
            }
        });


    });



    $('#calc_btn_back').click(function () {
        $(".calc_progress_step" + calc_step + " .calc__progress__line").css({'background-color': '#dcdcdc'});

        //анимация переключения формы
        $(".calc_body_step" + calc_step).css({'position': 'relative'});
        $(".calc_body_step" + (calc_step-1)).css({'position': 'relative','display':'block'});
        temp = 0-$(".calc_body_step" + calc_step).outerWidth();
        $(".calc_body_step" + (calc_step-1)).css({'left': temp });

        $({numberValue: 0}).animate({numberValue: $(".calc_body_step" + calc_step).outerWidth()}, {
            duration: 200, //скорость анимации
            easing: 'linear',
            step: function () {
                $(".calc_body_step" + calc_step).css({'left': this.numberValue + 'px'});
                $(".calc_body_step" + (calc_step - 1)).css({'left': temp + this.numberValue + 'px'});
            },
            complete: function () {
                calc_hide_form(); //отключаем текущие элементы на форме
                $(".calc_body_step" + calc_step).css({'display': 'none'});
                $(".calc_body_step" + (calc_step-1)).css({'left': '0'});

                //пошаговый переход на форме
                if (calc_step > 1) {
                    calc_step--; //убавляем шаг

                    $('#calc_btn_next').css({'visibility': 'visible'}); //показываем кнопку "вперед"
                }

                if (calc_step == 1) {
                    $('#calc_btn_back').css({'visibility': 'hidden'}); //скрываем кнопку "Назад" на первом шаге
                }

                calc_show_form(); //включаем элементы новой формы
            }
        });

    });



    //считаем стоимость обслуживания при изменении тарифа
    $('.calc_body_step5 input[name=calc_check_tarif]').change(function () {calc_service();});

    function calc_service() {
        //считаем стоимость обслуживания
        calc_rez_service = $('.calc_step2_count').val() *
            calc_data.tarif[$('.calc_body_step5 input[name=calc_check_tarif]:checked').val()].price;

        //анимация счетчика после выбора тарифа
        $({numberValue: 0}).animate({numberValue: calc_rez_service}, {
            duration: 500, //скорость анимации
            easing: 'linear',
            step: function() {
                $('.calc_rez_service').html(Math.ceil(this.numberValue) + ' руб');
            }
        });

    };

    function calc_hide_form() {
        //убираем оформление прогресс-бара
        //$(".calc_progress_step" + calc_step + " .calc__progress__line").css({'background-color': '#dcdcdc'});
        $(".calc_progress_step" + calc_step + " .calc__progress__number").css({
            'color': '#dcdcdc',
            'opacity': '0'
        });
        //скрываем форму
        $(".calc_body_step" + calc_step).css({'display': 'none'});
    };

    function calc_show_form() {
        //делаем новое оформление прогресс-бара
        $(".calc_progress_step" + calc_step + " .calc__progress__line").css({'background-color': '#f93446'});
        $(".calc_progress_step" + calc_step + " .calc__progress__number").css({
            'color': '#f93446',
            'opacity': '1'
        });
        //показываем новую форму
        $(".calc_body_step" + calc_step).css({'display': 'block'});
    };


    // Управляющие элементы формы - Шаг-2
    $('.calc_step2_count').change(function () {
        $('.calc_step2_range').val($(this).val());
        $('.calc_step2_text').html($(this).val());
        $('.calc_step2_inner').css({'left': ($('.calc_step2_range').val() * ($('.calc_step2_range').outerWidth() / 1000)) + 'px'});
    });
    $('.calc_step2_range').on('input', function () {
        $('.calc_step2_count').val($(this).val());
        $('.calc_step2_text').html($(this).val());
        $('.calc_step2_inner').css({'left': ($(this).val() * ($(this).outerWidth() / 1000)) + 'px'});
    });

    // Управляющие элементы формы - Шаг-3
    $('.calc_step3_count').change(function () {
        $('.calc_step3_range').val($(this).val());
        $('.calc_step3_text').html($(this).val());
        $('.calc_step3_inner').css({'left': ($('.calc_step3_range').val() * ($('.calc_step3_range').outerWidth() / 100000)) - 8 + 'px'});
    });
    $('.calc_step3_range').on('input', function () {
        $('.calc_step3_count').val($(this).val());
        $('.calc_step3_text').html($(this).val());
        $('.calc_step3_inner').css({'left': ($(this).val() * ($(this).outerWidth() / 100000)) - 8 + 'px'});
    });

    // Управляющие элементы формы - Шаг-4
    $('.calc_step4_count').change(function () {
        $('.calc_step4_range').val($(this).val());
        $('.calc_step4_text').html($(this).val());
        $('.calc_step4_inner').css({'left': ($('.calc_step4_range').val() * ($('.calc_step4_range').outerWidth() / 100)) - 16 + 'px'});
    });
    $('.calc_step4_range').on('input', function () {
        $('.calc_step4_count').val($(this).val());
        $('.calc_step4_text').html($(this).val());
        $('.calc_step4_inner').css({'left': ($(this).val() * ($(this).outerWidth() / 100)) - 16 + 'px'});
    });


});




