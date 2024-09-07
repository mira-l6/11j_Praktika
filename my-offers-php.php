<?
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['offer-choice']))
    {
        $_SESSION['nameofproperty'] = $_POST['offer-choice'];

        header("Location: add-offer.php");
        exit();
    }
    else
    {
        header("Location: my-offers.php");
        exit();
    }