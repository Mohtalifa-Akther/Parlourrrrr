<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = Service::orderBy('id', 'desc')->paginate(15);
        return view('admin.service.index', $data);
    }

    public function create()
    {
        return view('admin.service.create');
    }
    public function store(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;

        $service->image = $request->file('image')->store('services', 'public');
        $service->save();
        return redirect()->back()->with('mgs', ['Success', 'Service saved Successfully!']);
    }
    public function show(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }
    public function update(Request $request, Service $service)
    {
        $service->name = $request->name;
        $service->description = $request->description;
        if ($request->hasFile('image')) {
            $service->image = $request->file('image')->store('services', 'public');
        }
        $service->save();
        return redirect()->back()->with('mgs', ['Success', 'Service Updated Successfully!']);
    }
    public function delete(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('mgs', ['Success', 'Service deleted Successfully!']);
    }
}
