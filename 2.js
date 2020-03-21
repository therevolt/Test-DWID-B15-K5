function hand_shake(orang) {
    let jmlh = 0
    for (let i = 0; i < orang; i++) {
        jmlh += i
    }
    return jmlh
}

console.log("Jumlah Jabat Tangan Yang Terjadi : " + hand_shake(6))