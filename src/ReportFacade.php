<?php
namespace Anisa\Report;

use Illuminate\Support\Facades\Facade;

class ReportFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "report";
    }

}
