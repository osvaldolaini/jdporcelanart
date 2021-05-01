<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Functions;
use App\Http\Controllers\Controller;
use App\Model\Admin\Course;
use App\Model\Admin\CourseImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{ 
    //navegação
    private $navigation = array('title'=>'Cursos','link'=>'course.index');
    private $new_navigation = array('title'=>'Novo curso ','link'=>'course.create');
    //textos para as mensagens e títulos
    private $configs = array(
        'new'                   => 'Novo curso ',
        'msg-success-save'      => 'Curso cadastrado com sucesso',
        'msg-error-save'        => 'Não foi possivel cadastrar o curso',
        'msg-success-delete'    => 'Curso excluido com sucesso',
        'msg-error-delete'      => 'Não foi possivel excluir o curso',
        'msg-not-found'         => 'Curso não encontrado',
        'location'              => 'cursos',
    );
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::all();
        $data[]=array(null,null, null, null);
        if (isset($courses)) {
            $data=array();
            foreach ($courses as $course) {
                $buttons = Functions::buttons($course->id,10,$this->configs['location'],true);
                $data[]=array(
                    $course->title,
                    $course->duraction,
                    Functions::status($course->active),
                    $buttons,
                );
            }
        }

        return view('admin.courses.listAll',[
            'title_postfix' => 'Cursos',
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
        return view('admin.courses.form',[
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
            'title' => 'required|unique:courses',
            'duraction' => 'required',
        ]);

        $course = new course();
        //Dados principais
        $course->title      = $request->title;
        $course->active     = $request->active;
        $course->duraction  = $request->duraction;
        $course->text       = $request->text;
        $course->created_by = Auth::user()->name;

        if($course->save()){
            $images = $request->images;
            if(isset($images)){
                for ($i=0; $i < count($images); $i++) {
                    $img= explode('.',$images[$i]);
                    $extension = $img[1];
                    $new_name = $course->slug.'-'.$i.'.'.$extension;
                    /*Move as imagens do arquivo tmp para a pasta do arquivo */
                    Storage::move('public/tmp/' . $images[$i], 'public/images/courses/'.$course->id.'/'.$new_name);
                    /*Cadastra as imagens no banco de dados */
                    $courseImage = new courseImage();
                    $courseImage->title=$new_name;
                    $courseImage->featured=$request->featured[$i];
                    $courseImage->course_id=$course->id;
                    $courseImage->path='images/courses/'.$course->id.'/';
                    $courseImage->save();
                    unset($courseImage);
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
     * @param  \App\Model\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        if($course){
            $image = $course->images()->where('featured',1)->first();
            $data = array(
                'title' => $course->title,
                'body'  => array(
                    'Título'            => $course->title,
                    'Visualizações'     => $course->clicks,
                    'Criado em'         => ($course->created_at ? date( 'd/m/Y H:i' , strtotime($course->created_at)) : ""),
                    'Criado por'        => $course->created_by,
                    'Atualizado em'     => ($course->updated_at ? date( 'd/m/Y H:i' , strtotime($course->updated_at)) : ""),
                    'Atualizado por'    => $course->updated_by,
                    'image'            => ($image ? url('storage/images/courses/'.$course->id.'/'.$image->title) : url('storage/images/logos/logo.png') )
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
     * @param  \App\Model\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $images = $course->images()->get();
        return view('admin.courses.form',[
            'title_postfix'     => $course->title,
            'navigation'        => $this->navigation,
            'data'              => $course,
            'images'            => $images,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'duraction' => 'required',
        ]);
        $images = $request->image;

        //Dados principais
        $course->title = $request->title;
        $course->active = $request->active;
        $course->duraction  = $request->duraction;
        $course->text = $request->text;
        $course->updated_because = $request->updated_because;
        $course->updated_by = Auth::user()->name;

            /*Pega as imagens que não foram excluidas na pasta */
            $files = Storage::allFiles('public/images/courses/'.$course->id);
            if(isset($files)){
                for ($i=0; $i < count($files); $i++) {
                    /*Pega nome da imagem */
                    $name = explode('/',$files[$i]);
                    $image_name = $name[4];
                    /*Move as imagens para o arquivo temporário */
                    Storage::move($files[$i], 'public/tmp/' . $image_name);
                }
                /*Limpa a pasta do arquivo */
                Storage::deleteDirectory('public/images/courses/'.$course->id);
            }
        if($course->save()){
            DB::table('course_images')->where('course_id', $course->id)->delete();
            $images = $request->images;
            if(isset($images)){
                for ($i=0; $i < count($images); $i++) {
                    $img= explode('.',$images[$i]);
                    $extension = $img[1];
                    $new_name = $course->slug.'-'.$i.'.'.$extension;
                    /*Move as imagens do arquivo tmp para a pasta do arquivo */
                    Storage::move('public/tmp/' . $images[$i], 'public/images/courses/'.$course->id.'/'.$new_name);
                    /*Cadastra as imagens no banco de dados */

                    $courseImage = new courseImage();
                    $courseImage->title=$new_name;
                    $courseImage->featured=$request->featured[$i];
                    $courseImage->course_id=$course->id;
                    $courseImage->path='images/courses/'.$course->id.'/';
                    $courseImage->save();
                    unset($courseImage);
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
     * @param  \App\Model\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Course $course)
    {
        $course->active = '3';
        $course->deleted_because = $course->motive;
        $course->deleted_by = Auth::user()->name;
        $course->deleted_at = date( 'Y-m-d H:i:s');

        if($course->save()){
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
