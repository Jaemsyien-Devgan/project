<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\testimonials;
use Illuminate\Http\Request;

class testimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = testimonials::orderBy('created_at', 'asc')->get();
        return view('testimonials.list', [
        'testimonials' => $testimonials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:100',
            'pesan' => 'required|min:10',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pekerjaan' => 'required|min:3|max:50'
        ]);

        // Simpan data setelah validasi
        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'img/testimonials/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        // Buat proyek baru
        testimonials::create($input);

        // Redirect ke route dengan pesan sukses
        // return redirect()->route('project.create')->with('success', 'Project berhasil dibuat');
        return redirect()->route('testimonials.index')->with('success', 'data berhasil ditambahkan');
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
        $testimonials = testimonials::findorFail($id);
        return view('testimonials.edit', compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama' => 'required|min:3|max:100',
            'pesan' => 'required|min:10',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pekerjaan' => 'required|min:3|max:50'
        ]);

        // Temukan project berdasarkan ID
        $testimonials = testimonials::findOrFail($id);

        // Ambil semua data yang diinput
        $input = $request->all();

        // Periksa apakah ada file gambar yang diunggah
        if ($image = $request->file('foto')) {
            $destinationPath = 'img/testimonials/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        } else {
            // Jika tidak ada gambar yang diunggah, pertahankan gambar yang ada
            $input['foto'] = $testimonials->image;
        }

        // Update data proyek
        $testimonials->update($input);

        // Redirect ke route dengan pesan sukses
        return redirect()->route('testimonials.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $testimonials = testimonials::findorFail($id);
        // Dapatkan path gambar dari project
        $imagePath = 'img/testimonials/' . $testimonials->foto;

    // Cek apakah file gambar ada di storage dan hapus jika ada
        if (File::exists($imagePath)) {
        File::delete($imagePath);
    }
        $testimonials->delete();
        return redirect()->route('testimonials.index')->with('success', 'Data deleted successfully');
    }
}
