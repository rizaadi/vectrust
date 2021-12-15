'use strict';

var CRYPTOKI = {};

// Mobile navigation function

CRYPTOKI.preload = function () {
    let body = document.querySelector('body');
    body.classList.remove('loading');
};

CRYPTOKI.mobileNav = function () {
    let burgerIcon = document.querySelector('.burger-icon svg');
    let mobileNavPanel = document.querySelector('.mobile-nav-panel');
    let body = document.querySelector('body');
    let closeIcon = document.querySelector('.close-icon');

    const open = function () {
        mobileNavPanel.classList.add('open');
        body.classList.add('body-overlay');
    }

    const close = function () {
        mobileNavPanel.classList.remove('open');
        body.classList.remove('body-overlay');
    }

    if (burgerIcon !== null) {
        burgerIcon.addEventListener('click', function () {
            if (mobileNavPanel !== null) {
                open();
                if (closeIcon !== null && mobileNavPanel.classList.contains('open')) {
                    closeIcon.addEventListener('click', function () {
                        close();
                    });
                }
            };

        });
        
        document.addEventListener('mouseup', function (e) {
                    if (!closeIcon.contains(e.target) && !mobileNavPanel.contains(e.target)) {
                        close();
                    }
                })
            }

}

// Mobile menu click

CRYPTOKI.clickMobileMenu = function () {

    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenu) {
        const mobileMenuItem = mobileMenu.querySelectorAll('.mobile-menu .menu-item-has-children > a');

        for (let i = 0; i < mobileMenuItem.length; i++) {
            mobileMenuItem[i].addEventListener('click', function (e) {
                e.preventDefault();
                let highlight = e.target;
                let currentSubMenu = highlight.nextElementSibling;
                if (currentSubMenu != null) {
                    currentSubMenu.classList.toggle('show');
                }
            });
        }
    }

};

// Mobile searchbox

CRYPTOKI.mobileSearch = function () {

    const searchButton = document.getElementById('mobile-search');

    if (searchButton) {

        const mobileSearchBlock = document.getElementById('mobile-search-block');
        let searchIconAttr = searchButton.querySelector('svg use#search');
        const SVG_XLINK = "http://www.w3.org/1999/xlink";

        const show = function () {
            searchButton.classList.add('clicked');
            mobileSearchBlock.classList.add('is-visible');
            searchIconAttr.setAttributeNS(SVG_XLINK, 'xlink:href', '#cross-icon');
        }

        const hide = function () {
            searchButton.classList.remove('clicked');
            mobileSearchBlock.classList.remove('is-visible');
            searchIconAttr.setAttributeNS(SVG_XLINK, 'xlink:href', '#search-icon');

        }


        if (searchButton !== null) {
            searchButton.addEventListener('click', function () {
                if (!mobileSearchBlock.classList.contains('is-visible')) {
                    show();
                } else {
                    hide();
                }
            });

            document.addEventListener('mouseup', function (e) {
                if (!searchButton.contains(e.target) && !mobileSearchBlock.contains(e.target)) {
                    hide();
                }
            })

        }

    }

}

// Mobile profile panel

CRYPTOKI.mobileProfilePanel = function () {
    const mediaQuery = window.matchMedia('(max-width: 800px)');
    let userProfileButton = document.querySelector('.header-user-profile');
    let profilePanel = document.getElementById('profile-dropdown');
    let profileAvatar = document.querySelector('.header-user-profile .avatar');
    let closingIcon = document.querySelector('.header-user-profile .closing-icon');
    if (mediaQuery.matches) {

        const open = function () {
            if (!profilePanel.classList.contains('open')) {
                profilePanel.classList.toggle('open');
                profileAvatar.classList.add('hide');
                closingIcon.classList.add('show');
            }
        }

        const close = function () {
            if (profilePanel.classList.contains('open')) {
                profileAvatar.classList.remove('hide');
                closingIcon.classList.remove('show');
                profilePanel.classList.remove('open');
            }
        }

        if (profileAvatar !== null) {
            profileAvatar.addEventListener('click', function () {
                open();
            });
        }

        if (closingIcon !== null) {
            closingIcon.addEventListener('click', function () {
                close();
            });
        }


        document.addEventListener('mouseup', function (e) {
            if (!profilePanel.contains(e.target) && !closingIcon.contains(e.target)) {
                close();
            }
        });

    }

}

