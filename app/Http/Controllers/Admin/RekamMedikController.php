<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pasien;
use Illuminate\Http\Request;
use JavaScript;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

class RekamMedikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.rekamMedik.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.rekamMedik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetshautocomplete(Request $request)
    {
        if ($request->get('query')){
            $query = $request->get('query');
            $data = Pasien::table('pasien')
            ->where('no_identitas','like', '%'.$query.'%')->get();
            $output = '<ul class="dropdown-menu" style="display:block;position:absolute;">';
            foreach($data as $row){
                $output .='<li><a href="#">'.$row->no_identitas.'</a></li>';
            }
            $output .= '<ul>';
            echo $output;
        }
    }

    public function fetshotherdata(Request $request)
    {
        if ($request->get('valueofnumberid')){
            $valueofnumberid = $request->get('valueofnumberid');
            $resultdata = Pasien::table('pasien')
            ->leftJoin('rekam_medik', 'pasien.router_id', '=', 'rekam_medik.id')
            ->select('pasien.*','rekam_medik.router_name as router_name'.'rekam_medik.id as router_id')
            ->where('no_identitas', 'like' ,'%'.$valueofnumberid.'%')->get();
            return response()->json($resultdata);
        }
    }

}
