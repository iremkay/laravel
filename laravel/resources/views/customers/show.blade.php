<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müşteri Detay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Müşteri Detayları</h1>

            <div class="space-y-4">
                <div class="border-b pb-3">
                    <span class="font-bold text-gray-700">ID:</span>
                    <span class="text-gray-600">{{ $customer->id }}</span>
                </div>

                <div class="border-b pb-3">
                    <span class="font-bold text-gray-700">Ad:</span>
                    <span class="text-gray-600">{{ $customer->name }}</span>
                </div>

                <div class="border-b pb-3">
                    <span class="font-bold text-gray-700">Soyad:</span>
                    <span class="text-gray-600">{{ $customer->surname }}</span>
                </div>

                <div class="border-b pb-3">
                    <span class="font-bold text-gray-700">Doğum Yılı:</span>
                    <span class="text-gray-600">{{ $customer->birthYear }}</span>
                </div>

                <div class="border-b pb-3">
                    <span class="font-bold text-gray-700">Cinsiyet:</span>
                    <span class="text-gray-600">{{ $customer->gender }}</span>
                </div>

                <div class="border-b pb-3">
                    <span class="font-bold text-gray-700">Adres:</span>
                    <span class="text-gray-600">{{ $customer->address }}</span>
                </div>

                <div class="border-b pb-3">
                    <span class="font-bold text-gray-700">Oluşturulma:</span>
                    <span class="text-gray-600">{{ $customer->created_at->format('d.m.Y H:i') }}</span>
                </div>

                <div class="pb-3">
                    <span class="font-bold text-gray-700">Güncellenme:</span>
                    <span class="text-gray-600">{{ $customer->updated_at->format('d.m.Y H:i') }}</span>
                </div>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('customers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    ← Geri
                </a>
                <div class="space-x-2">
                    <a href="{{ route('customers.edit', $customer->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        ✏️ Düzenle
                    </a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Silmek istediğinizden emin misiniz?')">
                            🗑️ Sil
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
