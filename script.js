/* =========================================
   CUSTOM CURSOR
========================================= */

const cursor =
    document.querySelector(".cursor");

const cursorRing =
    document.querySelector(".cursor-ring");


window.addEventListener("mousemove", (e) => {

    cursor.style.left =
        e.clientX + "px";

    cursor.style.top =
        e.clientY + "px";


    cursorRing.animate(
        {
            left: e.clientX + "px",
            top: e.clientY + "px"
        },
        {
            duration: 450,
            fill: "forwards"
        }
    );

});


/* =========================================
   CURSOR HOVER
========================================= */

const hoverItems =
    document.querySelectorAll(
        "a, button, .skill-card, .project-preview"
    );


hoverItems.forEach(item => {

    item.addEventListener(
        "mouseenter",
        () => {

            cursorRing.style.width = "60px";

            cursorRing.style.height = "60px";

        }
    );


    item.addEventListener(
        "mouseleave",
        () => {

            cursorRing.style.width = "35px";

            cursorRing.style.height = "35px";

        }
    );

});


/* =========================================
   MOBILE MENU
========================================= */

const menuButton =
    document.getElementById(
        "menuButton"
    );

const navbar =
    document.querySelector(
        ".navbar"
    );


menuButton.addEventListener(
    "click",
    () => {

        navbar.classList.toggle(
            "menu-open"
        );

    }
);


/* close menu */

document
    .querySelectorAll(
        ".navbar nav a"
    )
    .forEach(link => {

        link.addEventListener(
            "click",
            () => {

                navbar.classList.remove(
                    "menu-open"
                );

            }
        );

    });


/* =========================================
   SCROLL REVEAL
========================================= */

const revealElements =
    document.querySelectorAll(
        ".reveal"
    );


const revealObserver =
    new IntersectionObserver(
        (entries) => {

            entries.forEach(
                entry => {

                    if (
                        entry.isIntersecting
                    ) {

                        entry.target.classList.add(
                            "show"
                        );

                        revealObserver.unobserve(
                            entry.target
                        );

                    }

                }
            );

        },
        {
            threshold: 0.12
        }
    );


revealElements.forEach(
    element => {

        revealObserver.observe(
            element
        );

    }
);


/* =========================================
   PROJECT TILT
========================================= */

const projectPreviews =
    document.querySelectorAll(
        ".project-preview"
    );


projectPreviews.forEach(
    preview => {

        preview.addEventListener(
            "mousemove",
            (e) => {

                const rect =
                    preview.getBoundingClientRect();


                const x =
                    e.clientX - rect.left;

                const y =
                    e.clientY - rect.top;


                const rotateX =
                    ((y / rect.height) - 0.5) * -2;

                const rotateY =
                    ((x / rect.width) - 0.5) * 2;


                preview.style.transform =
                    `
                    perspective(1000px)
                    rotateX(${rotateX}deg)
                    rotateY(${rotateY}deg)
                    `;
            }
        );


        preview.addEventListener(
            "mouseleave",
            () => {

                preview.style.transform =
                    `
                    perspective(1000px)
                    rotateX(0)
                    rotateY(0)
                    `;

            }
        );

    }
);


/* =========================================
   ACTIVE NAV
========================================= */

const sections =
    document.querySelectorAll(
        "section[id]"
    );

const navLinks =
    document.querySelectorAll(
        ".navbar nav a"
    );


window.addEventListener(
    "scroll",
    () => {

        let current = "";


        sections.forEach(
            section => {

                const sectionTop =
                    section.offsetTop - 300;


                if (
                    window.scrollY >= sectionTop
                ) {

                    current =
                        section.id;

                }

            }
        );


        navLinks.forEach(
            link => {

                link.style.color = "";

                if (
                    link.getAttribute(
                        "href"
                    ) === `#${current}`
                ) {

                    link.style.color =
                        "#647e6d";

                }

            }
        );

    }
);


/* =========================================
   PROJECT BUTTON
========================================= */

document
    .querySelectorAll(
        ".view-project"
    )
    .forEach(
        button => {

            button.addEventListener(
                "click",
                (e) => {

                    const href =
                        button.getAttribute(
                            "href"
                        );


                    if (
                        href === "#"
                    ) {

                        e.preventDefault();


                        const arrow =
                            button.querySelector(
                                "span"
                            );


                        arrow.textContent =
                            "✓";


                        setTimeout(
                            () => {

                                arrow.textContent =
                                    "↗";

                            },
                            1500
                        );

                    }

                }
            );

        }
    );


/* =========================================
   PARALLAX HERO
========================================= */

const heroGrid =
    document.querySelector(
        ".hero-grid"
    );


window.addEventListener(
    "scroll",
    () => {

        if (!heroGrid) return;


        const scroll =
            window.scrollY;


        heroGrid.style.transform =
            `translateY(${scroll * 0.08}px)`;

    }
);


/* =========================================
   EMAIL FEEDBACK
========================================= */

const email =
    document.querySelector(
        ".email-link"
    );


if (email) {

    email.addEventListener(
        "mouseenter",
        () => {

            email.querySelector(
                "span"
            ).textContent = "→";

        }
    );


    email.addEventListener(
        "mouseleave",
        () => {

            email.querySelector(
                "span"
            ).textContent = "↗";

        }
    );

}

/* =========================================
   LIGHT / DARK MODE
========================================= */

const themeButton =
    document.getElementById("themeButton");

const profileImage =
    document.querySelector(".profile-frame img");


const darkImage =
    "Ulquiora - light.jpg";

const lightImage =
    "𝐔𝐥𝐪𝐮𝐢𝐨𝐫𝐫𝐚 𝐂𝐢𝐟𝐞𝐫 𝐈𝐜𝐨𝐧.jpg";


if (themeButton && profileImage) {

    themeButton.addEventListener(
        "click",
        () => {

            /* Toggle theme */

            document.body.classList.toggle(
                "light-mode"
            );


            const isLight =
                document.body.classList.contains(
                    "light-mode"
                );


            /* =================================
               CHANGE PROFILE IMAGE
            ================================= */

            profileImage.style.opacity = "0";


            setTimeout(
                () => {

                    profileImage.src =
                        isLight
                            ? lightImage
                            : darkImage;

                    profileImage.style.opacity = "1";

                },
                300
            );


            /* =================================
               CHANGE ICON
            ================================= */

            themeButton.textContent =
                isLight
                    ? "☾"
                    : "☼";


            /* =================================
               SAVE MODE
            ================================= */

            localStorage.setItem(
                "sull-theme",
                isLight
                    ? "light"
                    : "dark"
            );

        }
    );


    /* =================================
       LOAD SAVED THEME
    ================================= */

    const savedTheme =
        localStorage.getItem(
            "sull-theme"
        );


    if (savedTheme === "light") {

        document.body.classList.add(
            "light-mode"
        );

        themeButton.textContent = "☾";

        profileImage.src =
            lightImage;

    }

}

