<?php
/**
 * Created by PhpStorm.
 * User: Chun
 * Date: 9/4/18
 * Time: 1:58 PM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ConnectDb
{
    public function createDb($request){
       // Create database dynamically and set params
        if($request['dbPass'] == ''){
            $dbPassword = '';
        } else{
            $dbPassword = $request['dbPass'];
        }
        $this->setEnv('DB_DATABASE', $request['dbName']);
        $this->setEnv('DB_USERNAME', $request['dbUser']);
        $this->setEnv('DB_PASSWORD', $dbPassword);
        $this->runMigration();
    }


    public function setEnv($envKey, $envValue)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);
        $oldValue = env($envKey);
        $str = str_replace("{$envKey}={$oldValue}", "{$envKey}={$envValue}\n", $str);
        $fp = fopen($envFile, 'w');
        fwrite($fp, $str);
        fclose($fp);
    }


    public function runMigration(){
        Artisan::call('migrate');
    }
}