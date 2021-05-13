<?php
namespace Anisa\Report\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table="reports";
    protected $fillable=["type"]; 
}
