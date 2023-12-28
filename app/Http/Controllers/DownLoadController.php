<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownLoadController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function download(Request $request)
    {
        // $validated is an array.
        $validated = $request->validate([
            'url' => 'required',
        ]);

        $this->downloadAction();
        $this->showResult();
    }

    private function downloadAction()
    {
    }

    private function showResult()
    {
        return view('showResult');
    }
}
