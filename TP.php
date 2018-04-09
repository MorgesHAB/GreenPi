<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Zozor - Carnets de voyage</title>
		<style>
			/* Police */
			@font-face
			{
				font-family: "ballpark";
				src: url("polices/ballpark.eot"),url("polices/ballpark.svg"),url("polices/ballpark.ttf"),url("polices/ballpark.woff");
			}
			@font-face
			{
				font-family: "dayrom";
				src: url("polices/dayrom.eot"),url("polices/dayrom.svg"),url("polices/dayrom.ttf"),url("polices/dayrom.woff");
			}
			/* Mise en forme CSS*/
			/**{border: 1px black solid;}*/
			body
			{
				background-image: url("images/fond_jaune.png");
				font-family: "dayrom";
				justify-content: center;
				width: 70%;
				margin: auto;
			}
			footer img
			{
				border: 1px black solid;
			}
			footer ul
			{
				display: inline-block;
				list-style-image: url("images/ico_liensexterne.png")
			}
			footer div
			{
				margin-top: 20px;
			}
			footer
			{
				display: flex;
				background:  url('images/ico_top.png') no-repeat top center, url('images/separateur.png') repeat-x top, url('images/ombre.png') repeat-x top;

			}
			footer div form
			{
				margin-top: 50px;
				margin-left: 50px;
			}
			#tweet, #photo
			{
				margin-right: 30px;
			}
			/*------------------header---------------------*/
			header
			{
				display: flex;
				flex-direction: column;
			}
			header #titre
			{
				display: flex;
			}
			header #sous-titre
			{
				display: flex;
				justify-content: space-between;
				align-items: center;
			}
			#titre img
			{
				width: 60px;
				height: 60px;
			}
			header #zozor
			{
				font-size: 50px;
				font-family: "ballpark";
				margin: 0 0 0 10px;			
			}
			header a
			{
				text-decoration: none;
				color: black;
				font-size: 25px;
				margin: 6px;
			}
			header a:hover
			{
				color: maroon;
				border-bottom: 3px maroon solid;
			}
			img[src*="separateur"]
			{
				width: 100%;
				height: 4px;
			}
			/*-------------*/
			.USA
			{
				background: url("images/sanfrancisco.jpg") no-repeat center;
				height: 200px;
				width: 95%;
				margin-top: 25px;
				display: flex;
				align-items: flex-end;
				color: white;
				text-align: center;
				box-shadow: 6px 6px 10px black;
				border-radius: 10px;
			}
			.noir
			{
				display: flex;
				justify-content: space-between;
				align-items: center;
				background-color: rgba(24,24,24,0.8);
				height: 50px;
				width: 100%;
				box-shadow: 6px 6px 10px black;
				border-radius: 10px;
			}
			.noir div
			{
				background: url('images/fond_degraderouge.png');
    			border: 1px solid #760001;
    			border-radius: 5px;
    			width: 120px;
    			height: 30px;
    			margin-right: 10px;
			}
			.noir a, .noir a:visited
			{	
    			text-decoration: none;
    			color: white;
			}
			/*-------------*/
			section
			{
				display: flex;
				align-items: center;
			}
			aside
			{
				background: rgba(24,24,24,0.8);
				color:white;
				flex: 1.2;
				text-align: justify;
				padding: 20px;
				border-radius: 20px;
				height: 500px;
				display: flex;
				flex-direction: column;
			}
			aside #ane
			{
				width: 175px;
				margin: auto;
				border: 2px black solid;
			}
			article
			{
				flex: 3;
				text-align: justify;
				padding: 50px;
				background: url("images/bulle.png") no-repeat right;
			}
			#fleche
			{
				display: flex;
				justify-content: center;
			}
			#fleche p
			{
				margin-top: 0px;
			}
		</style>
	</head>
	<body>
		<header>
			<div id="titre">
				<img src="images/zozor_logo.png">
				<p id="zozor"> Zozor </p>
			</div>
			<div id="sous-titre">
				<h2>Carnets de voyage</h2>
				<nav>
					<a href="corrigé.html">ACCUEIL</a><a href="../formulaire.php">BLOG</a><a href="../brouillon.php">CV</a><a href="../XSS.php">CONTACT</a>
				</nav>
			</div>
			<img src="images/separateur.png"/>
		</header>
		
		<div class="USA">
		  <div class="noir">
			<p>Retour sur mes vacances aux État-Unis...</p>
			<div><a href="hha" class="bouton_rouge">Voir l'article <img src="images/flecheblanchedroite.png" alt="" /></a></div>
		  </div>
		</div>

		<section>
			<article>
				<h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />   Je suis un grand voyageur</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel enim mi, in lobortis sem. Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis. Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. Mauris non erat eu erat placerat convallis. Mauris in pretium urna. Cras laoreet molestie odio, consequat consequat velit commodo eu. Integer vitae lectus ac nunc posuere pellentesque non at eros. Suspendisse non lectus lorem.</p>
                <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. Donec quis orci arcu. Vivamus fermentum magna a erat ullamcorper dignissim pretium nunc aliquam. Aenean pulvinar condimentum enim a dignissim. Vivamus sit amet lectus at ante adipiscing adipiscing eget vitae felis. In at fringilla est. Cras id velit ut magna rutrum commodo. Etiam ut scelerisque purus. Duis risus elit, venenatis vel rutrum in, imperdiet in quam. Sed vestibulum, libero ut bibendum consectetur, eros ipsum ultrices nisl, in rutrum diam augue non tortor. Fusce nec massa et risus dapibus aliquam vitae nec diam.</p>
                <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue. Sed auctor fringilla quam quis porttitor. Praesent vitae dignissim magna. Pellentesque quis sem purus, vel elementum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas consectetur euismod urna. In hac habitasse platea dictumst. Quisque tincidunt porttitor vestibulum. Ut iaculis, lacus at molestie lacinia, ipsum mi adipiscing ligula, vel mollis sem risus eu lectus. Nunc elit quam, rutrum ut dignissim sit amet, egestas at sem.</p>	
			</article>
			<aside>
				<h3>À PROPOS DE L'AUTEUR</h3>
				<img id="ane" src="images/zozor_classe.png">
				<p>Laisse-moi le temps de me présenter : je m'appelle Zozor, je suis né un 23 novembre 2005.</p>
				<p>Bien maigre, n'est-ce pas ? C'est pourquoi, aujourd'hui, j'ai décidé d'écrire ma biographie afin que vous sachiez qui je suis réellement.</p>
				<p><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>
			</aside>	
		</section>
		<footer>
			<div id="tweet">
				<h3>MON DERNIER TWEET</h3>
				<p> Hii Haaaaan ! </p>
				<p>le 28 décembre 11h30</p>
			</div>
			<div id="photo">
				<h3>MES PHOTOS</h3>
				<img src="images/photo1.jpg"/>
				<img src="images/photo2.jpg"/>
				<img src="images/photo3.jpg"/>
				<img src="images/photo4.jpg"/>
			</div>
			<div id="ami">
				<h3>MES AMIS</h3>
				<ul>
					<li> Pupi le lapin </li>
					<li> Mr Baobab </li>
					<li> Kaiwall </li>
					<li> Perceval.eu </li>
				</ul>
				<ul>
					<li> Belette </li>
					<li> Le concombre masqué </li>
					<li> Ptit Prince </li>
					<li> Mr Fan </li>
				</ul>
			</div>
			<div>
				<form method="post" action="NASA.php">
					<p>Accéder aux pages secretes... <br />
					<label for="mdp">Entrer le mot de passe :</label><br /><input type="password" name="mdp" id="mdp"/>
					<input type="submit" value="Accéder !"/>
					</p>
				</form>
			</div>
		</footer>
	</body>
</html>