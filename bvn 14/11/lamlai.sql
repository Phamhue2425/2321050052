CREATE DATABASE IF not EXISTS quan_ly_web_phim;
USE quan_ly_web_phim;

-- 1. Bảng thể loại
CREATE TABLE IF not EXISTS the_loai(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai VARCHAR(50)
);

-- 2. Bảng vai trò
CREATE TABLE IF not EXISTS vai_tro(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_vai_tro VARCHAR(20)
);

-- 3. Bảng quốc gia
CREATE TABLE IF not EXISTS quoc_gia(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_quoc_gia VARCHAR(50)
);

-- 4. Bảng người dùng
CREATE TABLE IF not EXISTS nguoi_dung(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR(50),
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt VARCHAR(10),
    ten_vai_tro INT ,
    ngay_sinh DATETIME,
    FOREIGN KEY (ten_vai_tro) REFERENCES vai_tro(id)
);

-- 5. Bảng phim
CREATE TABLE IF  NOT EXISTS phim(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_phim VARCHAR(100),
    dao_dien INT,
    nam_phat_hanh INT,
    poster VARCHAR(255),
    ten_quoc_gia INT,
    so_tap INT,
    trailer VARCHAR(255),
    mo_ta TEXT,
    FOREIGN KEY (ten_quoc_gia) REFERENCES quoc_gia(id),
    FOREIGN KEY (dao_dien) REFERENCES nguoi_dung(id)
);

-- 6. Bảng phim diễn viên
CREATE TABLE IF not EXISTS phim_dien_vien(
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT,
    dien_vien INT,
    FOREIGN KEY (phim_id) REFERENCES phim(id),
    FOREIGN KEY (dien_vien) REFERENCES nguoi_dung(id)
);

-- 7. Bảng phim thể loại
CREATE TABLE IF NOT EXISTS phim_the_loai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT,
    the_loai_id INT,
    FOREIGN KEY (phim_id) REFERENCES phim(id),
    FOREIGN KEY (the_loai_id) REFERENCES the_loai(id)
);

-- 8. Tập phim
CREATE TABLE IF not EXISTS tap_phim(
    id INT AUTO_INCREMENT PRIMARY KEY,
    so_tap INT,
    tieu_de VARCHAR(255),
    phim_id INT,
    thoi_luong float,
    trailer VARCHAR(255),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
);


-- Thêm dữ liệu
-- 1. the_loai
INSERT INTO the_loai(ten_the_loai) VALUES
('Hài'),
('Hoạt hình'),
('Anime'),
('Kinh dị'),
('Tình cảm'),
('Viễn tưởng'),
('Học đường');

-- 2. vai_tro
INSERT INTO vai_tro(ten_vai_tro) VALUES
('Người dùng'),
('Diễn viên'),
('Admin'),
('Đạo diễn');

-- 3. quoc_gia
INSERT INTO quoc_gia(ten_quoc_gia) VALUES('Việt Nam'),('Trung Quốc'),('Nhật Bản'),('Lào'),('Hàn Quốc'),('Anh'),('Campuchia'),('Ý'),('Mỹ'),('Nga'),('Ấn Độ');

