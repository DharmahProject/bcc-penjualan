<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Cluster;

class SalesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $name = $user->name; // Access the name attribute
        $email = $user->email; // Access the email attribute

        return view('transaction.sales.index', []);
    }

    public function addedit($id = null)
    {

        // $propertyTypes = PropertyType::where('is_deleted', 0)->get();
        // $propertyFloors = PropertyFloor::where('is_deleted', 0)->get();

        // $cluster = null; 

        // if ($id_cluster) {
        //     $cluster = Cluster::findOrFail($id_cluster); 
        // }


        return view('transaction.sales.addedit', [
            // 'id_cluster' => $id_cluster,
            // 'propertyTypes' => $propertyTypes,
            // 'propertyFloors' => $propertyFloors,
            // 'cluster' => $cluster
        ]);
    }

    public function submit(Request $request)
    {
        return response()->json(['success' => 'Data berhasil disimpan'], 200);
    }
}
