<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LoaicuahangSeeder::class);
        $this->call(ThongtincuahangSeeder::class);
        $this->call(Thongtin_loaicuahangSeeder::class);
        $this->call(LoaisanphamSeeder::class);
        $this->call(SanphamSeeder::class);

    }
}
class UserSeeder extends Seeder
{

    public function run()
    {
      DB::table('users')->insert([
        array('name'=>'nam','email'=>'admin@gmail.com','password'=>bcrypt('111111'),'level'=>'1'),
        array('name'=>'tuấn','email'=>'demo@gmail.com','password'=>bcrypt('111111'),'level'=>'0'),
        array('name'=>'hiếu','email'=>'demo2@gmail.com','password'=>bcrypt('111111'),'level'=>'0'),
        array('name'=>'phong','email'=>'demo3@gmail.com','password'=>bcrypt('111111'),'level'=>'0'),
        array('name'=>'tiến','email'=>'demo4@gmail.com','password'=>bcrypt('111111'),'level'=>'0'),
        array('name'=>'lan','email'=>'demo5@gmail.com','password'=>bcrypt('111111'),'level'=>'0'),
        array('name'=>'hương','email'=>'demo6@gmail.com','password'=>bcrypt('111111'),'level'=>'0')
      ]);  
    }
}

class LoaicuahangSeeder extends Seeder
{

    public function run()
    {
      DB::table('loaicuahangs')->insert([
      	array('tenloaicuahang'=>'trà sữa','tenkhongdau'=>'tra-sua'),
      	array('tenloaicuahang'=>'ăn vặt','tenkhongdau'=>'an-vat'),
      	array('tenloaicuahang'=>'bánh','tenkhongdau'=>'banh'),
      	array('tenloaicuahang'=>'cafe','tenkhongdau'=>'cafe'),
      	array('tenloaicuahang'=>'cơm','tenkhongdau'=>'com'),
      ]);  
    }
}

class ThongtincuahangSeeder extends Seeder
{

    public function run()
    {
      DB::table('thongtincuahangs')->insert([
      	array('tencuahang'=>'Tocotoco','tenkhongdau'=>'tocotoco','diachi'=>'24 bạch đằng, đà nẵng','giomocua'=>'8:00','giodongcua'=>'22:00','anhdaidien'=>'/upload/anhdaidien/tocotoco.jpg','trangthai'=>'1','lat'=>'16.079189','long'=>'108.223667','user_id'=>'2'),
      	array('tencuahang'=>'Highlands','tenkhongdau'=>'highlands','diachi'=>'40 bạch đằng, đà nẵng','giomocua'=>'8:00','giodongcua'=>'22:00','anhdaidien'=>'/upload/anhdaidien/highlands.jpg','trangthai'=>'1','lat'=>'16.075983','long'=>'108.224097','user_id'=>'3'),
      	array('tencuahang'=>'Cơm tấm cali','tenkhongdau'=>'com-tam-cali','diachi'=>'118 võ văn kiệt, đà nẵng','giomocua'=>'8:00','giodongcua'=>'22:00','anhdaidien'=>'/upload/anhdaidien/comtamcali.jpg','trangthai'=>'1','lat'=>'16.062938','long'=>'108.242237','user_id'=>'4'),
      	array('tencuahang'=>'Givral','tenkhongdau'=>'givral','diachi'=>'531 Nguyễn trãi, đà nẵng','giomocua'=>'8:00','giodongcua'=>'22:00','anhdaidien'=>'/upload/anhdaidien/givral.jpg','trangthai'=>'1','lat'=>'16.064892','long'=>'108.216224','user_id'=>'5'),
      	array('tencuahang'=>'Brodard','tenkhongdau'=>'brodard','diachi'=>'123 Phan Xích Long, đà nẵng','giomocua'=>'8:00','giodongcua'=>'22:00','anhdaidien'=>'/upload/anhdaidien/brodard.jpg','trangthai'=>'1','lat'=>'16.039527','long'=>'108.189215','user_id'=>'6'),
      	array('tencuahang'=>'Ở Quãy','tenkhongdau'=>'o-quay','diachi'=>'24 Lê Duẩn, Đà Nẵng','giomocua'=>'8:00','giodongcua'=>'22:00','anhdaidien'=>'/upload/anhdaidien/oquay.jpg','trangthai'=>'1','lat'=>'16.071797','long'=>'108.222308','user_id'=>'7')
      ]);  
    }
}

