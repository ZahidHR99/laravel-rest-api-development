<?php

namespace App\Http\Controllers;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        return response()->json($resources);
    }

    public function store(Request $request)
    {
        $resource = Resource::create($request->all());
        return response()->json($resource, 201);
    }

    public function show($id)
    {
        $resource = Resource::findOrFail($id);
        return response()->json($resource);
    }

    public function update(Request $request, $id)
    {
        $resource = Resource::findOrFail($id);
        $resource->update($request->all());
        return response()->json($resource);
    }

    public function destroy($id)
    {
        Resource::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

