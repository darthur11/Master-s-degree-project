video = document.getElementById("video"),
	videoObj = { "video": true },errBack = function(error) {
			console.log("Video capture error: ", error.code); 
		};
	function startvideo() {
		if(navigator.getUserMedia) { // Standard
			navigator.getUserMedia(videoObj, function(stream) {
				video.src = stream;
				video.play();
				localStream = stream;
			}, errBack);
		} 
		else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
			navigator.webkitGetUserMedia(videoObj, function(stream){
				video.src = window.webkitURL.createObjectURL(stream);
				video.play();
				localStream = stream;
			}, errBack);
		}
		else if(navigator.mozGetUserMedia) { // Firefox-prefixed
			navigator.mozGetUserMedia(videoObj, function(stream){
				video.src = window.URL.createObjectURL(stream);
				video.play();
				localStream = stream;
			}, errBack);
		}
	}
function hidevideo() {
	if(video.style.display=='none')
		{
		video.style.display='block';
		startvideo();
		}
	else
		{
		video.style.display='none';
		localStream.stop();
		}
}