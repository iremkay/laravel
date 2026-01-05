<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müşteri Düzenle</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Müşteri Düzenle</h1>

            <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Ad:</label>
                    <input type="text" name="name" id="name" value="{{ $customer->name }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="surname" class="block text-gray-700 font-bold mb-2">Soyad:</label>
                    <input type="text" name="surname" id="surname" value="{{ $customer->surname }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="birthYear" class="block text-gray-700 font-bold mb-2">Doğum Yılı:</label>
                    <input type="number" name="birthYear" id="birthYear" value="{{ $customer->birthYear }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-bold mb-2">Cinsiyet:</label>
                    <select name="gender" id="gender" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        <option value="">Seçiniz</option>
                        <option value="Erkek" {{ $customer->gender == 'Erkek' ? 'selected' : '' }}>Erkek</option>
                        <option value="Kadın" {{ $customer->gender == 'Kadın' ? 'selected' : '' }}>Kadın</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="address" class="block text-gray-700 font-bold mb-2">Adres:</label>
                    <textarea name="address" id="address" rows="3" required
                              class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">{{ $customer->address }}</textarea>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('customers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        ← İptal
                    </a>
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        💾 Güncelle
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
