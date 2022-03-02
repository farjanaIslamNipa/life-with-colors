<div class="relative z-10">


<nav class="">

 <div class="text-center">
    <label for="touch"><span class="text-primary text-2xl bg-secondary rounded-full shadow-sm"><i class="fa-solid fa-ellipsis-vertical"></i></span></label>
    <input type="checkbox" id="touch">

    <ul class="slide">
      <li><a class="text-red-600 font-bold" href="#">Featured</a></li>
      <li><a class="text-teal-500 font-bold" href="#">Latest</a></li>
      <li><a class="text-yellow-600 font-bold" href="#">Contemporary</a></li>
      <li><a class="text-purple-700 font-bold" href="#">Story</a></li>
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
