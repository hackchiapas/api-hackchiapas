<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TableHackersController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view ('home');
    }

    public function getHackers(Request $request){
        if($request->ajax()){
            $Hackers = '';
            $NotHackers = '';
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('hackers')
                ->where('nombre', 'like', '%'.$query.'%')
                ->orderBy('id', 'desc')
                ->get();    
            }else{
                $data = DB::table('hackers')
                ->orderBy('id', 'desc')
                ->get();
            }
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $user){
                    if(($user->confirmado) === 1){
                        $Hackers .= '
                            <tr>
                                <td>'.$user->id.'</td>
                                <td>'.$user->nombre.'</td>
                                <td>'.$user->email.'</td>
                            </tr>
                            ';                        
                    }else{
                        $NotHackers  .= '
                            <tr>
                                <td>'.$user->id.'</td>
                                <td>'.$user->nombre.'</td>
                                <td>'.$user->email.'</td>
                            </tr>
                        ';   
                    }

                }
            }
            
            if($Hackers === ''){
                $Hackers = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>';
            }
            
            if($NotHackers === ''){
                $NotHackers = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>';
            }
            
            $data = array(
                'Hackers'  => $Hackers,
                'NotHackers' => $NotHackers
            );

            echo json_encode($data);
        }
    }
}
