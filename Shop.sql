create database ShopGiayDep;

use ShopGiayDep;


create table role(
RoleID nvarchar(5) primary key,
RoleName nvarchar(50)
)
insert into role values("nv","Nhân Viên")
insert into role values("chs","Chu shop")
insert into role values("ad","Admin")

create TABLE NCC(
MaNCC nvarchar(5) primary key,
TenNCC nvarchar(20)
)
create TABLE LoaiSp(
MaLoaiSp nvarchar(5) PRIMARY key,
TenLoaiSp nvarchar(20)
)
create TABLE SanPham(
MaSp nvarchar(5) PRIMARY key,
MaLKH nvarchar(5),
MaLoaiSp nvarchar(5),
MaNCC nvarchar(5),
TenSanPham nvarchar(20),
Size int,
SoLuong int,
DonGia int,
HinhAnh MEDIUMBLOB,
FOREIGN key (MaLoaiSp) REFERENCES LoaiSp(MaLoaiSp),
FOREIGN key (MaLKH) REFERENCES loaikh(MaLKH),
FOREIGN key (MaNCC) REFERENCES NCC(MaNCC)
)
create TABLE Sale(
MaSale nvarchar(5) PRIMARY key,
MaSp int,
TenSale nvarchar(20),
GiaTri nvarchar(20),
FOREIGN key (MaSp) REFERENCES SanPham(MaSp)
)
create TABLE HoaDon(
MaHD nvarchar(5) PRIMARY key,
MaSp int,
SoLuong int,
DonGia int,
TenKH nvarchar(20),
DiaChi nvarchar(50),
Email nvarchar(20),
Sdt int,
FOREIGN key (MaSp) REFERENCES SanPham(MaSp)
)
create TABLE GioHang(
MaGioHang nvarchar(5) PRIMARY key,
MaSp nvarchar(5),
MaLoaiSp nvarchar(5),
TenSp nvarchar(20),
SoLuong int,
ThanhTien int,
FOREIGN key (MaSp) REFERENCES SanPham(MaSp),
FOREIGN key (MaLoaiSp) REFERENCES LoaiSp(MaLoaiSp)
)

insert into loaisp values('01N','Giày Nam')
insert into loaisp values('02N','Giày Nu')
insert into loaisp values('03N','Giày Tre Em')
insert into loaisp values('04N','Giày The thao')


insert into ncc values('DA','D&A')
insert into ncc values('Bs','Bitis')
insert into ncc values('Add','Adidas')
insert into ncc values('Na','Native')
insert into ncc values('Pm','Puma')

insert into sanpham values('481','1','01N','DA',N'Giày Nam Công So',32,10,100000,'images\\pic1.jpg')
insert into sanpham values('482','1','01N','Bs',N'Giày James Blanc',35,20,200000,'images\\pic2.jpg')
insert into sanpham values('483','1','01N','Add',N'Giày Sanvado',32,30,80000,'images\\pic3.jpg')
insert into sanpham values('484','2','02N','Na',N'Giày Cao Gót NaZa',36,20,300000,'images\\pic4.jpg')
insert into sanpham values('485','1','02N','Pm',N'Giày James Blanc',38,20,200000,'images\\pic5.jpg')
insert into sanpham values('486','2','02N','Bs',N'Giày Boot Gót Cao',40,15,150000,'images\\pic6.jpg')
insert into sanpham values('487','1','02N','Bs',N'Giày Sandal',35,20,100000,'images\\pic7.jpg')
insert into sanpham values('488','1','04N','Add',N'Giày Sandal Ðinh',42,10,50000,'images\\pic8.jpg')
insert into sanpham values('489','1','04N','Pm',N'Giày The Thao Dep',36,20,100000,'images\\pic9.jpg')
insert into sanpham values('500','1','04N','Na',N'Giày Sandal1',38,20,100000,'images\\pic10.jpg')
insert into sanpham values('501','1','04N','Add',N'Giày Sandal2',37,20,100000,'images\\pic11.jpg')
insert into sanpham values('502','1','04N','Add',N'Giày Sandal3',42,50,300000,'images\\pic.jpg')
insert into sanpham values(null,'2','02N','DA',N'Pointed shoe',42,50,300000,'images\\giaycaogotnu1.jpg')
insert into sanpham values(null,'2','02N','Pm',N'Platform shoe',38,20,300000,'images\\giaycaogotnu2.jpg')
insert into sanpham values(null,'2','02N','Add',N'Kitten heels',32,10,300000,'images\\giaycaogotnu3.jpg')
insert into sanpham values(null,'2','02N','Bs',N'Slingback',35,10,200000,'images\\giaycaogotnu4.jpg')
insert into sanpham values(null,'2','02N','DA',N'T-strap',35,10,200000,'images\\giaycaogotnu5.jpg')
insert into sanpham values(null,'2','02N','Pm',N'Ankle strap',34,10,100000,'images\\giaycaogotnu6.jpg')
insert into sanpham values(null,'1','01N','Pm',N'Giày Chuck Taylor',34,10,100000,'images\\giaytaynam1.jpg')
insert into sanpham values(null,'1','01N','Add',N'Giày Vans',35,10,100000,'images\\giaytaynam2.jpg')
insert into sanpham values(null,'1','01N','Bs',N'Giày Reebok Freestyle',38,20,200000,'images\\giaytaynam3.jpg')
insert into sanpham values(null,'1','01N','Pm',N'Giày Nike Blazer',40,15,300000,'images\\giaytaynam4.jpg')
insert into sanpham values(null,'1','01N','Add',N'Giày Jack Purcell',42,15,200000,'images\\giaytaynam5.jpg')
insert into sanpham values(null,'1','01N','Add',N'Giày Adidas Superstar',38,15,300000,'images\\giaytaynam6.jpg')
insert into sanpham values(null,'2','04N','Add',N'Stan Smith',32,15,300000,'images\\giayttnu1.jpg')
insert into sanpham values(null,'2','04N','Pm',N'Chuck Taylor All Star',34,20,100000,'images\\giayttnu2.jpg')
insert into sanpham values(null,'2','04N','Pm',N'Air Max 1',36,20,50000,'images\\giayttnu3.jpg')
insert into sanpham values(null,'2','04N','Bs',N'Old Skool',32,10,50000,'images\\giayttnu4.jpg')
insert into sanpham values(null,'2','04N','DA',N'Reebok – Classic',40,10,200000,'images\\giayttnu5.jpg')
insert into sanpham values(null,'2','04N','Bs',N'Onitsuka Tiger – Corsair',42,10,300000,'images\\giayttnu6.jpg')
insert into sanpham values(null,'1','03N','Bs',N'Oxford',42,10,300000,'images\\giaytaynam7.jpg')
insert into sanpham values(null,'1','03N','Pm',N'Brogues ',40,10,200000,'images\\giaytaynam8.jpg')
insert into sanpham values(null,'1','03N','Add',N'Boat Shoes ',35,10,200000,'images\\giaytaynam9.jpg')
insert into sanpham values(null,'1','03N','Add',N'Driver shoes',32,10,100000,'images\\giaytaynam10.jpg')
insert into sanpham values(null,'1','03N','Add',N'Slippers',34,20,100000,'images\\giaytaynam11.jpg')
insert into sanpham values(null,'1','03N','Add',N'Penny loafer',38,30,200000,'images\\giaytaynam.jpg')

