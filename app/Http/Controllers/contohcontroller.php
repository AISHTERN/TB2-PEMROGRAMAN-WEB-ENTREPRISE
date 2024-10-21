<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohcontroller extends Controller
{
    public function TampilContoh()
    {
        $data = [
            'totalProducts' => 310,
            'salesToday' => 1000,
            'totalRevenue' => 'Rp 120,0000,000',
            'registeredUsers' => 350

        ];
        return view ('contoh',$data) ;
    }
}
