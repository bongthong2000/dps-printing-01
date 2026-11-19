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

let isAnimating = false;



openSearch.addEventListener("click", () =>{
    if(isAnimating) return;
    isAnimating = true;
    iconMedia.classList.add("d-none");
    blogSearch.classList.add("active");
    closeSearch.classList.remove("d-none");
    openSearch.classList.add("d-none");
})

closeSearch.addEventListener("click", () => {
    if(isAnimating) return;
    isAnimating = true;
    blogSearch.classList.remove("active");

    closeSearch.classList.add("d-none");
    openSearch.classList.remove("d-none");
    setTimeout(() => {
        iconMedia.classList.remove("d-none");

    }, 500);
});

blogSearch.addEventListener("transitionend", (event) => {

    if (event.propertyName !== "width") return;

    if (!blogSearch.classList.contains("active")) {
        iconMedia.style.display = "flex";
    }
    isAnimating = false;

});







// openSearch.addEventListener("click", () =>{
//   if (isAnimating) return;

//     isAnimating = true;

//     media.classList.add ("hide");
//     searching.classList.add("active");
//     bitSearch.classList.remove("hide");
//     openSearch.classList.add("hide");
// })
// bitSearch.addEventListener("click", () =>{

//   if (isAnimating) return;

//     isAnimating = true;

//     searching.classList.remove("active");
//     bitSearch.classList.add("hide");
//     openSearch.classList.remove("hide");
//     setTimeout(() => {
//         media.classList.remove("hide");
//     }, 1000);
// })














// window.addEventListener("load", () => {
//     const groups = document.querySelectorAll(".sliders");

//     console.log(
//         "Group 1:",
//         groups[0].getBoundingClientRect().width
//     );

//     console.log(
//         "Group 2:",
//         groups[1].getBoundingClientRect().width
//     );
// });
// ---------
// const media  = document.querySelector(".media");
// const searching  = document.querySelector(".searching");
// const openSearch = document.querySelector(".open-search");
// const bitSearch  = document.querySelector(".bit-search");

