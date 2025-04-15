<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {

    public function index(){
        $junk = array(
            ['junk' => 'junk'],
            ['junk2' => 'junk2'],
            ['junk3' => 'junk3'],
            ['junk4' => 'junk4'],
            ['junk5' => 'junk5'],
            ['junk6' => 'junk6'],
            ['junk7' => 'junk7'],
            ['junk8' => 'junk8'],
            ['junk9' => 'junk9'],
            ['junk10' => 'junk10]'
        ]);
        return inertia('Index/Index', [
            'junk' => $junk,
        ]);
    }

    public function show(){
        return inertia('Index/Show');
    }
}
