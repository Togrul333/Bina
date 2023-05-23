<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseRequest;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HouseController extends Controller
{
    public function addHouse()
    {
        return view('house.house-create');
    }
    public function saveHouse(HouseRequest $request)
    {
        $data = $request->validated();
        DB::beginTransaction();

        try {
            House::create([
                'address' => $data['address'],
                'region' =>  $data['region'],
            ]);

            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['email']),
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        return $this->jsonSuccess('Created successfully', [
            'redirect' => route('dashboard')
        ]);
    }
}
