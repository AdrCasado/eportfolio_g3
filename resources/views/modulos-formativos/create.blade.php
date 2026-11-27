<x-layout>
    <h1>Nuevo módulo formativo</h1>
    <div>
        <label for="codigo_ciclo" class="block font-semibold"></label>
        <label for="nombre" class="block font-semibold">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
            @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('nombre')])>
        @error('nombre')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>
</x-layout>