-- 4. nguoi_dung
INSERT INTO nguoi_dung(ten_dang_nhap, mat_khau, ho_ten, email, sdt, ten_vai_tro) VALUES
('phamhue','15356','phạm huế','ph245@gmail.com','0836225345',3),
('limai','13553','lí mai','lm463@gmail.com','0372674637',1),
('nguyentuan','14638','nguyễn tuấn','lm463nt738@gmail.com','0352783644',1),
('phamthanh','14728','phạm thanh','pt728@gmail.com','0372586423',1),
('nguyenvan','38832','nguyễn văn','nv462@gmail.com','0835462734',1),
('lele','18374','lê lệ','ll748@gmail.com','0472835472',1),
('thuynga','28374','thúy nga','tn836@gmail.com','0472819374',4),
('thuquyen','38465','thu quyên','tq891@gmail.com','0361836475',1),
('halinh','28465','hà linh','hl935@gmail.com','0936283648',1),
('kieuvy','19374','kiều vy','kv945@gmail.com','0364758392',4),
('quocanh','27648','quốc anh','qa023@gmail.com','0463728394',1),
('nguyenthuy','23647','nguyễn thúy','nt864@gmail.com','0274927485',4),
('vangiap','27364','văn giáp','vg135@gmail.com','0236483924',1),
('phamphuong','18374','phạm phương','pp482@gmail.com','0374629345',1),
('caothao','18364','cao thảo','vt783@gmail.com','0462836494',3),
('quoctoan','26384','quốc toàn','qt965@gmail.com','0384562834',1),
('phamnhai','26384','phạm nhài','pn874@gmail.com','0172637452',1),
('nguyenhue','92745','nguyễn huệ','nh954@gmail.com','0374629374',4),
('thanhhue','19372','thanh huế','th464@gmail.com','0374629473',1),
('caothu','18264','cao thu','ct738@gmail.com','0273472849',3),
('quoctoan','19364','quốc toản','qt462@gmail.com','0246458373',1),
('truonggiang','18364','trường giang','tg836@gmail.com','0462836492',2),
('tranthanh','47627','trấn thành','tt826@gmail.com','0946352836',2),
('vyda','17352','vỹ dạ','vd837@gmail.com','0364826492',2),
('truongvinh','37458','trường vinh','tv084@gmail.com','0263846294',3),
('baongoc','18463','bảo ngọc','bn728@gmail.com','0374528462',1),
('phamngan','19463','phạm ngân','pn364@gmail.com','0374629472',1),
('ngocanh','27462','ngọc ánh','na637@gmail.com','0468326492',1),
('thuhang','18463','thu hằng','th274@gmail.com','0463829847',1),
('phamlinh','18473','phạm linh','pl738@gmail.com','0472856294',4),
('thuuyen','74839','thu uyên','tu364@gmail.com','0846254728',1);

