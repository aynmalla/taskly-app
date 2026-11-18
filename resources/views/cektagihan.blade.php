<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panduan dan formulir contoh cek tagihan listrik PLN: lihat jumlah tagihan, riwayat pemakaian, dan kanal pembayaran resmi.">
    <title>Cek Tagihan Listrik — Layanan Publik PLN</title>

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
                <span class="text-white">Cek Tagihan</span>
            </nav>

            <h1 class="mt-4 text-3xl font-bold leading-tight sm:text-4xl">Cek tagihan listrik</h1>
            <p class="mt-4 max-w-2xl text-sm leading-relaxed text-white/80 sm:text-base">
                Ketahui jumlah tagihan dan riwayat pemakaian listrik Anda. Cukup siapkan nomor
                ID pelanggan yang tertera pada tagihan atau meteran listrik.
            </p>

            <dl class="mt-8 grid max-w-lg grid-cols-3 gap-4 border-t border-white/15 pt-6 text-xs sm:text-sm">
                <div>
                    <dt class="text-white/60">ID pelanggan</dt>
                    <dd class="mt-1 font-semibold">12 digit</dd>
                </div>
                <div>
                    <dt class="text-white/60">Info tagihan</dt>
                    <dd class="mt-1 font-semibold">Gratis</dd>
                </div>
                <div>
                    <dt class="text-white/60">Kanal bantuan</dt>
                    <dd class="mt-1 font-semibold">123</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-14 sm:px-6 lg:py-20">
        <div class="grid gap-10 lg:grid-cols-5">
            {{-- Formulir contoh --}}
            <div class="lg:col-span-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                    <h2 class="text-lg font-semibold text-slate-900">Formulir cek tagihan</h2>
                    <p class="mt-1 text-sm text-slate-500">
                        Contoh tampilan. Formulir ini belum terhubung ke sistem tagihan, jadi belum bisa
                        menampilkan data pelanggan.
                    </p>

                    <form class="mt-6 space-y-4" aria-label="Formulir cek tagihan contoh">
                        <div>
                            <label for="idpel" class="block text-sm font-medium text-slate-700">Nomor ID pelanggan</label>
                            <input id="idpel" name="idpel" type="text" inputmode="numeric" placeholder="Contoh: 512345678901" disabled
                                   class="mt-1.5 w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none disabled:bg-slate-50 disabled:text-slate-500">
                            <p class="mt-1.5 text-xs text-slate-500">Terdapat pada tagihan, aplikasi PLN Mobile, atau meteran listrik.</p>
                        </div>
                        <div>
                            <label for="bulan" class="block text-sm font-medium text-slate-700">Bulan tagihan</label>
                            <select id="bulan" name="bulan" disabled
                                    class="mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3.5 py-2.5 text-sm outline-none disabled:bg-slate-50 disabled:text-slate-500">
                                <option>Bulan berjalan</option>
                                <option>Bulan sebelumnya</option>
                            </select>
                        </div>
                        <button type="button" disabled
                                class="w-full cursor-not-allowed rounded-lg bg-slate-200 px-5 py-3 text-sm font-semibold text-slate-500">
                            Formulir belum aktif
                        </button>
                    </form>

                    <div class="mt-6 rounded-xl bg-slate-50 p-4 text-sm text-slate-600 ring-1 ring-slate-200">
                        <p class="font-semibold text-slate-900">Ingin cek tagihan sekarang?</p>
                        <p class="mt-1">
                            Gunakan aplikasi PLN Mobile atau hubungi Call Center 123. Keduanya merupakan
                            kanal resmi dan tidak memungut biaya informasi.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-3">
                            <a href="tel:123" class="rounded-lg bg-[#0072bc] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#005c9e]">
                                Telepon 123
                            </a>
                            <a href="https://wa.me/62812123123" target="_blank" rel="noopener"
                               class="rounded-lg border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-[#0072bc] hover:text-[#0072bc]">
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Panduan --}}
            <div class="lg:col-span-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                    <h2 class="text-base font-semibold text-slate-900">Cara cek tagihan resmi</h2>
                    <ol class="mt-5 space-y-5">
                        @foreach ([
                            ['Siapkan ID pelanggan', 'Lihat 12 digit nomor pada tagihan terakhir atau meteran listrik.'],
                            ['Pilih kanal resmi', 'Gunakan aplikasi PLN Mobile, Call Center 123, atau kantor layanan terdekat.'],
                            ['Periksa rincian', 'Pastikan nama pelanggan, tarif/daya, dan jumlah tagihan sesuai.'],
                            ['Bayar lewat kanal resmi', 'Bank, minimarket, atau dompet digital yang bekerja sama dengan PLN.'],
                        ] as $i => [$judul, $teks])
                            <li class="flex gap-3">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-[#0072bc]/10 text-xs font-bold text-[#0072bc]">{{ $i + 1 }}</span>
                                <span>
                                    <span class="block text-sm font-semibold text-slate-900">{{ $judul }}</span>
                                    <span class="block text-sm leading-relaxed text-slate-600">{{ $teks }}</span>
                                </span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="mt-6 rounded-2xl bg-[#0a2e52] p-6 text-white sm:p-8">
                    <h3 class="text-base font-semibold">Waspada penipuan</h3>
                    <p class="mt-2 text-sm leading-relaxed text-white/75">
                        PLN tidak pernah meminta pembayaran tagihan melalui rekening pribadi. Pastikan
                        pembayaran hanya dilakukan melalui kanal resmi.
                    </p>
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
