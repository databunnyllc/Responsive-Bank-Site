/* Getting the Hamburger Icon */
let hamburgerIcon = document.getElementById('hamburger-logo-area');
/* Getting the X to close hamburger dropdown */
let X = document.querySelectorAll('#productNav ul li')[5];

/* Getting the Product Navigation */
let productNav = document.getElementById('productNav');

/* When User Clicks, show product navigation */
const hamburgerOnClick = () => {
    productNav.style.display = "block";
    productNav.style.textAlign= "center";
    productNav.style.margin = "25px 0 0 30%";
    productNav.style.lineHeight = "2.5";
}
hamburgerIcon.addEventListener("click", hamburgerOnClick, false);

/* When User clicks the X, close product navigation */
const XonClick = () => {
    productNav.style.display = "none";
}
X.addEventListener("click", XonClick, false);