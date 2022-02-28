<div class="">


<nav class="">

 <div class="text-center">
    <label for="touch"><span class="text-black bg-white rounded-full shadow-sm"><i class="fa-solid fa-ellipsis-vertical"></i></span></label>
    <input type="checkbox" id="touch">

    <ul class="slide">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Lorem Ipsum</a></li>
    </ul>
 </div>

</nav>
</div>

<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // Add Event Listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
