<!DOCTYPE html>
<html>
<head>
<style>
    form{
        border-radius: 5px;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.5);

    }
    input.f{
        width: 50%;
    }
fieldset {
  background-color: #eeeeee;
    border-radius: 5px;

}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>
<body>

<?php
//                if(DB::connection()->getPdo())
//                {
//                    echo "Successfully connected to the database => "
//                                  .DB::connection()->getDatabaseName();
//                }else{
//                    echo "Unable to connect";
//                }
//?>


<form method="post" action="add">
@csrf
 <fieldset>
  <legend>Sign Up:</legend>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" class="f"><br><br>
  <label for="password">Phone:</label>
  <input type="text" id="password" name="password" class="f"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" class="f"><br><br>
  <input type="submit" value="Submit" name="submitted">
 </fieldset>
</form>

</body>
</html>
