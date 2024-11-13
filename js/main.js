document.addEventListener("DOMContentLoaded", () => {
  const sliderContainer = document.querySelector(".uk-slider-items");
  const sliderElement = document.querySelector("[uk-slider]");

  function updateCenterSlide() {
    const items = Array.from(sliderContainer.children); // スライド全体を配列として取得
    const activeIndexes = items
      .map((item, index) => (item.classList.contains("uk-active") ? index : -1))
      .filter((index) => index !== -1);

    if (activeIndexes.length > 0) {
      // 現在表示されているスライドの中央インデックスを計算
      const centerIndex = activeIndexes[Math.floor(activeIndexes.length / 2)];

      // 全てのスライドからクラスを削除
      items.forEach((item) => item.classList.remove("highlight-center"));

      // 中央のスライドにクラスを追加
      if (items[centerIndex]) {
        items[centerIndex].classList.add("highlight-center");
      }
    }
  }

  // 初期表示とスライドが切り替わる度に中央スライドを更新
  updateCenterSlide();
  sliderElement.addEventListener("beforeitemshow", updateCenterSlide);
});
