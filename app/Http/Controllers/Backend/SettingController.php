<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settingProfile=Setting::find(1);
        return view('backend.settingss.create',compact('settingProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settingProfile=Setting::find($request->setting_id);
        if(empty($settingProfile)) {
            $allsettingsImageName = time().'.'.$request->logo->extension();  
        $request->logo->move('uploads', $allsettingsImageName);

            $allsettingsobj= new Setting;
            $allsettingsobj->name=$request->name;     
            $allsettingsobj->logo=$request->logo;     
            $allsettingsobj->email=$request->email;         
            $allsettingsobj->facebook=$request->facebook;       
            $allsettingsobj->phone=$request->phone;       
            $allsettingsobj->address=$request->address;           
            $allsettingsobj->save();

            Session::flash('message', 'Successfully Create');
        } else {
            $settingProfile->name=$request->name;     
            $settingProfile->logo=$request->logo;     
            $settingProfile->email=$request->email;         
            $settingProfile->facebook=$request->facebook;       
            $settingProfile->phone=$request->phone;       
            $settingProfile->address=$request->address;           
            $settingProfile->save();
            Session::flash('message', 'Successfully Updated');
        }
        return redirect()->back();
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
