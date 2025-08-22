<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las categorías
        $categories = Category::all();
        
        // Devolver respuesta JSON con las categorías
        return response()->json([
            'categories' => $categories
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        // Crear la nueva categoría
        $category = Category::create($validated);

        // Devolver respuesta JSON con la categoría creada
        return response()->json([
            'category' => $category,
            'message' => 'Categoría creada exitosamente'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // Devolver la categoría específica
        return response()->json([
            'category' => $category
        ], Response::HTTP_OK);
    }

    // Nota: No implementamos update ni destroy según los requerimientos
}