<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guest = Guest::all();
        return view('backpage.adminguest', compact('guest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Vila Page';
        return view('backpage.inputguest', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute harus lengkap!',
            'email' => 'Kolom :attribute harus berupa email yang valid!',
            'unique' => 'Kolom :attribute sudah terdaftar!',
        ];

        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:guests',
            'phone_number' => 'required|numeric',
            'address' => 'required',
        ], $messages);

        try {
            Guest::create($validasi);
            return redirect()->route('adminguest')->with('success', 'Guest created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
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
        $title="Edit Guest";
        $guest=Guest::find($id);
        // dd($packages);
        return view('backpage.adminguest', compact('title','guest'));
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
        $messages = [
            'required' => 'Kolom :attribute harus lengkap!',
            'email' => 'Kolom :attribute harus berupa email yang valid!',
            'unique' => 'Kolom :attribute sudah terdaftar!',
            'numeric' => 'Kolom :attribute harus berupa angka!',
        ];

        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:guests,email,' . $id,
            'phone_number' => 'required|numeric',
            'address' => 'required',
        ], $messages);

        try {
            $guest = Guest::findOrFail($id);
            $guest->update($validasi);
            return redirect()->route('adminguest')->with('success', 'Guest updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
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
        try {
            $guest=Guest::find($id);
            $guest->delete();
            return redirect('adminguest');
            } catch (\Throwable $e) {
                echo $e->getMessage();
            }
    }
}
