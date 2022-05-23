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

    //show db customer
    public function indexcus(){

        //$index = Water::all();
       // $index = Water::orderBy('cusFirstname')->get();
       //$index = Water::where('connection status', 'Active')->get();
       //$index = Water::latest()->get();      

        /*return view('waterbilling.showcus',[
            'id' => $index,
        ]);*/
        $select = \App\Models\water::where('customer', '1')->first();
        //$select = water::select('select * from customer');
        //$select = water::SELECT ('select * FROM customer');
        return view ('waterbilling.showcus', compact('select'));
        

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

    public function create1(){
        
        return view('waterbilling.invoice');
    }

    /*public function storebills(){
        
        return view('waterbilling.addbills');
    }/

    // register
    /*public function regis(){
        return view('waterbilling.adduser');
        
    }*/


    //storing new customer
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

    /*public function storebills(){
        
        $storebill = new Water();

        $storebill->meter_num = request('meternum');
        $storebill->period_from = request('periodFrom');
        $storebill->period_to = request('periodTo');
        $storebill->prev_reading = request('preReading');
        $storebill->present_reading = request('presentReading');
        $storebill->bill_amount = request('billAmount');
        $storebill->bill_date = request('billDate');
        $storebill->due = request('dueDate');
        $storebill->penalty = request('penalty');

        //error_log($storeVar);
        $storebill->save();


        return redirect('/index');
    }*/

    public function destroy($id){
        $waterid = Water::findOrFail($id);
        $waterid->delete();

        
        return redirect('/index');
    }
}
