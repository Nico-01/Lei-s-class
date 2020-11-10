
function addToCart(e) {
	cart = document.getElementById("cartDiv");
	switch (e.id) {
	case "addfood":
		qty = document.getElementById("foodQty").value;
		cart
				.insertAdjacentHTML(
						'beforeend',
						'<p>Cat Food: <input type="number" class="cartInput" id = "cartfood" pName = "Food" price="50" value="'
								+ qty
								+ '"> Price:$'
								+ (Number(qty) * 50)
								+ '</p>');
		break;
	default:
		// code block
	}

}

function addToInvoice() {
	
}

/**
 * Show invoice page
 */
function invoice() {
	
	voicePage = document.getElementById("voicePage");
	//Get the button that opens the modal
	var btn = document.getElementById("showInvoiceBut");

	//Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	//When the user clicks on the button, open the modal 
	btn.onclick = function() {
		cart = document.getElementsByClassName("cartInput");
		voiceContent = document.getElementById("voice-content");
		Total = 0;
		var elems = document.getElementsByClassName("items");
		i = 0
		while (i<elems.length){
			elems[i].parentNode.removeChild(elems[i]);
		}
		
		
		i = 0;
		while (i < cart.length) {
			console.log(cart[i].id);
			qty = cart[i].value;
			switch (cart[i].id) {
			case "cartfood":
				voiceContent.insertAdjacentHTML(
								'beforeend',
								'<p class = "items">Food: Qty:'+ qty +' Price:$' + (Number(qty) * 50)+ '</p>');
				Total += (Number(qty) * 50);
				
				break;
			default:
				// code block
			}
			
			i++;

		}
		voiceContent.insertAdjacentHTML(
				'beforeend',
				'<p class = "items">Total: $'+ Total+'</p>');
		
		voicePage.style.display = "block";
	}

	//When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		voicePage.style.display = "none";
	}

	//When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == voicePage) {
			voicePage.style.display = "none";
		}
	}
}



















//Sorry Lei