
<script>
    function displayTime(){
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;

    document.getElementById("time").innerHTML =dateTime;

    }
    setInterval(displayTime, 1000);

</script>
<table>
    <tr>
        <td><a href="Default.php">
                <img src="https://i.imgur.com/P3WhFOw.png" alt="Pictre" style="width:150px;height:150px;border:0;">
            </a></td>
        <td><h2> Hotel Reservation Information </h2></td>
    </tr>
</table>
<div id = "time"></div>



