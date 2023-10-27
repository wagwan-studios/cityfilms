<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = [
        'title','slug','description','related_to','video_url','portfolio_category_id'
    ];

    public function category(){
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }
}
