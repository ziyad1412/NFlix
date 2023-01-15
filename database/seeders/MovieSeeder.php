<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Movie_genre;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/* 
        Movie::create([
            'judul' => '',
            'cover_img' => '',
            'sinopsis' => '',
            'status_id' => ,
            'type_id' => 
        ]);
        Movie_genre::create([
            'movie_id' => ,
            'genre_id' => 
        ]);
*/

        // Create Row 1

        Movie::create([
            'judul' => 'KKN di Desa Penari',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMGUwYzdjYTAtNzg4ZC00NzkyLTg0YTktYjg1ZjBjNjQwYWM2XkEyXkFqcGdeQXVyNzEzNjU1NDg@._V1_FMjpg_UX1000_.jpg',
            'sinopsis' => 'KKN Di Desa Penari diadaptasi dari salah satu cerita horror yang telah viral di tahun 2019 melalui Twitter, menurut sang penulis, cerita ini diambil dari sebuah kisah nyata sekelompok mahasiswa yang tengah melakukan program KKN (Kuliah Kerja Nyata) di Desa Penari. Tak berjalan mulus, serentetan pengalaman horror pun menghantui mereka hingga program KKN tersebut berakhir tragis.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 1,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 1,
            'genre_id' => 5
        ]);

        // Create Row 2

        Movie::create([
            'judul' => 'Dilan 1990',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BYzM0NmQ2YzgtZWZkNC00N2JhLThjYzUtMDNlZDczMzJiMGY1XkEyXkFqcGdeQXVyNzkzODk2Mzc@._V1_FMjpg_UX1000_.jpg',
            'sinopsis' => 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis... semua dengan caranya sendiri. Cara Dilan mendekati Milea tidak sama dengan teman-teman lelakinya yang lain, bahkan Beni, pacar Milea di Jakarta. Bahkan cara berbicara Dilan yang terdengar kaku, lambat laun justru membuat Milea kerap merindukannya jika sehari saja ia tak mendengar suara itu. Perjalanan hubungan mereka tak selalu mulus. Beni, gank motor, tawuran, Anhar, Kang Adi, semua mewarnai perjalanan itu. Dan Dilan... dengan caranya sendiri...selalu bisa membuat Milea percaya ia bisa tiba di tujuan dengan selamat. Tujuan dari perjalanan ini. Perjalanan mereka berdua. Katanya, dunia SMA adalah dunia paling indah. Dunia Milea dan Dilan satu tingkat lebih indah daripada itu.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 2,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 2,
            'genre_id' => 6
        ]);

        // Create Row 3

        Movie::create([
            'judul' => 'Dilan 1991',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BYzNhNGY1YjItMDhmOS00ODc0LWI0NTYtNGM3ODdmODM1ZjdhXkEyXkFqcGdeQXVyNzEzNjU1NDg@._V1_.jpg',
            'sinopsis' => 'Kisah cinta Dilan dan Milea akan kembali berlanjut. Di film Dilan 1991 ini kisah cinta mereka akan mulai diuji. Banyak rintangan yang harus Dilan dan Milea lalui, mampukah cinta mereka bertahan ?',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 3,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 3,
            'genre_id' => 6
        ]);

        // Create Row 4

        Movie::create([
            'judul' => 'Laskar Pelangi',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMDc5ZTBkNjYtMzk0OS00MDQwLTgyMWUtMWU2YzhmNjJmNjIxXkEyXkFqcGdeQXVyNjQ4ODY4NzU@._V1_FMjpg_UX426_.jpg',
            'sinopsis' => 'Laskar Pelangi menceritakan kisah anak-anak dari Desa Belitung yang dikategorikan sebagai anak-anak miskin di Belitung. Anak-anak tersebut tidak berhenti berusaha untuk memperbaiki masa depan mereka. Mereka merupakan siswa SD Muhammadiyah, SD tertua di desa Belitung.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 4,
            'genre_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 4,
            'genre_id' => 3
        ]);

        // Create Row 5

        Movie::create([
            'judul' => 'Habibie & Ainun',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BM2EyYTc4OGUtOWFmMC00ZWIyLTlkODQtZjdiMGRkZjNmOTFiXkEyXkFqcGdeQXVyNjc2NDg5OTg@._V1_FMjpg_UX750_.jpg',
            'sinopsis' => 'Habibie & Ainun adalah sebuah waralaba film drama yang diproduksi oleh Manoj Punjabi dari MD Pictures. Waralaba tersebut dimulai dengan film Habibie & Ainun, prekuel Rudy Habibie, dan Habibie & Ainun 3. Disusul dengan 3 judul film lainnya.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 5,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 5,
            'genre_id' => 6
        ]);

        // Create Row 6

        Movie::create([
            'judul' => 'Pengabdi Setan',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BYjU5NjYyNzQtZDQ3Ny00Y2FkLWIyZGYtNzM5YzM3NDdjMjUxXkEyXkFqcGdeQXVyMzYzOTYxNzM@._V1_.jpg',
            'sinopsis' => 'Setelah sakit aneh selama 3 tahun, Ibu akhirnya meninggal dunia. Bapak lalu memutuskan untuk kerja di luar kota meninggalkan anak-anak. Tak lama kemudian, anak-anak merasa bahwa Ibu kembali berada di rumah. Situasi semakin menyeramkan ketika mereka mengetahui bahwa Ibu datang lagi tidak sekedar untuk menjenguk, tapi untuk menjemput mereka.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 6,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 6,
            'genre_id' => 5
        ]);

        // Create Row 7

        Movie::create([
            'judul' => 'Ayat Ayat Cinta',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BNGI1Zjk4NTItOTYyMi00ZTNhLTg5N2QtNmVjMTJhMGYyNjE3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX426_.jpg',
            'sinopsis' => 'Ini adalah kisah cinta. Tapi bukan cuma sekadar kisah cinta yang biasa. Ini tentang bagaimana menghadapi turun-naiknya persoalan hidup dengan cara Islam. Fahri bin Abdillah adalah pelajar Indonesia yang berusaha menggapai gelar masternya di Al-Azhar. Berjibaku dengan panas-debu Mesir. Berkutat dengan berbagai macam target dan kesederhanaan hidup.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 7,
            'genre_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 7,
            'genre_id' => 6
        ]);

        // Create Row 8

        Movie::create([
            'judul' => 'Ada Apa Dengan Cinta',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BN2QwMzIxN2UtMWVlNS00NjJmLWI4ZTMtM2U4NTdhZTRiMDE1XkEyXkFqcGdeQXVyNjYxNDc5MzU@._V1_FMjpg_UX511_.jpg',
            'sinopsis' => 'Seorang gadis SMA populer harus memilih apakah ia ingin tetap menjadi bagian dari gengnya atau jatuh cinta pada anak lelaki yang mencintai sastra di sekolahnya.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 8,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 8,
            'genre_id' => 6
        ]);

        // Create Row 9

        Movie::create([
            'judul' => 'Serigala Terakhir',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BNmNkOWQzOTItMGU2Yi00NzJiLWJkMTYtZDdlOGVjYjAzZGI2XkEyXkFqcGdeQXVyNDM5MjIyMzk@._V1_FMjpg_UX659_.jpg',
            'sinopsis' => 'Jarot dan Ale adalah teman baik, tumbuh bersama sejak kecil. Keduanya memiliki banyak kesamaan, tapi tidak dengan karakter. Mereka membentuk geng Srigala Terakhir, dan bermimpi menjadi mafia terbesar.',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 9,
            'genre_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 9,
            'genre_id' => 2
        ]);

        // Create Row 10

        Movie::create([
            'judul' => 'Kukira Kau Rumah',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BYzk0MGVlNzktMjczOS00ODI2LThhY2YtZWJhNGUzNWYxMWNlXkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg',
            'sinopsis' => 'Bercerita tentang pengidap bipolar disorder yang diderita karakter Niskala (Prilly Latuconsina). Kita akan diajak melihat kehidupan Niskala yang berusaha untuk bisa berkuliah dan bergaul dengan normal. Sampai akhirnya ia jatuh cinta dengan musisi penyendiri bernama Pram (Jourdy Pranata).',
            'status_id' => 1,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 10,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 10,
            'genre_id' => 6
        ]);

        // Create Row 11

        Movie::create([
            'judul' => 'Thor',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BOGE4NzU1YTAtNzA3Mi00ZTA2LTg2YmYtMDJmMThiMjlkYjg2XkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_FMjpg_UX1000_.jpg',
            'sinopsis' => 'Thor ini mengisahkan tentang seorang Raja Asgard bernama Odin yang berperang melawan Frost Giants dan pemimpin mereka, Laufey. Odin berusaha untuk mencegah Laufey dan pasukannya menaklukkan sembilan wilayah yang sangat besar termasuk Bumi. Anak Odin, Thor, telah bersiap untuk naik takhta sebagai Raja Asgard namun hal tersebut menjadi kacau saat Frost Giants mengambil sebuah peti mati. Atas perintah dari ayahnya, Thor pun pergi ke Jotunheim untuk berperang melawan Laufey dengan didampingi oleh adiknya yang bernama Loki.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 11,
            'genre_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 11,
            'genre_id' => 2
        ]);

        // Create Row 12

        Movie::create([
            'judul' => 'Moana',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMjI4MzU5NTExNF5BMl5BanBnXkFtZTgwNzY1MTEwMDI@._V1_FMjpg_UX1086_.jpg',
            'sinopsis' => 'Gadis muda menggunakan bakat navigasinya untuk berlayar ke pulau dongeng. Pahlawannya ikut dalam pertualangannya, Maui setengah dewa yang legendaris.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 12,
            'genre_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 12,
            'genre_id' => 4
        ]);

        // Create Row 13

        Movie::create([
            'judul' => 'Avangers: Endgame',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_.jpg',
            'sinopsis' => 'Terombang-ambing di luar angkasa tanpa makanan atau air, Tony Stark mengirim pesan ke Pepper Potts saat suplai oksigennya mulai berkurang. Sementara itu, para Avengers yang tersisa -- Thor, Black Widow, Captain America, dan Bruce Banner -- harus mencari cara untuk mengembalikan sekutu mereka yang ditaklukkan untuk pertarungan epik dengan Thanos -- demigod jahat yang menghancurkan planet dan alam semesta.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 13,
            'genre_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 13,
            'genre_id' => 2
        ]);

        // Create Row 14

        Movie::create([
            'judul' => 'Home Alone',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMzFkM2YwOTQtYzk2Mi00N2VlLWE3NTItN2YwNDg1YmY0ZDNmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
            'sinopsis' => 'Kevin, seorang anak laki-laki yang tertinggal dirumah, sementara seluruh keluarganya pergi berlibur. Mainan, kecerdasan, dan pemikiran cepatnya adalah mimpi buruk bagi sepasang pencuri yang memutuskan untuk merampok rumahnya.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 14,
            'genre_id' => 3
        ]);
        Movie_genre::create([
            'movie_id' => 14,
            'genre_id' => 4
        ]);

        // Create Row 15

        Movie::create([
            'judul' => 'Beauty and The Beast',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMTUwNjUxMTM4NV5BMl5BanBnXkFtZTgwODExMDQzMTI@._V1_.jpg',
            'sinopsis' => 'Film Beauty and the Beast diawali dengan cerita pada suatu pesta kerajaan. Di tengah keasikan orang berpesta, datanglah pengemis tua untuk menawarkan sesuatau. Tapi, pangeran muda menolaknya. Seketika pengemis itu mengubah pengeran menjadi binatang Beast,dan budaknya sebagai benda rumah tangga. Kepada sang pangeran, penyihir mengatakan bahwa mantra kutukannya akan musnah saat dirinya mendapatkan cinta tulus dari seorang wanita.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 15,
            'genre_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 15,
            'genre_id' => 5
        ]);

        // Create Row 16

        Movie::create([
            'judul' => 'Remember the Titans',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BYThkMzgxNjEtMzFiOC00MTI0LWI5MDItNDVmYjA4NzY5MDQ2L2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_FMjpg_UX816_.jpg',
            'sinopsis' => 'Di Virginia, sepak bola sekolah menengah adalah cara hidup, sebuah institusi yang dihormati, setiap pertandingan dirayakan lebih mewah daripada Natal, setiap playoff dibedakan lebih megah daripada hari libur nasional mana pun. Dan dengan pengakuan seperti itu, muncullah emosi yang kuat. Pada tahun 1971 sepak bola sekolah menengah adalah segalanya bagi masyarakat Alexandria. Tapi ketika dewan sekolah setempat dipaksa untuk mengintegrasikan sekolah serba hitam dengan sekolah serba putih, fondasi tradisi sepak bola yang hebat diuji.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 16,
            'genre_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 16,
            'genre_id' => 4
        ]);

        // Create Row 17

        Movie::create([
            'judul' => 'Ice Age: Collision Course',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMTUwMTk2ODc1OV5BMl5BanBnXkFtZTgwMzU4MzgzOTE@._V1_FMjpg_UX1000_.jpg',
            'sinopsis' => 'Manny si raksasa mulai khawatir saat putrinya, Peaches, mengumumkan pertunangannya. Masih kurang beruntung dalam cinta, Sid si pemalas dengan sukarela merencanakan pernikahan pasangan itu. Yang membuat Manny kecewa, tidak ada yang bisa menghentikan pernikahan yang akan datang, kecuali mungkin akhir dunia. Ketika Scrat secara tidak sengaja meluncurkan dirinya ke luar angkasa, dia memicu reaksi berantai yang mengirimkan asteroid meluncur ke Bumi. Sekarang, seluruh kawanan harus meninggalkan rumah untuk menjelajahi tanah baru dan menyelamatkan diri dari kesalahan kosmik Scrat.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 17,
            'genre_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 17,
            'genre_id' => 3
        ]);
        Movie_genre::create([
            'movie_id' => 17,
            'genre_id' => 7
        ]);

        // Create Row 18

        Movie::create([
            'judul' => 'Ready or Not',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BYzBkMzAyMDUtZTFkZS00OWUyLTgwM2ItNGI3MTQ5NzA3NTVkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1006_.jpg',
            'sinopsis' => 'Grace sangat bahagia setelah menikah dengan pria impiannya di rumah mewah milik keluarganya. Hanya ada satu tangkapan - dia sekarang harus bersembunyi dari tengah malam sampai subuh sementara mertua barunya memburunya dengan senjata, busur dan senjata lainnya. Saat Grace mati-matian berusaha bertahan malam itu, dia segera menemukan cara untuk membalikkan keadaan pada kerabatnya yang tidak terlalu dicintai.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 18,
            'genre_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 18,
            'genre_id' => 8
        ]);

        // Create Row 19

        Movie::create([
            'judul' => 'Captain Marvel',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_.jpg',
            'sinopsis' => 'Captain Marvel adalah pejuang Kree luar angkasa yang mendapati dirinya terjebak di tengah pertempuran intergalaksi antara rakyatnya dan Skrull. Hidup di Bumi pada tahun 1995, dia terus mengingat kembali kehidupan lain sebagai pilot Angkatan Udara A.S. Carol Danvers. Dengan bantuan dari Nick Fury, Captain Marvel mencoba mengungkap rahasia masa lalunya sambil memanfaatkan kekuatan supernya untuk mengakhiri perang dengan Skrulls yang jahat.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 19,
            'genre_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 19,
            'genre_id' => 2
        ]);

        // Create Row 20

        Movie::create([
            'judul' => 'The Night House',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BZmIwNjJhOGYtNDcyNi00Yjc4LThiNTktMDM2ZjFhM2YxMTljXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_FMjpg_UX1067_.jpg',
            'sinopsis' => 'Terguncang oleh kematian suaminya yang tak terduga, Beth (Rebecca Hall) ditinggalkan sendirian di rumah tepi danau yang dia bangun untuknya. Dia berusaha sebaik mungkin untuk tetap bersama-tapi kemudian mimpi itu datang. Penglihatan yang mengganggu tentang kehadiran di rumah memanggilnya, memberi isyarat dengan daya pikat hantu. Tapi cahaya siang yang keras menghapus semua bukti yang menghantui. Terhadap nasihat teman-temannya, dia mulai menggali barang-barang miliknya, merindukan jawaban.',
            'status_id' => 2,
            'type_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 20,
            'genre_id' => 4
        ]);
        Movie_genre::create([
            'movie_id' => 20,
            'genre_id' => 5
        ]);

        // Create Row 21

        Movie::create([
            'judul' => 'Stranger Things',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BNjBlN2U1ZWUtODgzYy00ODY3LWFhODUtZGRlYzZhM2U4NWU4XkEyXkFqcGdeQXVyODExNTExMTM@._V1_FMjpg_UX1259_.jpg',
            'sinopsis' => 'Stranger Things berlatar pada tahun 1980-an, di kota fiksi Hawkins, Indiana. Serial ini berfokus di sekitar banyak peristiwa supernatural yang terjadi di kota, khususnya hubungan mereka dengan realitas alternatif yang disebut Upside Down. Hal itu muncul karena fasilitas eksperimen anak pemerintah Amerika Serikat.',
            'status_id' => 2,
            'type_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 21,
            'genre_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 21,
            'genre_id' => 2
        ]);

        Movie_genre::create([
            'movie_id' => 21,
            'genre_id' => 3
        ]);

        // Create Row 22

        Movie::create([
            'judul' => 'Money Heist',
            'cover_img' => 'https://m.media-amazon.com/images/M/MV5BODI0ZTljYTMtODQ1NC00NmI0LTk1YWUtN2FlNDM1MDExMDlhXkEyXkFqcGdeQXVyMTM0NTUzNDIy._V1_FMjpg_UX824_.jpg',
            'sinopsis' => 'Money Heist mengisahkan seorang pria yang disebut The Profesor (Alvaro Morte) yang merekrut sekelompok orang dengan kemampuan khusus untuk melakukan pencurian.',
            'status_id' => 2,
            'type_id' => 2
        ]);
        Movie_genre::create([
            'movie_id' => 22,
            'genre_id' => 1
        ]);
        Movie_genre::create([
            'movie_id' => 22,
            'genre_id' => 2
        ]);

        Movie_genre::create([
            'movie_id' => 22,
            'genre_id' => 6
        ]);

        // // Create Row 10

        // Movie::create([
        //     'judul' => '',
        //     'cover_img' => '',
        //     'sinopsis' => '',
        //     'status_id' => 2,
        //     'type_id' => 1
        // ]);
        // Movie_genre::create([
        //     'movie_id' => 10,
        //     'genre_id' => 
        // ]);
        // Movie_genre::create([
        //     'movie_id' => 10,
        //     'genre_id' => 
        // ]);

    }
}
