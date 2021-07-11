<?php include ("./includes/header.php");?>
<?php
  $pageload = isset($_GET["pg"])?$_GET["pg"]:"";
  $whichpage = base64_decode($pageload); 
  switch ($whichpage)
  {
      case "contact":
          include ("./components/contact.php");
          break;
      case "about":
          include ("./components/about.php");
          break;
      case "Team":
          include ("./components/team.php");
          break;
      case "Contribute":
          include ("./components/contribute.php");
          break;
          
      default:
          include ("./components/homepage.php");
          break;
  }
?>
<?php include ("./includes/footer.php");?>