<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Admin\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::select('id','title','slug','created_at','created_by','clicks')->where('active',1)
        ->orderBy('clicks','desc')
        ->orderBy('created_at','desc')
        ->limit(4)->get();

        $apiPortfolio = array();
        foreach ($portfolio  as $work) {
            foreach ($work->images as $images){
                if($images->featured == '1'){
                    $img = 'storage/'.$images->path.'/'.$images->title;
                    $alt = $images->title;
                }
            }
            $apiPortfolio[]=array(
                'src'           => url($img),
                'alt'           => $alt,
                'slug'          => url('trabalhos-realizados/'.$work->slug),
                'title'         => $work->title,
                'clicks'        => $work->clicks,
                'created_by'    => $work->created_by,
                'created_at'    => ($work->created_at ? date( 'd/m/Y H:i' , strtotime($work->created_at)) : ""),
            );
        }
        if(isset($apiPortfolio)){
            return response()->json(
                [
                    'success'=> true,
                    'data'   => $apiPortfolio,
                    'more'   => url('trabalhos-realizados'),
                ]
            );
        }else{
            return response()->json(
                [
                    'success'=> false,
                    'error'=> false,
                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
