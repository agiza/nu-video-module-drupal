<script type="text/javascript" src="/mediaplayer/jwplayer.js"></script>

<?php $video_url = $_GET['videourl']; ?>

<video id="container" src="<?php print $video_url; ?>" width="590" height="390" controls="visible">Loading the player ...</video>

<script type="text/javascript">
    jwplayer("container").setup({
        file: "<?php print $video_url; ?>",
        height: 390,
        width: 590,
        modes: [
            { type: "flash", src: "/mediaplayer/player.swf" },
            { type: "html5" }
        ]

    });
</script>

<a href="#" id="caption-toggle" style="display: none;">Show Transcript</a>

<script type="text/javascript">
	jQuery('.page-tutorials #caption-toggle').show();
	jQuery('.page-tutorials #caption').hide();
	jQuery('.page-tutorials #caption-toggle').bind('click', toggleCaptions);

	function toggleCaptions(event) {
		event.preventDefault();
		if(jQuery('.page-tutorials #caption').css('display') == 'none') {
			jQuery('.page-tutorials #caption').show();
		} else {
			jQuery('.page-tutorials #caption').hide();
		}

	}
</script>