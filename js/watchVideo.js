//$("#video-modal").change(function(){
    
    $(".buyNowBtn").click(function(){
    
        var vid = this.id;
        // alert(vid);
       // vid = parseInt(vid) % 2;
       // alert(vid);
        var video = document.getElementById('myVideoPlayer').src='vid/'+vid+'.mp4';
        // var source = document.createElement('source');

        // source.setAttribute('src', 'vid/'+vid+'.mp4');
        
        // video.appendChild(source);
        video.play();
    });
// $(".buyNowBtn").click(function(){
    
//         var vid = this.id;
//         alert(vid);
//         var video = document.getElementById('myVideoPlayer');
//         var source = document.createElement('source');

//         source.setAttribute('src', 'vid/'+vid+'.mp4');

//         video.appendChild(source);
//         video.play();
//     });
//});

