<?php

namespace App\Http\Controllers\API;



use App\Models\Villa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Villa::getVilla()->paginate(2);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            'kode_package'=>'required',
            'nama_package'=>'required',
            'desk_package'=>'required',
            'img_package'=> 'required',
            'id_comunity'=>'required',
        ],);
        try{
            $fileName = time().$request->file('img_package')->getClientOriginalName();
            $path = $request->file('img_package')->storeAs('photos/villa', $fileName);
            $validasi['img_package'] = $path;
            $response = Villa ::create($validasi);
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
        //
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
        //
        $validasi = $request->validate([
            'kode_package'=>'required',
            'nama_package'=>'required',
            'desk_package'=>'required',
            'img_package'=> '',
            'id_comunity'=>'required',
        ],);
        try{
            if($request->file('img_package')){
                $fileName = time().$request->file('img_package')->getClientOriginalName();
                $path = $request->file('img_package')->storeAs('photos/villa', $fileName);
                $validasi['img_package'] = $path;
                
                
            }
            $response = Villa::find($id);
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
        //
        try {
            $villa=Villa::find($id);
            $villa->delete();
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
