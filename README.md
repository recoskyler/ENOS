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

![Example](https://raw.githubusercontent.com/recoskyler/ENOS/master/ENOS_rep.png)

### desc.txt Format

> 6. On the first line, type the description. It should be only on the first line.
  7. On the second line, type the subjects it covered, separated by a comma (**,**) without a space before/after the comma. It should be only on the second line.

```
Some Project Name 123
Javascript,NodeJS,php,MySQL,
```

#### Already Color Coded Subjects/Keywords

 - HTML (Added automatically)
 - CSS (Added automatically)
 - JS
 - Javascript
 - php
 - MySQL
 - NodeJS
 
> If you add some other subject/keyword that is not already color coded, you can color code it using css in the *style.css* file.
  

## About

By Adil Atalay Hamamcioglu

> Original idea is from Arch.

2020
