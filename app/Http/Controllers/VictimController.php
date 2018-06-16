<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Victim;

class VictimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function getDetails(){
        $victims = Victim::all();


        return view('vdetails')->with('victims',$victims);



   }
    public function getProperty(){
        $victims = Victim::all();


        return view('property')->with('victims',$victims);



   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('victim');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $victim = new Victim();
         $victim->name = $request['name'];
          $victim->address = $request['address'];
           $victim->dob = $request['dob'];
             $victim->fname = $request['fname'];
              $victim->gname = $request['gname'];
               $victim->dtype = $request['dtype'];
               $victim->certificateno = $request['certificateno'];
               
       $victim->image='citizenship.jpg';
         $filename = '';
         $image=$request->file('image');
         if($image->isvalid()){
             $ext=$image->getClientOriginalExtension();
           $filename=time().'.'.$ext;
             $path = public_path().'/uploads/';
            $image->move($path, $filename);
       }
         $victim->image=$filename;

   
        $victim->save();
        return redirect('victim');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
