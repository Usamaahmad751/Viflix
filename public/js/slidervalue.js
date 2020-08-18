console.log("successfuly loaded")

var slider = document.getElementById("myRange");
var output = document.getElementById("ovalue");
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("ovalue2");
var monaynay = document.getElementById("monaynay");
var monaynay2 = document.getElementById("monaynay2");
var netTotal = document.getElementById("netTotal");
var finalTotal = document.getElementById("finalTotal");
var promoamount = document.getElementById("promoamount");
const picturesCheck1 = document.getElementById('picturesCheck1')
const picturesCheck2 = document.getElementById('picturesCheck2')
const deliveryCheck1 = document.getElementById('deliveryCheck1')
const deliveryCheck2 = document.getElementById('deliveryCheck2')
const deliveryCheck3 = document.getElementById('deliveryCheck3')

function finalTotalFunc(net, promoamount) {
  if (promoamount>0) {
    finalTotal.innerHTML = net - (promoamount/100 * net);
  }
  if (promoamount==0) {
    finalTotal.innerHTML = net;
  } 
}

picturesCheck2.addEventListener('change', (event) => {
  if (event.target.checked) {
    netTotal.innerHTML = parseInt(netTotal.innerHTML, 10) + 5;
    netTotal1.value = parseInt(netTotal1.value, 10) + 5;
    finalTotalFunc(parseInt(netTotal.innerHTML, 10) , parseInt(promoamount.value, 10));
  }
})
picturesCheck1.addEventListener('change', (event) => {
  if (event.target.checked) {
    netTotal.innerHTML = parseInt(netTotal.innerHTML, 10) - 5;
    netTotal1.value = parseInt(netTotal1.value, 10) - 5;   
    finalTotalFunc(parseInt(netTotal.innerHTML, 10), parseInt(promoamount.value, 10)); 
  }
})


output.innerHTML = slider.value;
monaynay.innerHTML = slider.value - 15;
output2.innerHTML = slider2.value;
monaynay2.innerHTML = (slider2.value - 1) * 15;
netTotal.innerHTML = 60 + parseInt(monaynay2.innerHTML, 10) + parseInt(monaynay.innerHTML, 10) + (document.getElementById('picturesCheck2').checked)*5;
finalTotal.innerHTML = netTotal.innerHTML;
netTotal1.value = 60 + parseInt(monaynay2.innerHTML, 10) + parseInt(monaynay.innerHTML, 10) + (document.getElementById('picturesCheck2').checked)*5;

slider.oninput = function () {
  output.innerHTML = this.value;
  monaynay.innerHTML = this.value - 15;
  temp = 60 + parseInt(monaynay2.innerHTML, 10) + parseInt(monaynay.innerHTML, 10) + (document.getElementById('picturesCheck2').checked)*5;
	netTotal.innerHTML = temp;
  netTotal1.value = temp;
  finalTotalFunc(temp , parseInt(promoamount.value, 10));
}

slider2.oninput = function () {
  output2.innerHTML = this.value;
  monaynay2.innerHTML = (slider2.value - 1) * 15;
  temp = 60 + parseInt(monaynay2.innerHTML, 10) + parseInt(monaynay.innerHTML, 10) + (document.getElementById('picturesCheck2').checked)*5;
	netTotal.innerHTML = temp;
  netTotal1.value = temp;
  finalTotalFunc(temp, parseInt(promoamount.value, 10));
}

  