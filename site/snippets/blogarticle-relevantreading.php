<!-- adding <section> to hold together all of RR -->
<section>

    <?php if(!$page->relevantreading1()->empty()): ?>
        
    <details open>

        <!-- MIGHT NEED TO ADD IN A HALF-SPACE VIA UTF-8 ENCODED CHARACTER OR SOMETHING, BETWEEN <summary> AND "Relevant" -->
        <summary class="sectionsummary blackbg"><h3>Relevant Reading
            </h3>
        </summary>

        <!-- THE 1ST OF 3 ALLOWED RELEVANT READING ARTICLES -->
        <?php foreach($page->relevantreading1()->pages() as $result): ?>

            <?php snippet('result', array('result' => $result)) ?>

        <?php endforeach ?>


        <!-- THE 2ND OF 3 ALLOWED RELEVANT READING ARTICLES -->
        <?php foreach($page->relevantreading2()->pages() as $result): ?>

            <?php snippet('result', array('result' => $result)) ?>

        <?php endforeach ?>


        <!-- THE 3RD OF 3 ALLOWED RELEVANT READING ARTICLES -->
        <?php foreach($page->relevantreading3()->pages() as $result): ?>

            <?php snippet('result', array('result' => $result)) ?>

        <?php endforeach ?>

    </details>


    <?php endif ?> 

</section>