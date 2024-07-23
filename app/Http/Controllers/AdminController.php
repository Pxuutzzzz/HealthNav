<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\McuRegistration; // Pastikan model ini sesuai dengan model Anda

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search'); // Ambil input pencarian

        // Tambahkan kondisi pencarian
        $registrations = McuRegistration::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->get();

        return view('admin.index', compact('registrations'));
    }

    public function updateStatus(Request $request, $id)
    {
        $registrations = McuRegistration::find($id);
        $registrations->status = $request->status;
        $registrations->save();

        return redirect()->route('admin.index')->with('success', 'Status updated successfully.');
    }

}
