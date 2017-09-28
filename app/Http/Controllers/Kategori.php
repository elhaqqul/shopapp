<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
class Kategori extends Controller
{
    function getKategori(){
    	$sql = "SELECT * FROM kategori";
    	$data = DB::select($sql);
    	$data = json_decode(json_encode($data),true);
	    $html = '';
    	if(count($data)){
    		$i=1;
	    	foreach($data as $val){
	    		$html.="<tr>";
	    			$html.="<td>".$i."</td><td>".$val['kategori']."</td>";
	    		$html.="</tr>";
	    		$i++;
	    	}
	    }else{
	    	$html.="<tr><td colspan='2' align='center'><strong>Not Found</strong></td></tr>";
	    }
	    echo $html;
    }

    function saveKategori(Request $req){
    	$kategori = $req->input('kategori');
    	DB::beginTransaction();
    	try{
    		DB::table('kategori')->insert(['kategori'=>$kategori]);
    		DB::commit();
    		echo json_encode(['response'=>'OK']);
    	}catch(\Exception $e){
    		DB::rollback();
    		echo json_encode(['response'=>'ERR']);
    	}
    }
}
