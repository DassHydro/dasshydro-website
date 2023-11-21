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

> **Note:** for the theme colors *(css file for the almost the whole site)*, we use a custom template that you can find in <code>themes/hugo-theme-learn/static/css/theme-dasshydro.css</code>. You can select another, see [this page](https://learn.netlify.app/en/basics/style-customization/#yours-variant).

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
git clone https://github.com/DassHydro/dasshydro-website
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

> **Note:** all images must be stored in <code>/themes/hugo-theme-learn/static/images</code> and accessed using the relative URL <code>/images/img_name.png</code> *(static is a folder name that's implicitly added when you mention a folder)*.

### 4.4 Change the logo
You can change the logo *(on the top left of every webpage) in <code>themes/hugo-theme-learn/layouts/partials/logo.html</code>, either with an image or a svg (in **html**).  
To change the icon of the tab *(just like the cat for github)*, you can change the image <code>/images/favicon.png</code>, replace it with your own and name it **favicon.png**.

### 4.5 Change header, footer, menu, etc
You can change these directly in the <code>themes/hugo-theme-learn/layouts/partials</code> folder. 

### 4.6 Create new files 
You can create a new file with the following command, in your repository directory:
````
hugo new section/file_name.md
````
For example, the <code>content/examples/ex_dassflow2d/ex_real-world_cases_dassflow2d.md</code> was created with:
````
hugo new examples/ex_dassflow2d/ex_real-world_cases_dassflow2d.md
````
You can also create **chapter pages** with the following command:
````
hugo new --kind chapter section/_index.md
````

> **Note:** there should be exactly one *_index.md* file *(chapter page)* in each section or subsection.

### 4.7 Front Matter
For more information on the Front Matter, refer to the [theme documentation](https://learn.netlify.app/en/cont/pages/) and other sections, or directly to the [hugo](https://gohugo.io/content-management/front-matter/) website.

## 5. Use shortcodes
To use hugo shortcodes *( the <code>{{% shortcode \<parameters> %}}.Inner{{% /shortcode}}</code> blocks)*, refer to the [theme documentation](https://learn.netlify.app/en/shortcodes/). 

### 5.1 button
The button shortcode was made by [matcornic](https://github.com/matcornic/hugo-theme-learn), but two attributes were added:
- <code>download</code> to make the button open a page or download it *(default: false)*:  
You can make a button download a file by adding <code>download="true"</code> in the shortcode parameters.
- <code>target</code> to open a page in the same tab or a new one *(default: _self = same tab)*:  
You can change the target attribute by adding <code>target="_blank"</code> or <code>target="_self"</code> to respectively open the page in a new or the same tab.

### 5.2 center_align
To align text to the center of a page *(native in a **chapter** page, see [Create new files](#46-create-new-files))*, you can use the center_align shortcode with the following line:
<code>{{% center_align%}}centered_text{{% /center_align %}}</code>

> **Note:** you can easily create a *right_align* shortcode or any other kind with this simple template, to overpass Hugo / hugo-theme-learn styles.
 
### 5.3 download
To make a clickable text download a file, you can use the download shortcode:  
<code>{{% download fileName="page_name.files/file_name" %}}Text{{% /download %}}</code>

> **Note:** *For example, on the documentation page, you can download the **Former Documentation** directly by clicking the text with the following:  
<code>{{% download fileName="_index.files/DassFlow2D_doc_2013.pdf" %}}Former documentation{{% /download %}}</code>*

### 5.4 form
The form shortcode is unique, and can be called for the HiVDI download using <code>{{% form %}}</code>.

<a name="pub"></a>
## 6. Publish the website
To publish the website, enter the following command in your repository directory:
````
hugo -D
````
Then, just copy-paste the content of the <code>public</code> folder to the webserver. It should be all !

> **Note:** some JS scripts or parameters are not loccaly visible and can only be observed / tested when online *(for example, the HiVDI form, the visitor trakcer, etc)*.

<a name="todo"></a>
## 7. TODO
For the TODO_list, check the [Google Drive](https://drive.google.com/drive/u/0/folders/1OBo92BmFDnwjj8ws8Qe4W2NbYnEF_L4c).

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


