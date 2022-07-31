<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\News;
use App\Models\Setting;
use App\Models\SocialLink;
use App\Models\Statistic;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website', [
            'settings'=> Setting::first(),
            'social_links'=> SocialLink::all(),
            'statistics' => Statistic:: all(),
            'features' => Feature::take(3)->get(),

        ]);
    }

    public function subscribe(Request $request){

        $request->validate([
            'email' => ['required','string', 'email'],
        ]);
        $data = $request->all();
        $subscription = News::create($data);
        return redirect()->route('landing-page')
            ->with('success' , "you subscribe with '$subscription->email' in website news   Successfully");

    }
}