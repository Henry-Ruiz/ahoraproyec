<x-app-layout>

  <div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h1 class="text-xl font-bold text-center mb-4">Nuevo Producto</h1>
  
      <form action="{{ route('producto.store') }}" method="POST" class="space-y-6">
        @csrf
  
        <div>
          <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
  
        <div>
          <label for="precio" class="block text-sm font-medium text-gray-700">Precio:</label>
          <input type="text" name="precio" id="precio" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
  
        <div>
          <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción:</label>
          <input type="text" name="descripcion" id="descripcion" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
  
        <div>
          <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría:</label>
          <input type="text" name="categoria" id="categoria" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>
  
        <div class="flex items-center justify-between">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Guardar</button>
          <a href="{{ route('producto.principal') }}" class="bg-gray-300 hover:bg-gray-400 text-black py-2 px-4 rounded-md">Cancelar</a>
        </div>
  
      </form>
    </div>
  </div>
  
  </x-app-layout>
  