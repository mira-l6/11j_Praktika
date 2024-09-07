<?
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['offer_choice']))
    {
        $_SESSION['nameofproperty'] = $_POST['offer-choice'];

        header("Location: add-offer.php");
        exit();
    }