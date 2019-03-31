@extends('layouts/app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/dat_style.css')}}"/>
@endsection

@section('content')

    <p>
        <?php
        use Carbon\Carbon;
        use Carbon\CarbonImmutable;
        $en = CarbonImmutable::now()->locale('en_US');

        // $week_names[]=["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"];

        ?></p>
    <div id="Schedule">
        <table>

            <thead>
            <tr class="H_cal">
                <?php
                $title_days = array();
                for($i = 0; $i <= 14;$i++){
                $day = Carbon::now()->addDays($i); ?>
                <td><?php echo $day->locale('ru')->isoFormat('dddd D, M, Y')?></td>

                <?php
                $title_days[] = [$day];
                }
                ?>
            </tr>
            </thead>
            <?php
            for($j = 9;$j < 18;$j++)
            {
            ?>
            <tbody>
            <tr>
                <?php
                for($i = 0;$i <= 14;$i++)
                {
                if($schedule_days[$i][$j][1] >= 1){
                ?>
                <td class="S1"
                    data-time="{{$schedule_days[$i][$j][0]}}"> <?php echo date('H:i:s', strtotime($schedule_days[$i][$j][0]));?> </td>

                <?php
                }
                else if ($schedule_days[$i][$j][1] == 0){
                ?>
                <td class="S2">Заказано</td>
                <?php
                }

                else {
                ?>
                <td class="S0">Выходной</td>
                <?php
                }

                }
                ?> </tr> <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <script type="application/javascript">
        $('td').on('click', function () {
            var self = $(this);
            if ($(this).hasClass('S1')) {

                var contact = prompt('Имя и номер телефона владельца:');
                var model = prompt('Модель автомобиля:');
                var title = prompt('VIN код автомобиля:');

                // var title = prompt('VIN Code:');
                if(title&&model) {
                $.ajax({
                   method: 'post',
                    url: '{{route('boking.store')}}',
                   data: 'data=' + $(this).attr('data-time') + '&service_id={{$service_id}}&vin='+title+'&contact='+contact+'&model='+model,
                   headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success(res) {
                        // console.log(res);
                        // if(res) {
                        self.addClass('S2').removeClass('S1');
                        self.text('Заказано');
                        var al=alert('Време забронированно');
                        window.location.reload();
                        // }
                    }
                });
                } else { var al=alert('Чтоб забронировать необходимо заполнить контактный номер и марку авто! ');}
            }
            else if ($(this).hasClass('S2')) {
                var al=alert('Извините время занято!');
            }
            else if ($(this).hasClass('S0')) {
                var al=alert('Извините в выбраное время выходной день!');
            }

        })
    </script>
@endsection