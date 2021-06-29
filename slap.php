<html>

    <head>

        <meta charset="utf-8"/>

        <meta name="viewport" content="width=device-width, initial-scale=1"/> 

        <link rel="stylesheet" type="text/css" href="egyptian.css?Version=1.6"/>

        <title>WSU CS3750 Assignment #2</title>

        

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

        <script type="text/javascript" src="ajax.js?v=2"></script>

        <script type="text/javascript" src="deck.js?v=1"></script>

        <script type="text/javascript">





// kick off game

        var game = new Game();

    	$(function() {            

        })

        

        </script>



</head>



<body onload="load()" onunload="exitGame()">

    <script>

        function load(){

        // this gets the inputed information and sends it to the javascript

        //var playerId = ?php echo $_POST['playerId'];?>;

        var gameId = <?php echo '"'.$_POST['gameId'].'"';?>;

        var playerName = <?php echo '"'. $_POST['userName'].'"'; ?>;

        game.createGame(gameId, playerName);
		

	    setInterval(game.update, 1000);

    }
	
		function exitGame(){
			game.gameExit();
		}


	
    </script>

       <nav id="navigation">

            <ul>

               <li><a href="/home.html">Home</a></li>

               <li><a href="/index.php">Play Now</a></li>

               <li><a href="/aboutus.html">About Us</a></li>

            </ul>

         </nav>

        <section id="GameSection">
        <div class="hidden">
          <script type="text/javascript">
            <!--//--><![CDATA[//><!--
              var images = new Array()
              // Image Preloader Code from tutorial by Jeff Star (https://perishablepress.com/3-ways-preload-images-css-javascript-ajax/)
              function preload() {
                for (i = 0; i < preload.arguments.length; i++) {
                  images[i] = new Image()
                  images[i].src = preload.arguments[i]
                }
              }
              preload(
                "images/DeckPNG/2C.png",
                "images/DeckPNG/2D.png",
                "images/DeckPNG/2H.png",
                "images/DeckPNG/2S.png",
                "images/DeckPNG/3C.png",
                "images/DeckPNG/3D.png",
                "images/DeckPNG/3H.png",
                "images/DeckPNG/3S.png",
                "images/DeckPNG/4C.png",
                "images/DeckPNG/4D.png",
                "images/DeckPNG/4H.png",
                "images/DeckPNG/4S.png",
                "images/DeckPNG/5C.png",
                "images/DeckPNG/5D.png",
                "images/DeckPNG/5H.png",
                "images/DeckPNG/5S.png",
                "images/DeckPNG/6C.png",
                "images/DeckPNG/6D.png",
                "images/DeckPNG/6H.png",
                "images/DeckPNG/6S.png",
                "images/DeckPNG/7C.png",
                "images/DeckPNG/7D.png",
                "images/DeckPNG/7H.png",
                "images/DeckPNG/7S.png",
                "images/DeckPNG/8C.png",
                "images/DeckPNG/8D.png",
                "images/DeckPNG/8H.png",
                "images/DeckPNG/8S.png",
                "images/DeckPNG/9C.png",
                "images/DeckPNG/9D.png",
                "images/DeckPNG/9H.png",
                "images/DeckPNG/9S.png",
                "images/DeckPNG/10C.png",
                "images/DeckPNG/10D.png",
                "images/DeckPNG/10H.png",
                "images/DeckPNG/10S.png",
                "images/DeckPNG/JC.png",
                "images/DeckPNG/JD.png",
                "images/DeckPNG/JH.png",
                "images/DeckPNG/JS.png",
                "images/DeckPNG/QC.png",
                "images/DeckPNG/QD.png",
                "images/DeckPNG/QH.png",
                "images/DeckPNG/QS.png",
                "images/DeckPNG/KC.png",
                "images/DeckPNG/KD.png",
                "images/DeckPNG/KH.png",
                "images/DeckPNG/KS.png",
                "images/DeckPNG/AC.png",
                "images/DeckPNG/AD.png",
                "images/DeckPNG/AH.png",
                "images/DeckPNG/AS.png"
              )
            //--><!]]>
          </script>
        </div>
          <div class="wrapper">

              <div id="topLeftDiv">

                    <h1 id="opponentName">OPPONENT</h1><br/>

                    <p class="cardCountText" id="opponentCardCountText">26</p>

              </div>

              <div id="topMiddleDiv">

                <img src="images/DeckPNG/red_back.png" id="opponentsDeckImg">



                <!-- Need to have Deck Cards Count: not currently implemented.-->

              </div>
              <div id="turnOwnerDiv">TURN: <br/> PLAYER</div> <!-- This will be determined by The Server, just a placeholder for now. -->

             

                <div id="middleDiv" class = "innerWrapper">

                </div>

                <div id="bottomLeftDiv">

                        <h1 id="playerName">PLAYER</h1><br/>

                        <p class="cardCountText" id="playerCardCountText">26</p>

                    </div>

                    <div id="bottomMiddleDiv">



                      <img src="images/DeckPNG/red_back.png" id="playersDeckImg">

                      <!-- Need to have Deck Cards Count: not currently implemented.-->

                    </div>
                    <div id="bottomRightDiv">
                      <audio id="myAudio">
                        <source src="sounds/egyptian.mp3" type="audio/mpeg">
                       Your browser does not support the audio element.
                      </audio>

    <button onclick="toggleAudio()" class="btn" id="speakerBtn"><img src="images/speaker.png"></i> </button>

    <script src="/music.js"></script>

</div>

          </div>

          <script src="/misc.js"></script>

        </section>

    </body>       

    <footer id="footer">

            <a href="https://www.youtube.com" target="_blank">

                <img alt="Youtube logo" src="/images/youtube2.png" class = "icon" id="ytIcon">

                </a>

                <a href="https://www.facebook.com" target="_blank">

                <img alt="Facebook logo" src="/images/facebook2.png"  class = "icon" id="fbIcon">

                </a>

                <a href="https://www.twitter.com" target="_blank">

                <img alt="Twitter logo" src="/images/twitter2.png"  class = "icon" id="twIcon"></a>

    </footer> 

            <script type="text/javascript" src="/updateCards.js"></script>

            </html>