<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home()         { return view('home'); }
    public function registrations(){ return view('registrations'); }
    public function events(){ 
        $events = [
            [
                'image' => asset('images/events1.webp'),
                'title' => 'التعليم',
                'subTitle' => 'مرحلة إعادة التفكير في التعليم!',
                'description' => 'تعرّف على أحدث التوجهات في التعليم الرقمي والتعلم مدى الحياة، وأساليب التدريس المبتكرة. اغتنم فرص التواصل مع الخبراء، واستثمر في رسم ملامح مستقبل التعليم الحديث الذي يواكب التحول الرقمي.تواصل مع روّاد الاقتصاد، وساهم في بناء مستقبل مزدهر لسوريا والمنطقة.',
                'url' => null,
            ],
            [
                'image' => asset('images/events1.webp'),
                'title' => 'التعليم',
                'subTitle' => 'مرحلة إعادة التفكير في التعليم!',
                'description' => 'تعرّف على أحدث التوجهات في التعليم الرقمي والتعلم مدى الحياة، وأساليب التدريس المبتكرة. اغتنم فرص التواصل مع الخبراء، واستثمر في رسم ملامح مستقبل التعليم الحديث الذي يواكب التحول الرقمي.تواصل مع روّاد الاقتصاد، وساهم في بناء مستقبل مزدهر لسوريا والمنطقة.',
                'url' => null,
            ],
            [
                'image' => asset('images/events1.webp'),
                'title' => 'التعليم',
                'subTitle' => 'مرحلة إعادة التفكير في التعليم!',
                'description' => 'تعرّف على أحدث التوجهات في التعليم الرقمي والتعلم مدى الحياة، وأساليب التدريس المبتكرة. اغتنم فرص التواصل مع الخبراء، واستثمر في رسم ملامح مستقبل التعليم الحديث الذي يواكب التحول الرقمي.تواصل مع روّاد الاقتصاد، وساهم في بناء مستقبل مزدهر لسوريا والمنطقة.',
                'url' => null,
            ],
            [
                'image' => asset('images/events1.webp'),
                'title' => 'التعليم',
                'subTitle' => 'مرحلة إعادة التفكير في التعليم!',
                'description' => 'تعرّف على أحدث التوجهات في التعليم الرقمي والتعلم مدى الحياة، وأساليب التدريس المبتكرة. اغتنم فرص التواصل مع الخبراء، واستثمر في رسم ملامح مستقبل التعليم الحديث الذي يواكب التحول الرقمي.تواصل مع روّاد الاقتصاد، وساهم في بناء مستقبل مزدهر لسوريا والمنطقة.',
                'url' => "ff",
            ],
            // [
            //     'image' => asset('images/events1.webp'),
            //     'title' => '',
            //     'subTitle' => '',
            //     'description' => '',
            //     'url' => null,
            // ]
        ];
        $calendarEvents = [
    [
        'title' => 'اجتماع الهيئة',
        'start' => '2025-07-05T11:00:00',
        'end'   => '2025-07-05T12:00:00',
    ],
    [
        'title' => 'ورشة عمل',
        'start' => '2025-07-08',
    ],
];
        return view('events',compact('events','calendarEvents')); 
    }
    public function bookStand()    { return view('book_stand'); }
    public function gallery()      { return view('gallery'); }
    public function clients()      { return view('clients'); }
    public function subscribe()    { return view('subscribe'); }
    public function visitor()      { return view('visitor'); }
    public function investor()     { return view('investor'); }
    public function discover()     { return view('discover'); }
    public function news()         { return view('news'); }
    public function about()        { return view('about'); }
    public function faq()          { return view('faq'); }
    public function contact(){
        $this->seoInfo('Contact', 'contactpage', "");
        return view('contact'); 
    }
}
