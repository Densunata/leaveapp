<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Employee extends Model
{
  protected $fillable = ['emp_name', 'dob', 'phone'];

  protected $primaryKey = 'id';

    use HasFactory;

}
