<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;
class Portfolio extends Model
{
    use LogsActivity;

    protected $table = 'portfolios';
    protected static $logAttributes = ['*'];
    /* set--Nomedainput--Attribute
     respeitando o case-sensitive
    */
    public function setTitleAttribute($value)
    {
        $this->attributes['title']=mb_strtoupper($value);
        $this->attributes['slug']='jd-porcelanart-'.Str::slug($value);

        $tags = str_replace('-', ', ', Str::slug($value));
        $tags = mb_strimwidth($tags, 0, 60, "");
        $this->attributes['tags']= 'jd-porcelanart, porcelanato, pias, cozinhas, banheiros'. $tags;
    }
    protected $fillable = [
        'id', 'active', 'title', 'slug', 'text', 'author', 'clicks','tags',
        'updated_because', 'deleted_because', 'deleted_by',
        'updated_by', 'created_by'
    ];

    protected $dates = [
        'deleted_at','created_at', 'updated_at'
    ];
    public function images()
    {
        return $this->hasMany(PortfolioImage::class,'portfolio_id','id');
    }
}
