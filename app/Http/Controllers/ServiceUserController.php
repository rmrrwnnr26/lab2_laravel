<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceUserController extends Controller
{
     public function show(string $id)
    {
        $service = Service::with(['users', 'category'])->find($id);
        
        return view('service_show', [
            'service' => $service
        ]);
    }
}