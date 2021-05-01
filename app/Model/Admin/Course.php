<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;
class Course extends Model
{
    use LogsActivity;

    protected $table = 'courses';
    protected static $logAttributes = ['*'];
    /* set--Nomedainput--Attribute
     respeitando o case-sensitive
    */
    public function setTitleAttribute($value)
    {
        $this->attributes['title']=mb_strtoupper($value);
        $this->attributes['slug']='spark-despachante-de-armas-'.Str::slug($value);

        $tags = str_replace('-', ', ', Str::slug($value));
        $tags = mb_strimwidth($tags, 0, 60, "");
        $this->attributes['tags']= 'spark, armas, clube de tiro, gravatai, cachoeirinha'. $tags;
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
        return $this->hasMany(CourseImage::class,'course_id','id');
    }
}
