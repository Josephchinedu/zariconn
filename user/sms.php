<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>User</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
         <nav id="sidebar">
            <p style="visibility: hidden;">Developed By Joseph</p>

            <ul class="list-unstyled components">
                <p style="visibility: hidden;">Dummy Heading</p>
                <li >
                    <a href="./">Send SMS</a>
                </li>
                <li >
                    <a href="send.php">Sent Messages</a>
                </li>
                <li >
                    <a href="draft.php">Draft</a>
                </li>
                <li >
                    <a href="phone.php">Phonebook</a>
                </li>
                <li class="active">
                    <a href="sms.php">Buy SMS Unit</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        
                    </button>

                    <a href="#" class="ml-auto" style="position: relative; right: 55px;">Contact <img src="tee.png"></a>

                     
                    
                    
                
                    <img src="Capture.PNG">
                </div>
            </nav>

            <div class="lorfsjd" style="background-image: linear-gradient(to bottom, rgba(255,255,25 0.52), rgba(117, 19, 93, 0.73)), url(hero-img.png); height: 400px;">
               <div class="row" style="padding-top: 50px;">
                   <div class="col-md-6 offset-md-3">

                       <div>
                         <center>
                           <button class="btn btn-lg lorfsjd" style="background-color: #027353; color: #fff;">
                             BUY WITH CARD
                           </button>
                           <br /><br />
                            <button class="btn btn-lg lorfsjd" style="background-color: #0F9BF2; color: #fff;">
                             BUY WITH USSD
                           </button>
                           <br /><br />
                            <button class="btn btn-lg lorfsjd" style="background-color: #9704BF; color: #fff;">
                             BUY WITH CASH
                           </button>
                         </center>
                       </div>

                    </div>


                   

               </div>

               <br /><br /><br />




            </div>

            








            




           
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>