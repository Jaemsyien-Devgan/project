<?php

namespace App\Http\Controllers;

use App\Models\project;
// use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $project = project::orderBy('created_at', 'desc')->get();
        return view('project.list', [
        'project' => $project
        ]);
    }

    public function pdf_generator_get(Request $request){
        $project = project::get();
        $data = [
            'title' => 'Data Tampilan Project Yang Saya Buat',
            'date' => date('m/d/Y'),
            'project' => $project
        ];
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->stream('laporan-project.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'judul' => 'required|min:3|max:100',
            'deskripsi' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'penulis' => 'required|min:3|max:50'
        ]);

        // Simpan data setelah validasi
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/crousel/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        // Buat proyek baru
        project::create($input);

        // Redirect ke route dengan pesan sukses
        // return redirect()->route('project.create')->with('success', 'Project berhasil dibuat');
        return redirect()->route('project.index')->with('success', 'Project berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $project = project::all();
        return view('welcome', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = project::findorFail($id);
        return view('project.edit', compact('project'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validasi input dari form
    $request->validate([
        'judul' => 'required|min:3|max:100',
        'deskripsi' => 'required|min:10',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'penulis' => 'required|min:3|max:50'
    ]);

    // Temukan project berdasarkan ID
    $project = Project::findOrFail($id);

    // Ambil semua data yang diinput
    $input = $request->all();

    // Periksa apakah ada file gambar yang diunggah
    if ($image = $request->file('image')) {
        $destinationPath = 'img/crousel/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    } else {
        // Jika tidak ada gambar yang diunggah, pertahankan gambar yang ada
        $input['image'] = $project->image;
    }

    // Update data proyek
    $project->update($input);

    // Redirect ke route dengan pesan sukses
    return redirect()->route('project.index')->with('success', 'Project berhasil diupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = project::findorFail($id);
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }

}
