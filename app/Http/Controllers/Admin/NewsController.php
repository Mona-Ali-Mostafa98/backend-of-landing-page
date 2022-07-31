<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index', [
            'subscriptions' => News:: paginate(10) ,
        ]);
    }

    public function destroy($id)
    {
        $email = News::findOrFail($id);
        $email -> delete();
        return redirect()->route('admin.news.index')
            ->with('success' , "Subscribe from '$email->email' Deleted Successfully");
    }
}