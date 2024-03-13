<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => "Data Barang"
        ];
        return view('DataBarang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $payload = $request->all();
            DataBarang::create($payload);
            return back()->with(['alertSuccess' => 'Successfully created data']);
        } catch (\Exception $th) {
            return back()->with(['alertError' => 'Terjadi Kesalahan' . $th->getMessage()]);
        }
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
        try {
            $temp = DataBarang::where('id', $id)->first();
            $payload = $request->all();
            $temp->update($payload);
            return back()->with(['alertSuccess' => 'Successfully Updated Data']);
        } catch (\Exception $th) {
            return back()->with(['alertError' => 'Terjadi Kesalahan' . $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $payload = DataBarang::where('id', $id)->first();
            $payload->delete();
            return back()->with(['alertSuccess' => 'Deleted data successfully']);
        } catch (\Exception $th) {
            return back()->with(['alertError' => 'Error' . $th->getMessage()]);
        }
    }

    public function DataTable(){
        $temps = DataBarang::all();
        return $temps;
    }

    public function MostDataItem(){
        // $startDate =

        if(!empty(request()->input('startDate')) && !empty(request()->input('endDate'))){
            $startDate = request()->input('startDate');
            $endDate = request()->input('endDate');
        }else{
            $startDate = Carbon::now()->subMonths(1);
            $endDate = Carbon::now();
        }
        $data = DataBarang::whereBetween('tanggal_tranksaksi', [$startDate, $endDate])->get();

        return response()->json($data);
    }
}
