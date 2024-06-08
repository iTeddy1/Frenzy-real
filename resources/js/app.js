import "./bootstrap";

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";

import jQuery from "jquery";
window.$ = jQuery;

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();

export function updateQuantity(itemId, operation) {
  let quantityInput = document.getElementById('quantity-input-' + itemId);
  let currentQuantity = +(quantityInput.value);

  if (operation === 'increment') {
      quantityInput.value = currentQuantity + 1;
  } else if (operation === 'decrement' && currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
  }
}