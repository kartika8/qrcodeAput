<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Data;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('welcome', ['data' => $data]);
    }
    public function store(Request $request)
    {
        $data = new Data;
        $data->name = $request->name;
        $data->url = $request->url;
        $data->save();
        return back();
    }
    
    public function generate($id)
{
    $data = Data::findOrFail($id);
    $qrcode = QrCode::size(400)->generate($data->url ?? "Nama: $data->name"); 
    return view('qrcode', compact('qrcode'));
}

}
