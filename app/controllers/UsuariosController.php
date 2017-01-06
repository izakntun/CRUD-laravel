<?php
/**
 * Created by PhpStorm.
 * User: isaac
 * Date: 3/01/17
 * Time: 01:41 PM
 */

class UsuariosController extends BaseController
{
    public function mostrarUsuarios()
    {
        $usuarios = Usuario::all();
        $perfiles = Perfil::all();
        return View::make('usuarios.lista',
            ['usuarios' => $usuarios],
            ['perfiles' => $perfiles]
        );
    }

    public function nuevoUsuario()
    {
        return View::make('usuarios.crear');
    }

    public function crearUsuario()
    {
        $data = Input::all();
        $file = Input::file('file');
        $imgDestino = public_path().'/img/';
        $file->move($imgDestino, $file->getClientOriginalName());
        $urlimg = $file->getClientOriginalName();
        $data['imagen'] = $urlimg;
        $user = Usuario::create($data);
        Perfil::create([
            'user_id' => $user->id,
            'rfc'     =>  $data['rfc'],
            'email'   =>  $data['email'],
            'telefono' => $data['telefono']
        ]);
        return Redirect::to('usuarios');

    }


    public function verUsuario($id = false)
    {
        if ( $id != false )
        {
            $usuario = Usuario::find($id);
            if ( !is_null($usuario) )
            {
                return View::make('usuarios.ver', compact('usuario') );
            }
        }
        return 'nanana';
    }
    public function modificarUsuario($id)
    {
        $usuario = Usuario::find($id);
        return View::make('usuarios.upddel', compact('usuario'));
    }

    public function actualizarUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombres = Input::get('nombres');
        $usuario->apellidos = Input::get('apellidos');
        $file = Input::file('file');
        $imgDestino = public_path().'/img/';
        $file->move($imgDestino, $file->getClientOriginalName());
        $urlimg = $file->getClientOriginalName();
        $usuario->tipo = Input::get('tipo');
        $usuario->imagen = $urlimg;
        $usuario->save();

        $perfil_data = Input::only('rfc', 'email', 'telefono');
        $usuario->perfil->fill($perfil_data);
        $usuario->perfil->save();

        return Redirect::to('usuarios');
    }
}