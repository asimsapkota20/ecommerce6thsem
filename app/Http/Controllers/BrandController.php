<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\brands;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class BrandController extends Controller
{
    public function index()
    {
        $brands = brand::orderBY('priority')->get();
        return view('brands.index',compact('brands'));
    }
    public function create()
    {
        return view('brands.create');
    }
    public function store(Request $request)
    {
        $data = $request-> validate([
            'name' => 'required','priority' => 'required|numeric',
        ]);
        brand::create($data);
        return redirect()->route('brand.index')->with('success','brand create successfully');
    }
    Public function edit($id)
    {
        $brand = brand::find($id);
        return view('brands.edit',compact('brand'));
    }
    public function update(Request $request,$id)
    {
      $data = $request->validate([
        'name' => 'required',
        'priority' => 'required|numeric',
      ]);
      $brand = brand::find($id);
      $brand->update($data);
      return redirect()->route('brand.index')->with('success','brand update successfully');

    }
    public function destroy(Request $request)
    {
        $brand = brand::find($request->id);
        $brand->delete();
        return redirect()->route('brand.index')->with('success','brand delete successfully');
    }
}
