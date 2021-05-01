<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Admin\Config;
use App\Model\Admin\ConfigAddress;

use App\Model\Admin\Partner;
use App\Model\Admin\Course;
use App\Model\Admin\SocialMedia;
use App\Model\Admin\Article;

class SiteController extends Controller
{
    public function index ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $articles = Article::where('active',1)
        ->orderBy('clicks','desc')
        ->orderBy('created_at','desc')
        ->limit(4)->get();
        $courses = Course::where('active',1)->limit(3)->get();
        $config = Config::get()->first();
        return view('site.index',[
            'title_postfix' => 'Home',
            'config'    =>  $config,
            'partners'  =>  $partners,
            'articles'  =>  $articles,
            'courses'   =>  $courses,
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
        $articles = Article::where('active',1)
        ->orderBy('clicks','desc')
        ->orderBy('created_at','desc')
        ->limit(4)->get();
        $config = Config::get()->first();
        return view('site.services',[
            'title_postfix' => 'Serviços',
            'config' =>  $config,
            'partners' =>  $partners,
            'socialMedias' =>  $socialMedias,
            'articles'  =>  $articles,
        ]);
    }
    //Artigos
    public function articles ()
    {
        $articles = Article::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $trendTopics = Article::where('active',1)
        ->orderBy('clicks','desc')
        ->orderBy('created_at','desc')
        ->limit(4)->get();
        $config = Config::get()->first();
        return view('site.articles',[
            'title_postfix' => 'Artigos',
            'config'        =>  $config,
            'articles'      =>  $articles,
            'trendTopics'   =>  $trendTopics,
            'socialMedias'  =>  $socialMedias,
        ]);
    }
    public function article ($any)
    {
        
        $article = Article::where('slug',$any)->first();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        $trendTopics = Article::where('active',1)
        ->orderBy('clicks','desc')
        ->orderBy('created_at','desc')
        ->limit(4)->get();
        
        return view('site.article',[
            'title_postfix' => 'Artigo',
            'config' =>  $config,
            'article' =>  $article,
            'trendTopics' =>  $trendTopics,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    //Cursos
    public function courses ()
    {
        $courses = Course::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.courses',[
            'title_postfix' => 'Cursos',
            'config' =>  $config,
            'courses' =>  $courses,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function course ($any)
    {
        
        $course = Course::where('slug',$any)->first();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        $courses = Course::where('active',1)->limit(3)->get();
        
        return view('site.course',[
            'title_postfix' => 'Cursos',
            'config' =>  $config,
            'course' =>  $course,
            'courses' =>  $courses,
            'socialMedias' =>  $socialMedias,
        ]);
    }

    public function contact ()
    {
        $partners = Partner::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $articles = Article::where('active',1)
        ->orderBy('clicks','desc')
        ->orderBy('created_at','desc')
        ->limit(4)->get();
        $config = Config::get()->first();
        return view('site.contacts',[
            'title_postfix' => 'Contatos',
            'config' =>  $config,
            'partners' =>  $partners,
            'socialMedias' =>  $socialMedias,
            
            'articles'  =>  $articles,
        ]);
    }
}
