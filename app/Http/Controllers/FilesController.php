<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Facades\Agent;

use Spatie\Sitemap\Sitemap;
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
            ->add(SitemapUrl::create('/')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(10))
            ->add(SitemapUrl::create('/about')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(6))
            ->add(SitemapUrl::create('/quiz')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(9))
            ->add(SitemapUrl::create('/purchase-ebook')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(9))
            ->add(SitemapUrl::create('/checkout')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(9))
            ->add(SitemapUrl::create('/contact')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(6))
            ->add(SitemapUrl::create('/subscription-terms')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(8))
            ->add(SitemapUrl::create('/terms-of-service')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(8))
            ->add(SitemapUrl::create('/privacy-policy')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(8))
            ->add(SitemapUrl::create('/cookies-policy')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(8))
            ->add(SitemapUrl::create('/refund-policy')
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(SitemapUrl::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(8))

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

    public function imageFiles($title, $type = 'png')
    {
        $file = Media::where('title', $title)->first();
        if (!$file) {
            return abort(404);
        }

        if ($type == 'thumbnail') {
            $curations = $file->curations;
            if (!$curations) {
                return abort(404);
            }

            $thumbnail = $curations[0]['curation'];
            if ($thumbnail['key'] != 'thumbnail') {
                return abort(404);
            }

            $getFile = storage_path("app/{$thumbnail['disk']}/{$thumbnail['path']}");
            return response()->file($getFile);
        } elseif ($type == 'png') {
            $getFile = storage_path("app/{$file->disk}/{$file->path}");
            return response()->file($getFile);
        }
        return abort(404);
    }
}
