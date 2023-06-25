<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use App\Models\Museum;
use App\Models\News;
use App\Models\PresidentMSG;
use App\Models\User;
//use http\Env\Response;
use DateTime;
use Illuminate\Auth\Access\Events\GateEvaluated;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Spatie\Newsletter\Newsletter;


class ManageController extends Controller
{
    public function index(){
        return view('manage.index');
    }

//PRESIDENT_MSG
    public function presidentmsgIndex(){
        $presidentmsg = PresidentMSG::get();
//        dd($news);
//        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
        return view('manage.presidentmsg.index', compact("presidentmsg"));
    }

    public function presidentmsgCreate(){
        $presidentmsg = User::all()->pluck('id');
        return view('manage.presidentmsg.create', compact("presidentmsg"));
    }

    public function presidentmsgStore(Request $request){
        $user = auth()->user();
        $presidentmsg = new presidentmsg($request->all());
        return redirect('manage/presidentmsg');
    }

    public function presidentmsgDestroy(PresidentMSG $id){
        $id->delete();
        return redirect('manage/presidentmsg');
    }

    public function presidentmsgUpdate(Request $request, $presidentmsg){
        $formdata = $request->all();
        $presidentmsg = PresidentMSG::findorfail($presidentmsg);
        $presidentmsg->update($formdata);
        return redirect('manage/presidentmsg');
    }

    public function presidentmsgShow($presidentmsg){
        $presidentmsg = PresidentMSG::find($presidentmsg);
        return view('manage.presidentmsg.show', compact("presidentmsg"));
    }

    public function presidentmsgEdit($presidentmsg){
        $presidentmsg = PresidentMSG::findorFail($presidentmsg);
        return view('manage.presidentmsg.edit', compact("presidentmsg"));
    }

//MUSEUM
    public function museumIndex(){
        $museum = Museum::get();
//        dd($news);
//        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
        return view('manage.museum.index', compact("museum"));
    }

    public function museumCreate(){
        $museum = User::all()->pluck('id');
        return view('manage.museum.create', compact("museum"));
    }

    public function museumStore(Request $request){
//        dd($request->file('file'));
        $user = auth()->user();
        $museum = new Museum($request->all());
//        dd($museum);
//        dd($museum);
        $user->museums()->save($museum);

        if ($request->hasFile('image1') && $request->file('image2')->isValid()) {
            $path = $request->image1->storePublicly('museums', 'public');
            $museum->image1 = $path;
//            dd($museum->save());
            $museum->save();
            if ($request->hasFile('image2') &&
                $request->file('image2')->isValid()) {
                $path = $request->image2->storePublicly('museums', 'public');
                $museum->image2 = $path;
                $museum->save();
            }
        }
        return redirect('manage/museum');
    }

    public function museumDestroy(Museum $id){
        $id->delete();
        return redirect('manage/museum');
    }

    public function museumUpdate(Request $request, $museum){
        $formdata = $request->all();
        $museum = Museum::findorfail($museum);
//        dd($request,$museum );
        // checks if request has file
        if ($request->hasFile('image1') && $request->hasFile('image2')){
            //deletes the previous file
            Storage::disk('public')->delete($museum->image1);
            Storage::disk('public')->delete($museum->image2);
            $path1 = $request->image1->storePublicly('museums', 'public');

            $path2 = $request->image2->storePublicly('museums', 'public');
            $museum->update($formdata);
            $museum->image1 = $path1;
            $museum->image2 = $path2;
            $museum->update();
        }
        // if there was no file submitted in the update form
        else{
            $old_file1 = $museum->image1;
            $old_file2 = $museum->image2;
            $museum->update($formdata);
            $museum->image1 = $old_file1;
            $museum->image2 = $old_file2;
            $museum->update();
        }
        return redirect('manage/museum');
    }


    public function museumShow($museum){
        $museum = Museum::find($museum);
        return view('manage.museum.show', compact("museum"));
    }

