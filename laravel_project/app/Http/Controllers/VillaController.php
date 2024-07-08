<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Packages;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title="Admin Villa";
        $packages=new Packages;
        if (isset($_GET['s'])) {
            $s=$_GET['s'];

            $packages = $packages->where('nama_package', 'like', "%$s%");
        }
        if (isset($_GET['id_comunity'])&&$_GET['id_comunity']!='') {

            $packages = $packages->where('id_comunity', 'like', $_GET['id_comunity']);
        }
        $packages=Packages::paginate(3);
        $comunity=Comunity::all();
        // dd($packages);
        return view('backpage.adminvilla', compact('title','packages','comunity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Vila Page';
        $comunity=Comunity::all();
        return view('backpage.inputvilla', compact('title','comunity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set kesalahan
        $messages = [
            'required' => 'Kolom :atribute harus lengkap!',
            'numeric'  => 'Kolom :atribute harus Angka!',
            'required' => 'perhatikan format dan ukuran file',
        ];
        //untuk menyimpan
        $validasi=$request->validate([
            'kode_package'=>'required|numeric',
            'nama_package'=>'required',
            'desk_package'=>'',
            'id_comunity'=>'required',
            'img_package'=>'required|mimes:png,jpg|max:1024'
        ], $messages);
        try {
            $filename = time().$request->file('img_package')->getClientOriginalName();
            $path = $request->file('img_package')->storeAs('images',$filename);
            $validasi['img_package']=$path;
            $response = Packages::create($validasi);
            return redirect('adminvilla');
        } catch (\Exception $e) {
            echo $e->getMessage();
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
        $title="Edit Villa";
        $comunity=Comunity::all();
        $packages=Packages::find($id);
        // dd($packages);
        return view('backpage.inputvilla', compact('title','comunity','packages'));
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
        //set kesalahan
        $messages = [
            'required' => 'Kolom :atribute harus lengkap!',
            'numeric'  => 'Kolom :atribute harus Angka!',
            'file' => 'perhatikan format dan ukuran file',
        ];
        //untuk menyimpan
        $validasi=$request->validate([
            'kode_package'=>'required|numeric',
            'nama_package'=>'required',
            'desk_package'=>'',
            'id_comunity'=>'required',
            'img_package'=>''
        ], $messages);
        try {
            if($request->file('img_package')){
                $filename = time().$request->file('img_package')->getClientOriginalName();
                $path = $request->file('img_package')->storeAs('images',$filename);
                $validasi['img_package']=$path;
            }
            $response = Packages::find($id)->update($validasi);
            return redirect('adminvilla');
        } catch (\Exception $e) {
            echo $e->getMessage();
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
        // $package=Packages::where('id_package',$id);
        try {
        $package=Packages::find($id);
        $package->delete();
        return redirect('adminvilla');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
