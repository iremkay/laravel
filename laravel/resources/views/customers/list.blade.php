<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müşteriler</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Müşteriler Listesi 👥</h1>
                <a href="{{ route('customers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    + Yeni Müşteri
                </a>
            </div>

            @if($customers->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2 text-left">ID</th>
                                <th class="px-4 py-2 text-left">Ad</th>
                                <th class="px-4 py-2 text-left">Soyad</th>
                                <th class="px-4 py-2 text-left">Doğum Yılı</th>
                                <th class="px-4 py-2 text-left">Cinsiyet</th>
                                <th class="px-4 py-2 text-left">Adres</th>
                                <th class="px-4 py-2 text-center">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $customer->id }}</td>
                                    <td class="px-4 py-2">{{ $customer->name }}</td>
                                    <td class="px-4 py-2">{{ $customer->surname }}</td>
                                    <td class="px-4 py-2">{{ $customer->birthYear }}</td>
                                    <td class="px-4 py-2">{{ $customer->gender }}</td>
                                    <td class="px-4 py-2">{{ $customer->address }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <a href="{{ route('customers.show', $customer->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Görüntüle</a>
                                        <a href="{{ route('customers.edit', $customer->id) }}" class="text-green-500 hover:text-green-700 mr-2">Düzenle</a>
                                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500 text-lg">Henüz müşteri eklenmemiş.</p>
                    <a href="{{ route('customers.create') }}" class="text-blue-500 hover:text-blue-700 mt-2 inline-block">İlk müşteriyi ekle →</a>
                </div>
            @endif
        </div>

        <div class="mt-4">
            <a href="/" class="text-blue-500 hover:text-blue-700">← Ana Sayfaya Dön</a>
        </div>
    </div>
</body>
</html>
