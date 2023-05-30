-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Bulan Mei 2023 pada 06.11
-- Versi server: 8.0.30
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tampilkan_di_home` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `icon`, `kategori`, `tampilkan_di_home`) VALUES
(8, 'd49154fa24381b8456197b7a37e1efb9.png', 'PHP', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_project`
--

CREATE TABLE `tb_project` (
  `id_project` int NOT NULL,
  `nama_project` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `file_project` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL,
  `function_graph` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `function_overview` text COLLATE utf8mb4_general_ci NOT NULL,
  `embed_code` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_post` date NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `score` float NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `logo_project` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `views` int NOT NULL,
  `arsipkan` int NOT NULL,
  `buy_on_pancake` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `discord` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_users` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_project`
--

INSERT INTO `tb_project` (`id_project`, `nama_project`, `file_project`, `deskripsi`, `function_graph`, `function_overview`, `embed_code`, `tanggal_post`, `kategori`, `score`, `thumbnail`, `logo_project`, `views`, `arsipkan`, `buy_on_pancake`, `website`, `telegram`, `discord`, `twitter`, `id_users`) VALUES
(6, 'Testing', 'af5d382166506dc6a4643ab6f2a220a1.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '663008d59245e79331b1d6d407d34bb5.png', ' ($) = payable function\r\n # = non-constant function\r\n \r\n+ [Int] IERC20 \r\n    - [Ext] totalSupply\r\n    - [Ext] balanceOf\r\n    - [Ext] transfer #\r\n    - [Ext] allowance\r\n    - [Ext] approve #\r\n    - [Ext] transferFrom #\r\n\r\n + [Lib] SafeMath \r\n    - [Int] tryAdd\r\n    - [Int] trySub\r\n    - [Int] tryMul\r\n    - [Int] tryDiv\r\n    - [Int] tryMod\r\n    - [Int] add\r\n    - [Int] sub\r\n    - [Int] mul\r\n    - [Int] div\r\n    - [Int] mod\r\n    - [Int] sub\r\n    - [Int] div\r\n    - [Int] mod\r\n\r\n +  Context \r\n    - [Int] _msgSender\r\n    - [Int] _msgData\r\n\r\n + [Lib] Address \r\n    - [Int] isContract\r\n    - [Int] sendValue #\r\n    - [Int] functionCall #\r\n    - [Int] functionCall #\r\n    - [Int] functionCallWithValue #\r\n    - [Int] functionCallWithValue #\r\n    - [Int] functionStaticCall\r\n    - [Int] functionStaticCall\r\n    - [Int] functionDelegateCall #\r\n    - [Int] functionDelegateCall #\r\n    - [Prv] _verifyCallResult\r\n\r\n +  Ownable (Context)\r\n    - [Pub]  #\r\n    - [Pub] owner\r\n    - [Pub] renounceOwnership #\r\n       - modifiers: onlyOwner\r\n    - [Pub] transferOwnership #\r\n       - modifiers: onlyOwner\r\n\r\n + [Int] IUniswapV2Factory \r\n    - [Ext] feeTo\r\n    - [Ext] feeToSetter\r\n    - [Ext] getPair\r\n    - [Ext] allPairs\r\n    - [Ext] allPairsLength\r\n    - [Ext] createPair #\r\n    - [Ext] setFeeTo #\r\n    - [Ext] setFeeToSetter #\r\n\r\n + [Int] IUniswapV2Pair \r\n    - [Ext] name\r\n    - [Ext] symbol\r\n    - [Ext] decimals\r\n    - [Ext] totalSupply\r\n    - [Ext] balanceOf\r\n    - [Ext] allowance\r\n    - [Ext] approve #\r\n    - [Ext] transfer #\r\n    - [Ext] transferFrom #\r\n    - [Ext] DOMAIN_SEPARATOR\r\n    - [Ext] PERMIT_TYPEHASH\r\n    - [Ext] nonces\r\n    - [Ext] permit #\r\n    - [Ext] MINIMUM_LIQUIDITY\r\n    - [Ext] factory\r\n    - [Ext] token0\r\n    - [Ext] token1\r\n    - [Ext] getReserves\r\n    - [Ext] price0CumulativeLast\r\n    - [Ext] price1CumulativeLast\r\n    - [Ext] kLast\r\n    - [Ext] mint #\r\n    - [Ext] burn #\r\n    - [Ext] swap #\r\n    - [Ext] skim #\r\n    - [Ext] sync #\r\n    - [Ext] initialize #\r\n\r\n + [Int] IUniswapV2Router01 \r\n    - [Ext] factory\r\n    - [Ext] WETH\r\n    - [Ext] addLiquidity #\r\n    - [Ext] addLiquidityETH ($)\r\n    - [Ext] removeLiquidity #\r\n    - [Ext] removeLiquidityETH #\r\n    - [Ext] removeLiquidityWithPermit #\r\n    - [Ext] removeLiquidityETHWithPermit #\r\n    - [Ext] swapExactTokensForTokens #\r\n    - [Ext] swapTokensForExactTokens #\r\n    - [Ext] swapExactETHForTokens ($)\r\n    - [Ext] swapTokensForExactETH #\r\n    - [Ext] swapExactTokensForETH #\r\n    - [Ext] swapETHForExactTokens ($)\r\n    - [Ext] quote\r\n    - [Ext] getAmountOut\r\n    - [Ext] getAmountIn\r\n    - [Ext] getAmountsOut\r\n    - [Ext] getAmountsIn\r\n\r\n + [Int] IUniswapV2Router02 (IUniswapV2Router01)\r\n    - [Ext] removeLiquidityETHSupportingFeeOnTransferTokens #\r\n    - [Ext] removeLiquidityETHWithPermitSupportingFeeOnTransferTokens #\r\n    - [Ext] swapExactTokensForTokensSupportingFeeOnTransferTokens #\r\n    - [Ext] swapExactETHForTokensSupportingFeeOnTransferTokens ($)\r\n    - [Ext] swapExactTokensForETHSupportingFeeOnTransferTokens #\r\n\r\n +  DIGICHAIN (Context, IERC20, Ownable)\r\n    - [Pub]  #\r\n    - [Pub] name\r\n    - [Pub] symbol\r\n    - [Pub] decimals\r\n    - [Pub] totalSupply\r\n    - [Pub] balanceOf\r\n    - [Pub] transfer #\r\n    - [Pub] allowance\r\n    - [Pub] approve #\r\n    - [Pub] transferFrom #\r\n    - [Pub] increaseAllowance #\r\n    - [Pub] decreaseAllowance #\r\n    - [Pub] isExcludedFromReward\r\n    - [Pub] totalFees\r\n    - [Pub] deliver #\r\n    - [Pub] reflectionFromToken\r\n    - [Pub] tokenFromReflection\r\n    - [Pub] excludeFromReward #\r\n       - modifiers: onlyOwner\r\n    - [Ext] includeInReward #\r\n       - modifiers: onlyOwner\r\n    - [Prv] _transferBothExcluded #\r\n    - [Pub] excludeFromFee #\r\n       - modifiers: onlyOwner\r\n    - [Pub] includeInFee #\r\n       - modifiers: onlyOwner\r\n    - [Ext] setTaxFeePercent #\r\n       - modifiers: onlyOwner\r\n    - [Ext] setMarketingFeePercent #\r\n       - modifiers: onlyOwner\r\n    - [Ext] setLiquidityFeePercent #\r\n       - modifiers: onlyOwner\r\n    - [Ext] setMaxTxPercent #\r\n       - modifiers: onlyOwner\r\n    - [Pub] setSwapAndLiquifyEnabled #\r\n       - modifiers: onlyOwner\r\n    - [Ext]  ($)\r\n    - [Prv] _reflectFee #\r\n    - [Prv] _getValues\r\n    - [Prv] _getTValues\r\n    - [Prv] _getRValues\r\n    - [Prv] _getRate\r\n    - [Prv] _getCurrentSupply\r\n    - [Prv] _takeLiquidity #\r\n    - [Prv] _takeMarketing #\r\n    - [Prv] calculateTaxFee\r\n    - [Prv] calculateMarketingFee\r\n    - [Prv] calculateLiquidityFee\r\n    - [Prv] removeAllFee #\r\n    - [Prv] restoreAllFee #\r\n    - [Pub] isExcludedFromFee\r\n    - [Prv] _approve #\r\n    - [Prv] _transfer #\r\n    - [Prv] swapAndLiquify #\r\n       - modifiers: lockTheSwap\r\n    - [Prv] swapTokensForEth #\r\n    - [Prv] addLiquidity #\r\n    - [Prv] _tokenTransfer #\r\n    - [Prv] _transferStandard #\r\n    - [Prv] _transferToExcluded #\r\n    - [Prv] _transferFromExcluded #\r\n							\r\n', '<!-- TradingView Widget BEGIN -->\r\n<div class=\"tradingview-widget-container\">\r\n  <div id=\"tradingview_52e8c\"></div>\r\n  <div class=\"tradingview-widget-copyright\"><a href=\"https://id.tradingview.com/symbols/DIGICHAINWBNB_0E3E69/?exchange=PANCAKESWAP\" rel=\"noopener\" target=\"_blank\"><span class=\"blue-text\">Chart DIGICHAINWBNB_0E3E69</span></a> oleh TradingView</div>\r\n  <script type=\"text/javascript\" src=\"https://s3.tradingview.com/tv.js\"></script>\r\n  <script type=\"text/javascript\">\r\n  new TradingView.widget(\r\n  {\r\n  \"autosize\": true,\r\n  \"symbol\": \"PANCAKESWAP:DIGICHAINWBNB_0E3E69\",\r\n  \"interval\": \"D\",\r\n  \"timezone\": \"Etc/UTC\",\r\n  \"theme\": \"light\",\r\n  \"style\": \"1\",\r\n  \"locale\": \"id\",\r\n  \"toolbar_bg\": \"#f1f3f6\",\r\n  \"enable_publishing\": false,\r\n  \"allow_symbol_change\": true,\r\n  \"container_id\": \"tradingview_52e8c\"\r\n}\r\n  );\r\n  </script>\r\n</div>\r\n<!-- TradingView Widget END -->', '2023-05-02', 'PHP', 99, 'da877e215775a170970c6a2f10f0f448.png', 'e8674aca5f2f0ed1d87e1940f9f7c70e.png', 6, 0, '#', 'http://localhost/audit/', 'http://localhost/audit/home/detail/6', 'http://localhost/phpmyadmin/index.php?route=/table/structure&db=db_cms&table=tb_project', 'http://localhost/audit/admin/project/edit/6', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `email`, `password`, `role`) VALUES
(3, 'Admin', 'admin@website.com', '$2y$10$afazxYvzLsx3rCQPS68KaOjiUXbuwEfRoI6z/zCY5lLfxqf/vyXt6', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visitor`
--

CREATE TABLE `tb_visitor` (
  `tanggal` date NOT NULL,
  `visitor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_visitor`
--

INSERT INTO `tb_visitor` (`tanggal`, `visitor`) VALUES
('2022-12-12', 124),
('2022-12-13', 14),
('2022-12-14', 18),
('2022-12-15', 12),
('2022-12-16', 45),
('2022-12-17', 55),
('2022-12-18', 17),
('2022-12-19', 21),
('2023-02-20', 2),
('2023-03-02', 1),
('2023-03-08', 7),
('2023-05-02', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_website`
--

CREATE TABLE `tb_website` (
  `id_web` int NOT NULL,
  `nama_website` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_web` text COLLATE utf8mb4_general_ci NOT NULL,
  `title_website` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_deskripsi` text COLLATE utf8mb4_general_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_general_ci NOT NULL,
  `meta_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `max_post` int NOT NULL,
  `robots_txt` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `discord` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `logo_header_ui` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `logo_header_ux` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_ux` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_footer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_website`
--

INSERT INTO `tb_website` (`id_web`, `nama_website`, `deskripsi_web`, `title_website`, `meta_deskripsi`, `meta_keywords`, `meta_title`, `max_post`, `robots_txt`, `twitter`, `discord`, `facebook`, `telegram`, `youtube`, `tiktok`, `favicon`, `logo_header_ui`, `logo_header_ux`, `title_ux`, `deskripsi_footer`) VALUES
(1, 'Audit', 'security assessment of your smart contract', 'Security Audit', 'bagi-bagi source code, download source code, source code gratis, download website, berbagi website, cara membuat website', 'php, html, css, codeigniter, linux, windows, processor, ram, rom, akun, jualbeli', 'download source code php, download source code pemograman web sekolah, download website kasir', 0, '', 'https://twitter.com/home', 'https://discord.com/download', 'https://facebook.com/', 'https://web.telegram.org/', 'https://youtube.com/', 'https://tiktok.com/', '41c7f751188bd2065ef510950edb2a8c.png', '1e6499725b20a0bd5a18e5208574a6df.png', '5339e561f3b379250dd7e650a62358b8.png', 'Audits', 'A comprehensive security assessment of your smart contract and blockchain code to identify vulnerabilities and recommend ways to fix them.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indeks untuk tabel `tb_website`
--
ALTER TABLE `tb_website`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id_project` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_website`
--
ALTER TABLE `tb_website`
  MODIFY `id_web` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
