// Initialization for ES Users
import { Dropdown, Ripple, initTWE } from "tw-elements";

initTWE({ Dropdown, Ripple });

const dropdownElementList = [].slice.call(
    document.querySelectorAll("[data-twe-dropdown-toggle-ref]")
);
const dropdownList = dropdownElementList.map((dropdownToggleEl) => {
    return new Dropdown(dropdownToggleEl);
});
