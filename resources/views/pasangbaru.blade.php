<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ajukan pemasangan listrik baru (pasang baru) PLN: isi data pelanggan, alamat pemasangan, dan daya yang dibutuhkan.">
    <title>Pasang Baru Listrik — Layanan Publik PLN</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body class="bg-white font-sans text-slate-800 antialiased">

{{-- Bilah informasi --}}
<div class="bg-[#0a2e52] text-white">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-2 px-4 py-2 text-xs sm:px-6">
        <p>Layanan Pelanggan PLN — Senin s/d Jumat, 08.00–16.00 WIB</p>
        <p class="flex items-center gap-2">
            <span class="hidden sm:inline text-white/70">Call Center</span>
            <a href="tel:123" class="rounded-full bg-[#ffd100] px-3 py-0.5 font-semibold text-[#0a2e52]">123</a>
        </p>
    </div>
</div>

{{-- Navigasi --}}
<header class="sticky top-0 z-40 border-b border-slate-200 bg-white/90 backdrop-blur">
    <nav class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-4 sm:px-6">
        <a href="{{ url('/') }}" class="flex items-center gap-2.5">
            <span class="grid h-10 w-10 place-items-center rounded-lg bg-[#0072bc] text-[#ffd100]">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                    <path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"/>
                </svg>
            </span>
            <span class="leading-tight">
                <span class="block text-lg font-bold text-[#0072bc]">PLN</span>
                <span class="block text-[11px] uppercase tracking-wide text-slate-500">Layanan Publik</span>
            </span>
        </a>

        <ul class="hidden items-center gap-7 text-sm font-medium text-slate-600 md:flex">
            <li><a href="{{ url('/') }}#layanan" class="hover:text-[#0072bc]">Layanan</a></li>
            <li><a href="{{ url('/') }}#alur" class="hover:text-[#0072bc]">Alur Pengajuan</a></li>
            <li><a href="{{ url('/') }}#komitmen" class="hover:text-[#0072bc]">Komitmen</a></li>
            <li><a href="{{ url('/') }}#kontak" class="hover:text-[#0072bc]">Kontak</a></li>
        </ul>

        <a href="tel:123" class="rounded-lg bg-[#0072bc] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#005c9e]">
            Telepon 123
        </a>
    </nav>
</header>

