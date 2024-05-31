# git fetch and git  merge
 1. git fetch: kéo thay đổi từ trên về nhưng chủ chỉ kéo về update k làm thay đổi 
 2. merge: combine code vào
 3. pull: kéo code từ trên xuống, cập nhật thay đổi nhuwng chir pull từ chính nhánh đó 

 # git fork : copy repository not write 
 # git clone: copy reposity but include all can write 
 # send pull request: https://www.w3schools.com/git/git_remote_send_pull_request.asp?remote=github 
 - trong dự án k phải code xong rồi đẩy thẳng lên nhánh là được mà cần đẩy lên rồi tạo request pull 
 - khi đẩy lên vào lại git rồi check xong ấn nút create requets để assign là you, chọn người cần review 
 - trước khi ấn nút pull requets check lại nội dung lí do tạo requets phải ghi rõ ra
 - check 1 commit , mỗi lần đẩy chỉ 1 commit 
 - xem files changed để check xem đúng chưa 

 # git ignore: sẽ có những file bạn k muốnd dẩy lên vậy hãy file đó vào file .gitignore 
 # ssh key: cần tạo ssh key để đăng nhập an toàn hơn 

# git revert: k nên dùng , revert phát là quay về commit trước và k có cávch back up commit vừa rồi 

# git reset: 
- câu lệnh quay về 1 commit bất kì đó là git reset hash_commit
- để tìm gõ git reflog thì sẽ ra tất cả 
- để từ đó quay lại dùng git reset --hard hash-commit 

* 2 câu lệnh git revert và git reset đều backup code của commit bạn muốn nhưng reset là quay lại commit còn git revert là tạo 1 commit mới copy code từ commit mà bạn đang muốn
* nên dùng reset và reflog và git reset --hard 

# git amend: dùng để sửa đổi commit cuối cùng 
- link:  https://nhobethoi.com/git-commit-amend-thay-doi-commit-cuoi-cung/ 
- bạn đã sửa đổi và push lên 
- vì đây là git commit --amend -m "them"
- nên sửa rồi thêm như cácv bước sau 
- git add . 
- git commit --amend ( thêm commit trước đó)
- git push origin origin --force 
- chỉ cần 3 bước nay thay vì tạo commit mới thì gói vào commit gần nhất 

# git rebase: 
- nếu như git merge và để gộp nhánh này vào nhánh khác 
- thì git rebase dùng gộp commit nhánh này vào commit nhánh khác 
- nếu 1 câu 'git merge A' thì gộp toàn bộ code của nhánh A và thi
- ta có branch main có commit: A -B-C-E-F
- branch A có : A-B-C-4-5
- 'git rebase A': A-B-C-4-5-E-F 
- đơn giản là gộp commit vào 
- thích hợp cho việc đang ở các branch feature add vào branch develop 

