<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Admin\Article;
use Illuminate\Http\Request;
use App\Model\Admin\Config;
use App\Model\Admin\ConfigAddress;

use App\Model\Admin\Partner;
use App\Model\Admin\SocialMedia;

class SiteController extends Controller
{
    public function index ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $articles = Article::where('active',1)->limit(4)->get();
        $config = Config::get()->first();
        return view('site.index',[
            'title_postfix' => '',
            'config' =>  $config,
            'partners' =>  $partners,
            'articles' =>  $articles,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function about ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.about',[
            'title_postfix' => 'Sobre',
            'config' =>  $config,
            'partners' =>  $partners,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function services ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.services',[
            'title_postfix' => 'Serviços',
            'config' =>  $config,
            'partners' =>  $partners,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function articles ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.articles',[
            'title_postfix' => 'Artigos',
            'config' =>  $config,
            'partners' =>  $partners,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function courses ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.courses',[
            'title_postfix' => 'Cursos',
            'config' =>  $config,
            'partners' =>  $partners,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function contact ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.contacts',[
            'title_postfix' => 'Contatos',
            'config' =>  $config,
            'partners' =>  $partners,
            'socialMedias' =>  $socialMedias,
        ]);
    }
}
