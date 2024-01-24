function showImage(category, event) {
    event.preventDefault();

    var img = document.createElement("img");

    switch (category) {
        case "kitchen":
            img.src = "/assets/kitchen.jpg";
            break;
        case "living":
            img.src = "/assets/living.jpg";
            break;
        case "bedroom":
            img.src = "/assets/bedroom.jpg";
            break;
        case "dining":
            img.src = "/assets/dining.jpg";
            break;
        case "bathroom":
            img.src = "/assets/bathroom.jpg";
            break;
        default:
            img.src = "/assets/bathroom.jpg";
            break;
    }

    var imageContainer = document.getElementById("image-container");
    imageContainer.innerHTML = "";
    imageContainer.appendChild(img);
}
