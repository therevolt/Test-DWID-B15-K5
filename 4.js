function cetak(jumlah) {
    let karakter = 'abcdefghijklmnopqrstuvwxyz0123456789';
    let panjang = karakter.length;
    let result = ''
    for (let i = 1; i <= jumlah; i++) {
        for (let n = 0; n < 32; n++) {
            result += karakter.charAt(Math.floor(Math.random() * panjang));
        }
        console.log(result)
        result = '';
    }
    // for (var i = 0; i < jumlah; i++) {
    //     console.log(result)
    // }
    // return result;
}

return cetak(3)