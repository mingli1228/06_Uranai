// inputNameは、入力してもらった名前（phpのデータ）なのでここに記述できずresult.phpで定義
const chars = [...inputName];
console.log(chars);
let totalStrokes = 0;

for (i = 0; i < chars.length; i++) {
  fetch(`https://kanjiapi.dev/v1/kanji/${chars[i]}`)
    .then((res) => res.json())
    .then((data) => {
      totalStrokes += data.stroke_count;
      console.log(`${chars}の画数：${data.stroke_count}`);
      console.log(`現在の合計：${totalStrokes}`);
      $("#kakusu").html(`総画数：${totalStrokes}`);
    })

    .catch((err) => {
      console.error("通信エラー:", err);
    });
}

// function howMuchStrokes{
// }

// fetch("https://kanjiapi.dev/v1/kanji/市")
//   .then((res) => res.json())
//   .then((data) => {
//     console.log(data.stroke_count);
//   })
//   .catch((err) => {
//     console.error("通信エラー:", err);
//   });