// Home slider

CRYPTOKI.homeSlider = function () {

    let homeSlider = document.getElementById('homeSlider');

    if (homeSlider) {
        var mySwiper = new Swiper(homeSlider, {
            slidesPerView: 'auto',
            spaceBetween: 20,
            centeredSlides: true,
            slideToClickedSlide: true,
            loop: true,
            loopedSlides: 3,
            initialSlide: 1,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                800: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                },
            },
            navigation: {
                nextEl: '.homeslider-nav .swiper-button-next',
                prevEl: '.homeslider-nav .swiper-button-prev'
            }
        });
    }
};


//Featured carousel
CRYPTOKI.featuredCarousel = function () {
    let featuredCarousel = document.querySelector('.featured-carousel');

    if (featuredCarousel) {
        var mySwiper = new Swiper(featuredCarousel, {
            slidesPerView: 4,
            speed: 400,
            spaceBetween: 20,
            slideToClickedSlide: true,
            createElements: true,
            loop: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                560: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                800: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
            navigation: {
                nextEl: '.featured-carousel-icon.swiper-button-next',
                prevEl: '.featured-carousel-icon.swiper-button-prev'
            }
        });
    }
};


//Categories Slider

CRYPTOKI.categoriesSlider = function () {
    let categoriesSlider = document.querySelector('.categories-bar');

    if (categoriesSlider) {
        var mySwiper = new Swiper(categoriesSlider, {
            slidesPerView: 'auto',
            speed: 400,
            spaceBetween: 10,
            slideToClickedSlide: true,
            createElements: true,
            loop: true,
            loopedSlides: 11,
            navigation: {
                nextEl: '.categories-nav .swiper-button-next',
                prevEl: '.categories-nav .swiper-button-prev'
            }
        });
    }
}


//Artwork slider

CRYPTOKI.artworkSlider = function () {
    let artworkSlider = document.querySelector('.artworks-carousel');

    if (artworkSlider) {
        var mySwiper = new Swiper(artworkSlider, {
            slidesPerView: 1,
            speed: 400,
            spaceBetween: 0,
            slideToClickedSlide: true,
            createElements: true,
            loop: true,
            navigation: {
                nextEl: '.artworks-carousel .swiper-button-next',
                prevEl: '.artworks-carousel .swiper-button-prev'
            }
        });
    }
}


// Gallery Carousel 

CRYPTOKI.galleryCarousel = function () {
    let galleryCarousel = document.querySelector('.gallery-carousel');

    if (galleryCarousel) {
        var mySwiper = new Swiper(galleryCarousel, {
            slidesPerView: 1,
            initialSlide: 0,
            speed: 400,
            spaceBetween: 0,
            slideToClickedSlide: true,
            createElements: true,
            loop: true,
            navigation: {
                nextEl: '.gallery-navigation .swiper-button-next',
                prevEl: '.gallery-navigation .swiper-button-prev'
            }
        });
    }
}


// Social Icons Carousel 

CRYPTOKI.socialCarousel = function () {
    let socialCarousel = document.querySelector('.social-icons-carousel');

    if (socialCarousel !== null) {
        var mySwiper = new Swiper(socialCarousel, {
            slidesPerView: 5,
            spaceBetween: 8,
            initialSlide: 0,
            watchSlidesProgress: true,
            slideVisibleClass: 'swiper-slide-visible',
            loop: true,
            navigation: {
                nextEl: '.social-swiper-nav .swiper-button-next',
                prevEl: '.social-swiper-nav .swiper-button-prev'
            },
        });
    }
}

