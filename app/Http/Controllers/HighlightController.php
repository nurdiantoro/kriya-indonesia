<?php

namespace App\Http\Controllers;

use App\Models\HighlightExhibitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HighlightController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg']);
        if ($validate) {
            $imageName = date('y-m-d') . '_' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('images/highlight/', $imageName, 'public');
        } else {
            return redirect()->back()->withErrors($validate);
        }

        HighlightExhibitor::create([
            "logo" => $imageName,
            "perusahaan" => $request->perusahaan,
            "website" => $request->website,
            "urutan" => $request->urutan,
        ]);
        return redirect()->back()->with(['pesan' => 'Highlight berhasil ditambah']);
    }

    public function update(Request $request)
    {
        $highlight = HighlightExhibitor::find($request->id);
        $imageName = $request->logo_lama;

        if ($request->hasFile('logo')) {
            $validate = $request->validate(['logo' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                File::delete(public_path('images/highlight/' . $request->logo_lama));
                $imageName = date('y-m-d') . '_' . $request->file('logo')->getClientOriginalName();
                $request->file('logo')->storeAs('images/highlight/', $imageName, 'public');
            } else {
                return redirect()->back()->withErrors($validate);
            }
        }

        HighlightExhibitor::where('id', $request->id)->update([
            "logo" => $imageName,
            "perusahaan" => $request->perusahaan,
            "website" => $request->website,
            "urutan" => $request->urutan,
        ]);
        return redirect()->back()->with(['pesan' => 'Contact berhasil diubah']);
    }

    public function destroy(Request $request)
    {
        $HighlightExhibitor = HighlightExhibitor::find($request->id);

        if ($HighlightExhibitor->logo != null) {
            File::delete(public_path('images/highlight/' . $HighlightExhibitor->logo));
        }

        $HighlightExhibitor->delete();
        return redirect()->back()->with(['pesan' => 'Highlight berhasil dihapus']);
    }
}
