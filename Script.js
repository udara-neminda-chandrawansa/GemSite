//whichlist start

function addToWishlist(product_id) {
 
    var qty = document.getElementById("qty").value;
  
  
  
    var f = new FormData();
    f.append("pid", product_id);
    f.append("size", selectedValue);
    f.append("qty", qty);
  
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4) {
        if (xhr.status == 200) {
          var responseText = xhr.responseText;
  
          window.location = "Whichlist.php";
        } else {
          // Handle errors here
          alert("Error occurred: " + xhr.status);
        }
      }
    };
  
    xhr.open("POST", "whichListProsess.php", true);
    xhr.send(f);
  }
  
  