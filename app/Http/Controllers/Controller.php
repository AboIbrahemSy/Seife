<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\URL;

abstract class Controller
{
    public function seoInfo($title = 'Seife', $page = 'Homepage', $description = 'Seife WebSite',
        $keyword = ['']) {

        SEOMeta::addMeta('charset','utf-8','name');
        SEOMeta::addMeta('viewport', 'width=device-width, initial-scale=1', 'name');
        SEOMeta::addMeta('csrf-token', csrf_token(), 'name');
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        // SEOTools::addImages(route('ImageFiles',['title'=>'logo-2','type'=>'png']));
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($keyword);
        SEOMeta::addMeta('page', $page, 'property');
        SEOMeta::addMeta('apple-mobile-web-app-status-bar', '#121212', 'name');
        SEOMeta::addMeta('mobile-web-app-capable', 'yes', 'name');
        OpenGraph::setDescription($description);
        OpenGraph::setTitle($title);
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'WebPage');
        OpenGraph::addProperty('locale', 'ar_AE');
        OpenGraph::addProperty('locale:alternate', ['en_GB', 'ar_AE']);
        // og:video
        OpenGraph::addVideo(route('VideoFiles', ['title' => 'Header_Video']), [
            'secure_url' => route('VideoFiles', ['title' => 'Header_Video']),
            'type' => 'video/mp4',
            'width' => 400,
            'height' => 300,
        ]);
        // og:image
        // OpenGraph::addImage(route('ImageFiles', ['title' => 's-logo', 'type' => 'png']), [
        //     'secure_url' => route('ImageFiles', ['title' => 's-logo', 'type' => 'png']),
        //     'type' => 'image/png',
        //     'width' => 200,
        //     'height' => 200,
        // ]);

        TwitterCard::setTitle($title); // title of twitter card tag
        TwitterCard::setSite(URL::current()); // site of twitter card tag
        TwitterCard::setDescription($description); // description of twitter card tag
        // TwitterCard::setUrl(route('welcome')); // url of twitter card tag
        // TwitterCard::setImage(route('ImageFiles', ['title' => 's-logo', 'type' => 'png'])); // add image url

        JsonLd::addValues([
            "@type" => "WebPage",
            'name' => $title,
            'url' => URL::current(),
            // 'image' => route('ImageFiles', ['title' => 's-logo', 'type' => 'png']),
            // 'logo' => route('ImageFiles', ['title' => 's-logo', 'type' => 'png']),
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'LWA7',
                'logo' => [
                    '@type' => 'ImageObject',
                    // 'url' => route('ImageFiles', ['title' => 's-logo', 'type' => 'png']),
                ]
            ],
            'sameAs' => [
                config('app.url_facebook'),
                config('app.url_instagram'),
                config('app.url_tiktok')
                ],
            'contactPoint' => [
                "@type" => "ContactPoint",
                "telephone" => "+46073-567-443",
                "contactType" => "Customer Service"
            ],
            'breadcrumb' => [
                "@type" => "BreadcrumbList",
                'itemListElement' => [
                    [
                        "@type" => "ListItem",
                        "position" => 1,
                        "name" => "Home",
                        "item" => route('home')
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 2,
                        "name" => "About",
                        "item" => route('about')
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 3,
                        "name" => "contact",
                        "item" => route('contact')
                    ],
                ],
            ],
            'description' => $description
        ]);

        // SEOTools::metatags();
        // SEOTools::twitter();
        // SEOTools::opengraph();
        // SEOTools::jsonLd();

        SEOTools::setTitle($title);
        // SEOTools::getTitle($session = false);
        SEOTools::setDescription($description);
        // SEOTools::setCanonical($url);
        // SEOTools::addImages(route('ImageFiles', ['title' => 's-logo', 'type' => 'png']));

    }
}
