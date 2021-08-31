<!DOCTYPE html>
<html lang="pl">


<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="faq.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>




 </head>
<body>



<?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
$title = 'Techmed';
require_once(__ROOT__.'/Techmed/includes/header.php'); 
?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                    <i class="mdi mdi-help-circle"></i> Najcześciej zadawane pytania
                </a>
                

                <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                    <i class="mdi mdi-account"></i> O biurze
                </a>
                <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                    <i class="mdi mdi-account-settings"></i> Nasze technologie
                </a>
                <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                    <i class="mdi mdi-heart"></i> Dla pacjenta
                
                <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
                    <i class="mdi mdi-help"></i> Pomoc generalna
                </a>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="tab-content" id="faq-tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <div class="accordion" id="accordion-tab-1">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Just once I'd like to eat dinner with a celebrity?</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Yes, if you make it look like an electrical fire. When you do things right, people won't be sure you've done anything at all. I was having the most wonderful dream. Except you were there, and you were there, and you were there! No argument here. Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be.</p>
                                    <p><strong>Example: </strong>Shut up and get to the point!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Bender, I didn't know you liked cooking?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>That's so cute. Can we have Bender Burgers again? Is the Space Pope reptilian!? I wish! It's a nickel. Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                                    <p><strong>Example: </strong>Okay, I like a challenge. Is that a cooking show? No argument here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">My fellow Earthicans?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>As I have explained in my book 'Earth in the Balance', and the much more popular 'Harry Potter and the Balance of Earth', we need to defend our planet against pollution. Also dark wizards. Fry, you can't just sit here in the dark listening to classical music.</p>
                                    <p><strong>Example: </strong>Actually, that's still true. Well, let's just dump it in the sewer and say we delivered it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Who am I making this out to?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat. Also Zoidberg. Can we have Bender Burgers again? Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords.</p>
                                    <p><strong>Example: </strong>Cruel though they may be...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                    <div class="accordion" id="accordion-tab-2">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1"> </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>Kif, I have mated with a woman. Inform the men. This is the worst part. The calm before the battle. Bender, being God isn't easy. If you do too much, people get dependent on you, and if you do nothing, they lose hope. You have to use a light touch. Like a safecracker, or a pickpocket.</p>
                                    <p><strong>Example: </strong>There's no part of that sentence I didn't like! You, a bobsleder!? That I'd like to see!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2">This opera's as lousy as it is brilliant?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>Your lyrics lack subtlety. You can't just have your characters announce how they feel. That makes me feel angry! It's okay, Bender. I like cooking too. Interesting. No, wait, the other thing: tedious.</p>
                                    <p><strong>Example: </strong>Of all the friends I've had… you're the first. But I know you in the future. I cleaned your poop. Then we'll go with that data file!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3">Who are you, my warranty?!</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>Oh, I think we should just stay friends. I'll tell them you went down prying the wedding ring off his cold, dead finger. Aww, it's true. I've been hiding it for so long. Say it in Russian! Then throw her in the laundry room, which will hereafter be referred to as "the brig".</p>
                                    <p><strong>Example: </strong> We're rescuing ya. Robot 1-X, save my friends! And Zoidberg! <em>Then we'll go with that data file!</em> Okay, I like a challenge.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-4" aria-expanded="false" aria-controls="accordion-tab-2-content-4">I haven't felt much of anything since my guinea pig died?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>And I'm his friend Jesus. Oh right. I forgot about the battle. OK, if everyone's finished being stupid. We'll need to have a look inside you with this camera. I'm just glad my fat, ugly mama isn't alive to see this day.</p>
                                    <p><strong>Example: </strong> Isn't it true that you have been paid for your testimony? Quite possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                    <div class="accordion" id="accordion-tab-3">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1">Bezpieczństwo</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>Urządenia jakie wykorzystujemy w naszej pracy </p>
                                    <p><strong>Example: </strong>I'm Santa Claus! Pansy. That's a popular name today. Little "e", big "B"?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2">Why am I sticky and naked?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>Did I miss something fun? Humans dating robots is sick. You people wonder why I'm still single? It's 'cause all the fine robot sisters are dating humans! Kids don't turn rotten just from watching TV.</p>
                                    <p><strong>Example: </strong>I usually try to keep my sadness pent up inside where it can fester quietly as a mental illness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3" aria-expanded="false" aria-controls="accordion-tab-3-content-3">Is that a cooking show?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can. You seem malnourished. Are you suffering from intestinal parasites? Check it out, y'all. Everyone who was invited is here. I am Singing Wind, Chief of the Martians.</p>
                                    <p><strong>Example: </strong>Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-4" aria-expanded="false" aria-controls="accordion-tab-3-content-4">You are the last hope of the universe?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-4" aria-labelledby="accordion-tab-3-heading-4" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>I don't want to be rescued. I videotape every customer that comes in here, so that I may blackmail them later. Ah, computer dating. It's like pimping, but you rarely have to use the phrase "upside your head."</p>
                                    <p><strong>Example: </strong>Tell them I hate them.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                    <div class="accordion" id="accordion-tab-4">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1" aria-expanded="false" aria-controls="accordion-tab-4-content-1">Jak umówić się na wizytę</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>Skontaktuj się z nami poprzez jeden z naszych medi</p>
                                    <p><strong>Example: </strong>I feel like I was mauled by Jesus. Hello, little man. I will destroy you!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-2" aria-expanded="false" aria-controls="accordion-tab-4-content-2">No, I'm Santa Claus?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-4-content-2" aria-labelledby="accordion-tab-4-heading-2" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>I meant 'physically'. Look, perhaps you could let me work for a little food? I could clean the floors or paint a fence, or service you sexually? When the lights go out, it's nobody's business what goes on between two consenting adults.</p>
                                    <p><strong>Example: </strong>Nay, I respect and admire Harold Zoid too much to beat him to death with his own Oscar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-3" aria-expanded="false" aria-controls="accordion-tab-4-content-3">Belligerent and numerous?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-4-content-3" aria-labelledby="accordion-tab-4-heading-3" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>Hey, what kinda party is this? There's no booze and only one hooker. I'm just glad my fat, ugly mama isn't alive to see this day. Wow! A superpowers drug you can just rub onto your skin? You'd think it would be something you'd have to freebase. Well, let's just dump it in the sewer and say we delivered it. You guys realize you live in a sewer, right? </p>
                                    <p><strong>Example: </strong>Oh Leela! You're the only person I could turn to; you're the only person who ever loved me.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-4" aria-expanded="false" aria-controls="accordion-tab-4-content-4">Take me to your leader?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-4-content-4" aria-labelledby="accordion-tab-4-heading-4" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>PUNY HUMAN NUMBER ONE, PUNY HUMAN NUMBER TWO, and Morbo's good friend, Richard Nixon. Interesting. No, wait, the other thing: tedious. All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school! Morbo can't understand his teleprompter because he forgot how you say that letter that's shaped like a man wearing a hat.</p>
                                    <p><strong>Example: </strong>If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                    <div class="accordion" id="accordion-tab-6">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-6-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">Doomsday device?</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                                <div class="card-body">
                                    <p>Ah, now the ball's in Farnsworth's court! We'll need to have a look inside you with this camera. Stop it, stop it. It's fine. I will 'destroy' you! Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                                    <p><strong>Example: </strong>So I really am important? How I feel when I'm drunk is correct?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-6-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-2" aria-expanded="false" aria-controls="accordion-tab-6-content-2">And so we say goodbye to our beloved pet, Nibbler?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-6-content-2" aria-labelledby="accordion-tab-6-heading-2" data-parent="#accordion-tab-6">
                                <div class="card-body">
                                    <p>Nibbler, who's gone to a place where I, too, hope one day to go. The toilet. But existing is basically all I do! I suppose I could part with 'one' and still be feared. I just told you! You've killed me!</p>
                                    <p><strong>Example: </strong>What's with you kids? Every other day it's food, food, food.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-6-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-3" aria-expanded="false" aria-controls="accordion-tab-6-content-3">Tell her you just want to talk?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-6-content-3" aria-labelledby="accordion-tab-6-heading-3" data-parent="#accordion-tab-6">
                                <div class="card-body">
                                    <p>It has nothing to do with mating. Soon enough. There, now he's trapped in a book I wrote: a crummy world of plot holes and spelling errors! Daylight and everything. Hey! I'm a porno-dealing monster, what do I care what you think?</p>
                                    <p><strong>Example: </strong>Is that a cooking show? It doesn't look so shiny to me. And why did 'I' have to take a cab?</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-6-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-4" aria-expanded="false" aria-controls="accordion-tab-6-content-4">Good man. Nixon's pro-war and pro-family?</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-6-content-4" aria-labelledby="accordion-tab-6-heading-4" data-parent="#accordion-tab-6">
                                <div class="card-body">
                                    <p>I don't 'need' to drink. I can quit anytime I want! THE BIG BRAIN AM WINNING AGAIN! I AM THE GREETEST! NOW I AM LEAVING EARTH, FOR NO RAISEN! There's one way and only one way to determine if an animal is intelligent. Dissect its brain!</p>
                                    <p><strong>Example: </strong>Guess again. Yeah, I do that with my stupidness. And when we woke up, we had these bodies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php  
require_once(__ROOT__.'/Techmed/includes/footer.php'); 
?>





</body>
</html>
