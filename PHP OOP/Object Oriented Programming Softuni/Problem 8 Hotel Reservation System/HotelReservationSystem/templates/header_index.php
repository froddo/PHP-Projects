<form method="post" action="">
    First Name: <input type="text" name="first" placeholder="Enter First Name"><br>
    Last Name: <input type="text" name="last" placeholder="Enter Last Name"><br>
    ID Name: <input type="text" name="id" placeholder="Enter ID"><br>
    StartDate: <input type="date" name="start-date"><br>
    EndDate: <input type="date" name="end-date"><br>
    RoomNumber: <input type="text" name="room-number" placeholder="Enter room number"><br>
    <textarea name="text"  rows="4" cols="50" placeholder="Chose room number for single room range:100-199, bedroom:200-299, apartment:300-399"></textarea><br>
    <select name="price">
        <option value="150">SingleRoom: 150 euro</option>
        <option value="250">Bedroom: 250 euro</option>
        <option value="350">Apartment: 350 euro</option>
    </select><br>
    <select name="select-room">
        <option value="1">SingleRoom</option>
        <option value="2">Bedroom</option>
        <option value="3">Apartment</option>
    </select>
    <input type="submit" value="Submit">
</form>

