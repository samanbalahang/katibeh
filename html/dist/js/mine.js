import { CountUp } from './countUp.min.js';
window.addEventListener("load", () => {
    let rezayat = document.getElementById("rezayat");
    if (rezayat) {
        rezayat = parseInt(rezayat.innerText);
        const countUp = new CountUp('rezayat', rezayat, { enableScrollSpy: true });
        countUp.start();
    }
    let moshaver = document.getElementById("moshaver");
    if (moshaver) {
        moshaver = parseInt(moshaver.innerText);
        const countUp = new CountUp('moshaver', moshaver, { enableScrollSpy: true });
        countUp.start();
    }
    let projects = document.getElementById("projects");
    if (projects) {
        projects = parseInt(projects.innerText);
        const countUp = new CountUp('projects', projects, { enableScrollSpy: true });
        countUp.start();
    }
    let sall = document.getElementById("sall");
    if (sall) {
        sall = parseInt(sall.innerText);
        const countUp = new CountUp('sall', sall, { enableScrollSpy: true });
        countUp.start();
    }
    let playVideoMobile = document.getElementById("playVideoMobile");
    let mobileVideoContainer = document.getElementById("mobileVideoContainer");
    let mobileVideo = document.getElementById("mobileVideo");
    let mobileBussinessImg = document.getElementById("mobileBussinessImg");
    let mobilePlayContainer = document.getElementById("mobilePlayContainer");
    if (playVideoMobile) {
        playVideoMobile.addEventListener("click", () => {
            mobileVideoContainer.classList.remove("hidden");
            mobileBussinessImg.classList.add("hidden");
            mobilePlayContainer.classList.add("hidden");
            mobileVideo.play();
        })
        mobileVideo.onended = function () {
            mobileVideoContainer.classList.add('hidden');
            mobileBussinessImg.classList.remove("hidden");
            mobilePlayContainer.classList.remove("hidden");
        };
    }

    let servicess = document.getElementById("servicess");
    let servicessParts = document.getElementById("servicessParts")
    if (servicess) {
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add visible class with a slight delay for staggered effect
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                        scrollToElementD(servicess);
                    }, 100);

                    // Update navigation dots
                    const sectionId = entry.target.id;
                }
            });
        }, {
            threshold: 0.3, // Trigger when 30% of the element is visible
            rootMargin: '0px 0px -50px 0px' // Adjust trigger point slightly upward
        });

        sectionObserver.observe(servicess);
        var scrollToElementD = (servicess) => {
            var topPos = servicess.offsetTop;
            window.scrollTo({
                top: servicess.offsetTop,
                behavior: 'smooth'
            });
            servicessParts.classList.add("fallin");
        }
    }
    let sunParent = document.getElementById("sunParent");
    let slogon = document.getElementById("slogon");
    if (sunParent) {
        const sunObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add visible class with a slight delay for staggered effect
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                        scrollTosunParent(sunParent);
                    }, 100);

                    // Update navigation dots
                    const sunParentId = entry.target.id;
                }
            });
        }, {
            threshold: 0.3, // Trigger when 30% of the element is visible
            rootMargin: '0px 0px -50px 0px' // Adjust trigger point slightly upward
        });
        sunObserver.observe(sunParent);
        var scrollTosunParent = (sunParent) => {
            var topPos = sunParent.offsetTop;
            window.scrollTo({
                top: sunParent.offsetTop,
                behavior: 'smooth'
            });
            slogon.classList.add("rotater")
        }
        // ----------------------------------------------------------
        // rotate samples
        // ----------------------------------------------------------
        const imageWrapper = document.getElementById('sampleCardParent');
        const container = document.getElementById('samples');
        let sampleCard = document.querySelectorAll(".sample-card");
        if (imageWrapper) {
            const imageWrapperObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add visible class with a slight delay for staggered effect
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                            scrollTosunParent(imageWrapperObserver);
                            let updateImageState = () => {
                                const containerRect = container.getBoundingClientRect();
                                const windowHeight = window.innerHeight;
                                const containerHeight = containerRect.height;

                                // Calculate progress based on how far we've scrolled through the container
                                const scrollTop = window.scrollY;
                                const containerTop = container.offsetTop;
                                const containerBottom = containerTop + containerHeight;

                                // Visible part of the container in the viewport
                                const progress = (scrollTop - containerTop + windowHeight) / (containerHeight + windowHeight);

                                // Clamp progress between 0 and 1
                                const clampedProgress = Math.max(0, Math.min(1, progress));
                                // console.log("clampedProgress:", clampedProgress);

                                // Remove all state classes
                                imageWrapper.classList.remove('state-1', 'state-2', 'state-3', 'state-4');

                                // Apply classes based on scroll progress
                                console.log();
                                
                                if (clampedProgress < 0.4) {
                                    sampleCard[0].classList.add('state-1');
                                } else if (clampedProgress < 0.5) {
                                    sampleCard[1].classList.add('state-2');
                                } else if (clampedProgress < 0.75) {
                                    sampleCard[2].classList.add('state-3');
                                } else {
                                    // sampleCard[3].classList.add('state-4');
                                }

                                console.log('Progress:', clampedProgress, 'Current state:', imageWrapper.className);
                            }

                            // Add scroll event listener
                            window.addEventListener('scroll', updateImageState);

                            // Initial call to set the initial state
                            updateImageState();
                        }, 200);

                        // Update navigation dots
                        const imageWrapperId = entry.target.id;
                    }
                });
            }, {
                threshold: 0.3, // Trigger when 30% of the element is visible
                rootMargin: '0px 0px -50px 0px' // Adjust trigger point slightly upward
            });
            imageWrapperObserver.observe(container);
            // Remove the initial state-0 class
            imageWrapper.classList.remove('state-0');


        }
    }
    // const circleContainer = document.querySelector('.circle-container');
    // const rotationSection = document.querySelector('.rotation-section');
    // const elements = document.querySelectorAll('.element');
    // if (circleContainer) {
    //     window.addEventListener('scroll', () => {
    //         const sectionHeight = rotationSection.offsetHeight;
    //         const maxScroll = sectionHeight - window.innerHeight;
    //         const scrollProgress = Math.min(Math.max(window.scrollY / maxScroll, 0), 1);
    //         const rotation = scrollProgress * 180;

    //         // Rotate the circle container
    //         circleContainer.style.transform = `translateY(-50%) rotate(${rotation}deg)`;

    //         // Counter-rotate the elements to keep them upright
    //         elements.forEach(element => {
    //             element.style.transform = getElementTransform(element) + ` rotate(${-rotation}deg)`;
    //         });
    //     });

    //     var getElementTransform = (element) => {
    //         if (element.classList.contains('top')) {
    //             return 'translateX(-50%)';
    //         } else if (element.classList.contains('right')) {
    //             return 'translateY(-50%)';
    //         } else if (element.classList.contains('bottom')) {
    //             return 'translateX(-50%)';
    //         } else if (element.classList.contains('left')) {
    //             return 'translateY(-50%)';
    //         }
    //         return '';
    //     }
    // }
})
