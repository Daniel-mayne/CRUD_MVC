<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller
{
    public function create()
    {
        $this->render('create');
    }

    public function createAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                Usuario::insert([
                    'name' => $name,
                    'email' => $email
                ])->execute();
                $this->redirect('/');
            }
        }
        $this->redirect('/novo');
    }

    public function edit($argumentos)
    {
        $usuario = Usuario::select()->find($argumentos['id']);


        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }

    public function editAction($argumentos)
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            Usuario::update()
                ->set('name', $name)
                ->set('email', $email)
                ->where('id', $argumentos['id'])
                ->execute();

            $this->redirect('/');
        }

        $this->redirect('/usuario/'.$argumentos['id'].'/editar');
    }



    public function delete($argumentos)
    {
        Usuario::delete()
        ->where('id', 
        $argumentos['id'])
        ->execute();
        $this->redirect('/');
    }
}
