/**
 * Function to add rollover effect to an image.
 * @param {string} imageId - The ID of the image element.
 * @param {string} hoverSrc - The image source when hovered.
 * @param {string} originalSrc - The original image source.
 */
function addRolloverEffect(imageId, hoverSrc, originalSrc) {
    const imgElement = document.getElementById(imageId);

    if (imgElement) {
      // Change image source on hover
      imgElement.addEventListener("mouseover", () => {
        imgElement.src = hoverSrc;
      });

      // Revert image source on mouse out
      imgElement.addEventListener("mouseout", () => {
        imgElement.src = originalSrc;
      });
    } else {
      console.error(`Element with id "${imageId}" not found.`);
    }
  }

  // Initialize rollover effects for sports training images
  window.onload = function () {
    addRolloverEffect(
      "cyclingImage",
      "{{ asset('frontend/images/service images/sports/cyclingHover.jpg') }}",
      "{{ asset('frontend/images/service images/sports/cycling.jpg') }}"
    );
    addRolloverEffect(
      "runningImage",
      "{{ asset('frontend/images/service images/sports/runningHover.jpg') }}",
      "{{ asset('frontend/images/service images/sports/running.jpg') }}"
    );
    addRolloverEffect(
      "triathlonImage",
      "{{ asset('frontend/images/service images/sports/triathlonHover.jpg') }}",
      "{{ asset('frontend/images/service images/sports/triathlon.jpg') }}"
    );

    addRolloverEffect(
      "trainerImage",
      "{{ asset('frontend/images/Rollover images/RebaSmith-Rollover.jpg') }}",
      "{{ asset('frontend/images/service images/yoga/RebaSmith.jpg') }}"
    );

    addRolloverEffect(
      "volleyballImage",
      "{{ asset('frontend/images/service images/sports/volleyballHover.jpg') }}",
      "{{ asset('frontend/images/service images/sports/volleyball.jpg') }}"
    );

    addRolloverEffect(
      "blogImage1",
      "{{ asset('frontend/images/blogimage1hover.jpg') }}",
      "{{ asset('frontend/images/blogimage1.jpeg') }}"
    );

    addRolloverEffect(
      "blogImage2",
      "{{ asset('frontend/images/blogimage2hover.jpg') }}",
      "{{ asset('frontend/images/blogimage2.jpg') }}"
    );

    addRolloverEffect(
      "blogImage3",
      "{{ asset('frontend/images/blogimage3hover.jpg') }}",
      "{{ asset('frontend/images/blogimage3.jpg') }}"
    );

    addRolloverEffect(
      "blogImage4",
      "{{ asset('frontend/images/blogimage4hover.jpg') }}",
      "{{ asset('frontend/images/blogimage4.jpg') }}"
    );

    addRolloverEffect(
      "blogImage5",
      "{{ asset('frontend/images/blogimage5hover.jpg') }}",
      "{{ asset('frontend/images/blogimage5.jpg') }}"
    );

    addRolloverEffect(
      "blogImage6",
      "{{ asset('frontend/images/blogimage6hover.jpg') }}",
      "{{ asset('frontend/images/blogimage6.webp') }}"
    );

    addRolloverEffect(
      "bootcamp-image",
      "{{ asset('frontend/images/home/bootcamp-services-hover.jpg') }}",
      "{{ asset('frontend/images/home/bootcamp-services.jpeg') }}"
    );

    addRolloverEffect(
      "yoga-image",
      "{{ asset('frontend/images/home/yoga_services_hover.jpg') }}",
      "{{ asset('frontend/images/home/yoga_services.jpg') }}"
    );

    addRolloverEffect(
      "basketball-image",
      "{{ asset('frontend/images/home/Basketball_hover.jpg') }}",
      "{{ asset('frontend/images/home/Basketball.jpeg') }}"
    );

    addRolloverEffect(
      "logoID",
      "{{ asset('frontend/images/home/logo-hover.png') }}",
      "{{ asset('frontend/images/home/logo.png') }}"
    );
  };
