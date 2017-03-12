<?php

namespace App\Http\Controllers;


use App\QuickCheck;
use GuzzleHttp\Client;


use Illuminate\Http\Request;


class QuickController extends Controller
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
    public function step1()
    {
        return view('quick-1');
    }


    public function step2()
{
    return view('quick-2');
}


    public function step3()
    {
        return view('quick-3');
    }



    public function saveStep1(Request $request)
    {
        $evaluation = new QuickCheck;
        $evaluation->street = $request->input('street');
        $evaluation->house_number = $request->input('house_number');
        $evaluation->zip = $request->input('zip');
        $evaluation->town = $request->input('town');





        return view('quick-2',  [

            'street' => $evaluation->street,
            'house_number' => $evaluation->house_number,
            'zip' => $evaluation->zip,
            'town' => $evaluation->town

        ]);
    }


    public function saveStep2(Request $request)
    {
        $evaluation = new QuickCheck;

        $evaluation->street = $request->input('street');
        $evaluation->house_number = $request->input('house_number');
        $evaluation->zip = $request->input('zip');
        $evaluation->town = $request->input('town');
        $evaluation->type= $request->input('type');

        return view('quick-3',[
            'street' => $evaluation->street,
            'house_number' => $evaluation->house_number,
            'zip' => $evaluation->zip,
            'town' => $evaluation->town,
            'type' => $evaluation->type,
        ]);
    }


    public function saveStep3(Request $request)
    {

        $evaluation = new QuickCheck;

        $evaluation->street = $request->input('street');
        $evaluation->house_number = $request->input('house_number');
        $evaluation->zip = $request->input('zip');
        $evaluation->town = $request->input('town');
        $evaluation->type = $request->input('type');
        $evaluation->plot_area= $request->input('plot_area');
        $evaluation->living_area= $request->input('living_area');
        $evaluation->garages= $request->input('garages');
        $evaluation->elevator= $request->input('elevator');
        $evaluation->year= $request->input('year');
        echo $evaluation->type;

        $evaluation->save();



        $client = new Client();
        $res = $client->request('POST', 'https://avm.sprengnetter.de/service/api/valuation', [
            'auth' => ['avm@ww-ag.com', 'TzpX53!xBvk$9w3']
        ]);
        echo $res->getStatusCode();
// "200"
        echo $res->getHeader('application/json');
// 'application/json; charset=utf8'
        echo $res->getBody();
// {"type":"User"...'







        return view('home-quick');
    }



}


