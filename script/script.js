let body = document.getElementById("body");
function darkmode(){
    body.classList.toggle("dark")
}

const button = document.getElementById("button");
button.addEventListener("click", function ubah(){
    const paragraf = document.querySelector("#paragraf")
    if(paragraf.style.display === "none" && paragraf.style.color === "rgba(113, 50, 0, 0.8)"){
        paragraf.style.display = "block"
    }
    else{
        paragraf.style.display = "none"
    }
})