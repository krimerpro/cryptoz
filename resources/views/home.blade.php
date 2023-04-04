@extends('layouts.default')
@section('content')

<!-- Banner start -->
    <section id="banner-part" class="menu-section main-banner">
      <div class="banner">
    <div class="banner-detail">
      <div class="container">
        <div class="row m-0">
          <div class="col-lg-6 p-0 fadeInLeft">
            <div class="banner-detail-inner">
              <h1 class="banner-title"><span>Platform for</span> <br>The crypto Industry</h1>
              <p>The most reliable blockchain with BUSD rewards</p>
              <a href="https://t.me/CryptozNetworkPortal" class="btn big-width btn-color">JOIN US</a>
              <a href="https://poocoin.app/tokens/" class="btn big-width btn-color">CHART</a>
            </div>
          </div>
          <div class="col-lg-6 p-0">
            <div class="banner-main-img">
              <div class="front-bg fadeInRight">
                <img src="{{ asset('images/banner-img.svg') }}" alt="cryptoz">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
    <!-- Banner end -->

<!-- About section start -->
<section id="about-part" class="menu-section about-part position-r ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 fadeInRight order-lg-2 order-md-1">
        <div class="aboutus-detail pb-md-30">
          <div class="aboutus-detail-inner">
            <div class="heading-part mb-20 mb-sm-30 mb-xs-20">
                    <h2 class="main_title">About Cryptoz</h2>
                    <span>We Translate Your Dream Into Reality</span>
                </div>
            <ul>
              <li>Low Tax Transaction</li>
              <li>Free BUSD Rewards for Holders</li>
              <li>Trusted Team</li>
              <li>Scalable Blockchain with High Tech</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-1 order-md-2">
        <div class="about-img text-right text-md-center fadeInLeft">
          <img src="{{ asset('images/about-img.svg') }}" alt="cryptoz">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About section end -->

<!-- Site Services Block Start -->
    <section id="services-part" class="menu-section services-part position-r ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="heading-part text-center mb-50 mb-sm-30 mb-xs-20">
                <h2 class="main_title">Services</h2>
                <span>We Translate Your Dream Into Reality</span>
            </div>
          </div>
      </div>
      <div class="ser-feature-block mb_-30 center-sm">
        <div class="row">
          <div class="col-lg-4 col-6 fadeInUpMedium delay1">
            <div class="services-box mb-30">
              <div class="frontend">
                <div class="services-icon services1">
                    <img src="{{ asset('images/services-icon1.svg') }}" alt="cryptoz">
                </div>
                <div class="services-detail">
                    <h3 class="ser-title">Currency Wallet</h3>
                </div>
              </div>
              <div class="backend">
                <div class="services-detail">
                    <div class="ser-subtitle">Cryptoz Wallet App will be ready to store your cryptocurrency asset</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 fadeInUpMedium delay2">
            <div class="services-box mb-30">
              <div class="frontend">
                <div class="services-icon services2">
                  <img src="{{ asset('images/services-icon2.svg') }}" alt="cryptoz">
                </div>
                <div class="services-detail">
                  <h3 class="ser-title">Internal Integration</h3>
                </div>
              </div>
              <div class="backend">
                <div class="services-detail">
                    <div class="ser-subtitle">auto integration runtime blockchain</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 fadeInUpMedium delay3">
            <div class="services-box mb-30">
              <div class="frontend">
                <div class="services-icon services3">
                  <img src="{{ asset('images/services-icon3.svg') }}" alt="cryptoz">
                </div>
                <div class="services-detail">
                  <h3 class="ser-title">Security Storage</h3>
                </div>
              </div>
              <div class="backend">
                <div class="services-detail">
                    <div class="ser-subtitle">Store your most valuable NFTs on the blockchain</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 fadeInUpMedium delay4">
            <div class="services-box mb-30">
              <div class="frontend">
                <div class="services-icon services3">
                  <img src="{{ asset('images/services-icon4.svg') }}" alt="cryptoz">
                </div>
                <div class="services-detail">
                  <h3 class="ser-title">Reliable & Low Cost</h3>
                </div>
              </div>
              <div class="backend">
                <div class="services-detail">
                    <div class="ser-subtitle">Low Cost on Each Transaction on the Blockchain</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 fadeInUpMedium delay5">
            <div class="services-box mb-30">
              <div class="frontend">
                <div class="services-icon services1">
                  <img src="{{ asset('images/services-icon5.svg') }}" alt="cryptoz">
                </div>
                <div class="services-detail">
                  <h3 class="ser-title">BUSD Rewards</h3>
                </div>
              </div>
              <div class="backend">
                <div class="services-detail">
                    <div class="ser-subtitle">Free BUSD rewards for holders</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 fadeInUpMedium delay6">
            <div class="services-box mb-30">
              <div class="frontend">
                <div class="services-icon services2">
                  <img src="{{ asset('images/services-icon6.svg') }}" alt="cryptoz">
                </div>
                <div class="services-detail">
                  <h3 class="ser-title">Experts Support</h3>
                </div>
              </div>
              <div class="backend">
                <div class="services-detail">
                    <div class="ser-subtitle">24 hours a day for Customer Support</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- Site Services Block End -->

<!-- Tokensale section start -->
<section id="tokensale-part" class="tokensale-part position-r ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 fadeInLeft">
        <div class="tokensale-detail pb-md-30">
          <div class="tokensale-detail-inner">
            <div class="heading-part mb-20 mb-sm-30 mb-xs-20">
                    <h2 class="main_title">Tokenomic</h2>
                </div>
            <ul class="mt-30">
              <li><span class="color1"></span>4% Research & Development</li>
              <li><span class="color2"></span>4% Marketing Fund</li>
              <li><span class="color3"></span>4% Airdrop</li>
              <li><span class="color5"></span>84% Liquidity Pool</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-right center-md">
        <div class="token-graph">
          <div class='donut'>
                <div data-lcolor="#f8c04e">4</div>
                <div data-lcolor="#61f89f">4</div>
                <div data-lcolor="#5ad6f8">4</div>
                <div data-lcolor="#f85d77">84</div>
              </div>
              <div class="graph-logo">
                <img src="{{ asset('images/graph-logo.png') }}" alt="cryptoz">
              </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tokensale section end -->

<!-- Roadmap section start -->
<section id="roadmap-part" class="menu-section roadmap-part position-r ptb-100">
      <div class="container">
          <div class="row" style="height:400px">
            &nbsp;
            </div>
            </div>
        </div>
    </section>
    <!-- Roadmap section end -->
@stop
