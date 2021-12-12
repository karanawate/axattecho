<?php
        
namespace App\Http\Controllers;
use App\Models\Emp;
use Illuminate\Http\Request;
use App\Imports\ExelImport;
use Maatwebsite\Excel\Facades\Excel;



class UploadExel extends Controller
{
    
    public function exelsubmit(Request $request)
    {
        $filemy = $request->file('exelfile');
        Excel::import(new ExelImport, $filemy);
        echo "inserted Succesffully";
    }
}
