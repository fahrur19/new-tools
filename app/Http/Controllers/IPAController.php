<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPAController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('contents.ipa-topic');
    }

    public function push()
    {
        {
            $curl = curl_init();
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://172.168.20.62:6789/getAllTopic?skip=0&limit=10',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  
                    'Content-Type: application/json',
                ),
            ));
            $response = curl_exec($curl);
            $datax = json_decode($response, true);
    
            $err = curl_error($curl);
            $curl2 = curl_init();
    
            // return $datax;
    
            curl_setopt_array($curl2, array(
                CURLOPT_URL => 'http://172.168.20.62:6789/getQueue',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  
                    'Content-Type: application/json',
                ),
            ));
            $response2 = curl_exec($curl2);
           
    
            $err2 = curl_error($curl2);
            $antrian = json_decode($response2, true);
            // return $antrian;
            $data= array("topic"=>$datax, "queue"=>$antrian);
            // return $data;
            return view ('contents/ipa-topic',$data);
        
        }
    }
}
