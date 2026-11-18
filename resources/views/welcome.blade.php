<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Layanan publik PLN: pasang baru, tambah daya, ubah daya, lapor gangguan, dan cek tagihan listrik.">
    <title>Layanan Publik PLN — Mudah, Cepat, Transparan</title>

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
        <a href="#beranda" class="flex items-center gap-2.5">
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
            <li><a href="#layanan" class="hover:text-[#0072bc]">Layanan</a></li>
            <li><a href="#alur" class="hover:text-[#0072bc]">Alur Pengajuan</a></li>
            <li><a href="#komitmen" class="hover:text-[#0072bc]">Komitmen</a></li>
            <li><a href="#kontak" class="hover:text-[#0072bc]">Kontak</a></li>
        </ul>

        <a href="#kontak" class="rounded-lg bg-[#0072bc] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#005c9e]">
            Hubungi Kami
        </a>
    </nav>
</header>

<main>
    {{-- Hero --}}
    <section id="beranda" class="relative overflow-hidden bg-gradient-to-br from-[#0072bc] via-[#0064a8] to-[#0a2e52] text-white">
        <div class="pointer-events-none absolute -right-24 -top-24 h-80 w-80 rounded-full bg-[#ffd100]/15 blur-2xl"></div>
        <div class="pointer-events-none absolute -bottom-32 left-1/3 h-80 w-80 rounded-full bg-white/10 blur-3xl"></div>

        <div class="relative mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:py-24">
            <div>
                <p class="mb-4 inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-medium ring-1 ring-white/20">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#ffd100]"></span>
                    Pelayanan publik ketenagalistrikan
                </p>
                <h1 class="text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                    Layanan listrik yang <span class="text-[#ffd100]">mudah, cepat,</span> dan transparan
                </h1>
                <p class="mt-5 max-w-xl text-sm leading-relaxed text-white/80 sm:text-base">
                    Ajukan pasang baru, tambah daya, ubah daya, hingga lapor gangguan listrik
                    dalam satu tempat. Kami hadir untuk memastikan kebutuhan listrik Anda
                    terlayani dengan jelas dan tanpa ribet.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#layanan" class="rounded-lg bg-[#ffd100] px-6 py-3 text-sm font-semibold text-[#0a2e52] transition hover:bg-[#ffdc4d]">
                        Lihat Layanan
                    </a>
                    <a href="tel:123" class="rounded-lg border border-white/40 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                        Telepon 123
                    </a>
                </div>
                <dl class="mt-10 grid max-w-md grid-cols-3 gap-4 border-t border-white/15 pt-6 text-xs sm:text-sm">
                    <div>
                        <dt class="text-white/60">Layanan</dt>
                        <dd class="mt-1 font-semibold">Setiap hari</dd>
                    </div>
                    <div>
                        <dt class="text-white/60">Gangguan</dt>
                        <dd class="mt-1 font-semibold">24 jam</dd>
                    </div>
                    <div>
                        <dt class="text-white/60">Biaya info</dt>
                        <dd class="mt-1 font-semibold">Gratis</dd>
                    </div>
                </dl>
            </div>

            {{-- Kartu ringkas --}}
            <div class="relative">
                <div class="rounded-2xl bg-white p-6 text-slate-800 shadow-2xl shadow-black/20 sm:p-8">
                    <h2 class="text-base font-semibold text-slate-900">Butuh bantuan apa hari ini?</h2>
                    <p class="mt-1 text-sm text-slate-500">Pilih layanan yang paling sesuai dengan kebutuhan Anda.</p>

                    <div class="mt-5 space-y-3">
                        <a href="{{ route('pasang-baru.create') }}" class="group flex items-center gap-3 rounded-xl border border-slate-200 p-4 transition hover:border-[#0072bc] hover:bg-slate-50">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-[#0072bc]/10 text-[#0072bc]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5"><path d="M12 5v14M5 12h14" stroke-linecap="round"/></svg>
                            </span>
                            <span>
                                <span class="block text-sm font-semibold">Pasang baru &amp; tambah daya</span>
                                <span class="block text-xs text-slate-500">Untuk rumah, usaha, dan industri</span>
                            </span>
                        </a>
                        <a href="#kontak" class="group flex items-center gap-3 rounded-xl border border-slate-200 p-4 transition hover:border-[#0072bc] hover:bg-slate-50">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-amber-100 text-amber-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5"><path d="M12 9v4m0 4h.01M10.3 4.3 2.6 18a2 2 0 0 0 1.7 3h15.4a2 2 0 0 0 1.7-3L13.7 4.3a2 2 0 0 0-3.4 0Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <span>
                                <span class="block text-sm font-semibold">Lapor gangguan listrik</span>
                                <span class="block text-xs text-slate-500">Tim kami siaga 24 jam</span>
                            </span>
                        </a>
                        <a href="{{ route('cektagihan') }}" class="group flex items-center gap-3 rounded-xl border border-slate-200 p-4 transition hover:border-[#0072bc] hover:bg-slate-50">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-emerald-100 text-emerald-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5"><path d="M4 6h16M4 12h16M4 18h10" stroke-linecap="round"/></svg>
                            </span>
                            <span>
                                <span class="block text-sm font-semibold">Cek tagihan &amp; riwayat</span>
                                <span class="block text-xs text-slate-500">Lewat PLN Mobile atau kontak kami</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Layanan --}}
    <section id="layanan" class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <div class="max-w-2xl">
            <p class="text-xs font-semibold uppercase tracking-widest text-[#0072bc]">Layanan kami</p>
            <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">Satu pintu untuk kebutuhan kelistrikan</h2>
            <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                Berikut layanan yang paling sering dibutuhkan pelanggan. Setiap pengajuan memiliki
                persyaratan dan estimasi waktu yang jelas.
            </p>
        </div>

        <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $layanan = [
                    ['Pasang Baru', 'Pemasangan sambungan listrik untuk rumah tinggal, usaha, atau bangunan baru.', 'M5 12h14M12 5v14', 'bg-[#0072bc]/10 text-[#0072bc]'],
                    ['Tambah Daya', 'Naikkan daya tersambung karena kebutuhan peralatan listrik bertambah.', 'M12 19V5M5 12l7-7 7 7', 'bg-amber-100 text-amber-600'],
                    ['Ubah Daya', 'Sesuaikan daya listrik dengan kebutuhan, baik naik maupun turun.', 'M4 7h11l-3-3m8 13H9l3 3', 'bg-emerald-100 text-emerald-600'],
                    ['Lapor Gangguan', 'Laporkan listrik padam, tegangan tidak stabil, atau masalah jaringan.', 'M13 10V3L4 14h7v7l9-11h-7z', 'bg-rose-100 text-rose-600'],
                    ['Cek Tagihan', 'Ketahui jumlah tagihan dan riwayat pemakaian listrik Anda.', 'M9 14l6-6m-8 1h.01M16 14h.01M5 4h14v16H5z', 'bg-sky-100 text-sky-600'],
                    ['Pengaduan', 'Sampaikan keluhan atau aspirasi atas pelayanan yang Anda terima.', 'M21 15a2 2 0 0 1-2 2H8l-5 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z', 'bg-violet-100 text-violet-600'],
                ];
            @endphp

            @foreach ($layanan as [$judul, $deskripsi, $ikon, $warna])
                <article class="group rounded-xl border border-slate-200 bg-white p-6 transition hover:-translate-y-0.5 hover:border-[#0072bc]/40 hover:shadow-lg hover:shadow-slate-200">
                    <span class="grid h-11 w-11 place-items-center rounded-lg {{ $warna }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5" aria-hidden="true">
                            <path d="{{ $ikon }}" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-slate-900">{{ $judul }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $deskripsi }}</p>
                    <a href="{{ match ($judul) {
                        'Pasang Baru' => route('pasang-baru.create'),
                        'Cek Tagihan' => route('cektagihan'),
                        default => '#kontak',
                    } }}" class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-[#0072bc]">
                        Selengkapnya
                        <svg viewBox="0 0 24 29" fill="none" stroke="currentColor" stroke-width="2" class="h-4 w-4 transition group-hover:translate-x-0.5"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </article>
            @endforeach
        </div>
    </section>

    {{-- Alur pengajuan --}}
    <section id="alur" class="border-y border-slate-200 bg-slate-50">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
            <div class="max-w-2xl">
                <p class="text-xs font-semibold uppercase tracking-widest text-[#0072bc]">Alur pengajuan</p>
                <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">Empat langkah, tanpa berbelit</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                    Alur ini berlaku untuk pengajuan pasang baru maupun perubahan daya.
                </p>
            </div>

            <ol class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['Ajukan permohonan', 'Siapkan identitas, bukti kepemilikan bangunan, dan informasi lokasi.'],
                    ['Verifikasi & survei', 'Petugas memeriksa kelengkapan dokumen dan kondisi jaringan setempat.'],
                    ['Pembayaran', 'Biaya penyambungan diinformasikan secara rinci sebelum pembayaran.'],
                    ['Penyalaan', 'Pemasangan meter dilakukan dan listrik siap digunakan.'],
                ] as $i => [$judul, $teks])
                    <li class="relative rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                        <span class="grid h-9 w-9 place-items-center rounded-full bg-[#0072bc] text-sm font-bold text-white">{{ $i + 1 }}</span>
                        <h3 class="mt-4 text-sm font-semibold text-slate-900">{{ $judul }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $teks }}</p>
                    </li>
                @endforeach
            </ol>

            <p class="mt-6 text-xs text-slate-500">
                * Persyaratan dan estimasi waktu dapat berbeda tergantung jenis layanan dan lokasi.
            </p>
        </div>
    </section>

    {{-- Komitmen --}}
    <section id="komitmen" class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-[#0072bc]">Komitmen layanan</p>
                <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">Pelayanan yang bisa Anda andalkan</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                    Kami berupaya menjaga kualitas pelayanan publik dengan prosedur yang jelas,
                    petugas yang kompeten, dan saluran pengaduan yang mudah diakses.
                </p>

                <ul class="mt-6 space-y-4">
                    @foreach ([
                        ['Transparan', 'Rincian biaya disampaikan sebelum Anda membayar.'],
                        ['Responsif', 'Setiap laporan gangguan dicatat dan ditindaklanjuti.'],
                        ['Aman & profesional', 'Petugas resmi dilengkapi identitas dan surat tugas.'],
                    ] as [$judul, $teks])
                        <li class="flex gap-3">
                            <span class="mt-0.5 grid h-6 w-6 shrink-0 place-items-center rounded-full bg-emerald-100 text-emerald-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" class="h-3.5 w-3.5"><path d="m5 13 4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <span>
                                <span class="block text-sm font-semibold text-slate-900">{{ $judul }}</span>
                                <span class="block text-sm text-slate-600">{{ $teks }}</span>
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="rounded-2xl bg-[#0a2e52] p-8 text-white sm:p-10">
                <h3 class="text-lg font-semibold">Waspada penipuan</h3>
                <p class="mt-3 text-sm leading-relaxed text-white/75">
                    PLN tidak pernah meminta pembayaran melalui rekening pribadi atau nomor
                    yang tidak resmi. Selalu cocokkan identitas petugas dan gunakan kanal
                    pembayaran resmi.
                </p>
                <div class="mt-6 rounded-xl bg-white/10 p-4 text-sm ring-1 ring-white/15">
                    <p class="text-white/60">Saluran resmi</p>
                    <p class="mt-1 font-semibold">Call Center 123 &amp; aplikasi PLN Mobile</p>
                </div>
                <a href="#kontak" class="mt-6 inline-block rounded-lg bg-[#ffd100] px-5 py-2.5 text-sm font-semibold text-[#0a2e52] transition hover:bg-[#ffdc4d]">
                    Lihat kontak lengkap
                </a>
            </div>
        </div>
    </section>

    {{-- Kontak --}}
    <section id="kontak" class="border-t border-slate-200 bg-slate-50">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
            <div class="grid gap-10 lg:grid-cols-2">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-[#0072bc]">Hubungi kami</p>
                    <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">Kami siap membantu</h2>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                        Sampaikan kebutuhan atau keluhan Anda melalui salah satu kanal berikut.
                    </p>

                    <div class="mt-8 space-y-4">
                        @foreach ([
                            ['Call Center', '123', 'tel:123', 'Bebas pulsa dari seluruh Indonesia'],
                            ['WhatsApp', '0812-123-123', 'https://wa.me/62812123123', 'Layanan pesan singkat 24 jam'],
                            ['Kantor Pusat', 'Jl. Trunojoyo Blok M I/135, Jakarta', 'https://web.pln.co.id', 'Senin–Jumat, 08.00–16.00 WIB'],
                        ] as [$judul, $nilai, $tautan, $ket])
                            <a href="{{ $tautan }}" target="{{ str_starts_with($tautan, 'http') ? '_blank' : '_self' }}" rel="noopener"
                               class="flex items-start gap-4 rounded-xl border border-slate-200 bg-white p-4 transition hover:border-[#0072bc]/50 hover:shadow-sm">
                                <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-[#0072bc]/10 text-[#0072bc]">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="h-5 w-5"><path d="M3 5a2 2 0 0 1 2-2h2l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v2a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </span>
                                <span>
                                    <span class="block text-xs font-medium uppercase tracking-wide text-slate-500">{{ $judul }}</span>
                                    <span class="mt-0.5 block text-sm font-semibold text-slate-900">{{ $nilai }}</span>
                                    <span class="block text-xs text-slate-500">{{ $ket }}</span>
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                    <h3 class="text-base font-semibold text-slate-900">Sampaikan pesan Anda</h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Formulir ini contoh tampilan. Hubungi kanal resmi di samping untuk pengajuan.
                    </p>

                    <form class="mt-5 space-y-4" aria-label="Formulir pesan contoh">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-slate-700">Nama lengkap</label>
                            <input id="nama" name="nama" type="text" placeholder="Nama Anda" disabled
                                   class="mt-1.5 w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none disabled:bg-slate-50 disabled:text-slate-500">
                        </div>
                        <div>
                            <label for="idpel" class="block text-sm font-medium text-slate-700">Nomor ID pelanggan</label>
                            <input id="idpel" name="idpel" type="text" inputmode="numeric" placeholder="12 digit ID pelanggan" disabled
                                   class="mt-1.5 w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none disabled:bg-slate-50 disabled:text-slate-500">
                        </div>
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-slate-700">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis kebutuhan atau keluhan Anda" disabled
                                      class="mt-1.5 w-full resize-none rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm outline-none disabled:bg-slate-50 disabled:text-slate-500"></textarea>
                        </div>
                        <button type="button" disabled
                                class="w-full cursor-not-allowed rounded-lg bg-slate-200 px-5 py-3 text-sm font-semibold text-slate-500">
                            Formulir belum aktif
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-[#0a2e52] text-white">
    <div class="mx-auto grid max-w-6xl gap-8 px-4 py-12 sm:px-6 md:grid-cols-3">
        <div>
            <div class="flex items-center gap-2.5">
                <span class="grid h-9 w-9 place-items-center rounded-lg bg-white/10 text-[#ffd100]">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"/></svg>
                </span>
                <span class="text-base font-bold">PLN Layanan Publik</span>
            </div>
            <p class="mt-4 max-w-xs text-sm leading-relaxed text-white/65">
                Melayani kebutuhan ketenagalistrikan masyarakat dengan prosedur yang jelas
                dan dapat dipertanggungjawabkan.
            </p>
        </div>

        <div>
            <h4 class="text-sm font-semibold">Tautan</h4>
            <ul class="mt-4 space-y-2 text-sm text-white/65">
                <li><a href="#layanan" class="hover:text-white">Layanan</a></li>
                <li><a href="#alur" class="hover:text-white">Alur pengajuan</a></li>
                <li><a href="#komitmen" class="hover:text-white">Komitmen layanan</a></li>
                <li><a href="#kontak" class="hover:text-white">Kontak</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-sm font-semibold">Darurat &amp; informasi</h4>
            <ul class="mt-4 space-y-2 text-sm text-white/65">
                <li>Call Center: <a href="tel:123" class="font-semibold text-[#ffd100]">123</a></li>
                <li>Gangguan listrik: 24 jam</li>
                <li><a href="https://web.pln.co.id" target="_blank" rel="noopener" class="hover:text-white">Situs resmi PLN</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-5 text-xs text-white/50 sm:flex-row sm:items-center sm:justify-between sm:px-6">
            <p>&copy; {{ date('Y') }} Halaman contoh layanan publik PLN. Bukan situs resmi PLN.</p>
            <p>Dibuat dengan Laravel &amp; Tailwind CSS</p>
        </div>
    </div>
</footer>

</body>
</html>
