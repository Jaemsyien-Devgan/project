<div style="min-height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div style="width: 100%; max-width: 1200px; margin: 0 auto; background-color: #ffffff; border-radius: 8px;  text-align: center;">
        <h1 style="color: #000000;">{{ $title }}</h1>
        <p style="color: #000000;">{{ $date }}</p>

        <!-- Table -->
        <div style="overflow-x: auto; justify-content: center; align-items: center; ">
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <thead>
                    <tr style="background-color: #004d40; color: #FFD700;">
                        <th style="border: 1px solid #006400; padding: 8px;">ID</th>
                        <th style="border: 1px solid #006400; padding: 8px;">JUDUL</th>
                        <th style="border: 1px solid #006400; padding: 8px;">DESKRIPSI</th>
                        <th style="border: 1px solid #006400; padding: 8px;">GAMBAR</th>
                        <th style="border: 1px solid #006400; padding: 8px;">PENULIS</th>
                    </tr>
                </thead>
                <tbody >
                    @if ($project->isNotEmpty())
                        @foreach ($project as $item)
                        <tr>
                            <td style="border: 1px solid #006400; padding: 8px; color: #2f4f4f;">{{ $item->id }}</td>
                            <td style="border: 1px solid #006400; padding: 8px; color: #2f4f4f;">{{ $item->judul }}</td>
                            <td style="border: 1px solid #006400; padding: 8px; color: #2f4f4f; text-align: justify">{{ $item->deskripsi }}</td>
                            <td style="border: 1px solid #006400; padding: 4px; text-align: center;">
                                @if ($item->image != "")
                                    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('img/crousel/' . $item->image))) }}" alt="{{ $item->image }}" style="max-width: 100px; max-height: 100px; object-fit: contain;">
                                @endif
                            </td>
                            <td style="border: 1px solid #006400; padding: 8px; color: #2f4f4f;">{{ $item->penulis }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 8px; color: #ff0000;">Tidak ada data project yang tersedia.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
