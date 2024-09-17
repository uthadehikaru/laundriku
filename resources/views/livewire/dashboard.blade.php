<div>
    <livewire:order-form />
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Total Pesanan</h2>
                <p class="text-4xl font-bold">{{ $totalOrders }}</p>
            </div>
        </div>
    </div>
    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Diambil Hari Ini</h2>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Layanan</th>
                        <th>Berat (kg)</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pickupToday as $order)
                        <tr>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ ucfirst($order->service_type) }}</td>
                            <td>{{ $order->weight }}</td>
                            <td>Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada pesanan yang diambil hari ini</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
