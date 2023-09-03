<?php


    function thumbnal($VideoLink) {

        $Api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
        //Explode youtube link
            $Link = explode("?si=",$VideoLink)[0];
            $FinalLink = explode("/",$Link);
            $videoId = end($FinalLink);
        //Replase Api Dynamic section
            $imgUrl= str_replace("<insert-youtube-video-id-here>",$videoId,$Api);

            echo '<img src="' .$imgUrl.'"/><br>';
    }
    thumbnal('https://youtu.be/G99m7iK2dBs?si=F_ZUkLCTDCidraYp');

//image validation
    $image = "Hamim.jpg";
    $explode = explode(".",$image);
    $imgType = end($explode);
    echo $imgType == "jpg"?'Image is successfully uplode':"Must be use Jpg or Png";