    public function museumEdit($museum){
        $museum = Museum::findorFail($museum);
        return view('manage.museum.edit', compact("museum"));
    }

//NEWS
    public function newsIndex(){
        $news = NEWS::get();
//        dd($news);
//        Gate::allows('isLevelTwo') ? Response::allow() : abort(403);
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
            $path = $request->img_banner->storePublicly('news', 'public');

//            $path = $request->img_banner->storePublicly('images', 'public');
            $news->img_banner =$path;
            $news->save();

            if ($request->hasFile('img_highlight1') &&
                $request->file('img_highlight1')->isValid()) {
                $path = $request->img_highlight1->storePublicly('news', 'public');
                $news->img_highlight1 = $path;
                $news->save();
                if ($request->hasFile('img_highlight2') &&
                    $request->file('img_highlight2')->isValid()) {
                    $path = $request->img_highlight2->storePublicly('news', 'public');
                    $news->img_highlight2 = $path;
                    $news->save();
                    if ($request->hasFile('img_highlight3') &&
                        $request->file('img_highlight3')->isValid()) {
                        $path = $request->img_highlight3->storePublicly('news', 'public');
                        $news->img_highlight3 = $path;
                        $news->save();
                        if ($request->hasFile('img_highlight3') &&
                            $request->file('img_highlight3')->isValid()) {
                            $path = $request->img_highlight3->storePublicly('news', 'public');
                            $news->img_highlight3 = $path;
                            $news->save();
                            if ($request->hasFile('img_highlight4') &&
                                $request->file('img_highlight4')->isValid()) {
                                $path = $request->img_highlight4->storePublicly('news', 'public');
                                $news->img_highlight4 = $path;
                                $news->save();
                                if ($request->hasFile('img_highlight5') &&
                                    $request->file('img_highlight5')->isValid()) {
                                    $path = $request->img_highlight5->storePublicly('news', 'public');
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

    public function newsDestroy(News $id){
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
        $events = Event::orderBy('date','desc')->get();
//        dd($events);
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
        $user = auth()->user();
        $event = new Event($request->all());
        $user->events()->save($event);
        if ($request->hasFile('file') &&
            $request->file('file')->isValid()) {
            $path = $request->file->storePublicly('events', 'public');
            $event->file = $path;
//            dd($event);
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
            $path = $request->file->storePublicly('events', 'public');
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
        $imgPathinDB = DB::table('events')->where('id', '=', $id->id)->get('file');
////        dd(Storage::delete($imgPathinDB[0]->file));
//        Storage::delete('storage/' .$imgPathinDB[0]->file);
////        $post = Event::find($id);
////        \Storage::delete($post->image);
////        if(File::exists('storage/' . $imgPathinDB[0]->file)) {
////            File::delete($image_path);
//        }
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
//        dd($admin);
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
//            dump($fname);
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

    public function memberIndex($filter = null){
        switch ($filter) {
            case "active":
                $members = Member::where('date', '>=', date("Y-m-d"))->get();
                return view('manage.member.index', compact("members"));
            case "expired":
                $members = Member::where('date', '<', date("Y-m-d"))->get();
                return view('manage.member.index', compact("members"));
                break;
            case "newsletter":
                $members = Member::where('newsletter', '=', 1)->get();
                return view('manage.member.index', compact("members"));
            case "website":
                $members = Member::where('user_id', '=', 0)->get();
                return view('manage.member.index', compact("members"));
            case "admin":
                $members = Member::where('user_id', '!=', 0)->get();
                return view('manage.member.index', compact("members"));
            default:
                $members = Member::orderBy('name', 'asc')->get();
                return view('manage.member.index', compact("members"));
        }

    }
//CONVERT YEAR_TO_DAYS
    public static function dateDiffInDays($date1){
        $datetime1 = date_create(date("d-m-Y"));
        $datetime2 = date_create(date("d-m-Y", strtotime($date1)));
        $interval = date_diff($datetime1, $datetime2);
        if(intval($interval->format('%R%a')) < 0)
        {
            return $interval->format('%R%a days') . ' (expired)';
        }
        elseif (intval($interval->format('%R%a')) === 0){
            return $interval->format('%a days remaining') . ' (Last day)';
        }
        elseif (intval($interval->format('%R%a')) > 0){
            return $interval->format('%R%a days');
        }

//            if (str_contains($interval->format('%R%a days'), '-')) {
//            return $interval->format('%R%a days') . ' (expired)';
//        }
//        elseif(str_contains($interval->format('%R%a days'), '0')) {
//            return $interval->format('%a days remaining') . ' (Last day)';
//        }
//        elseif(str_contains($interval->format('%R%a days'), '+')) {
//            return $interval->format('%R%a days');
//        }



//        $currentDate = date("d-m-Y");
//        $timestamp = strtotime($date1);
//        $date1 = date("d-m-Y", $timestamp);
//        $diff = strtotime($currentDate) - strtotime($date1);
//        $dateDiff = abs(round($diff / 86400));
//        if ($dateDiff <= 365){
//            return '-'. $dateDiff .' days' . ' (expired)';
//        }
//        else
//        return $dateDiff . ' days';
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
