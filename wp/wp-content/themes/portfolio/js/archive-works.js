// jQuery を別の変数名 `jq` に代入
var jq = jQuery.noConflict();

// 表示するアイテム数を設定
const itemsPerPage = 6;

// 現在のページ番号を保持する変数
let currentPage = 1;

// 現在のフィルターを保持する変数
let currentFilter = 'all';

// 指定されたページのアイテムを表示する関数
function showPage(page, filter = 'all') {
  // すべての作品アイテムを非表示にする
  jq('.works__gallery-item').hide();

  // 指定されたページのアイテムを表示
  let count = 0; // 表示するアイテム数をカウント
  jq('.works__gallery-item').each(function() {
    const termSlug = jq(this).find('a').data('term-slug');
    const current_page = parseInt(jq(this).data('page'));

    // フィルター処理
    if (filter === 'all' || filter === termSlug) {
      if (current_page === page) {
        jq(this).show();
        count++;
      }
    }

    // 1ページに 6 アイテム表示
    if (count >= itemsPerPage) {
      return false; // ループを中断
    }
  });

  // 現在のページ番号とフィルターを更新
  currentPage = page;
  currentFilter = filter;
}

// DOM が読み込まれたときに、1 ページ目のアイテムを表示
jq(document).ready(function() {
  // DOM が読み込まれる前に showPage(1) を実行
  jq(window).on('load', function() {
    showPage(1);
  });

  // フィルターボタンのクリックイベント
  jq('.gallery-btn').click(function() {
    // アクティブクラスの切り替え
    jq('.gallery-btn').removeClass('active');
    jq(this).addClass('active');

    // フィルター処理
    const filter = jq(this).data('filter');

    // 現在のページ番号を 1 に戻す
    currentPage = 1;

    // フィルター処理を適用
    showPage(currentPage, filter);
  });

  
  // ページネーションのクリックイベント
  jq('.pagination a.page-numbers.current').click(function(event) { // セレクタを変更
    event.preventDefault();

    // クリックされたページ番号を取得
    const targetPage = parseInt(jq(this).text());

    // フィルターの現在の値を取得
    const currentFilter = jq('.gallery-btn.active').data('filter'); // 現在のフィルターの値を保存

    // クリックされたページ番号のアイテムを表示
    showPage(targetPage, currentFilter); // 現在のフィルターを適用して表示
  });
});

// ページ読み込み時にデフォルトで "All" フィルターを適用
window.addEventListener('DOMContentLoaded', () => {
  const defaultButton = document.querySelector('.gallery-btn[data-filter="all"]');
  if (defaultButton) {
    defaultButton.click(); // "All" ボタンをクリック
  }
});

// フィルターボタンのクリックイベント
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.gallery-btn').forEach(button => {
    button.addEventListener('click', () => {
      const filter = button.getAttribute('data-filter');

      // アクティブクラスの切り替え
      document.querySelectorAll('.gallery-btn').forEach(btn => {
        btn.classList.remove('active');
      });
      button.classList.add('active');

      // 現在のページ番号を 1 に戻す
      currentPage = 1;

      // フィルター処理を適用
      showPage(currentPage, filter);
    });
  });
});