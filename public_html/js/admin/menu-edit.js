({5738:function(){var e=this;this.buildSelectParent=function(e){var n='<option value="none">Do not have parent</option>';$parentId=document.getElementById("parentId").value,$menuElementId=document.getElementById("menuElementId").value;for(var t=0;t<e.length;t++)e[t].id!=$menuElementId&&(e[t].id==$parentId?n+='<option value="'+e[t].id+'" selected>'+e[t].name+"</option>":n+='<option value="'+e[t].id+'">'+e[t].name+"</option>");return n},this.updateSelectParent=function(){axios.get("/menu/element/get-parents?menu="+document.getElementById("menu").value).then((function(n){document.getElementById("parent").innerHTML=e.buildSelectParent(n.data)})).catch((function(e){console.log(e)}))},this.toggleDivs=function(){var e=document.getElementById("type").value;"title"===e?(document.getElementById("div-href").classList.add("d-none"),document.getElementById("div-dropdown-parent").classList.add("d-none"),document.getElementById("div-icon").classList.add("d-none")):"link"===e?(document.getElementById("div-href").classList.remove("d-none"),document.getElementById("div-dropdown-parent").classList.remove("d-none"),document.getElementById("div-icon").classList.remove("d-none")):(document.getElementById("div-href").classList.add("d-none"),document.getElementById("div-dropdown-parent").classList.remove("d-none"),document.getElementById("div-icon").classList.remove("d-none"))},this.updateSelectParent(),this.toggleDivs(),document.getElementById("menu").onchange=function(){e.updateSelectParent()},document.getElementById("type").onchange=function(){e.toggleDivs()}}})[5738]();
