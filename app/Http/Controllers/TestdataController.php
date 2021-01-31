<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testdata;
use App\Models\Client;

class TestdataController extends Controller
{
    public function index(){
        $testdata = Testdata::all();
        return response($testdata, 200);
    }
    public function getById($id){
        $testdata = Testdata::find($id);
        return response($testdata, 200);
    }


    public function createTestdata(Request $request){

        $data = $request->validate([
            'customername'=>'required',
            'created_at'=>'',
            'updated_at'=>'',
            'msisdn'=>'required'
        ]);

        $t = Testdata::create($data);

        return response($t,200);

    }



    public function testdataWithRelations(){
        $testdata = Testdata::with('Clients')->get();
        return response($testdata, 200);
    }

}
