import "./bootstrap";

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";

import jQuery from "jquery";
window.$ = jQuery;

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();

// Product img upload
$(function () {
    $("#image").on("change", function () {
        let reader = new FileReader();

        reader.onload = (e) => {
            $("#image-preview").attr("src", e.target.result);
        };

        reader.readAsDataURL(this.files[0]);
    });
});