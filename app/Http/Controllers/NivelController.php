<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Respuesta;

class NivelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrarPorcentajes()
    {

        $user = Auth::user()->id;

        /* colsulta de porcentajes */
        $por_Gastos = 'SELECT (IFNULL(CAL_GASTOS__V/CAL_INGRESO_V,0)*100)
            FROM ((SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID = '.$user.')AS i,
            (SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_GASTOS__V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 1 And ca.CAL_USE_ID = '.$user.')AS g )';

        $por_Educacion = 'SELECT (IFNULL(CAL_EDUCACION_V/CAL_INGRESO_V,0)*100)
            FROM ((SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID = '.$user.')AS i,
            (SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_EDUCACION_V FROM respuestas  AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 2 And ca.CAL_USE_ID = '.$user.')AS g )';

        $por_Ahorro = 'SELECT (IFNULL(CAL_AHORRO_V/CAL_INGRESO_V,0)*100)
            FROM ((SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID = '.$user.')AS i,
             (SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_AHORRO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 3 And ca.CAL_USE_ID = '.$user.')AS g )';

        $por_Divercion = 'SELECT (IFNULL(CAL_DIVERCION_V/CAL_INGRESO_V,0)*100)
            FROM ((SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID = '.$user.')AS i,
            (SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_DIVERCION_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 4 And ca.CAL_USE_ID = '.$user.')AS g )';

        $por_Invercion = 'SELECT (IFNULL(CAL_INVERCION_V/CAL_INGRESO_V,0)*100)
            FROM ((SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID = '.$user.')AS i,
            (SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INVERCION_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 5 And ca.CAL_USE_ID = '.$user.')AS g )';

        $por_Donacion = 'SELECT (IFNULL(CAL_DONACION_V/CAL_INGRESO_V,0)*100)
            FROM ((SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID = '.$user.')AS i,
            (SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_DONACION_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 6 And ca.CAL_USE_ID = '.$user.')AS g )';

        $por_Remanente = 'SELECT (IFNULL(CAL_DONACION_V/CAL_INGRESO_V,0)*100)
            FROM ((SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_INGRESO_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 8 And ca.CAL_USE_ID = '.$user.')AS i,
            (SELECT IFNULL(SUM(RES_RESPUESTA),0) AS CAL_DONACION_V FROM respuestas AS r JOIN preguntas AS p ON R.PRE_ID=P.PRE_ID RIGHT JOIN categorias as C ON P.CAT_ID=C.CAT_ID RIGHT JOIN calificaciones AS ca ON r.CAL_ID = ca.CAL_ID WHERE C.CAT_ID = 7 And ca.CAL_USE_ID = '.$user.')AS g )';


        $porcentaje_gastos = DB::select($por_Gastos);
        $porcentaje_educacion = DB::select($por_Educacion);
        $porcentaje_ahorro = DB::select($por_Ahorro);
        $porcentaje_divercion = DB::select($por_Divercion);
        $porcentaje_invercion = DB::select($por_Invercion);
        $porcentaje_donacion = DB::select($por_Donacion);
        $porcentaje_remanente = DB::select($por_Remanente);

        return view('dashboard', compact('porcentaje_gastos','porcentaje_educacion','porcentaje_ahorro','porcentaje_divercion','porcentaje_invercion','porcentaje_donacion', 'porcentaje_remanente'));

                /* return $porcentaje_gastos; */
    }

}
