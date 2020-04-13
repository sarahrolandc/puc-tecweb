function lightUp() {
    src = document.getElementById("lampada").src

    if (src == "https://i.stack.imgur.com/ybxlO.jpg"){
        document.getElementById("lampada").src="https://i.stack.imgur.com/b983w.jpg"
    }
    else {
        document.getElementById("lampada").src="https://i.stack.imgur.com/ybxlO.jpg"
    }
}