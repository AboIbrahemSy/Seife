<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;

use Illuminate\Support\Carbon;
use Jenssegers\Agent\Facades\Agent;
use Spatie\Sitemap\Tags\Url as SitemapUrl;

class FilesController extends Controller
{

    public function publicFileByName($filename)
    {
        $publicFile = ['manifest.json','sw.js'];
        if(in_array($filename,$publicFile)){
            $file = public_path($filename);
            return response()->file($file);
        }
        return abort(404);
    }

    public function sitemap()
    {
        $file = public_path("sitemap.xml");
        return response()->file($file);
    }

    public function createSiteMap()
    {
        Sitemap::create()
            ->add(SitemapUrl::create(route('home'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(1.0))
            ->add(SitemapUrl::create(route('audios'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9))
            ->add(SitemapUrl::create(route('events'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9))
            ->add(SitemapUrl::create(route('book_stand'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8))
            ->add(SitemapUrl::create(route('gallery'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8))
            ->add(SitemapUrl::create(route('clients'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7))
            ->add(SitemapUrl::create(route('subscribe'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7))
            ->add(SitemapUrl::create(route('visitor'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7))
            ->add(SitemapUrl::create(route('investor'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7))
            ->add(SitemapUrl::create(route('discover'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7))
            ->add(SitemapUrl::create(route('news'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8))
            ->add(SitemapUrl::create(route('about'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8))
            ->add(SitemapUrl::create(route('faq'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7))
            ->add(SitemapUrl::create(route('contact'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.7))
            ->add(SitemapUrl::create(route('staff_application'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.6))
            ->writeToFile(public_path('sitemap.xml'));
    }


    public function robotstxt()
    {
        $file = public_path("robots.txt");
        return response()->file($file);
    }
    public function videoFiles($title)
    {
        if ($title == 'Header_Video') {
            $titleFormat = (Agent::isPhone()) ? "{$title}_sm" : "{$title}_md";
            $file = public_path("videos/{$titleFormat}.mp4");
            return response()->file($file);
        }
        return abort(404);
    }

    // public function imageFiles($title, $type = 'png')
    // {
    //     $file = Media::where('title', $title)->first();
    //     if (!$file) {
    //         return abort(404);
    //     }

    //     if ($type == 'thumbnail') {
    //         $curations = $file->curations;
    //         if (!$curations) {
    //             return abort(404);
    //         }

    //         $thumbnail = $curations[0]['curation'];
    //         if ($thumbnail['key'] != 'thumbnail') {
    //             return abort(404);
    //         }

    //         $getFile = storage_path("app/{$thumbnail['disk']}/{$thumbnail['path']}");
    //         return response()->file($getFile);
    //     } elseif ($type == 'png') {
    //         $getFile = storage_path("app/{$file->disk}/{$file->path}");
    //         return response()->file($getFile);
    //     }
    //     return abort(404);
    // }
}
