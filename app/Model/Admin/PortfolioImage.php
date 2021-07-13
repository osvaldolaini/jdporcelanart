<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class PortfolioImage extends Model
{
    use LogsActivity;
    protected $table = 'portfolio_images';
    protected static $logAttributes = ['*'];
}
