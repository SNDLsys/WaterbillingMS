<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Water;

class WaterController extends Controller
{
    //public function __construct(){
    //     $this->middleware('auth');

    //}
    
    
    //return to the page of index
    public function index(){

        //$index = Water::all();
       // $index = Water::orderBy('cusFirstname')->get();
       //$index = Water::where('connection status', 'Active')->get();
       $index = Water::latest()->get();      

        return view('waterbilling.index',[
            'index' => $index,
        ]);

    }

    public function show($id){
        //get the id in the parameter
        //use th $id variable to query the db for a record
        $idname = Water::findOrFail($id);

        return view('waterbilling.show', ['waterid' => $idname]);
    }

    public function create(){
        
        return view('waterbilling.create');
    }

    public function store(){
        //error_log(request('surname'));
        $storeVar = new Water();

        $storeVar->cusLastname = request('lastname');
        $storeVar->cusFirstname = request('firstname');
        $storeVar->cusMiddlename = request('middlename');
        $storeVar->contact = request('contact');
        $storeVar->address = request('address');
        $storeVar->connection_status = request('status');

        //error_log($storeVar);
        $storeVar->save();


        return redirect('/')->with('mssg', 'thanks for your order');
    }

    public function destroy($id){
        $waterid = Water::findOrFail($id);
        $waterid->delete();

        
        return redirect('/index');
    }
}
