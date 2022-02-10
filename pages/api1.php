$you_tube_data_api_key = 'AIzaSyAisnsTgxl5Vn0b4A_CQdxRQTDRFxYIbBE';

        $chanenl_id = 'UCaFJvXfpLTA6bh5dMm95tvQ';

        $api_url = 'https://www.googleapis.com/youtube/v3/search?key=' . $you_tube_data_api_key . '&channelId=' . $chanenl_id . '&part=snippet,id&order=date';

        $youtube_videos = file_get_contents($api_url);

if(!empty($youtube_videos)){
            $youtube_videos_arr = json_decode( $youtube_videos, true);
            if(!empty($youtube_videos_arr['items'])){
            ?>
            <table>
            <?php
                foreach($youtube_videos_arr['items'] as $ytvideo){
                    if($ytvideo['id']['kind']  == 'youtube#video'){
                    ?>
                        <tr><td><img src="<?=$ytvideo['snippet']['thumbnails']['high']['url']?>" /><td><?=$ytvideo['snippet']['title']?></td></tr>
                        <?php
                        echo "<h1>".print_r($ytvideo['snippet'])."</h1>";
                        ?>
                    <?php
                    }
                }
                ?>
                </table>
                <?php
            }
        }