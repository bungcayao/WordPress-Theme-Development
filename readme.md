WordPress Theme Development
===

**Theme:** WordPress Theme Setup

**Version:** 1.0.0

**Contributors:** Joshua Bungcayao

**Requirements:** Wordpress 4.0.0 and Higher*

**Description:** This WordPress Theme is forked from [Underscores] (https://underscores.me/) Theme Starer Kit and built around the [Bulma Framework] (https://bulma.io).


WordPress Theme in Action:
---

https://www.popinnow.com

        
WordPress Theme Structure:
---

**ASSETS**

    downloads
    fonts
    images
    js
    sass

**CSS**

    Styles are built on top of the Bulma CSS Framework. 
    Custom CSS is located in the `./assets/sass` folder.  

**JS**    
       
    Overall theme javascript is created and housed here `./assets/js/`
    - analytics
    - autotenant
    - cookies
    - custom-snippets
    - google-analytics
    - mixpanel
    - modules
    - validation

    
**Images**    
       
    This is where I house theme specific images, logos, and icon sets.
    `./assets/images/`

   
**Pages**

    The goal is to have one basic `page` template that has reusable modular components.
    Files located here: `./modules/`
    - components
    - navbar
    - redirect pages
    - sections

Yarn + WebPack usage
--- 
I built this repo using various js packages using Yarn. You can take a peak under the hood by viewing the `package.json` file.
I have my script, devDependencies, and dependencies setup there.

I make use of WebPack to compile and bundle my Main JavaScript file. I also use it to compile my SASS/SCSS files and much more.
Want to see my setup? Take a look at my `webpack.config.dev.js` and `webpack.config.js` files.


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


Final Words
--- 
I've developed my own folder structure and system of what I thought was effecient at the time. 
As all things go, there will always be more effeciant and optimized ways of doing things.
My setup might be a little behind, but was put well into use and something I'm proud of.