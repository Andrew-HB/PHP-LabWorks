<?php
    $number = $_GET['number'];
    $colors = [
        "#FBF73C",
        "#36E36B",
        "#48AAFA",
        "#9836E3",
        "#FF1400",
        "#FA1EC3",
        "#FAAC23",
        "#FA37CA",
        "#45FA1E",
        "#2A8FFA"
    ];

    for ($i = 1; $i <= 10; $i++) {
        echo "<span style=\"color:", $colors[$i - 1], "\">", "$number * $i = ", $number * $i, "<br/>", "</span>";
    }
?>