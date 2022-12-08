<?php
 
namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
class Trainer extends Model
{
    
    static $rules = [
	'id' => 'required',
	'name' => 'required',
    'Apellido' => 'required',
    'Avatar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','Apellido','Avatar'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function trainer()
    {
        return $this->hasOne('App\Models\Trainer', 'id', 'name');
    }
    
    use Searchable;
}
