<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Number;
use App\Models\Poster;
use App\Models\Service;
use App\Models\Team;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function get_home(){

        $sliders =News::latest()->take(3)->get();
        $news = News::latest()->take(6)->get();
        $posters = Poster::latest()->take(6)->get();
        $numbers = Number::find(1)->first();
        $services = Service::latest()->take(6)->get();

        return view('welcome', compact('sliders', 'news', 'posters', 'numbers', 'services'));
    }

    public function get_about(){
        return view('pages.about');
    }

    public function get_docs(){
        return view('pages.docs');
    }

    public function get_team(){

        $teams1 = Team::where('status', 1)->get();
        $teams2 = Team::where('status', 0)->get();

        return view('pages.team', compact('teams1', 'teams2'));
    }

   

    public function get_roadmap(){
        return view('pages.roadmap');
    }

    public function get_news(){
        $news = News::latest()->paginate(6);
        return view('pages.news', compact('news'));
    }

    public function get_singleNew($id){
        $news = News::find($id);
        // return $news ;
        return view('pages.single-news', compact('news'));
    }

    public function get_contact(){
        return view('pages.contact');
    }

    public function get_exams(){
        return view('pages.exams');
    }

    public function get_gallery(){
        $galleries = Gallery::orderBy('id', 'DESC')->paginate(15);
        return view('pages.gallery', compact('galleries'));
    }

    public function get_videos(){
        $videos = Video::latest()->paginate(15);
        return view('pages.videos', compact('videos'));
    }

    public function get_poster($id){
        $poster = Poster::find($id);
        return view('pages.poster', compact('poster'));
    }


    public function post_messages(Request $request){

        if(\App::getLocale() == 'en')
            $sms = 'Your message has been sent !';
        elseif(\App::getLocale() == 'ru')
            $sms = 'Ваше сообщение было отправлено !';
        else
            $sms = 'Sizning habaringiz yuborildi !';

        DB::table('orders')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back()->with('success', $sms);

    }
}
