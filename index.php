<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ChatIS Setup | IS2511, giambaJ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&family=Comfortaa:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&family=Indie+Flower&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" class="shadow" href="styles/shadow_small.css">
    <link rel="stylesheet" class="size" href="styles/size_small.css">
    <link rel="stylesheet" class="font" href="styles/font_OpenSans.css">
    <script src="jquery.min.js"></script>
<!--    <script src="https://unpkg.com/@popperjs/core@2"></script>-->
    <script src="purify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <img alt="Peepo" src="img/Peepo-533x533.png">
        <div>
            <h1>ChatIS</h1>
            <h2>Setup</h2>
        </div>

    </header>

    <section>
        <p style="font-size: 1.2rem;">
            <em>ChatIS</em> (<i>jChat</i> fork) is an overlay that allows you to show your Twitch chat on screen with OBS, XSplit, and any other streaming software that supports browser sources. It supports your
            <a href="https://betterttv.com/" target="_blank">BetterTTV</a>, <a href="https://www.frankerfacez.com/" target="_blank">FrankerFaceZ</a> and
            <a href="https://7tv.app/" target="_blank">7TV</a>  emotes. Also: auto-refresh on 7tv emotes updates, 7tv username paints.
            You have many options to customize your chat, like enabling a smooth animation for new messages, or fading old ones after some time. If you have
            a chat full of !gamble addicts, you can choose to hide bots and commands messages. It also comes with many fonts and styling options, maybe choose a custom font from your PC.
        </p>

        <p style="margin-bottom: 0.2rem;font-size: 1.2rem;">Feature list:</p>
        <ul id="feature-list" style="margin: auto auto 1rem;font-size: 1.2rem;">
            <li>Emotes from FFZ, BTTV, 7TV</li>
            <li>Badges from FFZ, BTTV, 7TV, FFZ:AP, Chatterino (+Homies)</li>
            <li>Use any font you have on your PC</li>
            <li>Ignore popular bots, add custom bots</li>
            <li>Stroke, shadow, animations, fade, etc</li>
            <li>Name paints from 7tv</li>
        </ul>


<!--        <div>-->
<!--            --><?php
//            error_reporting(0); // Disable errors
//            include 'v2/control/stats.php';
//            $stats = getTotalStatsCounters();
//            ?>
<!--            <p> Live <img src="img/red-circle.svg" alt="red circle" style="height: 0.6em;"> with ChatIS: <em>--><?php //echo $stats['live']; ?><!--</em> (total last 7 days: --><?php //echo $stats['lastWeek']; ?><!--) </p>-->
<!--        </div>-->


        <form name="generator">
            <div class="form_row center">

                <input type="text" name="channel" required placeholder="Channel name">
            </div>
            <div class="form_table">
                <div class="form_col">
                    <div class="form_row left">
                        <select name="size">
                            <option value="1" selected>Small</option>
                            <option value="2">Medium</option>
                            <option value="3">Large</option>
                        </select>
                        <label for="size">Size</label>
                    </div>
                    <div class="form_row left">
                        <select name="font">
                            <option value="0">[Custom]</option>
                            <option value="1">Baloo Tammudu</option>
                            <option value="2">Segoe UI (Chatterino)</option>
                            <option value="3">Roboto</option>
                            <option value="4">Lato</option>
                            <option value="5">Noto Sans</option>
                            <option value="6">Source Code Pro</option>
                            <option value="7">Impact</option>
                            <option value="8">Comfortaa</option>
                            <option value="9">Dancing Script</option>
                            <option value="10">Indie Flower</option>
                            <option value="11" selected>Open Sans</option>
                            <option value="12">Alsina (Vsauce)</option>
                        </select>
                        <label for="font">Font</label>
<!--                        <input type="text" name="fontCustom" class="hidden" placeholder="[WIP] Font name">-->
                    </div>
                    <div class="form_row left">
                        <input type="text" name="fontCustom" disabled="true" placeholder="Custom font name">
