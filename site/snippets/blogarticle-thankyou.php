<!-- Trying three different ways to surface Thank You image + metadata -->
<!-- Option 2: via markdown in each blogarticle.txt  -->
<!-- This works for image only, no metadata (field needs to be put back into markdown) -->
<?php if(!$page->thankyou()->empty()): ?>
    
    <details class="postsectiondetails" open>

    	<summary class="sectionsummary postpagesectionsummary blackbg"><h3>Thank You!
    		</h3>
   		</summary>

    <!-- Calling the ThankYou field from the blogarticle.txt  -->
    <span class="s-textface">
    	<?php echo kirbytext($page->thankyou()) ?>
    </span>

	</details>

<?php endif ?>