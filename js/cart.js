// JavaScript Document

var totalPrice=0;

var menuitemsprice = [
			{itemname:"backpack",price:37.99},
			{itemname:"waterbottle",price:10.99},
			{itemname:"tshirt",price:21.89},
			{itemname:"flashlight",price:59.99},
			{itemname:"tent",price:23.48},
			{itemname:"sunscreen",price:26.64}
			];

var menuitemsname = [
			{itemname:"backpack",item:"Backpack"},
			{itemname:"waterbottle",item:"Water Bottle"},
			{itemname:"tshirt",item:"T-shirt"},
			{itemname:"flashlight",item:"Flashlight"},
			{itemname:"tent",item:"Tent"},
			{itemname:"sunscreen",item:"Sunscreen"}
			];

function getItemPrice(item){
	"use strict";
	for (var i = 0; i < menuitemsprice.length; ++i){
		if (menuitemsprice[i].itemname === item) {// item found
				return menuitemsprice[i].price;
		}		
	}
	return 0;
}


function getItemName(item){
	"use strict";
	for (var i = 0; i < menuitemsname.length; ++i){
		if (menuitemsname[i].itemname === item) {// item found
				return menuitemsname[i].item;
		}		
	}
	return 0;
}

function addToCart(itemname){
	"use strict";
	//var totalprice = 0;
	var item = getItemName(itemname);
	var price = getItemPrice(itemname);
	var node = document.createElement("LI");  
	var node2 = document.createElement("LI");
	var textnode = document.createTextNode(item);  
	var pricenode = document.createTextNode("$"+price);
	node.appendChild(textnode);  
	node2.appendChild(pricenode);
	document.getElementById("item_list").appendChild(node);
	document.getElementById("item_price").appendChild(node2);
	
	totalPrice += price;
	
	var rounded = totalPrice.toFixed(2);
	
	var textPrice = "Total price: $" + rounded;
	var ptag = document.getElementById("totalprice");
	ptag.innerHTML = textPrice;
}
