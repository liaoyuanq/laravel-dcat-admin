<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class AppVersion extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'app_versions';
    
}
