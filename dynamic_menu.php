<?php
/**
 * Created by PhpStorm.
 * User: riash_000
 * Date: 3/31/2015
 * Time: 1:39 PM
 */
?>
<style>
	/*Menu*/

	ul#menu{
		padding: 0;
		text-align: center;
	}

	ul#menu li{
		display: inline;	
	}

	ul#menu li a {
		background-color: black;
		color: white;
		padding: 10px 20px;
		text-decoration: none;
		border-radius: 0px 0px 4px 4px ;
	}

	ul#menu li a:hover{
		background-color: orange;
	}
    nav ul li a.current {
        background-color: lightseagreen;
    }
</style>

<nav>
        <ul>
            <li><a href="index.php" <?php if ($page == "index.php") echo 'class="current"'?>>Home</a></li>
            <li><a href="phppractice1.php" <?php if ($page == "phppractice1.php") echo 'class="current"'?>>Prac01</a></li>
            <li><a href="phppractice2.php" <?php if ($page == "phppractice2.php") echo 'class="current"'?>>Prac02</a></li>
            <li><a href="phppractice3.php" <?php if ($page == "phppractice3.php") echo 'class="current"'?>>Prac03</a></li>
            <li><a href="phppractice4.php" <?php if ($page == "phppractice4.php") echo 'class="current"'?>>Prac04</a></li>
            <li><a href="phppractice5.php" <?php if ($page == "phppractice5.php") echo 'class="current"'?>>Prac05</a></li>
        </ul>
    </nav>