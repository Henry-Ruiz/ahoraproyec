@extends('layout.plantilla')

@section('title', 'Editar Producto')

@section('contenido')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-cyan-500 to-blue-500">
    <div class="w-full max-w-2xl p-8 bg-white rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Editar Producto ID: {{ $id->id }}</h2>

        <form action="{{ route('producto.update', $id->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('put')

            <div class="space-y-2">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="nombre" type="text" name="nombre" value="{{ $id->nombre }}" class="block w-full px-4 py-2 text-gray-700 bg-gray-50 rounded border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="space-y-2">
                <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                <input id="precio" type="text" name="precio" value="{{ $id->precio }}" class="block w-full px-4 py-2 text-gray-700 bg-gray-50 rounded border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="space-y-2">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input id="descripcion" type="text" name="descripcion" value="{{ $id->descripcion }}" class="block w-full px-4 py-2 text-gray-700 bg-gray-50 rounded border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="space-y-2">
                <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                <input id="categoria" type="text" name="categoria" value="{{ $id->categoria }}" class="block w-full px-4 py-2 text-gray-700 bg-gray-50 rounded border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="space-y-2">
                <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoría Tabla</label>
                <select id="categoria_id" name="categoria_id" class="block w-full px-4 py-2 text-gray-700 bg-gray-50 rounded border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring">
                    <option value="{{ $categoria_actual->id }}">{{ $categoria_actual->nombre }}</option>
                    @foreach ($categorias as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 focus:ring-4 focus:ring-green-300">Actualizar</button>
                <a href="{{ route('producto.principal') }}" class="px-6 py-2 bg-gray-300 text-gray-900 rounded hover:bg-gray-400">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
