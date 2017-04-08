<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ThuongHieu;
class ThuonghieuTableSeeder extends Seeder
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
         $productCate1 = ThuongHieu::where('id', 1)->first();$productCate1->makeRoot();
          // Item 2.1
        $productCate5 = ThuongHieu::create(['TenLoai' => 'Thương hiệu', 'BiDanh' => 'thuong-hieu']);
        $productCate5->makeChildOf($productCate1);
            // Item 2.1.1
        $productCate51 = ThuongHieu::create(['TenLoai' => 'Mỹ phẩm Hàn', 'BiDanh' => 'my-pham-han']);
        $productCate51->makeChildOf($productCate5);

        	//Item 2.1.1.1
        $productCate511 = ThuongHieu::create(['TenLoai' => 'Amok', 'BiDanh' => 'amok']);
        $productCate511->makeChildOf($productCate51);
        $productCate512 = ThuongHieu::create(['TenLoai' => 'April skin', 'BiDanh' => 'april-skin']);
        $productCate512->makeChildOf($productCate51);
        $productCate513 = ThuongHieu::create(['TenLoai' => 'Innisfree', 'BiDanh' => 'innsfree']);
        $productCate513->makeChildOf($productCate51);

            // Item 2.1.2
        $productCate52 = ThuongHieu::create(['TenLoai' => 'Mỹ phẩm Châu Âu', 'BiDanh' => 'my-pham-chau-au']);
        $productCate52->makeChildOf($productCate5);

        	//Item 2.1.2.1
        $productCate521 = ThuongHieu::create(['TenLoai' => 'Avene', 'BiDanh' => 'avene']);
        $productCate521->makeChildOf($productCate52);
        $productCate522 = ThuongHieu::create(['TenLoai' => 'Charlotte', 'BiDanh' => 'charlotte']);
        $productCate522->makeChildOf($productCate52);
        $productCate523 = ThuongHieu::create(['TenLoai' => 'Dior', 'BiDanh' => 'dior']);
        $productCate523->makeChildOf($productCate52);

        //Item 2.1.3
        $productCate53 = ThuongHieu::create(['TenLoai' => 'Mỹ phẩm Mỹ', 'BiDanh' => 'my-pham-my']);
        $productCate53->makeChildOf($productCate5);

        	//Item 2.1.3.1
        $productCate531 = ThuongHieu::create(['TenLoai' => 'Chanel', 'BiDanh' => 'chanel']);
        $productCate531->makeChildOf($productCate53);
        $productCate532 = ThuongHieu::create(['TenLoai' => 'Beauty Treats', 'BiDanh' => 'beauty treats']);
        $productCate532->makeChildOf($productCate53);
        $productCate533 = ThuongHieu::create(['TenLoai' => 'Cerave', 'BiDanh' => 'cerave']);
        $productCate533->makeChildOf($productCate53);

        	//Item 2.1.4
        $productCate54 = ThuongHieu::create(['TenLoai' => 'Mỹ phẩm Nhật', 'BiDanh' => 'my-pham-nhat']);
        $productCate54->makeChildOf($productCate5);

        	//Item 2.1.4.1
        $productCate541 = ThuongHieu::create(['TenLoai' => 'Kose', 'BiDanh' => 'kose']);
        $productCate541->makeChildOf($productCate54);
        $productCate542 = ThuongHieu::create(['TenLoai' => 'SK II', 'BiDanh' => 'sk-ii']);
        $productCate542->makeChildOf($productCate54);

        	//Item 2.1.5
        $productCate55 = ThuongHieu::create(['TenLoai' => 'Mỹ phẩm Úc', 'BiDanh' => 'my-pham-uc']);
        $productCate55->makeChildOf($productCate5);

        	//Item 2.1.5.1
        $productCate551 = ThuongHieu::create(['TenLoai' => 'Rosanna', 'BiDanh' => 'rosanna']);
        $productCate551->makeChildOf($productCate55);
        $productCate552 = ThuongHieu::create(['TenLoai' => 'Careline', 'BiDanh' => 'careline']);
        $productCate552->makeChildOf($productCate55);

        	//Item 2.1.6
        $productCate56 = ThuongHieu::create(['TenLoai' => 'Mỹ phẩm Thái', 'BiDanh' => 'my-pham-chau-au']);
        $productCate56->makeChildOf($productCate5);

        	//Item 2.1.6.1
        $productCate561 = ThuongHieu::create(['TenLoai' => 'Laila', 'BiDanh' => 'laila']);
        $productCate561->makeChildOf($productCate56);
        $productCate562 = ThuongHieu::create(['TenLoai' => 'Mistine', 'BiDanh' => 'mistine']);
        $productCate561->makeChildOf($productCate56);

        	//Item 2.1.7
        $productCate57 = ThuongHieu::create(['TenLoai' => 'Mỹ phẩm Việt Nam', 'BiDanh' => 'my-pham-viet-nam']);
        $productCate57->makeChildOf($productCate5);

        	//Item 2.1.7.1
        $productCate571 = ThuongHieu::create(['TenLoai' => 'Tina Lê', 'BiDanh' => 'tina-le']);
        $productCate571->makeChildOf($productCate57);
       
        
    }
}
       