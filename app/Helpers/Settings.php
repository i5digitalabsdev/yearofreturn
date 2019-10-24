<?php
/**
 * Created by PhpStorm.
 * User: Chun
 * Date: 10/9/18
 * Time: 2:07 AM
 */

namespace App\Helpers;


class Settings
{

    public function getApplicationSentEmail()
    {
        $data = [
            'message' => 'Thank you for submitting your application we will get back to you shortly. Kindly keep your registration number well. Thanks',
            'subject' => 'DTI: Application Received'
        ];
        return $data;
    }

    public function sendPaymentEmail()
    {
        $data = [
            'message' => 'Kindly use the link below to make payment to DTI. You can use mobile money or card payment',
            'subject' => 'DTI: Make Payment to continue your application'
        ];
        return $data;
    }
    public function sendPartTwoEmail()
    {
        $data = [
            'message' => 'You are almost there !. Visit the below to complete your application',
            'subject' => 'DTI: Application part two'
        ];
        return $data;
    }

    public function generateRegNo($length = 6, $chars = '1234567890DTIAFRICA'){
        $chars_length = (strlen($chars) - 1);
        $string = $chars{mt_rand(0, $chars_length)};
        for ($i = 1; $i < $length; $i = strlen($string))
        {
            $r = $chars{mt_rand(0, $chars_length)};
            if ($r != $string{$i - 1}) $string .= $r;
        }
        return $string;
    }

    public function generateApplicationToken($regNo){
        $data = $regNo . date("l");
        return sha1($data);
    }

}