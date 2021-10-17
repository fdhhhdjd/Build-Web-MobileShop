-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2020 at 09:55 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanly_ban_sua`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `So_hoa_don` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ma_sua` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `So_luong` int NOT NULL,
  `Don_gia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`So_hoa_don`, `Ma_sua`, `So_luong`, `Don_gia`) VALUES
('D001', 'AB0001', 2, 107000),
('D001', 'DL0001', 12, 41000),
('D001', 'NTF002', 8, 45000),
('D001', 'VNM012', 4, 103500),
('D002', 'DL0001', 2, 41000),
('D002', 'MJ0001', 5, 196000),
('D002', 'MJ0004', 3, 198000),
('D003', 'AB0001', 8, 107000),
('D003', 'AB0003', 17, 87000),
('D003', 'DL0006', 13, 11500),
('D004', 'AB0001', 15, 107000),
('D004', 'AB0002', 25, 107000),
('D004', 'NTF001', 10, 46500),
('D004', 'VNM012', 8, 103500);

-- --------------------------------------------------------

--
-- Table structure for table `hang_sua`
--

CREATE TABLE `hang_sua` (
  `Ma_hang_sua` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_hang_sua` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_sua`
--

INSERT INTO `hang_sua` (`Ma_hang_sua`, `Ten_hang_sua`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES
('AB', 'Abbott', 'Khu công nghiệp Biên Hòa - Đồng Nai', '8741258', 'abbott@ab.com'),
('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa - Đồng Nai', '7826451', 'dutchlady@dl.com'),
('DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', '6258943', 'dumex@dm.com'),
('DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', '5789321', 'daisy@ds.com'),
('MJ', 'Mead Jonhson', 'Công ty nhập khẩu Việt Nam', '8741258', 'meadjohn@mj.com'),
('NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `So_hoa_don` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_HD` date NOT NULL,
  `Ma_khach_hang` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Tri_gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`So_hoa_don`, `Ngay_HD`, `Ma_khach_hang`, `Tri_gia`) VALUES
('D001', '0000-00-00', 'kh001', 1480000),
('D002', '0000-00-00', 'kh002', 1656000),
('D003', '0000-00-00', 'kh003', 2484500),
('D004', '0000-00-00', 'kh002', 5573000);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `Ma_khach_hang` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_khach_hang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phai` tinyint(1) NOT NULL,
  `Dia_chi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES
