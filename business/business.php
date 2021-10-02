<?php
 /* Template Name: business
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>取扱業務 | 士業テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/logo-animation.min.css">
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
    <main id="main-contents" class="c-business">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/values.jpg" alt="">
        </div>
        <h2 class="c-title">
          <p class="en">Handling business</p>
          <p class="ja">取扱業務</p>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section id="business01" class="c-business-item">
        <h2 class="c-subTitle">
          <p class="en">divorce</p>
          <p class="ja">離婚問題</p>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-image-3.jpeg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/rikon.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <h2 class="c-txt-md">料金の目安</h2>
            <table>
              <tbody>
                <tr>
                  <th>
                    <span class="c-txt-sm">相談料</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">30分5500円（税込）</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">着手金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">20万円</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">報酬金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">１７．６％</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- /#business01 -->
      <section id="business02" class="c-business-item">
        <h2 class="c-subTitle">
          <p class="en">Traffic accident</p>
          <p class="ja">交通事故</p>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-7.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/car-ac.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <h2 class="c-txt-md">料金の目安</h2>
            <table>
              <tbody>
                <tr>
                  <th>
                    <span class="c-txt-sm">相談料</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">30分5500円（税込）</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">着手金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">20万円</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">報酬金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">１７．６％</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- /#business02 -->
      <section id="business03" class="c-business-item">
        <h2 class="c-subTitle">
          <p class="en">inheritance</p>
          <p class="ja">相続問題</p>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-1.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-3.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <h2 class="c-txt-md">料金の目安</h2>
            <table>
              <tbody>
                <tr>
                  <th>
                    <span class="c-txt-sm">相談料</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">30分5500円（税込）</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">着手金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">20〜30万円（税込）</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">成果報酬金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">１７．６％（税込）</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- /#business03 -->
      <section id="business04" class="c-business-item">
        <h2 class="c-subTitle">
          <p class="en">bankruptcy</p>
          <p class="ja">自己破産</p>
        </h2>
        <div class="c-business-item__wrap">
          <div class="c-business-item__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/news/news.jpg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/service/service-5.jpg" alt="">
          </div>
          <div class="c-business-item__desc">
            <h2 class="c-txt-md">料金の目安</h2>
            <table>
              <tbody>
                <tr>
                  <th>
                    <span class="c-txt-sm">相談料</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">30分5500円（税込）</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">着手金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">20万円（税込）</span>
                  </td>
                </tr>
                <tr>
                  <th>
                    <span class="c-txt-sm">報酬金</span>
                  </th>
                  <td>
                    <span class="c-txt-sm">10万円（税込）</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- /#business04 -->
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
</body>

</html>