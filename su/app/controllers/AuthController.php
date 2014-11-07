<?php

class AuthController extends \BaseController
{

    public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check()) {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login');
    }

    public function postLogin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        $userdataEmail = array(
            'email' => Input::get('username'),
            'password' => Input::get('password')
        );

        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        /*if (Auth::attempt($userdata, Input::get('remember-me', 0))) {


            switch (Auth::user()->id_rol) {
                case 1:
                    return Redirect::to('/admin/dashboard');
                    break;
                case 2:
                    return Redirect::to('/administrador');
                    break;
                case 3:
                    return Redirect::to('/editores');
                    break;
                case 4:
                    return Redirect::to('/admin2');
                    break;
                case 5:
                    return Redirect::to('/atención');
                    break;
                case 6:
                    return Redirect::to('/administrador2');
                    break;
                default:
                    return Redirect::to('/');
            }
            // De ser datos válidos nos mandara a la bienvenida
            //return Redirect::to('/');
        } else*/
        if (Auth::attempt($userdataEmail, Input::get('remember-me', 0))) {


            switch (Auth::user()->id_rol) {
                case 1:
                    return Redirect::to('/admin/dashboard');
                    break;
                case 2:
                    return Redirect::to('/administrador');
                    break;
                case 3:
                    return Redirect::to('/editores');
                    break;
                case 4:
                    return Redirect::to('/admin2');
                    break;
                case 5:
                    return Redirect::to('/atención');
                    break;
                case 6:
                    return Redirect::to('/administrador2');
                    break;
                default:
                    return Redirect::to('/');
            }
        } else {
            return Redirect::to('/')
                ->with('mensaje_error', 'Tus datos son incorrectos')
                ->withInput();
        }
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('/')
            ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

}