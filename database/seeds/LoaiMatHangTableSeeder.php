<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\LoaiMatHang;
class LoaiMatHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Root
        $productCate1 = LoaiMatHang::where('id', 1)->first();$productCate1->makeRoot();

        // Item 2.1
        $productCate2 = LoaiMatHang::create(['TenLoai' => 'Trang điểm', 'BiDanh' => 'trang-diem']);
        $productCate2->makeChildOf($productCate1);

            // Item 2.1.1
        $productCate21 = LoaiMatHang::create(['TenLoai' => 'Trang điểm mặt', 'BiDanh' => 'trang-diem-mat']);
        $productCate21->makeChildOf($productCate2);

        	//Item 2.1.1.1
        $productCate211 = LoaiMatHang::create(['TenLoai' => 'BB CC Cushion', 'BiDanh' => 'bb-cc-cushion']);
		$productCate211->makeChildOf($productCate21);
		 $productCate212 = LoaiMatHang::create(['TenLoai' => 'Che khuyết điểm', 'BiDanh' => 'che-khuyet-diem']);
		$productCate212->makeChildOf($productCate21);
		 $productCate213 = LoaiMatHang::create(['TenLoai' => 'Kem lót', 'BiDanh' => 'kem-lot']);
		$productCate213->makeChildOf($productCate21);
		$productCate214 = LoaiMatHang::create(['TenLoai' => 'Má hồng', 'BiDanh' => 'ma-hong']);
		$productCate214->makeChildOf($productCate21);
		$productCate215 = LoaiMatHang::create(['TenLoai' => 'Phấn phủ', 'BiDanh' => 'phan-phu']);
		$productCate215->makeChildOf($productCate21);
        $productCate216 = LoaiMatHang::create(['TenLoai' => 'Tạo khối', 'BiDanh' => 'tao-khoi']);
		$productCate216->makeChildOf($productCate21);
        $productCate217 = LoaiMatHang::create(['TenLoai' => 'Xịt khóa nền', 'BiDanh' => 'xit-khoa-nen']);
		$productCate217->makeChildOf($productCate21);
        
            // Item 2.1.2
        $productCate22 = LoaiMatHang::create(['TenLoai' => 'Trang điểm mắt', 'BiDanh' => 'trang-diem-doi-mat']);
        $productCate22->makeChildOf($productCate2);

        	//Item 2.1.2.1
        $productCate221 = LoaiMatHang::create(['TenLoai' => 'Kẻ lông mày', 'BiDanh' => 'ke-long-may']);
		$productCate221->makeChildOf($productCate22);
		$productCate222 = LoaiMatHang::create(['TenLoai' => 'Kẻ mắt', 'BiDanh' => 'ke-mat']);
		$productCate222->makeChildOf($productCate22);
		$productCate223 = LoaiMatHang::create(['TenLoai' => 'Mascara', 'BiDanh' => 'mascara']);
		$productCate223->makeChildOf($productCate22);
		$productCate224 = LoaiMatHang::create(['TenLoai' => 'Màu mắt', 'BiDanh' => 'mau-mat']);
		$productCate224->makeChildOf($productCate22);

            // Item 2.1.3
        $productCate23 = LoaiMatHang::create(['TenLoai' => 'Trang điểm môi', 'BiDanh' => 'cham-soc-moi']);
        $productCate23->makeChildOf($productCate2);

        	//Item 2.1.3.1
        $productCate231 = LoaiMatHang::create(['TenLoai' => 'Khóa màu môi', 'BiDanh' => 'khoa-mau-moi']);
		$productCate231->makeChildOf($productCate23);
		$productCate232 = LoaiMatHang::create(['TenLoai' => 'Son môi', 'BiDanh' => 'son-moi']);
		$productCate232->makeChildOf($productCate23);

        // Item 2.2
        $productCate3 = LoaiMatHang::create(['TenLoai' => 'Chăm sóc da', 'BiDanh' => 'cham-soc-da']);
        $productCate3->makeChildOf($productCate1);

            // Item 2.2.1
        $productCate31 = LoaiMatHang::create(['TenLoai' => 'Làm sạch da mặt', 'BiDanh' => 'lam-sach-da-mat']);
        $productCate31->makeChildOf($productCate3);

         // Item 2.2.1.1
        $productCate311 = LoaiMatHang::create(['TenLoai' => 'Sửa rửa mặt', 'BiDanh' => 'sua-rua-mat']);
        $productCate311->makeChildOf($productCate31);
        $productCate312 = LoaiMatHang::create(['TenLoai' => 'Tẩy tế bào chết mặt', 'BiDanh' => 'tay-te-bao-chet-mat']);
        $productCate312->makeChildOf($productCate31);
        $productCate313 = LoaiMatHang::create(['TenLoai' => 'Tẩy trang da mặt', 'BiDanh' => 'tay-trang-da-mat']);
        $productCate313->makeChildOf($productCate31);

            // Item 2.2.2
        $productCate32 = LoaiMatHang::create(['TenLoai' => 'Chăm sóc da mặt', 'BiDanh' => 'cham-soc-da-mat']);
        $productCate32->makeChildOf($productCate3);

        	//Item 2.2.2.1
        $productCate321 = LoaiMatHang::create(['TenLoai' => 'Dưỡng da mặt', 'BiDanh' => 'duong-da-mat']);
        $productCate321->makeChildOf($productCate32);
        $productCate322 = LoaiMatHang::create(['TenLoai' => 'Kem chống nắng', 'BiDanh' => 'kem-chong-nang']);
        $productCate322->makeChildOf($productCate32);
        $productCate323 = LoaiMatHang::create(['TenLoai' => 'Kem dưỡng da', 'BiDanh' => 'kem-duong-da']);
        $productCate323->makeChildOf($productCate32);
        $productCate324 = LoaiMatHang::create(['TenLoai' => 'Các loại mặt nạ', 'BiDanh' => 'cac-loai-mat-na']);
        $productCate324->makeChildOf($productCate32);

            // Item 2.2.3
        $productCate33 = LoaiMatHang::create(['TenLoai' => 'Mặt nạ', 'BiDanh' => 'mat-na']);
        $productCate33->makeChildOf($productCate3);
           
           	//Item 2.2.3.1
        $productCate331 = LoaiMatHang::create(['TenLoai' => 'Bột', 'BiDanh' => 'bot']);
        $productCate331->makeChildOf($productCate33);
        $productCate332 = LoaiMatHang::create(['TenLoai' => 'Các loại mặt nạ', 'BiDanh' => 'cac-loai-mat-na']);
        $productCate332->makeChildOf($productCate33);

        // Item 2.3
        $productCate4 = LoaiMatHang::create(['TenLoai' => 'Nước hoa', 'BiDanh' => 'nuoc-hoa']);
        $productCate4->makeChildOf($productCate1);

            // Item 2.3.1
        $productCate41 = LoaiMatHang::create(['TenLoai' => 'Nước hoa nam', 'BiDanh' => 'nuoc-hoa-nam']);
        $productCate41->makeChildOf($productCate4);
            // Item 2.3.2
        $productCate42 = LoaiMatHang::create(['TenLoai' => 'Nước hoa nữ', 'BiDanh' => 'nuoc-hoa-nu']);
        $productCate42->makeChildOf($productCate4);

        // Item 2.4
        $productCate5 = LoaiMatHang::create(['TenLoai' => 'Thương hiệu', 'BiDanh' => 'thuong-hieu']);
        $productCate5->makeChildOf($productCate1);
            // Item 2.4.1
        $productCate51 = LoaiMatHang::create(['TenLoai' => 'Mỹ phẩm Hàn', 'BiDanh' => 'my-pham-han']);
        $productCate51->makeChildOf($productCate5);

        	//Item 2.4.1.1
        $productCate511 = LoaiMatHang::create(['TenLoai' => 'Amok', 'BiDanh' => 'amok']);
        $productCate511->makeChildOf($productCate51);
        $productCate512 = LoaiMatHang::create(['TenLoai' => 'April skin', 'BiDanh' => 'april-skin']);
        $productCate512->makeChildOf($productCate51);
        $productCate513 = LoaiMatHang::create(['TenLoai' => 'Innisfree', 'BiDanh' => 'innsfree']);
        $productCate513->makeChildOf($productCate51);

            // Item 2.4.2
        $productCate52 = LoaiMatHang::create(['TenLoai' => 'Mỹ phẩm Châu Âu', 'BiDanh' => 'my-pham-chau-au']);
        $productCate52->makeChildOf($productCate5);

        	//Item 2.4.2.1
        $productCate521 = LoaiMatHang::create(['TenLoai' => 'Avene', 'BiDanh' => 'avene']);
        $productCate521->makeChildOf($productCate52);
        $productCate522 = LoaiMatHang::create(['TenLoai' => 'Charlotte', 'BiDanh' => 'charlotte']);
        $productCate522->makeChildOf($productCate52);
        $productCate523 = LoaiMatHang::create(['TenLoai' => 'Dior', 'BiDanh' => 'dior']);
        $productCate523->makeChildOf($productCate52);

        //Item 2.4.3
        $productCate53 = LoaiMatHang::create(['TenLoai' => 'Mỹ phẩm Mỹ', 'BiDanh' => 'my-pham-my']);
        $productCate53->makeChildOf($productCate5);

        	//Item 2.4.3.1
        $productCate531 = LoaiMatHang::create(['TenLoai' => 'Chanel', 'BiDanh' => 'chanel']);
        $productCate531->makeChildOf($productCate53);
        $productCate532 = LoaiMatHang::create(['TenLoai' => 'Beauty Treats', 'BiDanh' => 'beauty treats']);
        $productCate532->makeChildOf($productCate53);
        $productCate533 = LoaiMatHang::create(['TenLoai' => 'Cerave', 'BiDanh' => 'cerave']);
        $productCate533->makeChildOf($productCate53);

        	//Item 2.4.4
        $productCate54 = LoaiMatHang::create(['TenLoai' => 'Mỹ phẩm Nhật', 'BiDanh' => 'my-pham-nhat']);
        $productCate54->makeChildOf($productCate5);

        	//Item 2.4.4.1
        $productCate541 = LoaiMatHang::create(['TenLoai' => 'Kose', 'BiDanh' => 'kose']);
        $productCate541->makeChildOf($productCate54);
        $productCate542 = LoaiMatHang::create(['TenLoai' => 'SK II', 'BiDanh' => 'sk-ii']);
        $productCate542->makeChildOf($productCate54);

        	//Item 2.4.5
        $productCate55 = LoaiMatHang::create(['TenLoai' => 'Mỹ phẩm Úc', 'BiDanh' => 'my-pham-uc']);
        $productCate55->makeChildOf($productCate5);

        	//Item 2.4.5.1
        $productCate551 = LoaiMatHang::create(['TenLoai' => 'Rosanna', 'BiDanh' => 'rosanna']);
        $productCate551->makeChildOf($productCate55);
        $productCate552 = LoaiMatHang::create(['TenLoai' => 'Careline', 'BiDanh' => 'careline']);
        $productCate552->makeChildOf($productCate55);

        	//Item 2.4.6
        $productCate56 = LoaiMatHang::create(['TenLoai' => 'Mỹ phẩm Thái', 'BiDanh' => 'my-pham-chau-au']);
        $productCate56->makeChildOf($productCate5);

        	//Item 2.4.6.1
        $productCate561 = LoaiMatHang::create(['TenLoai' => 'Laila', 'BiDanh' => 'laila']);
        $productCate561->makeChildOf($productCate56);
        $productCate562 = LoaiMatHang::create(['TenLoai' => 'Mistine', 'BiDanh' => 'mistine']);
        $productCate561->makeChildOf($productCate56);

        	//Item 2.4.7
        $productCate57 = LoaiMatHang::create(['TenLoai' => 'Mỹ phẩm Việt Nam', 'BiDanh' => 'my-pham-viet-nam']);
        $productCate57->makeChildOf($productCate5);

        	//Item 2.4.7.1
        $productCate571 = LoaiMatHang::create(['TenLoai' => 'Tina Lê', 'BiDanh' => 'tina-le']);
        $productCate571->makeChildOf($productCate57);
       
    }
}
