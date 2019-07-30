<?php



namespace App\Models;

use App\Http\Traits\TimestampsTrait;
use App\Http\Traits\BooksTrait;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use TimestampsTrait;
    use BooksTrait;

    public function getDates()
    {
        return ['created_at', 'updated_at'];
    }

    //define table
    protected $table = 'book';

    //created at --- 5 mins ago instead of time and date
    //updated at
}
