<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class CarbonDateController extends Controller
{
    public function getDate()
    {
        $current = Carbon::now();
        $current = new Carbon();

        echo $today = Carbon::today();
        echo "<br>";

        echo $yesterday = Carbon::yesterday();
        echo "<br>";

        echo $tomorrow = Carbon::tomorrow();
        echo "<br>";

        echo $newYear = new Carbon('first day of January 2016');
        echo "<br>";

        echo $current = Carbon::now();
        echo "<br>";

        echo $trialExpires = $current->addDays(30);
        echo "<br>";

        $dt = Carbon::create(2015, 1, 31, 0);

        echo $dt->toDateTimeString();
        echo "<br>";

        echo $dt->addYears(5);
        echo "<br>";

        echo $dt->addYear();
        echo "<br>";

        echo $dt->subYear();
        echo "<br>";

        echo $dt->subYears(5);
        echo "<br>";

        echo $dt->addMonths(60);
        echo "<br>";

        echo $dt->addMonth();
        echo "<br>";

        echo $dt->subMonth();
        echo "<br>";

        echo $dt->subMonths(60);
        echo "<br>";

        echo $dt->addDays(29);
        echo "<br>";

        echo $dt->addDay();
        echo "<br>";

        echo $dt->subDay();
        echo "<br>";

        echo $dt->subDays(29);
        echo "<br>";


        echo $dt->addWeekdays(4);
        echo "<br>";

        echo $dt->addWeekday();
        echo "<br>";

        echo $dt->subWeekday();
        echo "<br>";

        echo $dt->subWeekdays(4);
        echo "<br>";

        echo $dt->addWeeks(3);
        echo "<br>";

        echo $dt->addWeek();
        echo "<br>";

        echo $dt->subWeek();
        echo "<br>";

        echo $dt->subWeeks(3);
        echo "<br>";

        echo $dt->addHours(24);
        echo "<br>";

        echo $dt->addHour();
        echo "<br>";

        echo $dt->subHour();
        echo "<br>";

        echo $dt->subHours(24);
        echo "<br>";

        echo $dt->addMinutes(61);
        echo "<br>";

        echo $dt->addMinute();
        echo "<br>";

        echo $dt->subMinute();
        echo "<br>";

        echo $dt->subMinutes(61);
        echo "<br>";

        echo $dt->addSeconds(61);
        echo "<br>";

        echo $dt->addSecond();
        echo "<br>";

        echo $dt->subSecond();
        echo "<br>";

        echo $dt->subSeconds(61);
        echo "<br>";

        echo $dt->toDateString();
        echo "<br>";

        echo $dt->toFormattedDateString();
        echo "<br>";

        echo $dt->toTimeString();
        echo "<br>";

        echo $dt->toDateTimeString();
        echo "<br>";

        echo $dt->toDayDateTimeString();
        echo "<br>";

        echo $dt->format('l jS \\of F Y h:i:s A');
        echo "<br>";


        $current = Carbon::now();
        $dt = Carbon::now();

        $dt = $dt->subHours(6);

        echo $dt->diffInHours($current);
        echo "<br>";

        echo $current->diffInHours($dt);
        echo "<br>";

        $future = $current->addMonth();

        $past = $current->subMonths(2);

        echo $current->diffInDays($future);
        echo "<br>";

        echo $current->diffInDays($past);
        echo "<br>";



    }
}
