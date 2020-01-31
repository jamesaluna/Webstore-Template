var uploadImage = function (target) {
    if (target.files && target.files[0]) {
        let reader = new FileReader();

        reader.onload = function(e) {
            target.parentElement.setAttribute('data', e.target.result);
        }
        
        reader.readAsDataURL(target.files[0]);
    }
}