<!--                        <input type="text" name="fontCustom" placeholder="[WIP] Font name">-->
<!--                        <label for="fontCustom"><abbr title="Custom Font">C. Font</abbr></label>-->
                    </div>
                    <div class="form_row left">
                        <select name="stroke">
                            <option value="0" selected>Off</option>
                            <option value="1">Thin</option>
                            <option value="2">Medium</option>
                            <option value="3">Thick</option>
                            <option value="4">Thicker</option>
                        </select>
                        <label for="stroke">Stroke</label>
                    </div>
                    <div class="form_row left">
                        <select name="shadow">
                            <option value="0">Off</option>
                            <option value="1" selected>Small</option>
                            <option value="2">Medium</option>
                            <option value="3">Large</option>
                        </select>
                        <label for="shadow">Shadow</label>
                    </div>
                    <div class="form_row left">
                        <input type="text" name="emoteScale" placeholder="From 0 to 3" style="width: 160px;">
                        <label for="emoteScale">Emote scale</label>
                    </div>
                </div>
                <div class="form_col">
                    <div class="form_row right">
                        <label for="animate">Animate</label>
                        <input type="checkbox" name="animate">
                    </div>
                    <div class="form_row right">
                        <label for="bots">Show bots & commands</label>
                        <input type="checkbox" name="bots">
                    </div>
                    <div class="form_row right">
                        <label for="fade">Fade</label>
                        <input type="text" name="fade" value="30" class="short hidden"><span id="fade_seconds" class="hidden">sec</span>
                        <input type="checkbox" name="fade_bool">
                    </div>
                    <div class="form_row right">
                        <label for="small_caps">Caps</label>
                        <input type="checkbox" name="small_caps">
                    </div>
                    <div class="form_row right">
                        <label for="nl_after_name"><abbr title="New Line">NL</abbr> after name</label>
                        <input type="checkbox" name="nl_after_name">
                    </div>
                    <div class="form_row right">
                        <label for="hide_names">Hide usernames</label>
                        <input type="checkbox" name="hide_names">
                    </div>
                    <div class="form_row right">
                        <label for="badges">Hide special badges</label>
                        <input type="checkbox" name="special_badges">
                    </div>
                    <div class="form_row right">
                        <label for="homies_badges">Homies badges</label>
                        <input type="checkbox" name="show_homies">
                    </div>
<!--                    <div class="form_row right">-->
<!--                        <label for="markdown">Markdown</label>-->
<!--                        <input type="checkbox" name="md_image" class="short hidden"><span id="md_image" class="hidden">img</span>-->
<!--                        <input type="checkbox" name="markdown">-->
<!--                    </div>-->
                </div>
            </div>
            <div class="form_row center" id="botNamesContainer">
                <label for="botNames">Bot ignore list</label>
                <input type="text" name="botNames" placeholder="space or comma separated list of usernames">
            </div>

<!--            <div style="height: 6px;"></div>-->
<!--            <input id="updater" type="button" value="Refresh">-->
<!--            <div style="height: 6px;"></div>-->

            <div id="submit_container">
<!--                <span style="font-size: 12px; margin-left: 0.5rem; align-self: center;">(press Generate to update)</span>-->
                <div class="preview">
                    <span style="position: absolute;font-size: smaller;transform: rotate(10deg) translate(-80px, 5px);">click 👉</span>
                    <img id="brightness" src="img/light.png">
                    <label>Preview:</label>
                </div>
<!--                <iframe id="example" src="" frameborder="0">-->

