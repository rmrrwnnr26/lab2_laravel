<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services', [
            'services' => Service::all()
        ]);
    }

    public function create()
    {}

    public function store(Request $request)
    {}

    public function show(string $id)
    {
        $category = Service::with('category')->find($id);
        
        return view('service', [
            'service' => $category
        ]);
    }

    public function edit(string $id)
    {}

    public function update(Request $request, string $id)
    {}

    public function destroy(string $id)
    {}
}
