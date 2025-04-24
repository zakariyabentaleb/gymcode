@extends('layouts.app')

@section('title', 'GymTracker - Paiements')

@section('content')
<div class="bg-brand-light py-20">
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-brand-dark mb-4">Mes Paiements</h2>
                <p class="text-gray-600">Voici l'historique de vos paiements effectués.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse ($payments as $payment)
                    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col justify-between h-full">
                        <div class="mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Paiement pour : {{ $payment->program->title ?? 'Programme inconnu' }}</h3>
                            <p class="text-gray-600"><strong>Date :</strong> {{ $payment->created_at->format('d/m/Y') }}</p>
                            <p class="text-gray-600"><strong>Montant :</strong> {{ number_format($payment->amount, 2) }} MAD</p>
                            <p class="text-gray-600">
                                <strong>Statut :</strong>
                                <span class="@if($payment->status == 'paid') text-green-600 @elseif($payment->status == 'failed') text-red-600 @else text-yellow-600 @endif">
                                    {{ ucfirst($payment->status) }}
                                </span>
                            </p>
                            <p class="text-gray-600"><strong>Méthode :</strong> {{ ucfirst($payment->method) }}</p>
                        </div>
                        <div class="mt-4">
                            <a href="" target="_blank"
                               class="block text-center bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-300">
                                Télécharger le reçu
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center col-span-full">
                        <p class="text-gray-600">Aucun paiement enregistré pour le moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</div>
@endsection
