@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto pt-24 py-8">
    <div class="bg-white shadow-xl rounded-2xl p-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Mon Profil</h2>
           
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 rounded bg-green-100 text-green-700 border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700">
            <div>
                <p class="text-sm text-gray-500">Nom complet</p>
                <p class="text-lg font-medium">{{ $user->full_name }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Adresse e-mail</p>
                <p class="text-lg font-medium">{{ $user->email }}</p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-3xl mx-auto mb-4">
    <div class="bg-white shadow-xl rounded-2xl p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Modifier mon profil</h2>

        @if(session('success'))
            <div class="mb-4 p-4 rounded bg-green-100 text-green-700 border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-1 gap-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-600 mb-1">Nom complet</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->full_name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:outline-none">
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Adresse e-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:outline-none">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-600 mb-1">Nouveau mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Laisser vide si inchangé" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:outline-none">
                @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-600 mb-1">Confirmation du mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:outline-none">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-brand-red text-white px-6 py-2 rounded-lg hover:bg-red-700 transition duration-300 font-semibold">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
