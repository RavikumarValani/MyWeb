<div id="contentHtml">

<?php
    $children = $this->getChildren();
    foreach ($children as $child) {
        echo $child->toHtml();
    }
        
?>
</div>

