const btnMenu =document.querySelector(".btn-menu");
const btnBit = document.querySelector(".btn-bit");
const menuBar = document.querySelector(".menubar");

btnMenu.addEventListener("click", () =>{
    menuBar.classList.add("active");
})
btnBit.addEventListener("click",() =>{
    menuBar.classList.remove("active");
})

const iconMedia = document.querySelector(".icon-media");
const blogSearch = document.querySelector(".blog-search");
const openSearch = document.querySelector(".open-search");
const closeSearch = document.querySelector(".close-search");
const blogMedia = document.querySelector(".blog-media");
// console.log(iconMedia,blogSearch,openSearch );

openSearch.addEventListener("click", () =>{
    iconMedia.classList.add("d-none");
    blogSearch.classList.add("active");
    closeSearch.classList.remove("d-none");
    openSearch.classList.add("d-none");
})

closeSearch.addEventListener("click", () => {
    blogSearch.classList.remove("active");

    closeSearch.classList.add("d-none");
    openSearch.classList.remove("d-none");
    setTimeout(() => {
        iconMedia.classList.remove("d-none");

    }, 1000);
});

// const baImages = document.querySelectorAll(".blog-ba .baImages");

// const observer = new IntersectionObserver((entries) => {
//     entries.forEach((entry) => {

//         if (entry.isIntersecting) {
//             const img = entry.target.querySelector(".ba img");
//             const text = entry.target.querySelector(".text-Ba");

//             img?.classList.add("active");
//             text?.classList.add("active");
//         }

//     });
// }, {
//     threshold: 0.5
// });

// baImages.forEach((item) => {
//     observer.observe(item);
// });