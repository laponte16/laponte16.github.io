<?php
		$json_data = file_get_contents("FakeSample.json");
		$product = json_decode($json_data, true);
        print_r("hello");
?>