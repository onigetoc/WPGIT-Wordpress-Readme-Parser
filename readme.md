WordPress readme parser
----------

###Description

Wordpress Readme text to HTML
WordPress README PARSER files are formatted using a version of the Markdown language. This plugin can be used to convert these to HTML. It read local or remote readme.txt file.

It's ideal for plugin developers who wish to add instructions to their own site without having to duplicate effort.

1. `New` Support Youtube video
2. Make links as `target="_blank"`
3. Read and render images

###How to use it

    $readme_file = "https://raw.githubusercontent.com/onigetoc/Zajax-Wordpress-ajax-navigation/master/readme.txt";
    
    $wpParser = new readme_parser();
    echo $wpParser->url($readme_file);

###Todo
1. Something not reading code well `code`  ` 
2. better todo

####Plead help me to make it better
Fork it and help me and us to make it better.

![example view](http://scripts.toolurl.com/1PHP/1-Markdow-Parser/WPGIT-WordPress-readme-parser/screenshot-1.jpg)

