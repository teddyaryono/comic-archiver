## How to Use


### About
- This tiny PHP script is intended to convert your comic/manga from images into `*.cbz` archive format.
- **Note**: This script supports Linux/Mac OS only. Windows will be supported soon.  

### General usage
```
$ php /path/to/comic-archiver.php /path/to/your/comic-directory
```

### Example
```
$ cd /home/johndoe/comics/doraemon
$ ls
Doraemon 00   3 Dimension
Doraemon 02   Prophecy of Doraemon
$ tree
.
├── Doraemon 00   3 Dimension
│   ├── 001.jpg
│   ├── 002.jpg
│   └── 003.jpg
└── Doraemon 02   Prophecy of Doraemon
    ├── 001.jpg
    ├── 002.jpg
    ├── 003.jpg
    └── 004.jpg


$ php /home/johndoe/comic-archiver.php /home/johndoe/comics/doraemon


$ cd /home/johndoe/comics/doraemon
$ ls
Doraemon 00   3 Dimension.cbz
Doraemon 02   Prophecy of Doraemon.cbz
$ tree
.
├── Doraemon 00   3 Dimension.cbz
└── Doraemon 02   Prophecy of Doraemon.cbz
```

Then, open your `*.cbz` with your favorite comic/manga reader.