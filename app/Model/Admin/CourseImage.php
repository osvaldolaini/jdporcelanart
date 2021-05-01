<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class CourseImage extends Model
{
    use LogsActivity;
    protected $table = 'course_images';
    protected static $logAttributes = ['*'];
}
