<?php
    include 'top.php';
   
    // ========Navbar Active Coding Here=========
        $nav_id = '';
        if(isset($_GET['a'])){
            $nav_id = $_GET['a'];
        }else{
          $nav_id = "";
        }
        if($nav_id==''){
          $classAc1='active';
        }elseif($nav_id=='2'){
          $classAc2='active';
        }elseif($nav_id=='3'){
          $classAc3='active';
        }elseif($nav_id=='4'){
          $classAc4='active';
        }elseif($nav_id=='5'){
          $classAc5='active';
        }
    // ======X==Navbar Active Coding Here==X=======
?>

<!-- Navigation Bar -->
    <div class="container navbar">
        <nav class="d-flex">
            <div class="nav-brand">
                <a href="index.php"><i class="fas fa-hands-helping"></i> <span>NGO</span></a>
            </div>
            <div class="toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-menu nav-collapas">
                <ul class="d-flex">
                    <li>
                        <a href="index.php" class="<?php echo $classAc1 ?>">Home</a>
                    </li>
                    <li>
                        <a href="?a=2#about" class="<?php echo $classAc2 ?>">About</a>
                    </li>
                    <li>
                        <a href="?a=3#volenteres" class="<?php echo $classAc3 ?>">Our Volunteer</a>
                    </li>
                    <li>
                        <a href="?a=4#contact" class="<?php echo $classAc4 ?>">Contact</a>
                    </li>
                    <li>
                        <a href="donate.php?a=5" class="<?php echo $classAc5 ?>">Donate Now</a>
                    </li>
                </ul>
            </div>
            <div class="social nav-collapas">
                <ul class="d-flex">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<!-- X-Navigation Bar-X -->
