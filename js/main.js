let pageName = document.querySelector('[data-barba=container]');
let preLoad = document.querySelectorAll('.pre-load');
let header = document.querySelector('header')

const runScripts = () => {
  pageName = document.querySelector('[data-barba=container]');

  const animatePosts = () => {

    let posts = Array.prototype.slice.call(pageName.children);
    // console.log(posts);

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.intersectionRatio >= 0.13) {
            entry.target.classList.add('in-view');
          }
        });
      },
      {
        threshold: [0.5, 0.4, 0],
      }
    );

    posts.forEach((post) => {
      observer.observe(post);
    });
  }


  function googleAnalytics() {
    gtag('event', 'page_view', {
      page_location: 'https://art.mirandabosch.com',
      page_path: window.location.pathname,
      send_to: 'G-409NEZJV2Y',
    })
  }

  const fbTrack = () => {
    fbq('track', 'PageView');
  }

  function allCursor() {
    let cursor = document.querySelector('.cursor');
    let allAnchors = Array.prototype.slice.call(document.querySelectorAll('a'));
    let extraAnchors = Array.prototype.slice.call(document.querySelectorAll('.anchor'));

    let anchors = allAnchors.concat(extraAnchors);

    let anchorContainer = document.querySelectorAll('.main-cta');

    const changeCursorColor = () => {
      anchorContainer.forEach((container) => {
        const color = container.getAttribute('cursor-color');

        if (color === 'red') {
          cursor.classList.remove('black');
          cursor.classList.add('red');
        } else if (color === 'black') {
          cursor.classList.remove('red');
          cursor.classList.add('black');
        }
      });
    };

    const growCursor = () => {
      cursor.classList.add('is-down');
    };

    const shrinkCursor = () => {
      cursor.classList.remove('is-down');
    };

    const hoverCursor = () => {
      cursor.classList.add('is-hover');
    };

    const removeHoverCursor = () => {
      cursor.classList.remove('is-hover');
    };

    document.addEventListener('mousedown', () => {
      growCursor();
    });

    anchors.forEach((anchor) => {
      anchor.addEventListener('mouseover', () => {
        hoverCursor();
      });
    });

    anchors.forEach((anchor) => {
      anchor.addEventListener('mouseleave', () => {
        removeHoverCursor();
      });
    });

    document.addEventListener('mouseup', () => {
      shrinkCursor();
    });

    const moveCursor = (x, y) => {
      cursor.style.top = y + 'px';
      cursor.style.left = x + 'px';
      changeCursorColor();
    };

    document.addEventListener('mousemove', (event) => {
      moveCursor(event.pageX, event.pageY);
    });

    document.addEventListener('scroll', (event) => {
      moveCursor(event.pageX, event.pageY);
    });
  }

  const langSwitcher = () => {
    let lang = window.location.pathname;
    let switchers = document.querySelectorAll('.lang-switcher a');
    if (lang != "/") {
    lang = lang.substring(1)
    lang = lang.substring(0, lang.length - 1)
   
    console.log(lang)

    switchers.forEach(sw =>{
     if (lang == sw.innerText.toLowerCase()) {
      sw.classList.add('active');
     } else {
      sw.classList.remove('active')
     }
    })
  } else {
    switchers[0].classList.add('active')

  }
    
  }
  

  langSwitcher();

  const initScripts = () => {
    if (pageName.classList.contains('home')) {
      animatePosts();
    }

    setTimeout(() => {
      allCursor();
    }, 3000);
  };

  initScripts();
};

