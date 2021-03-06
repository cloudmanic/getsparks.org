<?php 
    // requires - sparks and ratings
    $hide_username = isset($hide_username) ? $hide_username : false;
?>

<?php if(count($sparks) > 0): ?>
    <ul id="sparklisting">
        <?php foreach($sparks as $spark): ?>
            <li>
                <a href="<?php echo base_url(); ?>packages/<?php echo $spark->name; ?>/versions/HEAD/show" class="sparkinfo">
                    <div class="title">
                        <div class="sparkify">&nbsp;</div>
                        <span class="title_seg"><?php echo $spark->name; ?></span> 
                        <?php if (!$hide_username): ?>by <?php echo $spark->username; ?><?php endif; ?>
                    </div>
                    <div class="summary">
                        <?php if ($spark->is_official): ?>
                            <span class="official">Official Spark</span>
                        <?php endif; ?>
                        <?php echo $spark->summary; ?>
                    </div>
				</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <em>No sparks here, good sir!</em>
<?php endif; ?>
