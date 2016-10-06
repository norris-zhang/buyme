<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function dbtest()
    {
        $users = DB::select('select * from users where id=:id', ['id' => 1]);
        Log::info(print_r($users, true));
        return $users;
    }
    public function querybuildertest ()
    {
        $users = DB::table('users')->where('id', 1)->first();
        Log::info('Norris: querybuilder - users - ' . print_r($users, true));
        return json_encode($users);
    }
}