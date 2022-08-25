<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Calificacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PreguntaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*   $preguntas= Pregunta::all();
        return $preguntas; */
    }

    public function mostraPreguntas()
    {
        $preguntas= Pregunta::all();
        /* Declaro la variable $user que es igual a la Id del usuario logueado */
        $user= Auth::user()->id;
        /* Aqui le mando la ultima Id del registro de calificaciones a la tabla respuestas */
        $id_calificacion = 'SELECT MAX(`CAL_ID`)FROM calificaciones';

        /* consultas SQL */
        $valorGastos = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_GASTOS__V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 1 And ca.CAL_USE_ID ='.$user;
        $valorEducacion = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_EDUCACION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 2 And ca.CAL_USE_ID ='.$user;
        $valorAhorro = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_AHORRO_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 3 And ca.CAL_USE_ID ='.$user;
        $valorDivercion = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_DIVERCION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 4 And ca.CAL_USE_ID ='.$user;
        $valorInvercion = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INVERCION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 5 And ca.CAL_USE_ID ='.$user;
        $valorDonacion = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_DONACION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 6 And ca.CAL_USE_ID ='.$user;
        $valorRemanente = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_REMANENTE_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 7 And ca.CAL_USE_ID ='.$user;
        $valorIngresos = 'SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID ='.$user;

        if ($valorAhorro == null){
            $valorAhorro ==0;
        }

        $totalGastos = DB::select($valorGastos);
        $totalEducacion = DB::select($valorEducacion);
        $totalAhorro = DB::select($valorAhorro);
        $totalDivercion = DB::select($valorDivercion);
        $totalInvercion = DB::select($valorInvercion);
        $totalDonacion = DB::select($valorDonacion);
        $totalRemanente = DB::select($valorRemanente);
        $totalIngresos = DB::select($valorIngresos);
        $ultimo = DB::select($id_calificacion);
        /* mando las variavles a la vista */
        return view('respuestas.preguntas', compact('preguntas', 'ultimo', 'totalGastos','totalEducacion','totalAhorro','totalDivercion','totalInvercion','totalDonacion','totalRemanente','totalIngresos'));
    }

    public function guardarEnBd(Request $request)
    {

        $calificacion = request()->except('_token', 'dato2','dato3','dato4','dato5','dato6','dato7','dato8','dato9','dato10','dato11','dato12','dato13','dato14','dato15','dato16','dato17','dato18','dato19','dato20','dato21','dato22');
        Calificacione::insert($calificacion);


        /*Faltaria algo para no insertar al mismo tiempo*/

        $respuestas = request()->except('_token','test');
        Respuesta::insert($respuestas);

        return $respuestas;


        /* $user= Auth::user()->id;

        $valorGastos = ' '.$user;
        $valorEducacion = 'SELECT SUM(RES_RESPUESTA) AS CAL_EDUCACION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 2 And ca.CAL_USE_ID ='.$user;
        $valorAhorro = 'SELECT SUM(RES_RESPUESTA) AS CAL_AHORRO_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 3 And ca.CAL_USE_ID ='.$user;
        $valorDivercion = 'SELECT SUM(RES_RESPUESTA) AS CAL_DIVERCION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 4 And ca.CAL_USE_ID ='.$user;
        $valorInvercion = 'SELECT SUM(RES_RESPUESTA) AS CAL_INVERCION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 5 And ca.CAL_USE_ID ='.$user;
        $valorDonacion = 'SELECT SUM(RES_RESPUESTA) AS CAL_DONACION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 6 And ca.CAL_USE_ID ='.$user;
        $valorRemanente = 'SELECT SUM(RES_RESPUESTA) AS CAL_REMANENTE_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 7 And ca.CAL_USE_ID ='.$user;
        $valorIngresos = 'SELECT SUM(RES_RESPUESTA) AS CAL_INGRESO_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID ='.$user;

        $totalGastos = DB::select($valorGastos);
        $totalEducacion = DB::select($valorEducacion);
        $totalAhorro = DB::select($valorAhorro);
        $totalDivercion = DB::select($valorDivercion);
        $totalInvercion = DB::select($valorInvercion);
        $totalDonacion = DB::select($valorDonacion);
        $totalRemanente = DB::select($valorRemanente);
        $totalIngresos = DB::select($valorIngresos);


        $porcentajeDivercion = round(($totalDivercion['0'] / $totalIngresos['0'])*100);
*/
     /* return $calificacion; */

}


}
