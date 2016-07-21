<?php
date_default_timezone_set('UTC'');

function time2str($ts)
{
    if(!ctype_digit($ts))
        $ts = strtotime($ts);

    $diff = time() - $ts;
    if($diff == 0)
        return 'now';
    elseif($diff > 0)
    {
        $day_diff = floor($diff / 86400);
        if($day_diff == 0)
        {
            if($diff < 60) return 'just now';
            if($diff < 120) return '1m ago';
            if($diff < 3600) return floor($diff / 60) . 'm ago';
            if($diff < 7200) return '1h ago';
            if($diff < 86400) return floor($diff / 3600) . 'h ago';
        }
        if($day_diff == 1) return 'Yesterday';
        if($day_diff < 7) return $day_diff . 'd ago';
        if($day_diff < 31) return ceil($day_diff / 7) . 'w ago';
        if($day_diff < 60) return 'last month';
        return date('F Y', $ts);
    }
    else
    {
        $diff = abs($diff);
        $day_diff = floor($diff / 86400);
        if($day_diff == 0)
        {
            if($diff < 120) return 'in 1m';
            if($diff < 3600) return 'in ' . floor($diff / 60) . 'm';
            if($diff < 7200) return 'in 1h';
            if($diff < 86400) return 'in ' . floor($diff / 3600) . 'h';
        }
        if($day_diff == 1) return 'Tomorrow';
        if($day_diff < 4) return date('l', $ts);
        if($day_diff < 7 + (7 - date('w'))) return 'in 1w';
        if(ceil($day_diff / 7) < 4) return 'in ' . ceil($day_diff / 7) . ' w';
        if(date('n', $ts) == date('n') + 1) return 'in 1m';
        return date('F Y', $ts);
    }
}

require './aws/aws-autoloader.php';

$s3 = new Aws\S3\S3Client([
	'version'	=> 'latest',
	'region'	=> 'us-east-1',
	'credentials'	=> [
		'key'	=> 'AKIAJHBEBWD7JWODHW4A',
		'secret'	=> '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'
	]
]);

$ping = json_decode(file_get_contents('https://api.cliqbitapp.com/CustomAPI_br8tradevusteswe_v1.14/rest/feed/blazinBits/1/0/75'), true);
foreach($ping['data'] as $post) {
	$text = $post['postText'];
	
	$type = $post['postType'];
	if (strpos($post['visualURL'], 'temporary') == false) {
		$post_id = $post['idNewsFeed'];
		
		$bucket = explode(':', $post['visualURL'])[0];
		
		$ending = '.jpg';
		if ($type == 3) {
			$ending = '.mp4';
		}
		
		$cmd = $s3->getCommand('GetObject', [
			'Bucket'	=> $bucket,
			'Key'	=> $post_id . $ending
		]);
		
		$url = (string) $s3->createPresignedRequest($cmd, '+15 minutes')->getUri();
		
		$username = $post['username'];
		$time = time2str($post['postTime']);
		$viewCount = $post['viewCount'];
		$location = $post['postLocation'];
		
		echo "<div class=\"blazinImages\">";
		echo $username;
		echo "<div class=\"time\">";
		echo $time;
		echo "</div>";
		echo "<div class=\"views\">" . $viewCount . " <img src=\"assets/img/eyes.png\" alt=\"2 eyes\" /></div>";
		
		for ($i = 1; ;$i++) {
			$tagged = $post['taggedUsername' . $i];
			
			if ($tagged == null) {
				break;
			}
			
			echo $tagged;
		}
		
		echo "<div class=\"image\">";
		if ($type == 2) {
			echo "<img class=\"postImg\" src=\"" . $url . "\" />";
		} else if ($type == 3) {
			echo "<video class=\"postImg video\" controls>";
			echo "<source src=\"" . $url . "\" type=\"video/mp4\">";
			echo "Your browser does not support HTML5 videos.";
			echo "</video>";
		}
		echo "<div class=\"centered\">" . $text . "</div>";
		if ($location != "") {
			echo "<img class=\"locationBubble\" src=\"assets/img/location.png\" alt=\"Location bubble\" /><div class=\"location\"> " . $location . "</div>";
		}
		echo "<img class=\"postFooter\" src=\"assets/img/postFooter.png\" alt=\"Post sample footer image\" />";
		
		for ($i = 1; ; $i++) {
			$comment = $post['comment' . $i];
			$username = $post['comment' . $i . 'Username'];
			
			if ($comment == null) {
				break;
			}
			
			echo "<div class=\"comment\"><span class=\"commentName\">" . $username . ": </span>" . $comment . "</div>";
		}
		
		echo "</div>";
		echo "<div style=\"display: none\">Img type: " . $type . ", Img id: " . $img_url . "</div></div>";
	}
};
?>