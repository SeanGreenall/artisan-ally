<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\User;
use Database\Factories\InventoryFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index()
    {
        $data = DB::table('inventories')
            ->select('name', 'quantity')
            ->latest()
            ->get();

        return json_encode($data);
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
}
