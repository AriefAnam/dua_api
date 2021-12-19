<?php

namespace App\Http\Controllers;

use App\Models\DataServis;
use Illuminate\Http\Request;

class IdController extends Controller
{
    public function getID(Request $request)
    {
        $id = $request->id;
        return DataServis::find($id);
    }
}
?>