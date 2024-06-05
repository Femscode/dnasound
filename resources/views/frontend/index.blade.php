<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DNA Sound Studio</title>
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="st/redirect51fc.html" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/logo/png/logo1.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/logo/png/logo1.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logo/png/logo1.png" />
  <link rel="mask-icon" color="#000000" href="st/redirectf02d.html" />
  <link rel="preload" as="image" href="/assets/images/logo/png/logo5.png" />
  <script async crossorigin="anonymous" fetchpriority="high"
    src="https://consent.trustarc.com/notice?domain=DNASOUND STUDIO.com&amp;c=teconsent&amp;gtm=1&amp;js=nj&amp;noticeType=bb&amp;language=en&amp;language=true&amp;text=true&amp;cookieLink=https%3A%2F%2Fwww.DNASOUND STUDIO.com%2Fcookiespolicy%2F&amp;privacypolicylink=https%3A%2F%2Fwww.DNASOUND STUDIO.com%2Fsecurityprivacy%2F">
  </script>
  <script defer crossorigin="anonymous" src="https://www.googletagmanager.com/gtag/js?id=AW-792870594"
    data-hid="92ebc66"></script>
  <script defer crossorigin="anonymous" data-hid="702b59c">
    ;(function (w, d, s, l, i) {
        w[l] = w[l] || []
        w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' })
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : ''
        j.async = true
        j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl
        f.parentNode.insertBefore(j, f)
      })(window, document, 'script', 'dataLayer', 'GTM-NV4Z79H')
  </script>
 <style>
  .pricing-container {
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    width: 100%;
    /* max-width: 600px; */
    padding: 10px 10px;
    text-align: center;
    color: #333;
    font-family: 'Helvetica', sans-serif;
  }

  .toggle-buttons {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
  }

  .toggle-buttons button {
    background-color: #ddd;
    border: none;
    padding: 12px 25px;
    cursor: pointer;
    font-size: 18px;
    margin: 0 15px;
    border-radius: 25px;
    transition: all 0.3s ease;
  }

  .toggle-buttons button.active {
    background-color: #f25621;
  
    color: #fff;
    box-shadow: 0 4px 15px rgba(127, 50, 205, 0.4);
    transform: translateY(-2px);
  }

  .toggle-buttons button:hover {
    background-color: #f25621;
    color: #fff;
  }

  .pricing-content>div {
    display: none;
  }

  .pricing-content>div.active {
    display: block;
    animation: fadeIn 0.5s ease-in-out;
  }


  ul {
    list-style-type: none;
    padding: 0;
  }

  ul li {
    /* background-color: #f7f7f7; */
    /* background-color: #ffedd5; */
    padding: 15px;
    margin: 10px 0;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    font-size: 18px;
    color: #333;
    text-align: left;
    transition: background-color 0.3s ease;
  }

  ul li:hover {
    background-color: #ffedd5;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>
  <style>
    .stylish-button {
      background: linear-gradient(135deg, black, black);
      border: none;
      border-radius: 10px;
      color: white;
      padding: 12px 12px;
      font-size: 12px;
      font-weight: bold;
      text-transform: uppercase;
      cursor: pointer;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      margin: 3px;
    }

    .stylish-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .stylish-button:active {
      transform: translateY(-1px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }


    .card {
      position: relative;
      width: 200px;
      height: 150px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .card2 {
      position: relative;

      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .card-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: opacity 0.3s ease;
    }

    .card-text {
      position: absolute;
      bottom: 15px;
      right: 15px;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 10px 15px;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      z-index: 2;
    }

    .play-button-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transition: opacity 0.3s ease;
      z-index: 1;
    }

    .play-button {
      width: 60px;
      height: 60px;
      background: rgba(255, 255, 255, 0.9);
      clip-path: polygon(20% 15%, 20% 85%, 80% 50%);
    }

    .card:hover .play-button-overlay {
      opacity: 1;
    }

    .card:hover .card-image {
      opacity: 0.7;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card2:hover .play-button-overlay {
      opacity: 1;
    }

    .card2:hover .card-image {
      opacity: 0.7;
    }

    .card2:hover {
      transform: scale(1.05);
    }
  </style>

  <meta property="og:title" content="DNA SOUND STUDIO - Best Producers, best artists" />
  <meta name="description" content="DNA SOUND STUDIO - Best Producers, best artists." />
  <meta property="og:description" content="DNA SOUND STUDIO - Best Producers, best artists." />
  <meta property="og:url" content="https://dnasoundstudio.com/" />
  <link rel="stylesheet" href="nuxt/entry.aK31xSD1.css" />
  <link rel="stylesheet" href="nuxt/default.SS6f5h_a.css" />
  <link rel="stylesheet" href="nuxt/index.DNdjzEFt.css" />
  <link rel="stylesheet" href="nuxt/index.CtGoCJL-.css" />
  <link rel="stylesheet" href="nuxt/index.wFfhbt4n.css" />
  <link rel="stylesheet" href="nuxt/index.DjjqfaTE.css" />
  <link rel="stylesheet" href="nuxt/index.CpT9GHP4.css" />
  <link rel="stylesheet" href="nuxt/index.CUl9eyx2.css" />
  <link rel="stylesheet" href="nuxt/index.ZxTs6Mmt.css" />
  <link rel="stylesheet" href="nuxt/index.DPP3Crns.css" />
  <link rel="stylesheet" href="nuxt/index.-xexNBKv.css" />
  <link rel="stylesheet" href="nuxt/index.DpA9yUHJ.css" />
  <link rel="stylesheet" href="nuxt/index.CZpYjG7I.css" />
  <link rel="stylesheet" href="nuxt/index.DfEmY3Sg.css" />
  <link rel="stylesheet" href="nuxt/index.CWYdxVlA.css" />
  <link rel="stylesheet" href="nuxt/constants.D6B2K6-n.css" />
  <link rel="stylesheet" href="nuxt/index.BB-cmiRb.css" />
  <link rel="prefetch" as="style" href="nuxt/index.DO1CN0vh.css" />
  <link rel="prefetch" as="script" crossorigin href="nuxt/CKbMD8QS.js" />
  <link rel="prefetch" as="image" type="image/svg+xml" href="nuxt/get-the-app-qr.CHbn3ZX2.svg" />
  <script type="module" src="nuxt/UKZ54GTt.js" crossorigin></script>
</head>

<body>
  <div id="_nuxt">
    <div>
      <div id="--wds-setup" data-v-842ec686></div>
      <div class="container" data-v-4bbdb0e5>
        <main data-v-4bbdb0e5>
          <!--[-->
          <!--[-->
          <header class="homepage-header" data-v-b9699ad0>
            <!--[-->
            <nav class="extra-content homepage-navbar" data-v-b1bf6ef2 data-v-c835270e>
              <div class="nav-hw-brand" data-v-c835270e>
                <a aria-current="page" href="index.html" class="router-link-active router-link-exact-active"
                  rel="noopener" aria-label="DNASOUND STUDIO.com" data-testid="hw-brand-link" data-v-c835270e><img
                    width="203" height="45" title="DNASOUND STUDIO.com" alt="DNASOUND STUDIO.com"
                    aria-label="DNASOUND STUDIO.com" loading="eager" src="/assets/images/logo/png/logo5.png"
                    data-v-c835270e /></a>
              </div>

              <div class="nav-buttons-wrapper" data-v-c835270e>
                <div class="nav-button login-menu" data-v-c835270e>

                  <button class="stylish-button">Login</button>
                  <button class="stylish-button">Register</button>
                </div>

              </div>
            </nav>
            <div class="hero-container homepage-hero" data-v-b1bf6ef2 data-v-fd6f8bdd>
              <div class="hero-image" data-v-fd6f8bdd>
                <div class="hero-headline" data-v-fd6f8bdd>
                  <h4 class="hero-headline-title" data-v-fd6f8bdd>
                    <span style='background:#f25621'>Disc</span>over Your Perfect B<span
                      style='background:#f25621'>eat!</span>
                    {{-- Welcome to DNA Sound Studio. --}}
                  </h4>
                  <span class="hero-headline-subtitle" data-v-fd6f8bdd>Connecting Music Stars, Producers, and
                    Artists.</span><img class="hero-headline-arrow"
                    src="https://a.hwstatic.com/image/upload/f_auto,q_auto/pwa/arrow.svg" alt="Start searching arrow"
                    loading="lazy" width="170" height="69" data-v-fd6f8bdd />
                </div>
                <div class="hero-social-chat" data-v-fd6f8bdd>
                  <img style='border-radius:12px' class="social-chat-avatars rounded" src="/assets/images/ig2.jpg"
                    alt="Users avatars" loading="lazy" width="300" height="150" data-v-fd6f8bdd />
                </div>
              </div>
              <div class="hero-search-container" data-v-fd6f8bdd>
                <div class="hero-search-bar" data-v-fd6f8bdd>
                  <!--[-->
                  <div class="inline-wrapper hp-search-form-desktop" data-v-6a6505cf data-v-1d4b7824>
                    <div class="inline-form large" data-v-6a6505cf>
                      <div class="destination-container" data-v-6a6505cf>
                        <div class="input input-strip" data-v-6ca93fbe data-v-6a6505cf>
                          <div class="input-inner with-prefix with-label" data-v-6ca93fbe>
                            <div class="input-prefix" data-v-6ca93fbe>
                              <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                  <use xlinkHref="#location-pin" href="#location-pin" data-v-01502a85></use>
                                </svg>
                              </div>
                            </div>
                            <div class="input-wrapper" data-v-6ca93fbe>
                              <input class="native-input" type="text" value spellcheck="false" data-v-6ca93fbe /><label
                                class="input-label" data-v-6ca93fbe>Looking for a beat or producer, search it
                                here?</label>
                            </div>
                            <!---->
                          </div>
                          <!---->
                        </div>
                        <!---->
                      </div>
                      <div class="v-divider" data-v-6a6505cf></div>
                      <div class="dates" tabindex="0" data-v-6a6505cf>
                        <div class="checkin-checkout" data-v-6a6505cf>
                          <div class="input input-readonly input-strip" data-v-6ca93fbe data-v-6a6505cf>
                            <div class="input-inner with-prefix with-label" data-v-6ca93fbe>
                              <div class="input-prefix" data-v-6ca93fbe>
                                <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                    <use xlinkHref="#calendar-check-in" href="#calendar-check-in" data-v-01502a85></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="input-wrapper" data-v-6ca93fbe>
                                <input class="native-input" readonly type="text" value="2,000" spellcheck="false"
                                  data-v-6ca93fbe /><label class="input-label input-label-filled" data-v-6ca93fbe>Total
                                  Beats</label>
                              </div>
                              <!---->
                            </div>
                            <!---->
                          </div>
                          <div class="v-divider" data-v-6a6505cf></div>
                          <div class="input input-readonly input-strip" data-v-6ca93fbe data-v-6a6505cf>
                            <div class="input-inner with-prefix with-label" data-v-6ca93fbe>
                              <div class="input-prefix" data-v-6ca93fbe>
                                <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                    <use xlinkHref="#calendar-check-out" href="#calendar-check-out" data-v-01502a85>
                                    </use>
                                  </svg>
                                </div>
                              </div>
                              <div class="input-wrapper" data-v-6ca93fbe>
                                <input class="native-input" readonly type="text" value="4,500" spellcheck="false"
                                  data-v-6ca93fbe /><label class="input-label input-label-filled" data-v-6ca93fbe>Total
                                  Producers</label>
                              </div>
                              <!---->
                            </div>
                            <!---->
                          </div>
                        </div>
                        <div class="dates-small" data-v-6a6505cf>
                          <div class="input input-readonly input-strip" data-v-6ca93fbe data-v-6a6505cf>
                            <div class="input-inner with-prefix with-label" data-v-6ca93fbe>
                              <div class="input-prefix" data-v-6ca93fbe>
                                <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                    <use xlinkHref="#calendar" href="#calendar" data-v-01502a85></use>
                                  </svg>
                                </div>  
                              </div>
                              <div class="input-wrapper" data-v-6ca93fbe>
                                <input class="native-input" readonly type="text" value="9 May - 12 May"
                                  spellcheck="false" data-v-6ca93fbe /><label class="input-label input-label-filled"
                                  data-v-6ca93fbe>Dates</label>
                              </div>
                              <!---->
                            </div>
                            <!---->
                          </div>
                        </div>
                        <!---->
                      </div>
                      <div class="v-divider" data-v-6a6505cf></div>
                      <div class="guests-submit-wrapper" data-v-6a6505cf>

                        <button class="medium-button btn-content icon-only" type="button" data-v-74f29db0
                          data-v-6a6505cf>
                          <!--[-->
                          <!---->
                          <!---->
                          <div class="icon-container" style="" data-v-01502a85 data-v-74f29db0>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                              <use xlinkHref="#search" href="#search" data-v-01502a85></use>
                            </svg>
                          </div>
                          <!--]-->
                        </button><button class="large-button btn-content" type="button" data-v-74f29db0 data-v-6a6505cf>
                          <!--[-->
                          <!----><span class="text" data-v-74f29db0>Let&#39;s go!</span>
                          <div class="icon-container icon-end" style="" data-v-01502a85 data-v-74f29db0>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                              <use xlinkHref="#arrow-right" href="#arrow-right" data-v-01502a85></use>
                            </svg>
                          </div>
                          <!--]-->
                        </button>
                        <!---->
                      </div>
                    </div>
                    <!---->
                  </div>
                  <div class="standalone-wrapper destination hp-search-form-mobile" data-v-501d3347 data-v-1d4b7824>
                    <div class="destination-container field" data-v-501d3347>
                      <div class="input input-readonly input-strip" data-v-6ca93fbe data-v-501d3347>
                        <div class="input-inner with-prefix with-suffix with-label" data-v-6ca93fbe>
                          <div class="input-prefix" data-v-6ca93fbe>
                            <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                              <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                <use xlinkHref="#location-pin" href="#location-pin" data-v-01502a85></use>
                              </svg>
                            </div>
                          </div>
                          <div class="input-wrapper" data-v-6ca93fbe>
                            <input class="input-standalone native-input" readonly type="text" value spellcheck="false"
                              data-v-6ca93fbe /><label class="input-label" data-v-6ca93fbe>Looking for a beat or
                              producer?</label>
                          </div>
                          <div class="input-suffix" data-v-6ca93fbe>
                            <!---->
                            <!--[--><button class="submit-button btn-content icon-only" type="button" data-v-74f29db0
                              data-v-501d3347>
                              <!--[-->
                              <div class="icon-container" style="" data-v-01502a85 data-v-74f29db0>
                                →
                               
                              </div>
                              <!---->
                              <!---->
                              <!--]-->
                            </button>
                            <!--]-->
                          </div>
                        </div>
                        <!---->
                      </div>
                    </div>
                  </div>
                  <div class="search-form-wizard-wrapper" data-v-42f760f2 data-v-1d4b7824>
                    <div class="sheet-overlay" style="display: none" data-v-54a3cdc8 data-v-42f760f2>
                      <div class="sheet-container" style="height: 99%; display: none" data-v-54a3cdc8 data-v-54a3cdc8>
                        <!---->
                        <!----><button class="heading-button-icon close btn-content icon-only" type="button"
                          data-v-05ef0110 data-v-54a3cdc8>
                          <div class="icon-container" style="" data-v-01502a85 data-v-05ef0110>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                              <use xlinkHref="#close" href="#close" data-v-01502a85></use>
                            </svg>
                          </div>
                          <!---->
                          <!---->
                        </button>
                    
                      </div>
                    </div>
                  </div>
                  <!--]-->
                </div>
               
              </div>
            </div>
            <!--]-->
          </header>
          <section class="homepage-section no-spacing" data-v-b9699ad0>
            <!---->
            <!---->
          </section>
          <section class="features-carousel-section homepage-section" data-v-b9699ad0 data-v-5cefa5c1>
            <div class="card sunset card-small card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Connect With Talents</h2>
                <p data-v-e68c4228>Get the best talents here!</p>
              </div>
              <img alt="Music Talents" src="/assets/images/bn1.jpg" width="143" height="230" loading="lazy"
                data-v-e68c4228 />
            </div>
            <div class="card sunset card-large card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Connect With Talents</h2>
                <p data-v-e68c4228>Bridging the gap between you and the talent you need!</p>
              </div>
              <img style='border-top-left-radius:10px;border-top-right-radius:10px' alt="Connect With Producers"
                src="/assets/images/bn1.jpg" width="241" height="382" loading="lazy" data-v-e68c4228 />
            </div>
            <div class="card teal card-small card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Top Beats In Every Genre</h2>
                <p data-v-e68c4228>
                  Get the hottest beat in every genre.
                </p>
              </div>
              <img alt="Get Beat&#39;s Chat" src="/assets/images/bn2.jpg" width="143" height="230"
                loading="lazy" data-v-e68c4228 />
            </div>
            <div class="card teal card-large card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Top Beats In Every Genre</h2>
                <p data-v-e68c4228>
                  Get the hottest beat in every genre.
                </p>
              </div>
              <img style='border-top-left-radius:10px;border-top-right-radius:10px' alt="Get Beat&#39;s Chat"
                src="/assets/images/bn2.jpg" width="241" height="382" loading="lazy" data-v-e68c4228 />
            </div>
            <div class="card inverted blue card-small card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Boost Your Music Career.</h2>
                <p data-v-e68c4228>Your career is about to go BIG!.</p>
              </div>
              <img alt="RSVP to Linkups" src="/assets/images/bn3.jpg" width="143" height="230" loading="lazy"
                data-v-e68c4228 />
            </div>
            <div class="card inverted blue card-large card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Boost Your Music Career</h2>
                <p data-v-e68c4228>Your career is about to go BIG!</p>
              </div>
              <img style='border-bottom-left-radius:10px;border-bottom-right-radius:10px' alt="RSVP to Linkups"
                src="/assets/images/bn3.jpg" width="241" height="382" loading="lazy" data-v-e68c4228 />
            </div>
          </section>

          <section class="tips-and-adventures-section" style='background:black' data-v-b9699ad0 data-v-0fd099b2>

            <div class="header" data-v-0fd099b2>
              <span class="title" data-v-0fd099b2 style='color:white'>Top Producers</span>
              {{-- <p class="sub-title" data-v-0fd099b2>
                Don&#39;t miss our backpacker blog, penned by travel experts
                to assist your adventures!
              </p> --}}
            </div>
            <div class="cards-carousel" data-v-0fd099b2>



              <!--[--><a target="_blank" href="#" rel="noopener noreferrer" title="DON Jazzy Beats" data-v-0fd099b2
                data-v-41fb6fcd>

                <div class="card">
                  <img src="/assets/images/donjazzy.webp" alt="Card Image" class="card-image">
                  <div class="card-text">Don Jazzy</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>
              </a><a target="_blank" href="#" rel="noopener noreferrer" title="Connect With Artist"
                data-v-0fd099b2 data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/djneptune.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">DJ Neptune</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>

              </a><a target="_blank" href="#"
                rel="noopener noreferrer" title="Connect With Producers" data-v-0fd099b2
                data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/djy.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">DJ YK</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>

              </a><a target="_blank" href="#"
                rel="noopener noreferrer" title="Connect With Producers" data-v-0fd099b2 data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/ds2.jpg" alt="Card Image" class="card-image">
                  <div class="card-text">CLASSICAL REMA</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>

              </a><a target="_blank" href="#"
                rel="noopener noreferrer" title="Connect With Producers" data-v-0fd099b2
                data-v-41fb6fcd>

                <div class="card">
                  <img src="/assets/images/pheez.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">Pheez</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>


              </a><a target="_blank" href="#"
                rel="noopener noreferrer" title="Connect With Producers" data-v-0fd099b2 data-v-41fb6fcd>

                <div class="card">
                  <img src="/assets/images/masterkraft.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">MASTER Kraft</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>


              </a><a target="_blank" href="#"
                rel="noopener noreferrer" title="Connect With Producers" data-v-0fd099b2
                data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/sarz.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">SARZ</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>


              </a><a target="_blank" href="#"
                rel="noopener noreferrer" title="Connect With Producers" data-v-0fd099b2
                data-v-41fb6fcd>

                <div class="card">
                  <img src="/assets/images/rexxie.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">Rexxie</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>

              </a>
              <!--]-->
            </div>
            <div class="carousel-footer" data-v-0fd099b2>
              <a title="Read our blog" href="#" rel="noopener" target="_blank"
                class="btn-content" data-v-05ef0110 data-v-0fd099b2>
                <!----><span style='color:white' class="text" data-v-05ef0110>View more</span>
                <div class="icon-container icon-end" style="" data-v-01502a85 data-v-05ef0110>
                  <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                    <use xlinkHref="#chevron-right" href="#chevron-right" data-v-01502a85></use>
                  </svg>
                </div>
              </a>
            </div>
          </section>
          <section class="connect-with-travellers-section homepage-section" data-v-b9699ad0 data-v-ac7e90e5>
            <div id="cwt-section" class="cwt-section-content" data-v-ac7e90e5>

              <div class="text-content" data-v-ac7e90e5>
                <p class="text-preheader" data-v-ac7e90e5>
                  This is the <span style='color:#f25621'>DNASOUND</span> STUDIO.
                </p>
                <h2 class="text-header" data-v-ac7e90e5>
                  Helping you <span style='color:#f25621'>connect with great</span>
                  producers.
                </h2>
                {{-- <button class="cta yellow" data-v-ac7e90e5>
                  Check our latest beat
                  <div class="icon-container button-icon" style="" data-v-01502a85 data-v-ac7e90e5>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#arrow-down" href="#arrow-down" data-v-01502a85></use>
                    </svg>
                  </div>
                </button> --}}
              </div>

              <img src="/assets/images/producer2c.jpg" style='border-radius:20px;margin-top:15px' loading="lazy"
                alt="Connect with artist" height="568" width="504" data-v-ac7e90e5 />
            </div>
          </section>
          <section id="swis-section" class="swis-section-wrapper" data-v-b9699ad0 data-v-3806af8f>
            <div class="animation-container" data-v-3806af8f>
              <img srcset="
              /assets/images/ds3.jpg 2x,
              /assets/images/ds3.jpg    1x
                  " src="/assets/images/ds3.jpg" alt="Popular Producers" class="card" loading="lazy" width="289"
                height="328" data-v-3806af8f />
              <div data-v-3806af8f>
                <div class="avatar-usa aqua avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/donjazzy.webp" class="avatar-img" loading="lazy" width="72" height="72"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 2px; right: 2px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>

                <div class="avatar-ireland blue avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/djy.jpeg" class="avatar-img" loading="lazy" width="108" height="108"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 4px; right: 4px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-brazil blue avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/ds2.jpg" class="avatar-img" loading="lazy" width="162" height="162"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 14px; right: 14px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-germany violet avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/pheez.jpeg" class="avatar-img" loading="lazy" width="120" height="120"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 8px; right: 8px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-portugal yellow avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/masterkraft.jpeg" class="avatar-img" loading="lazy" width="72" height="72"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 0px; right: 0px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-italy orange avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/sarz.jpeg" class="avatar-img" loading="lazy" width="80" height="80"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 0px; right: 0px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-china orange avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/rexxie.jpeg" class="avatar-img" loading="lazy" width="156" height="156"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 18px; right: 18px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-france pink avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/ds2.jpg" class="avatar-img" loading="lazy" width="80" height="80"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 0px; right: 0px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-korea pink avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/rexxie.jpeg" class="avatar-img" loading="lazy" width="128" height="128"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 8px; right: 8px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div class="avatar-spain aqua avatar" data-v-3806af8f data-v-499b5e45>
                  <img src="/assets/images/pheez.jpeg" class="avatar-img" loading="lazy" width="96" height="96"
                    alt="avatar" data-v-499b5e45 /><img src="/assets/images/nigeriaflag1.png" class="flag"
                    loading="lazy" width="24" height="24" style="bottom: 0px; right: 0px" alt="avatar flag"
                    data-v-499b5e45 />
                </div>
                <div style="width: 12px; height: 12px; background-color: inherit" class="dot-1 pink dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 12px; height: 12px; background-color: inherit" class="dot-2 violet dot"
                  data-v-3806af8f data-v-ce95cb78></div>
                <div style="width: 10px; height: 10px; background-color: " class="dot-3 green dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 10px; height: 10px; background-color: " class="dot-4 pink dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 20px; height: 20px; background-color: " class="dot-5 orange dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 20px; height: 20px; background-color: " class="dot-6 red dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 16px; height: 16px; background-color: inherit" class="dot-7 aqua dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 16px; height: 16px; background-color: " class="dot-8 aqua dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 16px; height: 16px; background-color: inherit" class="dot-9 violet dot"
                  data-v-3806af8f data-v-ce95cb78></div>
                <div style="width: 16px; height: 16px; background-color: " class="dot-10 yellow dot" data-v-3806af8f
                  data-v-ce95cb78></div>
                <div style="width: 18px; height: 18px; background-color: " class="dot-11 yellow dot" data-v-3806af8f
                  data-v-ce95cb78></div>
              </div>
            </div>
            <div class="text" data-v-3806af8f>
              <h2 class="text-header" data-v-3806af8f>
                See <span>who's</span> trending.
              </h2>
              <p class="text-body" data-v-3806af8f>
                Connect with other artist and producer to stay updated.
              </p>
            </div>
          </section>

          <section class="connect-with-travellers-section homepage-section" data-v-b9699ad0 data-v-ac7e90e5>
            <div id="cwt-section" class="cwt-section-content" data-v-ac7e90e5>

              <div class="text-content" data-v-ac7e90e5>
              
                <div class="pricing-container">
                  <div class="toggle-buttons">
                    <button id="freemium-btn" class="active">Freemium</button>
                    <button id="premium-btn">Premium</button>
                  </div>
                  <div class="pricing-content">
                    <div id="freemium-content" class="active">
                      {{-- <h2>Freemium Package</h2> --}}
                      <ul>
                        <li>✔️100MB cloud storage</li>
                        <li>✔️Limited beat sales and collaboration features</li>
                        <li>✔️Community forum access</li>
                        <li>✔️Licensing rules with 30% platform fee</li>
                        <li>✔️Basic profile without social media links</li>
                        <li>✔️Earn coins for referrals and sales</li>
                        <li>✔️Ad-supported</li>
                      </ul>
                    </div>
                    <div id="premium-content">
                      {{-- <h2>Premium Package</h2> --}}
                      <ul>
                        <li>✔️Increased storage space</li>
                        <li>✔️Advanced beat sales options</li>
                        <li>✔️No ads</li>
                        <li>✔️Higher audio quality (up to 320 kbps)</li>
                        <li>✔️Social media links and verification tick</li>
                        <li>✔️Priority customer support</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <img src="/assets/images/ds4.jpg" style='border-radius:20px;margin-top:20px' loading="lazy"
                alt="Connect with artist" height="568" width="504" data-v-ac7e90e5 />
            </div>
          </section>


          <section class="say-hello-section homepage-section double-spacing" data-v-b9699ad0 data-v-fa8556b3>
            <div class="say-hello-wrapper" data-v-fa8556b3>
             


            </div>
          </section>

          <!--[-->
          <section class="roamies-section-wrapper" data-v-b9699ad0 data-v-74b15b82>
            <div class="text" data-v-74b15b82>
              {{-- <img loading="lazy" width="169" height="40" src="/assets/images/ds3.jpg" alt="DNASOUND STUDIO"
                class="text-logo text-desktop" data-v-74b15b82 /><img loading="lazy" width="135" height="32"
                src="/assets/images/ds3.jpg" alt="Roamies - DNASOUND STUDIO" class="text-logo text-mobile"
                data-v-74b15b82 /> --}}
              <h2 class="text-header" data-v-74b15b82>
                <span>Start with DNASOUND</span> studio today.
              </h2>
              <p class="text-body" data-v-74b15b82>
                Explore somewhere new, with a ready-made beat! Adventurous
                producers, that will take you there.
              </p>
              <a href="#" rel="noopener" target="_blank" class="text-button"
                data-v-74b15b82>Show Me</a>
            </div>
            <div class="mosaic" data-v-74b15b82>
              <div class="mosaic-first-column" data-v-74b15b82>
                <!--[-->
                <!--[--><img loading="lazy" width="355" height="260" class="first-image mosaic-image desktop-image"
                  src="/assets/images/ds1.jpg" alt="Connect With Artist" data-v-74b15b82 /><img loading="lazy" width="172"
                  height="150" class="first-image mosaic-image mobile-image" src="/assets/images/ds1.jpg"
                  alt="Connect With Artist" data-v-74b15b82 />
                <!--]-->
                <!--[--><img loading="lazy" width="170" height="170" class="last-image mosaic-image desktop-image"
                  src="/assets/images/ds2.jpg" alt="Connect With Artist 2" data-v-74b15b82 /><img loading="lazy" width="120"
                  height="150" class="last-image mosaic-image mobile-image" src="/assets/images/ds2.jpg"
                  alt="Connect With Artist 2" data-v-74b15b82 />
                <!--]-->
                <!--]-->
              </div>
              <div class="mosaic-second-column" data-v-74b15b82>
                <!--[-->
                <!--[--><img loading="lazy" width="287" height="302" class="first-image mosaic-image desktop-image"
                  src="/assets/images/ds3.jpg" alt="Connect With Artist" data-v-74b15b82 /><img loading="lazy" width="135"
                  height="173" class="first-image mosaic-image mobile-image" src="/assets/images/ds3.jpg"
                  alt="Connect With Artist" data-v-74b15b82 />
                <!--]-->
                <!--[--><img loading="lazy" width="393" height="292" class="last-image mosaic-image desktop-image"
                  src="/assets/images/ds4.jpg" alt="Connect With Artist 2" data-v-74b15b82 /><img loading="lazy" width="180"
                  height="181" class="last-image mosaic-image mobile-image" src="/assets/images/ds4.jpg"
                  alt="Connect With Artist 2" data-v-74b15b82 />
                <!--]-->
                <!--]-->
              </div>
            </div>
          </section>
          <!--]-->
          <section class="hc-section-wrapper" data-v-045d4a77="" data-v-a48fefb1="">
            <div data-v-a48fefb1="" class="cards-mobile-container">
              <div data-v-a48fefb1="" class="row first-row">
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link"><img data-v-2622d77b=""
                    src="/assets/images/prod1.jpg" alt="Oxlade" title="Oxlade" width="276" height="245" class="asset"
                    loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Oxlade
                      Jagun</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Nigeria</span>, <span data-v-2622d77b="">Ondo</span></span></div>
                </div>

                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod2.jpg" alt="Oxlade" title="Oxlade" width="276"
                    height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Justin
                      Bieber</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">USA</span>, <span data-v-2622d77b="">Washington D.C</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true">
                  <img data-v-2622d77b="" src="/assets/images/prod3.jpg" alt="DJ Samptous" title="DJ Samptous"
                    width="276" height="245" class="asset" loading="lazy">

                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Amapiano
                    </span><span data-v-2622d77b="" class="location body-3-reg"><span data-v-2622d77b="">South
                        Africa</span>, <span data-v-2622d77b="">Cape Town</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod1.jpg" alt="Dauda" title="Dauda" width="276" height="245"
                    class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Salty
                      Bernald</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Netherland</span>, <span data-v-2622d77b="">Namibia</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true">
                  <img data-v-2622d77b="" src="/assets/images/prod2.jpg" alt="DJ Samptous" title="DJ Samptous"
                    width="276" height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">
                      Simisola</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Nigeria</span>, <span data-v-2622d77b="">Ogun State</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod2.jpg" alt="Oxlade" title="Oxlade" width="276"
                    height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Justin
                      Bieber</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">USA</span>, <span data-v-2622d77b="">Washington D.C</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true">
                  <img data-v-2622d77b="" src="/assets/images/prod3.jpg" alt="DJ Samptous" title="DJ Samptous"
                    width="276" height="245" class="asset" loading="lazy">

                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Amapiano
                    </span><span data-v-2622d77b="" class="location body-3-reg"><span data-v-2622d77b="">South
                        Africa</span>, <span data-v-2622d77b="">Cape Town</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod1.jpg" alt="Dauda" title="Dauda" width="276" height="245"
                    class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Salty
                      Bernald</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Netherland</span>, <span data-v-2622d77b="">Namibia</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true">
                  <img data-v-2622d77b="" src="/assets/images/prod2.jpg" alt="DJ Samptous" title="DJ Samptous"
                    width="276" height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">
                      Simisola</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Nigeria</span>, <span data-v-2622d77b="">Ogun State</span></span></div>
                </div>
              </div>
              <div data-v-a48fefb1="" class="row second-row">
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link"><img data-v-2622d77b=""
                    src="/assets/images/prod3.jpg" alt="DJ Samptous" title="DJ Samptous" width="276" height="245"
                    class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">DJ
                      Samptos</span><span data-v-2622d77b="" class="location body-3-reg"><span data-v-2622d77b="">Cote
                        Divore</span>, <span data-v-2622d77b="">Jamaica</span></span></div>
                </div>

                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod2.jpg" alt="Young Fela" title="Young Fela" width="276"
                    height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">
                      Young Fela</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Nigeria</span>, <span data-v-2622d77b="">Lagos</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true">
                  <img src="/assets/images/prod3.jpg" width="672" height="488" loading="lazy" alt="Young Fela"
                    title="Young Fela" data-v-f9b5f01c />

                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">
                      Taye Mattew</span><span data-v-2622d77b="" class="location body-3-reg"><span data-v-2622d77b="">
                        Osun</span>, <span data-v-2622d77b="">Oshogbo</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod1.jpg" alt="Taye Mattew" title="Taye Mattew" width="276"
                    height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Baala
                      Hottie</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Gbana</span>, <span data-v-2622d77b="">Kuru</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link"><img data-v-2622d77b=""
                    src="/assets/images/prod3.jpg" alt="DJ Samptous" title="DJ Samptous" width="276" height="245"
                    class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">DJ
                      Samptos</span><span data-v-2622d77b="" class="location body-3-reg"><span data-v-2622d77b="">Cote
                        Divore</span>, <span data-v-2622d77b="">Jamaica</span></span></div>
                </div>

                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod2.jpg" alt="Young Fela" title="Young Fela" width="276"
                    height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">
                      Young Fela</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Nigeria</span>, <span data-v-2622d77b="">Lagos</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true">
                  <img src="/assets/images/prod3.jpg" width="672" height="488" loading="lazy" alt="Young Fela"
                    title="Young Fela" data-v-f9b5f01c />

                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">
                      Taye Mattew</span><span data-v-2622d77b="" class="location body-3-reg"><span data-v-2622d77b="">
                        Osun</span>, <span data-v-2622d77b="">Oshogbo</span></span></div>
                </div>
                <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link" aria-hidden="true"><img
                    data-v-2622d77b="" src="/assets/images/prod1.jpg" alt="Taye Mattew" title="Taye Mattew" width="276"
                    height="245" class="asset" loading="lazy">
                  <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Baala
                      Hottie</span><span data-v-2622d77b="" class="location body-3-reg"><span
                        data-v-2622d77b="">Gbana</span>, <span data-v-2622d77b="">Kuru</span></span></div>
                </div>
              </div>
            </div>
            <div data-v-a48fefb1="" class="cards-desktop-container animate">
              <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link">
                <img src="/assets/images/prod2.jpg" width="672" height="488" loading="lazy" alt="Young Fela"
                  title="Young Fela" data-v-f9b5f01c />

                <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Fasanya
                    Pelumi</span><span data-v-2622d77b="" class="location body-3-reg"><span
                      data-v-2622d77b="">Nigeria</span>, <span data-v-2622d77b="">Ogun State</span></span></div>
              </div>
              <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link"><img data-v-2622d77b=""
                  src="/assets/images/prod3.jpg" alt="Dauda" title="Dauda" width="276" height="245" class="asset"
                  loading="lazy">
                <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Paul
                    Dauda</span><span data-v-2622d77b="" class="location body-3-reg"><span
                      data-v-2622d77b="">Nigeria</span>, <span data-v-2622d77b="">Plateau State</span></span></div>
              </div>
              <div data-v-2622d77b="" data-v-a48fefb1="" class="card-wrapper" role="link">

                <img data-v-2622d77b="" src="/assets/images/prod2.jpg" alt="Young Fela" title="Young Fela" width="276"
                  height="245" class="asset" loading="lazy">

                <div data-v-2622d77b="" class="text"><span data-v-2622d77b="" class="place title-6-bld">Don
                    Jazzy</span><span data-v-2622d77b="" class="location body-3-reg"><span data-v-2622d77b="">Koh
                      Nigeria</span>, <span data-v-2622d77b="">Lagos</span></span></div>
              </div>
            </div>
            <div data-v-a48fefb1="" class="text animate">
              <div data-v-a48fefb1="" class="text-header">The world’s best beats, with over <span
                  style='color:#f25621'>13 million
                  testimonies</span>.</div>
              <p data-v-a48fefb1="" class="text-body">With over 16,500 beats from 180+ producers, there’s always room
                for
                a new adventure!</p>
            </div>
          </section>
          <!--]-->
          <section id="download-section" class="download-section-wrapper" data-v-b9699ad0 data-v-9b767e01>
            <div class="download-header" data-v-9b767e01>
              <img alt="Download the app now." title="Download the app now." class="logo" width="196" height="196"
                loading="lazy" src="/assets/images/logo/png/logo5.png" data-v-9b767e01 />
              <h2 class="text-header" data-v-9b767e01>
                Get started and <a href='/register'>claim</a> your free account now!
              </h2>
            </div>

          </section>
          <section class="climate-neutral-wrapper" data-v-b9699ad0 data-v-f9b5f01c>
            <div class="climate-neutral-content" data-v-f9b5f01c>
              <div class="image-container" data-v-f9b5f01c>
                <img src="/assets/images/ds3.jpg" width="672" height="488" loading="lazy" alt="Young Fela"
                  title="Young Fela" data-v-f9b5f01c />

              </div>
              <div class="text-content" data-v-f9b5f01c>
                <img title="We are commited to a better world." alt="We are commited to a better world."
                  aria-label="We are commited to a better world." loading="lazy"
                  src="https://a.hwstatic.com/raw/upload/f_auto,q_auto/wds/illustrations/lg/eco.svg"
                  class="illustration" data-v-f9b5f01c />
                <h2 class="text-header" data-v-f9b5f01c>
                  Grow your music <span>business today!</span>.
                </h2>
                <p class="text-body body-1-reg" data-v-f9b5f01c>
                  Join us in making the every beat count. We are proud to be
                  the link every producer and music artist needs.
                </p>

              </div>
            </div>
          </section>
          <div class="popular-places-container" data-v-b9699ad0 data-v-c23d3720>
            <h2 class="title title-3-bld" data-v-c23d3720>Top Beats!</h2>
            <h3 class="sub-title body-1-reg" data-v-c23d3720>
              Discover popular beats for unforgettable adventures.
            </h3>
            <div class="mosaic" data-v-c23d3720>
              <!--[-->
              <div class="mosaic-inner" data-v-c23d3720>
                <!--[--><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="city-card" data-v-c23d3720>
                    <div class="card2 city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat1.jpg" alt="London" loading="lazy" class="city-card__info-img"
                        data-v-c23d3720 /><span class="city-card__info-overlay" data-v-c23d3720><span
                          class="city-card__info-city title-5-bld" data-v-c23d3720>Don Jazzy</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>

                    <div class="city-card__social-handle" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </a><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="city-card" data-v-c23d3720>
                    <div class="card2 city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat2.jpg" alt="Berlin" loading="lazy" class="city-card__info-img"
                        data-v-c23d3720 /><span class="city-card__info-overlay" data-v-c23d3720><span
                          class="city-card__info-city title-5-bld" data-v-c23d3720>Berlin</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>
                    <div class="city-card__social-handle" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>
                <!--]-->
              </div>
              <div class="mosaic-inner" data-v-c23d3720>
                <!--[--><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="city-card" data-v-c23d3720>
                    <div class="card2 city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat3.jpg" alt="Amsterdam" loading="lazy" class="city-card__info-img"
                        data-v-c23d3720 /><span class="city-card__info-overlay" data-v-c23d3720><span
                          class="city-card__info-city title-5-bld" data-v-c23d3720>Waheed Taiwo</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>
                    <div class="city-card__social-handle" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>

                    </div>
                  </div>
                </a><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="city-card" data-v-c23d3720>
                    <div class="card2 city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat4.jpg" alt="Rome" loading="lazy" class="city-card__info-img"
                        data-v-c23d3720 /><span class="city-card__info-overlay" data-v-c23d3720><span
                          class="city-card__info-city title-5-bld" data-v-c23d3720>Jagaban</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>
                    <div class="city-card__social-handle" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>

                    </div>
                  </div>
                </a>
                <!--]-->
              </div>
              <div class="mosaic-inner" data-v-c23d3720>
                <!--[--><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="city-card" data-v-c23d3720>
                    <div class="card2 city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat1.jpg" alt="Barcelona" loading="lazy" class="city-card__info-img"
                        data-v-c23d3720 /><span class="city-card__info-overlay" data-v-c23d3720><span
                          class="city-card__info-city title-5-bld" data-v-c23d3720>Paul Jigan</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>
                    <div class="city-card__social-handle" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>

                    </div>
                  </div>
                </a><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="card2 city-card" data-v-c23d3720>
                    <div class="city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat2.jpg" alt="David Nwansoko" loading="lazy"
                        class="city-card__info-img" data-v-c23d3720 /><span class="city-card__info-overlay"
                        data-v-c23d3720><span class="city-card__info-city title-5-bld" data-v-c23d3720>David
                          Nwansoko</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>
                    <div class="city-card__social-handle" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </a>
                <!--]-->
              </div>
              <div class="mosaic-inner" data-v-c23d3720>
                <!--[--><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="city-card" data-v-c23d3720>
                    <div class="card2 city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat3.jpg" alt="Paris" loading="lazy" title="Book hostels - Paris"
                        class="city-card__info-img" data-v-c23d3720 /><span class="city-card__info-overlay"
                        title="Book hostels - Paris" data-v-c23d3720><span class="city-card__info-city title-5-bld"
                          data-v-c23d3720>Joy Mercy</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>
                    <div class="city-card__social-handle" title="Book hostels - Paris" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </a><a href="#" class="card-wrapper" data-v-c23d3720>
                  <div class="city-card" data-v-c23d3720>
                    <div class="card2 city-card__info" data-v-c23d3720>
                      <img src="/assets/images/beat4.jpg" alt="Arya Star" loading="lazy" class="city-card__info-img"
                        data-v-c23d3720 /><span class="city-card__info-overlay" data-v-c23d3720><span
                          class="city-card__info-city title-5-bld" data-v-c23d3720>Arya Star</span></span>
                      <div class="play-button-overlay">
                        <div class="play-button"></div>
                      </div>
                    </div>
                    <div class="city-card__social-handle" data-v-c23d3720>
                      <div class="icon-container wds-icon" style="" loading="lazy" data-v-01502a85 data-v-c23d3720>
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#sn-instagram" href="#sn-instagram" data-v-01502a85></use>
                        </svg>
                      </div>

                    </div>
                  </div>
                </a>
                <!--]-->
              </div>
              <!--]-->
            </div>
          </div>

          <div class="newsletter" data-v-b9699ad0 data-v-a2a0aa55>
            <div class="newsletter-wrapper" data-v-a2a0aa55>
              <div class="header" data-v-a2a0aa55>
                <div class="header-icon" data-v-a2a0aa55>
                  <img loading="lazy"
                    src="data:image/svg+xml,%3csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20width=&#39;53&#39;%20height=&#39;50&#39;%20fill=&#39;none&#39;%3e%3cpath%20fill=&#39;%23F6A90E&#39;%20d=&#39;M50.634%2048.51c1.425-.657%201.424-26.903%200-27.887-.707-.489-12.41-1.16-24.134-1.122-11.9.039-23.826.791-24.304%201.122-.95.656-1.425%2027.23%200%2027.886.735.339%2013.234%201.003%2025.354.992%2011.363-.01%2022.394-.674%2023.084-.992Z&#39;/%3e%3cpath%20fill=&#39;%23F6A90E&#39;%20stroke=&#39;%23121417&#39;%20stroke-linecap=&#39;round&#39;%20stroke-linejoin=&#39;round&#39;%20stroke-width=&#39;2&#39;%20d=&#39;M50.634%2048.008c1.425-.656%201.424-26.903%200-27.887-.707-.488-12.41-1.159-24.134-1.121-11.9.038-23.826.79-24.304%201.121-.95.656-1.425%2027.23%200%2027.887.735.338%2013.234%201.003%2025.354.992%2011.363-.01%2022.394-.675%2023.084-.992Z&#39;/%3e%3cpath%20stroke=&#39;%23121417&#39;%20stroke-width=&#39;2&#39;%20d=&#39;M2.349%2021.5c3.578%203%2021.17%2014%2024.152%2014%202.982%200%2020.575-12.5%2024.153-15M26.5.5v9.032M10.545%205.823l6.707%206.386M43.504%205.823l-6.707%206.386&#39;/%3e%3c/svg%3e"
                    alt="Join our adventurous community!" title="Join our adventurous community!" data-v-a2a0aa55 />
                </div>
                <div class="header-content" data-v-a2a0aa55>
                  <h2 class="title title-4-bld" data-v-a2a0aa55>
                    Join our adventurous community!
                  </h2>
                  <h3 class="sub-title body-1-reg" data-v-a2a0aa55>
                    Sign up to our newsletter for deals, inspo and other
                    treats!
                  </h3>
                </div>
              </div>
              <label data-v-a2a0aa55>
                <div class="input" data-v-6ca93fbe data-v-a2a0aa55>
                  <div class="input-inner with-prefix with-suffix with-label" data-v-6ca93fbe>
                    <div class="input-prefix" data-v-6ca93fbe>
                      <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>

                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                          <use xlinkHref="#send" href="#send" data-v-01502a85></use>
                        </svg>
                      </div>
                    </div>
                    <div class="input-wrapper" data-v-6ca93fbe>
                      <input debounce="1000" class="native-input" type="text" value spellcheck="false"
                        data-v-6ca93fbe /><label class="input-label" data-v-6ca93fbe>Your email address</label>
                    </div>
                    <div class="input-suffix" data-v-6ca93fbe>
                      <!---->
                      <!--[-->
                      <div class="input-suffix-container" data-v-a2a0aa55>
                        <button aria-label="Newsletter subscription button." class="btn-content icon-only" type="button"
                          data-v-74f29db0 data-v-a2a0aa55>
                          <!--[-->
                          <div class="icon-container" style="" data-v-01502a85 data-v-74f29db0>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                              <use xlinkHref="#arrow-right" href="#arrow-right" data-v-01502a85></use>
                            </svg>
                          </div>
                          <!---->
                          <!---->
                          <!--]-->
                        </button>
                      </div>
                      <!--]-->
                    </div>
                  </div>
                  <!---->
                </div>
              </label>
            </div>
            <div class="newsletter-message" data-v-a2a0aa55>
              <p class="text-body body-3-reg" data-v-a2a0aa55>
                Just so you know, we’ll be able to see if you receive and open
                our emails to help us monitor the success of our marketing
                campaigns.
              </p>
            </div>
          </div>
          <div data-v-b9699ad0 data-v-906eeacc>
            <a href="https://w5az.app.link/xZ2ty1CTQnb" rel="noopener noreferrer" target="_blank" class="badge-wrapper"
              title="Contact Us." data-v-906eeacc>
              <div role="dialog" class="badge" aria-label="Contact Us." data-v-906eeacc>
                <img alt="Contact Us. icon" width="24" height="24" loading="lazy"
                  src="https://a.hwstatic.com/image/upload/v1644942643/pwa/sp/hw-icon.svg" data-v-906eeacc />
                {{-- Contact Us. --}}
              </div>
            </a>
            <div role="dialog" class="gta-fixed-wrapper" aria-label="Contact Us." data-v-906eeacc>
              <img alt="Contact Us. QR" width="72" height="72" class="qr-white" loading="lazy"
                src="nuxt/get-the-app-qr.CHbn3ZX2.svg" data-v-906eeacc /><img alt="Contact Us. QR" width="124"
                height="124" class="qr-purple" loading="lazy" src="nuxt/get-the-app-qr.CHbn3ZX2.svg" data-v-906eeacc />
                {{-- <div class="text" data-v-906eeacc>Contact Us.</div> --}}
              </div>
            <div class="badge-placeholder" data-v-906eeacc></div>
          </div>
      
          <!--]-->
          <!--]-->
        </main>
        <span data-v-4bbdb0e5></span>
        <footer class="footer-container footer-web" data-v-4bbdb0e5 data-v-ca696f30 data-v-5e150d14>
          <div class="footer-wrapper" data-v-ca696f30>
            <div class="footer-area social-media" data-v-ca696f30>
              <!--[--><strong class="footer-heading" data-v-ca696f30>Follow us on</strong>
              <div class="social-media-logos" data-v-ca696f30>
                <!--[--><a href="#" title="DNASOUND STUDIO Facebook"
                  aria-label="DNASOUND STUDIO Facebook" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-facebook" href="#sn-facebook" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="#" title="DNASOUND STUDIO Twitter"
                  aria-label="DNASOUND STUDIO Twitter" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-twitter-circle" href="#sn-twitter-circle" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="#" title="DNASOUND STUDIO Instagram"
                  aria-label="DNASOUND STUDIO Instagram" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-instagram-circle" href="#sn-instagram-circle" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="#" title="DNASOUND STUDIO YouTube"
                  aria-label="DNASOUND STUDIO YouTube" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-youtube-circle" href="#sn-youtube-circle" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="#" title="DNASOUND STUDIO Pinterest"
                  aria-label="DNASOUND STUDIO Pinterest" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-pinterest" href="#sn-pinterest" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="#" title="DNASOUND STUDIO Tiktok"
                  aria-label="DNASOUND STUDIO Tiktok" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-tiktok-circle" href="#sn-tiktok-circle" data-v-01502a85></use>
                    </svg>
                  </div>
                </a>
                <!--]-->
              </div>
              <!--]-->
            </div>

            <div class="footer-area quick-links" data-v-ca696f30>
              <!--[-->
              <!--[-->
              <div class="quick-links-col" data-v-ca696f30>
                <!--[-->
                <div class="quick-links-group" data-v-ca696f30>
                  <strong class="footer-heading" data-v-ca696f30>Producers / Artist</strong>
                  <!--[--><a href="#pener" target="_self" title="Hostels" aria-label="Hostels" class="footer-link"
                    data-v-ca696f30>Register</a><a href="#pener" target="_self" title="Hotels" aria-label="Hotels"
                    class="footer-link" data-v-ca696f30>Login</a><a href="#rel=" opener" target="_self"
                    title="Bed and Breakfast" aria-label="Bed and Breakfast" class="footer-link" data-v-ca696f30>Promote
                    Beat</a>
                  <!--]-->
                </div>
                <div class="quick-links-group" data-v-ca696f30>
                  <strong class="footer-heading" data-v-ca696f30>Customer Support</strong>
                  <!--[--><a href="https://hwhelp.DNASOUND STUDIOgroup.com/hc/en-us/requests/new?ticket_form_id=63361"
                    title="Talk to Us" aria-label="Talk to Us" class="footer-link" data-v-ca696f30>Talk to Us</a><a
                    href="https://hwhelp.DNASOUND STUDIOgroup.com/hc/en-us" title="Help" aria-label="Help"
                    class="footer-link" data-v-ca696f30>Help</a>
                  <!--]-->
                </div>
                <!--]-->
              </div>
              <div class="quick-links-col" data-v-ca696f30>
                <!--[-->
                <div class="quick-links-group" data-v-ca696f30>
                  <strong class="footer-heading" data-v-ca696f30>Quick Links</strong>
                  <!--[--><a href="https://www.DNASOUND STUDIO.com/blog/" rel="noopener" title="Blog" aria-label="Blog"
                    class="footer-link" data-v-ca696f30>Blog</a><a href="https://www.DNASOUND STUDIO.com/guarantee/"
                    rel="opener" target="_self" title="Booking Guarantee" aria-label="Booking Guarantee"
                    class="footer-link" data-v-ca696f30>Purchase Beat</a><a
                    href="https://www.DNASOUND STUDIO.com/hoscars" rel="noopener" title="Hostel Awards"
                    aria-label="Hostel Awards" class="footer-link" data-v-ca696f30>About Us</a><a
                    href="https://www.DNASOUND STUDIO.com/experiences-hub/" rel="noopener"
                    title="Tours &amp; Experiences" aria-label="Tours &amp; Experiences" class="footer-link"
                    data-v-ca696f30>Our Services</a><a href="https://www.DNASOUND STUDIO.com/blog/solo-travel/"
                    rel="noopener" title="Solo Travel" aria-label="Solo Travel" class="footer-link"
                    data-v-ca696f30>FAQ</a><a href="https://connect.studentbeans.com/v4/DNASOUND STUDIO/uk"
                    rel="noopener nofollow noreferrer sponsored" target="_blank" title="Student Discount"
                    aria-label="Student Discount" class="footer-link" data-v-ca696f30> Discount</a><a
                    href="https://www.DNASOUND STUDIO.com/roamies/" rel="noopener" title="Roamies" aria-label="Roamies"
                    class="footer-link" data-v-ca696f30>Promotion</a>
                  <!--]-->
                </div>
                <!--]-->
              </div>
              <div class="quick-links-col" data-v-ca696f30>
                <!--[-->
                <div class="quick-links-group" data-v-ca696f30>
                  <strong class="footer-heading" data-v-ca696f30>About Us</strong>
                  <!--[--><a href="https://www.DNASOUND STUDIOgroup.com/" title="DNASOUND STUDIO Group PLC"
                    aria-label="DNASOUND STUDIO Group PLC" class="footer-link" data-v-ca696f30>DNASOUND STUDIO Group
                    PLC</a><a href="https://www.DNASOUND STUDIOgroup.com/media/press-releases/" title="Press"
                    aria-label="Press" class="footer-link" data-v-ca696f30>Press</a><a
                    href="https://people.DNASOUND STUDIO.com/" title="Careers" aria-label="Careers" class="footer-link"
                    data-v-ca696f30>Careers</a>
                  <!--]-->
                </div>
                <div class="quick-links-group" data-v-ca696f30>
                  <strong class="footer-heading" data-v-ca696f30>Work With Us</strong>
                  <!--[--><a href="https://signup.DNASOUND STUDIO.com/en/property/intro" title="Hostel Sign Up"
                    aria-label="Hostel Sign Up" class="footer-link" data-v-ca696f30>Producer Sign Up</a><a
                    href="https://partners.DNASOUND STUDIO.com/" title="Affiliate Program"
                    aria-label="Affiliate Program" class="footer-link" data-v-ca696f30>Affiliate Program</a><a
                    href="https://inbox.DNASOUND STUDIO.com/inbox/?Language=English" title="DNASOUND STUDIO Inbox"
                    aria-label="DNASOUND STUDIO Inbox" class="footer-link" data-v-ca696f30>DNASOUND STUDIO Inbox</a>
                  <!--]-->
                </div>
                <!--]-->
              </div>
              <!--]-->
              <!--]-->
            </div>
            <div class="footer-area copyright" data-v-ca696f30>
              <!--[-->
              <div class="notice" data-v-ca696f30>
                <div class="ssl-secure-sign secure-sign" data-v-62da6a3a data-v-ca696f30>
                  <img width="102.5" height="40" title="Secure GlobalSign" alt="Secure GlobalSign"
                    aria-label="Secure GlobalSign" loading="lazy" src="/assets/images/logo/png/logo4.png"
                    data-v-62da6a3a />
                </div>
                {{-- <div class="climate-neutral-logo cnc-logo" data-v-7f407042 data-v-ca696f30>
                  <img width="82" height="40" title="Climate Neutral Company" alt="Climate Neutral Company"
                    aria-label="Climate Neutral Company" loading="lazy"
                    src="https://a.hwstatic.com/raw/upload/f_auto,q_auto/wds/logos/cnc.svg" class="white"
                    data-v-7f407042 />
                </div> --}}
              </div>
              <div class="notice-text" data-v-ca696f30>
                © 2024 DNASOUND STUDIO Limited
              </div>
              <!--]-->
            </div>
            {{-- <div class="footer-area legal-links" data-v-ca696f30>
              <!--[--><a href="https://www.DNASOUND STUDIO.com/securityprivacy/" title="Data Protection Notice"
                aria-label="Data Protection Notice" class="footer-link" data-v-ca696f30>Data Protection Notice</a><a
                href="https://www.DNASOUND STUDIO.com/hosteltermsandconditions/" title="Terms &amp; Legal"
                aria-label="Terms &amp; Legal" class="footer-link" data-v-ca696f30>Terms &amp; Legal</a><a
                href="https://www.DNASOUND STUDIO.com/coupons-terms-conditions/" title="Coupons" aria-label="Coupons"
                class="footer-link" data-v-ca696f30>Coupons</a><a
                href="https://www.DNASOUND STUDIO.com/vouchertermsandconditions/" title="Vouchers" aria-label="Vouchers"
                class="footer-link" data-v-ca696f30>Vouchers</a>
              <a href="https://www.DNASOUND STUDIO.com/sitemap/" title="Site Map" aria-label="Site Map"
                class="footer-link" data-v-ca696f30>Site Map</a><span id="teconsent" class="footer-link"
                data-v-ca696f30></span>
              <!--]-->
            </div> --}}
          </div>
        </footer>
        <span data-v-4bbdb0e5></span>
      </div>
    </div>
  </div>
  <div id="teleports"></div>
 
  <script>
    document.addEventListener('DOMContentLoaded', () => {
const freemiumBtn = document.getElementById('freemium-btn');
const premiumBtn = document.getElementById('premium-btn');
const freemiumContent = document.getElementById('freemium-content');
const premiumContent = document.getElementById('premium-content');

freemiumBtn.addEventListener('click', () => {
freemiumBtn.classList.add('active');
premiumBtn.classList.remove('active');
freemiumContent.classList.add('active');
premiumContent.classList.remove('active');
});

premiumBtn.addEventListener('click', () => {
premiumBtn.classList.add('active');
freemiumBtn.classList.remove('active');
premiumContent.classList.add('active');
freemiumContent.classList.remove('active');
});
});

  </script>

</body>
<!-- Mirrored from DNASOUND STUDIO.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 09:54:20 GMT -->

</html>