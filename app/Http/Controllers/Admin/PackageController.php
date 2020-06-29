<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $data['packages'] = Package::orderBy('id', 'desc')->paginate(15);
        return view('admin.package.index', $data);
    }

    public function create()
    {
        return view('admin.package.create');
    }
    public function store(Request $request)
    {
        $package = new Package();
        $package->name = $request->name;
        $package->services = $request->services;
        $package->price = $request->price;
        $package->save();
        return redirect()->back()->with('mgs', ['Success', 'Package saved Successfully!']);
    }
    public function show(Package $package)
    {
        return view('admin.package.show', compact('package'));
    }
    public function edit(Package $package)
    {
        return view('admin.package.edit', compact('package'));
    }
    public function update(Request $request, Package $package)
    {
        $package->name = $request->name;
        $package->services = $request->services;
        $package->price = $request->price;
        $package->save();
        return redirect()->back()->with('mgs', ['Success', 'Package Updated Successfully!']);
    }
    public function delete(Package $package)
    {
        $package->delete();
        return redirect()->back()->with('mgs', ['Success', 'Package deleted Successfully!']);
    }
}
