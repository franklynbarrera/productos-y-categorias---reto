<?php

namespace App\Http\Controllers;

use App\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{


    public function Productos_por_categoria(Request $request){

    try{


      if(isset($request->categoriaId)){

        $productosCategoria = \DB::table('productos')
                            ->where('productos.categoriaId',$request->categoriaId)
                            ->get();

        $categoria  = \DB::table('categorias')
                        ->where('categorias.id',$request->categoriaId)
                        ->select('categorias.descripcion AS nombre')
                        ->first();
                     

        return view('ProductosPorCategoria',['datos'=>$productosCategoria, 'categoria_nombre'=>$categoria->nombre,'individual'=>true]);

      }else{


         $categoria  = \DB::table('categorias')
                        ->get();

                       
         $data= array();

         foreach ($categoria as $value) {
            
            $productosCategoria = \DB::table('productos')
                            ->where('productos.categoriaId',$value->id)
                            ->get();

            $temp = array(

                'categoria_nombre'=>$value->descripcion,
                'categoria_id'=>$value->id,
                'productos'=>$productosCategoria

            );

            array_push($data, (object)$temp);

         }

        
         return view('ProductosPorCategoria',['data'=>$data,'individual'=>false]);

      }
        

        } catch(\Exception $e){
            \Log::info('Error al buscar productos por categoria: '.$e);
          //  return \Response::json(["productos"=>false],500);
       
        }

    }

    public function Buscar_Producto(Request $request){

        

      //  try{
          
          if(isset($request->nombre)){

            $nombre =$request->nombre;

             $productos = \DB::table('productos')
                      ->join('categorias','categorias.id','productos.categoriaId')
                      ->select('categorias.descripcion AS categoria','productos.nombre as nombre_producto','productos.descripcion as descripcion_producto','productos.precio as precio_producto','productos.id AS id_producto')
                      ->where('productos.nombre','LIKE', '%'.$nombre.'%')
                      ->orderBy('productos.id','ASC')
                      ->get();

          }
          else{

             $productos = \DB::table('productos')
                      ->join('categorias','categorias.id','productos.categoriaId')
                      ->select('categorias.descripcion AS categoria','productos.nombre as nombre_producto','productos.descripcion as descripcion_producto','productos.precio as precio_producto','productos.id AS id_producto')
                      ->orderBy('productos.id','ASC')
                          ->get();

          }


          return view('listarProductos',['productos'=>$productos]);

        /*} catch(\Exception $e){
            \Log::info('Error al buscar producto: '.$e);
            return \Response::json(["resultado"=>false],500);
       
        }*/

    }

    public function Registrar_Producto(Request $request){


        try{

         \DB::beginTransaction();
            
           \DB::table('productos')
                        ->insert([
                           
                           'nombre'=>$request->nombre,
                           'descripcion'=>$request->descripcion,
                           'precio'=>$request->precio,
                           'categoriaId'=>$request->categoriaId,
                           
                        ]); 
          \DB::commit();
          
            return view('creacion_exitosa',['nombre'=>'Producto']);

       } catch(\Exception $e){
            \Log::info('Error al crear producto: '.$e);
            return \Response::json(["resultado"=>false],500);
       
        }


    }
}
