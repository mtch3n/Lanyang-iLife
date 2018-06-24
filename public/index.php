<?php

include_once('../vendor/autoload.php');

use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$debugbar["messages"]->addMessage("hello world!");


include_once("inc/header.php");

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="">We've got what you need!</h2>
                <hr class="light my-4">
                <p class="mb-4">NCTU+是一個交大非官方的資訊組織，有鑑於目前校園系統仍有許多改善空間，我們從改寫校園系統開始，擴展出許多更便利、更友善且更美觀的服務。
                    <br>
                    我們一方面向校方請求開放Data及API，另一方面聆聽同學們的需求並不斷發想新的點子，我們不僅純粹的coding，我們希望結合行銷、設計、工程等不同領域的人才，不斷地進步使平台變的更好。
                </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>

<?php
include_once("inc/footer.php");
?>

