document.querySelector(".holding").classList.add("animate__zoomInLeft", "animate__animated");
document.querySelector("#katibeh h1").classList.add("animate__zoomInUp", "animate__animated", "animate__delay");
document.querySelector("#katibeh h2").classList.add("animate__fadeInLeftBig", "animate__animated", "animate__delay");

window.addEventListener("load", () => {
    let start = document.getElementById("start");
    let slidemobileimage = document.getElementById("slidemobileimage");
    let videoMobile = document.getElementById("videoMobile");
    let slidedesktopimage = document.getElementById("slidedesktopimage");
    let videoDesktop = document.getElementById("videoDesktop");
    // console.log(screen.width);

    if (start) {
        // console.log(videoMobile);
        if (screen.width <= 768) {
            videoMobile.play();
            videoMobile.autoplay = true;
            const video = videoMobile;
            const imageContainer = slidemobileimage;
            const playButton = start;
            imageContainer.classList.add('hidden!');
            playButton.classList.add('hidden');
            video.classList.remove('hidden');
            start.addEventListener("click", () => {
                videoMobile.play();
            });
        }
        if (screen.width > 768) {
            // we are in desktop mode.
            videoDesktop.play();
            videoDesktop.autoplay = true;
            slidedesktopimage.classList.add('hidden!');
            videoDesktop.classList.remove('hidden');
            start.classList.add('hidden');
            // swiper slides

        }
    }
    let baseSwiper = document.getElementById("baseSwiper");
    if (baseSwiper) {
        var swiper = new Swiper(".baseSwiper", {
            direction: "vertical",
            hashNavigation: {
                watchState: true,
            },
            mousewheel: true,
            effect: "fade",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            on: {
                init: function () {
                    // Initialize first slide
                    this.slides[this.activeIndex].classList.add('slide-active');
                },
                slideChange: function () {
                    // // Remove class from all slides
                    // this.slides.forEach(slide => {
                    //     slide.classList.remove('slide-active');
                    // });
                    // // Add class to active slide
                    // this.slides[this.activeIndex].classList.add('slide-active');
                    // Get active slide index
                    let activeIndex = swiper.activeIndex;
                    // Get real index (useful when loop: true)
                    let realIndex = swiper.realIndex;
                    // Get the actual active slide element
                    let activeSlide = swiper.slides[swiper.activeIndex];
                    // console.log('Active Index:', activeIndex);
                    // console.log('Real Index:', realIndex);
                    // console.log('Active Slide:', activeSlide);
                    // console.log('Active Slide ID:', activeSlide.id);
                    activateslide(realIndex, activeSlide);

                }
            }
        });
        //if in desktop mood 
        if (screen.width > 768) {
            let gotokatibeh = document.getElementById("gotokatibeh");
            let gotoAffiliatePro = document.getElementById("gotoAffiliatePro");
            let gotomodel = document.getElementById("gotomodel");
            let gotodigital = document.getElementById("gotodigital");
            let gotocoaching = document.getElementById("gotocoaching");
            let gotoeventmarketing = document.getElementById("gotoeventmarketing");
            let gototabliqmohiti = document.getElementById("gototabliqmohiti");
            let gotochap = document.getElementById("gotochap");
            let gotohadaya = document.getElementById("gotohadaya");
            let gotoeftekhar = document.getElementById("gotoeftekhar");
            let gotomaqalat = document.getElementById("gotomaqalat");
            let gotofooter = document.getElementById("gotofooter");
            gotokatibeh.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(0,1,true);
            })
            gotoAffiliatePro.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(1,1,true);
            })
            gotomodel.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(2,1,true);
            })
            gotodigital.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(3,1,true);
            })
            gotocoaching.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(4,1,true);
            })
            gotoeventmarketing.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(5,1,true);
            })
            gototabliqmohiti.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(6,1,true);
            })
            gotochap.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(7,1,true);
            })
            gotohadaya.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(8,1,true);
            })
            gotoeftekhar.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(9,1,true);
            })
            gotomaqalat.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(10,1,true);
            })
            gotofooter.addEventListener("click", (e)=>{
                e.preventDefault();
                swiper.slideTo(13,1,true);
            })
        }

    }

    let activateslide = (index, activeSlide) => {
        switch (index) {
            case 0:
                removeAllEffects();
                document.querySelector(".holding").classList.add("animate__zoomInLeft", "animate__animated");
                document.querySelector("#katibeh h1").classList.add("animate__zoomInUp", "animate__animated", "animate__delay");
                document.querySelector("#katibeh h2").classList.add("animate__fadeInLeftBig", "animate__animated", "animate__delay");
                break;
            case 1:
                removeAllEffects();
                document.querySelector("#AffiliatePro hgroup h2:first-child").classList.add("animate__zoomInLeft", "animate__animated");
                document.querySelector("#AffiliatePro hgroup h2:nth-child(2)").classList.add("animate__zoomInUp", "animate__animated", "animate__delay");
                document.querySelector("#AffiliatePro  hgroup h2:nth-child(3)").classList.add("animate__fadeInLeftBig", "animate__animated", "animate__delay");
                document.querySelector("#AffiliatePro .bottom  h2").classList.add("animate__zoomInLeft", "animate__animated");
                document.querySelector("#AffiliatePro .bottom .new-plan").classList.add("animate__zoomInUp", "animate__animated", "animate__delay");
                document.querySelector("#AffiliatePro  .bottom p").classList.add("animate__fadeInBottomLeft", "animate__animated", "animate__delay");
                document.querySelector("#AffiliatePro  .bottom a").classList.add("animate__fadeInBottomRight", "animate__animated", "animate__delay");
                break;
            case 2:
                removeAllEffects();
                document.querySelector("#model h2").classList.add("animate__heartBeat", "animate__animated");
                document.querySelector("#model .top p").classList.add("animate__backInRight", "animate__animated");
                document.querySelector("#model .bottom>div:first-child").classList.add("animate__lightSpeedInLeft", "animate__animated");
                document.querySelector("#model .bottom>div:nth-child(2)").classList.add("animate__backInLeft", "animate__animated");
                document.querySelector("#model .bottom>div:nth-child(3)").classList.add("animate__bounceInLeft", "animate__animated");
                document.querySelector("#model .bottom>div:last-child").classList.add("animate__fadeInLeftBig", "animate__animated");
                break;
            case 3:
                removeAllEffects();
                document.querySelector("#digital .top h2").classList.add("animate__slideInDown", "animate__animated");
                document.querySelector("#digital .top ul").classList.add("animate__rotateInDownRight", "animate__animated");
                document.querySelector("#digital .bottom  h2").classList.add("animate__slideInUp", "animate__animated");
                document.querySelector("#digital .bottom  p").classList.add("animate__rotateInUpLeft", "animate__animated");
                document.querySelector("#digital .bottom  a").classList.add("animate__jackInTheBox", "animate__animated");
                break;
            case 4:
                removeAllEffects();
                document.querySelector("#coaching .top h2").classList.add("animate__backInRight", "animate__animated");
                document.querySelector("#coaching .top p").classList.add("animate__bounceInRight", "animate__animated");
                document.querySelector("#coaching .top .triangle").classList.add("animate__fadeInRight", "animate__animated");
                document.querySelector("#coaching .bottom  h2").classList.add("animate__lightSpeedInLeft", "animate__animated");
                document.querySelector("#coaching .bottom  p").classList.add("animate__rotateInUpLeft", "animate__animated");
                document.querySelector("#coaching .bottom  a").classList.add("animate__slideInLeft", "animate__animated");
                break;
            case 5:
                removeAllEffects();
                document.querySelector("#eventmarketing .top h2").classList.add("animate__fadeInRight", "animate__animated");
                document.querySelector("#eventmarketing .top ul").classList.add("animate__fadeInBottomRight", "animate__animated");
                document.querySelector("#eventmarketing .bottom  h2").classList.add("animate__lightSpeedInLeft", "animate__animated");
                document.querySelector("#eventmarketing .bottom  p").classList.add("animate__rotateInUpLeft", "animate__animated");
                document.querySelector("#eventmarketing .bottom  a").classList.add("animate__slideInUp", "animate__animated");
                break;
            case 6:
                removeAllEffects();
                document.querySelector("#tabliqmohiti .top h2").classList.add("animate__lightSpeedInRight", "animate__animated");
                document.querySelector("#tabliqmohiti .top p:first-child").classList.add("animate__fadeInRight", "animate__animated");
                document.querySelector("#tabliqmohiti .top p:nth-child(2)").classList.add("animate__fadeInRight", "animate__animated");
                document.querySelector("#tabliqmohiti .top p:nth-child(3)").classList.add("animate__fadeInRight", "animate__animated");
                document.querySelector("#tabliqmohiti .top p:last-child").classList.add("animate__fadeInRight", "animate__animated");
                document.querySelector("#tabliqmohiti .bottom  h2").classList.add("animate__backInLeft", "animate__animated");
                document.querySelector("#tabliqmohiti .bottom  a").classList.add("animate__slideInLeft", "animate__animated");
                document.querySelector("#tabliqmohiti .bottom  .advertizing").classList.add("animate__backInLeft", "animate__animated");
                break;
            case 7:
                removeAllEffects();
                document.querySelector("#chap h2.chap-heading").classList.add("animate__lightSpeedInRight", "animate__animated");
                document.querySelector("#chap ul").classList.add("animate__rotateInDownRight", "animate__animated");
                document.querySelector("#chap .bottom h2").classList.add("animate__jackInTheBox", "animate__animated");
                document.querySelector("#chap .bottom p").classList.add("animate__slideInLeft", "animate__animated");
                setTimeout(() => {
                    document.getElementById("redbganimated").classList.add("active");
                }, 500); // 1000ms = 1 second delay
                // document.querySelector("#chap .top a").classList.add("animate__slideInUp", "animate__animated");
                break;
            case 8:
                removeAllEffects();
                document.querySelector("#hadaya .top h2").classList.add("animate__lightSpeedInRight", "animate__animated");
                document.querySelector("#hadaya .top div p:first-child").classList.add("animate__lightSpeedInRight", "animate__animated");
                document.querySelector("#hadaya .top div p:nth-child(2)").classList.add("animate__lightSpeedInRight", "animate__animated");
                document.querySelector("#hadaya .top div p:nth-child(3)").classList.add("animate__lightSpeedInRight", "animate__animated");
                document.querySelector("#hadaya .bottom h2").classList.add("animate__fadeInUp", "animate__animated");
                document.querySelector("#hadaya .bottom p").classList.add("animate__rollIn", "animate__animated");
                document.querySelector("#hadaya .bottom a").classList.add("animate__lightSpeedInRight", "animate__animated");
                break;
            case 9:
                removeAllEffects();
                let headlinespan01 = document.getElementById("typing-headlinespan01");
                let headlinespan02 = document.getElementById("typing-headlinespan02");
                let headlinespan03 = document.getElementById("typing-headlinespan03");
                let eftekhartextenglish = document.getElementById("eftekhartextenglish");
                const texts = [
                    { id: "typing-headlinespan01", text: headlinespan01.innerText },
                    { id: "typing-headlinespan02", text: headlinespan02.innerText },
                    { id: "typing-headlinespan03", text: headlinespan03.innerText },
                    { id: "eftekhartextenglish", text: eftekhartextenglish.innerText }
                ];
                headlinespan01.innerText = "";
                headlinespan02.innerText = "";
                headlinespan03.innerText = "";
                eftekhartextenglish.innerText = "";
                const typingSpeed = 30;

                // Typing function
                const typeText = (elementId, text, delay = 0) => {
                    return new Promise((resolve) => {
                        setTimeout(() => {
                            const textElement = document.getElementById(elementId);
                            let index = 0;

                            const typingInterval = setInterval(() => {
                                if (index < text.length) {
                                    textElement.textContent = text.substring(0, index + 1);
                                    index++;
                                } else {
                                    clearInterval(typingInterval);
                                    resolve(); // Resolve promise when typing is complete
                                }
                            }, typingSpeed);
                        }, delay);
                    });
                }

                // Start sequential typing
                const startSequentialTyping = async () => {
                    // Start element 3 in background (no await)
                    typeText(texts[3].id, texts[3].text);

                    // Start element 0 and wait for it
                    await typeText(texts[0].id, texts[0].text);

                    // Then element 1
                    await typeText(texts[1].id, texts[1].text, 200);

                    // Then element 2
                    await typeText(texts[2].id, texts[2].text, 100);
                }

                // Start when page loads
                startSequentialTyping();

                let tagrobercontity = document.getElementById("tagrobercontity");
                let projectcountity = document.getElementById("projectcountity");
                let rezayatcountent = document.getElementById("rezayatcountent");
                let tagrobercontitynum = parseInt(tagrobercontity.innerText);
                let projectcountitynum = parseInt(projectcountity.innerText);
                let rezayatcountentnum = parseInt(rezayatcountent.innerText);
                let countUp = (elementId, targetNumber, duration = 2000) => {
                    const element = document.getElementById(elementId);

                    const startNumber = 0;
                    const startTime = performance.now();
                    function updateCount(currentTime) {
                        const elapsedTime = currentTime - startTime;
                        const progress = Math.min(elapsedTime / duration, 1);

                        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                        const currentNumber = Math.floor(startNumber + (targetNumber - startNumber) * easeOutQuart);
                        element.textContent = currentNumber.toLocaleString();

                        if (progress < 1) {
                            requestAnimationFrame(updateCount);
                        } else {
                            element.textContent = targetNumber.toLocaleString();
                        }
                    }

                    requestAnimationFrame(updateCount);
                }

                // Start all counters automatically
                setTimeout(() => {
                    // countUp('counter1', 1250, 2500);
                    // countUp('counter2', 350, 2000);
                    // countUp('counter3', 2480, 3000);
                    countUp(tagrobercontity.id, tagrobercontitynum, 2500);
                    countUp(projectcountity.id, projectcountitynum, 2000);
                    countUp(rezayatcountent.id, rezayatcountentnum, 3000);
                }, 500);
                break;
            default:

                break;
        }
    }
    let removeAllEffects = () => {
        document.querySelector(".holding").classList.remove("animate__zoomInLeft", "animate__animated");
        document.querySelector("#katibeh h1").classList.remove("animate__zoomInUp", "animate__animated", "animate__delay");
        document.querySelector("#katibeh h2").classList.remove("animate__fadeInLeftBig", "animate__animated", "animate__delay");
        // slide 02
        document.querySelector("#AffiliatePro hgroup h2:first-child").classList.remove("animate__zoomInLeft", "animate__animated");
        document.querySelector("#AffiliatePro hgroup h2:nth-child(2)").classList.remove("animate__zoomInUp", "animate__animated", "animate__delay");
        document.querySelector("#AffiliatePro  hgroup h2:nth-child(3)").classList.remove("animate__fadeInLeftBig", "animate__animated", "animate__delay");
        document.querySelector("#AffiliatePro .bottom  h2").classList.remove("animate__zoomInLeft", "animate__animated");
        document.querySelector("#AffiliatePro .bottom .new-plan").classList.remove("animate__zoomInUp", "animate__animated", "animate__delay");
        document.querySelector("#AffiliatePro  .bottom p").classList.remove("animate__fadeInBottomLeft", "animate__animated", "animate__delay");
        document.querySelector("#AffiliatePro  .bottom a").classList.remove("animate__fadeInBottomRight", "animate__animated", "animate__delay");
        // slide 03
        document.querySelector("#model h2").classList.remove("animate__heartBeat", "animate__animated");
        document.querySelector("#model .top p").classList.remove("animate__backInRight", "animate__animated");
        document.querySelector("#model .bottom>div:first-child").classList.remove("animate__lightSpeedInLeft", "animate__animated");
        document.querySelector("#model .bottom>div:nth-child(2)").classList.remove("animate__backInLeft", "animate__animated");
        document.querySelector("#model .bottom>div:nth-child(3)").classList.remove("animate__bounceInLeft", "animate__animated");
        document.querySelector("#model .bottom>div:last-child").classList.remove("animate__fadeInLeftBig", "animate__animated");
        // slide 04
        document.querySelector("#digital .top h2").classList.remove("animate__slideInDown", "animate__animated");
        document.querySelector("#digital .top ul").classList.remove("animate__rotateInDownRight", "animate__animated");
        document.querySelector("#digital .bottom  h2").classList.remove("animate__slideInUp", "animate__animated");
        // Get the heading element
        const heading = document.getElementById('animated-heading');
        const originalText = heading.innerText; // Your text here
        heading.innerText = "";
        // Wrap each character in a span
        const chars = originalText.split('').map((char, index) => {
            const span = document.createElement('span');
            span.className = 'char';
            span.textContent = char === ' ' ? '\u00A0' : char; // Handle spaces
            span.style.setProperty('--char-index', index);
            span.style.animationDelay = `calc(1s + (0.1s * ${index}))`; // Add 1s base delay
            return span;
        });

        // Add all characters to the heading
        chars.forEach(char => heading.appendChild(char));
        document.querySelector("#digital .bottom  p").classList.remove("animate__rotateInUpLeft", "animate__animated");
        document.querySelector("#digital .bottom  a").classList.remove("animate__jackInTheBox", "animate__animated");
        // slide 05
        document.querySelector("#coaching .top h2").classList.remove("animate__rubberBand", "animate__animated");
        document.querySelector("#coaching .top p").classList.remove("animate__wobble", "animate__animated");
        document.querySelector("#coaching .top .triangle").classList.remove("animate__headShake", "animate__animated");
        document.querySelector("#coaching .bottom  h2").classList.remove("animate__tada", "animate__animated");
        document.querySelector("#coaching .bottom  p").classList.remove("animate__bounce", "animate__animated");
        document.querySelector("#coaching .bottom  a").classList.remove("animate__shakeX", "animate__animated");
        // slide 06
        document.querySelector("#eventmarketing .top h2").classList.remove("animate__fadeInRight", "animate__animated");
        document.querySelector("#eventmarketing .top ul").classList.remove("animate__fadeInBottomRight", "animate__animated");
        document.querySelector("#eventmarketing .bottom  h2").classList.remove("animate__lightSpeedInLeft", "animate__animated");
        document.querySelector("#eventmarketing .bottom  p").classList.remove("animate__rotateInUpLeft", "animate__animated");
        document.querySelector("#eventmarketing .bottom  a").classList.remove("animate__slideInUp", "animate__animated");
        // slide 07
        document.querySelector("#tabliqmohiti .top h2").classList.remove("animate__lightSpeedInRight", "animate__animated");
        document.querySelector("#tabliqmohiti .top p:first-child").classList.remove("animate__fadeInRight", "animate__animated");
        document.querySelector("#tabliqmohiti .top p:nth-child(2)").classList.remove("animate__fadeInRight", "animate__animated");
        document.querySelector("#tabliqmohiti .top p:nth-child(3)").classList.remove("animate__fadeInRight", "animate__animated");
        document.querySelector("#tabliqmohiti .top p:last-child").classList.remove("animate__fadeInRight", "animate__animated");
        document.querySelector("#tabliqmohiti .bottom  h2").classList.remove("animate__backInLeft", "animate__animated");
        document.querySelector("#tabliqmohiti .bottom  a").classList.remove("animate__slideInLeft", "animate__animated");
        document.querySelector("#tabliqmohiti .bottom  .advertizing").classList.remove("animate__backInLeft", "animate__animated");
        //slide 08
        document.querySelector("#chap h2.chap-heading").classList.remove("animate__lightSpeedInRight", "animate__animated");
        document.querySelector("#chap ul").classList.remove("animate__rotateInDownRight", "animate__animated");
        document.querySelector("#chap .bottom h2").classList.remove("animate__jackInTheBox", "animate__animated");
        document.querySelector("#chap .bottom p").classList.remove("animate__slideInLeft", "animate__animated");
        document.getElementById("redbganimated").classList.remove("active");
        //slide 09
        document.querySelector("#hadaya .top h2").classList.remove("animate__lightSpeedInRight", "animate__animated");
        document.querySelector("#hadaya .top div p:first-child").classList.remove("animate__lightSpeedInRight", "animate__animated");
        document.querySelector("#hadaya .top div p:nth-child(2)").classList.remove("animate__lightSpeedInRight", "animate__animated");
        document.querySelector("#hadaya .top div p:nth-child(3)").classList.remove("animate__lightSpeedInRight", "animate__animated");
        document.querySelector("#hadaya .bottom h2").classList.remove("animate__fadeInUp", "animate__animated");
        document.querySelector("#hadaya .bottom p").classList.remove("animate__rollIn", "animate__animated");
        document.querySelector("#hadaya .bottom a").classList.remove("animate__lightSpeedInRight", "animate__animated");

    }
});