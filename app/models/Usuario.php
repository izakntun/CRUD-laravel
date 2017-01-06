<?php
/**
 * Created by PhpStorm.
 * User: isaac
 * Date: 3/01/17
 * Time: 01:31 PM
 */

class Usuario extends Eloquent
{
    protected $table = 'usuarios';
    protected $fillable = array('nombres', 'apellidos', 'imagen', 'tipo');
    protected $guarded = ['id'];

    public function perfil()
    {
        return $this->hasOne('Perfil', 'user_id', 'id');
    }
}