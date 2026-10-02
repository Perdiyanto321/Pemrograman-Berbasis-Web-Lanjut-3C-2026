<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    private function dataBuku()
    {
        return [
            // Sastra & Fiksi
            [
                'id' => 'LIT-05-LP',
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'year' => 2005,
                'category' => 'Sastra & Fiksi',
                'image' => 'laskar-pelangi.jpg',
                'description' => 'Laskar Pelangi merupakan novel pertama Andrea Hirata yang mengisahkan kehidupan sekelompok anak di Belitong yang berjuang mendapatkan pendidikan di tengah berbagai keterbatasan. Cerita berpusat pada anak-anak yang kemudian dikenal sebagai Laskar Pelangi dan pengalaman mereka selama bersekolah, termasuk persahabatan, perjuangan, harapan, cita-cita, serta berbagai peristiwa yang membentuk cara mereka melihat kehidupan. Melalui kisah tersebut, novel ini menggambarkan semangat belajar, kreativitas, dan perjuangan anak-anak daerah dalam mempertahankan kesempatan memperoleh pendidikan. Laskar Pelangi juga menjadi buku pertama dari tetralogi Laskar Pelangi yang dilanjutkan dengan Sang Pemimpi, Edensor, dan Maryamah Karpov.'
            ],
            [
                'id' => 'LIT-09-NM',
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'year' => 2009,
                'category' => 'Sastra & Fiksi',
                'image' => 'negeri-5-menara.jpg',
                'description' => 'Negeri 5 Menara mengikuti perjalanan Alif, seorang remaja dari Minangkabau yang harus meninggalkan kampung halamannya untuk belajar di Pondok Madani di Jawa Timur, meskipun pada awalnya ia memiliki keinginan untuk menempuh pendidikan seperti idolanya, B.J. Habibie. Di pondok tersebut Alif bertemu dengan Raja, Said, Dulmajid, Atang, dan Baso, yang kemudian menjadi sahabat dekatnya dan dikenal sebagai Sahibul Menara. Kehidupan mereka di pondok memperkenalkan Alif pada disiplin, persahabatan, pembelajaran, serta keyakinan terhadap cita-cita melalui prinsip man jadda wajada, yang bermakna bahwa siapa yang bersungguh-sungguh akan berhasil.'
            ],
            [
                'id' => 'LIT-17-LB',
                'title' => 'Laut Bercerita',
                'author' => 'Leila S. Chudori',
                'year' => 2017,
                'category' => 'Sastra & Fiksi',
                'image' => 'laut-bercerita.jpg',
                'description' => 'Laut Bercerita merupakan novel Leila S. Chudori yang mengambil latar peristiwa politik Indonesia pada 1998 dan mengisahkan pengalaman Biru Laut, seorang mahasiswa sekaligus aktivis yang diculik bersama beberapa rekannya. Cerita menggambarkan masa penahanan dan interogasi yang dialami Laut serta kawan-kawannya, kemudian beralih kepada Asmara Jati, adik Laut, yang bersama keluarga korban dan kelompok pencari orang hilang berusaha menemukan jejak mereka yang menghilang. Dengan menggunakan dua sudut pandang tersebut, novel ini tidak hanya membicarakan pengalaman para aktivis, tetapi juga memperlihatkan kehilangan, penantian, dan pencarian jawaban yang dialami keluarga mereka.'
            ],
            [
                'id' => 'LIT-01-PBS',
                'title' => 'Perempuan Berkalung Sorban',
                'author' => 'Abidah El Khalieqy',
                'year' => 2001,
                'category' => 'Sastra & Fiksi',
                'image' => 'perempuan-berkalung-sorban.jpg',
                'description' => 'Perempuan Berkalung Sorban karya Abidah El Khalieqy menceritakan kehidupan Annisa, seorang perempuan yang tumbuh dalam lingkungan keluarga kiai dan pesantren dengan tradisi yang sangat konservatif. Sejak kecil, Annisa menghadapi berbagai pembatasan karena ia perempuan dan merasa bahwa kesempatan serta pendapatnya sering ditempatkan di bawah laki-laki. Perjalanan hidupnya memperlihatkan perjuangannya menghadapi ketidakadilan dalam keluarga, pendidikan, perkawinan, dan lingkungan sosial, sekaligus memperlihatkan keinginannya untuk memperoleh kebebasan, pendidikan, serta hak untuk menentukan kehidupan sendiri.'
            ],

            // Pengembangan Diri
            [
                'id' => 'PEN-18-FT',
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'year' => 2018,
                'category' => 'Pengembangan Diri',
                'image' => 'filosofi-teras.jpg',
                'description' => 'Filosofi Teras karya Henry Manampiring memperkenalkan filsafat Stoisisme atau filsafat Stoa dengan bahasa yang lebih ringan dan dikaitkan dengan berbagai persoalan kehidupan sehari-hari. Buku ini membahas bagaimana seseorang dapat menghadapi emosi negatif, kekhawatiran, dan berbagai persoalan dengan lebih tenang melalui pemahaman terhadap hal-hal yang dapat dikendalikan dan hal-hal yang berada di luar kendali. Pembahasannya juga menghubungkan prinsip Stoisisme dengan kehidupan masyarakat masa kini sehingga gagasan filsafat yang telah berkembang sejak Yunani-Romawi kuno dapat dipahami dalam konteks kehidupan sehari-hari.'
            ],
            [
                'id' => 'PEN-18-SB',
                'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
                'author' => 'Mark Manson',
                'year' => 2018,
                'category' => 'Pengembangan Diri',
                'image' => 'sebuah-seni-untuk-bersikap-bodoamat.jpg',
                'description' => 'Buku karya Mark Manson ini membahas cara melihat kehidupan dengan lebih realistis dengan menekankan pentingnya menentukan hal-hal yang benar-benar layak untuk diperhatikan. Buku ini tidak mengajarkan untuk tidak peduli terhadap segala sesuatu, tetapi mengajak pembaca memilih persoalan, nilai, dan tujuan yang memang penting sehingga energi tidak habis untuk mengejar kesempurnaan, validasi, atau hal-hal yang sebenarnya tidak dapat dikendalikan. Dengan gaya penulisan yang lugas, buku ini membahas keterbatasan manusia, kegagalan, penderitaan, tanggung jawab, serta pentingnya menentukan prioritas dalam menjalani kehidupan.'
            ],
            [
                'id' => 'PEN-19-IK',
                'title' => 'Ikigai',
                'author' => 'Héctor García dan Francesc Miralles',
                'year' => 2019,
                'category' => 'Pengembangan Diri',
                'image' => 'ikigai.jpg',
                'description' => 'Ikigai karya Héctor García dan Francesc Miralles membahas konsep Jepang tentang ikigai, yaitu alasan atau tujuan yang membuat seseorang merasa hidupnya memiliki makna. Penulis menghubungkan konsep tersebut dengan kehidupan masyarakat Okinawa, salah satu wilayah yang dikenal memiliki banyak penduduk berusia panjang, serta membahas kebiasaan mengenai pola hidup, aktivitas, hubungan sosial, dan cara masyarakat menemukan tujuan dalam kehidupannya. Buku ini mengajak pembaca memahami hubungan antara tujuan hidup, aktivitas sehari-hari, kebahagiaan, dan kehidupan yang bermakna melalui pengamatan terhadap budaya Jepang.'
            ],

            // Sejarah & Sosial
            [
                'id' => 'SEJ-09-HGT',
                'title' => 'Habis Gelap Terbitlah Terang',
                'author' => 'R.A. Kartini',
                'year' => 2009,
                'category' => 'Sejarah & Sosial',
                'image' => 'habis-gelap-terbitlah-terang.jpg',
                'description' => 'Habis Gelap Terbitlah Terang merupakan kumpulan surat R.A. Kartini kepada sahabat-sahabat penanya di Belanda yang kemudian dihimpun dan diterbitkan setelah Kartini wafat. Surat-surat tersebut memperlihatkan pemikiran Kartini mengenai kehidupan, pendidikan, cita-cita, serta keinginannya agar perempuan memperoleh kesempatan yang lebih luas dalam kehidupan. Melalui tulisan-tulisannya, pembaca dapat melihat bagaimana Kartini mempertanyakan berbagai batasan adat yang dihadapi perempuan pada zamannya dan menyampaikan harapan terhadap kemajuan perempuan melalui pendidikan dan perubahan cara pandang masyarakat.',
            ],
            [
                'id' => 'SEJ-11-UN',
                'title' => 'Untuk Negeriku: Sebuah Otobiografi',
                'author' => 'Mohammad Hatta',
                'year' => 2011,
                'category' => 'Sejarah & Sosial',
                'image' => 'untuk-negeriku.jpg',
                'description' => 'Untuk Negeriku merupakan otobiografi Mohammad Hatta yang menceritakan perjalanan hidup dan perjuangannya sejak masa kanak-kanak hingga keterlibatannya dalam perjuangan kemerdekaan Indonesia. Buku ini terdiri atas tiga bagian besar yang membahas masa kecil dan pendidikan Hatta hingga masa studinya di Rotterdam, perjalanan perjuangannya di tanah air termasuk masa penangkapan dan pembuangan, serta perannya dalam persiapan kemerdekaan dan perjuangan diplomatik Indonesia. Melalui kisah yang ditulis dari sudut pandang Hatta sendiri, pembaca dapat mengikuti perkembangan pemikiran, pengalaman politik, dan perjalanan perjuangannya sebagai salah satu tokoh penting dalam sejarah kemerdekaan Indonesia.'
            ],
            [
                'id' => 'SEJ-13-SBS',
                'title' => 'Sukarno: Biografi Singkat 1901–1970',
                'author' => 'Taufik Adi Susilo',
                'year' => 2013,
                'category' => 'Sejarah & Sosial',
                'image' => 'sukarno-biografi-singkat.jpg',
                'description' => 'Sukarno: Biografi Singkat 1901–1970 karya Taufik Adi Susilo membahas perjalanan kehidupan dan perjuangan Sukarno sebagai salah satu tokoh utama dalam sejarah Indonesia. Buku ini memberikan gambaran mengenai kehidupan pribadi, perkembangan pemikiran politik, perjuangan kemerdekaan, serta perjalanan Sukarno dalam kehidupan politik dan pemerintahan Indonesia. Pembahasannya mencakup berbagai peristiwa penting yang berkaitan dengan Sukarno, termasuk masa pergerakan nasional, Proklamasi Kemerdekaan, perkembangan politik setelah kemerdekaan, hingga periode akhir kepemimpinannya.'
            ],

            // Pendidikan
            [
                'id' => 'EDU-09-SM',
                'title' => 'Sekolahnya Manusia',
                'author' => 'Munif Chatib',
                'year' => 2009,
                'category' => 'Pendidikan',
                'image' => 'sekolahnya-manusia.jpg',
                'description' => 'Sekolahnya Manusia karya Munif Chatib membahas penerapan konsep Multiple Intelligences dalam pendidikan dan gagasan bahwa setiap siswa memiliki kecerdasan serta potensi yang berbeda. Buku ini berangkat dari persoalan ketika siswa dianggap bermasalah karena kesulitan mengikuti cara mengajar tertentu, padahal masalah tersebut dapat berkaitan dengan ketidaksesuaian antara gaya mengajar dan cara belajar siswa. Pembahasannya mencakup penerimaan siswa melalui Multiple Intelligences Research, pengembangan kecerdasan unik siswa, pembelajaran yang menyenangkan, penyusunan lesson plan, serta peran guru dan orang tua dalam menciptakan lingkungan pendidikan yang mampu menghargai potensi setiap anak.'
            ],
            [
                'id' => 'EDU-20-GA',
                'title' => 'Guru Aini',
                'author' => 'Andrea Hirata',
                'year' => 2020,
                'category' => 'Pendidikan',
                'image' => 'guru-aini.jpg',
                'description' => 'Guru Aini karya Andrea Hirata menceritakan perjuangan seorang guru matematika bernama Desi Istiqomah yang memiliki keinginan kuat untuk mengajar di daerah terpencil. Dalam perjalanan mengajarnya, Desi bertemu dengan Aini, seorang siswi yang awalnya mengalami kesulitan dalam memahami matematika tetapi memiliki keinginan besar untuk belajar. Melalui hubungan antara guru dan murid tersebut, buku ini menggambarkan pentingnya pendidikan, kegigihan dalam belajar, serta perjuangan seorang guru dalam membantu murid menemukan kemampuan dan cita-citanya.',
            ],

            // Teknologi & Digital
            [
                'id' => 'DIG-17-DIS',
                'title' => 'Disruption',
                'author' => 'Rhenald Kasali',
                'year' => 2017,
                'category' => 'Teknologi & Digital',
                'image' => 'disruption.jpg',
                'description' => 'Disruption karya Rhenald Kasali membahas perubahan besar yang terjadi ketika inovasi, teknologi, dan pola bisnis baru mulai menggantikan cara-cara lama yang sebelumnya dianggap mapan. Buku ini menggunakan berbagai contoh perubahan dalam dunia bisnis dan kehidupan masyarakat untuk menjelaskan bagaimana sebuah pendatang baru dapat mengubah kebiasaan, pasar, serta posisi perusahaan yang sudah lama berdiri. Pembahasannya mengajak pembaca memahami bahwa perubahan tidak hanya terjadi pada teknologi, tetapi juga pada pola pikir, perilaku konsumen, organisasi, pemerintahan, dan berbagai bidang kehidupan sehingga diperlukan kemampuan untuk memahami serta menghadapi perubahan tersebut.'
            ],
            [
                'id' => 'DIG-18-TGS',
                'title' => 'The Great Shifting',
                'author' => 'Rhenald Kasali',
                'year' => 2018,
                'category' => 'Teknologi & Digital',
                'image' => 'the-great-shifting.jpg',
                'description' => 'The Great Shifting karya Rhenald Kasali membahas perubahan besar dari era perusahaan tradisional menuju era platform dan peradaban digital. Buku ini melihat perubahan tersebut bukan hanya dari sisi bisnis dan ekonomi, tetapi juga dari perubahan perilaku serta cara manusia menjalani kehidupan. Pembahasannya berfokus pada tiga gagasan utama, yaitu perkembangan platform, perubahan perilaku kehidupan, serta pengaruh perubahan tersebut terhadap bisnis dan ekonomi, sehingga pembaca diajak memahami bagaimana inovasi digital dan perubahan pola kehidupan dapat memengaruhi organisasi dan masyarakat secara luas.'
            ],
            [
                'id' => 'DIG-24-MAI',
                'title' => 'Memahami AI: Sebuah Panduan Etik',
                'author' => 'Agus Sudibyo',
                'year' => 2024,
                'category' => 'Teknologi & Digital',
                'image' => 'memahami-ai.jpg',
                'description' => 'Buku Memahami AI: Sebuah Panduan Etik karya Agus Sudibyo membahas perkembangan kecerdasan buatan atau Artificial Intelligence (AI) dari sudut pandang yang tidak hanya berfokus pada teknologi, tetapi juga pada hubungan AI dengan kehidupan manusia. Buku ini membantu pembaca memahami dasar dan perkembangan AI, cara kerja serta berbagai peluang yang ditawarkan oleh teknologi tersebut dalam kehidupan modern. Selain membahas manfaat dan potensi AI, buku ini juga memberikan perhatian pada berbagai risiko dan persoalan etika yang muncul seiring dengan semakin luasnya penggunaan kecerdasan buatan. Melalui pembahasannya, pembaca diajak untuk memahami bahwa perkembangan AI perlu disertai dengan tanggung jawab, pertimbangan kemanusiaan, dan kesadaran terhadap dampaknya bagi masyarakat.'
            ],

            // Sains & Pengetahuan
            [
                'id' => 'SAI-80-KOS',
                'title' => 'Kosmos',
                'author' => 'Carl Sagan',
                'year' => 1980,
                'category' => 'Sains & Pengetahuan',
                'image' => 'kosmos.jpg',
                'description' => 'Kosmos karya Carl Sagan merupakan buku sains populer yang mengajak pembaca memahami alam semesta melalui pembahasan mengenai perkembangan kosmik, asal-usul kehidupan, planet dan bintang, tata surya, galaksi, serta perjalanan manusia dalam mempelajari ruang angkasa. Buku ini menghubungkan pengetahuan astronomi dan kosmologi dengan sejarah perkembangan ilmu pengetahuan dan eksplorasi antariksa sehingga pembaca tidak hanya memperoleh gambaran mengenai luasnya alam semesta, tetapi juga memahami posisi manusia sebagai bagian kecil dari perjalanan kosmik yang sangat panjang.'
            ],
        ];
    }

    public function index(Request $request)
    {
        $buku = $this->dataBuku();

        $kategori = $request->query('category');

        if ($kategori) {
            $buku = array_filter($buku, function ($item) use ($kategori) {
                return $item['category'] == $kategori;
            });
        }

        return view('buku.index', compact('buku', 'kategori'));
    }

    public function show($id)
    {
        $buku = $this->dataBuku();

        $bukuDitemukan = null;

        foreach ($buku as $item) {
            if ($item['id'] == $id) {
                $bukuDitemukan = $item;
                break;
            }
        }

        return view('buku.detail', compact('bukuDitemukan'));
    }
}
