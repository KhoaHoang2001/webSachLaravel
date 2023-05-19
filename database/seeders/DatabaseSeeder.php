<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('tbl_customer')->insert([
            [
                'customer_avatar' => 'avt.jpg',
                'customer_name' => 'Châu Hoàng Long',
                'email' => 'hoanglong1407b@gmail.com',
                'customer_username' => 'hoanglong1407b',
                'password' => bcrypt('Long1234'),
                'customer_phone' => '0794690384',
                'status' => '0',
            ]
        ]);

        DB::table('tbl_admin')->insert([
            [
                'admin_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'admin_phone' => '070123456',

            ],
            [
                'admin_name' => 'Kiami Chau',
                'email' => 'kiamichau@gmail.com',
                'password' => bcrypt('1234'),
                'admin_phone' => '0794690384',
            ]
        ]);

        // DB::table('tbl_user')->insert([
        //     [
        //         'user_name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'password' => bcrypt('1234'),
        //         'user_phone' => '070123456',
        //     ]
        // ]);
        // // =================================== TẠO DỮ LIỆU CHO BRAND ============================================== 

        DB::table('tbl_brand')->insert([
            [
                'brand_name' => 'Nhà xuất bản Kim Đồng',
                'brand_content' => 'Nhà xuất bản chuyên về sách thiếu nhi, với đa dạng các tác phẩm văn học, truyện tranh, và sách giáo dục dành cho trẻ em',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
            [
                'brand_name' => 'Nhà xuất bản Thanh niên',
                'brand_content' => 'Chuyên xuất bản sách dành cho đối tượng thanh niên, với các thể loại tiểu thuyết, hồi ký, sách giáo dục và văn hóa',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
            [
                'brand_name' => 'Nhà xuất bản Giáo dục Việt Nam',
                'brand_content' => 'Tập trung vào việc xuất bản sách giáo dục và khoa học, nhằm đáp ứng nhu cầu học tập và nghiên cứu của cộng đồng',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
            [
                'brand_name' => 'Nhà xuất bản Trẻ',
                'brand_content' => 'Nhà xuất bản Trẻ là một trong những nhà xuất bản hàng đầu tại Việt Nam, chuyên sản xuất và phát hành các loại sách với đa dạng thể loại như văn học, tiểu thuyết, sách thiếu nhi, kỹ năng sống, kinh doanh, lịch sử, và nhiều lĩnh vực khác. Với hơn 40 năm kinh nghiệm trong ngành xuất bản, Trẻ đã xây dựng một danh mục sách đa dạng và chất lượng, đáp ứng nhu cầu đọc sách của độc giả mọi lứa tuổi. Nhà xuất bản Trẻ cũng là địa chỉ tin cậy cho các tác giả trong việc xuất bản tác phẩm của mình và đưa tác phẩm Việt Nam ra thị trường quốc tế. Với cam kết đem lại những cuốn sách chất lượng cao, Trẻ đã xây dựng được uy tín và đóng góp tích cực vào sự phát triển của ngành xuất bản ở Việt Nam. ',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
	        [
                'brand_name' => 'Nhà xuất bản Văn hóa',
                'brand_content' => 'Nhà xuất bản Văn hóa là một trong những nhà xuất bản nổi tiếng và có uy tín tại Việt Nam. Với hơn 30 năm kinh nghiệm trong lĩnh vực xuất bản, Văn hóa đã trở thành một địa chỉ quen thuộc cho các tác giả và độc giả yêu sách. Nhà xuất bản chuyên sản xuất và phát hành các loại sách về văn học, tiểu thuyết, sách thiếu nhi, lịch sử, triết học, khoa học, và nhiều lĩnh vực khác. Đặc biệt, Văn hóa cũng ghi nhận sự đóng góp và giới thiệu các tác phẩm văn học của các tác giả nổi tiếng trong và ngoài nước. Nhà xuất bản Văn hóa không chỉ đáp ứng nhu cầu đọc sách của độc giả mà còn góp phần bảo tồn và phát triển văn hóa, tri thức trong xã hội. Với chất lượng sách và sự tận tâm trong công việc, nhà xuất bản Văn hóa đã xây dựng được lòng tin và uy tín trong lòng độc giả và cộng đồng văn học Việt Nam. ',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
	        [
                'brand_name' => 'Nhà xuất bản Pháp luật',
                'brand_content' => 'Nhà xuất bản Pháp luật: Chuyên xuất bản sách về lĩnh vực pháp luật, bao gồm sách luật, sách hướng dẫn và tư liệu liên quan đến lĩnh vực pháp lý. ',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
	        [
                'brand_name' => 'Nhà xuất bản First News',
                'brand_content' => 'First News: Nhà xuất bản đa dạng các loại sách, từ sách văn học, kinh tế, tự truyện đến sách thiếu nhi và sách hướng dẫn. ',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
	        [
                'brand_name' => 'Nhà xuất bản Đại học Quốc gia Hà Nội',
                'brand_content' => 'Nhà xuất bản chuyên về xuất bản các tài liệu và sách giáo trình dành cho sinh viên, nghiên cứu viên và giảng viên trong lĩnh vực đào tạo và nghiên cứu khoa học',
                'brand_logo' => '1 (3).jpg',
                'brand_status' => 1,
            ],
        ]);


        // // =================================== TẠO DỮ LIỆU CHO CATEGORY ==============================================

        DB::table('tbl_category')->insert([
            [
                'category_name' => 'Tiểu thuyết, hồi ký',
                'status' => 1,
            ],
            [
                'category_name' => 'Sách Thiếu nhi',
                'status' => 1,
            ],
            [
                'category_name' => 'Chính trị - Triết học Đông Tây',
                'status' => 1,
            ],
            [
                'category_name' => 'Sách Kinh tế',
                'status' => 1,
            ],
            [
                'category_name' => 'Kỹ năng sống',
                'status' => 1
            ],
            [
                'category_name' => 'Văn học',
                'status' => 1
            ],
            [
                'category_name' => 'Văn hóa',
                'status' => 1
            ],
            [
                'category_name' => 'Tâm lý',
                'status' => 1
            ],
            [
                'category_name' => 'Phiêu lưu',
                'status' => 1
            ],
            [
                'category_name' => 'Luật pháp',
                'status' => 1
            ],
            [
                'category_name' => 'Khoa học viễn tưởng',
                'status' => 1
            ],
            [
                'category_name' => 'Tự truyện',
                'status' => 1
            ],
            [
                'category_name' => 'Nghệ thuật',
                'status' => 1
            ],
            [
                'category_name' => 'Thời trang và phong cách sống',
                'status' => 1
            ],
            [
                'category_name' => 'Tình yêu',
                'status' => 1
            ],
            [
                'category_name' => 'Văn hóa ẩm thực',
                'status' => 1
            ]
        ]);


        // // =================================== TẠO DỮ LIỆU CHO PRODUCT ==============================================

        DB::table('tbl_product')->insert([
            [
                'product_name' => 'The Beauty Within',
                'brand_id' => '4',
                'category_id' => '5',
                'product_content' => 'This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book This is a content of the name of the book ',
                'product_price' => 119000,
                'product_author' => 'Samantha Donald',
                'product_img' => 'thebeautyWithin.jpg',
                'product_quantity' => 11,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Văn hóa Thăng Long',
                'brand_id' => '5',
                'category_id' => '7',
                'product_content' => 'Sách "Văn hóa Thăng Long" là một tác phẩm tập hợp các kiến thức về văn hóa, lịch sử và di sản văn hóa của thành phố Hà Nội, đặc biệt là văn hóa của khu di tích Thăng Long - Hà Nội. Sách mang đến cho độc giả cái nhìn sâu sắc về lịch sử phát triển của Thăng Long - Hà Nội, từ các di tích, danh lam thắng cảnh, đến các phong tục, nghệ thuật và văn hóa dân gian đặc trưng của khu vực này. Được viết bởi các tác giả uy tín và chuyên gia văn hóa, sách "Văn hóa Thăng Long" là một nguồn tư liệu quý giá cho những ai quan tâm đến văn hóa và lịch sử Việt Nam. ',
                'product_price' => 119000,
                'product_author' => 'Nhuận Ngọc',
                'product_img' => 'vanhoathanglong.png',
                'product_quantity' => 19,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Điều Bí Mật - The Secret',
                'brand_id' => '4',
                'category_id' => '8',
                'product_content' => 'Sách "Điều Bí Mật - The Secret" là một cuốn sách mang đến cho độc giả những phương pháp và triết lý về sức mạnh của suy nghĩ tích cực và hướng dẫn cách áp dụng để thay đổi cuộc sống. Từ việc khám phá định luật hấp dẫn, tác giả tiết lộ các nguyên tắc và phương pháp để tạo ra sự thu hút và thành công trong mọi lĩnh vực của cuộc sống. Sách "Điều Bí Mật - The Secret" đã trở thành một hiện tượng toàn cầu, truyền cảm hứng và đem lại niềm tin cho hàng triệu người trên khắp thế giới',
                'product_price' => 239000,
                'product_author' => 'Quảng Văn',
                'product_img' => 'DieuBiMat.jpg',
                'product_quantity' => 10,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => '24 Ngày Lênh Đênh',
                'brand_id' => '4',
                'category_id' => '1',
                'product_content' => '"24 Ngày Lênh Đênh" là câu chuyện tình yêu đầy cảm xúc và cuộc sống xoay quanh hai nhân vật chính, tận dụng từng ngày cuộc sống để làm điều tốt đẹp hơn. Cuốn sách mang đến những thông điệp về tình yêu, sự hy sinh, và ý nghĩa của cuộc sống. Với lối viết sáng tạo và tinh tế, tác giả tạo nên một câu chuyện độc đáo và đầy sức hút. "24 Ngày Lênh Đênh" là một cuốn sách đáng đọc dành cho những người tìm kiếm cảm xúc và những bài học về tình yêu và cuộc sống',
                'product_price' => 440000,
                'product_author' => 'Phạm Mai Thanh',
                'product_img' => '24NgayLenhDenh.png',
                'product_quantity' => 9,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Đời Đơn Giản Khi Ta Đơn Giản',
                'brand_id' => '4',
                'category_id' => '8',
                'product_content' => '"Đời Đơn Giản Khi Ta Đơn Giản" là cuốn sách tâm lý tự phát triển mang đến những câu chuyện và bài học về việc đơn giản hóa cuộc sống và tạo ra sự cân bằng trong tâm hồn. Tác giả chia sẻ những góc nhìn sâu sắc và những nguyên tắc để sống một cuộc sống đơn giản và hạnh phúc. Cuốn sách giúp bạn nhìn nhận lại giá trị thực sự của cuộc sống, tìm hiểu về sự tự chấp nhận và thực hiện những thay đổi tích cực trong bản thân để đạt được cuộc sống đơn giản và an lành',
                'product_price' => 120000,
                'product_author' => 'Xuân Nghuyễn',
                'product_img' => 'doi-don-gian-khi-ta-don-gian.jpg',
                'product_quantity' => 12,
                'product_featured' => 1,
                'status' => 1,
            ],
      
            [
                'product_name' => 'Bộ luật dân sự và văn bản hướng dẫn thi hành',
                'brand_id' => '6',
                'category_id' => '10',
                'product_content' => '"Bộ luật dân sự và văn bản hướng dẫn thi hành" là một tập hợp các quy định pháp luật liên quan đến lĩnh vực dân sự trong hệ thống pháp luật của Việt Nam. Cuốn sách bao gồm Bộ luật dân sự và các văn bản hướng dẫn chi tiết về cách thực hiện và áp dụng các quy định của Luật dân sự. Nó cung cấp cho độc giả kiến thức về quyền và nghĩa vụ của công dân, giao dịch dân sự, hợp đồng, quyền sở hữu và các vấn đề pháp lý khác trong lĩnh vực dân sự. Cuốn sách này là một tài liệu quan trọng và hữu ích cho các chuyên gia pháp luật, sinh viên luật và những ai quan tâm đến lĩnh vực pháp luật dân sự',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản Lao động - Xã hội',
                'product_img' => 'body-2-Cong-Ly-2574-1416197358.jpg',
                'product_quantity' => 30,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Tô hoài Dế mèn phiêu lưu ký',
                'brand_id' => '1',
                'category_id' => '9',
                'product_content' => '"Dế mèn phiêu lưu ký" là cuốn sách truyện thiếu nhi nổi tiếng của nhà văn Tô Hoài. Cuốn sách kể về cuộc phiêu lưu của chú dế mèn thông minh và gan dạ trong việc giải cứu bạn bè khỏi những nguy hiểm, khám phá những vùng đất mới và học hỏi những giá trị nhân văn. Truyện mang lại những bài học về tình bạn, sự dũng cảm và lòng tự trọng. Đây là một cuốn sách thú vị và đầy sáng tạo, thu hút sự quan tâm của các em thiếu nhi và mang lại niềm vui và kỳ vọng cho độc giả.',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản văn hóa Thông tin',
                'product_img' => 'demen.jpg',
                'product_quantity' => 23,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Late Night Thoughts',
                'brand_id' => '2',
                'category_id' => '8',
                'product_content' => '"Late Night Thoughts" là một tuyển tập những suy nghĩ đêm khuya, ghi chép về cuộc sống, tình yêu, và những suy ngẫm sâu sắc về ý nghĩa của tồn tại. Cuốn sách mang đến những trang viết chân thành, tình cảm và chia sẻ những suy nghĩ trong giờ khuya khi tâm hồn thấu hiểu và cảm nhận sự đời thường. Từ những câu chuyện ngắn, những đoạn thơ và những tình huống cuộc sống, "Late Night Thoughts" là một tác phẩm đơn giản nhưng sâu sắc, mở ra một góc nhìn mới về cuộc sống và những tình cảm đan xen trong lòng chúng ta',
                'product_price' => 119000,
                'product_author' => 'VEE',
                'product_img' => 'latenighthough.jpg',
                'product_quantity' => 6,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Lunar Storm',
                'brand_id' => '4',
                'category_id' => '11',
                'product_content' => '"Lunar Storm" là một cuốn tiểu thuyết khoa học viễn tưởng đầy phiêu lưu và hấp dẫn. Câu chuyện xoay quanh hành trình của nhóm nhân vật trong viễn cảnh tương lai, khi con người đã khám phá và xâm nhập vào vùng không gian ngoài Trái đất. Tuy nhiên, một cơn bão bất thường trên mặt trăng khiến họ phải đối mặt với những thách thức và nguy hiểm không ngờ. Với những yếu tố hành động, bí ẩn và những khám phá đầy kịch tính, "Lunar Storm" sẽ đưa độc giả vào một cuộc phiêu lưu đáng nhớ trên vùng không gian rộng lớn và khám phá những bí mật đen tối của vũ trụ',
                'product_price' => 119000,
                'product_author' => 'Terry Crosby',
                'product_img' => 'lunarstorm.jpeg',
                'product_quantity' => 9,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Đại cường về Nhà nước và pháp luật',
                'brand_id' => '8',
                'category_id' => '10',
                'product_content' => '"Đại cương về Nhà nước và pháp luật" là một cuốn sách chuyên khảo dành cho những ai quan tâm đến lĩnh vực pháp luật và hệ thống chính trị của Việt Nam. Cuốn sách cung cấp những kiến thức cơ bản về cấu trúc và hoạt động của Nhà nước, quyền và nghĩa vụ của công dân, cơ chế quản lý và thực hiện pháp luật. Đồng thời, sách cũng giới thiệu về hệ thống pháp luật Việt Nam, từ pháp luật hiện hành đến các văn bản hướng dẫn thi hành. Với ngôn ngữ súc tích và cách trình bày logic, "Đại cương về Nhà nước và pháp luật" là một nguồn tư liệu hữu ích cho những ai muốn tìm hiểu về lĩnh vực này',
                'product_price' => 119000,
                'product_author' => 'Nhà xuất bản đại học Quốc gia Hà Nội',
                'product_img' => 'sach_Tan_Nhat_Minh-669x1024.png',
                'product_quantity' => 40,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Sự tích bánh chưng bánh giày',
                'brand_id' => '4',
                'category_id' => '2',
                'product_content' => '"Sự tích bánh chưng bánh giày" là một cuốn sách dành cho trẻ em, kể về câu chuyện thú vị về nguồn gốc và ý nghĩa của hai loại bánh truyền thống trong nền văn hóa dân gian Việt Nam. Qua câu chuyện, trẻ em sẽ được khám phá và hiểu về truyền thống, tình cảm gia đình, và ý nghĩa văn hóa của việc làm bánh chưng và bánh giày trong ngày Tết Nguyên Đán. Cuốn sách không chỉ mang tính giải trí mà còn giúp trẻ phát triển tư duy, sự hiểu biết về văn hóa dân gian Việt Nam',
                'product_price' => 200000,
                'product_author' => 'Thạch Sanh',
                'product_img' => 'bia-sach2-9886.jpg',
                'product_quantity' => 10,
                'product_featured' => 1,
                'status' => 1,


            ],
            [
                'product_name' => 'Ai từng là con nít',
                'brand_id' => '4',
                'category_id' => '12',
                'product_content' => '"Ai từng là con nít" là cuốn sách tự truyện đầy cảm xúc và chân thực, được viết bởi tác giả đưa đọc giả trở về tuổi thơ. Cuốn sách kể về những kỷ niệm, những trải nghiệm, và những câu chuyện đáng nhớ trong quá trình lớn lên của tác giả. Từ những trò chơi đường phố, những món đồ chơi cổ điển, đến những ngày học trường và tình bạn thời thơ ấu, sách mang đến cho độc giả những cảm xúc hoài niệm, tưởng nhớ về quá khứ và những giá trị của tuổi thơ',
                'product_price' => 299000,
                'product_author' => 'Nhiều tác giả',
                'product_img' => 'aitunglaconnitjpg.jpg',
                'product_quantity' => 14,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'The delicate adornment',
                'brand_id' => '3',
                'category_id' => '13',
                'product_content' => '"The Delicate Adornment" là một cuốn sách tuyệt đẹp về trang sức và phụ kiện, mang đến cho độc giả cái nhìn sâu sắc về thế giới của những chiếc vòng cổ, nhẫn, dây chuyền và các loại phụ kiện khác. Từ những thiết kế độc đáo, đến sự kết hợp tài tình của chất liệu và màu sắc, cuốn sách truyền cảm hứng và cung cấp thông tin giá trị cho những ai yêu thích nghệ thuật trang sức. Với những hình ảnh tuyệt đẹp và lời giải thích chi tiết, cuốn sách này là một nguồn cảm hứng và hướng dẫn cho những người yêu thích trang sức và muốn khám phá thêm về thế giới của nó ',
                'product_price' => 349000,
                'product_author' => 'Dr.bob',
                'product_img' => 'artistic.png',
                'product_quantity' => 29,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Muốn nhanh thì phải Từ - Từ',
                'brand_id' => '4',
                'category_id' => '8',
                'product_content' => 'Cuốn sách "Muốn nhanh thì phải Từ Từ" là một nguồn cảm hứng và hướng dẫn cho những người muốn đạt được thành công và phát triển bản thân. Từ những câu chuyện thành công, những bài học quý giá và những chiến lược thực tiễn, cuốn sách này giúp bạn tìm ra cách tiếp cận vấn đề, đặt mục tiêu và phát triển kỹ năng cần thiết để thành công trong công việc và cuộc sống. Bằng cách từ từ xây dựng và định hướng mục tiêu của bạn, bạn sẽ có thể thấy sự tiến bộ và thành tựu đáng kể. Cuốn sách này là một hướng dẫn chi tiết và thú vị để bạn đạt được thành công theo cách của riêng mình',
                'product_price' => 139000,
                'product_author' => 'Anh ba xe ôm',
                'product_img' => 'bia-sach-hoc-vien-thiet-ke-viettamduc02.jpg',
                'product_quantity' => 8,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Đủ Gần Mà Không Đau Đớn - Đủ Xa Mà Không Cô Đơn',
                'brand_id' => '4',
                'category_id' => '8',
                'product_content' => 'Cuốn sách "Đủ Gần Mà Không Đau Đớn - Đủ Xa Mà Không Cô Đơn" là một hành trình khám phá về tình yêu và hạnh phúc trong cuộc sống. Từ những trải nghiệm cá nhân, tác giả chia sẻ những bài học quý giá về cách xây dựng và duy trì một mối quan hệ đầy ý nghĩa và hạnh phúc. Cuốn sách tập trung vào việc tạo ra sự cân bằng giữa sự gần gũi và độc lập, cho phép chúng ta cảm nhận sự yêu thương và sự tự do đồng thời. Bằng cách khám phá những cảm xúc sâu thẳm và tạo ra mối quan hệ lành mạnh, chúng ta có thể tìm thấy sự hài lòng và niềm vui trong cuộc sống. Cuốn sách này là một lời nhắc nhở quan trọng về tình yêu, hạnh phúc và sự thỏa mãn trong mối quan hệ của chúng ta',
                'product_price' => 299000,
                'product_author' => 'Hyenam Kim',
                'product_img' => 'DuGanDuXa.png',
                'product_quantity' => 102,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Hãy Là Chính Mình',
                'brand_id' => '4',
                'category_id' => '8',
                'product_content' => 'Cuốn sách "Hãy Là Chính Mình" là một nguồn cảm hứng và hướng dẫn cho những người muốn khám phá bản thân, phát triển tiềm năng và sống một cuộc sống ý nghĩa. Từ việc khám phá giá trị cá nhân, xác định mục tiêu và định hình đam mê, sách cung cấp những lời khuyên và phương pháp giúp bạn xây dựng một tư duy tích cực, tự tin và đạt được thành công trong cuộc sống. Cuốn sách chứa đựng những câu chuyện truyền cảm hứng, bài học quý giá và bài tập thực hành để bạn áp dụng vào cuộc sống hàng ngày. Dựa trên những nguyên tắc cơ bản về sự tự tin, định hình mục tiêu và sự kiên nhẫn, sách giúp bạn tìm thấy sự hài lòng và thành công trong việc trở thành phiên bản tốt nhất của chính mình',
                'product_price' => 112000,
                'product_author' => 'Trần Ngọc Xuân',
                'product_img' => 'HayLaChinhMinh.png',
                'product_quantity' => 25,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Hãy Nhớ Tên Anh Ấy',
                'brand_id' => '4',
                'category_id' => '15',
                'product_content' => '"Hãy Nhớ Tên Anh Ấy" là một câu chuyện tình yêu ngọt ngào và xúc động. Cuốn sách kể về câu chuyện tình giữa hai nhân vật chính, một cô gái trẻ và chàng trai đầy bí ẩn. Họ gặp nhau và từ đó mở ra một cuộc phiêu lưu tình yêu đầy cảm xúc và thăng trầm. Qua những trang sách, bạn sẽ được trải qua cảm xúc hạnh phúc, buồn bã, tương tư và hy vọng. "Hãy Nhớ Tên Anh Ấy" là một cuốn sách lãng mạn, mang lại cho độc giả những giây phút đắm chìm trong tình yêu và khám phá về sự đồng cảm và hiểu biết với người khác',
                'product_price' => 149000,
                'product_author' => 'Trần Hồng Quân',
                'product_img' => 'HayNhoTenAnhAy.png',
                'product_quantity' => 35,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Nhật Ký Thức Ăn',
                'brand_id' => '1',
                'category_id' => '16',
                'product_content' => '"Nhật Ký Thức Ăn" là một cuốn sách thú vị về văn hóa ẩm thực và nghệ thuật nấu ăn. Cuốn sách ghi lại những trải nghiệm và hành trình khám phá đa dạng của tác giả với những món ăn từ khắp nơi trên thế giới. Từ những món ăn đường phố đến những món ăn truyền thống, tác giả chia sẻ kỹ thuật nấu ăn, công thức và những bí quyết để tạo ra những món ăn ngon và độc đáo. "Nhật Ký Thức Ăn" không chỉ là một cuốn sách hướng dẫn nấu ăn, mà còn là một cẩm nang văn hóa, mang đến cho độc giả sự hiểu biết sâu hơn về ẩm thực và cách thưởng thức ẩm thực từ các nền văn hóa khác nhau',
                'product_price' => 119000,
                'product_author' => 'An An',
                'product_img' => 'nhatKyThucAn.png',
                'product_quantity' => 5,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Những Quý Cô Thời Trang',
                'brand_id' => '4',
                'category_id' => '14',
                'product_content' => 'Những Quý Cô Thời Trang" là cuốn sách dành cho những người yêu thích thời trang và muốn khám phá thêm về phong cách sống thời thượng. Từ cách chọn trang phục, phối đồ, trang điểm đến cách ứng xử và tự tin trong giao tiếp, cuốn sách cung cấp những lời khuyên và hướng dẫn chi tiết để bạn trở thành một quý cô thời trang. Ngoài ra, sách còn chia sẻ những câu chuyện thành công của các ngôi sao thời trang và những bí quyết để tạo nên phong cách cá nhân độc đáo. "Những Quý Cô Thời Trang" là nguồn cảm hứng và hướng dẫn đắc lực để bạn tự tin tỏa sáng trong cuộc sống hàng ngày',
                'product_price' => 249000,
                'product_author' => 'Nguyễn Lan Phương',
                'product_img' => 'NhungQuyCoThoiTrang.png',
                'product_quantity' => 14,
                'product_featured' => 1,
                'status' => 1,
            ],


            [
                'product_name' => 'Sâu Vào Những Giấc Mơ',
                'brand_id' => '4',
                'category_id' => '1',
                'product_content' => '"Sâu Vào Những Giấc Mơ" là một cuốn tiểu thuyết đầy màu sắc và lôi cuốn, kể về hành trình khám phá của nhân vật chính trong thế giới của những giấc mơ. Tác giả xây dựng một câu chuyện tinh tế với những tình tiết hấp dẫn, những nhân vật đa chiều và những thông điệp sâu sắc về sự khao khát, hy vọng và tìm kiếm ý nghĩa cuộc sống. Qua việc lồng ghép giữa thực tế và giấc mơ, cuốn sách khơi gợi sự tưởng tượng và khám phá những khía cạnh mới về bản thân và cuộc sống. Được viết với ngôn ngữ tinh tế và phong cách mượt mà, "Sâu Vào Những Giấc Mơ" là một cuốn sách đáng đọc cho những ai yêu thích sự phiêu lưu và khám phá trong trang sách. ',
                'product_price' => 349000,
                'product_author' => 'Vũ Minh Thái',
                'product_img' => 'SauVaoNhungGiacMo.png',
                'product_quantity' => 19,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Sương Mù Nơi Rừng Rậm',
                'brand_id' => '4',
                'category_id' => '9',
                'product_content' => '"Sương Mù Nơi Rừng Rậm" là một cuốn tiểu thuyết phiêu lưu mạo hiểm, đưa người đọc vào cuộc hành trình truy tìm những bí ẩn trong rừng rậm sâu thẳm. Từ những hành động liều lĩnh, những mưu mẹo thông minh cho đến những sự phát hiện bất ngờ, câu chuyện xoay quanh những nhân vật đầy cá tính và cuộc đối đầu căng thẳng với môi trường tự nhiên. Qua trang sách, người đọc sẽ được trải nghiệm một thế giới đầy màu sắc, hiểm trở và đầy bí ẩn của rừng rậm. ',
                'product_price' => 289000,
                'product_author' => 'Mạnh Nam Huy',
                'product_img' => 'SuongMuNoiRungRam.png',
                'product_quantity' => 8,
                'product_featured' => 1,
                'status' => 1,
            ],
            [
                'product_name' => 'Thời Trang Tiết Kiệm',
                'brand_id' => '3',
                'category_id' => '14',
                'product_content' => '"Thời Trang Tiết Kiệm" là một cuốn sách hướng dẫn về cách thức mua sắm và lựa chọn thời trang một cách thông minh và tiết kiệm. Từ việc chọn mua quần áo phù hợp, tìm kiếm ưu đãi và mua sắm trong ngân sách, sách cung cấp những lời khuyên, chiến lược và kỹ năng cần thiết để xây dựng một tủ đồ đa dụng và phong cách mà không làm tốn kém quá nhiều tài chính. Đồng thời, cuốn sách cũng chia sẻ các bí quyết và cách sắp xếp tủ đồ để tối ưu hóa việc mix-match và tận dụng tối đa các trang phục có sẵn.',
                'product_price' => 189000,
                'product_author' => 'Phương Khanh',
                'product_img' => 'ThoiTrangTietKiem.jpg',
                'product_quantity' => 55,
                'product_featured' => 1,
                'status' => 1,
            ],
                      
        ]);

    }
}
