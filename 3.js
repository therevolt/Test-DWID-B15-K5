function betweenDays(dari, sampai) {
    let pisah = dari.split('-')
    let pisah2 = sampai.split('-')
    let tgldari = pisah[2].replace('0', '')
    let tglsampai = pisah2[2].replace('0', '')
    let arr = []
    for (let i = tgldari; i <= tglsampai; i++) {
        let cetak = '2019-11-0' + i
        arr.push(cetak)
    }
    return arr
}

console.log(betweenDays('2019-11-01', '2019-11-05'))