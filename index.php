<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand text-danger font-weight-bold" href="#home">Customer Relationship Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li style="margin-left: 10%;">
                        <form class="form-inline my-2 my-lg-0">
                            <input type="hidden" name="val" value="good" />
                            <input type="submit" value="Good" name="submit" class="btn btn-outline-success my-2 my-sm-0"/>
                        </form>
                    </li>
                    <li style="margin-left: 5%;">
                        <form class="form-inline my-2 my-lg-0">
                            <input type="hidden" name="val" value="impressive" />
                            <input type="submit" value="Impressive" name="submit" class="btn btn-outline-primary my-2 my-sm-0"/>
                        </form>
                    </li>
                    <li style="margin-left: 5%;">
                        <form class="form-inline my-2 my-lg-0">
                            <input type="hidden" name="val" value="bad" />
                            <input type="submit" value="Bad" name="submit" class="btn btn-outline-danger my-2 my-sm-0"/>
                        </form>
                    </li>
                </ul> 
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search comments" aria-label="Search" name="val">
                    <input type="submit" value="search" name="submit" class="btn btn-outline-primary my-2 my-sm-0"/>
                </form>  
            </div>
        </nav>
        <div class="container">
            <div id="home" style="margin-top: 3%;">
                <div class="container" >
                    <div class="card" style="width: 100%; padding: 1%;">
                    <?php
                        if (isset($_GET['submit'])) {
                            $name = $_GET['val'];
                            $handle = fopen("data.txt", "r");
                            if ($handle) {
                            while (($line = fgets($handle)) !== false) {
                                if (!empty($name)) {
                                    if (strpos($line, $name) !== false) {
                                        echo $line.'<br>';
                                    } 
                                    if ($name == 'all') {
                                        echo $line.'<br>';
                                    } 
                                }
                            }
                            fclose($handle);
                            } else echo 'Error in opening file';
                        }
                    ?>
                    </div>
                </div>
                <div class="container" style="margin-top: 3%;">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top" src="c.png" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-text">Customer comments</h5>
                                  <p class="card-text">The agenda is to sort the comments as per the user requirement.</p>
                                  <p class="card-text">Here you fetch comments based on the input given. For example if 
                                      the choosen input is Good then all the comments with the good review are fetched.
                                  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 30rem;">
                                <div class="card-body">
                                  <h5 class="card-text">Choose your option...</h5>
                                  <form method='get'>
                                    <div class="form-group">
                                        <select class="form-control" name="val">
                                            <option value="all">All comments</option>
                                            <option value="very good">Very good</option>
                                            <option value="good design">Good design</option>
                                            <option value="really bad">Really bad</option>
                                            <option value="star">Starred Comments</option>
                                        </select>
                                    </div>
                                    <input type='submit' name='submit' value='Submit' class='btn btn-outline-primary'/>
                                  </form><br>
                                  <h5>These kind of models are used in software companies for judging their customer relationship.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
