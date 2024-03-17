# CLONE BLOG-LARAVEL

# cai dat

-   `laravel new blog`
-   tham khao voi `https://chat.openai.com/`
-   1. Tao CSDL rong
    -   We khong can tao Tables truc tiep trong MySQL tu dau nua;
    -   Laravel có cơ chế define csdl trong code của nó -> khi we làm việc với hệ csdl bất kỳ nó tu dong tao va chuyen doi kieu mà we ko cần quan tam project sử dụng hệ CSDL gì
-   2. cấu hình CSDL làm việc
    -   sửa config tại file .env
-   3. Tạo model:
    -   Lưu ý: tên table có `s` nhưng tên model không có `s` nhằm mapping.
    -   sử dụng `php artisan make:model Post -m` <`-m` để báo tạo cả migration & model/folder>
-   4. Thực thi migration (tạo table)
    -   run code `php artisan migrate` laravel sẽ thực thi các file migration chưa được thực hiện.
-   5. Tạo Controller:
    -   `php artisan make:controller PostController --resource`
    -   trong do: `--resource` là tùy chọn bật tất cả CRUD cơ bản tự động.

## TƯƠNG TÁC VỚI CSDL - MIGRATION

### 1. Sửa cấu trúc table mới tạo (chưa có data)

-   xóa table cũ đi; sửa lịch sử trong table `migration` -> xóa dòng theo dõi tương tác liên quan với table cần thay đổi.
-

### 2. TẠO DỮ LIỆU GIẢ VỚI LARAVEL <Faker & Seeder>

-   Faker là 1 library PHP tạo dữ liệu giả, nó cài sẵn trong laravel 8 trở đi.
-   1. Tạo 1 đối tượng Seeder với tên tương ứng với table cần fake data:
       `php artisan make:seeder PostsTableSeeder`
-   2. Sửa nội dung trong file mới tạo
-   3. Thực thi seeder cụ thể với tùy chọn --class (có thể chạy tất cả seeder 1 lúc với `php artisan db:seed`). Với lệnh:
       `php artisan db:seed --class=PostsTableSeeder`

# yeu cau

-   check `server requirement` phu hop voi laravel
-   tao project folder tai thu muc quan ly code chung (ko nhat thiet theo laragon folder)

# kien thuc

-   ham nac danh
-   `migration` noi tuong tac giua laravel va DB (thuc thi create, drop, alter...)
