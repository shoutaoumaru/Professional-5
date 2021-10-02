<?php
 /* Template Name: cace
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>事例紹介 | 士業テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/logo-animation.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
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
    <main id="main-contents" class="c-cace">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service/service.jpg" alt="">
        </div>
        <h2 class="c-title">
          <span class="en">cace</span>
          <span class="ja">事例紹介</span>
        </h2>
      </section>
      <!-- /.c-topview -->
      <section id="cace" class="c-cace-section">
        <div class="c-container">
          <h2 class="c-sub-title">
            <p class="c-txt-lr">解決事例紹介</p>
          </h2>
          <div class="c-cace__list">
            <ul>
              <li class="c-cace__item">
                <h3 class="c-cace__item__tit view-sp">
                  <p class="c-txt-md">離婚問題</p>
                </h3>
                <div class="c-cace__img-wrap">
                  <div class="c-cace__img"><img src="<?php echo get_template_directory_uri(); ?>/images/service/rikon.jpg" alt="">
                  </div>
                </div>
                <div class="c-cace__txt">
                  <h3 class="c-cace__item__tit view-pc">
                    <p class="c-txt-md">離婚問題</p>
                  </h3>
                  <div class="cace">
                    <span>ご相談</span>
                    <p class="c-txt-sm">夫が2名と不倫、夫は不倫を否定し離婚を拒否、不倫発覚後も夫の母親は不倫は嫁のせいだと主張していた事例
                    </p>
                  </div>
                  <div class="result">
                    <span>結果</span>
                    <p class="c-txt-sm">夫からは慰謝料と財産分与との合計で約500万円、親権、養育費を得て解決
                      不倫相手2人に訴訟を提起し、合計で約500万円の慰謝料を得て解決<br>結果総額1,000万円程度の金銭を持って再出発が可能となった。
                    </p>
                  </div>
                </div>
              </li>
              <li class="c-cace__item">
                <h3 class="c-cace__item__tit view-sp">
                  <p class="c-txt-md">交通事故</p>
                </h3>
                <div class="c-cace__img-wrap">
                  <div class="c-cace__img"><img src="<?php echo get_template_directory_uri(); ?>/images/service/car-ac.jpg" alt="">
                  </div>
                </div>
                <div class="c-cace__txt">
                  <h3 class="c-cace__item__tit view-pc">
                    <p class="c-txt-md">交通事故</p>
                  </h3>
                  <div class="cace">
                    <span>ご相談</span>
                    <p class="c-txt-sm">社用車の運転中事故を起こした加害者が、無保険であり、かつ、行方不明になった事案。当事務所は被害者側を受任。
                    </p>
                  </div>
                  <div class="result">
                    <span>結果</span>
                    <p class="c-txt-sm">会社から示談金として修理費用などを支払わせることに成功。
                    </p>
                  </div>
                </div>
              </li>
              <li class="c-cace__item">
                <h3 class="c-cace__item__tit view-sp">
                  <p class="c-txt-md">相続問題</p>
                </h3>
                <div class="c-cace__img-wrap">
                  <div class="c-cace__img"><img src="<?php echo get_template_directory_uri(); ?>/images/service/service-3.jpg" alt="">
                  </div>
                </div>
                <div class="c-cace__txt">
                  <h3 class="c-cace__item__tit view-pc">
                    <p class="c-txt-md">相続問題</p>
                  </h3>
                  <div class="cace">
                    <span>ご相談</span>
                    <p class="c-txt-sm">
                      病気で早くに妻が死去し、相続が発生。妻の夫より妻の両親に対し、妻名義の口座の定期預金や生命保険金が引き出されており、これらを義父母が領得したとして返還を請求。<br>
                      義父母らは、それらはそもそも自分達が出捐したものであり、また金銭も妻の治療費、孫の賠償請求を受けた事案。 当方は義父母側を受任。
                    </p>
                  </div>
                  <div class="result">
                    <span>結果</span>
                    <p class="c-txt-sm">訴訟にて、妻の夫に対する数千万円の支払請求をされるが、一部返金することで和解が成立。
                    </p>
                  </div>
                </div>
              </li>
              <li class="c-cace__item">
                <h3 class="c-cace__item__tit view-sp">
                  <p class="c-txt-md">企業</p>
                </h3>
                <div class="c-cace__img-wrap">
                  <div class="c-cace__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/top-view_4@pc.jpg" alt="">
                  </div>
                </div>
                <div class="c-cace__txt">
                  <h3 class="c-cace__item__tit view-pc">
                    <p class="c-txt-md">企業</p>
                  </h3>
                  <div class="cace">
                    <span>ご相談</span>
                    <p class="c-txt-sm">コンサルティング会社へ契約終了を申し出たところ、未払い報酬を請求された事例<br>
                      建築業者が、広告に関するコンサルティング契約を、不動産住宅販売専門を謳うコンサルタント会社と締結。<br>
                      その後、建築業者が契約終了を申し出たところ、コンサル会社から約３００万円の支払いを求めて訴訟提起されたもの。
                      当方は建築業者側を受任。
                    </p>
                  </div>
                  <div class="result">
                    <span>結果</span>
                    <p class="c-txt-sm">
                      訴訟にて、建築業者からコンサル会社へ金銭を支払うことで和解成立。<br>また、和解の条件として、建築業者代表者が、コンサル会社代表者へ直接の謝罪を求め、その場で謝罪させることができました。
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- /.c-cace-item -->
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