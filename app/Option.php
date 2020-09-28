<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Option extends Model
{
    // use SoftDeletes
    //
    // protected $table = 'options';
    // protected $primaryKey = 'option_id';
    // protected $fillable = [];
    // protected $incrementing = true;
    
    // If your primary key is not an integer, you should set the protected $keyType property on your model to string
    // protected $keyType = 'string'; // The "type" of the auto-incrementing ID.
    
    // If you do not wish to have created_at, updated_at automatically managed by Eloquent, set the $timestamps property on your model to false:
    // protected $timestamps = false;

    // This property determines how date attributes are stored in the database, as well as their format when the model is serialized to an array or JSON:
    // protected $dateFormat = 'U';

    // If you need to customize the names of the columns used to store the timestamps, you may set the CREATED_AT and UPDATED_AT constants in your model:

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    // protected $connection = 'connection-name';

    // If you would like to define the default values for some of your model's attributes, you may define an $attributes property on your model:
    // protected $attributes = [
    //     'delayed' => false,
    // ];

    // isDirty($arg = null);
    // isClean($arg = null);
    // wasChanged($arg = null);
    // getOriginal($arg = null);

    protected $guarded = [];
}
