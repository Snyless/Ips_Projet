<?php
    include('session.php');
?>
<div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="academics.php">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="event.php">Events</a>
                                </li>
                                <li class="nav-logo">
                                    <a href="index.php" class="navbar-brand"><img src="images/logo2.png" class="img-fluid" alt="logo"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <?php
                                    if(isset($login_session)){
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $login_session['username'] ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="index-2.php">Profile</a></li>
                                     <li><a class="dropdown-item" href="dashboard/index.php">Dashborad</a></li>
                                     <li><a class="dropdown-item" href="logout.php">Deconnexion</a></li>
                                    </ul>
                                </li>
                                <?php
                                    }else{
                                        
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li> 
                                <?php
                                    }
                                ?>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>