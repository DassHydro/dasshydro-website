# DassHydro Website
This repository contains the entire source code for DassHydro's Website.  
By reading this page and the linked websites, you should be able to manage this website with ease.

## Table of Contents
1. [ General Information. ](#geninfo)
2. [ Repository organisation. ](#reporg)
3. [ Install Hugo. ](#inshug)
4. [ Start coding. ](#str)
5. [ Use shortcodes. ](#shc)
6. [ Publish the website. ](#pub)
7. [ TODO. ](#todo)
8. [ More than useful webpages. ](#web)

<a name="geninfo"></a>
## 1. General information
This hugo website uses an existing hugo theme: **[hugo-theme-learn](https://github.com/matcornic/hugo-theme-learn)**, with some additionnal shortcodes:
- ````button```` (added *download* and *target* attributes)
- ````center_align````
- ````download````
- ````form````

> **Note:** some other shortcodes or other files from **hugo-theme-learn** might have been modified.

> **Note:** according to Hugo, *Shortcodes are simple snippets inside your content files calling built-in or custom templates.*

<a name="reporg"></a>
## 2. Repository organisation
<ul>
  <li><code><strong>archetypes</strong></code> should remain unused.</li>
  <li><code><strong>content</strong></code> is your main directory for updating the website, it contains all the different sections and pages:</li>
  <ul>
    <li><code><strong>codes_presentation</strong></code> contains the presentation pages of every codes.</li>
    <li><code><strong>doc</strong></code> contains the documentations for DassFlow, SMASH and HiVDI <em>(everything is in the <code>_index.md</code> file)</em>.</li>
    <li><code><strong>download</strong></code> contains the download page for githup repositories <em>(DassFlow and SMASH)</em> and a form to obtain HiVDI <em>(yet to be completed before release; this page should probably be hidden before this moment, see XXXXX)</em>.</li>
    <li><code><strong>examples</strong></code> contains all the test cases for DassHydro, DassFlow2d, SMASH and HiVDI-DassFlow1D.</li>
    <li><code><strong>shortcuts</strong></code> contains useful pages that are <strong>not</strong> shown on the menu, like <strong>references, faq, how to cite...</strong> <em>(see Front Matter, <code>hidden: true</code>)</em>.</li>
    <li><code><strong>the_team</strong></code> contains the weppages for the <strong>MathHydroNum</strong> team.</li>
    <li><code><strong>tools</strong></code> contains the <strong>external</strong> and <strong>embedded</strong> tools used by the different softwares.</li>
    <li><blockquote><strong>Note:</strong><code>_index.md</code> is the first page of the section <em>(for example, <code>/content/_index.md</code> refers to the website's homepage)</em></blockquote></li>
  </ul>
  <li><code><strong>public</strong></code> contains the entire website after using <code>hugo -D</code> to generate the html pages from the markdown.</li>
  <li><code><strong>themes</strong></code> contains the <strong>hugo-theme-learn</strong> theme where you can add shortcodes, images, etc.</li>
  <li><code><strong>hugo.toml</strong></code> is the default configuration file <em>(to choose the URL, add or remove shortcuts, among other parameters)</em>.</li>
</ul>

<a name="inshug"></a>
## 3. Install Hugo
To install hugo, you can go directly on this [webpage](https://gohugo.io/installation/) to get information for your own OS. 

### 3.1 Install Hugo on Linux
In most cases, on **Linux**, you should be able to install hugo with the following command:
````
sudo apt install hugo
````

### 3.2 Install Hugo on macOS
On macOS, first install [Homebrew](https://brew.sh) using the following command:
````
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
````
Then, you can install Hugo with:
````
brew install hugo
````

### 3.3 Install Hugo on Windows
You should have [winget](https://learn.microsoft.com/en-us/windows/package-manager/) installed on your machin, which allows you to install Hugo with:
````
winget install Hugo.Hugo.Extended
````
<br>


> **Note:** Only *macOS* installation has been tested yet.

<a name="str"></a>
## 4. Start coding
### 4.1 Clone the GitHub repository
In your desired repository, just enter the following command to clone this repository and fetch the website's files:
````
git clone https://github.com/DassHydro-dev/dasshydro_website
````
> **Note:** if you use different branches, just add <code> -b <branchName> </code> to the above command.

### 4.2 Edit the webpages
#### 4.2.1 Launch the localhost server
Once you have cloned the repository, go to the root of the rep and type <code>hugo server -D</code> to locally upload the website, for local changes and real-time updates.  
The url should be <code>http://localhost:1313</code> *(it will be mentionned in the terminal)*.

#### 4.2.2 Edit files
You can open the root directory in **VS code** or your prefered text editor, and start editing files *(refer to [Repository Organisation](#reporg) for more details on the structure)*.

> **Note:** all *-D* options are used to also compile and show draft files *(see Front Matter, <code>draft: true</code>)*.

### 4.3 Add images 
To add images, you can use <code>\!\[image_desc](image_url)</code>. For example, the "logo_list" image is displayed using <code>\!\[List of Logos](/images/logo_list.png)</code>.  
You can change parameters, like the width, on the url: *e.g <code>\!\[List of Logos](/images/logo_list.png?width=20pc)</code>*.
<a name="shc"></a>

> **Note:** all images must be stored in <code>/themes/hugo-theme-learn</code>

## 5. Use shortcodes

<a name="pub"></a>
## 6. Publish the website

<a name="todo"></a>
## 7. TODO

<a name="web"></a>
## 8. More than useful webpages
### 8.1 Hugo 
To start coding with Hugo, you can visit their website with some interesting pages:
- [Installation](https://gohugo.io/installation/), to install hugo on different operating systems.
- [Quick start](https://gohugo.io/getting-started/quick-start/),first steps into creating a hugo website.
- [Front Matter](https://gohugo.io/content-management/front-matter/), used in your templates (pages, sections, etc, the parameters at the top of your .md page).

### 8.2 Hugo theme learn
- The source code for the Hugo theme **hugo-theme-learn** can be found on [GitHub](https://github.com/matcornic/hugo-theme-learn).
- The [theme documentation](https://learn.netlify.app/en/) can be found online, built using the theme itself.

> **Note:** For any other information, check on the internet. There are many useful threads on **stackoverflow** and other websites !


