<?php

namespace App\Http\Controllers\API;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guest = Guest::all();
        return response()->json($guest);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required|email|unique:guests',
        //     'phone_number' => 'required',
        //     'address' => 'required',
        // ]);

        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:guests',
            'phone_number' => 'required',
            'address' => 'required',
        ],);
        try{
            $response = Guest ::create($validasi);
            return response()->json([
                'success'=> true,
                'message'=>'success'
                
            ]);
        } catch (\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required|email|unique:guests,email,' . $id,
        //     'phone_number' => 'required',
        //     'address' => 'required',
        // ]);

        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ],);
        try{
            $response = Guest::find($id);
            $response->update($validasi);
            return response()->json([
                'success'=> true,
                'message'=>'success'
            ]);
            
        } catch (\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $guest = Guest::find($id);
        // $guest->delete();

        // return redirect()->route('guests.index')
        //                  ->with('success', 'Guest deleted successfully.');
        try {
            $guest=Guest::find($id);
            $guest->delete();
            return response()->json([
                'success'=> true,
                'message'=>'success'
            ]);
        }
        catch (\Exception $e) {
            return response()->json([
                'message'=> 'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }
}
