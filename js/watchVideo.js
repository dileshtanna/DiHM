//$("#video-modal").change(function(){
    
    $(".buyNowBtnBlue").click(function(){
    
        var vid = this.id;
        alert(vid);
        var video = document.getElementById('myVideoPlayer').src='vid/'+vid+'.mp4';
        // var source = document.createElement('source');

        // source.setAttribute('src', 'vid/'+vid+'.mp4');
        
        // video.appendChild(source);
        video.play();
    });
$(".buyNowBtnWhite").click(function(){
    
        var vid = this.id;
        alert(vid);
        var video = document.getElementById('myVideoPlayer');
        var source = document.createElement('source');

        source.setAttribute('src', 'vid/'+vid+'.mp4');

        video.appendChild(source);
        video.play();
    });
//});

