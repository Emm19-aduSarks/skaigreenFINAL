const imageInput = document.getElementById("image-input");
const uploadImageButton = document.querySelector(".upld-img-ml");
const imageContainer = document.querySelector(".image-container");

uploadImageButton.addEventListener("click", () => {
    imageInput.click();
});

imageInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            const img = document.createElement("img");
            img.src = e.target.result;
            imageContainer.innerHTML = "";
            imageContainer.appendChild(img);
        };
        reader.readAsDataURL(file);
    }
});

$(document).ready(function() {
    $('.upld-img-ml').click(function() {
      $('#image-input').click();
    });
  
    $('#image-input').change(function() {
      var input = this;
      var url = window.URL || window.webkitURL;
      var img = new Image();
      img.onload = function() {
        $('.image-container').css('background-image', 'url(' + url.createObjectURL(input.files[0]) + ')');
        $('.upld-img-ml').hide();
      }
      img.src = url.createObjectURL(input.files[0]);
    });
  });
  