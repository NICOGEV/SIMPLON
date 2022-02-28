$.get("./getProfil.php?name=NeoRocklee")
.done( function(data){
	profil = jQuery.parseJSON(data);
	$( ".A" ).text(profil.name );
	$("#icon").attr("src", "http://ddragon.leagueoflegends.com/cdn/12.4.1/img/profileicon/"+profil.profileIconId+".png")
	console.log(profil);
	console.log(profil.name);
});

//$("=go).click(function(