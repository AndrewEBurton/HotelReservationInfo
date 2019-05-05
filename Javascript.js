function submitHotel(){
    var priceSelected = document.getElementById("roomPrice").selectedIndex == 1;
    var downtonSelected = document.getElementById("downtown").checked;

    if (priceSelected && downtonSelected) {
        var field3 = document.getElementById("field3");
        field3.innerHTML += "“It is very difficult to find a hotel room in this price range at Downtown";
        field3.style.visibility = "visible";

    }
}
