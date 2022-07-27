<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulkRequest;
use App\Models\Bulk;
use Illuminate\Http\Request;

class BulkController extends Controller{

    public function index()
    {
        $date = Bulk::all();
        return response()->json($date);
    }

    public function show($slug)
    {
        $date = Bulk::find($slug);
        return response()->json($date);
    }

    public function store()
    {
        echo "store";
    }

    public function update()
    {
        echo "update";
    }

    public function delete()
    {
        echo "delete";
    }

}
