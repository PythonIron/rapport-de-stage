<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/rolecard.css">
    <link rel="stylesheet" href="assets/css/calendar.css">
    <link rel="stylesheet" href="assets/src/vanillaCalendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport de stage</title>
</head>
<body>
    <header class="header"></header>
    <?php
        include('assets/includes/navbar.php')
    ?>
<!-- Calendar -->

<div class="container">
		<div id="v-cal" class="calendarTop" >
			<div class="vcal-header">
				<button class="vcal-btn" data-calendar-toggle="previous">
					<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						<path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
					</svg>
				</button>
				
				<div class="vcal-header__label" data-calendar-label="month">
					Mars 2017
				</div>


				<button class="vcal-btn" data-calendar-toggle="next">
					<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						<path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
					</svg>
				</button>
			</div>
			<div class="vcal-week">
				<span>Lun</span>
				<span>Mar</span>
				<span>Mer</span>
				<span>Jeu</span>
				<span>Ven</span>
				<span>Sam</span>
				<span>Dim</span>
			</div>
			<div class="vcal-body" data-calendar-area="month"></div>
		</div>

		<p class="demo-picked">
			<span data-calendar-label="picked"></span>
		</p>
    <div class="lescartes">
		<div id="date13">
			<div class="title">
				<h1>Lundi 13</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li>Découverte des locaux</li>
					<li>Présentation le l'équipe</li>
					<li>Présentation le l'équipe</li>
					<li>Présentation le l'équipe</li>
					<li>Présentation le l'équipe</li>
					<li>Présentation des différents rôles dans une Team</li>
				</ul>
			</div>
		</div>
		<div id="date14">
			<div class="title">
				<h1>Mardi 14</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li>test</li>
				</ul>
			</div>
		</div>
		<div id="date15">
			<div class="title">
				<h1>Mercredi 15</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="date16">
			<div class="title">
				<h1>Jeudi 16</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="date17">
			<div class="title">
				<h1>Vendredi 17</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="date20">
			<div class="title">
				<h1>Lundi 20</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="date21">
			<div class="title">
				<h1>Mardi 21</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="date22">
			<div class="title">
				<h1>Mercredi 22</h1>
			</div>
			<br>
			<div class="description">
				<p class="info">Teletravail</p>
			</div>
		</div>
		<div id="date23">
			<div class="title">
				<h1>Jeudi 23</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="date24">
			<div class="title">
				<h1>Vendredi 24</h1>
			</div>
			<br>
			<div class="description">
				<ul>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="noStage">
			<h1>Pas de stage effectuer ce jour.</h1>
		</div>
    </div>
</div>
	<script src="assets/src/vanillaCalendar.js" type="text/javascript"></script>

	<script>
		window.addEventListener('load', function () {
			vanillaCalendar.init({
				disablePastDays: true
			});
		})
	</script>

<!-- /Calendar -->
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</body>
</html>