<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="category"; //Tuong ung ten table trong csdl
    public $primaryKey="cateid";//Tuong ung cot la  khoa chinh trong csdl
    public $timestamp=false;
    protected $attributes=['description'=>''];//Ko can theo doi thoi gian ghi/ cap nhat du lieu
    protected $fillable = ['catename', 'description'];
}
