
/*
* YouTube: Retrieve Title, Description and Thumbnail
* http://salman-w.blogspot.com/2010/01/retrieve-youtube-video-title.html
*/
$(function() {

	//$("#video-data-1, #video-data-2").empty();
	/*var videoid = getUrlVars()["v"];
	var matches = videoid.match(/^http:\/\/www\.youtube\.com\/.*[?&]v=([^&]+)/i) || videoid.match(/^http:\/\/youtu\.be\/([^?]+)/i);
	if (matches) {
	videoid = matches[1];
	}
	if (videoid.match(/^[a-z0-9_-]{11}$/i) === null) {
	$("<p style='color: #F00;'>Unable to parse Video ID/URL.</p>").appendTo("#video-data-1");
	return;
	}*/
	$.getJSON("https://www.googleapis.com/youtube/v3/playlists", {
		part: "snippet",
		key: "AIzaSyAOQptas0hoadE55u3wBU2t6khd7EUMilM",
		channelId: 'UCY6i3RIebaZEoj7rtxO3odQ'
	}, function(data) {
		if (data.items.length === 0) {
		//$("<p style='color: #F00;'>Video not found.</p>").appendTo("#video-data-1");
			return;
		}
		//console.log(data);
		for(var i = 0;i<data.items.length;i++)
		{
			//console.log(data.items[i].snippet.thumbnails.medium.url);
			$("<img>", {
			src: data.items[0].snippet.thumbnails.medium.url,
			width: data.items[0].snippet.thumbnails.medium.width,
			height: data.items[0].snippet.thumbnails.medium.height
			}).appendTo("#video-data-1");
		}
		/*$("<img>", {
		src: data.items[0].snippet.thumbnails.medium.url,
		width: data.items[0].snippet.thumbnails.medium.width,
		height: data.items[0].snippet.thumbnails.medium.height
		}).appendTo("#video-data-1");*/
		/*$("<h1></h1>").text(data.items[0].snippet.title).appendTo(".titulo");
		$("<p></p>").text(data.items[0].snippet.description).appendTo(".bajada");
		$("<li></li>").text("Published at: " + data.items[0].snippet.publishedAt).appendTo("#video-data-2");
		$("<li></li>").text("View count: " + data.items[0].statistics.viewCount).appendTo("#video-data-2");
		$("<li></li>").text("Favorite count: " + data.items[0].statistics.favoriteCount).appendTo("#video-data-2");
		$("<li></li>").text("Like count: " + data.items[0].statistics.likeCount).appendTo("#video-data-2");
		$("<li></li>").text("Dislike count: " + data.items[0].statistics.dislikeCount).appendTo("#video-data-2");*/
	}).fail(function(jqXHR, textStatus, errorThrown) {
		$("<p style='color: #F00;'></p>").text(jqXHR.responseText || errorThrown).appendTo("#video-data-1");
	});

});