<!--                </iframe>-->
                <div id="example">
                    <div class="chat_line"><span class="user_info"><img class="badge special" src="https://cdn.frankerfacez.com/badge/3/4" style="background-color: rgb(117, 80, 0);"><img class="badge special" src="https://cdn.7tv.app/badge/60d5998fb0ac44b85331fe2b/3x"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/3158e758-3cb4-43c5-94b3-7639810451c5/3"><span class="nick" style="color: rgb(38, 255, 0);">giambaJ</span>
                        <span class="colon">:</span>
                        </span><span class="message"><img class="cheer_emote" src="https://d3aqoihi2n8ty8.cloudfront.net/actions/cheer/light/animated/100/4.gif"><span class="cheer_bits">100</span> Nice chat <img class="emote" src="https://cdn.betterttv.net/frankerfacez_emote/341767/4"> <img class="emote" src="https://cdn.7tv.app/emote/6040aacfcf6746000db1034f/4x.webp"></span>
                    </div>
                    <div class="chat_line"><span class="user_info" data-nick="is2511"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/549c0448-102a-44b9-b273-4d901d8568f2/3"><img class="badge" src="https://cdn.7tv.app/badge/62f98190e46eb00e438a6970/3x"><span class="nick" style="color: rgb(138, 43, 226);">IS2511</span><span class="colon">:</span></span><span class="message">jChat <span style="text-decoration: line-through 0.1em;">but better</span> <img class="emote" src="https://cdn.7tv.app/emote/635656be3c9616b8c4af7652/4x.webp"> <img class="emote" src="https://cdn.7tv.app/emote/635656ad041a1a2f1fe1845b/4x.webp"></span></div>
                    <div class="chat_line" data-nick="weest"><span class="user_info"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/5527c58c-fb7d-422d-b71b-f309dcb85cc1/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/0eacd590-9185-4029-af43-2e3e1b8bacb6/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/d12a2e27-16f6-41d0-ab77-b780518f00a3/3"><span class="nick" style="color: rgb(153, 0, 255);">Weest</span><span class="colon">:</span></span><span class="message">THIS PLUGIN IS JUST WHAT I NEEDED <span class="emote-container"><img class="emote" src="https://cdn.7tv.app/emote/62ca599dafc685668feaad4a/4x.webp"></span></span></div>
                    <div class="chat_line" data-nick="iinnkii"><span class="user_info"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/97a70757-3089-4b0a-b330-13db00b836de/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/1d4b03b9-51ea-42c9-8f29-698e3c85be3d/3"><span class="nick" style="color: rgb(154, 205, 50);">iinnkii</span><span class="colon">:</span></span><span class="message">gay sex is good <img class="emote" src="https://cdn.betterttv.net/emote/59143b496996b360ff9b807c/3x.webp"></span></div>
                    <div class="chat_line" data-nick="tristianjones116"><span class="user_info"><img class="badge" src="https://cdn.frankerfacez.com/room-badge/mod/weest/4/rounded"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/549c0448-102a-44b9-b273-4d901d8568f2/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/0d85a29e-79ad-4c63-a285-3acd2c66f2ba/3"><span class="nick" style="color: rgb(255, 0, 0);">TristianJones116</span><span class="colon">:</span></span><span class="message"><img class="emote" src="https://cdn.7tv.app/emote/635638fe52859294efd5e123/4x.webp"></span></div>
                    <div class="chat_line" data-nick="batouttahell24"><span class="user_info"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/b817aba4-fad8-49e2-b88a-7cc744dfa6ec/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/7e56f380-d023-445e-8cfa-e41810f883bb/3"><span class="nick" style="color: rgb(176, 11, 105);">batouttahell24</span><span class="colon">:</span></span><span class="message">jchat 2: electric boogaloo <img class="emote" src="https://cdn.betterttv.net/frankerfacez_emote/483436/4"></span></div>
                    <div class="chat_line" data-nick="arturthefoe"><span class="user_info"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/7e56f380-d023-445e-8cfa-e41810f883bb/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/47308ed4-c979-4f3f-ad20-35a8ab76d85d/3"><span class="nick" style="color: rgb(255, 0, 204);">ArturTheFOE</span><span class="colon">:</span></span><span class="message"><img class="emote" src="https://cdn.7tv.app/emote/6356576b0940f1babfe4cb90/4x.webp"> moment</span></div>
                    <div class="chat_line" data-nick="koalas28"><span class="user_info"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/7e56f380-d023-445e-8cfa-e41810f883bb/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/73b5c3fb-24f9-4a82-a852-2f475b59411c/3"><span class="nick" style="color: rgb(210, 174, 244);">Koalas28</span><span class="colon">:</span></span><span class="message"><img class="emote" src="https://cdn.7tv.app/emote/60a4357289b7aa16a58f8e90/4x.webp"> <img class="emote" src="https://cdn.7tv.app/emote/60aea366ac03cad607fd97a4/4x.webp"></span></div>
                    <div class="chat_line" data-nick="dj_ziggy"><span class="user_info"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/dfc18196-4e90-4602-9691-638a7193728d/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/0d85a29e-79ad-4c63-a285-3acd2c66f2ba/3"><span class="nick" style="color: rgb(30, 144, 255);">DJ_Ziggy</span><span class="colon">:</span></span><span class="message">HELP IM STUCK <img class="emote" src="https://cdn.7tv.app/emote/60f626e831ba6ae622e55865/4x.webp"> A CHAT MESSAGE PREVIEW <img class="emote" src="https://cdn.betterttv.net/frankerfacez_emote/507334/4"></span></div>
                    <div class="chat_line" data-nick="jessekettle" data-time="1655411224176" data-id="fdece81c-bbdd-450b-bb11-25f767b1a2d5"><span class="user_info"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/b243b697-3836-4435-8235-84ac125ff256/3"><img class="badge" src="https://static-cdn.jtvnw.net/badges/v1/d12a2e27-16f6-41d0-ab77-b780518f00a3/3"><span class="nick" style="color: rgb(249, 165, 255);">jessekettle</span><span class="colon">:</span></span><span class="message"><a href="https://chatis.is2511.com/a/?cmd">!help</a></span></div>
                </div>
                <input type="submit" value="Generate">
            </div>
        </form>
        <div id="result" class="hidden">
            <div id="alert">Copied to clipboard</div>
            <input type="text" id="url" readonly>
            <p>Configure a new browser source on your streaming software with the given URL.</p>
