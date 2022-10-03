<?php 
// 123456789 => galal husseny, male , cairo , 01000498488
// 987654321 => mona , giza , female , 01000498489
// 123654789 => mohamed , alex , male , 01000498486

// $_GET;  // => catch data from url
// $_POST; // => catch data from body
// $_REQUEST; // => catch data from url and body

// if body has data
// $message = "";
if($_POST){
   if( $_POST['national_id'] == 123456789){
        $message = "<div class='alert alert-success'>
                        <ul>
                            <li> Galal Husseny</li>
                            <li> Male</li>
                            <li> Cairo</li>
                            <li> 01000498488</li>
                        </ul>
                    </div>";
   }elseif($_POST['national_id'] == 987654321){
        $message = "<div class='alert alert-success'>
                            <ul>
                                <li> Mona</li>
                                <li> FeMale</li>
                                <li> Giza</li>
                                <li> 01000498489</li>
                            </ul>
                        </div>";
   }elseif($_POST['national_id'] == 123654789){
        $message = "<div class='alert alert-success'>
                            <ul>
                                <li> Mohamed</li>
                                <li> Male</li>
                                <li> Alex</li>
                                <li> 01000498486</li>
                            </ul>
                        </div>";
    }else{
        $message = "<div class='alert alert-danger'> Not Found </div>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="contianer">
        <div class="row">
            <div class="col-12 text-center text-danger mt-5">
                <h1> Find My Data </h1>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form  method="post">
                    <div class="form-group">
                      <label for="number">National Id</label>
                      <input type="number" name="national_id" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger rounded form-control"> Find </button>
                    </div>
                </form>
                <?php 
                    // if($_POST){
                    //     echo $message;
                    // }
                    // if(isset($message)){
                    //     echo $message;
                    // }
                    // if(!empty($message)){
                    //     echo $message;
                    // }
                    // echo $message;
                    // echo $message ?? ""
                ?>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>