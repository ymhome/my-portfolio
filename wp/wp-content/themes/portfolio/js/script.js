// ページ読み込み時に screen-transition を表示するかどうかを判定
jQuery(document).ready(function() {
  // フラグを確認
  if (sessionStorage.getItem('noScreenTransition') === 'true') {
    // screen-transition を非表示
    jQuery('.screen-transition').hide();

    // フラグを削除
    sessionStorage.removeItem('noScreenTransition');

    // screen-transition が非表示の場合は即時に sectionAnime を実行
    sectionAnime(); 
  } else {
    // screen-transition を表示 (必要であれば)
    jQuery('.screen-transition').show(); 
  }
});
// class="screen-transition-none" を持つ要素のクリックイベントを取得
jQuery(document).on('click', '.screen-transition-none', function(event) {
  // screen-transition を非表示にするフラグを設定
  sessionStorage.setItem('noScreenTransition', 'true');
});

// セクションタイトルアニメーション用の関数
function sectionAnime() {
  jQuery(".section__title-en , .slideinBottom , .works-detail__point-content , .slideinLeft").each(function() {
    var elemPos = jQuery(this).offset().top + 50;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass("is_show");
    } else {
      jQuery(this).removeClass("is_show");
    }
  });
}

// DOMContentLoaded イベントと jQuery ready イベントをまとめて処理
jQuery(document).ready(function($) {
  var screenTransition = $('.screen-transition');

  if (screenTransition.length) {
    // 初期状態は非表示
    // screenTransition.hide();

    // ページ読み込み時に1秒かけてfadein
    // screenTransition.fadeIn(1000);

    // 2秒後にfadeout
    setTimeout(function() {
      screenTransition.fadeOut(1000);
    }, 2000);

    // screen-transition が存在する場合は 2 秒後に sectionAnime を実行
    setTimeout(sectionAnime, 2000);
  } else {
    // screen-transition が存在しない場合は即座に sectionAnime を実行
    sectionAnime();
  }

  // スクロール時にアニメーションを再実行 (requestAnimationFrame を使用)
  let scrollAnimation = () => {
    // 最初の3秒間は sectionAnime を実行しない
    if (performance.now() > 3000) {
      sectionAnime();
    }
    window.requestAnimationFrame(scrollAnimation);
  };
  window.requestAnimationFrame(scrollAnimation);
});



// jQuery(document).ready(function($) {
//   var screenTransition = $('.screen-transition');

//   if (screenTransition.length) {
//     // 初期状態は非表示
//     // screenTransition.hide();

//     // ページ読み込み時に1秒かけてfadein
//     // screenTransition.fadeIn(1000);

//     // 2秒後にfadeout
//     setTimeout(function() {
//       screenTransition.fadeOut(1000);
//     }, 2000);
//   }
// });


//  // セクションタイトルアニメ―ション
//  document.addEventListener('DOMContentLoaded', () => {
//   // jQuery を別の変数名 `jq` に代入
//   var jq = jQuery.noConflict();

//   // titleAnime 関数の定義
//   function sectionAnime() {
//     jq(".section__title-en , .slideinBottom , .works-detail__point-content , .slideinLeft").each(function() {
//       var elemPos = jq(this).offset().top + 50;
//       var scroll = jq(window).scrollTop();
//       var windowHeight = jq(window).height();
//       if (scroll >= elemPos - windowHeight) {
//         jq(this).addClass("is_show");
//       } else {
//         jq(this).removeClass("is_show");
//       }
//     });
//   }

//   // 3秒後にアニメーションを実行
//   // setTimeout(sectionAnime, 2000);
//   sectionAnime();

//   // スクロール時にアニメーションを再実行 (requestAnimationFrame を使用)
//   let scrollAnimation = () => {
//     // 最初の3秒間は sectionAnime を実行しない
//     if (performance.now() > 3000) {
//       sectionAnime();
//     }
//     window.requestAnimationFrame(scrollAnimation);
//   }
//   window.requestAnimationFrame(scrollAnimation);
// });

  


// マウスストーカー用のdivを取得
const stalker = document.getElementById('stalker'); 

// マウスに追従させる処理
document.addEventListener('mousemove', function (e) {
    stalker.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
});

// リンク要素にホバーイベントリスナーを追加
document.querySelectorAll('a, .toppage__header, .toppage__btn, .gallery-btn, .hamburger-menu, .form-btn , .works-detail__visit-btn').forEach(link => {
  link.addEventListener('mouseover', () => {
    // リンクホバー時にマウスストーカーを非表示にする
    stalker.style.display = 'none';
  });

  link.addEventListener('mouseout', () => {
    // ホバーが解除されたらマウスストーカーを表示する
    stalker.style.display = 'block';
  });
});





jQuery(document).ready(function($) {
    // ハンバーガーメニューのクリックイベント
    $(".hamburger-btn").click(function () {
      $(this).toggleClass('active');
      $(".hamburger-nav").toggleClass('panelactive');
    });
  
    // ハンバーガーメニューのリンクをクリックした際のイベント
    $(".hamburger-nav-link").click(function () {
      $(".hamburger-btn").removeClass('active');
      $(".hamburger-nav").removeClass('panelactive');
    });
    
  });

//コンタクトフォーム
  document.addEventListener('DOMContentLoaded', function() {
    var emailField = document.querySelector('input[name="your-email"]');
    
    if (emailField) {
        emailField.addEventListener('input', function() {
            this.value = this.value.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
                return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
            });
        });
    }
  });
  

  // acceptance-checkboxクラスを持つチェックボックス要素を取得
const checkbox = document.querySelector('.acceptance-checkbox');
// form-btnクラスを持つ送信ボタン要素を取得
const button = document.querySelector('.form-btn');

// チェックボックスの状態が変化した時の処理
checkbox.addEventListener('change', () => {
  if (checkbox.checked) {
    // チェックが入ったらactiveクラスを追加
    button.classList.add('active');
  } else {
    // チェックが外れたらactiveクラスを削除
    button.classList.remove('active');
  }
});