!(logo)[https://i.imgur.com/VtKOrqS.png]

# Crackerjack

## A Tiny & Fast Php Static Blog Generator and flat-file CMS From Markdown

Crackerjack lets you write blog posts in [markdown](https://en.wikipedia.org/wiki/Markdown) and then open the recompile.php file in a browser and they are written to html and saved in a php file.

It creates an index.php file which shows your posts and also includes header/footer php includes.

Write your blog posts in the /posts folder and save them with the .md extension.  Then open the recompile.php file in a browser and all the posts in the /posts folder will be written to the /blog folder as .php files in html.

Each .md file in /posts optionally has title, excerpt and thumbnail image metadata.  These are specified at the top of the file with this syntax:

```
Title: Post 1 Title
Excerpt: Post 1 Excerpt
Thumbnail: post1thumb.jpg

```
Then below you would write your markdown blog post.  So an example post might go like this:

```
Title: Post 1 Title
Excerpt: Post 1 Excerpt
Thumbnail: post1thumb.jpg

## Post 1!
Lorem ipsum dolor sit amet, consectetur adipisicing elit

*Lorem ipsum dolor sit amet, consectetur adipisicing elit*
```

Crackerjack is very much a simplified version of the [Pico](http://picocms.org/) CMS.  I loved the idea of Pico very much, but disliked it's implementation quite a bit.  Crackerjack's markdown to html parsing is done with the [Parsedown](https://parsedown.org/) library.

Crackerjack is ridiculously simple - literally about 100 lines of php. Quite a bit simpler than Wordpress, Drupal, etc.  Those are fine for enterprise projects, but a flat-file CMS is a relief and a joy to run a personal blog from after wrestling with those all day on the day job.

Enjoy Crackerjack and totally let me know if you have any questions or anything.