//Items Categories carousel
CRYPTOKI.itemsCategoriesCarousel = function () {
    let itemsCategoriesCarousel = document.querySelector('.items-categories-carousel');

    if (itemsCategoriesCarousel) {
        var mySwiper = new Swiper(itemsCategoriesCarousel, {
            slidesPerView: 3,
            spaceBetween: 20,
            slideToClickedSlide: true,
            createElements: true,
            loop: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                414: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                800: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
            navigation: {
                nextEl: '.items-categories-icon.swiper-button-next',
                prevEl: '.items-categories-icon.swiper-button-prev'
            }
        });
    }
}

//Featured Sellers carousel
CRYPTOKI.featuredSellersCarousel = function () {
    let featuredSellersCarousel = document.querySelector('.featured-sellers-carousel');

    if (featuredSellersCarousel) {
        var mySwiper = new Swiper(featuredSellersCarousel, {
            slidesPerView: 2,
            spaceBetween: 20,
            slideToClickedSlide: true,
            createElements: true,
            loop: true,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            },
            navigation: {
                nextEl: '.featured-sellers-icon.swiper-button-next',
                prevEl: '.featured-sellers-icon.swiper-button-prev'
            }
        });
    }
}


// Tabs functionality

CRYPTOKI.tabs = function () {
    let myTabs = document.querySelectorAll("ul.tabs-list > li");
    function tabsClick(tabClickEvent) {
        for (let i = 0; i < myTabs.length; i++) {
            myTabs[i].classList.remove('active');
        }
        let clickedTab = tabClickEvent.currentTarget;
        clickedTab.classList.add('active');
        tabClickEvent.preventDefault();
        let myContentTabs = document.querySelectorAll('.tab');
        for (let i = 0; i < myContentTabs.length; i++) {
            myContentTabs[i].classList.remove('active');
        }
        let anchorReference = tabClickEvent.target;
        let activeTabId = anchorReference.getAttribute('href');
        let activeTab = document.querySelector(activeTabId);
        if (activeTab === null) {
            return false;
        }
        else {
            activeTab.classList.add('active');
        }

    }
    for (let i = 0; i < myTabs.length; i++) {
        myTabs[i].addEventListener('click', tabsClick);
    }
}


// Swiper Tabs

var tabsSliderSwiper = undefined;
CRYPTOKI.tabsSlider = function () {
    const mediaQuery = window.matchMedia('(min-width: 800px)');
    let tabs = document.querySelector('.tabs-block');
    if (tabs) {
        if (!mediaQuery.matches && tabsSliderSwiper === undefined) {
            tabsSliderSwiper = new Swiper(tabs, {
                slidesPerView: 'auto',
                initialSlide: 0,
                centeredSlides: true,
                slideToClickedSlide: false,
                watchSlidesProgress: true,
                slideVisibleClass: 'swiper-slide-visible',
                loop: true,
                mousewheelControl: true,
                spaceBetween: 0,
                navigation: {
                    nextEl: '.swiper-nav .swiper-button-next',
                    prevEl: '.swiper-nav .swiper-button-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    414: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 5,
                    },
                },
            });
            tabs.classList.add('overflow-hidden');
        } else if (mediaQuery.matches && tabsSliderSwiper !== undefined) {
            tabsSliderSwiper.destroy();
            tabsSliderSwiper = undefined;
            tabs.classList.remove('overflow-hidden');
        }
    }
}


// Accordion functionality

CRYPTOKI.accordion = function () {
    const headings = document.querySelectorAll(".card-header");
    const triggers = [];
    const accordionContents = document.querySelectorAll(".card-body");
    const copyOpenClass = "open";

    headings.forEach((h, i) => {
        let btn = h.querySelector(".card-button");
        const plusIcon = btn.querySelector('.plus-icon');
        triggers.push(btn);
        let target = h.nextElementSibling;
        btn.onclick = () => {
            let expanded = btn.getAttribute("aria-expanded") === "true";
            plusIcon.classList.toggle('show');
            if (expanded) {
                closeItem(target, btn);

            } else {
                openItem(target, btn);
            }
        };
    });
    function closeAllExpandedItems() {
        const expandedTriggers = triggers.filter(
            (t) => t.getAttribute("aria-expanded") === "true"
        );
        const expandedCopy = Array.from(accordionContents).filter((c) =>
            c.classList.value.includes(copyOpenClass)
        );
        expandedTriggers.forEach((trigger) => {
            trigger.setAttribute("aria-expanded", false);
            const plusIcon = trigger.querySelector('.plus-icon');
            plusIcon.classList.add('show');
        });
        expandedCopy.forEach((copy) => {
            copy.classList.remove(copyOpenClass);
            copy.style.maxHeight = 0;
        });
    }
    function closeItem(target, btn) {
        closeAllExpandedItems();
        btn.setAttribute("aria-expanded", false);
        target.classList.remove(copyOpenClass);
        target.style.maxHeight = 0;
    }
    function openItem(target, btn) {
        closeAllExpandedItems();
        btn.setAttribute("aria-expanded", true);
        target.classList.add(copyOpenClass);
        target.style.maxHeight = target.scrollHeight + "px";
    }
}


