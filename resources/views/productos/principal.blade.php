<x-app-layout>

    <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-5">Lista de Productos</h1>
    
        <div class="w-full max-w-4xl px-4 py-6 bg-white shadow-md rounded">
            <div class="mb-4">
                <a href="{{ route('producto.crear') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                    Nuevo Producto
                </a>
            </div>
    
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Precio</th>
                        <th class="p-3">Descripción</th>
                        <th class="p-3">Categoría</th>
                        <th class="p-3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prod as $produ)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="p-3">{{ $produ->nombre }}</td>
                        <td class="p-3">{{ $produ->precio }}</td>
                        <td class="p-3">{{ $produ->descripcion }}</td>
                        <td class="p-3">{{ $produ->categoria }}</td>
                        <td class="p-3">
                            <a href="{{ route('producto.mostrar', $produ->id) }}" class="bg-green-500 hover:bg-green-600 text-white py-1 px-2 rounded">
                                Ver
                            </a>
                            <a href="{{ route('producto.editar', $produ->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded">
                                Editar
                            </a>
    
                            <form action="{{ route('producto.borrar', $produ->id) }}" method="POST" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded"
                                        onclick="return confirm('¿Estás seguro de eliminar este producto?');">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <div class="mt-6">
            {{ $prod->links() }}
        </div>
    </div>
    
    </x-app-layout>
    