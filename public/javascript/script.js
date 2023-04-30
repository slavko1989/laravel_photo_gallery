let mainImage = document.getElementById("main-image");
let image = document.querySelectorAll(".image");

for(let i = 0; i < image.length; i++){
	image[i].addEventListener("click",function(){
		mainImage.src = this.src
	})
}