$(document).ready(function(){


	$('.openNewItemModal').on('click',function(){
		$("#previewImage").attr('src','https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png');
	});
});
var loadFile = function(event) {
	var reader = new FileReader();
	reader.onload = function(){
		var output = document.getElementById('previewImage');
		output.src = reader.result;
	};
	reader.readAsDataURL(event.target.files[0]);
};
