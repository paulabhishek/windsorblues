<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\News;
use App\Models\Event;
use App\Models\PresidentMSG;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class WelcomeController extends Controller
{

    public function index(){
        $news = News::orderByDesc('date')->limit(5)->get();
        $event = Event::orderByDesc('date')->limit(1)->get();
        $pres_msg = PresidentMSG::get();
//        dump($news, count($news));
        return view('welcome', compact("news", "pres_msg", "event"));
//        dd($events);
    }

    public function chathamIndex(){
        return view('chatham.home');
    }

    public function newsletterStore(Request $request){
        $validatedData = $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
        ]);
        $member = new Member($request->all());

        if ($member->newsletter == 1) {
            $member->terms = 0;
            $member->user_id = 0;
            $member->date = Carbon::today()->toDateString();
            $member->name = $validatedData['name'];
            $member->phone = $validatedData['phone'];
            $member->email = $validatedData['email'];
            $member->save();
        }
        return redirect('/');

    }


    public static function time_elapsed_string($datetime, $full = true) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}
