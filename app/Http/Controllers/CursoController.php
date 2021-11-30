<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public  function index(){
        return view('cursos.index');
    }

    public function create(){
        
        return view('cursos.create');

    }
    public function storage(Request $request){ 
        $curso = new Curso();

        $curso->Nombre = $request->Nombre;
        $curso->Descripcion =$request->Descripcion;
        $curso->Categorias = $request->Categorias;
    
        $curso->save();
   return redirect('cursos/create');
       }

    public function show(){
        return view('cursos.show');
        
    }
public function home(){
            return view('home'); 
    }

public function created(){

$datoscurso['cursos']=Curso::paginate(5);
return view('cursos.created',$datoscurso);

}
public function edit($id){

    $curso=Curso::findOrFail($id);

    return view('cursos.edit',compact('curso') );
}
public function destroy($id)
{

Curso::destroy($id);
return redirect('cursos/created');

}

public function update(Request $request, $id)
{
    $datoscurso = request()->except(['_token','_method']);
    Curso::where('id','=',$id)->updatde($datoscurso);

    $curso=Curso::findOrFail($id);
    return view('cursos.edit',compact('curso') );

}
    
}





