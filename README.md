# ENOS

This is a small php page (+style sheet) for navigating different pages on a server, in separate directories. It can automatically detect different pages, display their description, and topics if *desc.txt* file exists in the page directory.

## Setup

1. [Download](https://github.com/recoskyler/ENOS/archive/master.zip) repo files.
2. Open ZIP file with a software (WinRAR, WinZIP etc..).
3. Copy *index.php* and *style.css* from the ZIP file, to your *public_html* folder in IT College ENOS server.
4. Organize all the other files/projects in separate folders.
5. If you want descriptions, and subjects, create a file named *desc.txt* under the project/page folder. **OPTIONAL**
6. On the first line, type the description. It should be only on the first line.
7. On the second line, type the subjects it covered, separated by a comma (**,**) without a space before/after the comma. It should be only on the second line.

*You only need **index.php** and **style.css** files. Other files, such as **ENOS_rep.png** etc. are unnecessary.*

![Example](https://raw.githubusercontent.com/recoskyler/ENOS/master/ENOS_rep.png)

### desc.txt Format

> On the first line, type the description. It should be only on the first line.
> On the second line, type the subjects it covered, separated by a comma (**,**) without a space before/after the comma. It should be only on the second line.

```txt
Some Project Name 123
Javascript,Node JS,php,MySQL
```

#### Already Color Coded Subjects/Keywords

- HTML (Added automatically)
- CSS (Added automatically)
- JS
- Javascript
- php
- MySQL
- NodeJS

If you add some other subject/keyword that is not already color coded, you can color code it using css in the *style.css* file. The selector should be the lowercase version of your subject/keyword.

```txt
My Other Project with Unique Subject/Keyword
My Subject Name,php,MySQL
```

For the *desc.txt* file above, the custom CSS style should be something like:

```css
.mysubjectname {
  background-color: red;
}
```

If you want to disable HTML and CSS tag auto-add feature, start the subjects/keywords with a **"0"**.

```txt
My Other Project with Unique Subject/Keyword, HTML CSS disabled
0,NodeJS,php
```

## About

By Adil Atalay Hamamcioglu

> Original idea is from Arch.

2020
