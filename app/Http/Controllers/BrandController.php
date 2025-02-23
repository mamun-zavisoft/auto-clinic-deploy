<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->per_page ?? 10;
        $brands = Brand::orderBy('id', 'DESC')->paginate($perPage);

        return view('backend.brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:brands,name',
        ]);

        $brand = Brand::create([
            'name' => $request->name,
        ]);

        // return response()->json(['message' => 'Brand created successfully!', 'brand' => $brand]);
        return redirect()->back()->with('success', 'Brand created successfully!');
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:brands,name,' . $brand->id,
        ]);

        $brand->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Brand updated successfully!');

    }

    public function destroy(Brand $brand)
    {
        // if ($brand->products()->exists()) {
        //     return response()->json(['message' => 'Brand has products, cannot delete!'], 422);
        // }
        $brand->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully!');
        // return response()->json(['message' => 'Brand deleted successfully!']);
    }
}
