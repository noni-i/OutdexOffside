<?php
    require "databaza.php";

    $query= mysqli_query($con,"SELECT * FROM lajmi");
?>

<link rel="stylesheet" href="slides.css">


<section aria-label="top-lajmet">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-buttons="prev">&#x21e6;</button>
        <button class="carousel-button next" data-carousel-buttons="next">&#8680;</button>

        <ul data-slides>
            <?php
                 $increment = 0;
                    while($slides = mysqli_fetch_assoc($query) and $increment < 5){ ?>
                      <li class="slide" <?php if($increment == 0){echo "data-active";} ?>>
                      <a style="width: 400px; display: flex;" href="artikulli.php?id=<?php echo $slides['lajmi_id']?>">
                      <div class="lajm">
                      <img class="fotot-lajmet" style="width: 700px; max-height: 394;" src="<?php echo $slides['lajmi_foto']; ?>">
                      <p class="titujt-lajmet1"><?php echo $slides['lajmi_titull']; ?></p>
                      </div>
                      </a>
                      </li>
                    <?php 
                      $increment++;
                    }
                ?>
            </ul>
        </div>  
</section>

<script>
    

const slides = document.getElementsByClassName('slide');
let currentSlide = 0;
const slideInterval = setInterval(nextSlide, 3000);

function nextSlide() {
  delete slides[currentSlide].dataset.active;
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].dataset.active = true;
  if(currentSlide == slides.length){currentSlide = 0}

  const buttons = document.querySelectorAll("[data-carousel-buttons]")

buttons.forEach(button => {
  button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1
    const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]")

    const activeSlide = slides.querySelector("[data-active]")
    let newIndex = [...slides.children].indexOf(activeSlide) + offset
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0

    slides.children[newIndex].dataset.active = true
    delete activeSlide.dataset.active
  })
})


}

</script>