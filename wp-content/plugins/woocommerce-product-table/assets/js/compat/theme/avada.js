(()=>{var a;(a=jQuery)(".wc-product-table").on("load.wcpt",(function(){a(this).find(".avada-select-parent").children("select").unwrap().siblings(".select-arrow").remove()})),a(".wc-product-table").on("responsiveDisplay.wcpt",(function(){a(this).hasClass("loading")||"function"!=typeof avadaAddQuantityBoxes||avadaAddQuantityBoxes()}))})();