(()=>{var t;(t=jQuery)(".wc-product-table").on("click",".quantity .plus, .quantity .minus",(function(a){a.stopImmediatePropagation();var i=t(this),s=i.is(".minus");i.closest(".quantity").find(".qty").val((function(a,i){var n=t(this),e=parseFloat(n.prop("step")),o=parseFloat(n.prop("min")),p=parseFloat(n.prop("max"));return i=parseFloat(i),i=isNaN(i)?1:i,e=isNaN(e)?1:e,o=isNaN(o)?1:o,p=isNaN(p)?9999:p,i+=e=s?-1*e:e,s?Math.max(i,o):Math.min(i,p)})).trigger("change")})).on("responsiveDisplay.wcpt draw.wcpt",(function(a){t(this).find(".cart div.quantity:not(.buttons_added)").addClass("buttons_added").children(".qty").before('<input type="button" value="-" class="minus">').after('<input type="button" value="+" class="plus">')}))})();