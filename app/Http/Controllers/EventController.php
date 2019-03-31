<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Session;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
class EventController extends Controller
{
    public function index(Request $request)
    {
        $data = $request['events'];

        $dates = [];
        if(count($data)) {
            foreach ($data as $key => $value) {
                $dates[] = $value;
//                $events[] = Calendar::event(
//                    $value['title'],
//                    true,
//                    new \DateTime($value['start_date']),
//                    new \DateTime($value['end_date'].' +1 day'),
//                    null,
//                    // Add color and link on event
//                    [
//                        'color' => '#ff0000',
//                        'url' => 'pass here url and any route',
//                    ]
//                );
            }
        }
//        $calendar = Calendar::addEvents($events);
        return view('calendar', compact('dates'));
    }
}
