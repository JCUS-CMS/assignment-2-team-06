# CMS: Assignment 2
# assignment-2-team-06

------------------------------------
### Group Members -

1. Li Xin Yi: liz.sg125@gmail.com
2. Song Shi Chen: shichen.song@my.jcu.edu.au
3. Xian Wei Hao: weihao.xian@my.jcu.edu.au
4. Chi Khang Vu: chikhang.vu@my.jcu.edu.au
5. Thi Thao Ngan Le: thaongan2706@gmail.com
------------------------------------

The "Doctors Connect – Malaysia" website is worked on in three environments

The production site:
The live version of the site, containing the latest stable version of the theme and published site content
The staging site: 
The environment used to test the theme on a remote web server and draft web content
Local development environments: 
The virtual machine on your local device used to develop and test theme changes

Branches --- Main Branches

The project has two main branches:

Master: The branch used by the production site

Staging: The branch used by the staging site (Your local development environment should be on this branch)

## Local Environment Setup -
<br/><br/>
**Setting up WPDistillery in your local machine**
<br/>
<br>
**Start the process by running the following commands:**

```
git clone https://github.com/flurinduerst/WPDistillery.git my-project
Customize wpdistillery/config.yml
Inside the Vagrantfile add your local URL at config.vm.hostname. This should be the same as wpsettings:url: in config.yml
Run vagrant up from where your Vagrantfile is.

**Setting up GITHUB in your new website/public_html**

<br/>

Assuming you are already in your my-project directory<br/>
```
cd public
```

now delete the wp-content file.
```
rm -rf wp-content
```

then set up git in the directory
```
git init
```

Link your local git with the remote<br/>
```
git remote add origin https://github.com/JCUS-CMS/assignment-2-team-06.git
```

Rename assignment-2-team-6 file name to wp-content<br/>
```
cd to the wp-content folder <br/>
```
cd wp-content
```
now pull from the remote branch<br/>
```
git pull
```

<br/>

**SWITCHING BETWEEN BRANCHES IN LOCAL ENVIRONMENT:**

<br/>

Command to shift between branches in local environment:<br/>

```
git checkout <branch-name>
```

To Switch from header branch to master branch use the following command:<br/>

```
git checkout master
```

<br/>

*When finish editing, commit your file to master/branch use the following command*
<br>
Add the changed to git:

```
git add *
```

now commit the changes :<br/>

```
git commit -m "<your-commit-message>"
```

now push the changes :<br/>

```
git push
```
