document.querySelectorAll(".carousel").forEach(carousel => {
    const items = carousel.querySelectorAll(".carousel_item");
    let currentindex = 0;

    const buttonsHtml = Array.from(items, () =>{
        return `<span class="carousel_button"></span>`;
    });
    carousel.insertAdjacentHTML("beforeend", 
    `<div class="carousel_nav">
        ${buttonsHtml.join("")}
    </div>`);
    const buttons = carousel.querySelectorAll(".carousel_button");
    function updatecarouselimage(index){
        items.forEach(item => item.classList.remove("carousel_item--selected"));
        buttons.forEach(btn => btn.classList.remove("carousel_button--selected"));
        items[index].classList.add("carousel_item--selected");
        buttons[index].classList.add("carousel_button--selected");
    }

    buttons.forEach((button, i) =>{
        button.addEventListener("click", () =>{
            currentindex = i;
            updatecarouselimage(currentindex);
        });
    });
    carousel.addEventListener("click", (e) =>{
        const rect = carousel.getBoundingClientRect();
        const x = e.clientX - rect.left;

        if (x < rect.width / 2){
            currentindex = (currentindex - 1 + items.length % items.length);
        }else{
            currentindex = (currentindex + 1) % items.length;
        }
        updatecarouselimage(currentindex);
    });
    updatecarouselimage(0);
});