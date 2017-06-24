<?php snippet('head-open') ?>


<?php snippet('share-settings-common') ?>


<?php snippet('share-settings-other') ?>


<?php snippet('head-close') ?>

        
    <!-- I MOVED THE HOME GLASSES ICON INTO THE 'menu' SNIPPET SO CALLING IT NOW INSTEAD OF 'internal-menu' SNIPPET -->
    <?php snippet('menu') ?>


    <main>

        <div class="desktopcontent">

            <!-- title of the page -->
            <!-- NOT SURE IF THIS WILL END UP STAYING AS <h2> -->
            <h2 class="extracontentpagetitle">
                <?php echo $page->title()->kirbytext() ?>
            </h2>


            <!-- intro text for the page -->
            <!-- NOT SURE IF THIS WILL STAY AS <p> -->
            <span class="l-textface">
                <?php echo $page->text()->kirbytext() ?>
            </span>

        </div>
    
    </main>


    <div id="librarysection">

        <!-- option 3: images + info stored in library folder directly (not library/libraryimages) -->
        <!-- to get rid of nav images at bottom -->
        <!-- info here is from metadata, info on blog article pages is from blogarticle.txt fields + custom CSS -->
        <?php foreach ($page->images()->sortBy('modified', 'desc') as $libraryresult): ?>
        
        <?php $librarysubpage = $libraryresult->name(); ?>  


        <!-- THIS "SECTION" HTML ELEMENT WAS ALREADY HERE WITH THE DEFAULT KIRBY SETUP, 
        SO I'M LEAVING IT FOR NOW SO THE DEFAULT CSS WORKS -->
        <article id="<?php echo $librarysubpage ?>" class="libraryentry">
            

            <div id="libraryentrysummary">

                <!-- COMMENTING OUT ANCHOR LINK WHILE I WORK ON THE JAVASCRIPT -->
                <!-- image/icon of library entry, acting as link to its subpage (to be configured with JavaScript) -->                
                <!-- 
                <a href="<?php echo url('library#' . $librarysubpage) ?>" id="libraryiconlink">
                -->
                    <img src="<?php echo $libraryresult->url() ?>" alt="<?php echo $libraryresult->alt() ?>" id="libraryicon" class="<?php echo $librarysubpage ?>">
                <!-- 
                </a>
                -->

            </div>

            
            <!-- THIS WILL BE PULLED BY THE JAVASCRIPT INSTEAD -->
            <!--    
            <div id="libraryentrycontent">
            -->

            <!-- name of library entry -->
            <!--
            <p id="libraryentryname" class="s-display">
                <?php echo html($libraryresult->heading()) ?>
            </p>
            -->

            <!-- text for library entry -->
            <!--
            <span id="libraryentryabout" class="s-textface">
                <?php echo $libraryresult->about()->kirbytext() ?>
            </span>
            -->

            <!--
            </div>
            -->


        </article?>




            <!-- TESTING JAVASCRIPT -->
            <div id="testholder">
            </div>







        <?php endforeach ?>

    </div>


<script src="assets/js/library.js">
</script>
    

<?php snippet('footer') ?>


