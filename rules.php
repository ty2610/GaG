<html>
    <head>
        <title>Giant Airsoft Game</title>
        <!-- Jquery and BootStrap js files -->
        <script type="text/javascript" src="js/Vendor/jquery-3.2.1.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        <script type="text/javascript" src="js/Vendor/bootstrap.js"></script>
        <!-- CSS for BootStrap -->
        <link href="css/Vendor/bootstrap.css" rel="stylesheet">
        <link href="css/Vendor/bootstrap-theme.css" rel="stylesheet">
        <!-- local css and js -->
        <link rel="stylesheet" href="css/rules.css">
        <!-- global css -->
        <link rel="stylesheet" href="css/global.css">

    </head>

    <body>
        <div class="container" id="wholeDiv">
            <!-- NavBar -->
            <nav class="navbar navbar-inverse bg-inverse fifteenMarginBottom">
                <!--<a class="navbar-brand" href="http://www.twincitiesairsoft.com/index.html">
                    <img src="img/twin_cities_airsoft_logo_small.png">
                </a> -->
                <ul class="nav nav-justified">
                    <li class="nav-item">
                        <a class="navlogo" href="http://www.twincitiesairsoft.com/index.html">
                            <img src="img/twin_cities_airsoft_logo_small.png">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/details.php">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/map.php">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pictures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- End NavBar -->
            <!-- holder for everything but navbar -->
            <div id="contentHolder">
                <div class="row tenMarginBottom">
                    <div class="col-md-3">
                        <div class="ruleBox tenMarginTopAndBottom">
                            <ul class="list-unstyled textCentering noMarginBottom">
                                <li>
                                    <h3 class="noMarginTop">Where Credit is Due</h3>
                                </li>
                                <li>
                                    <p class="noMarginTop">Adopted from the MAA Rules - www.mnairsoft.org</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="ruleBox tenMarginTopAndBottom">
                            <ul class="list-unstyled textCentering noMarginBottom">
                                <li>
                                    <h3 class="noMarginTop">CASES</h3>
                                </li>
                                <li>
                                    <p class="noMarginTop">TCA requires all players who attend our events to transport their guns responsibly. Players are expected to have a good gun case, hard or soft, to carry and protect their Airsoft guns.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ruleBox tenMarginTopAndBottom textPadding">
                            <ul class="list-unstyled textCentering noMarginBottom">
                                <li>
                                    <h3 class="noMarginTop">For Starters</h3>
                                </li>
                                <li>
                                    <p class="noMarginTop">All players will need a barrel cover and a red dead rag. If you do not have them we sell barrel covers for $8 and Dead rags for $5</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-columns">
                    <div class="card noBorder">
                        <button id="parkingLotButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">PARKING LOT & STAGING AREA</h3>
                        </button>
                        <div id="parkingLotHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">There is no firing in the staging area. EVER! It doesn’t matter if the gun isn’t loaded (dry firing). Guns should remain on safe until you enter the field of play or are in an approved test fire or chronograph area.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">There should be no magazines in your guns in the staging area. EVER! This includes both rifles and pistols.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">You should have an actual (not homemade) barrel blocking device on the barrel of your gun. Pistols can be holstered. Acceptable barrel blocking devices include: barrel sleeves, barrel plugs, and barrel caps. Items such as gloves, socks, or your hand are never acceptable. Barrel blocking devices should be a standard piece of gear all Airsoft players own</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">In the event that a player is repairing an Airsoft gun they, should get clearance from organizers or staff before they attempt to cycle or dry fire.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="sniperRulesButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">SNIPER RULES</h3>
                        </button>
                        <div id="sniperRulesHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">FPS is what makes a gun a “sniper gun”, not the model. Any gun shooting over 400 FPS is considered a “sniper” weapon. Anything that shoots 400 FPS and under is considered a standard rifle. So if you have a BAR 10, M24, M700, APS, or even a Barrett that shoots under 400 FPS you will be allowed to play with it. If you have an M4 or a shotgun that shoots over 400 FPS it will be considered a “sniper” weapon and will not be allowed.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Maximum velocity allowed for Snipers is 500fps with no shots closer than 100 feet to opponent.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Any Sniper Weapons MUST NOT have the ability to fire FULL AUTO.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="eyeProtectionButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">EYE PROTECTION</h3>
                        </button>
                        <div id="eyeProtectionHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Eye protection is the most important piece of gear you have and we takes this very seriously. Our rules are strict for the safety of all players.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">ALL PLAYERS UNDER THE AGE OF 18 MUST WEAR A FULL FACE PAINTBALL MASK SYSTEM. NO EXCEPTIONS OR SUBSTITUTES.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">A balaclava and goggles is not the same as a full face paintball mask and is not allowed.</p>
                                <p class="noMarginTop">A full face mesh mask with full seal goggles underneath is not the same as a full face paintball mask and will not be allowed.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">The TCA requires eye protection that meets or exceeds ANSI Z 87.1 ratings but also is meant to be ballistic resistant. Shooting glasses/goggles, shop glasses, ski goggles, swim goggles and Military Sun, Wind & Dust goggles (SWD) are not allowed.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Goggles must be full seal, meaning they fit snugly around the eyes and leave no visible gaps that a BB may pass through.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">The TCA approves the use any paintball rated goggle system, specifically the SavePhace, JT and V-Force line, as well as Tactical Goggles made by companies such as ESS, Bolle, Wiley and Oakley.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">The TCA reserves the right to inspect and deny any eye protection we feel does not offer suitable protection to the user.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Full Face mask systems are always acceptable at Twin Cities Airsoft™ events but are optional for players over 18 at events. The TCA always recommends full face to players who want the most protection.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">The TCA does not allow mesh goggles, at all, regardless of age. Mesh face masks are allowed for players over the age of 18 but they must wear full seal goggles underneath.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Eye protection must be worn at all times by all participants (players, referees, or visitors) when on the field of play regardless of whether or not a game is in session or not. If your goggles fog up or are causing discomfort you should stop playing and exit the field immediately or request assistance from fellow players or games staff. Players are not allowed to do anything that breaks the full seal of the goggles.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Infractions of the eye protection rules are grounds for immediate expulsion from the event.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="enteringExitingButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">PROCEDURES FOR ENTERING & EXITING THE FIELD</h3>
                        </button>
                        <div id="enteringExitingHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">After you’ve been given a briefing on what kind of game you will be playing it will be time to enter the field of play. The following rules are very straight forward but need to be learned in the correct order to avoid issues.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <ol class="listNumberStyle noMarginBottom text-left">
                                    <li>
                                        <p class="noMarginTop">Put on and secure your eye protection. This is always your first step.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Enter the field of play. At some sites this may be a physical barrier (netting, a door, etc.) at others a simple marked boundary.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Remove your barrel blocking device.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Load your Airsoft gun.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Turn off your safety and play or test fire as needed.</p>
                                    </li>
                                </ol>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">When the game is done or you are leaving the field of play for any other reason the following procedures are required.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <ol class="listNumberStyle noMarginBottom text-left">
                                    <li>
                                        <p class="noMarginTop">Eject and stow your magazine.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Point your Airsoft gun in a safe direction and fire in semi 3-5 times to verify there are no remaining rounds.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Turn your gun to safe.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Affix your barrel blocking device.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Exit the field.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Take off your eye protection.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="engagementButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">RULES OF ENGAGEMENT</h3>
                        </button>
                        <div id="engagementHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <ol class="listNumberStyle noMarginBottom text-left">
                                    <li>
                                        <p class="noMarginTop">Shots anywhere to the body, including gear, count as a hit.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Gun hits do not count as an hit.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">No shots within a 10 feet radius unless in a Surrender situation (details below).</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">No “Blind Firing,” you must see your target and have your weapon shouldered or in direct line of site to the target.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Opposing players that unintentionally bump, crash, or otherwise meet by accident while searching for each other should both be considered out. This is to avoid point blank engagements or “panic fire.”</p>
                                    </li>
                                </ol>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">There is absolutely no aggressive physical contact allowed at TCA events. Fighting is grounds for immediate expulsion from the event. Depending on the severity of the incident the player may be banned from all future TCA events, public admonishment for their behavior, and if necessary law enforcement will be contacted.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Hit Recognition: When you are hit raise your hand(s) over your head and yell loudly “I’m hit!!” or otherwise signify you have been eliminated. Do this quickly and leave the area of engagement as quickly as you can to avoid getting in the way and avoid getting shot further. If you have a dead rag (bright red bandana or shop towel) pull it out and wave it to further indicate your eliminated status or place it on your head and exit the area.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Surrender Rules: The Minnesota Airsoft Association® does not allow players to engage targets within a 10-foot radius unless in a Surrender situation. The primary reason to make a Surrender call is to show respect for another player by not shooting, and possibly injuring, the player that you have the obvious and uncontested advantage over. The Surrender rule is in place to avoid point blank engagements.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">For a Surrender to be legitimate, the following condition must be met between the player asking for the Surrender (Attacking Player) and the Opposing Player:</p>
                                <p class="noMarginTop">The attacking player has totally surprised the opposing player and is in total control of the situation within the 10 foot no shoot radius. The opposing player cannot resist because they have been effectively flanked and were unaware of the attacker until they called for the Surrender.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Multiple players (such as players in a trench or bunker) can be surrendered, but only if the above condition applies to every player being Surrendered.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">The following is the proper procedure for calling a Surrender:</p>
                                <ol class="listNumberStyle noMarginBottom text-left">
                                    <li>
                                        <p class="noMarginTop">The attacking player is to have their Airsoft gun properly shouldered & aimed, finger off the trigger, and call out “Surrender” loud enough for the opponent to hear.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">The opponent is to respond immediately by calling out “I surrender,” “out,” “dead” or any other suitable response in a loud enough voice so that it can be heard.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Once a player Surrenders and calls themselves out, they may not be engaged.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Attempting a Surrender with a broken or empty gun is considered valid (though poor form). An unarmed player cannot call a Surrender.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Use of Plastic Training Knives is allowed and considered valid. Also called a “Knife Kill,” all tactile Surrender Calls must be honored immediately. Use of sticks, branches, or any other make-shift weapons to call for a Surrender is not allowed and will result in the immediate elimination of the Attacking player.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Players are not allowed to throw objects to obtain a Surrender.</p>
                                    </li>
                                    <li>
                                        <p class="noMarginTop">Players are not allowed to charge at others to obtain Surrenders.</p>
                                    </li>
                                </ol>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Players who attempt to Surrender an opponent must realize they run the risk of being shot at close range. Despite how “cool” some players think Surrender calls are, they should not be what you are striving for in a game. The purpose of Surrender calls is to keep people from getting hurt.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="FPSButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">FPS / FEET PER SECOND</h3>
                        </button>
                        <div id="FPSHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Our staff will shoot the guns and if it passes it will be tagged (usually a colored zip tie). If a player’s gun is over our limit, it will not be allowed. If a player is found to be playing with an unmarked and or previously unchecked gun they will be banned from all future events. No exceptions.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Outdoor FPS Rates:</p>
                                <p class="noMarginTop">400 FPS Max w/ .20g BB’s.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Changing the weight of BB to lower FPS does not change the energy of the round. This is why we do all our rating with .20 BB’s.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="emergencyButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">EMERGENCY PROCEDURES</h3>
                        </button>
                        <div id="emergencyHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">The TCA has a simple yet effective emergency procedure which we call the “Blindman Rule”. Whether it is an injury or game issue a Blindman call signifies the halting of all play immediately, no exceptions. If you have an issue or injury or see one you need to stop active play so yell out “Blindman” as loud as you can and continue until another player, game organizer or referee has come to assist you. The Blindman call should be echoed by all players and will continue until all players on the field have been notified.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Players not involved in the Blindman call must safety their weapons, and await further instructions. Players are not allowed to take advantage of this break in the action to advance to a better position; rather they should stay exactly where they are. Also, players should not remove their masks or safety gear until notified. Think of it as a time-out.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">When the Blindman call has been resolved the game organizers and referees will notify the players if/when the game will continue. Communication is key in these situations and should be taken seriously.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="honorButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">HONOR</h3>
                        </button>
                        <div id="honorHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Airsoft is a game of Honor and Sportsmanship. There is no paint like in paintball; no defining marks for hits, just one player’s word versus another and being that Airsoft rounds are relatively small it can be difficult sometimes to even feel a hit. Players tend to hear or see a hit more often than not, which means the opportunity to ignore hits and continue playing is always a possibility. Players who attend TCA events must strive to exemplify fair play and always call their hits, regardless of circumstance. In situations where a player isn’t sure, they should give their opponent the benefit of the doubt and simply call themselves out. Most of the games we play involve reincarnation, which means players will be back in the game in the matter of minutes.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Cheating will not be tolerated at TCA events. If a player is proven to be cheating they will be ejected from the event and depending on the severity of the circumstances may be banned from all future TCA events.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">It is also customary to acknowledge particularly good hits, just a simple “Nice Shot” call to the opposing player can make all the difference and you as a player stand out as a good sportsman.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card noBorder">
                        <button id="closingButton" class="titleBox tenMarginTopAndBottom">
                            <h3 class="noMarginTop noMarginBottom">IN CLOSING</h3>
                        </button>
                        <div id="closingHide" class="collapse">
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">If you ever have questions at events; be it during the safety briefing, before a game, hanging out in the staging area, or even if you need clarification on a rule, make sure to ask a game organizer or referee. The TCA staff is there for your safety and to make sure you know the rules.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Twin Cities Airsoft is not responsible for lost or stolen items. The police will be called if anyone is cought stealing.</p>
                            </div>
                            <div class="ruleBox tenMarginTopAndBottom textPadding">
                                <p class="noMarginTop">Any items left at TCA for more than 30 days will be given away, donated or thrown away.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $("#parkingLotButton").click(function(){
                    $("#parkingLotHide").collapse('toggle');
                });
                $("#sniperRulesButton").click(function(){
                    $("#sniperRulesHide").collapse('toggle');
                });
                $("#eyeProtectionButton").click(function(){
                    $("#eyeProtectionHide").collapse('toggle');
                });
                $("#enteringExitingButton").click(function(){
                    $("#enteringExitingHide").collapse('toggle');
                });
                $("#engagementButton").click(function(){
                    $("#engagementHide").collapse('toggle');
                });
                $("#FPSButton").click(function(){
                    $("#FPSHide").collapse('toggle');
                });
                $("#emergencyButton").click(function(){
                    $("#emergencyHide").collapse('toggle');
                });
                $("#honorButton").click(function(){
                    $("#honorHide").collapse('toggle');
                });
                $("#closingButton").click(function(){
                    $("#closingHide").collapse('toggle');
                });

            });
        </script>
    </body>
</html>