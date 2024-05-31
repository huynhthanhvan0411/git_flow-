#  git flow 
- đơn giản là 1 chu trình để thực hành sử dụng git 

# 5 branch trong git 
* master 
- là nhánh khởi tạo ban đầu của git
- là nhánh trên cùng nơi chứa toàn bộ source code 
- code ở đây thì k thể thay đổi 

* develop 
- hiểu nhánh phát triển cho vị trí release 
- nhánh dùng cho dev code 

* release 
- đóng vai trò giống như staging của dự án 
- khi release tính năng lên cho khách hàng 

* feature 
- checkout từ develop khi muốn tạo 1 feature mới
- login, register ,... 
- tạo các tính năng mới 

* hotfix 
- như tên gọi hotfix 
- sửa nhanh những lỗi chỉ có trên môi trường product 

# link git flow: https://codeforlife.wixsite.com/itblogger/post/t%C3%ACm-hi%E1%BB%83u-v%E1%BB%81-git-flow-trong-ph%C3%A1t-tri%E1%BB%83n-d%E1%BB%B1-%C3%A1n

# demo git flow:
- có 1 dự án leader tạo project 
- đã có 2 branch
1. master: repo trống của dự án, khởi tạo khi có git 
2. develop: đã thêm base, settinh các môi trường cần thiêt cho các dev phát triển
3. feature
- sau 1 thời làm viẹc thi có 3 tính năng sau cần làm, tươing ứng feature(tính năng)
- check out từ develop ra 
- feature/login
- feature/message 
- feature/live-stream 
4. release 
- sau 1 thời gian fix big có 2 fearure cb ra mắt 
- 2 feature đó đc merge vàp develop 
- sau đó checkout từ develop ra branch tên release/v1.0.0 và fix bug trên release để test and fix bug 
- oke thì merge vào vào develop rồi xóa branch đó đi 

5. hotfix 
- nào ngờ lên product mà lỗi mà đây là public rồi nên phải sửa luôn 
- branch hotifx/v1.0.1 được tạo ra và fix bug
- nếu oke thì merge vào master và develop rồi xóa hotfix/v1.0.1

# release và hotfix sau dùng có thể xóa ngay, git flow gồm có 5 luồng 

# ====================================MÔI TRƯỜNG========================
# 1.link: https://tokyotechlab.edu.vn/blogs/thuat-ngu-moi-truong-phat-trien-san-pham 
# có 5 môi trường cần biết 

# 1. local environment 
- là môi trường đầu tiên được thiết lậo trên pc, laptop cá nhân của dev 
- nơi code các feature, test hiệu năng của hệ thống, fix bugs
- code local là môi trường riêng mỗi dev, tránh đc rủi ro 

# 2. development environment 
- là môi trường phát triển phần mềm
- xây dựng sản ohaarm 
- khi code xong 1 feature trên local sẽ đc đẩy lên dev 

# 3. testing environment 
- sử dung test các chức năng 
- dành cho tester, qa

# 4. staging environment 
- môi trường test này là do cả khách hàng và đội ngũ cùng test 

# 5. production environment 
- đây là môi trường thật, đã đc deploy 
- moi trường trải nghiệm cuối cùng 