const instagram = () => {
  let fields = 'id,username, media_type, media_url, timestamp, permalink, comments'

  const accessToken = 'IGQVJXLXVkeW1HVGo5dzl0My1EUDJUZAGVmMGt0d21EYkFDMHNMclZA1UzVXcm9iZAWNoQk00blBBMEpzdVNmc0NXcjlCX0dCY09ubk4xeVI3a2tPRUI2UzNsVVBiTWExdURaWFhBMGdJak5lcG9vbWprRAZDZD';


  const superHiApi = `https://api.superhi.com/api/test/token/instagram?access_token=${accessToken}`


  const sectionTag = document.querySelector('.instagram-feed');
  let newToken;

  const refreshToken = () => {
    return fetch(superHiApi)
      .then((response) => response.json())
      .then((token) => {
        return token.access_token
      }
      );
  }
  refreshToken();

  const getGram = async () => {
    newToken = await refreshToken()

    const apiUrl = `https://graph.instagram.com/me/media?fields=${fields}&access_token=${newToken}`;


    return fetch(apiUrl, {
      count: 5
    })
      .then((response) => response.json())
      .then((data) => {
        sectionTag.innerHTML = '';
        data.data.slice(0, 5).forEach((post) => {
          sectionTag.innerHTML =
            sectionTag.innerHTML +
            `<div class="flex flex-column">
                         <a class="relative w-100" target="_blank" href="${post.permalink}">
                           <div class='absolute-cover cover no-repeat bg-center' style='background-image: url("${post.media_url}")'></div>
                         </a>
                         <div class="justify-between ig-aob pa3 dn">
                           <div class="flex items-center">
                             <img src="/wp-content/uploads/2020/02/heart-ig-icon.svg">
                             <p class="ml2">${''}</p>
                           </div>
                           <div class="flex items-center">
                             <img src="/wp-content/uploads/2020/02/comments-ig-icon.svg"><p class="ml2">${''}</p>
                           </div>
                         </div>
                       </div>
                   `;
        });

        setTimeout(() => {
          let width = document.querySelector('.instagram-feed div a').clientWidth;
          document.querySelectorAll('.instagram-feed div a').forEach((post) => {
            post.style.height = width + 'px';
          });
        }, 1000);
        window.addEventListener('resize', () => {
          width = document.querySelector('.instagram-feed div a').clientWidth;
          // console.log(width);
          document.querySelectorAll('.instagram-feed div a').forEach((post) => {
            post.style.height = width + 'px';
          });
        });
      });
  }

  getGram()
};

// instagram();

let menu = document.querySelector('.menu');
let menuTrigger = document.querySelector('div.menu-trigger');
let menuInner = document.querySelector('header nav')
let menuBg = document.querySelector('.menu-bg');

const openMenu = () => {
  let header = document.querySelector('header');
  let prevScroll = 0;
  document.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll < 100) {
      header.classList.remove('scrolled');
    } else if (currentScroll > 100 && prevScroll < currentScroll) {
      header.classList.add('scrolled');
    } else if (prevScroll - 15 > currentScroll) {
      // header.classList.remove('scrolled');
    }

    prevScroll = currentScroll;
  });

  let menuOG = menuTrigger.innerHTML;

  // let allLinks = menu.querySelectorAll('a');


  menuTrigger.addEventListener('click', () => {
    header.classList.toggle('menu-open');
    menuInner.classList.toggle('open');

    // document.querySelector('html').classList.toggle('h.100vh');
    // document.querySelector('html').classList.toggle('overflow-hidden');

    if (header.classList.contains('menu-open')) {
      menuTrigger.innerHTML = `<svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 1L1.00001 7.99999" stroke="black"/>
      <path d="M8 8L1.00001 1.00001" stroke="black"/>
      </svg>
      `;
      header.classList.add('scrolled');

      // document.querySelector('main').style.opacity = '0.3'
      document.querySelector('main').style.pointerEvents = 'none'

    } else {
      menuTrigger.innerHTML = menuOG;

      // document.querySelector('main').style.opacity = ''
      document.querySelector('main').style.pointerEvents = ''
      header.classList.remove('scrolled');

    }
  });

  menuBg.addEventListener('click', () => {
    header.classList.toggle('menu-open');
    menuInner.classList.toggle('open');
    menuTrigger.innerHTML = menuOG;

    // document.querySelector('main').style.opacity = ''
    document.querySelector('main').style.pointerEvents = ''
    header.classList.remove('scrolled');
  })
};
openMenu();

const animateGraph = () => {
  let images = document.querySelectorAll('.animated-images-container div');
  images[0].style.opacity = '1';
  if (images.length > 0) {
    let i = 0
    setInterval(() => {
      if (i >= images.length) {
        i = 0;
      }
      images.forEach(img => {
        img.style.opacity = 0
      })
      images[i].style.opacity = 1;
      i++
    }, 1750);
  }
}

animateGraph();

// barba.init({
//   timeout: 5000,
//   prevent: ({ el }) => el.classList.contains('barba-prevent'),
//   transitions: [
//     {
//       leave({ current, next, trigger }) {
       