-- 5. phim
INSERT INTO phim (ten_phim, dao_dien, nam_phat_hanh, ten_quoc_gia, so_tap, trailer, mo_ta, the_loai_id) VALUES 
('Bố Già', 23, 2021, 1, 1, 'https://youtu.be/oA-BhGNK7qw?si=z4XpiJb-3w2jYh3t', 'Phim điện ảnh Việt Nam về tình cha con.', 5),
('Ký Sinh Trùng', 24, 2019, 5, 1, 'https://youtu.be/qqvzkRKP_08?si=dDlzJVbRY0mcBucC', 'Phim Hàn Quốc đoạt giải Oscar về khoảng cách giàu nghèo.', 4),
('Tenet', 25, 2020, 9, 1, 'https://youtu.be/ReosxgnJmL8?si=msJ8fKGYkmvT4v-k', 'Phim hành động khoa học viễn tưởng của Christopher Nolan.', 6),
('Hoàng Hôn Trên Sông', 26, 1994, 2, 10, 'https://youtu.be/jx7Hal0wwBw?si=Qa_CCaLIhStDPele', 'Phim truyền hình lãng mạn Trung Quốc.', 5),
('Lật Mặt 6: Tấm Vé Định Mệnh', 23, 2023, 1, 1, 'https://youtu.be/xewwOKavgdI?si=KjkjhOOCvyp7YSwe', 'Phim hài hành động của Lý Hải.', 1),
('Vagabond', 24, 2019, 5, 16, 'https://youtu.be/fixYVa1GjkQ?si=J-lw4TynOrAMNmR2', 'Phim hành động điều tra Hàn Quốc.', 6),
('The Witcher', 25, 2019, 6, 8, 'https://youtu.be/-uF9NA5vhko?si=tQ0_mrPuPDBvsvFs', 'Loạt phim giả tưởng dựa trên tiểu thuyết.', 6),
('Lang Nha Bảng', 26, 2015, 2, 54, 'https://youtu.be/szi-W9l3xSk?si=ebLe_Iyyb8ZN6wcQ', 'Phim cổ trang Trung Quốc được đánh giá cao.', 5),
('Hai Phượng', 23, 2019, 1, 1, 'https://youtu.be/kFfDFN0xvrw?si=MHlCfCIQcXTzL4Ph', 'Phim võ thuật hành động của Ngô Thanh Vân.', 6),
('Squid Game', 24, 2021, 5, 9, 'https://youtu.be/GNASfI2ivAA?si=jfm_irFX7MiGcYH2', 'Loạt phim sinh tồn nổi tiếng toàn cầu.', 4),
('Dune: Part One', 25, 2021, 9, 1, 'https://youtu.be/5cgVDFYmUM4?si=q2LmYRsXWVN6RsLQ', 'Phim khoa học viễn tưởng hoành tráng.', 6),
('Trần Tình Lệnh', 26, 2019, 2, 50, 'https://youtu.be/OIT6i9T-9IA?si=PJyVrwfue8Uz9EpV', 'Phim cổ trang kiếm hiệp nổi tiếng.', 5),
('Mắt Biếc', 23, 2019, 1, 1, 'https://youtu.be/QDY4Gy_4eYw?si=2bhIIcCaUak0N-_N', 'Phim tình cảm lãng mạn dựa trên truyện Nguyễn Nhật Ánh.', 5),
('Reply 1988', 24, 2015, 5, 20, 'https://youtu.be/aYm_mtb4NQo?si=Y_x7NMErNQE3Uz0H', 'Phim truyền hình Hàn Quốc ấm áp về gia đình.', 5),
('Inception', 25, 2010, 9, 1, 'https://youtu.be/P-BBYznfOCc?si=aYPQLzj7JSYRhOjj', 'Phim khoa học viễn tưởng về giấc mơ.', 6),
('Tam Sinh Tam Thế: Thập Lý Đào Hoa', 26, 2017, 2, 58, 'https://youtu.be/9LtIgUukgW0?si=fe2Lkl-UZqAsMkQa', 'Phim tiên hiệp lãng mạn Trung Quốc.', 5),
('Tiệc Trăng Máu', 23, 2020, 1, 1, 'https://youtu.be/GnT6IOfJPG8?si=QZYpYCtBpjiwOPLA', 'Phim hài đen dựa trên Perfect Strangers.', 1),
('Kingdom', 24, 2019, 5, 6, 'https://youtu.be/jmNgdP8uqT8?si=39Nq7MszdkAunKpS', 'Phim xác sống thời Joseon.', 4),
('Interstellar', 25, 2014, 9, 1, 'https://youtu.be/CLoi1VWB-bw?si=m2vR25q-_RNCR601', 'Phim khoa học viễn tưởng khám phá không gian.', 6),
('Hậu Duệ Mặt Trời', 24, 2016, 5, 16, 'https://youtu.be/HuzDkEq1iGw?si=78KkTYUJ--8IO2Mm', 'Phim tình cảm quân đội Hàn Quốc.', 5),
('Gái Già Lắm Chiêu 3', 23, 2020, 1, 1, 'https://youtu.be/BH6KgvLKpwM?si=ONhCu1_JXrUVn3Gq', 'Phim hài kịch tình huống Việt Nam.', 1),
('Hospital Playlist', 24, 2020, 5, 12, 'https://youtu.be/7qQLO007Km0?si=lacuK8hiEY2e_knW', 'Phim y khoa về tình bạn.', 5),
('The Dark Knight', 25, 2008, 9, 1, 'https://youtu.be/fap07Hh7pSI?si=QjQh6678t1zL9LCE', 'Phim siêu anh hùng kinh điển.', 6),
('Minh Lan Truyện', 26, 2018, 2, 73, 'https://youtu.be/AUNbxSTLuSA?si=VQsNm1_YvegQLzNH', 'Phim cổ trang về cuộc đời một cô gái.', 5),
('Em Và Trịnh', 23, 2022, 1, 1, 'https://youtu.be/Qel2elMpdwQ?si=YlFtoe-ZYYpxt-6v', 'Phim tiểu sử về nhạc sĩ Trịnh Công Sơn.', 5),
('Crash Landing On You', 24, 2019, 5, 16, 'https://youtu.be/O3Lpflwj5yg?si=VS9kS2gXuYx_sOjh', 'Phim lãng mạn vượt biên giới.', 5),
('Avatar', 25, 2009, 9, 1, 'https://youtu.be/q7dSelNAkj0?si=q-sIC826x3NQZYyn', 'Phim khoa học viễn tưởng 3D.', 6),
('Sở Kiều Truyện', 26, 2017, 2, 58, 'https://youtu.be/cqM_HFH3ueg?si=_Gq0kODg7P6RBXZv', 'Phim cổ trang kiếm hiệp.', 5),
('Đêm Tối Rực Rỡ!', 23, 2022, 1, 1, 'https://youtu.be/-FgEjN1p8SM?si=jBV5DQdFlyb-5Jhw', 'Phim tâm lý xã hội Việt Nam.', 5),
('Alice in Borderland', 24, 2020, 3, 8, 'https://youtu.be/v-92I1wtJV4?si=Q16l34S7gjgalREV', 'Phim sinh tồn Nhật Bản.', 6);

