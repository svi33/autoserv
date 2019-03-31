@extends('layouts.event')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('content')
    <div id="calendar"></div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {{--{!! $calendar->script() !!}--}}
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: '2019-03-12',
                navLinks: true, // can click day/week names to navigate views
                minTime: '08:00:00',
                maxTime: '18:00:00',
                slotDuration: '00:30:00',
                timeFormat: 'h:mm',
                firstDay: 1,//monday
                weekends: false,
                selectable: false,
                eventLimit: true,
                selectHelper: true,
                allDaySlot: false,
                select: function(start, type) {
                    $.ajax({
                    });
                    // var end = start + type;
                    // alert('popup');
                    var title = prompt('Event Title:');
                    var eventData;
                    if (title) {
                        eventData = {
                            title: title,
                            start: start,
                            end: type
                        };
                        console.log(eventData);
                        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                    }
                    $('#calendar').fullCalendar('unselect');
                },
                editable: true,
                resources: [
                    { id: 'a', title: 'Room A' },
                    { id: 'b', title: 'Room B' },
                    { id: 'c', title: 'Room C' }
                ],


                events: [
                    @foreach($dates as $date)
                        {
                            title: '{{$date['title']}}',
                            start: '{{$date['start_date']}}',
                            end: '{{$date['end_date']}}'
                        },
                    @endforeach
                ]
            });
        });
    </script>
@endsection