<main>
    {{-- Judul halaman --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0072bc] via-[#0064a8] to-[#0a2e52] text-white">
        <div class="pointer-events-none absolute -right-24 -top-24 h-80 w-80 rounded-full bg-[#ffd100]/15 blur-2xl"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-12 sm:px-6 lg:py-16">
            <nav aria-label="Breadcrumb" class="text-xs text-white/70">
                <a href="{{ url('/') }}" class="hover:text-white">Beranda</a>
                <span class="px-1.5">/</span>
                <span class="text-white">Pasang Baru</span>
            </nav>

            <h1 class="mt-4 text-3xl font-bold leading-tight sm:text-4xl">Ajukan pasang baru listrik</h1>
            <p class="mt-4 max-w-2xl text-sm leading-relaxed text-white/80 sm:text-base">
                Lengkapi data di bawah untuk mengajukan pemasangan sambungan listrik baru.
                Permohonan Anda akan dicatat dan ditindaklanjuti petugas layanan.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-14 sm:px-6 lg:py-20">
        <div class="grid gap-10 lg:grid-cols-5">
            {{-- Formulir --}}
            <div class="lg:col-span-3">
                @if (session('sukses'))
                    <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 p-5 sm:p-6" role="status">
                        <div class="flex gap-3">
                            <span class="mt-0.5 grid h-8 w-8 shrink-0 place-items-center rounded-full bg-emerald-100 text-emerald-700">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" class="h-4 w-4"><path d="m5 13 4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <div>
                                <p class="text-sm font-semibold text-emerald-900">Permohonan berhasil dikirim</p>
                                <p class="mt-1 text-sm leading-relaxed text-emerald-800">
                                    Nomor referensi Anda <span class="font-semibold">{{ session('sukses') }}</span>.
                                    Simpan nomor ini untuk menanyakan status permohonan ke Call Center 123.
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                    <h2 class="text-lg font-semibold text-slate-900">Data permohonan</h2>
                    <p class="mt-1 text-sm text-slate-500">
                        Kolom bertanda <span class="text-rose-600">*</span> wajib diisi.
                    </p>

                    <form action="{{ route('pasang-baru.store') }}" method="POST" class="mt-6 space-y-5" novalidate>
                        @csrf

                        <div>
                            <label for="nama" class="block text-sm font-medium text-slate-700">
                                Nama lengkap <span class="text-rose-600">*</span>
                            </label>
                            <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required
                                   placeholder="Sesuai KTP"
                                   class="mt-1.5 w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none transition focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20 @error('nama') border-rose-400 @enderror">
                            @error('nama')
                                <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="no_hp" class="block text-sm font-medium text-slate-700">
                                Nomor HP / WhatsApp <span class="text-rose-600">*</span>
                            </label>
                            <input id="no_hp" name="no_hp" type="tel" inputmode="tel" value="{{ old('no_hp') }}" required
                                   placeholder="081234567890"
                                   class="mt-1.5 w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none transition focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20 @error('no_hp') border-rose-400 @enderror">
                            @error('no_hp')
                                <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="alamat" class="block text-sm font-medium text-slate-700">
                                Alamat pemasangan <span class="text-rose-600">*</span>
                            </label>
                            <textarea id="alamat" name="alamat" rows="3" required
                                      placeholder="Alamat lengkap, RT/RW, kelurahan, kecamatan, kota/kabupaten"
                                      class="mt-1.5 w-full resize-none rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none transition focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20 @error('alamat') border-rose-400 @enderror">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="daya" class="block text-sm font-medium text-slate-700">
                                    Daya yang diajukan <span class="text-rose-600">*</span>
                                </label>
                                <select id="daya" name="daya" required
                                        class="mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3.5 py-2.5 text-sm outline-none transition focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20 @error('daya') border-rose-400 @enderror">
                                    <option value="" disabled @selected(! old('daya'))>Pilih daya</option>
                                    @foreach ($pilihanDaya as $daya)
                                        <option value="{{ $daya }}" @selected(old('daya') === $daya)>{{ $daya }}</option>
                                    @endforeach
                                </select>
                                @error('daya')
                                    <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="jenis_bangunan" class="block text-sm font-medium text-slate-700">
                                    Jenis bangunan <span class="text-rose-600">*</span>
                                </label>
                                <select id="jenis_bangunan" name="jenis_bangunan" required
                                        class="mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3.5 py-2.5 text-sm outline-none transition focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20 @error('jenis_bangunan') border-rose-400 @enderror">
                                    <option value="" disabled @selected(! old('jenis_bangunan'))>Pilih jenis</option>
                                    @foreach ($pilihanJenis as $jenis)
                                        <option value="{{ $jenis }}" @selected(old('jenis_bangunan') === $jenis)>{{ $jenis }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_bangunan')
                                    <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="catatan" class="block text-sm font-medium text-slate-700">
                                Catatan tambahan <span class="font-normal text-slate-400">(opsional)</span>
                            </label>
                            <textarea id="catatan" name="catatan" rows="3"
                                      placeholder="Misalnya: patokan lokasi, kebutuhan khusus, atau waktu survei yang diinginkan"
                                      class="mt-1.5 w-full resize-none rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none transition focus:border-[#0072bc] focus:ring-2 focus:ring-[#0072bc]/20 @error('catatan') border-rose-400 @enderror">{{ old('catatan') }}</textarea>
                            @error('catatan')
                                <p class="mt-1.5 text-xs text-rose-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                                class="w-full rounded-lg bg-[#0072bc] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#005c9e] focus:outline-none focus:ring-2 focus:ring-[#0072bc]/40">
                            Kirim permohonan
                        </button>

                        <p class="text-xs leading-relaxed text-slate-500">
                            Dengan mengirim formulir, data Anda hanya digunakan untuk memproses permohonan
                            pemasangan listrik.
                        </p>
                    </form>
                </div>
            </div>

            {{-- Informasi pendukung --}}
            <div class="lg:col-span-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                    <h2 class="text-base font-semibold text-slate-900">Dokumen yang perlu disiapkan</h2>
                    <ul class="mt-5 space-y-3 text-sm text-slate-600">
                        @foreach ([
                            'Identitas diri (KTP) pemohon',
                            'Bukti kepemilikan atau penguasaan bangunan',
                            'Alamat lokasi pemasangan yang lengkap',
                            'Nomor HP aktif untuk konfirmasi petugas',
                        ] as $dokumen)
                            <li class="flex gap-3">
                                <span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-[#0072bc]/10 text-[#0072bc]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" class="h-3 w-3"><path d="m5 13 4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </span>
                                {{ $dokumen }}
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-4 text-xs leading-relaxed text-slate-500">
                        Dokumen fisik dibawa saat verifikasi atau diunggah melalui kanal resmi bila diminta petugas.
                    </p>
                </div>

                <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-6 sm:p-8">
                    <h2 class="text-base font-semibold text-slate-900">Setelah formulir dikirim</h2>
                    <ol class="mt-5 space-y-4">
                        @foreach ([
                            ['Verifikasi data', 'Petugas memeriksa kelengkapan data permohonan.'],
                            ['Survei lokasi', 'Tim meninjau kondisi jaringan di lokasi pemasangan.'],
                            ['Biaya & pembayaran', 'Rincian biaya penyambungan disampaikan sebelum pembayaran.'],
                            ['Penyalaan', 'Meter dipasang dan listrik siap digunakan.'],
                        ] as $i => [$judul, $teks])
                            <li class="flex gap-3">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-white text-xs font-bold text-[#0072bc] ring-1 ring-slate-200">{{ $i + 1 }}</span>
                                <span>
                                    <span class="block text-sm font-semibold text-slate-900">{{ $judul }}</span>
                                    <span class="block text-sm leading-relaxed text-slate-600">{{ $teks }}</span>
                                </span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="mt-6 rounded-2xl bg-[#0a2e52] p-6 text-white sm:p-8">
                    <h3 class="text-base font-semibold">Butuh bantuan?</h3>
                    <p class="mt-2 text-sm leading-relaxed text-white/75">
                        Hubungi Call Center 123 bebas pulsa, atau sampaikan pertanyaan lewat WhatsApp layanan.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-3">
                        <a href="tel:123" class="rounded-lg bg-[#ffd100] px-4 py-2.5 text-sm font-semibold text-[#0a2e52] transition hover:bg-[#ffdc4d]">
                            Telepon 123
                        </a>
                        <a href="https://wa.me/62812123123" target="_blank" rel="noopener"
                           class="rounded-lg border border-white/40 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10">
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12">
            <a href="{{ url('/') }}#layanan" class="inline-flex items-center gap-2 text-sm font-semibold text-[#0072bc] hover:text-[#005c9e]">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4"><path d="M19 12H5M11 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Kembali ke daftar layanan
            </a>
        </div>
    </section>
</main>

<footer class="bg-[#0a2e52] text-white">
    <div class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-5 text-xs text-white/50 sm:flex-row sm:items-center sm:justify-between sm:px-6">
        <p>&copy; {{ date('Y') }} Halaman contoh layanan publik PLN. Bukan situs resmi PLN.</p>
        <p>Dibuat dengan Laravel &amp; Tailwind CSS</p>
    </div>
</footer>

</body>
</html>
