function hide(){
  var x = document.getElementById("berita");
  var y = document.getElementById("txt_hide");
  if (x.style.display === "none") {
    x.style.display = "block";
	y.innerHTML = "Sembunyikan berita..."
  } else {
    x.style.display = "none";
	y.innerHTML = "Tampilkan berita..."
  }  
	
}
