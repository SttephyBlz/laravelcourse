<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
  protected $primaryKey = 'id';
  protected $table = 'categories';
  /*Turns off timestamps (fields):
    -created_at
    -updated_at

    Which are updated whenever create a new record
    or update an existing record.

    So, Eloquent ORM model is not going to consider
    timestamps on table.
  */
  //public $timestamps = false;

  /*
    Defines field names that can be mass
    assigned. This is a security measure
    that ensures only authorized fieldnames
    are affected.
  */
  protected $fillable = array('name', 'created_at_ip', 'updated_at_ip');
}
