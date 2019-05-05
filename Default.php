
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 4</title>
    <meta charset = "utf-8">
    <script src="Javascript.js"></script>
    <style>
        body {
            background-color: coral;
        }

        #field1 {
            background-color: CadetBlue;
            border-color: Red;
            color: indianRed;
        }


        label{
            font-weight: bold;
        }

        #field2{
            background-color: Gold;
            border-color: Blue;
            color: SkyBlue;
        }

        #l1{
            color: red;
        }

        #l2{
            color: blue;
        }

        #field3{
            visibility: hidden;
            border-color: grey;
        }

        #l3{
            color: blue;
        }
    </style>

</head>
<body>
<? include("header.php") ?>
<form>
    <fieldset id = "field1">
        <legend id= "l1">Reservation Information </legend>
        <label>Number of Rooms (max 5 people per room):</label>
        <input name="Number of Rooms" type="number">
        <br>
        <br>
        <label>Smoker?</label>
        <input name="Smoker?" type="Radio" value="Yes">Yes
        <input name="Smoker?" type="Radio" value="No"> No
        <br>
        <br>
        <label>Check in date:</label>
        <input name="Check in date" type="date">
        <br>
        <br>
        <label>Check out date:</label>
        <input name="Check out date" type="date">
    </fieldset>
    <br>
    <br>
    <fieldset id = "field2">
        <legend id="l2">Room Specifications</legend>
        <label>Number of single/double beds:</label>
        <br>
        <input name="Number of beds" type="checkbox" value="0/2">0/2
        <input name="Number of beds" type="checkbox" value="2/0">0/2
        <input name="Number of beds" type="checkbox" value="1/1">1/1
        <input name="Number of beds" type="checkbox" value="1/2">1/2
        <input name="Number of beds" type="checkbox" value="2/1">2/1
        <br>
        <br>
        <label>Preferred location for hotel?</label>
        <br>
        <input name="Location" type="checkbox" value="Downtown" id ="downtown">Downtown
        <input name="Location" type="checkbox" value="Montreal East">Montreal East
        <input name="Location" type="checkbox" value="Montreal West">Montreal West
        <input name="Location" type="checkbox" value="Near the airport">Near to the airport
        <input name="Location" type="checkbox" value="Oldport">Oldport
        <input name="Location" type="checkbox" value="Don't care">Don't care
        <br>
        <br>
        <label>Number of private Parkings</label>
        <br>
        <select name="Room Prices" id = "roomPrice">
            <option value="<50"> 50 or less </option>
            <option value="100-150">50-100</option>
            <option value="100-150">100-150</option>
            <option value="150-200">150-200</option>
            <option value="200-250">200-250</option>
            <option value="Don't care">Don't care</option>
        </select>
        <br>
        <br>
        <label>Number of Private Parkigns</label>
        <br>
        <input name="Private Parkings" type="Radio" value="0">0 <br>
        <input name="Private Parkings" type="Radio" value="1">1<br>
        <input name="Private Parkings" type="Radio" value="2">2<br>
        <input name="Private Parkings" type="Radio" value="3">3<br>
        <input name="Private Parkings" type="Radio" value="4">4
        <br>
        <br>
        <label>Special Facilities</label>
        <input name="Location" type="checkbox" value="Minibar">Minibar
        <input name="Location" type="checkbox" value="Pool">Pool
        <input name="Location" type="checkbox" value="Balcony">Balcony
        <input name="Location" type="checkbox" value="Spa">Spa
        <input name="Location" type="checkbox" value="Garden Front">Garden Front
        <input name="Location" type="checkbox" value="Water Front">Water Front
    </fieldset>
    <br>
    <br>
    <fieldset id = "field3">
        <legend id = "l3">Expert Opinion</legend>
    </fieldset>
    <br>
    <br>
</form>
Let's see what we can find... <br>
<button onclick = "submitHotel()">Search</button>
<button type="reset" value="Reset">Reset</button>
<? include("footer.php"); ?>
</body>
</html>

