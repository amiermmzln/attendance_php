<?php
$title = 'Index';
require_once 'includes/header.php'; ?>
  <!-- 
        - First name
        - Last Name
        - Date of Birth (Use DatePicker)
        - Specialty (Database Admin, SOftware Developer, Web Administrator, Other)
        - Email Address
        - Contact Number
     -->

    <h1 class = "text-center">Registration for IT Conference</h1>
    <form>
    <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
        <label for="specialty">Area of Expertise</label>
        <select class="form-select" id="specialty" name="specialty" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-groupform-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        <br/>
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>