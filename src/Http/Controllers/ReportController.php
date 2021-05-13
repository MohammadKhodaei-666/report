<?php
namespace Anisa\Report\Http\Controllers;

use Anisa\Report\Models\Report;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index(){
        $allReport=Report::all();
        $type="pdf";
        //return "report index";
        //return view("repo::reportindex",compact('type'));
        return view("report.reportindex",compact('type'));
        //return config('report.name');
    }
}
