
            <form action="form.php" method="POST">

              <div class="row">
              <label class="form-label" for="firstName">First Name</label>
               <input type="text" action="<?php $_SERVER=$con['PHP_SELF'];?>" name="fnm" class="form-control form-control-lg" >
                </div>
              </div>
               <label class="form-label" for="lastName">Last Name</label>
              <input type="text" name="lnm" class="form-control form-control-lg" />
              <div class="row">
              <label class="form-label" for="emailAddress">Msg</label>
             <input type="text" name="msg" class="form-control form-control-lg" />
             </div>
             <label class="form-label" for="emailAddress">Gender: </label>
             <div class="form-check form-check-inline">
            <label class="form-check-label" for="femaleGender">Female</label>
            <input class="form-check-input" type="radio" name="rd1" id="femaleGender"value="option1" checked />
            </div>
             <div class="form-check form-check-inline">
            <label class="form-check-label" for="maleGender">Male</label>
            <input class="form-check-input" type="radio" name="rd1" id="maleGender"value="option2" />
            </div>
            <div class="form-check form-check-inline">
            <label class="form-check-label" for="otherGender">Other</label>
            <input class="form-check-input" type="radio" name="rd1" id="otherGender" value="option3" />
            </div>
          </div>
          </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="submit" name="submit">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

$con = new mysqli("localhost","root","","bhumi");
if(isset($_POST['submit']))
{
    $fnm = $_POST['fnm'];
    $lnm = $_POST['lnm'];
    $msg = $_POST['msg'];
    $rd1 = $_POST['rd1'];

    $insert = "INSERT INTO `form`(`fnm`,`lnm`,`msg`,`rd1`) VALUES ('$fnm','$lnm','$msg','$rd1')";
  
    $result = $con->query( $insert);
}    

?>