-- 6. phim_the_loai
INSERT INTO phim_the_loai (phim_id, the_loai_id) VALUES
(1,1),(1,2),
(2,2),(2,3),
(3,2),
(4,1),
(5,5),
(6,5),
(7,1),(7,9),
(8,7),
(9,5),
(10,2),(10,9),
(11,1),
(12,4),
(13,7),
(14,2),
(15,3),
(16,1),
(17,5),
(18,7),
(19,1),(19,5),
(20,2),
(21,1),
(22,3),
(23,7),
(24,4),
(25,2),
(26,1),
(27,5),
(28,7),
(29,1),
(30,2);


-- 7. phim_dien_vien
INSERT INTO phim_dien_vien (phim_id, dien_vien) VALUES
(1,12),(1,13),
(2,13),(2,14),
(3,14),(3,15),
(4,15),(4,16),
(5,16),(5,17),
(6,17),(6,18),
(7,18),(7,19),
(8,19),(8,20),
(9,20),(9,21),
(10,21),(10,22),
(11,22),(11,23),
(12,23),(12,24),
(13,24),(13,25),
(14,25),(14,26),
(15,26),(15,27),
(16,27),(16,28),
(17,28),(17,29),
(18,29),(18,30),
(19,12),(19,13),
(20,14),(20,15),
(21,16),(21,17),
(22,18),(22,19),
(23,20),(23,21),
(24,22),(24,23),
(25,24),(25,25),
(26,26),(26,27),
(27,28),(27,29),
(28,30),(28,12),
(29,13),(29,14),
(30,15),(30,16);

-- 8. tap_phim
INSERT INTO tap_phim (so_tap, tieu_de, phim_id, thoi_luong, trailer) VALUES
(1,'Phim 1 - Tap 1',1,90,'https://example.com/trailer/p1_t1'),
(2,'Phim 1 - Tap 2',1,92,'https://example.com/trailer/p1_t2'),
(3,'Phim 1 - Tap 3',1,88,'https://example.com/trailer/p1_t3'),

(1,'Phim 2 - Tap 1',2,45,'https://example.com/trailer/p2_t1'),
(2,'Phim 2 - Tap 2',2,47,'https://example.com/trailer/p2_t2'),
(3,'Phim 2 - Tap 3',2,44,'https://example.com/trailer/p2_t3'),

(1,'Phim 3 - Tap 1',3,50,'https://example.com/trailer/p3_t1'),
(2,'Phim 3 - Tap 2',3,51,'https://example.com/trailer/p3_t2'),
(3,'Phim 3 - Tap 3',3,49,'https://example.com/trailer/p3_t3'),

(1,'Phim 4 - Tap 1',4,40,'https://example.com/trailer/p4_t1'),
(2,'Phim 4 - Tap 2',4,42,'https://example.com/trailer/p4_t2'),
(3,'Phim 4 - Tap 3',4,41,'https://example.com/trailer/p4_t3'),

(1,'Phim 5 - Tap 1',5,60,'https://example.com/trailer/p5_t1'),
(2,'Phim 5 - Tap 2',5,62,'https://example.com/trailer/p5_t2'),
(3,'Phim 5 - Tap 3',5,59,'https://example.com/trailer/p5_t3');