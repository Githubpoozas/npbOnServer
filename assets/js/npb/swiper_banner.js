// slide1
var swiper1 = new Swiper(".swiper-container__slide1", {
  // autoHeight: true,
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false
  // },
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  grabCursor:true

  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev"
  // }
});

// Youtube
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
  console.log("onYouTubeIframeAPIReady");
  player = new YT.Player("youtube", {
    height: "260",
    width: "730",
    //id = "url"
    videoId: "CQs_q0MTPA0",
    events: {
      onReady: onPlayerReady,
      onStateChange: onPlayerStateChange
    }
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  console.log("onPlayerReady");
  event.target.playVideo();
  swiper.autoplay.stop();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  console.log("onPlayerStateChange");

  // if (event.data == YT.PlayerState.PLAYING && !done) {
  //   setTimeout(stopVideo, 6000);
  //   done = true;
  // }

  // if video END or PAUSE
  if (event.data == YT.PlayerState.ENDED && !done) {
    stopVideo();
    done = true;
  }

  if (event.data == YT.PlayerState.PAUSED && !done) {
    pauseVideo();
    done = true;
  }
}
// Start swiper
function stopVideo() {
  player.stopVideo();
  swiper1.autoplay.start();
}

// Start swiper
function pauseVideo() {
  player.pauseVideo();
  swiper1.autoplay.start();
}

// Local video event
var vid = document.getElementById("localVideo");
function loopVid() {
  vid.load();
}
vid.onplay = function() {
  swiper1.autoplay.stop();
};
vid.onpause = function() {
  swiper1.autoplay.start();
  setTimeout(loopVid, 6000);
};
vid.onended = function() {
  swiper1.autoplay.start();
  setTimeout(loopVid, 6000);
};

