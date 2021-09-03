<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           [
               'name' => 'iPhone X 64GB',
               'description' => 'Nhắc đến iPhone X  thì ai cũng biết đây là sản phẩm có thiết kế thay đổi nhiều nhất kể từ khi iPhone 6 ra mắt. Thân máy được làm to hơn và bao bọc bởi kim loại bóng bẩy kết hợp với kính cường lực ở cả mặt trước và sau lưng mà theo Apple là "kính cứng nhất trong lịch sử điện thoại". Với thiết kế cực kỳ tinh xảo, độ hoàn thiện của máy là trên cả tuyệt vời. Chuẩn kháng nước và bụi bẩn cũng được nâng lên IP68 gúp bảo về máy tốt hơn. Viền màn hình đã được tối ưu rất mảnh, khu vực phía trên là phần tai thỏ để chứa camera tự sướng, loa thoại và nhiều cảm biến khác.',
               'discount' => '20',
               'category_id' => 1,
               'thumbnail'=>'https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/w300/iphone-x-den.jpg',
               'images'=>'["https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/iphone-x-canh-tren-duoi.jpg","https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/iphone-x-man-hinh.jpg","https://cdn.mobilecity.vn/mobilecity-vn/images/2020/07/camera-iphone-x.jpg","https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/iphone-x-truoc-sau.jpg"]',
               'brand_id' => 1,
               'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: Super Retina OLED, HDR10, Dolby Vision5.8 inches Full HD+ (1125 x 2436), tỷ lệ 19.5:9</span></p><p><span style="font-weight: bold;">Hệ điều hành: iOS 11</span></p><p><span style="font-weight: bold;">Camera sau: 12 MP, f/1.8, 28mm (góc rộng), 1/3", 1.22µm, dual pixel PDAF, OIS12 MP, f/2.4, 52mm (góc tele), 1/3.4", 1.0µm, PDAF, OIS, 2x optical zoomQuay phim: 4K@24/30/60fps, 1080p@30/60/120/240fps</span></p><p><span style="font-weight: 700;">Camera trước: 7 MP, f/2.2, 32mm (standard), HDRSL 3D, (depth/biometrics sensor)Quay phim: 1080p@30fps</span></p><p><span style="font-weight: bold;">CPU: Apple A11 Bionic (10 nm), 6 nhân(2x Monsoon + 4x Mistral)GPU: Apple GPU (three-core graphics)</span></p><p><span style="font-weight: bold;">RAM: 3GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 64GB NVMe, Thẻ nhớ: Không hỗ trợ</span></p><p><span style="font-weight: bold;">Thẻ SIM: 1 SIM, Nano SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: Li-Ion 2716 mAh</span></p><p><span style="font-weight: bold;">Thiết kế: Cảm ứng</span></p>',
               'slug' => 'iPhone-X-64GB',
               'status'=>Status::ACTIVE,
               'created_at'=>Carbon::now()->addDay(-1)
           ],
            [
                'name' => 'Samsung Galaxy S9',
                'description' => 'Samsung S9 vẫn được sử dụng lại kiểu thiết màn hình 18,5:9 full view vẫn rất đẹp và hoàn hảo, bên cạnh đó máy vẫn có một tấm nền Super Amoled như truyền thống kèm độ phân giải  2K+ công nghệ hiển thị HDR 10. Về phần thiết kế vẫn đi theo lối tinh tế bo cong hai mặt kính được thừa hưởng từ Galaxy S8. Về cấu hình Samsung S9  sẽ có tên mã là SM-G960 chạy con chip Snapdragon 845 được sản xuất trên dây chuyền 10nm mới nhất hiện nay nên cho tốc độ nhanh hơn cũng như mức tiêu thụ điện năng ít hơn so với các thế hệ trước.',
                'discount' => '30',
                'category_id' => 2,
                'thumbnail'=>'https://cdn.mobilecity.vn/mobilecity-vn/images/2019/12/w300/galaxy-s9-tim.jpg',
                'images'=>'["https://vnreview.vn/image/17/70/71/1770710.jpg","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4qN6dC0KmbWt0Mq8P2guDOAjOTarQPGVhaw&usqp=CAU","https://cdn.nguyenkimmall.com/images/companies/_1/Content/tin-tuc/vien-thong/lo-het-tat-ca-mau-sac-me-hoac-cua-samsung-galaxy-s9-02.jpg","https://phuongtung.vn/pt/images/detailed/6/S9-Lilac-Purple_z4gk-il.png"]',
                'brand_id' => 2,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: Super AMOLED, QHD+ (1440 x 2906Pixels), 5.8 inches</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android 8.0 Oreo</span></p><p><span style="font-weight: bold;">Camera sau: 12 MP</span></p><p><span style="font-weight: 700;">Camera trước: 8 MP</span></p><p><span style="font-weight: bold;">CPU: Exynos 9810 (10nm)</span></p><p><span style="font-weight: bold;">RAM: 4GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 64 GB</span></p><p><span style="font-weight: bold;">Thẻ SIM: 1 SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: 3000 mAh, sạc nhanh 15W</span></p><p><span style="font-weight: bold;">Thiết kế: Cảm ứng</span></p>',
                'slug' => 'Samsung-Galaxy-S9',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Xiaomi Redmi Note 10 Pro',
                'description' => 'Redmi Note 10 Pro đang dẫn đầu thế hệ tiếp theo của dòng máy tầm trung của Redmi bởi vì nó mang đến một trong những tính năng được người hâm mộ yêu thích nhất - màn hình OLED 120Hz. Điện thoại có thiết kế như 1 chiếc flagship cao cấp với 2 mặt kính, khung nhựa và còn có khả năng kháng bụi, kháng nước IP53.',
                'discount' => '40',
                'category_id' => 2,
                'thumbnail'=>'https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/w300/redmi-note-10-pro-den-2.jpg',
                'images'=>'["https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/w300/redmi-note-10-pro-den-2.jpg","https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/redmi-note-10-pro-op.jpg","https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/redmi-note-10-pro-hop-2.jpg","https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/redmi-note-10-pro-hop-1.jpg"]',
                'brand_id' => 3,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: AMOLED, 6.67 inches, 120Hz, HDR10 Full HD+ (1080 x 2400 pixels), tỷ lệ: 20:9</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android 11, MIUI 12</span></p><p><span style="font-weight: bold;">Camera sau: 108 MP, f/1.9 (góc rộng), 26mm, 1/1.52", 0.7µm, dual pixel PDAF, 8 MP, f/2.2 (góc siêu rộng), 118˚, 1/4.0", 1.12µm, 5 MP, f/2.4 (macro), 2 MP, f/2.4 (độ sâu)</span></p><p><span style="font-weight: 700;">Camera trước: 16 MP, f/2.5 (góc rộng), 1/3.06", 1.0µm</span></p><p><span style="font-weight: bold;">CPU: Qualcomm Snapdragon 732G (8 nm), 8 nhân(2x2.3 GHz Kryo 470 Gold & 6x1.8 GHz Kryo 470 Silver)</span></p><p><span style="font-weight: bold;">RAM: 6-8GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 128GB UFS 2.2, Thẻ nhớ: hỗ trợ khe cắm thẻ nhớ microSDXC (Có: cùng khay SIM 2).</span></p><p><span style="font-weight: bold;">Thẻ SIM: 2 SIM, Nano SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: Li-Po 5020 mAh, Sạc nhanh 33W, 59% trong 30 phút</span></p><p><span style="font-weight: bold;">Thiết kế: 2 mặt kính, khung nhựa</span></p>',
                'slug' => 'Xiaomi-Redmi-Note-10-Pro',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Vivo iQOO Neo 5',
                'description' => 'Vivo iQOO Neo 5 mang trong mình sức mạnh vô song nhờ được trang bị vi xử lí Snapdragon 870 mạnh mẽ kết hợp với 8GB/12GB RAM. Không chỉ vậy, Vivo còn hào phóng trang bị cho chiếc gaming phone giá rẻ của mình bộ nhớ trong UFS 3.1 cao cấp. Nhắc đến Vivo iQOO Neo 5, quả thật là quá thiếu sót nếu ta không nhắc đến thế mạnh đến từ hiệu năng.',
                'discount' => '50',
                'category_id' => 2,
                'thumbnail'=>'https://cdn.mobilecity.vn/mobilecity-vn/images/2021/03/w300/vivo-iqoo-neo-5-2-1.jpg',
                'images'=>'["https://fdn2.gsmarena.com/vv/pics/vivo/vivo-iqoo-neo5-1.jpg","https://cf.shopee.vn/file/9283aeebbba90c5a36598bde2a277eed","https://photo-cms-kienthuc.zadn.vn/zoom/800/uploaded/trucchinh2/2021_03_18/can-canh-vivo-iqoo-neo5-5g-cau-hinh-khung-man-hinh-120hz-sac-sieu-toc.jpg","https://cdn.mobilecity.vn/mobilecity-vn/images/2021/03/vivo-iqoo-neo-5-2-1.jpg"]',
                'brand_id' => 11,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: 6.62 inches, Full HD+ (1080 x 2400 pixels), HDR10+, 120Hz</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android 11, OriginOS for iQOO</span></p><p><span style="font-weight: bold;">Camera sau: 48 MP, f/1.8, PDAF, OIS,13 MP, f/2.2, 2 MP (depth), 4K@30</span></p><p><span style="font-weight: 700;">Camera trước: 16 MP, f/2.0, 1080p@30</span></p><p><span style="font-weight: bold;">CPU: Qualcomm Snapdragon 870 5G (7 nm)</span></p><p><span style="font-weight: bold;">RAM: 8-12GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 256GB UFS 3.1</span></p><p><span style="font-weight: bold;">Thẻ SIM: 2 SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: 4400 mAh - Sạc nhanh 66W</span></p><p><span style="font-weight: bold;">Thiết kế: 2 mặt kính</span></p>',
                'slug' => 'Vivo-iQOO-Neo-5',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'LG V30 Plus',
                'description' => 'Trong công việc hàng ngày, rất nhiều người sử dụng 2 máy để liên lạc nhưng rất bất kiện khi cầm theo hàng ngày. Sự lựa chọn LG V30 Plus 2 SIM giúp bạn tiện lợi trong công việc, đồng bộ một cách tốt hơn, giữ mối liên lạc tốt. LG V30 Plus 2 SIM xách tay Hàn, Mỹ là sản phẩm phù hợp cho những người công tác, một sim liên lạc gia đình, một sim liên lạc trong công việc.',
                'discount' => '60',
                'category_id' => 2,
                'thumbnail'=>'https://cdn.mobilecity.vn/mobilecity-vn/images/2017/12/w300/lg-v30-plus.jpg',
                'images'=>'["https://cdn.mobilecity.vn/mobilecity-vn/images/2017/12/w300/lg-v30-plus.jpg","https://cellphones.com.vn/sforum/wp-content/uploads/2017/08/LG-V30-render-01.jpg","https://anhemmobile.vn/public/fileManager/uploads/product/04_20_v30plus.png","https://lh3.googleusercontent.com/9pIN7jGUdmWFabURewnoME1bJKVd_YtUlifA4CjXycdlVjCyYAXLsOpWdTq_6WaHD7Q=w512"]',
                'brand_id' => 7,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: P-OLED, 2K (1440 x 2880 pixels), 6 inches</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android 7.1</span></p><p><span style="font-weight: bold;">Camera sau: 16 MP + 13 MP</span></p><p><span style="font-weight: 700;">Camera trước: 5 MP</span></p><p><span style="font-weight: bold;">CPU: Qualcomm Snapdragon 835 (14nm)</span></p><p><span style="font-weight: bold;">RAM: 4 GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 128 GB</span></p><p><span style="font-weight: bold;">Thẻ SIM: 2 SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: 3300 mAh, sạc nhanh 18W</span></p><p><span style="font-weight: bold;">Thiết kế: Nguyên khối</span></p>',
                'slug' => 'LG-V30-Plus',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Asus ROG Phone 5',
                'description' => 'Asus ROG Phone 5 được trang bị con chip mạnh mẽ nhất của Qualcomm là Snapdragon 888 với tiến trình 5nm đầu tiên trên Thế Giới. Hiệu năng của máy vô cùng mạnh mẽ đi kèm với đa nhiệm vô cùng tốt bởi được cung cấp RAM 12GB ở phiên bản bộ nhớ nhỏ nhất và lên tới 16GB ở phiên bản bộ nhớ lớn. Asus ROG Phone 5 chạy hệ điều hành chuyên game ROG UI vô cùng mượt mà dựa trên Android 11 sẽ cho người dùng có trải nghiệm game tốt nhất.',
                'discount' => '10',
                'category_id' => 2,
                'thumbnail'=>'https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/w300/asus-rog-phone-5-black.jpeg',
                'images'=>'["https://cdn.mobilecity.vn/mobilecity-vn/images/2021/07/w300/asus-rog-phone-5-black.jpeg","https://phongvu.vn/cong-nghe/wp-content/uploads/2021/03/rog-phone-5-0.jpg","https://genk.mediacdn.vn/139269124445442048/2021/3/10/6-rog-phone-5group-photobw04-16153751656452133429309.jpg","https://cellphones.com.vn/sforum/wp-content/uploads/2021/03/ASUS-ROG-Phone-5-ra-mat-1.png"]',
                'brand_id' => 8,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: AMOLED, 1 tỷ màu, 144Hz, HDR10+</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android 11, ROG UI</span></p><p><span style="font-weight: bold;">Camera sau: 64 MP, f/1.8, 26mm (góc rộng)13 MP, f/2.4, 125˚, 11mm (siêu rộng)5 MP, f/2.0, (macro)Quay phim: 8K@30fps, 4K@30/60/120fps, 1080p@30/60/240fps, 720p@480fps; gyro-EIS</span></p><p><span style="font-weight: 700;">Camera trước: 24 MP, f/2.5, 27mm (góc rộng)</span></p><p><span style="font-weight: bold;">CPU: Qualcomm Snapdragon 888 (5 nm)8 nhân (1x2.84 GHz & 3x2.42 GHz & 4x1.80 GHz)GPU: Adreno 660</span></p><p><span style="font-weight: bold;">RAM: 12-16GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 512GB UFS 3.1</span></p><p><span style="font-weight: bold;">Thẻ SIM: 2 SIM, Nano SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: Li-Po 6000 mAh, Sạc nhanh 65W</span></p><p><span style="font-weight: bold;">Thiết kế: Gaming Phone</span></p>',
                'slug' => 'Asus-ROG-Phone-5',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Google Pixel 3',
                'description' => 'Sau sự thành công của Pixel 2 và Pixel 2 XL, mới đây Google tiếp tục tung ra Pixel 3  mới nhiều nâng cấp về thiết kế, hiệu năng cùng một hệ điều hành tối ưu mượt mà, ổn định kèm theo rất nhiều tính năng hay. Điện thoại Google Pixel 3  chính hãng đang làm mưa làm gió trên thị trường được rất nhiều người dùng săn đón bởi một thiết kế sang trọng, cấu hình mạnh mẽ là những điểm không thể bỏ qua trên điện thoại cao cấp này.',
                'discount' => '40',
                'category_id' => 2,
                'thumbnail'=>'https://cdn.mobilecity.vn/mobilecity-vn/images/2020/04/w300/pixel-3-1.jpg',
                'images'=>'["https://cdn.mobilecity.vn/mobilecity-vn/images/2020/04/w300/pixel-3-1.jpg","https://mecongnghe.vn/wp-content/uploads/2021/06/71lpDMLfQXL._SL1500_.jpg","https://cellphones.com.vn/sforum/wp-content/uploads/2018/12/Images-of-Google-Pixel-3-Lite-cases-leak.png","https://cdn.tgdd.vn/Files/2018/10/05/1122597/pixel-2_800x450.jpg"]',
                'brand_id' => 12,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: P-OLED, 5.5 inches, Full HD+ (1080 x 2160 pixels), HDR, Corning Gorilla Glass 5</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android 10</span></p><p><span style="font-weight: bold;">Camera sau: 12.2 MP, f/1.8, 28mm</span></p><p><span style="font-weight: 700;">Camera trước: 2 camera: 8 MP + 8 MP</span></p><p><span style="font-weight: bold;">CPU: Qualcomm SDM845 Snapdragon 845 (10 nm)</span></p><p><span style="font-weight: bold;">RAM: 4GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 64GB</span></p><p><span style="font-weight: bold;">Thẻ SIM: 2 SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: 2915 mAh - sạc nhanh 18W</span></p><p><span style="font-weight: bold;">Thiết kế: Nguyên khối</span></p>',
                'slug' => 'Google-Pixel-3',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Sony Xperia Z5',
                'description' => 'Sony Xperia Z5 có sự cải tiến mạnh mẽ  trong thiết kế với kiểu dáng thanh mảnh, gọn nhẹ, cộng với các màu sắc tự nhiên như: trắng, đen, xanh và màu gold cuốn hút  tạo điểm nhấn trong từng chi Sony Xperia Z5 cho người dùng cái nhìn mới  tinh tế thu hút sự chú ý của người khác, làm nên phong cách cho người dùng. Sony Xperia Z5 vẫn được thiết kế Omnibalance truyền thống của dòng Xperia, máy vẫn khẳng định chỗ đứng của mình mà không dễ dàng bị hòa lẫn với các samtphone đình đám khác.',
                'discount' => '50',
                'category_id' => 2,
                'thumbnail'=>'https://www.xtmobile.vn/vnt_upload/product/01_2018/thumbs/600_Z5_black_600x600_3.jpg',
                'images'=>'["https://cdn.mobilecity.vn/mobilecity-vn/images/2020/04/w300/pixel-3-1.jpg","https://mecongnghe.vn/wp-content/uploads/2021/06/71lpDMLfQXL._SL1500_.jpg","https://cellphones.com.vn/sforum/wp-content/uploads/2018/12/Images-of-Google-Pixel-3-Lite-cases-leak.png","https://cdn.tgdd.vn/Files/2018/10/05/1122597/pixel-2_800x450.jpg"]',
                'brand_id' => 6,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: Full HD</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android, v5.1.1 Lollipop</span></p><p><span style="font-weight: bold;">Camera sau: 23 MP</span></p><p><span style="font-weight: 700;">Camera trước: 5.1 MP</span></p><p><span style="font-weight: bold;">CPU: Snapdragon 810</span></p><p><span style="font-weight: bold;">RAM: 3 GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 32 GB</span></p><p><span style="font-weight: bold;">Thẻ SIM: 1 SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: 2900 mAh</span></p><p><span style="font-weight: bold;">Thiết kế: Cảm ứng</span></p>',
                'slug' => 'Sony-Xperia-Z5',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'iPhone XS',
                'description' => 'iPhone Xs tích hợp con chip mới của Apple với những hiệu năng mạnh mẽ đến vượt trội. Apple A12 Bionic được xây dựng trên tiến trình 7nm đầu tiên của hãng với 6 nhân giúp điện thoại iPhone Xs có thể chiến được mọi loại game cũng như thao tác thường ngày với khả năng tiết kiệm điện so với thế hệ trước.',
                'discount' => '10',
                'category_id' => 1,
                'thumbnail'=>'https://cdn.tgdd.vn/Products/Images/42/190324/iphone-xs-256gb-vang-1-2-org.jpg',
                'images'=>'["https://cdn.tgdd.vn/Products/Images/42/190324/iphone-xs-256gb-vang-5-org.jpg","https://cdn.tgdd.vn/Products/Images/42/190324/iphone-xs-256gb-vang-4-org.jpg","https://cdn.tgdd.vn/Products/Images/42/190324/iphone-xs-256gb-vang-3-org.jpg","https://cdn.tgdd.vn/Products/Images/42/190324/iphone-xs-256gb-vang-2-2-org.jpg"]',
                'brand_id' => 1,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: Full HD+</span></p><p><span style="font-weight: bold;">Hệ điều hành: IOS 12</span></p><p><span style="font-weight: bold;">Camera sau: Dual 12 MP</span></p><p><span style="font-weight: 700;">Camera trước: 7 MP</span></p><p><span style="font-weight: bold;">CPU: Apple A12 Bionic</span></p><p><span style="font-weight: bold;">RAM: 4 GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 256 GB</span></p><p><span style="font-weight: bold;">Thẻ SIM: 1 SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: 2658 mAh</span></p><p><span style="font-weight: bold;">Thiết kế: Thanh + Cảm ứng</span></p>',
                'slug' => 'iPhone-XS',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Samsung Galaxy A90 5G ',
                'description' => 'Smartphone mới của Samsung được trang bị chip Qualcomm Snapdragon 855 5G, dung lượng bộ nhớ trong 6 GB hoặc 8 GB, lưu trữ 128 GB, hỗ trợ khe cắm thẻ nhớ microSD tới 512 GB. Galaxy A90 5G được trang bị 3 camera. Camera chính 48MP F2.0, camera quét độ sâu 5MP F2.2, và camera góc siêu rộng 8MP F2.2. Mặt trước là camera selfie 32MP F2.0.',
                'discount' => '30',
                'category_id' => 2,
                'thumbnail'=>'https://cdn.tgdd.vn/Products/Images/42/209539/samsung-galaxy-a90-5g-black-600x600.jpg',
                'images'=>'["https://cdn.tgdd.vn/Products/Images/42/209539/samsung-galaxy-a90-5g-black-600x600.jpg  ","https://samnews.vn/wp-content/uploads/2019/11/samnews.vn-tren-tay-samsung-galaxy-a90-5g-tiem-can-flagship-3.jpg","https://s3.cloud.cmctelecom.vn/tinhte2/2019/11/4829634_Tren_tay_Samsung_A90_5g_tinhte-25.jpg","https://cdn.tgdd.vn/Files/2020/08/02/1276047/800x600_800x600.jpg"]',
                'brand_id' => 2,
                'content_detail'=>'<p><span style="font-weight: bold;">Màn hình: 6.7 inches, Full HD+ (1080 x 2400 pixels) 20:9</span></p><p><span style="font-weight: bold;">Hệ điều hành: Android 9.0 (Pie), One UI</span></p><p><span style="font-weight: bold;">Camera sau: 48 MP, f/2.0 - 8 MP, f/2.2 (Siêu rộng) - 5 MP, f/2.2, (Xóa phông)</span></p><p><span style="font-weight: 700;">Camera trước: 32 MP, f/2.0</span></p><p><span style="font-weight: bold;">CPU: Qualcomm SM8150 Snapdragon 855 (7 nm)</span></p><p><span style="font-weight: bold;">RAM: 6 GB</span></p><p><span style="font-weight: bold;">Bộ nhớ trong: 128 GB</span></p><p><span style="font-weight: bold;">Thẻ SIM: 1 SIM</span></p><p><span style="font-weight: bold;">Dung lượng pin: 4500 mAh, sạc nhanh 25W</span></p><p><span style="font-weight: bold;">Thiết kế: Thanh + Cảm ứng</span></p>',
                'slug' => 'Samsung-Galaxy-A90-5G',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
        ]);
    }
}
