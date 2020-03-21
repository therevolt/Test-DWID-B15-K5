function ganti_kata(kata, a, o) {
  let pecah = kata.split("");
  for (let i = 0; i < pecah.length; i++) {
    if (pecah[i] == a) {
      pecah[i] = o
    } else if (pecah[6] == a) {
      pecah[6] = 'e'
    }
    // console.log(pecah)
  }
  let cetak = pecah.join("");
  return cetak;
}

console.log(ganti_kata("Purwakarta", "a", "o"));