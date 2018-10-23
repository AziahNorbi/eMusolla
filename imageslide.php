<?php
$file_dir="slideS_img"; //change this to a folder name
$show_titles=false; //change to false if you don't want to see the captions
$omit_chars=0; //how many characters to cut off the title's front
$link_to_image=false; //do you want to display links?

print '<?xml version="1.0" encoding="iso-8859-1"?>
<slideshow  displayTime="5" 
            transitionSpeed=".7"
            ...more code...
            >';

            $dir=opendir($file_dir);
        $xml_string= array();
            while ($file=readdir($dir))
            {
                if(substr($file, -3) == "jpg" || substr($file, -4) == "jpeg" ){
                $tmp_str = '<image img="'.$file_dir.'/'.$file.'" ';
                if($show_titles){
                    $file_title=substr($file, $omit_chars, strpos($file, ".")-$omit_chars);
                    $tmp_str .= 'caption="'.$file_title.'" ';

                }

                if($link_to_image){
                    $link_title=substr($file, $omit_chars, strpos($file, ".")-$omit_chars);
                    $tmp_str .= 'link="'.$file_dir.'/'.$file.'" target="_blank"';

                }

                    $tmp_str .=" />";
                    array_push($xml_string, $tmp_str);
                }


            }
            sort($xml_string);
            for($i=0; $i<count($xml_string); $i++){
            print $xml_string[$i];
            }
closedir($dir);
print '</slideshow>';
?>
<?php
require_once('slideshow/slide_auto.php')
?>

<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<div align="center">
<br />
<br />
<br />
<div id="flashcontent">
  This text is replaced by the Flash movie.
</div>

<script type="text/javascript">
   swfobject.embedSWF("slideshow.swf?file=slideshow/slide_auto.php", "gallery", "100%", "100%", "7", "#333333");
   so.write("flashcontent");
</script>
</body>
</html>