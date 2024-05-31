<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function show()
    {
    }

    public function store()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function get_data()
    {
        $data = [
            [
                'name' => 'Sean',
                'quantity' => 1
            ]
        ];
        return json_encode($data);
    }
}
