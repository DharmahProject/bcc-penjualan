<?php

namespace App\Http\Controllers;
use App\Models\PropertyType;
use App\Models\PropertyFloor;
use App\Models\Cluster;

use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function index()
    {
        $propertyTypes = PropertyType::where('is_deleted', 0)->get();
        $propertyFloors = PropertyFloor::where('is_deleted', 0)->get();
        $clusters = Cluster::with(['propertyType', 'propertyFloor']) 
                            ->where('is_deleted', 0) 
                            ->get();

        return view('master.pricelist.index', [
            'propertyTypes' => $propertyTypes,
            'propertyFloors' => $propertyFloors,
            'clusters' => $clusters,
        ]);
    }

    public function addedit($id_cluster = null)
    {

        $propertyTypes = PropertyType::where('is_deleted', 0)->get();
        $propertyFloors = PropertyFloor::where('is_deleted', 0)->get();

        $cluster = null; 

        if ($id_cluster) {
            $cluster = Cluster::findOrFail($id_cluster); 
        }


        return view('master.pricelist.addedit', [
            'id_cluster' => $id_cluster,
            'propertyTypes' => $propertyTypes,
            'propertyFloors' => $propertyFloors,
            'cluster' => $cluster
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'periode_mulai' => 'required|date',
            'tipe' => 'required|integer',
            'jumlah_lantai' => 'required|integer',
            'blok' => 'required|string|max:255',
            'luas_bangunan' => 'required|numeric',
            'luas_tanah' => 'required|numeric',
            'harga_jual_standar' => 'required|numeric',
            'tunai_keras' => 'required|numeric',
            'tunai_bertahap' => 'required|numeric',
            'kpr' => 'required|numeric',
            'uang_muka' => 'required|numeric',
            'angsuran' => 'required|numeric',
        ]);

    if ($request->filled('ID')) {
        $cluster = Cluster::find($request->ID);

        if ($cluster) {
            $cluster->update([
                'periode' => $request->periode_mulai,
                'tipe_fk' => $request->tipe,
                'floor_fk' => $request->jumlah_lantai,
                'blok' => $request->blok,
                'luas_bangunan' => $request->luas_bangunan,
                'luas_tanah' => $request->luas_tanah,
                'harga_jual_standar' => $request->harga_jual_standar,
                'tunai_keras' => $request->tunai_keras,
                'tunai_bertahap' => $request->tunai_bertahap,
                'kpr' => $request->kpr,
                'uang_muka' => $request->uang_muka,
                'angsuran' => $request->angsuran
            ]);
        } else {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
    } else {
        Cluster::create([
            'periode' => $request->periode_mulai,
            'tipe_fk' => $request->tipe,
            'floor_fk' => $request->jumlah_lantai,
            'blok' => $request->blok,
            'luas_bangunan' => $request->luas_bangunan,
            'luas_tanah' => $request->luas_tanah,
            'harga_jual_standar' => $request->harga_jual_standar,
            'tunai_keras' => $request->tunai_keras,
            'tunai_bertahap' => $request->tunai_bertahap,
            'kpr' => $request->kpr,
            'uang_muka' => $request->uang_muka,
            'angsuran' => $request->angsuran,
            'is_deleted' => 0,
            'created_by' => 'System',
            'updated_by' => 'System'
        ]);
    }

        return response()->json(['success' => 'Data berhasil disimpan'], 200);
    }

    public function show(string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
        $cluster = Cluster::find($id);

        if ($cluster) {
            $cluster->update([
                'is_deleted' => 1
            ]);
            return response()->json(['error' => 'Data berhasil dihapus'], 200);
        } else {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
    }
}
