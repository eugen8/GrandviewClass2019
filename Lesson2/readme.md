# Lesson 2 follow-up

In this folder you will find two images, a pdf file with an image of what you need to implemnt as HTML and the text I used.

First let's get the changes I made in this repository into your own fork:

Go to your GrandviewClass2019 folder
Pull the parent branch into your local repository, you might need to resolve any merge conflicts. 
``` 
git pull https://github.com/eugen8/GrandviewClass2019 master

```
For more details and commands keep reading. 

This should create a folder called Lesson2
Depending on your text editor registered when you installed github, you might have "VIM" or "EMACS" style editor. 

A quick intro to VIM is here: https://www.tutorialspoint.com/vim/vim_getting_familiar.htm 
If everything fails, you can copy/paste the Lesson2 folder and in class we'll figure out the issue. Give it a really good try though.


***
Now you should have the pdf file showing you what the final result should look like in the browser. The txt file has the text I used, but no html of any kind. 
Your job is to update lesson2.html to look just like the pdf in the browser. Small differences are fine, as long as you practice all those html tags. 

There are no styles in this document. 



__Hints:__ 

For images use width and alt attributes : https://www.w3schools.com/html/html_images.asp. 
For the table use cellpadding, border and cellspacing attributes. Even though they're deprectated in HTML5 you'll still encouter them in older html. Later we'll use styling. 

Make the labels on checkboxes and radio buttons clickable. Read about labels at: https://www.w3schools.com/tags/tag_label.asp

To be able to see < > in your browser read about html entities: https://www.w3schools.com/html/html_entities.asp 







***


Useful git commands:

`git clone URL` - clones the repository. When using github and windows you can clone https versions. I am used to cloning ssh when working in linux as it won't have the nice github login screen. We'll have the chance to work with ssh later. 

`git remote get-url origin` - this will show you the "origin" remote url. When you simply do a git clone then you'll have a loca branch "master" that will have the code from the origin url. 

`git add img1.txt` - add img1.txt to git  
`git add . ` -  adds all files in the current directory to git
`git add -A` or `git add --all` - adds all files and folders, and files/folders within those folders to git. In other words adds all that's not added yet.

`git commit -m "your message"` - commit everything that was added to your local git repository. Once you commit something, you can later go back to that version of the file (versions are also called revisions). It is important to commit often, especially before you make changes you are not sure you'll want to stay. You can also commit only certain things, e.g. when I was working on this lesson I wanted to commit only the Lesson2 folder, so I did: `git commit Lesson2 -m "Lesson2 folder"`.

`git push origin master` - it will push the code you committed in the master branch to the url have registered as "origin"

This being said, you can add another URL now called "parent" which will have the code in the repository that I created GrandViewClass2019, from which you forked. To do that use:

`git remote add parent https://github.com/eugen8/GrandviewClass2019`

`git remote -v` will verify if you have successfully added the url, or just show you what URLs you have. e.g. 
```
origin  https://github.com/user1/GrandviewClass2019 (fetch)
origin  https://github.com/user1/GrandviewClass2019 (push)
parent  https://github.com/eugen8/GrandviewClass2019 (fetch)
parent  https://github.com/eugen8/GrandviewClass2019 (push)
```

IF you want to reset your code to match origin repository and throw away all your local commits, you can do that with
```
git fetch origin
git reset --hard origin/master
```
Warning! you'll loose everything you didn't push to your remote url. 


There are lots of great materials on GIT, some I liked: https://rubygarage.org/blog/most-basic-git-commands-with-examples
A little larger but very detailed: https://www.atlassian.com/git/tutorials/comparing-workflows



***


For more information about styling github pages like this one you can take a look at https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet