<?php get_header(); ?>
<main id="main" data-barba="container" data-barba-namespace="home" class="home no-mt" bg-color="white">
  <section class="relative mt5">
    <div class="container">
      <h1 class="black tc f0">Seamless user compliance in Latam</h1>
      <h2 class="f3 tc mt3 fw3 lh-copy">One API to comply 600M users in over 20 countries, which are 50% unbanked. Local, comply locally, hazard free. Welcome to Güeno.</h2>

      <div class="home-cta-starters mt3 flex flex-column justify-center w-100 align-center">
        <a class="main-cta has-gradient w-max center">
          <p>Start now for Free</p>
        </a>
        <a class="main-cta bg-grey mt3 w-max center">
          <p class="white">Crypto compliance in Latam &#128640;</p>
        </a>
      </div>
    </div>
   

    <div class="map-content relative mt5">
      <div class="flex flex-column justify-center items-center absolute-center">
        <div id="w-node-_79ba1455-8a32-e925-dc52-bf7cf78044f9-9f3e1567" class="code-ui-snippet">
          <div class="code-ui-snippet-row">
              <div class="code-row-number">
                <div>12</div>
                </div>
                <div class="code-row-content">
                <div class="code-ui-snippet-text">onboarding ( id: ‘<span class="text-primary-2">API Pay</span>’)
                </div>
              </div>
          </div>
        </div>
        <div class="mv3">
          <?php get_template_part('template-parts/content/user-card'); ?>
        </div>

        <div id="w-node-_79ba1455-8a32-e925-dc52-bf7cf78044f9-9f3e1567" class="code-ui-snippet">
          <div class="code-ui-snippet-row">
              <div class="code-row-number">
                <div>16</div>
                </div>
                <div class="code-row-content">
                <div class="code-ui-snippet-text">2021-1u-06 15:52:00 [200] payment intent.succeeded ( id: ‘<span class="text-primary-2">API Pay</span>’)
                </div>
              </div>
          </div>
        </div>
      </div>
      
      <img style="max-width: 50vw" class="db center" src="/wp-content/uploads/2022/03/map-test-gueno.png">

      <div class="map-texture-1 absolute top-0">
        <?php get_template_part('template-parts/content/map-texture-1'); ?>
      </div>

      <div class="map-texture-2 absolute bottom-0">
        <?php get_template_part('template-parts/content/map-texture-1'); ?>
      </div>
    </div>

  </section>


  <section class="home-clients mt5">
    <h2 class="f3 tc mt3 fw3 lh-copy main-color">Trusted by Latam's finest</h2>
  </section>

  <section class="cards container mt5">
    <div class="cards-container">
    
    <div class="card relative pa4">
        <div class="card-inner-bg bg-main-color"></div>
         <div class="card-content">
            <div class="flex jic">
              <h1 class="main-dark-color f0">For Developers</h1>
              <h2 class="white f2">01 /</h2>
            </div>

            <p class="main-dark-color lh-copy mt3 f3 measure">Nos sacrificamos para que sus equipos no necesiten unir sistemas dispares o pasar meses integrando las funcionalidades y pagos.</p>
            <a class="mt4 has-after main-dark-color main-font">Request a demo</a>
        </div>
      </div>

      <div class="card relative pa4">
        <div class="card-inner-bg bg-main-color"></div>
         <div class="card-content">
            <div class="flex jic">
              <h1 class="main-dark-color f0">Comply Locally</h1>
              <h2 class="white f2">02 /</h2>
            </div>

            <p class="main-dark-color lh-copy mt3 f3 measure">Nos sacrificamos para que sus equipos no necesiten unir sistemas dispares o pasar meses integrando las funcionalidades y pagos.</p>
            <a class="mt4 has-after main-dark-color main-font">Request a demo</a>
        </div>
      </div>

      <div class="card relative pa4">
        <div class="card-inner-bg bg-main-color"></div>
         <div class="card-content">
            <div class="flex jic">
              <h1 class="main-dark-color f0">Scale hazard free</h1>
              <h2 class="white f2">03 /</h2>
            </div>

            <p class="main-dark-color lh-copy mt3 f3 measure">Nos sacrificamos para que sus equipos no necesiten unir sistemas dispares o pasar meses integrando las funcionalidades y pagos.</p>
            <a class="mt4 has-after main-dark-color main-font">Request a demo</a>
        </div>
      </div>

    </div>
  </section>


  <section class="bg-white relative z-5 w-100 pv6">
    <h1 class="fw4 f1 tc black pt5">AML & KYC Compliance Solution for LatAm</h1>
    <h2 class="fw3 f3 tc black mt2">Go safe, go massive.</h2>
  </section>
</main><!-- #main & End Barba Container-->

<?php get_footer();?>


<style>
  .code-ui-snippet {
    margin: auto;
    overflow: hidden;
    border-style: solid;
    border-width: 1px;
    border-color: hsla(0, 0%, 100%, 0.2);
    border-radius: 3px;
    background-color: #000;
    font-family: 'IBM Plex Mono', sans-serif;
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
}

.code-ui-snippet-row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}
.code-row-number {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 28px;
    min-height: 28px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: hsla(0, 0%, 100%, 0.15);
    color: hsla(0, 0%, 100%, 0.5);
}
.code-row-content {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 14px;
    padding-left: 14px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.code-ui-snippet-text {
    white-space: nowrap;
    color: #fff;
}
.text-primary-2 {
    color: var(--mainColor) !important;;
}
</style>
