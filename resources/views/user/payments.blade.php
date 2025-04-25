@extends('layouts.app')

@section('title', 'GymTracker - Paiements')

@section('content')
<div class="bg-gray-50  py-24 min-h-screen">
    <section class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-brand-dark mb-3">Mes Paiements</h2>
            <p class="text-gray-600 text-lg">Consultez l’historique de vos transactions en toute transparence.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @forelse ($payments as $payment)
                <div class="bg-white border border-rose-100 rounded-2xl shadow hover:shadow-xl transition duration-300 p-6 flex flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-red-100 text-red-600 text-xs font-bold px-3 py-1 rounded-full uppercase">
                                Paiement #{{ $payment->id }}
                            </span>
                            <span class="@if($payment->status == 'paid') bg-green-100 text-green-700 @elseif($payment->status == 'failed') bg-red-200 text-red-700 @else bg-yellow-100 text-yellow-700 @endif text-xs font-semibold px-3 py-1 rounded-full">
                                {{ ucfirst($payment->status) }}
                            </span>
                        </div>

                        <h3 class="text-lg font-bold text-gray-800 mb-4">{{ $payment->program->title ?? 'Programme inconnu' }}</h3>

                        <ul class="space-y-3 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-red-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/></svg>
                                <strong>Date :</strong>&nbsp; {{ $payment->created_at->format('d/m/Y à H:i') }}
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-red-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z"/><path d="M12 2v2m0 16v2m10-10h-2M4 12H2"/></svg>
                                <strong>Montant :</strong>&nbsp; {{ number_format($payment->program->price, 2) }} MAD
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-red-400 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 11c0-1.105.895-2 2-2h4a2 2 0 012 2v0a2 2 0 01-2 2h-4c-1.105 0-2-.895-2-2z"/><path d="M2 12h6M5 9l3 3-3 3"/></svg>
                                <strong>Méthode : online</strong>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <a href=""
                           class="w-full inline-flex items-center justify-center gap-2 bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-xl font-semibold transition duration-300">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 5v14m7-7H5"/></svg>
                            Télécharger le reçu
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white rounded-2xl shadow p-6 text-center">
                    <p class="text-gray-500 text-lg">Aucun paiement enregistré pour le moment.</p>
                </div>
            @endforelse
        </div>
    </section>
</div>
@endsection
