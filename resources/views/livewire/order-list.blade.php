<div>
    <div class="overflow-x-auto">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b text-left">Tanggal Pengambilan</th>
                    <th class="py-2 px-4 border-b text-left">Nama Pelanggan</th>
                    <th class="py-2 px-4 border-b text-left">Jenis Layanan</th>
                    <th class="py-2 px-4 border-b text-left">Berat</th>
                    <th class="py-2 px-4 border-b text-left">Total Harga</th>
                    <th class="py-2 px-4 border-b text-left">Status</th>
                    <th class="py-2 px-4 border-b text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                    <td class="py-2 px-4 border-b">{{ $order->pickup_date->isoFormat('dddd, D MMMM YYYY') }}</td>
                        <td class="py-2 px-4 border-b">{{ $order->customer_name }} - {{ $order->phone_number }}</td>
                        <td class="py-2 px-4 border-b">{{ __($order->service_type) }}</td>
                        <td class="py-2 px-4 border-b">{{ $order->weight }} kg</td>
                        <td class="py-2 px-4 border-b">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b">{{ __($order->status) }}</td>
                        <td class="py-2 px-4 border-b">
                            @if ($order->status == 'pending')
                                <button wire:click="update({{ $order->id }}, 'processing')" class="text-blue-500 hover:text-blue-700">Proses</button>
                            @endif
                            @if ($order->status == 'processing')
                                <button wire:click="update({{ $order->id }}, 'ready')" class="text-blue-500 hover:text-blue-700">Siap</button>
                            @endif
                            @if ($order->status == 'ready')
                                <button wire:click="update({{ $order->id }}, 'done')" class="text-blue-500 hover:text-blue-700">Selesai</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $orders->links() }}
    </div>
</div>
