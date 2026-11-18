<?php

namespace App\Http\Controllers;

use App\Models\PermohonanPasangBaru;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class PasangBaruController extends Controller
{
    /**
     * Pilihan daya dan jenis bangunan yang tersedia pada formulir.
     */
    public const PILIHAN_DAYA = ['900 VA', '1300 VA', '2200 VA', '3500 VA', '4400 VA', '5500 VA'];

    public const PILIHAN_JENIS = ['Rumah tinggal', 'Usaha / toko', 'Industri', 'Fasilitas umum'];

    public function create(): View
    {
        return view('pasangbaru', [
            'pilihanDaya' => self::PILIHAN_DAYA,
            'pilihanJenis' => self::PILIHAN_JENIS,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'no_hp' => ['required', 'string', 'regex:/^(\+62|62|0)[0-9]{8,13}$/'],
            'alamat' => ['required', 'string', 'max:500'],
            'daya' => ['required', Rule::in(self::PILIHAN_DAYA)],
            'jenis_bangunan' => ['required', Rule::in(self::PILIHAN_JENIS)],
            'catatan' => ['nullable', 'string', 'max:500'],
        ], [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'no_hp.required' => 'Nomor HP wajib diisi.',
            'no_hp.regex' => 'Nomor HP tidak valid. Contoh: 081234567890.',
            'alamat.required' => 'Alamat pemasangan wajib diisi.',
            'daya.required' => 'Pilih daya yang diajukan.',
            'daya.in' => 'Pilihan daya tidak tersedia.',
            'jenis_bangunan.required' => 'Pilih jenis bangunan.',
            'jenis_bangunan.in' => 'Pilihan jenis bangunan tidak tersedia.',
        ]);

        $permohonan = PermohonanPasangBaru::create($data);

        return redirect()
            ->route('pasang-baru.create')
            ->with('sukses', 'PB-'.str_pad((string) $permohonan->id, 5, '0', STR_PAD_LEFT));
    }
}
