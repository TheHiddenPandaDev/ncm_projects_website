!function(t,n,e){"use strict";tinymce.PluginManager.add("producttable",(function(t,n){t.addButton("producttable",{title:"Insert Product Table",cmd:"insertProductTable",icon:"dashicon dashicons-editor-table"}),t.addCommand("insertProductTable",(function(){t.execCommand("mceInsertContent",!1,"[product_table]")}))}))}(window,document);