<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;

abstract class Controller
{
    public function seoInfo($page = 'home', $keyword = ['معرض دمشق الدولي', 'Damascus International Fair'])
    {
        $title = __('seo.' . $page . '.title');
        $description = __('seo.' . $page . '.description');

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($keyword);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', app()->getLocale() == 'ar' ? 'ar_AE' : 'en_GB');
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

        TwitterCard::setTitle($title);
        TwitterCard::setDescription($description);
        TwitterCard::setSite(URL::current());

        JsonLd::addValues([
            '@type' => 'WebPage',
            'name' => $title,
            'url' => URL::current(),
            'publisher' => [
                '@type' => 'Organization',
                'name' => config('app.name'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('images/Logo2.webp'),
                ]
            ],
            'sameAs' => [
                config('app.url_facebook'),
                config('app.url_instagram'),
                config('app.url_x'),
                config('app.url_tiktok'),
                config('app.url_youtube'),
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+963988883215',
                'contactType' => 'Customer Service'
            ],
            'description' => $description,
        ]);

        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
    }
}
