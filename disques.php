<!DOCTYPE html>

<html lang="fr">

	<head>
	
		<title>Disques</title>
		<meta charset="utf-8">
		<style>

			div{
				border: 3px white solid;
				width: 400px;
				height: 400px;
				background-color: blue;
				display: inline-block;
			}

			body{
				background-color: lightblue;
				text-align: center;
				color: white;
                padding-top: 20px;
			}

            table{
                display: inline-block;
                border-spacing: 50px;
            }

            img{
                width: 90px;
				height: 90px;
            }

            ul{
                list-style: none;
                margin: auto;
            }

            hr{
                color: white;
                background-color: white;
                width: 350px;
                height: 5px;
            }

            input{
                background-color: lightblue;
            }

            #entete{
                width: 400px;
                height: 200px;
            }

		</style>
        <script>

            var price=0;

            function move(x) {
                
                if(x.parentNode.parentNode.id == "liste1") {

                    var varspan = document.createElement('span');
                    var text = document.createTextNode(" Album " + x.alt + " ");
                    varspan.appendChild(text);

                    document.getElementById('liste2').appendChild(x.parentNode);
                    x.parentNode.insertBefore(varspan, x);

                    document.getElementById('prix').innerHTML=price + 7.5;
                    price+=7.5;
                } 
                else {

                    x.parentNode.removeChild(x.previousSibling);
                    document.getElementById('liste1').appendChild(x.parentNode);

                    document.getElementById('prix').innerHTML=price - 7.5;
                    price-=7.5;
                }
            }

        </script>
		
	</head>
	
	<body>

        <form action="serveur.php" method="get">
	
            <div id="entete">

                <h1> Magasin de disques </h1>
                <p> Tout les disques à 7.50 € ! <br> Cliquez sur un album pour l'ajouter ou le supprimer à votre panier <br> Montant du panier : <span id="prix">0</span> € </p>

            </div>

            <table>

                <td>

                    <div>

                        <h2> Albums disponibles </h2> <hr> <br>

                        <ul id="liste1">
                            <li> <img onclick="move(this)" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg.discogs.com%2FfX5vnVekHVK5NezucUAfFCW8xbE%3D%2Ffit-in%2F600x557%2Ffilters%3Astrip_icc()%3Aformat(jpeg)%3Amode_rgb()%3Aquality(90)%2Fdiscogs-images%2FR-4927358-1380276896-1543.jpeg.jpg&f=1&nofb=1" alt="Nirvana"> </li>
                            <li> <img onclick="move(this)" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.music123.com%2Fis%2Fimage%2FMMGS7%2FQueen-2015-Calendar-Square-12x12%2FJ15156000000000-00-750x750.jpg&f=1&nofb=1" alt="Queen"> </li>
                            <li> <img onclick="move(this)" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg.discogs.com%2FiB5sum93Wd9cyb4uXELAN9X6ioE%3D%2Ffit-in%2F315x320%2Ffilters%3Astrip_icc()%3Aformat(jpeg)%3Amode_rgb()%3Aquality(90)%2Fdiscogs-images%2FR-4219678-1358882843-8452.jpeg.jpg&f=1&nofb=1" alt="AC/DC"> </li>
                        </ul>

                    </div>

                </td>

                <td>

                    <div>

                        <h2> Mon panier </h2> <hr> <br>

                        <ul id="liste2"> </ul>

                    </div>
            
                </td>

                <tr> <center> <br><br> <input type="submit" value="Acheter"> </center> </tr>

            </table>

        </form>

	</body>
	
</html>