class Thongtin_loaicuahangSeeder extends Seeder
{

    public function run()
    {
      DB::table('thongtin_loaicuahangs')->insert([
      	array('cuahang_id'=>'1','loaicuahang_id'=>'1'),
      	array('cuahang_id'=>'1','loaicuahang_id'=>'2'),
      	array('cuahang_id'=>'2','loaicuahang_id'=>'3'),
      	array('cuahang_id'=>'3','loaicuahang_id'=>'4'),
      	array('cuahang_id'=>'3','loaicuahang_id'=>'5'),
      	array('cuahang_id'=>'3','loaicuahang_id'=>'1'),
      	array('cuahang_id'=>'4','loaicuahang_id'=>'1'),
      	array('cuahang_id'=>'4','loaicuahang_id'=>'2'),
      	array('cuahang_id'=>'5','loaicuahang_id'=>'3'),
      	array('cuahang_id'=>'5','loaicuahang_id'=>'4'),
      	array('cuahang_id'=>'5','loaicuahang_id'=>'5'),
      	array('cuahang_id'=>'6','loaicuahang_id'=>'1'),
      	array('cuahang_id'=>'6','loaicuahang_id'=>'2')
      ]);  
    }
}

class LoaisanphamSeeder extends Seeder
{

    public function run()
    {
      DB::table('loaisanphams')->insert([
      	array('tenloaisp'=>'Tea+Milk','tenkhongdau'=>'tea-milk','cuahang_id'=>'1'),
      	array('tenloaisp'=>'Tea+Cream','tenkhongdau'=>'tea-cream','cuahang_id'=>'1'),
      	array('tenloaisp'=>'Tea+Fruit','tenkhongdau'=>'tea-fruit','cuahang_id'=>'1'),
      	array('tenloaisp'=>'Tea+Fresh Milk','tenkhongdau'=>'tea-fresh-milk','cuahang_id'=>'1'),

      	array('tenloaisp'=>'Cà phê','tenkhongdau'=>'ca-phe','cuahang_id'=>'2'),
      	array('tenloaisp'=>'Trà','tenkhongdau'=>'tra','cuahang_id'=>'2'),
      	array('tenloaisp'=>'Thức uống khác','tenkhongdau'=>'thuc-uong-khac','cuahang_id'=>'2'),

      	array('tenloaisp'=>'Cơm tấm','tenkhongdau'=>'com-tam','cuahang_id'=>'3'),
      	array('tenloaisp'=>'Cơm gà','tenkhongdau'=>'com-ga','cuahang_id'=>'3'),
      	array('tenloaisp'=>'Canh','tenkhongdau'=>'Canh','cuahang_id'=>'3'),
      	array('tenloaisp'=>'Thức ăn thêm','tenkhongdau'=>'thuc-an-them','cuahang_id'=>'3'),

      	array('tenloaisp'=>'Bánh rau câu','tenkhongdau'=>'banh-rau-cau','cuahang_id'=>'4'),
      	array('tenloaisp'=>'Bánh sinh nhật','tenkhongdau'=>'banh-sinh-nhat','cuahang_id'=>'4'),
      	array('tenloaisp'=>'Tiramisu','tenkhongdau'=>'tiramisu','cuahang_id'=>'4'),
      	array('tenloaisp'=>'Cake','tenkhongdau'=>'cake','cuahang_id'=>'4'),

      	array('tenloaisp'=>'Bánh','tenkhongdau'=>'banh','cuahang_id'=>'5'),
      	array('tenloaisp'=>'Thức uống','tenkhongdau'=>'thuc-uong-khac','cuahang_id'=>'5'),

      	array('tenloaisp'=>'Nem','tenkhongdau'=>'nem','cuahang_id'=>'6'),
      	array('tenloaisp'=>'Các món chiên','tenkhongdau'=>'cac-mon-chien','cuahang_id'=>'6'),
      	array('tenloaisp'=>'Đồ uống','tenkhongdau'=>'do-uong','cuahang_id'=>'6')
      ]);  
    }
}

