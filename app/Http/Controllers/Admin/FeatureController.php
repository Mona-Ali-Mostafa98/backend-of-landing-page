<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        return view('admin.features.index', [
            'features' => Feature:: all()
        ]);
    }

    public function create()
    {
        return view('admin.features.create' ,[
            'feature'=>  new Feature() ,
        ]);
    }

    public function store(FeatureRequest $request)
    {
        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $destinationPath = 'images/features';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $data['image'] = "$imageName";
        }else{
            unset($data['image']);
        }

        $feature=Feature::create($data);
        return redirect()->route('admin.features.index')
            ->with('success' , "feature '$feature->title' Created Successfully");

    }

    public function show($feature)
    {
        return view('admin.features.show',[
            'feature'=>Feature::findOrFail($feature)
        ]);
    }
    public function edit($feature)
    {
        return view('admin.features.edit', [
            'feature' => Feature::findOrFail($feature)
        ]);
    }

    public function update(FeatureRequest $request, $feature)
    {
        $feature = Feature::findOrFail($feature);
        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $destinationPath = 'images/features';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $data['image'] = "$imageName";
        }else{
            unset($data['image']);
        }

        $feature->update($data);

        return redirect()->route('admin.features.index')
            ->with('success',"Feature '$feature->title' updated successfully");
    }

    public function destroy($id)
    {
        $feature = Feature::find($id);
        $feature -> delete();
        return redirect()->route('admin.features.index')
            ->with('success' , "Feature '$feature->title' Deleted Successfully");
    }}