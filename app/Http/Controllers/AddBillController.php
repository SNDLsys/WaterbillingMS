<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addBill;

class AddBillController extends Controller
{
    //
    
    public function displayAddbill(){
        
        return view('waterbilling.addbills');
    }

    public function storebills(){
        
        $storebill = new addBill();

        $storebill->period_from = request('periodFrom');
        $storebill->period_to = request('periodTo');
        $storebill->prev_reading = request('preReading');
        $storebill->present_reading = request('presentReading');
        $storebill->bill_amount = request('billAmount');
        $storebill->bill_date = request('billDate');
        $storebill->due = request('dueDate');
        $storebill->status = request('status');

        //error_log($storeVar);
        $storebill->save();


        return redirect('echo/addbills');
    }

    
}
