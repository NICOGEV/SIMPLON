<?php

	$response = @file_get_contents("https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/3JK9uzyx0URzzlkdAcpeKYW6-MPSUpvoE67RqDz4ps7VEkY?api_key=RGAPI-f20459c0-0e21-40cf-ba21-586d1160615d");

if ($response === FALSE){
	$response = '{"championId": 0,"championLevel": 0,"championPoints": 0,"lastPlayTime": 0,"championPointsSinceLastLevel": 0,"championPointsUntilNextLevel": 0,"chestGranted": false,"tokensEarned": 0,"summonerId": "0"}';
}

echo $response;

?>