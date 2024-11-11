<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Jabatan;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jabatanList = Jabatan::all(); 
        $salesmanagerList = Team::where('id_jabatan', 2)->get();
        $saleskoordinatorList = Team::where('id_jabatan', 3)->get();
        $allTeam = Team::with('jabatan')->
        where('is_deleted', 0)->get();

        return view('master.teams.index', [
            'jabatanList' => $jabatanList,
            'salesmanagerList' => $salesmanagerList,
            'saleskoordinatorList' => $saleskoordinatorList,
            'allTeam' => $allTeam,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function addedit()
    {
        //
        return view('master/teams/addedit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
