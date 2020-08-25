<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function amigos()
    {
        $amigos = [
            ['nome' => 'Jose Silva',        'idade' => 22],
            ['nome' => 'Augusto Limeira',   'idade' => 20],
            ['nome' => 'Joao das Neves',    'idade' => 29],
            ['nome' => 'Maria Karenina',    'idade' => 20],
            ['nome' => 'Thales',    'idade' => 20]
        ];
    
        return  view('teste', compact('amigos'));
    }





}
