<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	if (DB::table('users')->get()->count() == 0) {
    		$this->call(UsersSeeder::class);
    	}
    	if (DB::table('slides')->get()->count() == 0) {
    		$this->call(SlidesSeeder::class);
    	}
    	if (DB::table('product_categories')->get()->count() == 0) {
    		$this->call(ProductcategoriesSeeder::class);
    	}
    	if (DB::table('news')->get()->count() == 0) {
    		$this->call(NewsSeeder::class);
    	}
    }    
}

/**
*  
*/
class UsersSeeder extends Seeder
{    	
	public function run()
	{
		DB::table('users')->insert([
			[
				'full_name'=>'Nguyen Phuoc Thuan',
				'email'=>'nguyenphuocthuan1803@gmail.com',
				'phone'=>'0911212244',
				'address'=>'165/6/8 Văn Thân, phường 8, quận 6, TP.HCM',			
				'password'=>bcrypt('matkhau'),
				'created_at'=> date("Y-m-d H:i:s")
			]
		]);
	}
}

class SlidesSeeder extends Seeder
{    	
	public function run()
	{
		DB::table('slides')->insert([
			['link'=>'#','image'=>'banner1.jpg'],
			['link'=>'#','image'=>'banner3.jpg'],
			['link'=>'#','image'=>'banner3.jpg'],
			['link'=>'#','image'=>'banner4.jpg']
		]);
	}
}

class ProductcategoriesSeeder extends Seeder
{    	
	public function run()
	{
		DB::table('product_categories')->insert([
			[
				'name'=>'Bánh mặn', 
				'description'=>'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.', 
				'image'=>'banh-man-thu-vi-nhat-1.jpg'
			],
			[
				'name'=>'Bánh ngọt', 
				'description'=>'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..', 
				'image'=>'20131108144733.jpg'
			],
			[
				'name'=>'Bánh trái cây', 
				'description'=>'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi "lạc" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 
				'image'=>'banhtraicay.jpg'
			],
			[
				'name'=>'Bánh kem', 
				'description'=>'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 
				'image'=>'banhkem.jpg'
			],
			[
				'name'=>'Bánh crepe', 
				'description'=>'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”', 
				'image'=>'crepe.jpg'
			],
			[
				'name'=>'Bánh Pizza', 
				'description'=>'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.', 
				'image'=>'pizza.jpg'
			],	
			[
				'name'=>'Bánh su kem', 
				'description'=>'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.', 
				'image'=>'sukemdau.jpg'
			]		
		]);
	}
}

class NewsSeeder extends Seeder
{    	
	public function run()
	{
		DB::table('news')->insert([
			[
				'title'=>'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam "Bánh trung thu Bơ Sữa HongKong".', 
				'content'=>'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 
				'image'=>'sample1.jpg'
			],
			[
				'title'=>'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 
				'content'=>'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 
				'image'=>'sample2.jpg'
			],
			[
				'title'=>'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 
				'content'=>'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 
				'image'=>'sample3.jpg'
			],
			[
				'title'=>'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 
				'content'=>'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 
				'image'=>'sample4.jpg'
			],
			[
				'title'=>'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 
				'content'=>'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 
				'image'=>'sample5.jpg'
			]
		]);
	}
}