<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.">
      <meta name="author" content="Quinn Goh">
      <title>Assignment Two</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <script type="text/javascript" src="../a2/mapdata.js"></script>		
      <script  type="text/javascript" src="../a2/worldmap.js"></script>
      <script  type="text/javascript" src="../a2/essential.js"></script>
      <script src='../wireframe.js'></script>
   </head>
   <body>
      <header id="nav" class="sticky-nav">
         <nav class="container">
            <ul role="list" class="nav-grid-2 w-list-unstyled">
               <li id="home-nav"><a href="#" class="nav-logo-link w-inline-block"><img src='../a2/media/nav-logo.png'  sizes="(max-width: 479px) 100vw, (max-width: 767px) 37vw, 282.640625px" alt="" class="nav-logo"></a></li>
               <li><a href="postcards.php" class="nav-link">Letters & Postcards</a></li>
               <li><a href="descriptions.php" class="nav-link">Description</a></li>
               <li><a href="index.php" class="nav-link">Home</a></li>
               <li id="main-nav" class="nav-link"></li>
            </ul>
         </nav>
      </header>

    <header class="hero-overlay">
         <div class="centered-container-2 container">
            <h1 class="heading-3">Descriptions of Battle Action<br></h1>
            <p class="paragraph-2">
         </div>
      </header>
	<section class="feature-section-2">
		<div class="centered-container-2 container">
            <h1 class="heading-3">Click on a tab to reveal a battle description.</h1><br>
			<div class="tab">
				<button class="tablinks" onclick="openTab(event, 'gallipoli')">An Account of the Gallipoli Landing.</button> <button class="tablinks" onclick="openTab(event, 'push')">The "Big Push"</button> <button class="tablinks" onclick="openTab(event, 'poziers')">Battle of Poziers</button> <button class="tablinks" onclick="openTab(event, 'wounded')">Getting Wounded, Again</button> <button class="tablinks" onclick="openTab(event, 'nedal')">What it Takes to Win a Military Medal</button>
			</div><!-- Tab content -->
			<div class="tabcontent" id="gallipoli">
				<h3>Post Card. August 25th 1914.</h3><br>
				About six hundred of Australian wounded [including myself] have arrived at the above address and all are in good spirits. Of course those who were very severely wounded were left at Alexandria and there was a great number of them too. But I believe I am starting at the wrong end, so will go back a little over a week when we were on board the “Malda” in Lemnos Island Harbour. I could go back even further than that to the time when we left Mena Camp [Feb. 28th] and sailed by the troopship “Ionian” to Lemnos Island, of our five weeks under canvas there and all our experiences, etc.; but I am afraid it would take too long and at present there is plenty of later news to write about. <br>Well, to resume my story – we were on board the Troopship “Malda” on Saturday, April 24th, waiting for British destroyers to take us to the place where we were to land and meet the Turks. At 10 p.m. we had our last meal on the “Malda” and somewhere about midnight, two destroyers came alongside and we were immediately transhipped to them. Previously to this though, the “Malda” had left Lemnos Harbour with us and taken a few hours trip to some place unknown. It was at this place that the destroyers joined us and our Company went on board the “Colne” and we steamed away from the “Malda” in the direction of the Dardanelles. We were all crowded on the deck, quite comfortable, and at 3 a.m. hot cocoa was served out to all hands. About this time the “Colne” stopped and it was 4.30 a.m. before she moved on again. We had not gone far before land could be seen ahead and we all then got into small boats which were alongside. The order was given to push off and make for land, just as day was beginning to break. The oarsmen gave way with a will and we were still 100 yards from shore when the exciting times commenced. There were six boat-loads of us and many others from other destroyers and cruisers all making for the shore at once. The Turks must have been expecting us for their bullets began to fly all round the boats. Luckily not one in our boat was hit but others did not get off so well, for one fellow was killed and many were wounded. When our boat grounded we jumped out, almost up to the hips in water and made for the shore. It was my luck to step into a hole and I went almost under water, getting my rifle wet, but I managed to get to land otherwise unhurt. George Thomas was with us and gave the order to “Fix bayonets, open out and advance.” Ahead of us was a steep hill covered with thick undergrowth from 2 feet to 5 feet high and forming excellent cover for the enemy and also ourselves, but not bullet-proof. We got to the top of the first hill, about 100 feet high, in quick time and without mishap, the Turks retreating before us as we advanced. Ahead of us as far as we could see the country was all hills and gullies covered with the same thick undergrowth. It was now broad daylight and as we forged onward an occasional bullet would whiz past unpledasantly close, but the enemy were poor rifle shots, for when we got to the top of the next hill only two had been wounded. We all got mixed up as we advanced owing to the nature of the country and I lost sight of most of my own mates. At this point not many of the enemy were opposed to us, although we came across many abandoned kit-bags and gear, as if they had left in a hurry. But on our left the firing was fairly heavy and continuous so the party I was with moved in that direction and we were soon in the thick of it. By this time many British battleships had opened fire on the Turkish forts and also on the enemy artillery, their shells flying over our heads and making an awful row. We drove the Turks back and captured four guns, many tents and ammunition, but reinforcements did not come up to us fast enough and we were forced to retire – but not for long. The enemy took up a strong position behind the top of a hill and there were many thousands of them including many German officers. They easily outnumbered us and had plenty of artillery and machine guns. All we had to depend on was our rifle fire and 1 or 2 machine guns so their advantage over us was indeed great. <br>The fire of the enemy was absolutely murderous but our fellows advanced again and again and were dropping in all directions but would not be stopped. That Sunday the Australians proved what stuff they were made of and many a one made a hero of himself, and many a poor fellow died urging his mates onward with his last breath. The hail of bullets was simply awful and the shrapnel shells were bursting round us all the time. They must have expended a marvellous amount of ammunition. Many of our officers were shot down and most of the time we got no orders at all but had to rely on ourselves and do the best we could. At any time we did happen to see an officer the order was always the same, “Get ahead, lads, and stick it into them.” Another advantage the Turks had over us was a thorough knowledge of the country and they had the ranges for their fire. And I suppose they were fresh too, but we had been up all the night before, got wet coming ashore and had had no breakfast, although we had food in our haversacks but had no time to eat it. The Battalions were all mixed up and I saw very few of my own Coy.. Once I spotted Monty Woodyatt and gave him a call; he yelled out to me to come his way and we both forged ahead but got seperated almost immediately and I never saw him again. I heard later that he had been shot dead but do not yet know if it is true. Shortly after seeing Monty I joined Geo. Thomas and Billy Money behind some bush and the bullets were raining around us thick and fast. The cries of the wounded men about us were deadly and there were no stretcher-bearers about. Our position became too hot for us so Bill Money and I dashed ahead; I do not know how the bullets managed to miss us. We kept going ahead in short rushes and soon were almost near enough to resume firing again. As usual we were lying down behind bushes which formed a good cover but were not bullet proof. We had only been in this position a few minutes when I felt a thud in the back and afterwards found that a bullet had ripped the side of my haversack and tore a hole through a tin of “bully-beef” that I had in it. Our haversacks were strapped to our backs for convenience. It was a close shave but everyone was getting used to close shaves by then. You know, Mother, it might sound like skite but I’m satisfied that the old tale that a soldier nearly dies of fright when first under fire is all bosh. I heard many of our fellows say the same thing. It makes you feel a bit uncomfortable but it also makes you want to get at the enemy and pay it all back with interest. There was one bad point about our fellows, they were too eager and rushed ahead in any sort of order, often exposing themselves unneccessarily. Within a minute of getting one in my haversack, I heard a groan beside me and saw Bill Money’s head drop. We were lying at full length on our stomachs. He said, “Ray, I’m hit” and I, with the aid of another chap who was near turned him over and got his equipment off. <br>When I opened out his coat and shirt there was a bullet hole showing high up on his left breast, it might have been in the shoulder blade and very little blood was coming from it. Poor old Bill was almost unconscious and asked me if it had touched his heart. Of course I told him that it had not and that it would be alright. We managed to put on his “first field dressing” [one of which we all carry] and gave him a drink of water. We made him as comfortable as possible under the circumstances and I stacked his gear in front of his head so as to stop another bullet from hitting him. All the time I was expecting to get lobbed myself for the fire of the enemy was simply hellish. So fast and thick were the bullets coming that some of the time the sound of them was for all the world like the buzz of an electric fan – a continual hum. We had only just got Bill fixed when another chap on the other side of me was shot through the arm. The bullet must have cut an artery for when I cut open his sleeve the blood poured out and my hands were smothered in blood. We bound his arm as well as we could and told him to crawl to the rear. Two other chaps near us stopped bullets so I thought it was time to stop attending to wounded men for it is greatly against military rules for riflemen to stop to attend to wounds. Everyone unhurt was needed in the firing line, so I had another look at Bill Money who seemed quite unconscious and then retired a little to see if I could get any stretcher-bearers but there were none about and they were yelling out for more men so I joined a few chaps who were advancing and moved up with them. We went to the right of where I had left poor old Bill, so I did not see him again. Later in the day one of my Company told me he had seen Bill making his way towards the beach so I am in hopes that he is getting on alright. I would give anything to be sure of it. As we advanced the fire, if possible, became hotter but I seemed to bear a charmed life, one bullet ripped through my left coat sleeve at the wrist without touching my arm. Shortly afterwards, when lying down, my water bottle stopped one and I lost all the water, which was a serious loss indeed. But I had a still narrower escape when a bullet tore through the collar of my tunic right under my chin. The badge must have turned it aside for there is a dent in it and a little bit of lead sticking to it. My collar was turned up a little for the bullet hit from the underneath side. I am thinking of cutting it off and sending it home to you for a keepsake. It was not till about 3 p.m. that I was put out of action, when we were giving the Turks some hot fire and, of course, getting it hot in return. Their shrapnel was very deadly and we would hear the shells go whizzing over our heads and then go off with a bang. These shells contain hundreds of bullets and when they burst the bullets fly out. It was a shrapnel bullet that got me. A shell burst just a few yards to the left of me [I was lying down] and the sensation I got was as if someone had hit me with a large club full force on the muscle on the left arm. At the same time something hit me on the right forearm and left a black bruise there. My left arm was now useless and the blood was flowing freely so I thought it was time to retire and accordingly did so, dodging bullets all the time. A few hundred yards back from the firing line I met one of our sergeants (what the hell’s the Sgt. doing there? D.B.) who put on my first field dressing. <br>I saw then that a bullet had gone right through my arm near the shoulder, the hole in each side being about half an inch in diameter. I had nearly two miles to go to the beach – it was a deadly journey. I expected to get a few more gentle reminders from the beastly Turks for stray bullets were whistling about all the time. Anyway I got to the beach without further harm and now I am none the worse for my experience. It was hard luck to be put out of action the first day, but still I had about ten hours of it - and it was hot stuff,too. Some old soldiers who have been in action before say they have never seen or heard anything like it. They say there would be nothing in France to equal it. It was a very severe day for the Australians and we suffered heavily. Colonel Lee [who was shot through the hand] was greatly cut up and was heard to exclaim, “Oh! My poor Ninth, my poor Ninth, they will be cut to pieces, they are bearing the brunt of it all.” The scene on the beach in the afternoon was awful – the doctors and ambulance men had their hands full; wounded men were lying everywhere. I saw George Thomas and Billy McGowan on the beach, both wounded in the shoulder, the former rather badly, I think. Even on the beach we were not too safe for the enemy were firing on the battleships and their shrapnel was bursting over us all the time. Unless you happened to be there you would hardly credit how marvellous were some of the escapes from death and the many different kinds of wounds showed that after all there are not many parts of the human body on which bullets prove fatal. One chap was shot right through the head, the bullet going in about an inch behind one eye and coming out an inch behind the other. He is not much the worse for it except that he has two lovely black eyes and they are nearly closed up, but his sight is not injured. There are many fellows with bullets still in their heads and they are doing alright. One poor chap was struck deaf and dumb by the bursting of a shrapnel shell close over his head but was otherwise unhurt. Another fellow who had half his face blown off just coolly finished himself off with his own rifle. A mate of his was with him at the time. Dear Mother, I suppose you will think I am giving you too much of the horrors of war, but I thought you all would like to know all I could tell you about our first engagement. Here is one amusing incident to tone it down a little. A private was lying down behind cover near the firing line when someone else dashed up and dropped down beside him. The private noticed at once that he had no rifle so he roared at him, “What are you doing up here without a rifle you d----- fool.” The other fellow [who happened to be an officer] just calmly replied, “Officers don’t carry rifles, you d----- fool.” I suppose the private would feel rather small, that is, if he had time to. As quickly as possible the wounded were taken off in boats – the very bad cases going to the Hospital ship and the others to the transport ships that were lying near. About 800 [including myself] were placed on board the Clan MacGillivary; the hospital ship was filled and two or three other troopships, so you can see there was a great number of wounded, somewhere about 5,000 I think. It was near 5 p.m. when we boarded the Clan Mac - and did not leave her till this morning. Since then we have, I mean since we went on board the Clan Mac - up till this morning, we have slept on the hard lower deck and lived on biscuits, cheese and jam. You know, dear Mother, we first went to Alexandria where they found there would not be room for us so only the worse cases were taken off. The next morning after our arrival there, the “Clan Mac” turned tail with us and made for Malta. We all growled a bit at first at being cooped up on board for a few more days but now I am glad for the climate here will be miles better than Egypt. Mr. Thomas was taken off at Alexandria. Capt. Jackson was wounded but he was on some other boat. I do not think his was a bad case. Nearly all our officers were wounded and I believe 2 or 3 were killed. Wed., May 5th. The Clan Mac dropped anchor in Malta harbour early yesterday morning and after breakfast we were taken ashore in lighters drawn by steam tugs. We are now quartered in barracks, 12 men being in each room and we are quite comfortable. I am on the 3rd Floor and there is a lovely view of the forts and the sea on one side and of the city on the other. We have electric light and plenty of water laid on and very convenient. The people are very kind and gave us a warm welcome. We are allowed to stroll about and yesterday many of us visited the English school, to the great delight of the kiddies, who seemed to think we were great heros. <br>They pestered the life out of us for badges and foreign coins and gave us great bunches of lovely flowers. Our room looks quite gay with the flowers I got. We had quite a gay time with the youngsters and the school mistress [who is a bosker girl] could get no work out of them for the rest of the day. Yesterday afternoon the school kids were going round with chocolates and cigarettes and also papers and magazines for the poor wounded Australians. This room in which I am writing was opened to us yesterday and paper, pens and ink supplied free – also soft drinks. The chaplain stationed here is a fine fellow and works hard for the entertainment of the soldiers as do also many of the ladies. And now dear home folk, I hope I have not wearied you with such a long epistle – anyway I am just about at the end of my tether, but will write again soon. I have no idea how long I will be here but reckon my arm will be quite well in a fortnight or less, so if my luck is in I may be back at the front before you get this letter. It is a long time since I had a letter and goodness knows when we are likely to get another mail. But keep on writing for we may get them sometime or other. I only hope you are all enjoying the best of health and continue to do so and that this letter reaches you alright. We have been told that these letters will not be censored. While at Alexandria I sent you a p.c. written in a hurry. Well, good-bye dear Mother, with the best of love to you all. Hope Dad is in good nick, also the girls and Herb. I would very much like to know if you got the news of the Australians fighting at Gallipoli and what the papers said about it. I think we did our duty.<br>
			</div>
			<div class="tabcontent" id="push">
				<h3>The "Big Push</h3><br>
				Lorem Ipsum
			</div>
			<div class="tabcontent" id="poziers">
				<h3>Battle of Poziers</h3><br>
				Lorem Ipsum
			</div>
			<div class="tabcontent" id="1917">
				<h3>1917</h3><br>
				Lorem Ipsum
			</div>
			<div class="tabcontent" id="medal">
				<h3>What it Takes to Win a Military Medal</h3><br>
				Lorem Ipsum
			</div>
		</div>
	</section>
    <footer id="footer" class="footer">
         <div class="w-container">
         <div class="footer-flex-container">
            <a href="index.php" class="footer-logo-link w-inline-block"><img src="../a2/media/nav-logo.png" alt="logo" class="footer-image"></a>
            <div class="footer-flex-container">
               <ul role="list" class="w-list-unstyled">
                  <li><a href="https://www.sites.google.com/site/anzacdouglasraymondbaker/link-to-related-material" class="footer-link">Realted Material</a></li>
                  <li><a href="mailto:ibak6837@bigpond.net.au" class="footer-link">Get In Touch</a></li>
                  <li><a href="postcards.php" class="footer-link">Letters and Postcards</a></li>
                  <li><a href="description.php" class="footer-link">Description</a></li>
                  <li><a href="#" class="footer-link">Site Map</a></li>
               </ul>
            </div>
            <div></div>
            <div></div>

         </div>
         <div>
            &copy;<script>
               document.write(new Date().getFullYear());
            </script> Quinn Goh, S3724287. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
         </div>
         <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
         <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
   </body>
</html>