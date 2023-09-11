const textBlocks = document.querySelectorAll(".text-block");
const lastTextBlock = textBlocks[textBlocks.length - 1];
const imageContainer = document.querySelector("#image-container");
const images = document.querySelectorAll("img");
const windowHeight = window.innerHeight;

// correct image sticky
imageContainer.style.setProperty(
  "height",
  `calc(100% - ${lastTextBlock.offsetHeight}px - 2.4rem)`
);

// display wanted image on scroll
document.addEventListener("scroll", () => {
  for (const textBlock of textBlocks) {
    const distanceFromBottom =
      windowHeight - textBlock.getBoundingClientRect().top;
    const dataText = textBlock.getAttribute("data-text");
    const associatedImage = [...images].find(
      (image) => image.getAttribute("data-image") === dataText
    );
    
    if (distanceFromBottom > 150) {
      associatedImage.style.opacity = (distanceFromBottom - 150) / 100;
    } else {
      associatedImage.style.opacity = 0;
    }
  }
});
