<?php 
	class Movie
		{
			public $title;
			public $description;
			public $yearOfProduction;

			public function __construct($title, $description, $yearOfProduction)
			{
				$this->title = $title;
				$this->description = $description;
				$this->yearOfProduction = $yearOfProduction;
			}

			public function DoP()
			{
				if ($this->yearOfProduction % 2 == 0){
					return $this->yearOfProduction . " pari";
				}else {
					return $this->yearOfProduction . " dispari";
				}
			}
		}
		
		$myMovie = new Movie("Pulp Fiction", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero natus quam est, beatae in dolores aspernatur velit molestias eos facilis perferendis, enim labore, a nihil tenetur at voluptatibus. Aspernatur, optio.", 1994);

		$io = new Movie("Fight Club", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero natus quam est, beatae in dolores aspernatur velit molestias eos facilis perferendis, enim labore, a nihil tenetur at voluptatibus. Aspernatur, optio.", 1999);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid bg-danger py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center bg-success rounded">
						<?php 
						echo "<h1 class='text-warning'>" . $myMovie->title . "</h1>" 
						. "<p class='text-white'>". $myMovie->description . "</p>"
						. "<p class='text-primary'>". $myMovie->DoP() . "</p>";
						
						echo "<h1 class='text-warning'>" . $io->title . "</h1>" 
						. "<p class='text-white'>". $io->description . "</p>"
						. "<p class='text-primary'>". $io->DoP() . "</p>";
						?>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>