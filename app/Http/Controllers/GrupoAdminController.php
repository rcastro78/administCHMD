<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GrupoAdministrativo;

class GrupoAdminController extends Controller {
	
	public function index(Request $req)
	{
		$grupoAdmin = DB::table("App_grupos_administrativos")
		->orderBy('id','desc')
		->paginate(15);

		return view('catalogos.gruposAdmin.index', ['grupoAdmin' => $grupoAdmin]);
	}

	public function create(){
		return view('catalogos.gruposAdmin.create');		
	}
	public function store(Request $req){
		$nombre = $req->input('nombre');
		$descripcion = $req->input('descripcion');
		DB::table('App_grupos_administrativos')->insert(
			['grupo' => $nombre,'descripcion' => $descripcion]);
			return redirect('gruposAdmin');
	}


	public function edit($id){
		$grupoAdmin = GrupoAdministrativo::findOrFail($id);
		return view('catalogos.gruposAdmin.edit',compact('grupoAdmin'));		
	}

	public function update(Request $req, $id){
		$grupo = $req->input('nombre');
		$descripcion = $req->input('descripcion');
		DB::table('App_grupos_administrativos')->where('id',$id)->update(
			['grupo' => $grupo,'descripcion' => $descripcion]);
			return redirect('gruposAdmin');
	
	}

	public function destroy(){
	 			
	}

}