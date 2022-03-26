let pageName = document.querySelector('[data-barba=container]');
let preLoad = document.querySelectorAll('.pre-load');
let header = document.querySelector('header')

const runScripts = () => {
  pageName = document.querySelector('[data-barba=container]');

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


  const initScripts = () => {
    if (pageName.classList.contains('home')) {
      // postAnimations();
    }
  };
};


const moreAnchors = () => {
  let cursor = document.querySelector('.cursor');
  let newAnchors = Array.prototype.slice.call(document.querySelectorAll('.anchors'));
  let newA = Array.prototype.slice.call(document.querySelectorAll('a'));
  anchors = allAnchors.concat(newAnchors);
  anchors = allAnchors.concat(newA);

  const hoverCursor = () => {
    console.log('move!');
    cursor.classList.add('is-hover');
  };

  const removeHoverCursor = () => {
    cursor.classList.remove('is-hover');
    cursor.classList.remove('is-shop');
    cursor.classList.remove('add-cart');
  };

  anchors.forEach((anchor) => {
    anchor.addEventListener('mouseover', () => {
      if (anchor.classList.contains('is-shoppable')) {
        cursor.classList.add('is-shop');
      } else if (anchor.classList.contains('single_add_to_cart_button')) {
        cursor.classList.add('add-cart');
      } else {
        hoverCursor();
      }
    });
  });

  anchors.forEach((anchor) => {
    anchor.addEventListener('mouseleave', () => {
      removeHoverCursor();
    });
  });
};


const instagram = () => {
  let fields = 'id,username, media_type, media_url, timestamp, permalink, comments'

  const accessToken = 'IGQVJVV2haaUV3dHJLV3FEVXRIa2VTRTZAVMWtpblp5RnlmLTFLam1KX1dQQ01raUw2a251QVprSWJybmw4b3d0b2taMG0zUzZAIZA0puOXVjaUFzaEpmWk1ydFB3b2I0VU4wang5THNMaVBqLTZA6cUhubAZDZD';


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
          if (post.media_type === "VIDEO") {
            sectionTag.innerHTML =
              sectionTag.innerHTML +
              `<div class="flex flex-column">
            <a rel="noreferrer noopener" class="relative w-100" target="_blank" href="${post.permalink}">
            <video preload="true" autoplay="true" muted="true" loop="true" src="${post.media_url}"></video>
            </a>
          </div>`;
          } else {
            sectionTag.innerHTML =
              sectionTag.innerHTML +
              `<div class="flex flex-column">
                <a class="relative w-100" target="_blank" href="${post.permalink}">
              <div class='absolute-cover cover no-repeat bg-center' style='background-image: url("${post.media_url}")'></div>
              </a>
            </div>
          `;
          }
        });

        setTimeout(() => {
          let width = document.querySelector('.instagram-feed div a').clientWidth;
          document.querySelectorAll('.instagram-feed div a').forEach((post) => {
            post.style.height = width + 'px';
          });

          document.querySelectorAll('.instagram-feed div video').forEach((post) => {
            post.style.height = width + 'px';
          });

        }, 1000);
        window.addEventListener('resize', () => {
          width = document.querySelector('.instagram-feed div a').clientWidth;
          console.log(width);
          document.querySelectorAll('.instagram-feed div a').forEach((post) => {
            post.style.height = width + 'px';
          });

          document.querySelectorAll('.instagram-feed div video').forEach((post) => {
            post.style.height = width + 'px';
          });

        });
      });
  }
  getGram()
};

// instagram();


barba.init({
  timeout: 5000,
  prevent: ({ el }) => el.classList.contains('barba-prevent'),
  transitions: [
    {
      leave({ current, next, trigger }) {
        menuTL.reverse();
        setTimeout(() => {
          // menu.classList.add('o-0');
          // menu.classList.add('pointers-none');
        }, 1200);

        return new Promise((resolve) => {
          const timeline = gsap.timeline({
            defaults: {
              ease: Expo.easeOut,
            },
            onComplete() {
              current.container.remove();
              resolve();
            },
          });
          timeline
          // .call(() => {
          //   preLoad[0].classList.add('animate');
          // })
          // .set(preLoad, { x: '100%', opacity: '1' })
          // .to(current.container, { opacity: 0.6, x: '-10%', duration: 2 }, 0)
          // .to(preLoad[0], { x: '0%', ease: Power4.easeOut, duration: 1.5 }, 0);
        });
      },
      enter({ current, next, trigger }) {
        return new Promise((resolve) => {
          window.scrollTo({
            top: 0,
          });
          runScripts();
          const timeline = gsap.timeline({
            onComplete() {
              resolve();
            },
            defaults: {
              duration: 2,
              ease: Expo.easeOut,
            },
          });

          timeline
          // .call(() => {
          //   preLoad[0].classList.remove('animate');
          // })
          // .set(next.container, { opacity: 0, x: '10%' })
          // .to(preLoad, { x: '-100%', opacity: 1, duration: 2.3 }, 0)
          // .to(next.container, { opacity: 1, x: '0' }, 0.5);
        });
      },
    },

  ],
  views: [
    {
      namespace: 'home',
      afterEnter(data) {
      },
    },
  ],
  debug: true,
});

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

