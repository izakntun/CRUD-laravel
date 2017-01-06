<?php
/**
 * Created by PhpStorm.
 * User: isaac
 * Date: 5/01/17
 * Time: 10:10 AM
 */
class Perfil extends Eloquent
{
    protected $table = 'perfiles';
    protected $fillable = ['user_id', 'rfc', 'email', 'telefono'];
    protected $guarded = ['id'];


}