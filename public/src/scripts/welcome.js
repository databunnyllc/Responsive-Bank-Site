
// GETTING VARIABLES FOR DOM ELEMENTS
let site_body = document.querySelector("body");
let account_settings_name = document.querySelector(".account-settings-area p");
let dropdown_menu = document.getElementsByClassName("dropdown-menu-area hide-dropdown")[0];
/** WHEN USER'S CLICK OVER ACCOUNT NAME, 
 * BRING DOWN DROPDOWN MENU.
 */
const show_dropdown_menu = () => {
    dropdown_menu.setAttribute("class", "dropdown-menu-area show-dropdown");
}
account_settings_name.addEventListener("click", show_dropdown_menu, false);
dropdown_menu.addEventListener("mouseover", show_dropdown_menu, false);
// USER EITHER LEAVES DROPDOWN AREA OR ACCOUNT NAME AREA TO HIDE DROPDOWN MENU
const hide_dropdown_menu = () => {
    dropdown_menu.setAttribute("class", "dropdown-menu-area hide-dropdown");
}
dropdown_menu.addEventListener("mouseout", hide_dropdown_menu, false);