//Nice select init

CRYPTOKI.niceSelectInit = function () {

    let element = document.querySelectorAll(".select-nice");

    element.forEach(function (select) {
        NiceSelect.bind(select);
    });

};


CRYPTOKI.ClickHoverEffect = function () {
    //Button click effects
    Waves.init();
    Waves.attach('.btn-dark', ['waves-button', 'waves-float', 'waves-light']);
    Waves.attach('.slide-button .btn', ['waves-button', 'waves-float', 'waves-light']);
};

//Cart, Notifications and Header User Profile panel open on click
CRYPTOKI.headerDropDownsOnCLick = function () {
    let elems = document.querySelectorAll(".cryptoki-notif-bttn");
    if (elems !== null) {
        elems.forEach(function (el) {
            el.addEventListener('click', function (e) {
                const _this = e.target.closest('.cryptoki-notif-bttn');
                if (_this.hasAttribute('data-target')) {
                    const target = _this.getAttribute('data-target');
                    const terget_el = document.getElementById(target);
                    terget_el.classList.toggle('active');
                    _this.classList.toggle('active');

                    let targets = document.querySelectorAll(".cryptoki-notif-target, .cryptoki-notif-bttn");
                    if (targets !== null) {
                        targets.forEach(function (el) {
                            let el_id = '';
                            if (el.hasAttribute('id')) {
                                el_id = el.getAttribute('id');
                            }
                            if (el.hasAttribute('data-target')) {
                                el_id = el.getAttribute('data-target');
                            }

                            if (el_id != target) {
                                el.classList.remove('active');
                            }
                        });
                    }
                }
            });
        });

        document.onclick = function (e) {
            if (e.target.closest('.cryptoki-notif-bttn') === null && !e.target.classList.contains('.cryptoki-notif-bttn') && e.target.closest('.cryptoki-notif-target') === null && !e.target.classList.contains('.cryptoki-notif-target')) {
                let targets = document.querySelectorAll(".cryptoki-notif-target, .cryptoki-notif-bttn");
                if (targets !== null) {
                    targets.forEach(function (el) {
                        el.classList.remove('active');
                    });
                }
            }
        }
    }
};

//Search top menu
CRYPTOKI.searchTopBar = function () {
    let button = document.querySelectorAll(".search-params");
    if (button !== null) {
        button.forEach(function (el) {
            el.addEventListener('click', function (e) {
                e.preventDefault();
                const search = e.target.closest('.main-search');
                const _this = search.querySelector('.search-params');
                _this.classList.toggle('active');
            });
        });

        let lists = document.querySelectorAll(".search-dropdown li");
        if (lists !== null) {
            lists.forEach(function (el) {
                el.addEventListener('click', function (e) {
                    e.preventDefault();
                    const _this = e.target.closest('li');
                    const param = (_this.hasAttribute('data-param')) ? _this.getAttribute('data-param') : '';
                    _this.closest('.main-search').querySelector('.search-param-title').textContent = _this.textContent;
                    _this.closest('.main-search').querySelector('.main-search-params').value = param;
                    _this.closest('.main-search').querySelector('.search-params').classList.remove('active');
                    _this.closest('.main-search').querySelector('.search-input').focus();
                });
            });
        }
    }
};

