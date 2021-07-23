<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Functions;
use App\Http\Controllers\Controller;
use App\Model\Admin\Portfolio;
use App\Model\Admin\PortfolioImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    //navegação
    private $navigation = array('title'=>'Portfólio','link'=>'portfolio.index');
    private $new_navigation = array('title'=>'Novo trabalho ','link'=>'portfolio.create');
    //textos para as mensagens e títulos
    private $configs = array(
        'new'                   => 'Novo trabalho ',
        'msg-success-save'      => 'Trabalho cadastrado com sucesso',
        'msg-error-save'        => 'Não foi possivel cadastrar o trabalho',
        'msg-success-delete'    => 'Trabalho excluido com sucesso',
        'msg-error-delete'      => 'Não foi possivel excluir o trabalho',
        'msg-not-found'         => 'Trabalho não encontrado',
        'location'              => 'portfolio',
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        $data[]=array(null,null, null, null);
        if (isset($portfolios)) {
            $data=array();
            foreach ($portfolios as $portfolio) {
                $buttons = Functions::buttons($portfolio->id,10,$this->configs['location'],true);
                $data[]=array(
                    $portfolio->title,
                    $portfolio->duraction,
                    Functions::status($portfolio->active),
                    $buttons,
                );
            }
        }

        return view('admin.portfolios.listAll',[
            'title_postfix' => 'Portfólio',
            'navigation'    => $this->new_navigation,
            'data'          => $data,
            'accesslevel'   => 10,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.form',[
            'title_postfix'     => $this->configs['new'],
            'navigation'        => $this->navigation,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:portfolios',
            'duraction' => 'required',
        ]);

        $portfolio = new Portfolio();
        //Dados principais
        $portfolio->title      = $request->title;
        $portfolio->active     = $request->active;
        $portfolio->duraction  = $request->duraction;
        $portfolio->text       = $request->text;
        $portfolio->created_by = Auth::user()->name;

        if($portfolio->save()){
            $images = $request->images;
            if(isset($images)){
                for ($i=0; $i < count($images); $i++) {
                    $img= explode('.',$images[$i]);
                    $extension = $img[1];
                    $new_name = $portfolio->slug.'-'.$i.'.'.$extension;
                    /*Move as imagens do arquivo tmp para a pasta do arquivo */
                    Storage::move('public/tmp/' . $images[$i], 'public/images/portfolios/'.$portfolio->id.'/'.$new_name);
                    /*Cadastra as imagens no banco de dados */
                    $portfolioImage = new PortfolioImage();
                    $portfolioImage->title=$new_name;
                    $portfolioImage->featured=$request->featured[$i];
                    $portfolioImage->portfolio_id=$portfolio->id;
                    $portfolioImage->path='images/portfolios/'.$portfolio->id.'/';
                    $portfolioImage->save();
                    unset($portfolioImage);
                }
            }
            return response()->json(
                [
                    'success' => true,
                    'location'=> url($this->configs['location']),
                    'message' => $this->configs['msg-success-save']
                ]
            );
        }else{
            return response()->json(
                [
                    'success' => false,
                    'message' => $this->configs['msg-error-save']
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        if($portfolio){
            $image = $portfolio->images()->where('featured',1)->first();
            $data = array(
                'title' => $portfolio->title,
                'body'  => array(
                    'Título'            => $portfolio->title,
                    'Visualizações'     => $portfolio->clicks,
                    'Criado em'         => ($portfolio->created_at ? date( 'd/m/Y H:i' , strtotime($portfolio->created_at)) : ""),
                    'Criado por'        => $portfolio->created_by,
                    'Atualizado em'     => ($portfolio->updated_at ? date( 'd/m/Y H:i' , strtotime($portfolio->updated_at)) : ""),
                    'Atualizado por'    => $portfolio->updated_by,
                    'image'            => ($image ? url('storage/images/portfolios/'.$portfolio->id.'/'.$image->title) : url('storage/images/logos/logo.png') )
                )
            );
            return response()->json(
                [
                    'success' => true,
                    'data' => $data
                ]
            );
        }else{
            return response()->json(
                [
                    'success' => false,
                    'message' => $this->configs['msg-not-found']
                ]
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $images = $portfolio->images()->get();
        return view('admin.portfolios.form',[
            'title_postfix'     => $portfolio->title,
            'navigation'        => $this->navigation,
            'data'              => $portfolio,
            'images'            => $images,
        ]);
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
        $request->validate([
            'title' => 'required',
            'duraction' => 'required',
        ]);
        $images = $request->image;

        //Dados principais
        $portfolio->title = $request->title;
        $portfolio->active = $request->active;
        $portfolio->duraction  = $request->duraction;
        $portfolio->text = $request->text;
        $portfolio->updated_because = $request->updated_because;
        $portfolio->updated_by = Auth::user()->name;

            /*Pega as imagens que não foram excluidas na pasta */
            $files = Storage::allFiles('public/images/portfolios/'.$portfolio->id);
            if(isset($files)){
                for ($i=0; $i < count($files); $i++) {
                    /*Pega nome da imagem */
                    $name = explode('/',$files[$i]);
                    $image_name = $name[4];
                    /*Move as imagens para o arquivo temporário */
                    Storage::move($files[$i], 'public/tmp/' . $image_name);
                }
                /*Limpa a pasta do arquivo */
                Storage::deleteDirectory('public/images/portfolios/'.$portfolio->id);
            }
        if($portfolio->save()){
            DB::table('portfolio_images')->where('portfolio_id', $portfolio->id)->delete();
            $images = $request->images;
            if(isset($images)){
                for ($i=0; $i < count($images); $i++) {
                    $img= explode('.',$images[$i]);
                    $extension = $img[1];
                    $new_name = $portfolio->slug.'-'.$i.'.'.$extension;
                    /*Move as imagens do arquivo tmp para a pasta do arquivo */
                    Storage::move('public/tmp/' . $images[$i], 'public/images/portfolios/'.$portfolio->id.'/'.$new_name);
                    /*Cadastra as imagens no banco de dados */

                    $portfolioImage = new PortfolioImage();
                    $portfolioImage->title=$new_name;
                    $portfolioImage->featured=$request->featured[$i];
                    $portfolioImage->portfolio_id=$portfolio->id;
                    $portfolioImage->path='images/portfolios/'.$portfolio->id.'/';
                    $portfolioImage->save();
                    unset($portfolioImage);
                }
            }
            return response()->json(
                [
                    'success' => true,
                    'location'=> url($this->configs['location']),
                    'message' => $this->configs['msg-success-save']
                ]
            );
        }else{
            return response()->json(
                [
                    'success' => false,
                    'message' => $this->configs['msg-error-save']
                ]
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Portfolio $portfolio)
    {
        $portfolio->active = '3';
        $portfolio->deleted_because = $portfolio->motive;
        $portfolio->deleted_by = Auth::user()->name;
        $portfolio->deleted_at = date( 'Y-m-d H:i:s');

        if($portfolio->save()){
            return response()->json(
                [
                    'success'   => true,
                    'location'  => url($this->configs['location']),
                    'message'   => $this->configs['msg-success-delete']
                ]
            );
        }else{
            return response()->json(
                [
                    'success' => false,
                    'message' => $this->configs['msg-error-delete']
                ]
            );
        }
    }
}
