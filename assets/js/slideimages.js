document.addEventListener("DOMContentLoaded", function() {
    const textContent = document.getElementById("text-content");
    const image = document.getElementById("image");
  
    const headingImageMap = {
      "Heading 1": "image1.jpg",
      "Heading 2": "image2.jpg",
      "Heading 3": "image3.jpg"
    };
  
    function changeImage() {
      const headings = textContent.getElementsByTagName("h2");
      const scrollTop = textContent.scrollTop;
  
      let currentHeading = null;
      for (let i = 0; i < headings.length; i++) {
        const heading = headings[i];
        const offsetTop = heading.offsetTop;
  
        if (offsetTop <= scrollTop) {
          currentHeading = heading.textContent.trim();
        } else {
          break;
        }
      }
  
      if (currentHeading && headingImageMap.hasOwnProperty(currentHeading)) {
        const imageSrc = headingImageMap[currentHeading];
        image.src = imageSrc;
      }
    }
  
    textContent.addEventListener("scroll", changeImage);
  });
  