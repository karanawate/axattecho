<?php

namespace App\Imports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
class ExelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach($collection as $key=>$value)
        {
                if($key > 0)
                {
                    DB::table('emps')->insert([
                        'emp_name'    =>$value[0],
                        'emp_mobile'  =>$value[1],
                        'emp_email'   =>$value[2],
                        'emp_address' =>$value[3],
                        'emp_status'  =>$value[4],
                    ]);
                }
        }
    }
}
