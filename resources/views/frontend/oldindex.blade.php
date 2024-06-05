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
  <link rel="modulepreload" as="script" crossorigin href="nuxt/UKZ54GTt.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/CTRruD0K.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/BVtBD3kX.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/M7P1Y6Av.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/DlAUqK2U.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/D5M0KEYm.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/qs7q_Hsb.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/Blj2-1Le.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/CUN3NoOQ.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/BAowrwjs.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/eJxMQETz.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/nP1y-AIi.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/x_rD_Ya3.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/DEGzrFkQ.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/OzC-YZsw.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/Dsx2He7f.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/Dy2H2_bo.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/D8wf9T9c.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/BcVTtDoF.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/BawjDl-Y.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/BKcXFaGU.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/CFzUSuNr.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/Qjh_1B8m.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/D1Asi_Da.js" />
  <link rel="modulepreload" as="script" crossorigin href="nuxt/T_RBUy7S.js" />
  <link rel="prefetch" as="script" crossorigin href="nuxt/CSf85Urr.js" />
  <link rel="prefetch" as="script" crossorigin href="nuxt/DFjpnwFp.js" />
  <link rel="prefetch" as="script" crossorigin href="nuxt/CirltxLt.js" />
  <link rel="prefetch" as="script" crossorigin href="nuxt/C9WL1Jfq.js" />
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
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                  <use xlinkHref="#arrow-right" href="#arrow-right" data-v-01502a85></use>
                                </svg>
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
                        <div class="sheet-heading with-divider" data-v-54a3cdc8>
                          <!---->
                          <div class="heading-extra" data-v-54a3cdc8>
                            <!--[-->
                            <div class="tab-list-container" data-v-27012c9d data-v-42f760f2>
                              <!--[--><button type="button" role="tab" class="nav-link nav-link-small nav-link-active"
                                aria-selected="true" data-v-06b30191 data-v-27012c9d>
                                Destination
                                <span class="nav-platform" data-v-06b30191></span></button><button type="button"
                                role="tab" class="nav-link nav-link-small nav-link-disabled" aria-disabled="true"
                                disabled data-v-06b30191 data-v-27012c9d>
                                Dates
                                <span class="nav-platform" data-v-06b30191></span></button><button type="button"
                                role="tab" class="nav-link nav-link-small nav-link-disabled" aria-disabled="true"
                                disabled data-v-06b30191 data-v-27012c9d>
                                Guests
                                <span class="nav-platform" data-v-06b30191></span></button>
                              <!--]-->
                            </div>
                            <!--]-->
                          </div>
                        </div>
                        <div class="sheet-body" data-v-54a3cdc8>
                          <!--[-->
                          <div class="wds-helper-slider" data-v-f834b918 data-v-42f760f2>
                            <div class="tab-panel" role="tabpanel" data-v-f834b918>
                              <!--[-->
                              <div class="wiz-panel-content destination-panel" data-v-42f760f2>
                                <div class="destination-field" data-v-42f760f2>
                                  <div class="input input-strip" data-v-6ca93fbe data-v-42f760f2>
                                    <div class="input-inner with-prefix with-label" data-v-6ca93fbe>
                                      <div class="input-prefix" data-v-6ca93fbe>
                                        <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                                          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                            data-v-01502a85>
                                            <use xlinkHref="#location-pin" href="#location-pin" data-v-01502a85></use>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="input-wrapper" data-v-6ca93fbe>
                                        <input class="native-input" type="text" value spellcheck="false"
                                          data-v-6ca93fbe /><label class="input-label" data-v-6ca93fbe>Where do you want
                                          to go?</label>
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </div>
                                </div>
                                <!---->
                                <!---->
                                <div class="destination-selection" data-v-42f760f2>
                                  <ul class="destination-current-location" data-v-42f760f2>
                                    <li role="option" aria-label="Current Location" class="item" data-v-099432cf
                                      data-v-42f760f2>
                                      <button class="item-content" type="button" data-type="listItem" data-v-099432cf>
                                        <div class="icon" data-v-099432cf>
                                          <div class="icon-container" style="" data-v-01502a85 data-v-099432cf>
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                              data-v-01502a85>
                                              <use xlinkHref="#current-location" href="#current-location"
                                                data-v-01502a85></use>
                                            </svg>
                                          </div>
                                        </div>
                                        <div class="item-text" style="" data-v-099432cf>
                                          <div class="label" data-v-099432cf>
                                            Current Location
                                          </div>
                                          <!---->
                                          <!---->
                                        </div>
                                        <!---->
                                        <!---->
                                      </button>
                                    </li>
                                  </ul>
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                              <!--]-->
                            </div>
                            <div class="tab-panel" role="tabpanel" style="display: none" data-v-f834b918>
                              <!--[-->
                              <div class="wiz-panel-content dates-panel" data-v-42f760f2>
                                <div class="stay-date-fields" data-v-42f760f2>
                                  <div class="input input-readonly input-strip" data-v-6ca93fbe data-v-42f760f2>
                                    <div class="input-inner with-prefix with-label" data-v-6ca93fbe>
                                      <div class="input-prefix" data-v-6ca93fbe>
                                        <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                                          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                            data-v-01502a85>
                                            <use xlinkHref="#calendar-check-in" href="#calendar-check-in"
                                              data-v-01502a85></use>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="input-wrapper" data-v-6ca93fbe>
                                        <input class="stay-date native-input" readonly type="text" value="9 May"
                                          spellcheck="false" data-v-6ca93fbe /><label
                                          class="input-label input-label-filled" data-v-6ca93fbe>Total Beat</label>
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </div>
                                  <div class="input input-readonly input-strip" data-v-6ca93fbe data-v-42f760f2>
                                    <div class="input-inner with-prefix with-label" data-v-6ca93fbe>
                                      <div class="input-prefix" data-v-6ca93fbe>
                                        <div class="icon-container" style="" data-v-01502a85 data-v-6ca93fbe>
                                          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                            data-v-01502a85>
                                            <use xlinkHref="#calendar-check-out" href="#calendar-check-out"
                                              data-v-01502a85></use>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="input-wrapper" data-v-6ca93fbe>
                                        <input class="stay-date native-input" readonly type="text" value="12 May"
                                          spellcheck="false" data-v-6ca93fbe /><label
                                          class="input-label input-label-filled" data-v-6ca93fbe>Total Producers</label>
                                      </div>
                                      <!---->
                                    </div>
                                    <!---->
                                  </div>
                                </div>
                                <div class="stay-status-message" data-v-42f760f2>
                                  <div class="icon-container" style="" data-v-01502a85 data-v-42f760f2>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                      <use xlinkHref="#night" href="#night" data-v-01502a85></use>
                                    </svg>
                                  </div>
                                  <span data-v-42f760f2>3 nights selected</span>
                                </div>
                                <div class="stay-date-picker" data-v-42f760f2>
                                  <div class="date-picker-wrapper vertical" data-v-987dad8e data-v-42f760f2>
                                    <div class="wds-helper-slider" data-v-987dad8e>
                                      <div class="date-picker" data-v-987dad8e>
                                        <!--[-->
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              May 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button disabled class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button disabled class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button disabled class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button disabled class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button disabled class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button disabled class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button disabled class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day today" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day start" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day range" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day range" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day end last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              June 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              July 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              August 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              September 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              October 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              November 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              December 2024
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              January 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              February 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              March 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              April 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              May 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              June 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              July 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              August 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              September 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              October 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              November 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              December 2025
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              January 2026
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              February 2026
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              March 2026
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              April 2026
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <div class="calendar calendar-large" data-v-2ffc4e72 data-v-987dad8e>
                                          <div class="calendar-header" data-v-2ffc4e72>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-name" data-v-2ffc4e72>
                                              May 2026
                                            </div>
                                            <div class="month-nav" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                          </div>
                                          <div class="calendar-grid" data-v-2ffc4e72>
                                            <!--[-->
                                            <div class="week-name" data-v-2ffc4e72>
                                              Mon
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Tue
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Wed
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Thu
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Fri
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sat
                                            </div>
                                            <div class="week-name" data-v-2ffc4e72>
                                              Sun
                                            </div>
                                            <!--]-->
                                            <!--[-->
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <!---->
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>1</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>2</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>3</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>4</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>5</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>6</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>7</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>8</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>9</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>10</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>11</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>12</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>13</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>14</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>15</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>16</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>17</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>18</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>19</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>20</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>21</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>22</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>23</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>24</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day first" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>25</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>26</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>27</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>28</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>29</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>30</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <div class="month-day" data-v-2ffc4e72>
                                              <button class="day last" data-v-2ffc4e72>
                                                <div data-v-2ffc4e72>31</div>
                                                <span data-v-2ffc4e72></span>
                                              </button>
                                            </div>
                                            <!--]-->
                                          </div>
                                        </div>
                                        <!--]-->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!---->
                              </div>
                              <!--]-->
                            </div>
                            <div class="tab-panel" role="tabpanel" style="display: none" data-v-f834b918>
                              <!--[-->
                              <div class="wiz-panel-content guests-panel" data-v-42f760f2>
                                <div class="guests-inner" data-v-42f760f2>
                                  <div class="guests-label" data-v-42f760f2>
                                    <div class="icon-container" style="" data-v-01502a85 data-v-42f760f2>
                                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                        <use xlinkHref="#users" href="#users" data-v-01502a85></use>
                                      </svg>
                                    </div>
                                    <span data-v-42f760f2>Guests</span>
                                  </div>
                                  <div class="counter guests-counter" data-v-601cbbe0 data-v-42f760f2>
                                    <button aria-label class="pill-content icon-only" type="button" data-v-50ea23e1
                                      data-v-601cbbe0>
                                      <div class="icon-container" style="" data-v-01502a85 data-v-50ea23e1>
                                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                          <use xlinkHref="#minus" href="#minus" data-v-01502a85></use>
                                        </svg>
                                      </div>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </button><input class="counter-input" type="number" min="1" max="80" value="2"
                                      data-v-601cbbe0 /><button aria-label class="pill-content icon-only" type="button"
                                      data-v-50ea23e1 data-v-601cbbe0>
                                      <div class="icon-container" style="" data-v-01502a85 data-v-50ea23e1>
                                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                          <use xlinkHref="#plus" href="#plus" data-v-01502a85></use>
                                        </svg>
                                      </div>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </button>
                                  </div>
                                </div>
                                <div class="group-search" data-v-42f760f2>
                                  <!---->
                                  <!---->
                                </div>
                                <!---->
                              </div>
                              <!--]-->
                            </div>
                          </div>
                          <!--]-->
                        </div>
                        <!---->
                      </div>
                    </div>
                  </div>
                  <!--]-->
                </div>
                {{-- <div class="hero-free-canx-notice" data-v-fd6f8bdd>
                  <img width="25" height="24" title="calendar-confirmation" alt="calendar-confirmation"
                    aria-label="calendar-confirmation" loading="lazy"
                    src="https://a.hwstatic.com/raw/upload/f_auto,q_auto/wds/illustrations/sm/calendar-confirmation.svg"
                    data-v-fd6f8bdd />
                  <div data-v-fd6f8bdd>
                    <b>Free Cancellation</b> &
                    <b>Flexible Booking</b> available
                  </div>
                </div> --}}
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
              <img style='border-top-left-radius:10px;border-top-right-radius:10px' alt="View Traveller Profiles"
                src="/assets/images/bn1.jpg" width="241" height="382" loading="lazy" data-v-e68c4228 />
            </div>
            <div class="card teal card-small card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Top Beats In Every Genre</h2>
                <p data-v-e68c4228>
                  Get the hottest beat in every genre.
                </p>
              </div>
              <img alt="Join your hostel&#39;s Chat" src="/assets/images/bn2.jpg" width="143" height="230"
                loading="lazy" data-v-e68c4228 />
            </div>
            <div class="card teal card-large card-item" data-v-5cefa5c1 data-v-e68c4228>
              <div class="card-tag" data-v-e68c4228>
                <h2 data-v-e68c4228>Top Beats In Every Genre</h2>
                <p data-v-e68c4228>
                  Get the hottest beat in every genre.
                </p>
              </div>
              <img style='border-top-left-radius:10px;border-top-right-radius:10px' alt="Join your hostel&#39;s Chat"
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
              </a><a target="_blank" href="#" rel="noopener noreferrer" title="How To Backpack Around Laos"
                data-v-0fd099b2 data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/djneptune.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">DJ Neptune</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>

              </a><a target="_blank" href="https://www.DNASOUND STUDIO.com/blog/backpacking-vietnam/"
                rel="noopener noreferrer" title="Backpacker&#39;s Guide To Travel Around Vietnam" data-v-0fd099b2
                data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/djy.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">DJ YK</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>

              </a><a target="_blank" href="https://www.DNASOUND STUDIO.com/blog/backpacking-europe/"
                rel="noopener noreferrer" title="Complete Guide To Backpacking Europe" data-v-0fd099b2 data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/ds2.jpg" alt="Card Image" class="card-image">
                  <div class="card-text">CLASSICAL REMA</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>

              </a><a target="_blank" href="https://www.DNASOUND STUDIO.com/blog/top-destinations-for-inter-railing/"
                rel="noopener noreferrer" title="This Year&#39;s Best Interrail Destinations" data-v-0fd099b2
                data-v-41fb6fcd>

                <div class="card">
                  <img src="/assets/images/pheez.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">Pheez</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>


              </a><a target="_blank" href="https://www.DNASOUND STUDIO.com/blog/solo-travel/spain/"
                rel="noopener noreferrer" title="Solo Travel In Spain" data-v-0fd099b2 data-v-41fb6fcd>

                <div class="card">
                  <img src="/assets/images/masterkraft.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">MASTER Kraft</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>


              </a><a target="_blank" href="https://www.DNASOUND STUDIO.com/blog/backpacking-usa/"
                rel="noopener noreferrer" title="Solo Traveller&#39;s Guide To Backpacking The USA" data-v-0fd099b2
                data-v-41fb6fcd>
                <div class="card">
                  <img src="/assets/images/sarz.jpeg" alt="Card Image" class="card-image">
                  <div class="card-text">SARZ</div>
                  <div class="play-button-overlay">
                    <div class="play-button"></div>
                  </div>
                </div>


              </a><a target="_blank" href="https://www.DNASOUND STUDIO.com/blog/backpacking-australia/"
                rel="noopener noreferrer" title="What To Know When Backpacking Australia" data-v-0fd099b2
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
              <a title="Read our blog" href="https://www.DNASOUND STUDIO.com/blog/" rel="noopener" target="_blank"
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
             



              {{-- <div class="say-hello-container" data-v-fa8556b3>
                <div class="say-hello-heading" data-v-fa8556b3>
                  <h2 class="sh-heading-title" data-v-fa8556b3>
                    Say <span>hello</span> (upgrade your music business!)
                  </h2>
                  <p class="sh-heading-subtitle" data-v-fa8556b3>
                    Make more money with DNA Sound Studio
                  </p>
                </div>
                <div class="sh-chat-windows" data-v-fa8556b3>
                  <img class="step-active sh-chat-window" src="/assets/images/ds3.jpg" alt="Chat Hostel" loading="lazy"
                    width="275" height="456" data-v-fa8556b3 /><img class="sh-chat-window" src="/assets/images/ds3.jpg"
                    alt="Chat City" loading="lazy" width="275" height="456" data-v-fa8556b3 /><img
                    class="sh-chat-window" src="/assets/images/ds3.jpg" alt="Chat Direct" loading="lazy" width="275"
                    height="456" data-v-fa8556b3 />
                </div>
                <img class="sh-chat-image small" src="/assets/images/ig4.png" alt="Chat Image 1" loading="lazy"
                  height="226" width="370" data-v-fa8556b3 /><img class="step-active-0 sh-chat-image large top-left"
                  src="/assets/images/ig4.png" alt="Chat Image 2" loading="lazy" width="320" height="480"
                  data-v-fa8556b3 /><img class="step-active-0 sh-chat-image large bottom-right"
                  src="/assets/images/ig4.png" alt="Chat Image 3" loading="lazy" width="320" height="480"
                  data-v-fa8556b3 />

              </div> --}}
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
                <span>Start with DNASOUND</span> studion today.
              </h2>
              <p class="text-body" data-v-74b15b82>
                Explore somewhere new, with a ready-made beat! Adventurous
                producers, that will take you there.
              </p>
              <a href="https://www.DNASOUND STUDIO.com/roamies/" rel="noopener" target="_blank" class="text-button"
                data-v-74b15b82>Show Me</a>
            </div>
            <div class="mosaic" data-v-74b15b82>
              <div class="mosaic-first-column" data-v-74b15b82>
                <!--[-->
                <!--[--><img loading="lazy" width="355" height="260" class="first-image mosaic-image desktop-image"
                  src="/assets/images/ds1.jpg" alt="Roamies image 1" data-v-74b15b82 /><img loading="lazy" width="172"
                  height="150" class="first-image mosaic-image mobile-image" src="/assets/images/ds1.jpg"
                  alt="Roamies image 1" data-v-74b15b82 />
                <!--]-->
                <!--[--><img loading="lazy" width="170" height="170" class="last-image mosaic-image desktop-image"
                  src="/assets/images/ds2.jpg" alt="Roamies image 2" data-v-74b15b82 /><img loading="lazy" width="120"
                  height="150" class="last-image mosaic-image mobile-image" src="/assets/images/ds2.jpg"
                  alt="Roamies image 2" data-v-74b15b82 />
                <!--]-->
                <!--]-->
              </div>
              <div class="mosaic-second-column" data-v-74b15b82>
                <!--[-->
                <!--[--><img loading="lazy" width="287" height="302" class="first-image mosaic-image desktop-image"
                  src="/assets/images/ds3.jpg" alt="Roamies image 1" data-v-74b15b82 /><img loading="lazy" width="135"
                  height="173" class="first-image mosaic-image mobile-image" src="/assets/images/ds3.jpg"
                  alt="Roamies image 1" data-v-74b15b82 />
                <!--]-->
                <!--[--><img loading="lazy" width="393" height="292" class="last-image mosaic-image desktop-image"
                  src="/assets/images/ds4.jpg" alt="Roamies image 2" data-v-74b15b82 /><img loading="lazy" width="180"
                  height="181" class="last-image mosaic-image mobile-image" src="/assets/images/ds4.jpg"
                  alt="Roamies image 2" data-v-74b15b82 />
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
          <div class="language-picker" style="display: none" data-v-b9699ad0>
            <div class="modal-overlay" style="display: none" data-v-080df497 data-v-fee63068>
              <div class="modal-container" style="display: none" data-v-080df497 data-v-080df497>
                <!----><button class="heading-button-icon close btn-content icon-only" type="button" data-v-05ef0110
                  data-v-080df497>
                  <div class="icon-container" style="" data-v-01502a85 data-v-05ef0110>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#close" href="#close" data-v-01502a85></use>
                    </svg>
                  </div>
                  <!---->
                  <!---->
                </button>
                <div class="modal-heading with-divider" data-v-080df497>
                  <div class="heading-text" data-v-080df497>Language</div>
                  <div class="heading-extra" data-v-080df497>
                    <!--[-->
                    <!--[-->
                    <div class="modal-header" data-v-fee63068>
                      <!---->
                    </div>
                    <!--]-->
                    <!--]-->
                  </div>
                </div>
                <div class="modal-body" data-v-080df497>
                  <!--[-->
                  <!--[-->
                  <div class="modal-content" data-v-fee63068>
                    <!---->
                    <!---->
                    <ul class="list-wrapper-inner" aria-label="Items" role="listbox" data-v-fee63068>
                      <!--[-->
                      <li role="option" aria-selected="true" aria-label="English" class="item selected" data-v-099432cf
                        data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="index.html" data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>English</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <div class="icon-selected" data-v-099432cf>
                            <div class="icon-container" style="" data-v-01502a85 data-v-099432cf>
                              <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                                <use xlinkHref="#checkmark" href="#checkmark" data-v-01502a85></use>
                              </svg>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li role="option" aria-label="Français" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/fr/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Français</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Deutsch" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/de/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Deutsch</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Español" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/es/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Español</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Italiano" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/it/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Italiano</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Português" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/pt/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Português</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Português (Brasil)" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/br/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>
                              Português (Brasil)
                            </div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Svenska" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/sv/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Svenska</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Polski" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/pl/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Polski</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Suomi" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/fi/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Suomi</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Dansk" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/da/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Dansk</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Nederlands" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/nl/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>
                              Nederlands
                            </div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Norsk" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/no/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Norsk</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="český" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/cs/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>český</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Русский" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/ru/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Русский</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="Türk" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/tr/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>Türk</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="中文" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/zh/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>中文</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="日本語" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/ja/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>日本語</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <li role="option" aria-label="한국어" class="item" data-v-099432cf data-v-fee63068>
                        <a class="item-content" data-type="listItem" href="https://www.DNASOUND STUDIO.com/ko/"
                          data-v-099432cf>
                          <!---->
                          <div class="item-text" style="" data-v-099432cf>
                            <div class="label" data-v-099432cf>한국어</div>
                            <!---->
                            <!---->
                          </div>
                          <!---->
                          <!---->
                        </a>
                      </li>
                      <!--]-->
                    </ul>
                  </div>
                  <!--]-->
                  <!--]-->
                </div>
                <!---->
              </div>
            </div>
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
                <!--[--><a href="https://www.facebook.com/DNASOUND STUDIO" title="DNASOUND STUDIO Facebook"
                  aria-label="DNASOUND STUDIO Facebook" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-facebook" href="#sn-facebook" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="https://twitter.com/DNASOUND STUDIO" title="DNASOUND STUDIO Twitter"
                  aria-label="DNASOUND STUDIO Twitter" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-twitter-circle" href="#sn-twitter-circle" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="https://www.instagram.com/DNASOUND STUDIO/" title="DNASOUND STUDIO Instagram"
                  aria-label="DNASOUND STUDIO Instagram" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-instagram-circle" href="#sn-instagram-circle" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="https://www.youtube.com/user/DNASOUND STUDIO" title="DNASOUND STUDIO YouTube"
                  aria-label="DNASOUND STUDIO YouTube" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-youtube-circle" href="#sn-youtube-circle" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="https://www.pinterest.co.uk/DNASOUND STUDIO/" title="DNASOUND STUDIO Pinterest"
                  aria-label="DNASOUND STUDIO Pinterest" class="footer-link" data-v-ca696f30>
                  <div class="icon-container social-media-icon" style="" data-v-01502a85 data-v-ca696f30>
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" data-v-01502a85>
                      <use xlinkHref="#sn-pinterest" href="#sn-pinterest" data-v-01502a85></use>
                    </svg>
                  </div>
                </a><a href="https://www.tiktok.com/@DNASOUND STUDIO" title="DNASOUND STUDIO Tiktok"
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
            <div class="footer-area legal-links" data-v-ca696f30>
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
            </div>
          </div>
        </footer>
        <span data-v-4bbdb0e5></span>
      </div>
    </div>
  </div>
  <div id="teleports"></div>
  <script type="application/json" id="_NUXT_DATA__" data-ssr="true">
    [
        ["Reactive", 1],
        {
          "data": 2,
          "state": 11,
          "once": 26,
          "_errors": 27,
          "serverRendered": 4,
          "path": 28,
          "pinia": 29
        },
        { "getHomePageTagsenEUR": 3 },
        { "success": 4, "data": 5, "message": 9 },
        true,
        {
          "copy": 6,
          "description": 7,
          "title": 8,
          "keywords": 6,
          "heading": 9,
          "ogTitle": 8,
          "ogDescription": 7,
          "ogImage": 6,
          "ogUrl": 6,
          "h1": 6,
          "h2": 6,
          "canonical": 6,
          "hreflangTags": 10
        },
        "",
        "Online confirmed DNA SOUND STUDIO - Best Producers, best artists       "Hostels Worldwide - Online Bookings, Ratings and Reviews",
        null,
        {
          "hRef en": 6,
          "hRefLang en": 6,
          "hRef de": 6,
          "hRefLang de": 6,
          "hRef fr": 6,
          "hRefLang fr": 6,
          "hRef it": 6,
          "hRefLang it": 6,
          "hRef es": 6,
          "hRefLang es": 6,
          "hRef pt": 6,
          "hRefLang pt": 6,
          "hRef br": 6,
          "hRefLang br": 6,
          "hRef sv": 6,
          "hRefLang sv": 6,
          "hRef pl": 6,
          "hRefLang pl": 6,
          "hRef fl": 6,
          "hRefLang fl": 6,
          "hRef da": 6,
          "hRefLang da": 6,
          "hRef nl": 6,
          "hRefLang nl": 6,
          "hRef no": 6,
          "hRefLang no": 6,
          "hRef cs": 6,
          "hRefLang cs": 6,
          "hRef ru": 6,
          "hRefLang ru": 6,
          "hRef tr": 6,
          "hRefLang tr": 6,
          "hRef ja": 6,
          "hRefLang ja": 6,
          "hRef ko": 6,
          "hRefLang ko": 6,
          "hRef zh": 6,
          "hRefLang zh": 6
        },
        {
          "$snuxt-i18n-meta": 12,
          "$snuxt-delay-hydration-mode": 13,
          "$soptimizely": 14,
          "$ssite-config": 20
        },
        {},
        "mount",
        {
          "web_googleTagManager": 15,
          "web_segment": 16,
          "web_redirectGeneric": 17,
          "web_redirectVouchersCoupons": 18,
          "web_sustainabilityBadges": 19
        },
        {},
        {},
        {},
        {},
        {},
        {
          "currentLocale": 21,
          "defaultLocale": 21,
          "description": 22,
          "env": 23,
          "name": 24,
          "url": 25
        },
        "en",
        "DNASOUND STUDIO.com",
        "production",
        "DNASOUND STUDIO",
        "index.html",
        ["Set"],
        { "getHomePageTagsenEUR": 9 },
        "index.html",
        {
          "testingStore": 30,
          "currencyStore": 33,
          "languageStore": 36,
          "sessionStore": 48,
          "routeStore": 49,
          "searchStore": 76
        },
        { "enabledFeatures": 31 },
        ["Ref", 32],
        ["Reactive", 14],
        { "showCurrencyPicker": 34 },
        ["EmptyRef", 35],
        "false",
        { "language": 37, "showLanguagePicker": 47 },
        ["Ref", 38],
        ["Reactive", 39],
        {
          "code": 21,
          "iso": 40,
          "isoUnder": 41,
          "tag": 21,
          "lang": 21,
          "url": 21,
          "baseUrl": 42,
          "rwdUrl": 43,
          "name": 44,
          "enName": 44,
          "isCatchallLocale": 4,
          "files": 45
        },
        "en-GB",
        "en_GB",
        "BASE_URL_EN",
        "PWA_URL_EN",
        "English",
        [46],
        "locales/en_GB.json",
        ["EmptyRef", 35],
        {},
        { "hwroute": 50, "propertyTypeKey": 53, "langUrls": 55 },
        ["Ref", 51],
        ["Reactive", 52],
        {
          "langUrl": 9,
          "propertyTypeUrl": 9,
          "continentUrl": 9,
          "countryUrl": 9,
          "cityUrl": 9,
          "cityPageNumber": 9,
          "propertyIdUrl": 9,
          "propertyNameUrl": 9,
          "areaUrl": 9,
          "regionUrl": 9,
          "districtUrl": 9,
          "districtPageNumber": 9,
          "chainUrl": 9,
          "cityFilterUrl": 9,
          "districtFilterUrl": 9
        },
        ["Ref", 54],
        "hostel",
        ["Ref", 56],
        ["Reactive", 57],
        {
          "en": 25,
          "fr": 58,
          "de": 59,
          "es": 60,
          "it": 61,
          "pt": 62,
          "br": 63,
          "sv": 64,
          "pl": 65,
          "fi": 66,
          "da": 67,
          "nl": 68,
          "no": 69,
          "cs": 70,
          "ru": 71,
          "tr": 72,
          "zh": 73,
          "ja": 74,
          "ko": 75
        },
        "https://www.DNASOUND STUDIO.com/fr/",
        "https://www.DNASOUND STUDIO.com/de/",
        "https://www.DNASOUND STUDIO.com/es/",
        "https://www.DNASOUND STUDIO.com/it/",
        "https://www.DNASOUND STUDIO.com/pt/",
        "https://www.DNASOUND STUDIO.com/br/",
        "https://www.DNASOUND STUDIO.com/sv/",
        "https://www.DNASOUND STUDIO.com/pl/",
        "https://www.DNASOUND STUDIO.com/fi/",
        "https://www.DNASOUND STUDIO.com/da/",
        "https://www.DNASOUND STUDIO.com/nl/",
        "https://www.DNASOUND STUDIO.com/no/",
        "https://www.DNASOUND STUDIO.com/cs/",
        "https://www.DNASOUND STUDIO.com/ru/",
        "https://www.DNASOUND STUDIO.com/tr/",
        "https://www.DNASOUND STUDIO.com/zh/",
        "https://www.DNASOUND STUDIO.com/ja/",
        "https://www.DNASOUND STUDIO.com/ko/",
        { "searchParams": 77, "isSearchActivated": 95 },
        ["Ref", 78],
        ["Reactive", 79],
        {
          "location": 80,
          "checkIn": 81,
          "checkOut": 85,
          "disabledUntil": 87,
          "disabledFrom": 89,
          "guests": 92,
          "groupType": 93,
          "groupAge": 94,
          "phrase": 6
        },
        {},
        { "year": 82, "month": 83, "day": 84 },
        2024,
        5,
        9,
        { "year": 82, "month": 83, "day": 86 },
        12,
        { "year": 82, "month": 83, "day": 88 },
        10,
        { "year": 82, "month": 90, "day": 91 },
        6,
        8,
        2,
        {},
        [],
        ["EmptyRef", 35]
      ]
  </script>
  <script>
    window._NUXT__ = {}
      window._NUXT__.config = {
        public: {
          RELEASE_ENV: 'production',
          STATIC_URL: '/',
          DYNAMIC_URL: '/app',
          NODE_ENV: 'production',
          DNASOUND STUDIO_URL: 'https://www.DNASOUND STUDIO.com',
          AUTOCOMPLETE_API_URL:
            'https://prod.apigee.DNASOUND STUDIO.com/elastic-search-api',
          SPWA_REDIRECTION_API:
            'http://static-pwa-redirection-api.vip.DNASOUND STUDIO.com',
          DNASOUND STUDIO_API_URL:
            'https://prod.apigee.DNASOUND STUDIO.com/legacy-hwapi-service/2.2',
          STATIC_PAGES_API_URL:
            'https://prod.apigee.DNASOUND STUDIO.com/legacy-staticpages-service',
          MICROSITE_API_URL:
            'https://prod.apigee.DNASOUND STUDIO.com/legacy-msapi-service',
          ITERABLE_API_URL: 'https://api.iterable.com/api/',
          OPTIMIZELY_SDK_KEY: 'YZPyQSwW1Aq3Hd9VsVB2S',
          GTM_ID: 'GTM-NV4Z79H',
          SENTRY_DSN:
            'https://16050649d85f0a6af342ff29b78dc7ef@o1047055.ingest.sentry.io/4506502916014080',
          SEGMENT_JS: 'O8GVk6R7tM0240DGMt8PReIzBiqHxIf3',
          APIGEE_KEY: 'TKM51SUbyeCZl8soGScBLR9lYQdjCvTR8cIN4vfqpG6oExKT',
          COOKIE_DOMAIN: '.DNASOUND STUDIO.com',
          COOKIE_SESSION_DOMAIN: '.DNASOUND STUDIO.com',
          COOKIE_SECURE: true,
          LOGGER_LOGLEVEL: 'error',
          LOGGER_LOGPATH: '',
          DEFAULT_BASE_URL: 'www.DNASOUND STUDIO.com',
          DOMAIN_URL: '.DNASOUND STUDIO.com',
          BASE_URL_PROTOCOL: 'https',
          BASE_URL_DIVIDER: '://',
          BASE_URL_EN: '',
          BASE_URL_FR: '/fr',
          BASE_URL_DE: '/de',
          BASE_URL_ES: '/es',
          BASE_URL_IT: '/it',
          BASE_URL_PT: '/pt',
          BASE_URL_BR: '/br',
          BASE_URL_SV: '/sv',
          BASE_URL_PL: '/pl',
          BASE_URL_FI: '/fi',
          BASE_URL_DA: '/da',
          BASE_URL_NL: '/nl',
          BASE_URL_NB: '/no',
          BASE_URL_NO: '/no',
          BASE_URL_CS: '/cs',
          BASE_URL_CZ: '/cs',
          BASE_URL_RU: '/ru',
          BASE_URL_TR: '/tr',
          BASE_URL_ZH: '/zh',
          BASE_URL_JA: '/ja',
          BASE_URL_JP: '/ja',
          BASE_URL_KO: '/ko',
          PWA_URL_EN: 'www',
          PWA_URL_FR: 'www.french',
          PWA_URL_DE: 'www.german',
          PWA_URL_ES: 'www.spanish',
          PWA_URL_IT: 'www.italian',
          PWA_URL_PT: 'www.portuguese',
          PWA_URL_BR: 'www.brazilian',
          PWA_URL_SV: 'www.swedish',
          PWA_URL_PL: 'www.polish',
          PWA_URL_FI: 'www.finnish',
          PWA_URL_DA: 'www.danish',
          PWA_URL_NL: 'www.dutch',
          PWA_URL_NB: 'www.norwegian',
          PWA_URL_NO: 'www.norwegian',
          PWA_URL_CS: 'www.czech',
          PWA_URL_CZ: 'www.czech',
          PWA_URL_RU: 'www.russian',
          PWA_URL_TR: 'www.turkish',
          PWA_URL_ZH: 'www.chinese',
          PWA_URL_JA: 'www.japanese',
          PWA_URL_JP: 'www.japanese',
          PWA_URL_KO: 'www.korean',
          GLOBAL_AGENT_HTTP_PROXY: 'http://proxy.vip.DNASOUND STUDIO.com:3128',
          GLOBAL_AGENT_HTTPS_PROXY: 'http://proxy.vip.DNASOUND STUDIO.com:3128',
          GLOBAL_AGENT_NO_PROXY: '.DNASOUND STUDIO.com,.apigee',
          MEMCACHED: 'memcache01.vip.DNASOUND STUDIO.com:11211',
          device: {
            enabled: true,
            defaultUserAgent:
              'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.39 Safari/537.36',
            refreshOnResize: true
          },
          i18n: {
            baseUrl: '',
            defaultLocale: 'en',
            defaultDirection: 'ltr',
            strategy: 'prefix_except_default',
            lazy: true,
            rootRedirect: '',
            routesNameSeparator: '___',
            defaultLocaleRouteNameSuffix: 'default',
            skipSettingLocaleOnNavigate: false,
            differentDomains: false,
            trailingSlash: true,
            configLocales: [
              {
                code: 'en',
                iso: 'en-GB',
                isoUnder: 'en_GB',
                tag: 'en',
                lang: 'en',
                url: 'en',
                baseUrl: 'BASE_URL_EN',
                rwdUrl: 'PWA_URL_EN',
                name: 'English',
                enName: 'English',
                isCatchallLocale: true,
                files: ['locales/en_GB.json']
              },
              {
                code: 'fr',
                iso: 'fr-FR',
                isoUnder: 'fr_FR',
                tag: 'fr',
                lang: 'fr',
                url: 'fr',
                baseUrl: 'BASE_URL_FR',
                rwdUrl: 'PWA_URL_FR',
                name: 'Français',
                enName: 'French',
                files: ['locales/fr_FR.json']
              },
              {
                code: 'de',
                iso: 'de-DE',
                isoUnder: 'de_DE',
                tag: 'de',
                lang: 'de',
                url: 'de',
                baseUrl: 'BASE_URL_DE',
                rwdUrl: 'PWA_URL_DE',
                name: 'Deutsch',
                enName: 'German',
                files: ['locales/de_DE.json']
              },
              {
                code: 'es',
                iso: 'es-ES',
                isoUnder: 'es_ES',
                tag: 'es',
                lang: 'es',
                url: 'es',
                baseUrl: 'BASE_URL_ES',
                rwdUrl: 'PWA_URL_ES',
                name: 'Español',
                enName: 'Spanish',
                files: ['locales/es_ES.json']
              },
              {
                code: 'it',
                iso: 'it-IT',
                isoUnder: 'it_IT',
                tag: 'it',
                lang: 'it',
                url: 'it',
                baseUrl: 'BASE_URL_IT',
                rwdUrl: 'PWA_URL_IT',
                name: 'Italiano',
                enName: 'Italian',
                files: ['locales/it_IT.json']
              },
              {
                code: 'pt',
                iso: 'pt-PT',
                isoUnder: 'pt_PT',
                tag: 'pt-PT',
                lang: 'pt',
                url: 'pt',
                baseUrl: 'BASE_URL_PT',
                rwdUrl: 'PWA_URL_PT',
                name: 'Português',
                enName: 'Portuguese',
                files: ['locales/pt_PT.json']
              },
              {
                code: 'br',
                iso: 'pt-BR',
                isoUnder: 'pt_BR',
                tag: 'pt-BR',
                lang: 'br',
                url: 'br',
                baseUrl: 'BASE_URL_BR',
                rwdUrl: 'PWA_URL_BR',
                name: 'Português (Brasil)',
                enName: 'Brazilian Portuguese',
                files: ['locales/pt_BR.json']
              },
              {
                code: 'sv',
                iso: 'sv-SE',
                isoUnder: 'sv_SE',
                tag: 'sv',
                lang: 'sv',
                url: 'sv',
                baseUrl: 'BASE_URL_SV',
                rwdUrl: 'PWA_URL_SV',
                name: 'Svenska',
                enName: 'Swedish',
                files: ['locales/sv_SE.json']
              },
              {
                code: 'pl',
                iso: 'pl-PL',
                isoUnder: 'pl_PL',
                tag: 'pl',
                lang: 'pl',
                url: 'pl',
                baseUrl: 'BASE_URL_PL',
                rwdUrl: 'PWA_URL_PL',
                name: 'Polski',
                enName: 'Polish',
                files: ['locales/pl_PL.json']
              },
              {
                code: 'fi',
                iso: 'fi-FI',
                isoUnder: 'fi_FI',
                tag: 'fi',
                lang: 'fi',
                url: 'fi',
                baseUrl: 'BASE_URL_FI',
                rwdUrl: 'PWA_URL_FI',
                name: 'Suomi',
                enName: 'Finnish',
                files: ['locales/fi_FI.json']
              },
              {
                code: 'da',
                iso: 'da-DK',
                isoUnder: 'da_DK',
                tag: 'da',
                lang: 'da',
                url: 'da',
                baseUrl: 'BASE_URL_DA',
                rwdUrl: 'PWA_URL_DA',
                name: 'Dansk',
                enName: 'Danish',
                files: ['locales/da_DK.json']
              },
              {
                code: 'nl',
                iso: 'nl-NL',
                isoUnder: 'nl_NL',
                tag: 'nl',
                lang: 'nl',
                url: 'nl',
                baseUrl: 'BASE_URL_NL',
                rwdUrl: 'PWA_URL_NL',
                name: 'Nederlands',
                enName: 'Dutch',
                files: ['locales/nl_NL.json']
              },
              {
                code: 'no',
                iso: 'nb-NO',
                isoUnder: 'nb_NO',
                tag: 'no',
                lang: 'nb',
                url: 'no',
                baseUrl: 'BASE_URL_NO',
                rwdUrl: 'PWA_URL_NO',
                name: 'Norsk',
                enName: 'Norwegian',
                files: ['locales/nb_NO.json']
              },
              {
                code: 'cs',
                iso: 'cs-CZ',
                isoUnder: 'cs_CZ',
                tag: 'cs',
                lang: 'cs',
                url: 'cs',
                baseUrl: 'BASE_URL_CS',
                rwdUrl: 'PWA_URL_CS',
                name: 'český',
                enName: 'Czech',
                files: ['locales/cs_CZ.json']
              },
              {
                code: 'ru',
                iso: 'ru-RU',
                isoUnder: 'ru_RU',
                tag: 'ru',
                lang: 'ru',
                url: 'ru',
                baseUrl: 'BASE_URL_RU',
                rwdUrl: 'PWA_URL_RU',
                name: 'Русский',
                enName: 'Russian',
                files: ['locales/ru_RU.json']
              },
              {
                code: 'tr',
                iso: 'tr-TR',
                isoUnder: 'tr_TR',
                tag: 'tr',
                lang: 'tr',
                url: 'tr',
                baseUrl: 'BASE_URL_TR',
                rwdUrl: 'PWA_URL_TR',
                name: 'Türk',
                enName: 'Turkish',
                files: ['locales/tr_TR.json']
              },
              {
                code: 'zh',
                iso: 'zh-CN',
                isoUnder: 'zh_CN',
                tag: 'zh',
                lang: 'zh',
                url: 'zh',
                baseUrl: 'BASE_URL_ZH',
                rwdUrl: 'PWA_URL_ZH',
                name: '中文',
                enName: 'Chinese',
                files: ['locales/zh_CN.json']
              },
              {
                code: 'ja',
                iso: 'ja-JP',
                isoUnder: 'ja_JP',
                tag: 'ja',
                lang: 'ja',
                url: 'ja',
                baseUrl: 'BASE_URL_JA',
                rwdUrl: 'PWA_URL_JA',
                name: '日本語',
                enName: 'Japanese',
                files: ['locales/ja_JP.json']
              },
              {
                code: 'ko',
                iso: 'ko-KR',
                isoUnder: 'ko_KR',
                tag: 'ko',
                lang: 'ko',
                url: 'ko',
                baseUrl: 'BASE_URL_KO',
                rwdUrl: 'PWA_URL_KO',
                name: '한국어',
                enName: 'Korean',
                files: ['locales/ko_KR.json']
              }
            ],
            locales: {
              en: { domain: '' },
              fr: { domain: '' },
              de: { domain: '' },
              es: { domain: '' },
              it: { domain: '' },
              pt: { domain: '' },
              br: { domain: '' },
              sv: { domain: '' },
              pl: { domain: '' },
              fi: { domain: '' },
              da: { domain: '' },
              nl: { domain: '' },
              no: { domain: '' },
              cs: { domain: '' },
              ru: { domain: '' },
              tr: { domain: '' },
              zh: { domain: '' },
              ja: { domain: '' },
              ko: { domain: '' }
            },
            detectBrowserLanguage: {
              alwaysRedirect: false,
              cookieCrossOrigin: false,
              cookieDomain: '',
              cookieKey: 'i18n_redirected',
              cookieSecure: false,
              fallbackLocale: '',
              redirectOn: 'root',
              useCookie: true
            },
            experimental: {
              localeDetector: '',
              switchLocalePathLinkSSR: false,
              autoImportTranslationFunctions: false
            }
          }
        },
        app: { baseURL: '/', buildAssetsDir: '/nuxt/', cdnURL: '' }
      }
  </script>
  <script type="application/ld+json" id="schema-org-graph" data-hid="3437552">
    {
        "@context": "https://schema.org",
        "@graph": [
          {
            "@id": "https://www.DNASOUND STUDIO.com/#website",
            "@type": "WebSite",
            "description": "DNASOUND STUDIO.com",
            "inLanguage": "en",
            "name": "DNASOUND STUDIO",
            "url": "https://www.DNASOUND STUDIO.com/",
            "publisher": { "@id": "https://www.DNASOUND STUDIO.com/#identity" }
          },
          {
            "@id": "https://www.DNASOUND STUDIO.com/#webpage",
            "@type": "WebPage",
            "description": "Online confirmed DNA SOUND STUDIO - Best Producers, best artists           "name": "Hostels Worldwide - Online Bookings, Ratings and Reviews",
            "url": "https://www.DNASOUND STUDIO.com/",
            "about": { "@id": "https://www.DNASOUND STUDIO.com/#identity" },
            "isPartOf": { "@id": "https://www.DNASOUND STUDIO.com/#website" },
            "potentialAction": [
              {
                "@type": "ReadAction",
                "target": ["https://www.DNASOUND STUDIO.com/"]
              }
            ],
            "primaryImageOfPage": { "@id": "https://www.DNASOUND STUDIO.com/#logo" }
          },
          {
            "@id": "https://www.DNASOUND STUDIO.com/#identity",
            "@type": "Organization",
            "name": "DNASOUND STUDIO",
            "url": "https://www.DNASOUND STUDIO.com/"
          },
          {
            "@id": "https://www.DNASOUND STUDIO.com/#logo",
            "@type": "ImageObject",
            "caption": "DNASOUND STUDIO",
            "contentUrl": "https://a.hwstatic.com/image/upload/f_auto,q_auto/hw/logos/hw_logo.svg",
            "inLanguage": "en",
            "url": "https://a.hwstatic.com/image/upload/f_auto,q_auto/hw/logos/hw_logo.svg"
          },
          {
            "@id": "https://www.DNASOUND STUDIO.com/#organization",
            "@type": "Organization",
            "logo": "https://a.hwstatic.com/image/upload/f_auto,q_auto/hw/logos/hw_logo.svg",
            "name": "DNASOUND STUDIO",
            "url": "https://www.DNASOUND STUDIO.com/"
          }
        ]
      }
  </script>
  <script>
    ;(function () {
        const w = window
        w._$delayHydration = (() => {
          if (!('requestIdleCallback' in w) || !('requestAnimationFrame' in w))
            return new Promise(resolve => resolve('not supported'))
          function eventListeners() {
            const c = new AbortController()
            const p = new Promise(resolve => {
              const hydrateOnEvents =
                'mousemove,scroll,keydown,click,touchstart,wheel'.split(',')
              function handler(e) {
                hydrateOnEvents.forEach(e2 =>
                  w.removeEventListener(e2, handler)
                )
                requestAnimationFrame(() => resolve(e))
              }
              hydrateOnEvents.forEach(e => {
                w.addEventListener(e, handler, {
                  capture: true,
                  once: true,
                  passive: true,
                  signal: c.signal
                })
              })
            })
            return { c: () => c.abort(), p }
          }
          function idleListener() {
            let id
            const p = new Promise(resolve => {
              const isMobile = w.innerWidth < 640
              const timeout = isMobile
                ? Number.parseInt('5000')
                : Number.parseInt('4000')
              const timeoutDelay = () =>
                setTimeout(
                  () => requestAnimationFrame(() => resolve('timeout')),
                  timeout
                )
              id = w.requestIdleCallback(timeoutDelay, {
                timeout: Number.parseInt('7000')
              })
            })
            return { c: () => window.cancelIdleCallback(id), p }
          }
          const triggers = [idleListener(), eventListeners()]
          const hydrationPromise = Promise.race(triggers.map(t => t.p)).finally(
            () => {
              triggers.forEach(t => t.c())
            }
          )
          return hydrationPromise
        })()

        ;(() => {
          w._$delayHydration.then(e => {
            if (
              !(e instanceof PointerEvent) &&
              !(e instanceof MouseEvent) &&
              !(window.TouchEvent && e instanceof TouchEvent)
            )
              return
            if (e instanceof MouseEvent && e.type !== 'click') return
            setTimeout(
              () =>
                w.requestIdleCallback(() =>
                  setTimeout(() => e.target?.click(), 500)
                ),
              50
            )
          })
        })()
      })()
  </script>
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