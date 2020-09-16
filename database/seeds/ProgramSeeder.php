<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content1="<p>Chương trình Fullstack Javascript là khóa học được đào tạo bài bản từ A-Z phù hợp với các bạn đam mê lập trình, đã học nhưng chưa có định hướng cụ thể hoặc học trái ngành nhưng muốn chuyển hướng đầu tư vào lĩnh vực này.</p>
        <p>Khóa học cung cấp cho học viên các kiến thức về kỹ thuật lập trình, cơ sở dữ liệu và các môn chuyên ngành như: Front-End framework, jQuery, ReactJS, Java Core/Web, mySQL,…</p>
        <p>Ngoài ra, chương trình còn chú trọng đào tạo tiếng anh chuyên ngành và thực hiện các dự án thực tế từ doanh nghiệp giúp trang bị cho các bạn đầy đủ các kiến thức và kỹ năng để tự tin ứng tuyển vào các tập đoàn, doanh nghiệp lớn tại Việt Nam và thế giới.</p>";
        $content2="<p>Khóa học Lập trình Front end nhằm đào tạo ra các Lập trình viên Front end chuyên nghiệp, đáp ứng nhu cầu công việc của các công ty phần mềm hiện nay. Lập trình viên Front end là những người sử dụng các ngôn ngữ như HTML, CSS, JavaScript để tạo ra các giao diện ứng dụng Web đáp ứng yêu cầu tương tác ngày càng cao của người dùng.</p>
        <p>Để đáp ứng nhu cầu tương tác ngày càng cao của người dùng trên ứng dụng web, hàng loạt framework, thư viện HTML, CSS và JavaScript ra đời như Jquery, BootStrap, AngularJS, ReactJS v.v… và công việc xử lý giao diện cũng ngày nặng nề hơn, vượt quá khả năng của một lập trình viên thông thường. Từ đó hình thành nên một nghề nghiệp mới đó là Lập trình Front end.</p>";
        $content3="<p>Với nhiều ưu điểm như dễ đọc, thao tác tốt với các hệ quản trị cơ sở dữ liệu, thư viện phong phú và được sử dụng rộng rãi. Lập trình PHP dần trở thành ngôn ngữ lập trình phổ biến trong ứng dụng web và đặc biệt cần thiết với bất kỳ lập trình viên nào.</p>
        <p>Khóa học lập trình PHP tại Việt Úc sẽ giúp cho các học viên nắm vững các kiến thức nền tảng lập trình, phát triển ứng dụng web bằng Laravel Framework, linh động áp dụng những kỹ thuật Session, Cookie, Shopping Cart,…</p>
        <p>Đồng thời, thông qua các dự án thực tế trong quá trình học giúp cho học viên làm quen với môi trường làm việc thực tế tại các công ty phần mềm.</p>";
        $content4="<p>Java là ngôn ngữ bậc cao và thông dụng nhất hiện nay được các doanh nghiệp trên toàn thế giới sử dụng. Vì vậy, lập trình viên Java luôn được săn đón với thu nhập cao ngất ngưỡng. Bạn có muốn trở thành là một trong số đó?</p>
        <p>Khóa học lập trình Java sẽ trang bị cho bạn các kiến thức về Java Core – OOP, Java Desktop & mySQL,…Đặc biệt là Spring Framework – một trong những framework được các công ty phần mềm yêu cầu nhất hiện nay.</p>
        <p>Việt Úc cam kết hỗ trợ việc làm cho 100% sinh viên tốt nghiệp tại các công ty phần mềm lớn như FSOFT, Enclave, DTT, AsianTech, Axon Active,…</p>";
        $content5="<p>Cung cấp cho học viên những kiến thức và  kỹ năng cần thiết về lập trình Web mã nguồn mở PHP theo phiên bản mới nhất</p>
        <p>Trang bị cho học viên những kinh nghiệm để xây dựng website hoàn chỉnh cho doanh nghiệp với mục đích giới thiệu sản phẩm, thương mại điện tử, tin tức… với giao diện web thân thiện, hiện đại, có thể tương thích với mọi trình duyệt và hiển thị trên mọi thiết bị (responsive), dễ dàng được cập nhật thông qua hệ thống quản trị bảo mật.</p>
        <p>Giúp học viên làm quen với môi trường làm việc tại các công ty phần mềm.</p>
        <p>Chú trọng rèn luyện tư duy và phong cách lập trình</p>";
        $data=[
            ['name'=>'Lập trình Fullstack','slug'=>'lap-trinh-fullstack','content'=>$content1,'image'=>'https://t3h.edu.vn/sites/default/files/t3h.png'],
            ['name'=>'Lập trình Front-End','slug'=>'lap-trinh-front-end','content'=>$content2,'image'=>'https://techtalk.vn/wp-content/uploads/2018/11/1-DhyB46J92Drqe5COkT3seA.png'],
            ['name'=>'Lập trình PHP','slug'=>'lap-trinh-php','content'=>$content3,'image'=>'https://blog.one.com/wp-content/uploads/2018/10/php-update-1-732x549.png'],
            ['name'=>'Lập trình Java','slug'=>'lap-trinh-java','content'=>$content4,'image'=>'https://img-a.udemycdn.com/course/750x422/2669808_fcbe.jpg'],
            ['name'=>'Lập trình .NET','slug'=>'lap-trinh-net','content'=>$content5,'image'=>'https://softworldvietnam.com/wp-content/uploads/2017/08/dot_net.png'],
        ];
        DB::table('programs')->insert($data);
    }
}
