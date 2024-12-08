<?php

namespace App\Http\Controllers;

// Import model Cinema
use App\Models\Cinema; 

// Import return type View
use Illuminate\View\View;

// Import return type RedirectResponse
use Illuminate\Http\RedirectResponse;

// Import Http Request
use Illuminate\Http\Request;

// Import Facades Storage
use Illuminate\Support\Facades\Storage;

class CinemaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index() : View
    {
        // Get all cinemas
        $cinemas = Cinema::latest()->paginate(10);

        // Render view with cinemas
        return view('cinemas.index', compact('cinemas'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('cinemas.create');
    }

    /**
     * store
     *
     * @param  Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $request->validate([
            'image'           => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'           => 'required|min:5',
            'description'     => 'required|min:10',
            'booking_date'    => 'required|date',
            'duration'        => 'required|string',
            'genre'           => 'required|in:fantasi,action,horor,romance,keluarga',
            'available_seats' => 'required|numeric',
            'harga_tiket'     => 'required|numeric|min:0' // Validasi untuk harga_tiket
        ]);

        // Upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/cinemas', $image->hashName());

        // Create cinema
        Cinema::create([
            'image'           => $image->hashName(),
            'title'           => $request->title,
            'description'     => $request->description,
            'booking_date'    => $request->booking_date,
            'duration'        => $request->duration,
            'genre'           => $request->genre,
            'available_seats' => $request->available_seats,
            'harga_tiket'     => $request->harga_tiket // Menyimpan harga_tiket
        ]);

        // Redirect to index
        return redirect()->route('cinemas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        // Get cinema by ID
        $cinema = Cinema::findOrFail($id);

        // Render view with cinema
        return view('cinemas.show', compact('cinema'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        // Get cinema by ID
        $cinema = Cinema::findOrFail($id);

        // Render view with cinema
        return view('cinemas.edit', compact('cinema'));
    }

    /**
     * update
     *
     * @param  Request $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'image'           => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'           => 'required|min:5',
            'description'     => 'required|min:10',
            'booking_date'    => 'required|date',
            'duration'        => 'required|string',
            'genre'           => 'required|in:fantasi,action,horor,romance,keluarga',
            'available_seats' => 'required|numeric',
            'harga_tiket'     => 'required|numeric|min:0' // Validasi untuk harga_tiket
        ]);

        // Get cinema by ID
        $cinema = Cinema::findOrFail($id);

        // Check if image is uploaded
        if ($request->hasFile('image')) {

            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/cinemas', $image->hashName());

            // Delete old image
            Storage::delete('public/cinemas/'.$cinema->image);

            // Update cinema with new image
            $cinema->update([
                'image'           => $image->hashName(),
                'title'           => $request->title,
                'description'     => $request->description,
                'booking_date'    => $request->booking_date,
                'duration'        => $request->duration,
                'genre'           => $request->genre,
                'available_seats' => $request->available_seats,
                'harga_tiket'     => $request->harga_tiket // Mengupdate harga_tiket
            ]);

        } else {

            // Update cinema without image
            $cinema->update([
                'title'           => $request->title,
                'description'     => $request->description,
                'booking_date'    => $request->booking_date,
                'duration'        => $request->duration,
                'genre'           => $request->genre,
                'available_seats' => $request->available_seats,
                'harga_tiket'     => $request->harga_tiket // Mengupdate harga_tiket
            ]);
        }

        // Redirect to index
        return redirect()->route('cinemas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */

     public function destroy($id) : RedirectResponse
     {
        $cinema = Cinema::findOrFail($id);
        Storage::delete('public/cinemas' . $cinema->image);
        $cinema->delete();

        return redirect()->route('cinemas.index')->with(['success' => 'Data Berhasil Dihapus!']);
     }
}
