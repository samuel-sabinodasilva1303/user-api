<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getUsers()
    {
        $response = Http::get('https://dummyjson.com/users?limit=100');

        $usersByState = collect($response->json()['users'])
            ->groupBy('address.state')
            ->map(function ($users) {
                return $users->sortBy('firstName')->values();
            });
        return view('welcome', ['usersByState' => $usersByState]);
    }
}
