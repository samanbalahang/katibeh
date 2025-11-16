window.addEventListener("load", () => {
    let start = document.getElementById("start");
    let slidemobileimage = document.getElementById("slidemobileimage");
    let videoMobile = document.getElementById("videoMobile");
    if (start) {
        console.log(videoMobile);
        videoMobile.play();
        videoMobile.autoplay = true;
        console.log("--------------------------------");
        const video = videoMobile;
        const imageContainer = slidemobileimage;
        const playButton = start;

        // Hide image and play button
        imageContainer.classList.add('hidden');
        playButton.classList.add('hidden');

        // Show and play video
        video.classList.remove('hidden');
        // playVideo(document);
        // videoMobile.addEventListener('playing', (e)=>{
        //      console.log("loadeddata");
        //      videoMobile.autoplay = true;
        //     playVideo(document);
        // });
        start.addEventListener("click", () => {
             videoMobile.play();
        })
        // let playVideo = (element) => {
        //     console.log("play vido");
        //     const video = videoMobile;
        //     const imageContainer = slidemobileimage;
        //     const playButton = start;

        //     // Hide image and play button
        //     imageContainer.classList.add('hidden');
        //     playButton.classList.add('hidden');

        //     // Show and play video
        //     video.classList.remove('hidden');
        //     video.play();

            // Optional: Pause video when it ends and show image again
            // video.onended = function () {
            //     video.classList.add('hidden');
            //     imageContainer.classList.remove('hidden');
            //     playButton.classList.remove('hidden');
            // };
        // }
    }
})