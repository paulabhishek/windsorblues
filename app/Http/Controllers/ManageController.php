<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use App\Models\News;
use App\Models\User;
//use http\Env\Response;
use Illuminate\Auth\Access\Events\GateEvaluated;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Newsletter;

class ManageController extends Controller
{
    public function index(){
        return view('manage.index');
    }


//NEWS
    public function newsIndex(){
        $news = NEWS::get();
//        dd($news);
        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
        return view('manage.news.index', compact("news"));
    }

    public function newsShow($news){
        $news = News::find($news);

        return view('manage.news.show', compact("news"));
    }

    public function newsCreate(){
        $users = User::all()->pluck('id');
        return view('manage.news.create', compact("users"));
    }

//    public function eventStore(Request $request){
////        dd($request->file('file'));
//        $user = auth()->user();
//        $event = new Event($request->all());
////        dd($event);
//        $user->events()->save($event);
//
//        if ($request->hasFile('file') &&
//            $request->file('file')->isValid()) {
//            $path = $request->file->storePublicly('images', 'public');
//            $event->file = $path;
//            $event->save();
//        }
//        return redirect('manage/event');
//    }
    public function newsStore(Request $request){
//        dd($request->img_banner);
//        dd($request->file('img_banner'));
        $user = auth()->user();
        $news = new news($request->all());
        $user->news()->save($news);

        if ($request->hasFile('img_banner') &&
            $request->file('img_banner')->isValid()) {
//            dd( $request->hasFile('img_banner'));
            $path = $request->img_banner->storePublicly('images', 'public');
            $news->img_banner =$path;
            $news->save();

            if ($request->hasFile('img_highlight1') &&
                $request->file('img_highlight1')->isValid()) {
                $path = $request->img_highlight1->storePublicly('images', 'public');
                $news->img_highlight1 = $path;
                $news->save();
                if ($request->hasFile('img_highlight2') &&
                    $request->file('img_highlight2')->isValid()) {
                    $path = $request->img_highlight2->storePublicly('images', 'public');
                    $news->img_highlight2 = $path;
                    $news->save();
                    if ($request->hasFile('img_highlight3') &&
                        $request->file('img_highlight3')->isValid()) {
                        $path = $request->img_highlight3->storePublicly('images', 'public');
                        $news->img_highlight3 = $path;
                        $news->save();
                        if ($request->hasFile('img_highlight3') &&
                            $request->file('img_highlight3')->isValid()) {
                            $path = $request->img_highlight3->storePublicly('images', 'public');
                            $news->img_highlight3 = $path;
                            $news->save();
                            if ($request->hasFile('img_highlight4') &&
                                $request->file('img_highlight4')->isValid()) {
                                $path = $request->img_highlight4->storePublicly('images', 'public');
                                $news->img_highlight4 = $path;
                                $news->save();
                                if ($request->hasFile('img_highlight5') &&
                                    $request->file('img_highlight5')->isValid()) {
                                    $path = $request->img_highlight5->storePublicly('images', 'public');
                                    $news->img_highlight5 = $path;
                                    $news->save();
                                }
                            }
                        }
                    }
                }
            }
        }

        return redirect('manage/news');
    }

    public function newsDestroy(User $id){
        $id->delete();
        return redirect('manage/news');
    }

    public function newsEdit($news){
        $news = News::findorFail($news);
        return view('manage.news.edit', compact("news"));
    }

    public function newsUpdate(Request $request, $news){
        $formdata = $request->all();
        $news = News::findorfail($news);
        $news->update($formdata);
        return redirect('manage/news');
    }




//EVENTS
    public function eventIndex(){
        $events = Event::get();
        return view('manage.events.index', compact("events"));
//        dd($events);
    }

    public function eventShow($event){
        $event = Event::find($event);
        return view('manage.events.show', compact("event"));
    }

    public function eventCreate(){
        $users = User::all()->pluck('id');
        return view('manage.events.create', compact("users"));
    }

    public function eventStore(Request $request){
//        dd($request->file('file'));
        $user = auth()->user();
        $event = new Event($request->all());
//        dd($event);
        $user->events()->save($event);

        if ($request->hasFile('file') &&
            $request->file('file')->isValid()) {
            $path = $request->file->storePublicly('images', 'public');
            $event->file = $path;
            $event->save();
        }
        return redirect('manage/event');
    }

    public function eventUpdate(Request $request, $event){
        $formdata = $request->all();
        $event = Event::findorfail($event);
        // checks if request has file
        if ($request->hasFile('file')){
            //deletes the previous file
            Storage::disk('public')->delete($event->file);
            $path = $request->file->storePublicly('images', 'public');
            $event->update($formdata);
            $event->file = $path;
            $event->update();
        }
        // if there was no file submitted in the update form
        else{
            $old_file = $event->file;
            $event->update($formdata);
            $event->file = $old_file;
            $event->update();
        }
        return redirect('manage/event');
    }

