## How to Use

<br />

### About
This tiny PHP script is intended to convert your comic/manga from images into `*.cbz` archive format. 

### General usage
```
$ php /path/to/comic-archiver.php /path/to/your/comic-directory
```

### Example
```
$ ls /home/johndoe/comics/doraemon
Doraemon 00   3 Dimension
Doraemon 01   All the Way from a Future World
Doraemon 02   Prophecy of Doraemon
Doraemon 03   Transforming Biscuit
Doraemon 04   Operation Secret Spy
Doraemon 05   Kobe Abe

$ php /home/johndoe/comic-archiver.php /home/johndoe/comics/doraemon

$ ls /home/johndoe/comics/doraemon
Doraemon 00   3 Dimension.cbz
Doraemon 01   All the Way from a Future World.cbz
Doraemon 02   Prophecy of Doraemon.cbz
Doraemon 03   Transforming Biscuit.cbz
Doraemon 04   Operation Secret Spy.cbz
Doraemon 05   Kobe Abe.cbz 
```
Then, open your `*.cbz` with your favorite comic/manga reader.