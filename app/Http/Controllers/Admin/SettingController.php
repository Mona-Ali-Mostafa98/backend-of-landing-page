<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings.index', [
            'settings' => Setting:: first()->get()
        ]);
    }

    public function show($id)
    {
        return view('admin.settings.show',[
            'setting'=> Setting::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('admin.settings.edit', [
            'setting' => Setting::findOrFail($id),
        ]);
    }

    public function update ( SettingRequest $request , $id)
    {
        $setting = Setting::findOrFail($id);
        $data = $request->except('image','logo');

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $logo = $request->file('logo');
            $destinationPath = 'images/settings';
            $logoName = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $logoName);
            $data['logo'] = "$logoName";
        }else{
            unset($data['logo']);
        }

        $setting->update($data);

        return redirect()->route('admin.settings.index')
        ->with('success' , "Settings Updated Successfully");

    }

}