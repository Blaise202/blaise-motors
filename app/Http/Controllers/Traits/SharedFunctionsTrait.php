<?php

// app/Http/Controllers/Traits/SharedFunctionsTrait.php

namespace App\Http\Controllers\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait SharedFunctionsTrait
{
    public function getUser()
    {

        $user = Auth::user();
        $id = $user->id;
        $name = $user->name;
        $image = $user->image;
        $user = [
            $name,
            $image,
            $id
        ];
        $data = User::where('name' , $name)->get();
        return $user;
    
    }
}