<?
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['offer-choice']))
    {
        $offerchoice = $_POST['offer-choice'];
        $_SESSION['nameofproperty'] = "проба";

        header("Location: add-offer.php");
        
    }
    else
    {
        header("Location: my-offers.php");
        
    }