<!--            <input type="button" id="reset" value="Reset">-->
        </div>

    </section>


    <h2>❓ Have a request? ❓</h2>
    <h2>🐞 Found a bug? 🐞</h2>
    <p style="margin-top: 0.5rem;margin-bottom: 0.2rem;">
        @IS2511 on
        <a href="https://twitter.com/IS2511/">Twitter</a>,
        <a href="https://twitch.com/is2511/">Twitch</a>
    </p>
    <p style="margin-top: 0.5rem; margin-bottom: 0.2rem;">
        <img src="img/is2511-discord.jpg" alt="IS2511 discord contact">
        <span style="position: absolute;margin-left: 1.5rem;">⬅️ to get a faster answer</span>
    </p>
    <a href="https://github.com/IS2511/ChatIS/issues" style="margin-bottom: 1.5rem;">Issues on GitHub</a>

<!--    <details>-->
<!--        <summary>Changelog</summary>-->
<!--        <div id="changelog"></div>-->
<!--    </details>-->



    <section id="donation">

        <details>
            <summary>Donate</summary>

            <div style="height: 10px"></div>

            <div style="display: flex; justify-content: center;">
                <h2 style="margin: 0.5rem;">IS2511:</h2>

                <div style="margin: auto 0.5rem auto auto;">
                    <a style="background-color: #3c3f41; border: #000000; padding: 10px; border-radius: 7px; font-size: 14px; line-height: 36px;" href="https://www.patreon.com/bePatron?u=475931" data-patreon-widget-type="become-patron-button">Patreon</a>
<!--                    <script async src="https://c6.patreon.com/becomePatronButton.bundle.js" crossorigin="anonymous"></script>-->
                </div>
                <div style="margin: auto auto auto 0.5rem;">
                    <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js' crossorigin="anonymous"></script>
                    <script type='text/javascript'>kofiwidget2.init('Donate on Ko-fi', '#3c3f41', 'G2G23SJQ3');kofiwidget2.draw();</script>
                </div>
            </div>

            <div style="height: 15px"></div>

            <div style="display: flex; justify-content: center;">
                <h2>giambaJ:</h2>
                <form action="https://www.paypal.com/donate" method="post" target="_top">
                    <input type="hidden" name="hosted_button_id" value="SRGWJ9QMHMHUG">
                    <input id="paypal" type="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" value="Donate">
                </form>
            </div>

        </details>

    </section>

    <footer>
<!--        <p>License: <img src="https://img.shields.io/github/license/IS2511/jChat" alt="license"><a href="LICENSE"> read</a></p>-->
        <p>ChatIS with &#10084; by <a href="https://is2511.com">IS2511</a>
            <a href="https://github.com/IS2511/ChatIS" target="_blank"><img class="github" src="img/github-icon.png"></a>
        </p>
        <p>jChat (original) with &#10084; by <a href="mailto:me@giambaj.it">giambaJ</a></p>
        <p>This application is not affiliated with <a href="https://www.twitch.tv/">Twitch</a></p>
    </footer>
</body>

</html>