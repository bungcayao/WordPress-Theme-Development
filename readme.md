
See This Theme in Action:
https://www.popinnow.com

WordPress Theme Development
===

**Theme:** WordPress Theme Setup

**Version:** 1.0.0

**Contributors:** Joshua Bungcayao

**Requirements:** Wordpress 4.0.0 and Higher*

**Description:** This WordPress Theme is forked from [Underscores] (https://underscores.me/) Theme Starer Kit and built around the [Bulma Framework] (https://bulma.io).



Setup for Local Environment
---
Requirements - [POPin-WordPress-Env](https://github.com/POPInNow/POPin-WordPress-Env)

    1. Clone Repo Locally - git clone git@github.com:POPInNow/POPin-WordPress-Env.git
    2. Rename Repo Folder to `popin` and move it into your themes directory
        - htpdocs/wp-content/themes/
    3. Make sure this theme is selected on your Local WordPress Site  
        - http://localhost/wp-admin/
        - Dashboard > Appearance > Themes
        
WordPress Theme Structure: Basic AF Folders
---
Our Markeing Team's requests come in Fast and Furious. As a result, I tend to create Page Specific assets that are custom and not as reusable. 


**CSS**

    css
    |
    |---assets/
    |---assets-newpage/
    
  We currently don't have any tasks runners like Gulp, Grunt, or Webpack setup. 
  
  For now, I either have an app like [Prepros](https://prepros.io/) running and have it watch for scss changes.
  
  or
  
  Run [SASS CLI](https://sass-lang.com/install) to watch for changes. [Learn More](https://web-design-weekly.com/2014/06/15/different-sass-output-styles/)\
  `sass --watch path/watching/input.scss:path/generate/output.min.css --style -compressed`
 
   <br>  
    
**Images**    
       
    images
    |
    |---page-newpage/

Create a directory that's page pecific to your new page.

   <br> 
   
**Pages**

    pages
    |
    |---custom-<newpage>.php
    |---landing-<newpage>.php  
    |---template-<newpage>.php  
  
`custom-<newpage>.php` - These are quick, custom, and non-reusable pages. They're only meant to be used for one specific page/post.

`landing-<newpage>.php` - These are quick, custom, and semi-reusable pages. Marketing usually wants landing pages that follow the same layout and structure. They just need to be able to change the Header Titles, Copy Content, Form Links, and background images.

`template-<newpage>.php` - These are fully re-usable templates. Think Blogs, News, and Resources. Marketing uses these pages to upload media files and create blog entries, press releases, etc.

Those are the BASICS, but a there's a ton more that a person can do.

        
WordPress Theme Development + Deployment
--- 
**GIT**

Our theme folder is a repo, so we can add, commit, push, pull and everything else git. I try to emulate the Web App process of developing.

**Local Branch + Local Development**
```
local-branch -> test in local enviornment
```

**Staging Branch + Devmarketing Deployment**
```
PR -> local-branch staging branch
staging branch -> deploy and test to devmarketing
```

**Master Branch + Prodmarketing Deployment**
```
PR -> staging branch to master branch
master branch -> deploy to prodmarketing
```

<br>

**GIT CONFIG SETUP for GIT-FTP**

I'm using [git-ftp](https://github.com/git-ftp/git-ftp) for Deploying our theme into Devmarketing or Prodmarketing.\
Installation instructions, [here](https://github.com/git-ftp/git-ftp/blob/master/INSTALL.md). Learn git-ftp's CLI manual [here](https://github.com/git-ftp/git-ftp/blob/master/man/git-ftp.1.md).
<br><br>
Below are some git config setups for deploying to devmarketing and prodmarketing.\
<br>
Copy and paste these bad boys into your `.git/config file`.


**Devmarketing**
```
[git-ftp "devmarketing"]
  user = mediatemple
  url = popinnow.com
  password = <1password - MediaTemple FTP (mediatemple)>
  remote-root = devmarketing.popinnow.com/wp-content/themes/popin/
```

**Prodmarketing**
```
[git-ftp "devmarketing"]
  user = mediatemple
  url = popinnow.com
  password = <1password - MediaTemple FTP (mediatemple)>
  remote-root = devmarketing.popinnow.com/wp-content/themes/popin/
```
Be sure to change out the password `<1password - MediaTemple FTP (mediatemple)>` with the password stored on 1password.

<br>

**TODOS**

- [ ] Audit and Removal of our Assets (CSS + JS) and Media (IMG + VID + PDF).
- [ ] Audit and Removal of Page Templates.
- [ ] Theme Project Restructure and Refactoring
- [ ] Tasks Runners -> Gulp, Grunt, or WebPack
- [ ] Setting up HTTPS -> @link https://gist.github.com/prof3ssorSt3v3/fab15b677d4a4cc2568f09d477d9c8ac and https://www.youtube.com/watch?v=886Pea2ljm0
    
<br>

**PARTING WORDS**

Hopefully this is enough to get a person spun up on developing locally and deploying to devmarketing and prodmarketing.
