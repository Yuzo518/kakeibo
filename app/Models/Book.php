<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
    static $in_out = [
        1 => "収入",
        2 => "支出",
    ];

    static $categories = [
        "趣味",
        "食費",
        "光熱費",
        "家賃・ローン",
        "交際費",
        "教育費",
        "給料",
        "副業",
        "臨時収入",
    ];

    protected $fillable = [
        "inout",
        "year",
        "month",
        "category",
        "amount",
        "memo",
        "next_amount",
    ];
    //use HasFactory;
}
