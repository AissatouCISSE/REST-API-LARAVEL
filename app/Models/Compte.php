<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Compte
 * @package App\Models
 * @version August 31, 2020, 4:00 pm UTC
 *
 * @property integer $solde
 * @property string $numcompte
 * @property integer $client_id
 * @property integer $numagence
 */
class Compte extends Model
{
    use SoftDeletes;

    public $table = 'comptes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'solde',
        'numcompte',
        'client_id',
        'numagence'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'solde' => 'integer',
        'numcompte' => 'string',
        'client_id' => 'integer',
        'numagence' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'solde' => 'required',
        'numcompte' => 'required',
        'client_id' => 'required',
        'numagence' => 'required'
    ];

    
}
