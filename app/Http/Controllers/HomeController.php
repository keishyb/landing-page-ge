<?php

namespace App\Http\Controllers;

use App\Models\artis;
use App\Models\media;
use App\Models\tutor;
use App\Models\branch;
use App\Models\company;
use App\Models\program;
use App\Models\jumbotron;
use App\Models\testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $program = program::get();
        $tutor = tutor::get();
        $branch = branch::get();
        $artis = artis::get();
        $media = media::get();
        $testimoni = testimoni::get();
        $company = company::get();
        $jumbotron = jumbotron::where('status', 'active')->get();
        $data = [ 
            'program' => $program,
            'tutor' => $tutor,
            'branch' => $branch,
            'artis' => $artis,
            'media' => $media,
            'testimoni' => $testimoni,
            'company' => $company,
            'jumbotron' => $jumbotron,
        ];
        return view('welcome', $data);
    }

    //cabang
    public function list_branch()
    {
        // $branch = branch::get();
        // $data = [
        //     'branch' => $branch,
        // ];

        return view('list-branch');
    }
    
    public function create(Request $request)
    {
        // branch::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'hari1' => $request->hari1,
        //     'jam1' => $request->jam1,
        //     'hari2' => $request->hari2,
        //     'jam2' => $request->jam2,
        // ]);
        
        return redirect('/list-branch');
    }

    public function create_branch()
    {
        return view('create-branch');
    }

    public function edit_cabang($id_cabang)
    {
        $data = [
          'id_cabang' => $id_cabang,  
        ];
        return view('edit-branch', $data);
    }

    public function edit($id, Request $request)
    {
        branch::where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'hari1' => $request->hari1,
            'jam1' => $request->jam1,
            'hari2' => $request->hari2,
            'jam2' => $request->jam2,
        ]);
        return redirect('/list-branch');    
    }

    public function delete($id)
    {
        branch::where('id', $id)->delete();
        return redirect('/list-branch');
    }

    //program
    public function list_program()
    {
        $program = program::get();
        $data = [
            'program' => $program,
        ];

        return view('list-program', $data);
    }

    public function create_pro(Request $request)
    {
        $fileName = time(). '-'. $request->name . '.' . $request->gambar->extension();

        $filePath = $request->gambar->storeAs('assets', $fileName,'public');
        program::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filePath,
        ]);
        
        return redirect('/list-program');
    }

    public function create_program()
    {
        return view('create-program');
    }

    public function edit_program($id_program)
    {
        $data = [
          'id_program' => $id_program,  
        ];
        return view('edit-program', $data);
    }

    public function edit_pro($id, Request $request)
    {
        $filePath = null;

        if($request->gambar){
            $fileName = time() . '.' . $request->gambar->extension();
            $folderPath = 'assets/img';
            $filePath = $request->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $data_lama = program::where('id', $request->id)->first();

            $filePath = $data_lama->gambar;
        }


        program::where('id', $id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filePath,
        ]);
        return redirect('/list-program');    
    }

    public function delete_pro($id)
    {
        program::where('id', $id)->delete();
        return redirect('/list-program');
    }

    //company
    public function list_company()
    {
        $company = company::get();
        $data = [
            'company' => $company,
        ];

        return view('list-company', $data);
    }

    public function create_peru(Request $request)
    {
        $fileName = time() . '.' . $request->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $request->gambar->storeAs($folderPath, $fileName, 'public');
        company::create([
            'gambar' => $filePath,
        ]);
        
        return redirect('/list-company');
    }

    public function create_company()
    {
        return view('create-company');
    }

    public function edit_company($id_company)
    {
        $data = [
          'id_company' => $id_company,  
        ];
        return view('edit-company', $data);
    }

    public function edit_peru($id, Request $request)
    {
        $filePath = null;

        if($request->gambar){
            $fileName =time() . '.' . $request->gambar->extension();
            $folderPath = 'assets/img';
            $filePath = $request->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $data_lama = company::where('id', $request->id)->first();

            $filePath = $data_lama->gambar;
        }

        company::where('id', $id)->update([
            'gambar' => $filePath,
        ]);
        return redirect('/list-company');    
    }

    public function delete_peru($id)
    {
        company::where('id', $id)->delete();
        return redirect('/list-company');
    }


    //tutor
    public function list_tutor()
    {
        $tutor = tutor::get();
        $data = [
            'tutor' => $tutor,
        ];

        return view('list-tutor', $data);
    }

    public function create_guru(Request $request)
    {
        $fileName = $request->nama . '.' . $request->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $request->gambar->storeAs($folderPath, $fileName,'public');
        tutor::create([
            'gambar' => $filePath,
            'nama' => $request->nama,
            'gelar' => $request->gelar,

        ]);
        
        return redirect('/list-tutor');
    }

    public function create_tutor()
    {
        return view('create-tutor');
    }

    public function edit_tutor($id_tutor)
    {
        $data = [
          'id_tutor' => $id_tutor,  
        ];
        return view('edit-tutor', $data);
    }

    public function edit_guru($id, Request $request)
    {
        $filePath = null;

        if($request->gambar){
            $fileName = $request->nama . '.' . $request->gambar->extension();
            $folderPath = 'assets/img';
            $filePath = $request->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $data_lama = tutor::where('id', $request->id)->first();

            $filePath = $data_lama->gambar;
        }

        tutor::where('id', $id)->update([
            'gambar' => $filePath,
            'nama' => $request->nama,
            'gelar' => $request->gelar,
        ]);
        return redirect('/list-tutor');    
    }

    public function delete_guru($id)
    {
        tutor::where('id', $id)->delete();
        return redirect('/list-tutor');
    }

    //artis
    public function list_artis()
    {
        $artis = artis::get();
        $data = [
            'artis' => $artis,
        ];

        return view('list-artis', $data);
    }

    public function create_art(Request $request)
    {
        $fileName = $request->nama . '.' . $request->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $request->gambar->storeAs($folderPath, $fileName,'public');
        artis::create([
            'nama' => $request->nama,
            'gambar' => $filePath,
        ]);
        
        return redirect('/list-artis');
    }

    public function create_artis()
    {
        return view('create-artis');
    }

    public function edit_artis($id_artis)
    {
        $data = [
          'id_artis' => $id_artis,  
        ];
        return view('edit-artis', $data);
    }

    public function edit_art($id, Request $request)
    {
        $filePath = null;

        if($request->gambar){
            $fileName = time() . '.' . $request->gambar->extension();
            $folderPath = 'assets/img';
            $filePath = $request->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $data_lama = artis::where('id', $request->id)->first();

            $filePath = $data_lama->gambar;
        }

        artis::where('id', $id)->update([
            'nama' => $request->nama,
            'gambar' => $filePath,
        ]);
        return redirect('/list-artis');    
    }

    public function delete_art($id)
    {
        artis::where('id', $id)->delete();
        return redirect('/list-artis');
    }

    //jumbotron
    public function list_jumbotron()
    {
        $jumbotron = jumbotron::get();
        $data = [
            'jumbotron' => $jumbotron,
        ];

        return view('list-jumbotron', $data);
    }

    public function create_jumbo(Request $request)
    {
        $fileName = time() . '.' . $request->banner->extension();
        $folderPath = 'assets/img';
        $filePath = $request->banner->storeAs($folderPath, $fileName, 'public');
        jumbotron::create([
            'banner' => $filePath,
        ]);
        
        return redirect('/list-jumbotron');
    }

    public function create_jumbotron()
    {
        return view('create-jumbotron');
    }

    public function edit_jumbotron($id_jumbotron)
    {
        $data = [
          'id_jumbotron' => $id_jumbotron,  
        ];
        return view('edit-jumbotron', $data);
    }

    public function edit_jumbo($id, Request $request)
    {
        $filePath = null;

        if($request->banner){
            $fileName = time() . '.' . $request->banner->extension();
            $folderPath = 'assets/img';
            $filePath = $request->banner->storeAs($folderPath, $fileName, 'public');
        }else{
            $data_lama = jumbotron::where('id', $request->id)->first();

            $filePath = $data_lama->banner;
        }

        jumbotron::where('id', $id)->update([
            'banner' => $filePath,
            'status'=> $request-> status,
        ]);
        return redirect('/list-jumbotron');    
    }

    public function delete_jumbo($id)
    {
        jumbotron::where('id', $id)->delete();
        return redirect('/list-jumbotron');
    }

     //news
     public function list_media()
     {
         $media = media::get();
         $data = [
             'media' => $media,
         ];
 
         return view('list-media', $data);
     }
 
     public function create_med(Request $request)
     {
         $fileName = time() . '.' . $request->gambar->extension();
         $folderPath = 'assets/img';
         $filePath = $request->gambar->storeAs($folderPath, $fileName,'public');
         media::create([
             'gambar' => $filePath,
             'source' => $request->source,
             'desc' => $request->desc,
         ]);
         
         return redirect('/list-media');
     }
 
     public function create_media()
     {
         return view('create-media');
     }
 
     public function edit_media($id_media)
     {
 
         $data = [
           'id_media' => $id_media,  
         ];
         return view('edit-media', $data);
     }
 
     public function edit_med($id, Request $request)
     {
         $filePath = null;
 
         if($request->gambar){
             $fileName = time() . '.' . $request->gambar->extension();
             $folderPath = 'assets/img';
             $filePath = $request->gambar->storeAs($folderPath, $fileName, 'public');
         }else{
             $data_lama = media::where('id', $request->id)->first();
 
             $filePath = $data_lama->gambar;
         }
 
         media::where('id', $id)->update([
             'gambar' => $filePath,
             'source' => $request->source,
             'desc' => $request->desc,
         ]);
         return redirect('/list-media');    
     }
 
     public function delete_med($id)
     {
         media::where('id', $id)->delete();
         return redirect('/list-media');
     }

     //testimoni
     public function list_testimoni()
     {
         $testimoni = testimoni::get();
         $data = [
             'testimoni' => $testimoni,
         ];
 
         return view('list-testimoni', $data);
     }
 
     public function create_test(Request $request)
     {
         $fileName = time() . '.' . $request->gambar->extension();
         $folderPath = 'assets/img';
         $filePath = $request->gambar->storeAs($folderPath, $fileName,'public');
         testimoni::create([
             'desc' => $request->desc,
             'nama' => $request->nama,
             'asal_pt' => $request->asal_pt,
             'gambar' => $filePath,
         ]);
         
         return redirect('/list-testimoni');
     }
 
     public function create_testimoni()
     {
         return view('create-testimoni');
     }
 
     public function edit_testimoni($id_testimoni)
     {
         $data = [
           'id_testimoni' => $id_testimoni,  
         ];
         return view('edit-testimoni', $data);
     }
 
     public function edit_test($id, Request $request)
     {
         $filePath = null;
 
         if($request->gambar){
             $fileName = time() . '.' . $request->gambar->extension();
             $folderPath = 'assets/img';
             $filePath = $request->gambar->storeAs($folderPath, $fileName, 'public');
         }else{
             $data_lama = testimoni::where('id', $request->id)->first();
 
             $filePath = $data_lama->gambar;
         }
 
         testimoni::where('id', $id)->update([
             'desc' => $request->desc,
             'nama' => $request->nama,
             'asal_pt' => $request->asal_pt,
             'gambar' => $filePath,
         ]);
         return redirect('/list-testimoni');    
     }
 
     public function delete_test($id)
     {
         testimoni::where('id', $id)->delete();
         return redirect('/list-testimoni');
     }
}
