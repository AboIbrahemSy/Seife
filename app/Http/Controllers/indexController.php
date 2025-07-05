<?php
namespace App\Http\Controllers;

use App\Models\Staff;
use App\Helper\Events;
use App\Models\Article;
use App\Models\BreakingNews;
use App\Models\StaffApplication;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class indexController extends Controller
{
    public function home(){
        $this->seoInfo('home');
        return view('home');
    }
    public function audios(){
        $this->seoInfo('home');
        return view('audios');
    }
    public function events(){
        $events = Events::all();
        $calendarEvents = Events::event();;
        return view('events', compact('events', 'calendarEvents'));
    }
    public function bookStand(){
        return view('book_stand');
    }
    public function gallery(){
        $images = [];
        $galleryPath = public_path('gallery');
        foreach (glob($galleryPath.'/*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF}', GLOB_BRACE) as $file) {
            $images[] = 'gallery/' . basename($file);
        }
        return view('gallery', compact('images'));
    }
    public function subscribe(){
        $this->seoInfo('subscribe');
        return view('subscribe');
    }
    public function visitor(){
        $this->seoInfo('visitor');
        return view('visitor');
    }
    public function investor(){
        $this->seoInfo('investor');
        return view('investor');
    }
    public function discover(){
        $this->seoInfo('discover');
        return view('discover');
    }
    public function news()
    {
        $this->seoInfo('news');
        $articles    = Article::where('published', true)->get();
        $tickerItems = BreakingNews::where('active', true)->get();
        return view('news', compact('articles', 'tickerItems'));
    }
    public function about()
    {
        $this->seoInfo('about');
        $staff = Staff::all();
        return view('about', compact('staff'));
    }
    public function faq(){
        $this->seoInfo('faq');
        return view('faq');
    }
    public function contact()
    {
        $this->seoInfo('contact');
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
    public function careersCreate()
    {
        $this->seoInfo('staff_application');
        return view('careers');
    }

    public function careersStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:60',
            'last_name' => 'required|string|max:60',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:30',
            'position' => 'nullable|string|max:120',
            'message' => 'nullable|string|max:1000',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:4096',
        ]);

        $data = $request->except('cv');

        if ($request->hasFile('cv')) {
            $data['cv'] = $request->file('cv')->store('cvs', 'public');
        }

        StaffApplication::create($data);

        return redirect()->route('staff_application')->with('success', __('staff.success_message'));
    }
}
