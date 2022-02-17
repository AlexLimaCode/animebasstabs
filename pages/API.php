<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>api</title>
</head>
<body>
    <div class="container">
    <?php

        // $API_Key = 'AIzaSyAisnsTgxl5Vn0b4A_CQdxRQTDRFxYIbBE';

        // $channelId = 'UCaFJvXfpLTA6bh5dMm95tvQ';

        // //$API_Url = 'https://www.googleapis.com/youtube/v3/search?key=' . $API_Key . '&channelId=' . $chanenl_id . '&part=snippet,id&order=date';
        // $API_Url = 'https://www.googleapis.com/youtube/v3/';

        // $parameter = [
        //     'id'=> $channelId,
        //     'part'=> 'contentDetails',
        //     'key'=> $API_Key
        // ];
        // $channel_URL = $API_Url . 'channels?' . http_build_query($parameter);
        // $json_details = json_decode(file_get_contents($channel_URL), true);
        // //4echo print_r($json_details);
        // $playlist = $json_details['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
        // echo print_r($playlist);
        // $parameter = [
        //     'part'=> 'snippet',
        //     'playlistId' => $playlist,
        //     'maxResults'=> '50',
        //     'key'=> $API_Key
        // ];
        // $channel_URL = $API_Url . 'playlistId?' . http_build_query($parameter);
        // $json_details = json_decode(file_get_contents($channel_URL), true);
        
        // $my_videos = [];
        // foreach($json_details['items'] as $video){
        //     //$my_videos[] = $video['snippet']['resourceId']['videoId'];
        //  $my_videos[] = array( 'v_id'=>$video['snippet']['resourceId']['videoId'], 'v_name'=>$video['snippet']['title'] );
        // }
         
        // while(isset($json_details['nextPageToken'])){
        //     $nxt_page_URL = $channel_URL . '&pageToken=' . $json_details['nextPageToken'];
        //     $json_details = json_decode(file_get_contents($nxt_page_URL), true);
        //     foreach($json_details['items'] as $video)
        //         $my_videos[] = $video['snippet']['resourceId']['videoId'];
        // }

        // foreach($my_videos as $video){
 
        //     if(isset($video)){
                
        //  echo '<a href="https://www.youtube.com/watch?v='. $video['v_id'] .'" style="background: url(\'https://img.youtube.com/vi/'. $video['v_id'] .'/mqdefault.jpg\')">
        //  <div>'. $video['v_name'] .'</div>
        //  </a>';
        //     }
        // }
            
        $API_key    = 'Ehz5aP6npV4JqiBAXaNOC7jUdQs';

        $channelID  = 'UCaFJvXfpLTA6bh5dMm95tvQ';

        $maxResults = 10;
        echo "https://www.googleapis.com/youtube/v3/search?key=".$API_key."&channelId=" . $channelID . "&part=snippet,id&order=date";
        $videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key."));
        
        foreach($videoList->items as $item){

            if(isset($item->id->videoId)){
     
            echo '<div class="youtube-video">
     
                    <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
     
                    <h2>'. $item->snippet->title .'</h2>
     
                </div>';
     
            }
        }
    ?>
    </div>
</body>
</html>