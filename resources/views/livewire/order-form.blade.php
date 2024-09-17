<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Form Pesanan</h1>
    <form wire:submit.prevent="submitOrder" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="customer_name">
                Nama Pelanggan
            </label>
            <input wire:model="customer_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="customer_name" type="text" placeholder="Nama Pelanggan">
            @error('customer_name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone_number">
                Nomor Telepon
            </label>
            <input wire:model="phone_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_number" type="text" placeholder="Nomor Telepon">
            @error('phone_number') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="service_type">
                Jenis Layanan
            </label>
            <select wire:model="service_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="service_type">
                <option value="">Pilih Jenis Layanan</option>
                <option value="wash">Cuci</option>
                <option value="iron">Setrika</option>
                <option value="wash_and_iron">Cuci dan Setrika</option>
            </select>
            @error('service_type') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="weight">
                Berat (kg)
            </label>
            <input wire:model="weight" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="weight" type="number" step="0.01" placeholder="Berat">
            @error('weight') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="pickup_date">
                Tanggal Pengambilan
            </label>
            <input wire:model="pickup_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pickup_date" type="date">
            @error('pickup_date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="special_instructions">
                Instruksi Khusus
            </label>
            <textarea wire:model="special_instructions" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="special_instructions" placeholder="Instruksi Khusus"></textarea>
            @error('special_instructions') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Simpan
            </button>
        </div>
    </form>

    @if (session()->has('message'))
        <div class="mt-4 p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>
