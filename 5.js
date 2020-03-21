function cetak_gambar(jumlah) {
    let lg = ''

    let lg2 = ''
    for (let n = 0; n < jumlah; n++) {
        lg += '+ '
    }
    console.log(lg)
    for (let a = 0; a < jumlah - 2; a++) {
        let lg1 = ''
        for (let n = 0; n < jumlah - 2; n++) {
            if (n % 2 == 0) {
                lg1 += '= ='
            } else {
                lg1 += ' + '
            }

        }
        console.log(lg1)
    }

    for (let n = 0; n < jumlah; n++) {
        lg2 += '+ '
    }
    console.log(lg2)
}

return cetak_gambar(5)