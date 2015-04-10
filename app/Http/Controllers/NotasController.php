<?php namespace App\Http\Controllers;

use App\Alumnos;
use App\email;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PreparaNotaRequest;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class NotasController
 * @property  compileNotaTemplate
 * @package App\Http\Controllers
 */
class NotasController extends Controller {


	// necesitas estar logeado para entrar


    public function __construct()

		{
			$this->middleware('auth');

		}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return email::all();
        return view('pages.tdash.notas');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//	//crear notas para alumnos y padres

        $alumno = DB::table('alumnos')
            ->orderBy('apellido_p', 'asc')
            // ->lists('nombre','apellido_p')
            ->lists(DB::raw("CONCAT(nombre, ' ', apellido_p, ' ', apellido_m)"), DB::raw("CONCAT(nombre, ' ', apellido_p, ' ', apellido_m)"));





		//tener una vista para crear

		return view('pages.tdash.notas.notascrear', compact('alumno'));

	}



/**
	 * Confirmar el envio de la nota.
	 *
	 * @return \Response
	 */
	public function confirm(PreparaNotaRequest $request, Guard $auth)
    {

       $template = $this->compileNotaTemplate($data = $request->all(), $auth);


        session()->flash('nota', $data);

        return view('pages.tdash.notas.confirmar', compact('template'));

	}

    /**
     * Compile the notas template
     * @param $data
     * @param Guard $auth
     */
    public function compileNotaTemplate($data, Guard $auth){
        $data = $data + [
                'name' => $auth->user()->name,
                'email' => $auth->user()->email,



            ];

       return view()->file(app_path('Http/Templates/notasenvio.blade.php'), $data);
    }


	public function store(Request $request)
	{
       $data = session()->get('nota');

		email::open($data)->useTemplate($request->input('template'));

        //Auth::user()->nota()->save($nota);


        return redirect('nota');
	}


};
