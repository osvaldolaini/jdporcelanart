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
use App\Model\Admin\Portfolio;

class SiteController extends Controller
{
    public function index ()
    {
        $partners = Partner::select('link','image','slug')->where('active',1)->get();
        $socialMedias = SocialMedia::select('link','icon')->where('active',1)->get();
        /*$articles = Article::where('active',1)
        ->orderBy('clicks','desc')
        ->orderBy('created_at','desc')
        ->limit(4)->get();*/
        /*$courses = Course::where('active',1)->limit(3)->get();*/
        $config = Config::get()->first();
        return view('site.index',[
            'title_postfix' => 'Home',
            'config'    =>  $config,
            'partners'  =>  $partners,
            //'articles'  =>  $articles,
            //'courses'   =>  $courses,
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
            //Visualizacoes
            $article->clicks = $article->clicks + 1;
            $article->save();
            //Visualizacoes
        return view('site.article',[
            'title_postfix' => 'Artigo',
            'config' =>  $config,
            'article' =>  $article,
            'trendTopics' =>  $trendTopics,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    //Portifólio
    public function portfolio ()
    {
        $portfolio = Portfolio::where('active',1)->get();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.portfolio',[
            'title_postfix' => 'Portfolio',
            'config' =>  $config,
            'portfolio' =>  $portfolio,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function work ($any)
    {
        $work = Portfolio::where('slug',$any)->first();
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        $portfolio = Portfolio::where('active',1)->limit(3)->get();
            //Visualizacoes
            $work->clicks = $work->clicks + 1;
            $work->save();
            //Visualizacoes
        return view('site.work',[
            'title_postfix' => 'Portfólio',
            'config' =>  $config,
            'portfolio' =>  $portfolio,
            'work' =>  $work,
            'socialMedias' =>  $socialMedias,
        ]);
    }

    public function contact ()
    {
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.contacts',[
            'title_postfix' => 'Contatos',
            'config' =>  $config,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function term(){
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.term',[
            'title_postfix' => 'Termo de uso',
            'config' =>  $config,
            'socialMedias' =>  $socialMedias,
        ]);
    }
    public function politics(){
        $socialMedias = SocialMedia::where('active',1)->get();
        $config = Config::get()->first();
        return view('site.politics',[
            'title_postfix' => 'Política de privacidade',
            'config' =>  $config,
            'socialMedias' =>  $socialMedias,
        ]);
    }
}
