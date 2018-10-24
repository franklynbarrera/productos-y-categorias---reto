<?php

namespace App\Http\Controllers;

use App\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    
    public function Listar_Categorias(){

     try{

        $categorias = \DB::table('categorias')->get();

        return view('listadoCategorias',['datos'=>$categorias]);

       } catch(\Exception $e){
            \Log::info('Error al listar categorías: '.$e);
            return \Response::json(["categorias"=>false],500);
       
        }

    }

    public function Registrar_Categoria(Request $request){

        try{

         \DB::beginTransaction();

            $nombre = $request->nombre;
            
           \DB::table('categorias')
                        ->insert([
                           
                           'descripcion'=>$nombre,
                           
                        ]); 
          \DB::commit();
          
            return view('creacion_exitosa',['nombre'=>'Categoría']);

       } catch(\Exception $e){
            \Log::info('Error al crear categoría: '.$e);
            return \Response::json(["resultado"=>false],500);
       
        }


    }

}