class SanphamSeeder extends Seeder
{

    public function run()
    {
      DB::table('sanphams')->insert([
      	array('tensp'=>'Trà sữa socola','tenkhongdau'=>'tra-sua-socola','giasp'=>'40000', 'hinhanh'=>'/upload/anhsanpham/tocotoco-socola.jpg', 'loaisp_id'=>'1'),
      	array('tensp'=>'Trà sữa panda','tenkhongdau'=>'tra-sua-panda','giasp'=>'40000', 'hinhanh'=>'/upload/anhsanpham/tocotoco-panda.jpg', 'loaisp_id'=>'1'),
      	array('tensp'=>'Trà sữa vị nhài','tenkhongdau'=>'tra-sua-vi-nhai','giasp'=>'40000', 'hinhanh'=>'/upload/anhsanpham/tocotoco-nhai.jpg', 'loaisp_id'=>'1'),
      	array('tensp'=>'Matcha kem phô mai','tenkhongdau'=>'matcha-kem-phomai','giasp'=>'40000', 'hinhanh'=>'/upload/anhsanpham/matcha-kem-phomai.jpg', 'loaisp_id'=>'2'),
      	array('tensp'=>'Hồng trà kem phô mai','tenkhongdau'=>'hongtra-kem-phomai','giasp'=>'40000', 'hinhanh'=>'/upload/anhsanpham/tocotoco-hongtra.jpg', 'loaisp_id'=>'3'),

      	array('tensp'=>'Trà xanh nho','tenkhongdau'=>'tra-xanh-nho','giasp'=>'40000', 'hinhanh'=>'/upload/anhsanpham/tocotoco-traxanhnho.JPG', 'loaisp_id'=>'4'),
      	array('tensp'=>'Trà xanh chanh leo','tenkhongdau'=>'tra-xanh-chanh-leo','giasp'=>'40000', 'hinhanh'=>'/upload/anhsanpham/tocotoco-traxanhchanhleo.jpg', 'loaisp_id'=>'4'),

      	array('tensp'=>'Cà phê sữa đá','tenkhongdau'=>'ca-phe-sua-da','giasp'=>'29000', 'hinhanh'=>'/upload/anhsanpham/highland-caphesuada.jpg', 'loaisp_id'=>'5'),
      	array('tensp'=>'Cà phê đen đá','tenkhongdau'=>'ca-phe-den-da','giasp'=>'29000', 'hinhanh'=>'/upload/anhsanpham/highland-CFD.png', 'loaisp_id'=>'5'),
      	array('tensp'=>'Trà thạch vải','tenkhongdau'=>'tra-thach-vai','giasp'=>'39000', 'hinhanh'=>'/upload/anhsanpham/highland-TRATHACHVAI.png', 'loaisp_id'=>'6'),
      	array('tensp'=>'Trà sen vàng','tenkhongdau'=>'tra-sen-vang','giasp'=>'39000', 'hinhanh'=>'/upload/anhsanpham/highland-TRASENVANG.png', 'loaisp_id'=>'6'),
      	array('tensp'=>'Chanh đá xay','tenkhongdau'=>'chanh-da-xay','giasp'=>'39000', 'hinhanh'=>'/upload/anhsanpham/highland-chanhdaxay.jpg', 'loaisp_id'=>'7'),

      	array('tensp'=>'Cơm tấm sườn','tenkhongdau'=>'com-tam-suon','giasp'=>'20000', 'hinhanh'=>'/upload/anhsanpham/com-tam.jpg', 'loaisp_id'=>'8'),
      	array('tensp'=>'Cơm gà','tenkhongdau'=>'com-ga','giasp'=>'35000', 'hinhanh'=>'/upload/anhsanpham/comga.jpg', 'loaisp_id'=>'9'),
      	array('tensp'=>'Canh ổ qua','tenkhongdau'=>'canh-o-qua','giasp'=>'5000', 'hinhanh'=>'/upload/anhsanpham/canh-kho-qua.jpg', 'loaisp_id'=>'10'),
      	array('tensp'=>'Trứng Ốp la','tenkhongdau'=>'trung-opla','giasp'=>'3000', 'hinhanh'=>'/upload/anhsanpham/opla.jpg', 'loaisp_id'=>'11'),

      	array('tensp'=>'SND-TC04','tenkhongdau'=>'SND-TC04','giasp'=>'290000', 'hinhanh'=>'/upload/anhsanpham/givral-SND-TC04jpg', 'loaisp_id'=>'12'),
      	array('tensp'=>'SND-Cream-Cheese04','tenkhongdau'=>'snd-cream-cheese04','giasp'=>'3000', 'hinhanh'=>'/upload/anhsanpham/snd-cream-cheese04.jpg', 'loaisp_id'=>'12'),
      	array('tensp'=>'HN-081','tenkhongdau'=>'hn-081','giasp'=>'290000', 'hinhanh'=>'/upload/anhsanpham/hn-081.jpg', 'loaisp_id'=>'13'),
      	array('tensp'=>'hn-074','tenkhongdau'=>'hn-074','giasp'=>'300000', 'hinhanh'=>'/upload/anhsanpham/hn-074.jpg', 'loaisp_id'=>'13'),
      	array('tensp'=>'Bánh Tiramisu','tenkhongdau'=>'banh-tiramisu','giasp'=>'10000', 'hinhanh'=>'/upload/anhsanpham/Bánh-Tiramisu.jpg', 'loaisp_id'=>'14'),
      	array('tensp'=>'Bánh bông lan','tenkhongdau'=>'banh-bong-lan','giasp'=>'30000', 'hinhanh'=>'/upload/anhsanpham/banhbonglan.jpg', 'loaisp_id'=>'15'),
      	array('tensp'=>'Bánh cake bơ','tenkhongdau'=>'banh-cake-bo','giasp'=>'30000', 'hinhanh'=>'/upload/anhsanpham/banh-cake-bo.jpg', 'loaisp_id'=>'15'),

      	array('tensp'=>'Bánh pound hoa quả','tenkhongdau'=>'banh-pound-hoa-qua','giasp'=>'50000', 'hinhanh'=>'/upload/anhsanpham/banh-pound-cake-hoa-qua-kho.jpg', 'loaisp_id'=>'16'),
      	array('tensp'=>'Magic custard cake','tenkhongdau'=>'magic-custard-cake','giasp'=>'30000', 'hinhanh'=>'/upload/anhsanpham/7.jpg', 'loaisp_id'=>'16'),
      	array('tensp'=>'Nước chanh','tenkhongdau'=>'nuoc-chanh','giasp'=>'15000', 'hinhanh'=>'/upload/anhsanpham/nuochanh.jpg', 'loaisp_id'=>'17'),

      	array('tensp'=>'Nem chua rán','tenkhongdau'=>'nem-chua-ran','giasp'=>'15000', 'hinhanh'=>'/upload/anhsanpham/nem-chua-ran.jpg', 'loaisp_id'=>'18'),
      	array('tensp'=>'Nem chua nướng','tenkhongdau'=>'nem-chua-nuong','giasp'=>'15000', 'hinhanh'=>'/upload/anhsanpham/nemchuanuongjpg', 'loaisp_id'=>'19'),
      	array('tensp'=>'Cá viên chiên','tenkhongdau'=>'ca-vien-chien','giasp'=>'15000', 'hinhanh'=>'/upload/anhsanpham/ca_vien.jpg', 'loaisp_id'=>'19'),
      	array('tensp'=>'Khoai tây chiên','tenkhongdau'=>'khoai-tay-chien','giasp'=>'15000', 'hinhanh'=>'/upload/anhsanpham/khoaitaychien.jpg', 'loaisp_id'=>'19'),
      	array('tensp'=>'Soda chanh dây','tenkhongdau'=>'soda-chanh-day','giasp'=>'12000', 'hinhanh'=>'/upload/anhsanpham/sodachanhday.jpg', 'loaisp_id'=>'20'),
      	array('tensp'=>'Soda phúc bổn tử','tenkhongdau'=>'soda-ohuc-bon-tu','giasp'=>'12000', 'hinhanh'=>'/upload/anhsanpham/phucbontu.jpg', 'loaisp_id'=>'20')
      	
      ]);  
    }
}