('kh001', 'Khuất Thùy Phương', 1, 'A21 Nguyễn Oanh quận Gò Vấp', '9874125', 'ktphuong@hcmuns.edu.vn'),
('kh002', 'Đỗ Lâm Thiên', 0, '357 Lê Hồng Phong Q.10 ', '8351056', 'dlthien@hcmuns.edu.vn'),
('kh003', 'Phạm Thị Nhung', 1, '56 Đinh Tiên Hoàng quận 1', '9745698', 'ptnhung@hcmuns.edu.vn'),
('kh004', 'Nguyễn Khắc Thiện', 0, '12bis Đường 3-2 quận 10', '8769128', 'nkthien@hcmuns.edu.vn'),
('kh005', 'Tô Trần Hồ Giảng', 0, '75 Nguyễn Kiệm quận Gò Vấp', '5792564', 'tthgiang@hcmuns.edu.vn'),
('kh006', 'Nguyễn Kiến Thi', 1, '357 Lê Hồng Phong Q.10 ', '9874125', 'nkthi@hcmuns.edu.vn'),
('kh007', 'Trần Quốc Thông', 0, '123 Trần Hưng Đạo', '8754123', 'TQThong@hcmuns.edu.vn'),
('kh008', 'Nguyễn Anh Tuấn', 0, '1/2bis Nơ Trang Long Q.BT TP.HCM', '8753159', 'natuan@hcmuns.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `loai_sua`
--

CREATE TABLE `loai_sua` (
  `Ma_loai_sua` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_loai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_sua`
--

INSERT INTO `loai_sua` (`Ma_loai_sua`, `Ten_loai`) VALUES
('SB', 'Sữa bột'),
('SC', 'Sữa chua'),
('SD', 'Sữa đặc'),
('ST', 'Sữa tươi');

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE `sua` (
  `Ma_sua` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_sua` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ma_hang_sua` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ma_loai_sua` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Trong_luong` int NOT NULL,
  `Don_gia` int NOT NULL,
  `TP_Dinh_Duong` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Loi_ich` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sua`
--

INSERT INTO `sua` (`Ma_sua`, `Ten_sua`, `Ma_hang_sua`, `Ma_loai_sua`, `Trong_luong`, `Don_gia`, `TP_Dinh_Duong`, `Loi_ich`, `Hinh`) VALUES
('AB0001', 'Gain Advance', 'AB', 'SB', 400, 107000, 'Sữa không béo, dầu thực vật, đường lactose, đường sucrose, hương liệu vani nhân tạo, các vitamin và khoáng chất cần thiết, nucleotide và taurine.', 'Sữa bột Gain Advance sữa bột tiếp theo giàu đạmTPAN & Taurine giúp hỗ trợ quá trình phát triển hệ thống miễn dịch và não bộ của bé', 's_abbott_gainadvance_bot_400.jpg'),
('AB0002', 'Gain IQ', 'AB', 'SB', 400, 107000, 'GAIN IQ có nguồn đạm chất lượng cao, hỗn hợp dầu thực vật chức các axit béo thiết yếu, chất bột đường, các Vitamin và khoáng chất , bảo vệ hệ tiêu hóa tốt hơn nhờ sự bổ sung FOS và Probiotic', 'Nhằm thúc đẩy sự tăng trưởng của trẻ và đảm bảo năng lượng cần thiết đối với trẻ năng động. Hỗn hợp dưỡng chất độc đáo hỗ trợ sự phát triển não bộ và thị giác của trẻ', 's_abbott_ganiq.jpg'),
('AB0003', 'Abbott Grow', 'AB', 'SB', 400, 87000, 'Sữa toàn phần, sữa bột không béo, mật bắp, đường lactose, đường sucrose, hương liệu vani nhân tạo, vitamin, khoáng chất, taurine... ', 'Sữa bột GROW được đặc chế và gia tăng thêm các loại Vitamin, khoáng chất, và các nguyên tố siêu vi lượng cần thiết cho khẩu phần ăn. Sữa bột GROW bổ sung các nhu cầu dinh dưỡng giúp cho việc tăng tr', 's_abbott_grow_400.jpg'),
('AB0004', 'Abbott Grow School', 'AB', 'SB', 400, 87000, 'Năng lượng, taurine, choline, canxi, khoáng chất', 'Sữa dinh dưỡng cho trẻ từ 6 tháng tuổi trở lên. Bổ xung choline đóng vai trò quan trọng trong việc phát triển trí não & trí nhớ.', 's_abbott_school_bot_400.jpg'),
('AB0005', 'Abbott Pedia Sure', 'AB', 'SB', 400, 146000, 'Các dưỡng chất và PEDIASURE với Synbiotics và MCT', 'cung cấp nguồn dinh dưỡng đầy đủ và cân đối cho trẻ từ 1 đến 10 tuổi. Có thể dùng PEDIASURE như nguồn dinh dưỡng thay thế bữa ăn hay để bổ sung dưỡng chất giúp trẻ ăn đầy đủ hơn. ', 's_abbott_PediaSure_bot_400.jpg'),
('AB0006', 'Similac Neo Sure', 'AB', 'SB', 370, 145000, 'hứa LCPUFA (axít béo không no, chuỗi dài và nhiều nối đôi - AA & DHA) -Similac Neosure chứa TPAN (tổng toàn bộ Nucleotide) với hàm lượng 72mg/1', '- Giúp cải thiện đáng kể sự phát triển thị giác và não bộ ở trẻ thiếu tháng khi cho trẻ dùng liên tục trong 12 tháng - Giúp tăng cường sự phát triển hệ thống miễn dịch của bé nhờ gia tăng hàm lượng', 's_abbott_similac_400.jpg'),
('DL0001', 'Sữa bột nguyên kem Cô Gái Hà Lan', 'DL', 'SD', 400, 41000, 'chất dinh dưỡng, vitamin và khoáng chất, đặc biệt công thức Active-Care giàu hàm lượng canxi & cholin, Protein, Vitamin B2, Cholin', 'Cung cấp cho cơ thể đầy đủ dưỡng chất', 's_dutchlady_bot_giay_400.jpg'),
('DL0002', 'Canximex', 'DL', 'SB', 900, 106000, '- Sữa giàu canxi, ít béo Calcimex với hương vị thơm ngon là nguồn cung cấp canxi rất tốt. - Thêm vào đó, Calcimex còn chứa phốt pho, vitamin D và các nguyên tố vi lượng khác. - Với công thức ít béo, Calcime', '- Giúp giảm thiểu nguy cơ mất xương, phòng ngừa loãng xương hiệu quả - Cho bạn vóc dáng lý tưởng mà bạn hằng ao ước. ', 's_dutchlady_canximex_900.jpg'),
('DL0003', 'Friso', 'DL', 'SB', 400, 52000, '- Bổ sung các dinh dưỡng cần thiết như: nucleotides, beta-caroten, selen, prebiotics, probiotics, DHA, AA, SA, Choline, Sphingomyelin… o Nucleotides, beta-caroten, selen, prebiotics và probiotics giúp tăng cường hệ miễn dịch. - ', '- Giúp tăng cường hệ miễn dịch và phát triển trí não cho bé, giúp bé không ngừng khám phá và học hỏi từ thế giới xung quanh. - Giúp phát triễn trí não. ', 's_dutchlady_friso_400.jpg'),
('DL0004', 'Cô Gái Hà Lan 123', 'DL', 'SB', 400, 52600, 'Cô Gái Hà Lan 123 là nhãn hiệu sữa duy nhất cung cấp 2 dưỡng chất Tryptophan và Tyrosine theo tỷ lệ T-T ratio đặc biệt giúp trẻ tiếp thu nhanh và học hiệu quả bên cạnh các thành phần phát triển trí não k', 'Giúp hệ thần kinh của trẻ minh mẫn để tiếp thu thông tin hiệu quả nhất.', 's_dutchlady_123_bot.jpg'),
('DL0005', 'Cô Gái Hà Lan 456', 'DL', 'SB', 400, 49500, 'Cô Gái Hà Lan 456 là nhãn hiệu sữa duy nhất cung cấp 2 dưỡng chất Tryptophan và Tyrosine theo tỷ lệ T-T ratio đặc biệt giúp trẻ tiếp thu nhanh và học hiệu quả bên cạnh các thành phần phát triển trí não k', 'Giúp hệ thần kinh của trẻ minh mẫn để tiếp thu thông tin hiệu quả nhất.', 's_dutchlady_bot_giay_456_400.jpg'),
('DL0006', 'Sữa đặc Trường Sinh', 'DL', 'SD', 360, 11500, 'Được chế biến từ sữa bò cao cấp, bột sữa, chất béo, đường tinh chế; với vị ngọt và béo đặc biệt', 'Đáp ứng mọi nhu cầu sử dụng: khuấy với nước ấm, lạnh để uống, dùng với cà phê, bánh mì hay làm bánh, làm sữa chua', 's_dutchlady_dac_truong_sinh.jpg'),
('DL0007', 'Sữa đặc Hoàn Hảo', 'DL', 'SD', 360, 9800, 'Được chế biến từ sữa bò, bột sữa, đường tinh chế và dầu thực vật chất lượng cao', 'Mang đến cho bạn hương vị ngọt dịu và béo mỗi khi pha với cà phê, làm cho ly cà phê của bạn thật thơm ngon và hấp dẫn', 's_dutchlady_dac_hoan_hao.jpg'),
('DL0008', 'Sữa chua Cô Gái Hà Lan', 'DL', 'SC', 100, 3000, 'Cung cấp đầy đủ các chất dinh dưỡng ', 'Đặc biệt không sử dụng chất bảo quản, với vị ngọt dịu hấp dẫn, sữa chua Cô Gái Hà Lan mang lại cho bạn làn da mịn màng, hệ tiêu hóa và sức khỏe thật tốt. ', 's_dutchlady_chua.jpg'),
('DL0009', 'Sữa tươi tiệt trùng Cô Gái Hà Lan', 'DL', 'ST', 180, 3500, 'Với hương vị tươi ngon, cùng công thức Active Care cung cấp những dưỡng chất cần thiết ', 'Giúp bạn luôn năng động và khỏe mạnh, sữa tiệt trùng Cô Gái Hà Lan giúp bạn tràn đầy sức sống, sẵn sàng đón nhận và tận hưởng một cuộc sống vui tươi.', 's_dutchlady_tuoi.jpg'),
('DL0010', 'Sữa chua uống Cô Gái Hà Lan', 'DL', 'SC', 110, 2500, 'Vị chua ngọt thơm ngon và hấp dẫn', 'Giúp trẻ luôn vui tươi và năng động để khám phá thế giới xung quanh', 's_dutchlady_chua_uong.jpg'),
('DL0011', 'Fristi', 'DL', 'ST', 180, 3600, 'Can xi, đạm, vitamin, các khóang chất. DHA', 'giúp bạn luôn có làn da mịn màng, cơ thể cân đối, dáng vẻ trẻ trung và tinh thần thỏai mái', 's_dutchlady_fristi.jpg'),
('DS0001', 'Daisy Không Đường', 'DS', 'SB', 900, 79000, 'Khoáng chất, taurine, vitamin D3, sắt, đạm...', '- Chống loãng xương, giúp xương chắc khoẻ. - Phòng ngừa sự thiếu máu của trẻ, gia tăng họat động hệ tuần hoàn máu và não, giúp trẻ phát triển hoàn thiện. ', 's_daisy_900.jpg'),
('DS0002', 'Daisy Vani', 'DS', 'SB', 454, 41000, '- Sữa nguyên kem hương vani với hàm lượng canxi và ion cao - Khoáng chất, taurine, vitamin D3, sắt, đạm...', '- Chống loãng xương, giúp xương chắc khoẻ. - Phòng ngừa sự thiếu máu của trẻ, gia tăng họat động hệ tuần hoàn máu và não, giúp trẻ phát triển hoàn thiện. - Giúp hệ xương phát triển mạnh nhất. ', 's_daisy_bot_400.jpg'),
('MJ0001', 'Enfa Mama A+', 'MJ', 'SB', 900, 196000, '- Khoáng chất, taurine, vitamin D3, sắt, đạm... - Các thành phần dinh dưỡng', '- Bổ sung đầy đủ nguồn dinh dưỡng cần thiết giúp bé yêu mau lớn', 's_meadJohnson_mama.jpg'),
('MJ0002', 'EnfaLac', 'MJ', 'SB', 400, 102000, 'Bổ sung DHA, chất sắt ', 'Sữa bột Enfalac giai đoạn 1 cho trẻ từ 0- 6 tháng hỗ trợ sự phát triển não bộ và dưỡng chất thiết yếu cho trẻ.', 's_meadJohnson_enfalac.jpg'),
('MJ0003', 'EnfaGrow', 'MJ', 'SB', 400, 96000, 'Chất đạm, DHA, ARA, Omega, hương mật ong. ', 'Sữa bột Enfagrow giai đoạn 3 có chứa DHA giúp phát triển não bộ. ', 's_meadJohnson_enfagrow.jpg'),
('MJ0004', 'EnfaPro', 'MJ', 'SB', 900, 198000, 'DHA, axit béo, Omega 3 & 6, Omega 9 & Nucleotides. ', 'Sữa Enfapro giai đoạn 2 với công thức Enfapro có DHA, chất cấu tạo não hỗ trợ sự phát triển của não bộ cho trẻ từ 6- 12 tháng tuổi. ', 's_meadJohnson_enfapro.jpg'),
('MJ0005', 'EnfaPro A+', 'MJ', 'SB', 900, 241000, 'Đạm, ARA, DHA, vitamin và khoáng chất. ', 'Sữa Enfapro A+ 2 chứa DHA và ARA hỗ trợ phát triển trí tuệ và thị giác cho trẻ từ 6- 12 tháng tuổi ', 's_meadJohnson_enfaproA.jpg'),
('NTF001', 'Nuti Mum', 'NTF', 'SB', 400, 46500, 'Sữa bột NutiMum giàu dinh dưỡng, cung cấp protein giá trị sinh học cao - Sắt và Axit Folicm, DHA (Docosahexaenoic acid), FOS', 'Đáp ứng nhu cầu dinh dưỡng của phụ nữ trong thời kỳ mang thai và cho con bú', 's_nutifood_mum.jpg'),
('NTF002', 'Obilac', 'NTF', 'SB', 400, 45000, '- Giàu canxi, bổ sung Oligofructose, giàu các dưỡng chất thiết yếu như: đạm giá trị sinh học cao, các vitamin và khoáng chất… - Năng lượng thấp, không cholesterol nên không gây tăng cân và giảm nguy cơ gây b', 'Sữa bột dinh dưỡng không béo giàu canxi Obilac phù hợp cho các đối tượng có nhu cầu canxi cao như: người cao tuổi, người thừa cân, béo phì, người cần kiêng chất béo.', 's_nutifood_obilac.jpg'),
('NTF003', 'Nuti IQ', 'NTF', 'SB', 400, 52000, 'Sữa bột Nuti IQ giàu các yếu tố tăng trưởng như đạm giá trị sinh học cao, vitamin A, D, B2, Canxi,… Đặc biệt, sữa bột dinh dưỡng NutiIQ có bổ sung:Taurine, DHA (Docoxahexaenoic acid), FOS', 'NutiIQ là loại sữa bột dinh dưỡng giúp trẻ phát triển toàn diện, đặc biệt phát triển trí não. NutiIQ thích hợp cho trẻ em từ 1 – 6 tuổi, là lứa tuổi đang hoàn thiện cấu trúc và chức năng của não b', 's_nutifood_nutiIQ.jpg'),
('NTF004', 'Nuti Vita', 'NTF', 'SB', 400, 48500, 'chất đạm giá trị sinh học cao, chất béo, chất đường bột, các vitamin và khoáng chất như Canxi, vitamin D, B2, …', 'giúp trẻ phát triển toàn diện, đặc biệt phát triển chiều cao, rất thích hợp cho trẻ từ 4 tuổi trở lên đồng thời phù hợp cho mọi đối tượng muốn bồi bổ sức khỏe', 's_nutifood_vita.jpg'),
('NTF005', 'Sữa nguyên kem Nuti', 'NTF', 'SB', 400, 39500, 'Sữa bột nguyên kem uống liền Nuti chứa đầy đủ các chất dinh dưỡng như đạm, béo, đường bột, các vitamin và khoáng chất, Vitamin A và vitamin D ', 'giúp cơ thể phát triển thể chất khỏe mạnh và tinh thần minh mẫn', 's_nutifood_nguyen_kem.jpg'),
('NTF006', 'Nuti Vita', 'NTF', 'ST', 200, 3500, 'Axít Folic, DHA (docosahexaenoic acid ), Oligofructose, Sắt, I ốt ', 'Chứa Lysine và Kẽm (là 2 yếu tố thiết yếu hàng đầu cho việc phát triển chiều cao) cùng với các loại vitamin và khoáng chất khác', 's_nutifood_tuoi_vita.jpg'),
('NTF007', 'DiabetCare', 'NTF', 'SB', 400, 48500, '- Thành phần đường bột chứa isomalt, fructose hấp thu chậm - Đạm, vitamin, khoáng chất, Fos', '- Nguồn dinh dưỡng thích hợp cho người bệnh tiểu đường', 's_nutifood_diabetcare.jpg'),
('VNM001', 'Sữa đặc có đường Ông Thọ Trắng', 'VNM', 'SD', 360, 11000, 'Được chế biến từ sữa bò cao cấp, bột sữa, chất béo, đường kính và vitamin A,D,B1 theo tiêu chuẩn quốc tế về giá trị và vệ sinh thực phẩm', 'Uống sữa Ông Thọ mỗi ngày sẽ giúp chống suy dinh dưỡng, giải độc, tăng tuổi thọ, phát triển chiều cao, tăng cường sức đề kháng.', 's_vinamilk_dac_trang.jpg'),
('VNM002', 'Sữa đặc có đường Ngôi Sao Phương Nam', 'VNM', 'SD', 360, 7200, 'Sữa đặc Ngôi Sao Phương Nam với thành phần chất béo dầu thực vật, không chứa Cholesterol rất thích hợp với người lớn tuổi và những người cần hạn chế chất béo động vật', 'Thích hợp pha cà phê, làm bánh và làm yaour. Ly cà phê của bạn sẽ đậm đà và sành điệu hơn với sữa đặc Ngôi Sao Phương Nam. ', 's_vnamilk_ngoi_sao_phuong_nam.jpg'),
('VNM003', 'Sữa tươi tiệt trùng Milk', 'VNM', 'ST', 200, 3500, 'Sữa tươi tiệt trùng MILK được sản xuất từ sữa bò tươi nguyên chất, giàu vitamin và khoáng chất. Hàm lượng canxi trong sữa với tỉ lệ D Ca tối ưu giúp chiều cao phát triển tốt nhất.', 'Đặc biệt sữa tươi tiệt trùng Milk được chế biến theo công thức độc quyền EnerMAX, Công thức EnerMAX là sự phối hợp các vitamin và khoáng chất trong sữa giúp cân bằng năng lượng và tối ưu hóa tỉ lệ các vitamin cần thiết.', 's_vinamilk_nuoc_Milk-S.gif'),
('VNM004', 'Sữa tươi tiệt trùng Vinamilk', 'VNM', 'ST', 200, 3500, 'Cung cấp đầy đủ các vitamin và khoáng chất ', 'Bắt đầu một ngày thật khỏe mạnh với sữa tươi Vinamilk,cần thiết cho sức khoẻ và sự phát triển của cả gia đình', 's_vinamilk_nuoc.jpg'),
('VNM005', 'Sữa chua Plus', 'VNM', 'SC', 120, 4000, 'Sữa chua Vinamilk Plus là sản phẩm sữa chua mới của Vinamilk được bổ sung Canxi, Chất xơ và ít béo. ', 'Tăng cường hấp thu canxi đồng thời đốt cháy lượng mỡ dư. - Trị các bệnh đường tiêu hóa. - Giảm cholesterol, chống béo phì, ngừa ung thư. - Tăng cường hệ miễn dịch của cơ thể. ', 's_vinmilk_chua_PlusS.gif'),
('VNM006', 'Dielac Alpha', 'VNM', 'SB', 900, 110000, 'Gồm COLOSTRUM, DHA và các dưỡng chất hoàn hảo khác', 'Nhằm cung cấp cho trẻ từ sơ sinh một năng lượng sống mạnh mẽ và bảo vệ khỏi những tác nhân gây bệnh trong giai đọan đầu cuộc sống', 's_vnamilk_dielac_alpha.jpg'),
('VNM007', 'Dielac Start', 'VNM', 'SB', 450, 52000, 'Ở giai đoạn này, trẻ vận động và phát triển rất mạnh, vì thế cơ thể cần được bổ sung các thành phần dinh dưỡng, vitamin, khoáng chất một cách đầy đủ, cân đối và tối ưu hóa, đặc biệt là Canxi để phát triển chiều cao.', 'Dielac Star là loại sữa bột cung cấp đầy đủ chất dinh dưỡng cần thiết cho sự phát triển của trẻ từ tờ sơ sinh trở lên.', 's_vinamilk_dielac_start.jpg'),
('VNM008', 'Dielac', 'VNM', 'SB', 450, 48000, 'Oligofructose (FOS):&Inulin Là hỗn hợp chất xơ hòa tan, chiết xuất từ thực vật, có tác dụng đặc biệt làm tăng khả năng hấp thu Canxi, hỗ trợ hệ tiêu hóa, tăng vi khuẩn có lợi cho đường ruột và có tác dụng nhuận tràng. Sắt và vitamin với tỷ lệ tối ưu để phòng ngừa sự thiếu máu của trẻ, gia tăng họat động hệ tuần hoàn máu và não, giúp trẻ phát triển hoàn thiện. I ốt: tăng cường hoạt động tuyến giáp, giúp ngăn ngừa nguy cơ bướu cổ và chậm phát triển. Hàm lượng Canxi cao giúp hệ xương phát triển mạnh nhất ', 'Dielac là loại sữa bột cung cấp đầy đủ chất dinh dưỡng cần thiết cho sự phát triển của trẻ từ sơ sinh trở lên.', 's_vinamilk_dielac.jpg'),
('VNM009', 'Dielac Canxi Premier 2000', 'VNM', 'SB', 400, 51500, 'giàu dinh dưỡng, với hàm lượng Canxi cao và không béo', 'Đóng một vai trò rất quan trọng đối với sức khỏe, đặc biệt trong việc củng cố hệ thống xương, giúp cho rắng vững chắc, điều hòa các hoạt động của cơ bắp, thần kinh, tim, hệ thống nội tiết …', 's_vinamilk_bot_Dielac-Canxi-g-small.gif'),
('VNM010', 'Sữa bột nguyên kem dinh dưỡng', 'VNM', 'SB', 400, 30000, 'Sữa bột Dinh Dưỡng có công thức hoàn hảo với tỉ lệ tối ưu của các thành phần dưỡng chất, cung cấp cho cơ thể đầy đủ chất dinh dưỡng, vitamin và khoáng chất', 'Phù hợp với mọi lứa tuổi, giúp trẻ em tăng trưởng chiều cao, người bệnh khắc phục được tình trạng suy nhược và là nguồn năng lượng dồi dào cho những người hoạt động trí não hoặc có nhu cầu vận động cao.', 's_vinamilk_dd.jpg'),
('VNM011', 'Dielac Sure', 'VNM', 'SB', 400, 90000, 'DielacSURE là sản phẩm dinh dưỡng đặc biệt chứa hàm lượng đạm, béo cao DielacSURE được bổ sung thêm OLIGOFRUCTOSE (F.O.S) là chất xơ hòa tan, được chiết xuất từ thực vật, có tác dụng đặc biệt làm tăng khả năng hấp thụ canxi, hỗ trợ hệ thống tiêu hóa, tăng vi khuẩn có lợi cho đường ruột và có tác dụng nhuận tràng', 'Bổ sung năng lượng và bồi bổ cho cơ thể trong quá trình hoạt động và phát triển. Phục hồi nhanh sức khỏe cho các bệnh nhân, có thể dùng DielacSURE để nuôi ăn qua ống thông (sử dụng theo sự chỉ dẫn của bác sĩ hay chuyên gia dinh dưỡng). Cải thiện tình trạng suy dinh dưỡng. Thích hợp cho phụ nữ mang thai và cho con bú. ', 's_vnamilk_dielac_sure.jpg'),
('VNM012', 'Dielac Mamma', 'VNM', 'SD', 900, 103500, 'Axít Folic, DHA (docosahexaenoic acid ), Oligofructose, Sắt, I ốt ', 'Sữa bột Dielac Mamma được đặc chế để đáp ứng nhu cầu dinh dưỡng cao của phụ nữ mang thai và bà mẹ cho con bú.', 's_vinamilk_bot_mamma.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`So_hoa_don`,`Ma_sua`),
  ADD KEY `Ma_sua` (`Ma_sua`),
  ADD KEY `So_hoa_don` (`So_hoa_don`);

--
-- Indexes for table `hang_sua`
--
ALTER TABLE `hang_sua`
  ADD PRIMARY KEY (`Ma_hang_sua`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`So_hoa_don`),
  ADD KEY `Ma_khach_hang` (`Ma_khach_hang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`Ma_khach_hang`);

--
-- Indexes for table `loai_sua`
--
ALTER TABLE `loai_sua`
  ADD PRIMARY KEY (`Ma_loai_sua`);

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`Ma_sua`),
  ADD KEY `Ma_hang_sua` (`Ma_hang_sua`),
  ADD KEY `Ma_loai_sua` (`Ma_loai_sua`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `ct_hoadon_ibfk_1` FOREIGN KEY (`So_hoa_don`) REFERENCES `hoa_don` (`So_hoa_don`),
  ADD CONSTRAINT `ct_hoadon_ibfk_2` FOREIGN KEY (`Ma_sua`) REFERENCES `sua` (`Ma_sua`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`Ma_khach_hang`) REFERENCES `khach_hang` (`Ma_khach_hang`);

--
-- Constraints for table `sua`
--
ALTER TABLE `sua`
  ADD CONSTRAINT `sua_ibfk_1` FOREIGN KEY (`Ma_loai_sua`) REFERENCES `loai_sua` (`Ma_loai_sua`),
  ADD CONSTRAINT `sua_ibfk_2` FOREIGN KEY (`Ma_hang_sua`) REFERENCES `hang_sua` (`Ma_hang_sua`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
