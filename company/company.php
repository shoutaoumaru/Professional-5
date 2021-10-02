<?php
 /* Template Name: company
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>事務所案内 | 士業テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>

<body>
  <div class="superwrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class="logo__img">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>"><span>事務所案内</span>
                <small>Company</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/business')); ?>"><span>取扱業務</span><small>business</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/cace')); ?>"><span>事例紹介</span><small>Works</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span><small>Recruit</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>News</small></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <!-- <div class="reserve-btn-js">
        <div class="reserve-btn-js__inner">
          <div class="reserve-btn-js__01">
            <span>お</span>
            <span>問</span>
            <span>合</span>
            <span>せ</span>
          </div>
          <div class="reserve-btn-js__02 js-left">
            <div class="tel">
              <a href="tel:092-686-7954">電話で<br>お問い合わせ</a>
            </div>
            <div class="net">
              <a href="#">フォームで<br>お問い合わせ</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- /.reserve-btn -->
    </header>
    <!-- /.header -->
    <main id="main-contents" class="c-company">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/company/company.jpg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">office</span>
          <span class="ja">事務所案内</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section class="c-message">
        <div class="c-container">

          <div class="c-message__wrap">
            <div class="c-message__img">
              <h2 class="c-sub-title">
                <p class="c-txt-lr">代表挨拶</p>
              </h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/ceo_1.jpg" alt="">
            </div>
            <div class="c-message__txt">
              <div class="c-message__desc">
                <p class="c-txt-sm">
                  当事者の方々が紛争に寄せる思いは，人それぞれです。その思いを大切に，一期一会の気持で事件に向き合います。
                </p>
                <p class="c-txt-sm">
                  法的トラブルをお抱えの方、法律相談を希望される方は、是非、当事務所をご利用下さいますようご案内申し上げます。
                  どうぞよろしくお願い申し上げます。
                </p>
              </div>
              <div class="c-message__name">
                <p class="c-txt-md">代表取締役</p>
                <p class="c-txt-md">利部 翔太</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.c-message -->
      <section class="c-policy">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">事務所理念</p>
          </h2>
          <div class="c-policy__desc">
            <p class="c-txt-md">私たちは、依頼者のために、至誠をもって職務を遂行し、公正な社会の実現に寄与すること。
              <br>誠実に職務を遂行し、依頼者と真に向き合った問題解決に努めます。
            </p>
          </div>
        </div>
      </section>
      <!-- /.c-policy -->
      <section class="c-about">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">事務所概要</p>
          </h2>
          <div class="c-about__desc">
            <table>
              <tbody>
                <tr>
                  <th>
                    <span class="c-txt-sm">名称</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">Riv法律事務所</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">設立</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">2001年5月</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">所在地</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">〒812-0011<br>福岡県福岡市博多区3-27-25-9F<br><a
                        href="tel:092-686-7954">TEL:092-686-7954</a></span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">代表者</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">利部 翔太</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">弁護士数</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">3名</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">取扱業務</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">遺言・相続、離婚問題、労働問題、交通事故、借金問題などの一般個人・消費者を依頼者とする法律業務</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="c-about__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-image-1.jpeg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/office.jpg" alt="">
          </div>
        </div>
      </section>
      <!-- /.c-about -->
      <section class="c-access">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">アクセスマップ</p>
          </h2>
          <div class="c-access__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215797!2d130.40662633372042!3d33.58957259174761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1631756601585!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </section>
      <section class="p-contact">
        <div class="p-contact__wrap">
          <h2 class="p-title">
            <span class="en">CONTACT</span>
            <span class="ja">お問い合わせ</span>
          </h2>
          <div class="p-contact__desc">
            以下のフォームまたはお電話等で、まずは気軽にお問い合わせ下さい。
          </div>
          <div class="p-contact__tel">
            <a href="tel:050-3786-1317">Tel:050-3786-1317</a>
          </div>
          <div class="p-contact__form">
            <a class="link-btn" href=" <?php echo esc_url( home_url('/company')); ?>">
              <span class="c-txt-md">お問い合わせフォーム</span></a>
          </div>
        </div>
      </section>
      <!-- /.p-contact -->
    </main>
    <!-- /#main-contents -->
    <?php get_template_part('includes/c-footer'); ?>      
    <!-- /.footer -->
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <!-- <script src="/scripts/main.js"></script> -->
</body>

</html>