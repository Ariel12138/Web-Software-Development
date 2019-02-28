

## Git & Github 使用

mkdir 新建文件
git init 初始化
git status
git add （git add . to add all）（to stage files）
git status
git commit
git commit -m 进行commit时附加一条说明
git commit -a -m 全部commit
git diff（if unstaged）

**Working with Branches：**

git branch _branchName （create branch）
git status
git checkout _branchName （switch to branch）
git status
git checkout master （switch to  inmaster）
git checkout -b _branchName （create and switch to branch）
git branch（view all branches）

**Note：**MAKE SURE to switch to the branch before making changes

git merge _branchName（merge the current branch and the specified one）
git status
esc+wq 退出VIM编辑器
git commit -a（to commit all）-m（to add messages）
git branch —merged
git branch —no-merge
git -d（to delete branch）_branchName
git -D（force deletion）_branchName