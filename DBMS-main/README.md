# DBMS

git cli commands
git status //to check red and green
git add . // to convert red to green
git status //(to check if green)
git commit -m "xyz" //xyz=name of commit
git push origin //will push to current branch
git branch //to see all branches as well as current branch
git checkout -b <new_branch_name> //to create new branch 
git push -u origin <branch_name> //will push to specific branch
git checkout <branch_name>//to switch branch
git pull origin <branch_name> //commits changes in github branch to your machine

step by step work

1) first install git on your system. to do that, go to https://git-scm.com/downloads select your operating system and download. while installing accept the defaults and continue
2) first clone this repository to your desktop
  to do that, go to the folder you want to clone it to right click and select the option saying git bash here, or open command prompt in that folder by typing cmd in the address bar in your file browser
3) now, open the repository on github, click on "Code", and copy the link
4) now, go to git bash/cmd and type git clone and then paste the link
  it will create a folder named DBMS in the folder you are present in

Your development environment is set up

now do the changes you want to in the code and to add that code to the github repo,
1) after doing the required changes, go to the DBMS folder we created last time and open git bash/cmd in that folder
2) type git status to see the files you have made changes in
3) then do git add <filename> to add a specific file, or do git add . to add all files
4) now again do git status to see all the changes ready to be commited
5) now create a new branch and push your code into that branch, to do that,
6) git checkout -b new_branch_name this creates a new branch and switches to that branch
7) now to git commit -m "xyz" //xyz is the comment on the changes please type a meaningful comment, it is easier for others to see the last change
8) now do git push -u origin new_branch_name // this pushes your code onto the new branch in github
9) then go to github, you'll be able to see a message saying this branch has recent commits, create a pull request
10) click on that and and select the base branch as your branch and the destination branchas the branch from which you cloned the code and type a name for the pull request and you job is done

If someone has pushed some code into that branch or has merged some code into the branch you are working on, git will not allow you to push the code and you'll have to pull the code from github for that. to do that
1) open git bash in your development folder, and switch to the branch you want to pull the code from to switch branch do git checkout <branch_name>
2) to check which branch you are on, type git branch
3) now pull code from github, to do that type git pull. this pulls the code from github to your machine. sometimes there will be a merge conflict, this is because what you had in your machine was updated by someone else on github
4) you'll be able to see the files in which there was a conflict, open those files and do a find for "====" on the top you'll be able to see the previous code, and below you'll be able to see the new code, choose the code you want to keep, and delete the other code.
5) now try to push the code, you'll be able to push.
