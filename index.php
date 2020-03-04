<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>ENOS</title>

		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<nav>
			<h1>ENOS</h1>
			<!-- <span>Your name/subtitle/etc. idk... whatever</span> -->
		</nav>
		
		<div id="main">
			<?php
				$dirs = array_filter(glob('*'), 'is_dir');
				$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

				foreach ($dirs as $dir) {
					$descFileDir = $dir . "/desc.txt";
					$indexFileDir = $dir . "/index.html";
					$phpFileDir = $dir . "/index.php";
					
					$desc = "No description.";
					$langs = "<div id='langs'>";
					$index = $link . $indexFileDir;
					
					if (file_exists($descFileDir)) {
						$descFile = fopen($descFileDir, "r");
						$desc = fread($descFile, filesize($descFileDir));
						$desc = explode("\n", $desc);
						
						if (count($desc) > 0) {
							$langList = $desc;
							$desc = $desc[0];

							if (count($langList) >= 2) {
								$langList = $langList[1];
								$langList = explode(",", $langList);
								$first = true;

								foreach ($langList as $lang) {
									if ($lang == "1" && $first) {
										$langs .= "<span class='lang html'>HTML</span><span class='lang css'>CSS</span>";
										continue;
									} else if ($lang == "0" && $first) { 
										continue;
									} else if ($first) { 
										$langs .= "<span class='lang html'>HTML</span><span class='lang css'>CSS</span>";
									}

									if (strtolower($lang) != "html" && strtolower($lang) != "css") {
										$langs .= "<span class='lang " . strtolower($lang) . "'>" . $lang . "</span>";
										$first = false;
									}
								}
							}
						}

						fclose($descFile);
					}

					if (file_exists($phpFileDir)) {
						$index = $link . $phpFileDir;
					}

					if (!file_exists($indexFileDir) && !file_exists($phpFileDir)) {
						continue;
					}
					
					$langs .= "</div>";

					printf('<a href="%s%s"><div class="page"><span class="title">%s</span><p class="description">%s</p>%s</div></a>', $link, $dir, $dir, $desc, $langs);
				}
			?>
		</div>
	</body>
</html>