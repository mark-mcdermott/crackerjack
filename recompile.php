<?php
include 'libs/Parsedown.php';
$Parsedown = new Parsedown();
$posts = glob('posts/*.{md}', GLOB_BRACE);
$postsHtml = '';


foreach ($posts as &$postFile) {

  $postContents = file_get_contents($postFile);
  $postLines = explode("\n", $postContents);

  if (strpos($postLines[0], 'Title: ' ) !== false) {
    $title = str_replace("Title: ","",$postLines[0]);
    $slug = str_replace(" ","-",$title);
    $filename = $slug . '.php';
    unset($postLines[0]);
    $postLines = array_values($postLines);
  }

  if (strpos($postLines[0], 'Excerpt: ' ) !== false) {
    $excerpt = str_replace("Excerpt: ","",$postLines[0]);
    unset($postLines[0]);
    $postLines = array_values($postLines);
  }

  if (strpos($postLines[0], 'Thumbnail: ' ) !== false) {
    $thumbnail = str_replace("Thumbnail: ","",$postLines[0]);
    unset($postLines[0]);
    $postLines = array_values($postLines);
  }

  if (empty($postLines[0])) {
    unset($postLines[0]);
    $postLines = array_values($postLines);
  }

  $postMarkdown = join("\n",$postLines);
  $postHtml = $Parsedown->text($postMarkdown);
  $postsHtml = $postsHtml . $Parsedown->text($postMarkdown);

  if ( !file_exists($filename) ) {
    $file = fopen('blog/'.$filename, 'w');
    fwrite($file, $postHtml);
    fclose($file);
  }

}

echo "recompiled!";

?>
