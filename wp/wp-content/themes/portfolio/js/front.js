





window.addEventListener('scroll', function() {
  var hamburgerMenu = document.querySelector('.toppage__hamburger-menu'); // ハンバーガーメニューのセレクタ
  var leadSection = document.querySelector('.lead.section'); // ターゲットセクションのセレクタ
  var footer = document.querySelector('footer'); // フッターのセレクタ

  // スクロール位置によってハンバーガーメニューの表示/非表示を切り替え
  if (window.pageYOffset >= leadSection.offsetTop && window.pageYOffset <= footer.offsetTop) {
    hamburgerMenu.classList.add('show');
  } else {
    hamburgerMenu.classList.remove('show');
  }
});




let prevScrollPercent = 1; // 初期値は 1 に設定

window.addEventListener('scroll', () => {
  const leadSection = document.querySelector('.lead');

  if (leadSection) {
    const rect = leadSection.getBoundingClientRect();

    // 画面の上端からセクションがどれだけ表示されているかを計算
    const scrollPercent = (rect.top + rect.height) / rect.height;

    // scrollPercent が減少している場合のみ変化させる
    if (scrollPercent < prevScrollPercent && scrollPercent > 0.) { 
      leadSection.classList.add('active');
    } else {
      leadSection.classList.remove('active');
    }

    // 現在の scrollPercent を保存
    prevScrollPercent = scrollPercent;
  }
});




window.addEventListener('scroll', function() {
  var elements = document.querySelectorAll('.fadein');

  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    var rect = element.getBoundingClientRect();

    // 要素の上端が画面の中央より上、かつ、要素の下端が画面の中央より下にある場合
    if (rect.top < window.innerHeight / 2 && rect.bottom > window.innerHeight / 2) {
      element.classList.add('animate');
    }
  }
});







document.addEventListener('DOMContentLoaded', () => {
  const filterGalleryItems = (filter) => {
    // ギャラリーアイテムのフィルタリング
    document.querySelectorAll('.works__gallery-item').forEach(item => {
      const termSlug = item.querySelector('a').getAttribute('data-term-slug');

      if (filter === 'all' || filter === termSlug) {
        item.style.display = 'block'; // 表示する
      } else {
        item.style.display = 'none'; // 非表示にする
      }
    });

    // フィルタリング後に表示制限を行う
    
      // メディアクエリで表示制限を変更
      let maxVisibleItems = 6; // デフォルトは 6
      if (window.matchMedia('(max-width: 768px)').matches) {
        maxVisibleItems = 3; // メディアクエリが適用された場合は 3
      }

      let count = 0;
      document.querySelectorAll('.works__gallery-item').forEach(item => {
        const termSlug = item.querySelector('a').getAttribute('data-term-slug');

        if (filter === 'all' || filter === termSlug) {
          if (count < maxVisibleItems) { 
            item.style.display = 'block'; 
            count++;
          } else {
            item.style.display = 'none'; 
          }
        } else {
          item.style.display = 'none'; 
        }
      });
    } 
  

  document.querySelectorAll('.gallery-btn').forEach(button => {
    button.addEventListener('click', () => {
      const filter = button.getAttribute('data-filter');

      // アクティブクラスの切り替え
      document.querySelectorAll('.gallery-btn').forEach(btn => {
        btn.classList.remove('active');
      });
      button.classList.add('active');

      filterGalleryItems(filter); 
    });
  });

  // リサイズイベント時にフィルタリング処理を実行
  window.addEventListener('resize', () => {
    const activeButton = document.querySelector('.gallery-btn.active');
    const filter = activeButton ? activeButton.getAttribute('data-filter') : 'all'; 
    filterGalleryItems(filter);
  });

  // 初期表示時のフィルタリング
  filterGalleryItems('all');
});


// ページ読み込み時にデフォルトで "All" フィルターを適用
window.addEventListener('DOMContentLoaded', () => {
  const defaultButton = document.querySelector('.gallery-btn[data-filter="all"]');
  if (defaultButton) {
    defaultButton.click(); // "All" ボタンをクリック
  }
});







// document.addEventListener('DOMContentLoaded', () => {
//   const galleryItems = Array.from(document.querySelectorAll('.works__gallery-item'));
//   const filterButtons = document.querySelectorAll('.gallery-btn');

//   const filterGalleryItems = (filter) => {
//     // 1. 全ての要素を一旦表示
//     galleryItems.forEach(item => {
//       item.style.display = 'block';
//     });

//     // 2. フィルターに一致しない要素を非表示にする
//     galleryItems.forEach(item => {
//       const termSlug = item.dataset.termSlug;
//       if (filter === 'all' || filter === termSlug) {
//         item.style.display = 'none';
//       }
//     });


//     // 3. 表示件数制限 (トップページのみ)
//     if (document.location.pathname === '/') {
//       let visibleCount = 0;
//       const isSmallScreen = window.matchMedia('(max-width: 768px)').matches;
//       const maxVisibleItems = isSmallScreen ? 3 : 6;

//       galleryItems.forEach(item => {
//           // フィルターに一致していて、かつ表示数が制限以内であれば表示
//           if ( (filter === 'all' || filter === termSlug) && visibleCount < maxVisibleItems)
//           {
//               item.style.display = 'block';
//               visibleCount++;

//           } else if (filter === termSlug) { // フィルターに一致しない要素は非表示
//             item.style.display = 'none';

//           }  else
//           {

//               item.style.display = 'none'; // 制限を超えた場合は非表示
//           }

//       });

//     }
//   };
//   filterButtons.forEach(button => {
//     button.addEventListener('click', () => {
//       // 他のボタンから active クラスを削除
//       filterButtons.forEach(btn => btn.classList.remove('active'));
//       button.classList.add('active'); // クリックされたボタンに active クラスを追加

//       filterGalleryItems(button.dataset.filter);
//     });
//   });

//   window.addEventListener('resize', () => {
//     const activeButton = document.querySelector('.gallery-btn.active');
//     const filter = activeButton ? activeButton.dataset.filter : 'all';
//     filterGalleryItems(filter);
//   });

//   // 初期表示
//   const defaultButton = document.querySelector('.gallery-btn[data-filter="all"]');
//   if (defaultButton) {
//     defaultButton.classList.add('active'); // all ボタンに active クラスを追加
//   }
//   filterGalleryItems('all');
// });

