<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    use HasFactory;
    
    protected $table = 'customer';

    //protected $table = 'add_bills';

    /*public function storebills(){
        $query = DB::table('add_bills')
        ->where('meter_num', $meternum)
        ->where('period_from', $periodFrom)
        ->where('period_to', $periodTo)
        ->where('prev_reading', $preReading)
        ->where('present_reading', $presentReading)
        ->where('bill_amount', $billAmount)
        ->where('bill_date', $billDate)
        ->where('due', $dueDate)
        ->where('penalty', $penalty)
        ->get();
    }*/


}
