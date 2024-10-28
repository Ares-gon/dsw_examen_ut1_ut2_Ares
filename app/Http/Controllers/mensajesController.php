<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class mensajesController extends Controller
{
    public function mostrarMensajes(){
        $mensajes= Message::orderBy('id')->get;
        $collection_mensajes=[];
        foreach($mensajes as $mensaje){
            $collection_mensajes[]=[
            'id'=> $mensaje ->id,
            'text'=> $mensaje ->text,
            'subrayado'=> $mensaje ->subrayado,
            'negrita'=> $mensaje ->negrita,
            ];
        }
        return view('messages',['messages'=> $collection_mensajes]);
    }

    public function editarMensaje($id){
        $mensaje=Message::findOrFail($id);
        //dd($mensaje);
        return view('formulario')->with("mensaje", $mensaje);
    }

    public function editarMensaje2(Request $request){
        //dd($request);

        $id=$request->id;
        $text=$request->text;
        $negrita=$request->negrita;
        $subrayado=$request->subrayado;

        $mensaje_save=Message::find($id);
        $mensaje_save->text= $text;
        $mensaje_save->negrita= $negrita;
        $mensaje_save->subrayado= $subrayado;
        $mensaje_save->save();

        return redirect()->route('messages');
    }

}