create TABLE bannel(
MaBannel nvarchar(5) PRIMARY key,
TenBannel nvarchar(20),
MauSac nvarchar(20),
TomTat nvarchar(50),
Hinh MEDIUMBLOB
)

insert into bannel values('1','Sneaker','White','Giay Sneaker Da thoi trang nam','images\\banner1.jpg')
insert into bannel values('2','Hunter','Black','Giay Hunter Da thoi trang nam','images\\banner2.jpg')


create TABLE loaikh(
MaLKH nvarchar(5) PRIMARY key,
TenLKH nvarchar(20)
)

INSERT into loaikh values('1','Nam')
INSERT into loaikh values('2',N'Nu')

create TABLE tkkhach(
Username nvarchar(20),
Pass nvarchar(20),
Email nvarchar(20),
Sdt int,
RoleID nvarchar(5),
PRIMARY key(Username,Pass),
FOREIGN key (RoleID) REFERENCES role(RoleID)
)

CREATE TABLE `nhanvien` (
  `MaNv` varchar(20) character set utf8 NOT NULL,
  `TenNv` varchar(20) character set utf8 default NULL,
  `GioiTinh` varchar(20) character set utf8 default NULL,
  `NgaySinh` varchar(20) character set utf8 default NULL,
  `DiaChi` varchar(20) character set utf8 default NULL,
  `Sdt` int(11) default NULL,
  PRIMARY KEY  (`MaNv`)
) 

/*Data for the table `nhanvien` */

insert  into `nhanvien`(`MaNv`,`TenNv`,`GioiTinh`,`NgaySinh`,`DiaChi`,`Sdt`) values ('nv2','aa','nu','1996-02-13','122 to ngoc van',968382716),('nv3','bb','nam','1998-02-02','12 a',987),('nv4','asdf','nam','1998-02-02','12asdf',2345678);
CREATE TABLE `sukien` (
  MaSK varchar(20) character set utf8 NOT NULL,
  TenSK varchar(20) character set utf8 default NULL,
  NgayBD date default NULL,
  NgayKT date default NULL,
  MaSp int,
  PRIMARY KEY  (`MaSK`),
  FOREIGN KEY (MaSp) REFERENCES sanpham(MaSp)
) /*Data for the table `sukien` */

insert  into `sukien`(`MaSK`,`TenSK`,`NgayBD`,`NgayKT`,`MaSp`) values ('sk1','su kien 1','2016-01-01','2017-01-01','481'),('sk2','su kien 2','2016-11-28','2016-12-01','484'),('sk3','sự kiện 3','2016-12-09','2016-12-16','481');