    public function eventDestroy(Event $id){
        $id->delete();
        return redirect('manage/event');
    }
    public function eventEdit($event){
        $event = Event::findorFail($event);
        return view('manage.events.edit', compact("event"));
    }


//ADMIN
    public function adminIndex(){
        $admin = User::get();
        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
        return view('manage.admin.index', compact("admin"));
        dd($admin);
    }

    public function adminShow($id){
        $id = User::find($id);

        return view('manage.admin.show', compact("id"));
    }

    public function adminCreate(){
        $users = User::all()->pluck('id');
        return view('manage.admin.create', compact("users"));
    }

    public function adminStore(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'level' => ['required', 'integer', 'digits_between:1,2'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level
        ]);
        event(new Registered($user));
        return redirect('manage/admin');
    }

    public function adminDestroy(User $id){
        $id->delete();
        return redirect('manage/admin');
    }

    public function adminEdit($id){
        $id = User::findorFail($id);
        return view('manage.admin.edit', compact("id"));
    }

    public function adminUpdate(Request $request, $id){
        $formdata = $request->all();
        $id = User::findorfail($id);
        $id->update($formdata);
        return redirect('manage/admin');
    }



    //MAILCHIMP
    public function mailchimpSync(){
        $member = DB::table('members')->select('name', 'email', 'phone')->where('newsletter', '=', 1)->where('terms', '=', 1)->get();
//        dd($member);
        foreach ($member as $obj){
            $name = trim($obj->name);
//            dump($name);
            $parts = explode(" ", $name);
//            dump($parts);
            $lname  = array_pop($parts);
//            dump($lname);
            $fname = implode(" ", $parts);
            $fname = preg_replace('/[^A-Za-z0-9\-]/', '', $fname);
            dump($fname);
            $arr = ['FNAME'=> $fname, 'LNAME'=>$lname,'PHONE'=>$obj->phone, 'EMAIL'=>$obj->email];
//            dump($arr);

        Newsletter::subscribe($obj->email, $arr);
//            dump(Newsletter::getLastError(), Newsletter::getApi());
        }
//        dd(Newsletter::getLastError(), Newsletter::getApi());
        return redirect('manage/member');
    }

    public function mailchimpUpdate(){
        $member = DB::table('members')->select('name', 'email', 'phone')->where('newsletter', '=', 1)->where('terms', '=', 1)->get();
        foreach ($member as $obj){
            $name = trim($obj->name);
            $parts = explode(" ", $name);
            $lname  = array_pop($parts);
            $fname = implode(" ", $parts);
            $fname = preg_replace('/[^A-Za-z0-9\-]/', '', $fname);
            $arr = ['FNAME'=> $fname, 'LNAME'=>$lname,'PHONE'=>$obj->phone, 'EMAIL'=>$obj->email];

            Newsletter::subscribeOrUpdate($obj->email, $arr);
//            dump(Newsletter::getLastError(), Newsletter::getApi());
        }
//        dd(Newsletter::getLastError(), Newsletter::getApi());
        return redirect('manage/member');
    }

    public function mailchimpUnsub(Request $request){
//        dd($request->all());
        Newsletter::unsubscribe($request['email']);
        return 'unsubscribed!';
    }



//MEMBER

    public function memberIndex(){
        $members = Member::get();
        return view('manage.member.index', compact("members"));
    }
//YEAR_TO_DAYS
    public static function dateDiffInDays($date1){
        $date2 = date("d-m-Y");
        $timestamp = strtotime($date1);
        $date1 = date("d-m-Y", $timestamp);
        $diff = strtotime($date2) - strtotime($date1);
        $dateDiff = abs(round($diff / 86400));
        if ($dateDiff >= 365){
            return '-'. $dateDiff .' days' . ' (expired)';
        }
        else
        return $dateDiff . ' days';
    }


    public function memberDestroy(Member $id){
        $id->delete();
        return redirect('manage/member');
    }

    public function memberCreate(){
//        $users = User::all()->pluck('id');
        return view('manage.member.create');
    }
//    public function memberShow($member){
//        $member = Member::find($member);
//        return view('manage.member.show', compact("member"));
//    }


    public function memberStore(Request $request){
        $user = auth()->user();
        $member = new member($request->all());

//        if (Member::find($member->email))
        if ($member->newsletter == 1 && $member->terms == 1 ) {
            $user->members()->save($member);
        }
        return redirect('manage/member');
    }


    public function memberEdit($member){
        $member = Member::findorFail($member);
        return view('manage.member.edit', compact("member"));
    }

    public function memberUpdate(Request $request, $member){
        $formdata = $request->all();
        $member = Member::findorfail($member);
        $member->update($formdata);
        return redirect('manage/member');
    }

    public function searchMember(Request $request){

         $get_name = $request->search;
         $member =  Member::where(function ($query) use($request){
             $query->where('name', 'LIKE', '%' . $request->search .'%');
             $query->orWhere('email', 'LIKE', '%' . $request->search .'%');
             $query->orWhere('phone', 'LIKE', '%' . $request->search .'%');
         })->get();
//        return dd($member);
         return view('manage.member.search', compact('member', 'get_name'));

    }
}
