@extends('layout.plantilla')

@section('titulo', 'Detalle del Producto')

@section('contenido')
<div class="container mx-auto mt-8">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-xl font-bold text-gray-900 mb-4">Detalle del Producto - ID: {{ $producto->id }}</h1>
        <p class="text-sm text-gray-600">Aquí puedes ver toda la información del producto y realizar gestiones sobre él.</p>

        <div class="mt-6">
            <dl class="space-y-4 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-6 md:gap-y-8">
                <div>
                    <dt class="text-sm font-semibold text-gray-600">Nombre</dt>
                    <dd class="text-sm text-gray-900">{{ $producto->nombre }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-semibold text-gray-600">Precio</dt>
                    <dd class="text-sm text-gray-900">{{ $producto->precio }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-semibold text-gray-600">Descripción</dt>
                    <dd class="text-sm text-gray-900">{{ $producto->descripcion }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-semibold text-gray-600">Categoría</dt>
                    <dd class="text-sm text-gray-900">{{ $producto->categoria }}</dd>
                </div>
            </dl>
        </div>

        <div class="mt-6 flex gap-2">
            <a href="{{ route('producto.principal') }}" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 transition duration-300">Volver</a>
            <a href="{{ route('producto.editar', $producto) }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition duration-300">Editar</a>
            <form action="{{ route('producto.borrar', $producto->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                @csrf
                @method('delete')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition duration-300">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
