-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2020 pada 06.00
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nip`, `nama`, `jabatan`, `alamat`) VALUES
(1, '2135', 'Parno', 'Wakil Direktur', 'Jl. Bango'),
(2, '2331', 'Asrul', 'Suvervaiser', 'JL. Mawar'),
(3, '1124', 'Jupri', 'Direktur Utama', 'Jl. H.Murtado'),
(4, '1135', 'Mawar', 'Assisten Manager', 'JL. Kancil'),
(5, '3341', 'Gilang', 'Staf', 'Jl. Apel'),
(6, '4431', 'Monika', 'Staf', 'Jl. Sawo'),
(7, '5531', 'Kiki', 'Mahasiswa magang', 'Jl. Swadaya'),
(8, '3214', 'Jono', 'Cleaning Service', 'Jl. Lagoa'),
(9, '1020', 'Lala', 'Accounting', 'Jl.Mangga'),
(10, '3310', 'Nuni', 'Staf', 'Jl.Swasembada'),
(11, '7032', 'Leny', 'Cashier', 'Jl.Lontar'),
(12, '7892', 'Jane', 'Staf Humas', 'Jl.Raya Bogor'),
(13, '4521', 'Dewi', 'Staf Admin', 'Jl.Raya Condet'),
(14, '9987', 'Miraz', 'Personalia', 'Jl.Raya Jatinegara'),
(20, '7563', 'Vina', 'Content creator', 'Jl.Mindi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
