<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as TesteC;


class teste extends TesteC 
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function teste()
    {  
        $teste = [
            'nome' => 'Thales'
        ];


        return view('teste2', compact('teste'));
    }

}

?>