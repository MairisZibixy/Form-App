<form action="https://bootcamp-firstpage.000webhostapp.com/app/public/api.php" onsubmit="postSubmit.bind(this)(event, displayAvatar)">
    <select name="fields[]" id="" multiple>
        <option value="firstname">Firstname</option>
        <option value="lastname">Lastname</option>
        <option value="age">Age</option>
        <option value="images">Images</option>
        <option value="email">Email</option>
        <option value="location">Location</option>
        <option value="telephone">Telephone</option>
    </select>
    <input type="submit" value="request">
</form>

<div id="app">

</div>

<script src="request.js"></script>
<script src="script.js"></script>