//Dark mode
CRYPTOKI.darkMode = function () {
    let button = document.querySelector(".mode-toggle .toggle-control input");
    if (button !== null) {

        let currentTheme = localStorage.getItem("theme");
        if (currentTheme === null) {
            const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
            if (prefersDarkScheme.matches) {
                currentTheme = 'dark';
            } else {
                currentTheme = 'light';
            }
        }

        if (currentTheme === "dark") {
            document.body.classList.add("dark-mode");
            button.checked = true;
        } else if (currentTheme === "light") {
            button.checked = false;
        }

        button.addEventListener('change', function (e) {
            document.body.classList.remove("light-mode", "dark-mode");

            if (!e.target.checked) {
                document.body.classList.add("light-mode");
                var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
            } else {
                document.body.classList.add("dark-mode");
                var theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
            }
            localStorage.setItem("theme", theme);
        });
    }
};

//Notifications select
CRYPTOKI.notificationSelect = function () {
    let list = document.querySelector(".notifications-list");
    if (list !== null) {
        let select = list.querySelector(".select-all");
        select.addEventListener('click', function (e) {
            let notification = document.querySelectorAll(".notifications-list .notification");
            if (notification !== null) {
                notification.forEach(function (el) {
                    el.querySelector('.action-buttons input[name="notif-select"]').checked = true;
                });
            }
        });

        let close = document.querySelectorAll(".notifications-list .notification .close");
        close.forEach(function (el) {
            el.addEventListener('click', function (e) {
                e.target.closest('.notification').remove();
            });
        });

        let deleteAll = list.querySelector(".delete");
        deleteAll.addEventListener('click', function (e) {
            let notification = document.querySelectorAll(".notifications-list .notification");
            if (notification !== null) {
                notification.forEach(function (el) {
                    if (el.querySelector('.action-buttons input[name="notif-select"]').checked) {
                        el.remove();
                    }
                });
            }
        });
    }
};

//Cryptoki modal

CRYPTOKI.modal = function () {

    let modals = document.querySelectorAll('[data-modal]');

    modals.forEach(function (trigger) {
        trigger.addEventListener('click', function (event) {
            event.preventDefault();
            let modal = document.getElementById(trigger.dataset.modal);
            modal.classList.add('open');
            let exits = modal.querySelectorAll('.modal-exit');
            exits.forEach(function (exit) {
                exit.addEventListener('click', function (event) {
                    event.preventDefault();
                    modal.classList.remove('open');
                });
            });
        });
    });
}

//Link stub

CRYPTOKI.linkStub = function () {
    let links = document.querySelectorAll('a');
    links.forEach(link => link.addEventListener('click', function (e) {
        let linkAttr = link.getAttribute('href');
        if (linkAttr === "!#") {
            e.preventDefault();
            console.log(linkAttr)
        }
    }))

}




// Functions calling
document.addEventListener("DOMContentLoaded", function () {
    CRYPTOKI.darkMode();
    CRYPTOKI.mobileNav();
    CRYPTOKI.clickMobileMenu();
    CRYPTOKI.mobileSearch();
    CRYPTOKI.homeSlider();
    CRYPTOKI.featuredCarousel();
    CRYPTOKI.categoriesSlider();
    CRYPTOKI.artworkSlider();
    CRYPTOKI.galleryCarousel();
    CRYPTOKI.tabs();
    CRYPTOKI.tabsSlider();
    CRYPTOKI.accordion();
    CRYPTOKI.mobileProfilePanel();
    CRYPTOKI.socialCarousel();
    CRYPTOKI.niceSelectInit();
    CRYPTOKI.ClickHoverEffect();
    CRYPTOKI.itemsCategoriesCarousel();
    CRYPTOKI.featuredSellersCarousel();
    CRYPTOKI.headerDropDownsOnCLick();
    CRYPTOKI.searchTopBar();
    CRYPTOKI.notificationSelect();
    CRYPTOKI.modal();
    CRYPTOKI.linkStub();
}, false);

window.addEventListener('load', function () {
    CRYPTOKI.preload();
});

window.addEventListener('resize', function () {
    CRYPTOKI.tabsSlider();
});
