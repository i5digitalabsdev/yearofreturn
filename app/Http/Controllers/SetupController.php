<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ConnectDb;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

class SetupController extends Controller
{
    protected $connectDb;
    public function __construct(ConnectDb $connectDb)
    {
        $this->connectDb = $connectDb;
    }

    public  function index(){
        if(env('DB_DATABASE') != 'homestead'){
            return view('themes.sistashare.index');
        }
        return view('index');
    }

    public function getStarted(){
        if(env('DB_DATABASE') != 'homestead'){
            return view('themes.sistashare.index');
        }
        return view('getStarted');
    }

    public function postGetStarted(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'dbName' => 'required',
            'dbUser' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        $this->connectDb->createDb($request);
        $this->registerUser($request);
        return view('index');
    }

    public  function registerUser($data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
