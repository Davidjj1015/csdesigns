<?php

	$directory = 'images/gallery';
	$folders = cleanFolder(scandir($directory, SCANDIR_SORT_ASCENDING));

	$gallery_items = [];

	foreach($folders as $folder){
		$folder_contents = scandir($directory . "/" . $folder);
		$clean_folder_contents = cleanFolder($folder_contents);

		$files = [];

		foreach($clean_folder_contents as $file){
			array_push($files, $file);
		}

		$gallery_items[$folder] = $files;
	}

	function cleanFolder($arr){
		$clean = [];

		for($i = 0; $i < count($arr); $i++){
			if($arr[$i] != "." && $arr[$i] != ".."){
				array_push($clean, $arr[$i]);
			}
		}

		return $clean;
	}

?>

<section id="faqs">
<section>
<div class="containerg-fluid ">

<div class="dropdown">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="filterItems('all')">All Photos</button>
  	<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
	<?php foreach($folders as $group) : ?>
		<button class="dropdown-item" onclick="filterItems('<?= $group; ?>')"><?= $group; ?></button>
	<?php endforeach; ?>
	</div>
    
<br></br>
</section>

<section>
	<div class="grid-gallery">
    <div class="containerg-fluid">
    <div class="row p-0">
		<?php foreach($gallery_items as $folder_name => $folder) : ?>
			<?php
				$dir = $directory . "/" . $folder_name;
				$folder_name_clean = ucwords(str_replace("-", " ", $folder_name));
			?>

            
            <?php foreach($folder as $file) : ?>
                
                    
                        <div class="col-sm-6 p-0 col-md-4 col-lg-3 col-xl-2 gallery-grid-item p-2" data-gallery-group="<?= $folder_name; ?>">
                            <a class="lightbox gg-all" href="<?= $dir . "/" . $file; ?>" title="<?= $folder_name_clean; ?>">
                                <img id="imagecrop" class="img-fluid scale-on-hover" src="<?= $dir . "/" . $file; ?>" alt="">
                            </a>
                        </div>
                    
				
            <?php endforeach; ?>
            
        <?php endforeach; ?>
    </div>
    </div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script>
	
</section>
</section>

<?php include 'footer.php' ; ?>


<!-->
<section>

<link rel="stylesheet" href="../css/colorbox.css">
<script src="../js/colorbox.js"></script>
<script>

    var galleryFoldersRaw = '<?= json_encode($folders); ?>';
    var galleryFolders = JSON.parse(galleryFoldersRaw);

    $(document).ready(function(){
        $('.gg-all').colorbox({rel: 'gg-all'});
    });

    function filterItems(group){
        if(group === "all"){
            // Show all items
            $('.gallery-grid-item').css('display', 'block');

            // Set item links to all, then rebuild lightbox gallery
            $('.gallery-grid-item a').attr('class', 'gg-all');
            rebuildLightbox(group);
        } else {
            // Set class to hide all items
            $('.gallery-grid-item').addClass('gallery-unbound');

            // Remove class from items that still need display and hide others
            var groupElements = $("div[data-gallery-group='" + group + "']");
            groupElements.removeClass('gallery-unbound');
            groupElements.css('display', 'block');
            $('.gallery-unbound').css('display', 'none');

            // Set new classes and rebuild lightbox
            $("div[data-gallery-group='" + group + "'] a").addClass('gg-' + group);
            rebuildLightbox(group);
        }
    }
    function rebuildLightbox(folder){
        var folderClass = 'gg-' + folder;
        $('.' + folderClass).colorbox({rel: folderClass});
    }
</script>
</section>
</!-->
