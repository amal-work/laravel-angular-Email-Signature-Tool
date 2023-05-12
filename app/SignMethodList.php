<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BaoPham\DynamoDb\DynamoDbModel;

class SignMethodList extends Model
{
    protected $table = 'sign_method_lists';

    protected $primaryKey = 'id';

   protected $fillable = [ 'category_name', 'sign_method_name', 'sign_method_link' ];
}