//         return new Promise((resolve) => {
//           const timeline = gsap.timeline({
//             defaults: {
//               ease: Expo.easeOut,
//             },
//             onComplete() {
//               current.container.remove();
//               resolve();
//             },
//           });
//           timeline
//           // .call(() => {
//           //   preLoad[0].classList.add('animate');
//           // })
//           // .set(preLoad, { x: '100%', opacity: '1' })
//           // .to(current.container, { opacity: 0.6, x: '-10%', duration: 2 }, 0)
//           // .to(preLoad[0], { x: '0%', ease: Power4.easeOut, duration: 1.5 }, 0);
//         });
//       },
//       enter({ current, next, trigger }) {
//         return new Promise((resolve) => {
//           window.scrollTo({
//             top: 0,
//           });
//           runScripts();
//           const timeline = gsap.timeline({
//             onComplete() {
//               resolve();
//             },
//             defaults: {
//               duration: 2,
//               ease: Expo.easeOut,
//             },
//           });

//           timeline
//           // .call(() => {
//           //   preLoad[0].classList.remove('animate');
//           // })
//           // .set(next.container, { opacity: 0, x: '10%' })
//           // .to(preLoad, { x: '-100%', opacity: 1, duration: 2.3 }, 0)
//           // .to(next.container, { opacity: 1, x: '0' }, 0.5);
//         });
//       },
//     },

//   ],
//   views: [
//     {
//       namespace: 'home',
//       afterEnter(data) {
//       },
//     },
//   ],
//   debug: true,
// });

runScripts();


// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


setInterval(() => {
  document.querySelectorAll('.ball-gradient').forEach(s => {
    // if (s.classList.contains('change')) {
    s.classList.toggle('o-0');
    // }
  })
}, 5000);



const animateHome = () => {
  let subtitle = Array.prototype.slice.call(document.querySelector('.home-starter').children);

  // subtitle.shift();

  let landingTL = gsap.timeline({
    defaults: {
      easing: Expo.EaseOut,
      duration: .25,

    },
  });

  landingTL
    .set(subtitle, { y: 30, opacity: 0 })
    .to(subtitle, { y: 0, opacity: 1, stagger: 0.1 }, 1);

}

animateHome();


const contact = () => {
  let hrefs = document.querySelectorAll('a');
  hrefs.forEach((a) => {
    if (a.href.indexOf('#contact') > -1) {
      a.classList.add('barba-prevent');
      // console.log(a)
      a.addEventListener('click', (e) => {
        e.preventDefault();

        let timeline = gsap.timeline({
          defaults: {
            easing: Expo.EaseOut,
            duration: 0.5,
          },
        });

        timeline
          .set(container, { pointerEvents: 'all', opacity: 1 })
          .set(contact, { x: '100%' })
          .set(bg, { opacity: 0 })
          .to(contact, { x: '0' }, 0)
          .to(bg, { opacity: 1 }, 0.4);
      });
    }
  });
  let close = document.querySelector('#close-contact');
  let bg = document.querySelector('.contact-bg');
  let contact = document.querySelector('.contact-content');
  let container = document.querySelector('.contact-form-container');

  close.addEventListener('click', () => {
    let timeline = gsap.timeline({
      defaults: {
        easing: Expo.EaseOut,
        duration: 0.5,
      },
    });

    timeline
      .set(container, { pointerEvents: 'none' })
      .to(contact, { x: '100%' })
      .to(bg, { opacity: 0 }, 0);
  });
};

contact();




const visitedInputs = () => {
  let inputs = Array.prototype.slice.call(document.querySelectorAll('.contact-pop-container input'));
  let textarea = document.querySelector('.contact-pop-container textarea');

  inputs.push(textarea);

  inputs.forEach(input => {
    // console.log(input);
    input.addEventListener("change", (e) => {
      e.target.classList.add('visited');
      // console.log(input)
    })
  })
}


visitedInputs();


let darkModeToggle = document.querySelector('#dark-mode-toggle');
let lightModeToggle = document.querySelector('#light-mode-toggle');

document.getElementById("light-mode").disabled = true;

darkModeToggle.addEventListener('click', ()=> {

  darkModeToggle.querySelector('svg').classList.add('active');
  lightModeToggle.querySelector('svg').classList.remove('active');


  document.getElementById("dark-mode").disabled = false;
  document.getElementById("light-mode").disabled = true;

    // console.log('clicking dark');
})

lightModeToggle.addEventListener('click', ()=> {

  lightModeToggle.querySelector('svg').classList.add('active');
  darkModeToggle.querySelector('svg').classList.remove('active');

  document.getElementById("dark-mode").disabled = true;
  document.getElementById("light-mode").disabled = false;

    // console.log('clicking dark');
})