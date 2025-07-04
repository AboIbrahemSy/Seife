<?php
namespace App\Http\Controllers;

use App\Models\Staff;
use App\Helper\Events;
use App\Models\Article;
use App\Models\BreakingNews;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class indexController extends Controller
{
    public function home()
    {return view('home');}
    public function audios()
    {return view('audios');}
    public function events(){
        $events = Events::all();
        $calendarEvents = Events::event();;
        return view('events', compact('events', 'calendarEvents'));
    }
    public function bookStand()
    {return view('book_stand');}
    public function gallery()
    {return view('gallery');}
    public function clients()
    {return view('clients');}
    public function subscribe()
    {return view('subscribe');}
    public function visitor()
    {return view('visitor');}
    public function investor()
    {return view('investor');}
    public function discover()
    {return view('discover');}
    public function news()
    {
        $articles    = Article::where('published', true)->get();
        $tickerItems = BreakingNews::where('active', true)->get();
        return view('news', compact('articles', 'tickerItems'));
    }
    public function about()
    {
        $staff = Staff::all();
        return view('about', compact('staff'));
    }
    public function faq()
    {return view('faq');}
    public function contact()
    {
        $this->seoInfo('Contact', 'contactpage', "");
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        $data = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            'message'      => 'required|string',
        ]);

        ContactMessage::create($data);

        return back()->with('success', __('contact.success_message', [], app()->getLocale()));
    }
}
