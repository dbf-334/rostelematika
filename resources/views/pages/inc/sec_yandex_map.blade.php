
{{-- Вставляем код Яндекс-карты с подгрузкой данных из БД --}}
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        ymaps.ready(init);

        function init(){
            var myMap = new ymaps.Map("map-item", {
                center: [ {{$domain->y_map}} ],
                zoom: 16,
                controls: []
            });
            var myPlacemark = new ymaps.Placemark([ {{$domain->y_map}} ], {
                balloonContentBody: '<div class="my_hr1 map__head"><img src="/img/main/mapicon.png">{{$domain->org}}</div><p class="map__address">г. {{$domain->name}}, {{$domain->address}}</p><div class="map__text"><div>{{ app('global')['main_phone'] }} (бесплатно по РФ)</div><div>{{$domain->tel1}}</div><div>{{$domain->tel2}}</div></div>',
                hintContent: "",
                closeButton: false
            });
            myMap.geoObjects.add(myPlacemark);
        }
    });
</script>